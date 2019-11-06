<?php

namespace GlobalExam\Api\Sdk;

use Exception;
use GlobalExam\Api\Sdk\Authentication\AuthenticationInterface;
use GlobalExam\Api\Sdk\Authentication\ClientCredentialsGrant;
use GlobalExam\Api\Sdk\Authentication\PasswordCredentialsGrant;
use GlobalExam\Api\Sdk\Authentication\SocialCredentialsGrant;
use GlobalExam\Api\Sdk\Module\BoardModule;
use GlobalExam\Api\Sdk\Module\CountryModule;
use GlobalExam\Api\Sdk\Module\CouponModule;
use GlobalExam\Api\Sdk\Module\ExamModule;
use GlobalExam\Api\Sdk\Module\LanguageModule;
use GlobalExam\Api\Sdk\Module\MediaModule;
use GlobalExam\Api\Sdk\Module\OrganizationModule;
use GlobalExam\Api\Sdk\Module\PartnerModule;
use GlobalExam\Api\Sdk\Module\SkillModule;
use GlobalExam\Api\Sdk\Module\UserModule;
use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;

/**
 * Class Api
 *
 * @package GlobalExam\Api\Sdk
 */
class Api
{
    use BoardModule, CountryModule, CouponModule, ExamModule, LanguageModule, MediaModule, OrganizationModule, PartnerModule, SkillModule, UserModule;

    const API_VERSION = 'v1.0';

    /**
     * @var string
     */
    private $baseUrl = 'https://api.global-exam.com';

    /**
     * @var
     */
    private $isAuthenticated;

    /**
     * @var AuthenticationInterface
     */
    private $authenticator;

    /**
     * @var Client|null
     */
    private $client;

    /**
     * @var bool
     */
    private $verifiySsl;

    /**
     * Api constructor.
     *
     * @param AuthenticationInterface|null $authenticator
     * @param Client|null                  $client
     * @param bool                         $verifiySsl
     */
    public function __construct(AuthenticationInterface $authenticator = null, Client $client = null, $verifiySsl = true)
    {
        $this->authenticator = $authenticator;
        $this->client        = $client === null ? new Client() : $client;
        $this->verifiySsl    = $verifiySsl;
    }

    /**
     * @param string $baseUrl
     *
     * @return $this
     */
    public function setBaseUrl($baseUrl)
    {
        $this->baseUrl = $baseUrl;

        return $this;
    }

    /**
     * @return AuthenticationInterface
     */
    public function getAuthenticator()
    {
        return $this->authenticator;
    }

    /**
     * @param AuthenticationInterface $authenticator
     *
     * @return $this
     */
    public function setAuthenticator(AuthenticationInterface $authenticator)
    {
        $this->authenticator = $authenticator;

        return $this;
    }

    /**
     * @param array $body
     *
     * @return $this|mixed|ResponseInterface
     * @throws ApiException
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function login($body = [])
    {
        if ($this->authenticator === null) {
            throw new ApiException('Cannot login. You must specify the credentials first.');
        }

        $this->isAuthenticated = true;

        if ($this->authenticator instanceof PasswordCredentialsGrant || $this->authenticator instanceof ClientCredentialsGrant || $this->authenticator instanceof SocialCredentialsGrant) {
            return $this->oauth()->getToken($this->authenticator->getGrantType(), $body);
        }

        return $this;
    }

    /**
     * @param bool $clearCredentials
     *
     * @return $this
     * @throws ApiException
     *
     */
    public function logout($clearCredentials = false)
    {
        $this->isAuthenticated = false;

        if ($clearCredentials === false) {
            $this->clearCredentials();
        }

        return $this;
    }

    /**
     * @return $this
     * @throws ApiException
     *
     */
    public function clearCredentials()
    {
        if ($this->isAuthenticated() === false) {
            $this->authenticator = null;
        } else {
            throw new ApiException('You must logout before clearing credentials. Use `logout()` first.');
        }

        return $this;
    }

    /**
     * @return bool
     */
    public function isAuthenticated()
    {
        return $this->isAuthenticated;
    }

    /**
     * @param       $method
     * @param       $uri
     * @param array $body
     * @param array $params
     * @param array $headers
     *
     * @return mixed
     * @throws Exception
     *
     */
    public function send($method, $uri, array $body = [], array $params = [], array $headers = [])
    {
        $options = $this->prepareRequest($uri, $params, $headers);

        return $this->retry(5, function () use ($options, $method, $body) {
            return $this->client->request($method, $options['url'], [
                'headers' => $options['headers'],
                'json'    => $body,
                'verify'  => $this->verifiySsl,
            ]);
        }, 200);
    }

    /**
     * @param       $method
     * @param       $uri
     * @param array $body
     * @param array $params
     * @param array $headers
     *
     * @return mixed
     * @throws Exception
     */
    public function sendFile($method, $uri, array $body = [], array $params = [], array $headers = [])
    {
        $options = $this->prepareRequest($uri, $params, $headers);

        return $this->retry(5, function () use ($options, $method, $body) {
            return $this->client->request($method, $options['url'], [
                'headers'   => $options['headers'],
                'multipart' => $body,
                'verify'    => $this->verifiySsl,
            ]);
        }, 200);
    }

    /**
     * @param       $uri
     * @param array $params
     * @param array $headers
     *
     * @return array
     */
    private function prepareRequest($uri, array $params = [], array $headers = [])
    {
        $defaultHeaders = [
            'X-API-VERSION' => self::API_VERSION,
        ];

        $headers = array_merge($defaultHeaders, $headers);

        if ($this->isAuthenticated() && $this->authenticator !== null) {
            $headers = array_merge($headers, $this->authenticator->getHeaders());
        }

        $url = $this->baseUrl . '/' . $uri;

        if (count($params) > 0) {
            $url .= '?' . http_build_query($params);
        }

        return [
            'url'     => $url,
            'headers' => $headers,
        ];
    }

    /**
     * @param          $times
     * @param callable $callback
     * @param int      $sleep
     * @param null     $when
     *
     * @return mixed
     * @throws Exception
     *
     */
    private function retry($times, callable $callback, $sleep = 0, $when = null)
    {
        $attempts = 0;

        beginning:

        $attempts++;
        $times--;

        try {
            return $callback($attempts);
        } catch (Exception $e) {
            if ($times < 1 || ($when && !$when($e))) {
                throw $e;
            }

            if ($sleep) {
                usleep($sleep * 1000);
            }

            goto beginning;
        }
    }
}

/**
 * General API Exception
 */
class ApiException extends \Exception
{
}

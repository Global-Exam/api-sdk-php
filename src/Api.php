<?php

namespace GlobalExam\Api\Sdk;

use GlobalExam\Api\Sdk\Authentication\AuthenticationInterface;
use GlobalExam\Api\Sdk\Authentication\ClientCredentialsGrant;
use GlobalExam\Api\Sdk\Authentication\PasswordCredentialsGrant;
use GlobalExam\Api\Sdk\Module\BlogModule;
use GlobalExam\Api\Sdk\Module\BoardModule;
use GlobalExam\Api\Sdk\Module\CountryModule;
use GlobalExam\Api\Sdk\Module\CouponModule;
use GlobalExam\Api\Sdk\Module\ExamModule;
use GlobalExam\Api\Sdk\Module\MediaModule;
use GlobalExam\Api\Sdk\Module\OrganizationModule;
use GlobalExam\Api\Sdk\Module\SkillModule;
use GlobalExam\Api\Sdk\Module\StatsModule;
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
    use BlogModule, BoardModule, CountryModule, CouponModule, ExamModule, MediaModule, OrganizationModule, SkillModule, StatsModule, UserModule;

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
     * Api constructor.
     *
     * @param AuthenticationInterface|null $authenticator
     * @param Client|null                  $client
     */
    public function __construct(AuthenticationInterface $authenticator = null, Client $client = null)
    {
        $this->authenticator = $authenticator;
        $this->client        = $client === null ? new Client() : $client;
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
     * @throws ApiException
     *
     * @return $this|mixed|ResponseInterface
     */
    public function login()
    {
        if ($this->authenticator === null) {
            throw new ApiException('Cannot login. You must specify the credentials first.');
        }

        $this->isAuthenticated = true;

        if ($this->authenticator instanceof PasswordCredentialsGrant || $this->authenticator instanceof ClientCredentialsGrant) {
            return $this->oauth()->getToken($this->authenticator->getGrantType());
        }

        return $this;
    }

    /**
     * @param bool $clearCredentials
     *
     * @return $this
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
     * @throws ApiException
     *
     * @return $this
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
     * @param string $method
     * @param string $uri
     * @param array  $body
     * @param array  $params
     * @param array  $headers
     *
     * @return mixed|ResponseInterface
     */
    public function send($method, $uri, array $body = [], array $params = [], array $headers = [])
    {
        $options = $this->prepareRequest($uri, $params, $headers);

        return $this->client->request($method, $options['url'], [
            'headers' => $options['headers'],
            'json'    => $body,
        ]);
    }

    /**
     * @param string $method
     * @param string $uri
     * @param array  $body
     * @param array  $params
     * @param array  $headers
     *
     * @return mixed|ResponseInterface
     */
    public function sendFile($method, $uri, array $body = [], array $params = [], array $headers = [])
    {
        $options = $this->prepareRequest($uri, $params, $headers);

        return $this->client->request($method, $options['url'], [
            'headers'   => $options['headers'],
            'multipart' => $body,
        ]);
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
}

/**
 * General API Exception
 */
class ApiException extends \Exception
{
}

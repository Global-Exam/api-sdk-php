<?php namespace GlobalExam\Api\Sdk;

use GlobalExam\Api\Sdk\Authentication\AuthenticationInterface;
use GlobalExam\Api\Sdk\Authentication\OAuthPasswordGrant;
use GlobalExam\Api\Sdk\Resource\Organization\Organization;
use GlobalExam\Api\Sdk\Resource\User\User;
use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;

/**
 * @property AuthenticationInterface authenticator
 * @property Client|null             client
 */
class Api
{
    const API_VERSION = 'v1.0';

    /**
     * @var string
     */
    protected $baseUrl = 'http://api.global-exam.com';

    /**
     * @var
     */
    protected $authenticated;

    /**
     * @var AuthenticationInterface
     */
    public $authenticator;

    /**
     * Api constructor.
     *
     * @param AuthenticationInterface $authenticator
     * @param Client|null             $client
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
     * @return $this|mixed|ResponseInterface
     * @throws ApiException
     */
    public function login()
    {
        if ($this->authenticator === null) {
            throw new ApiException('Cannot login. You must specify the credentials first.');
        }

        $this->authenticated = true;

        if ($this->authenticator instanceof OAuthPasswordGrant) {
            return $this->user()->oauth()->getToken();
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
        $this->authenticated = false;

        if ($clearCredentials === false) {
            $this->clearCredentials();
        }

        return $this;
    }

    /**
     * @return $this
     * @throws ApiException
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
        return $this->authenticated;
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
        $defaultHeaders = [
            'Content-type'  => 'application/json',
            'X-API-VERSION' => self::API_VERSION
        ];

        $headers = array_merge($defaultHeaders, $headers);

        if ($this->isAuthenticated() && $this->authenticator !== null) {
            $headers = array_merge($headers, $this->authenticator->getHeaders());
        }

        $url = $this->baseUrl . '/' . $uri;

        if (count($params) > 0) {
            $url .= '?' . http_build_query($params);
        }

        return $this->client->request($method, $url, [
            'headers' => $headers,
            'body'    => json_encode($body)
        ]);
    }

    /**
     * @return Organization
     */
    public function organization()
    {
        return new Organization($this);
    }

    /**
     * @return Resource\User\User
     */
    public function user()
    {
        return new User($this);
    }

}

/**
 * General API Exception
 */
class ApiException extends \Exception
{
}

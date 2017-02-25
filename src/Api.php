<?php namespace GlobalExam\Api\Sdk;

use GlobalExam\Api\Sdk\Authentication\AuthenticationInterface;
use GlobalExam\Api\Sdk\Authentication\OAuthPasswordGrant;
use GlobalExam\Api\Sdk\Output\ArrayOutput;
use GlobalExam\Api\Sdk\Output\OutputInterface;
use GlobalExam\Api\Sdk\Resource\Organization\OrganizationType;
use GlobalExam\Api\Sdk\Resource\User\Auth;
use GlobalExam\Api\Sdk\Resource\User\OAuth;
use GlobalExam\Api\Sdk\Resource\User\User;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

/**
 * @property AuthenticationInterface authenticator
 */
class Api
{
    const API_VERSION = 'v1.0';

    protected $baseUrl = 'http://api.global-exam.com';
    protected $output;
    protected $authenticated;
    public    $authenticator;

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
        $this->output        = new ArrayOutput();
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
     * @param OutputInterface $output
     *
     * @return $this
     * @throws ApiException
     */
    public function setOutput(OutputInterface $output)
    {
        if ($this->authenticator instanceof OAuthPasswordGrant) {
            throw new ApiException('Could not change output with "OAuthPasswordGrant".');
        }

        $this->output = $output;

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
     * @return mixed|null
     * @throws ApiException
     */
    public function login()
    {
        if ($this->authenticator === null) {
            throw new ApiException('Cannot login. You must specify the credentials first. Pass a class to the constructor');
        }

        $this->authenticated = true;

        if ($this->authenticator instanceof OAuthPasswordGrant) {
            return $this->oauth()->getToken();
        }

        return $this;
    }

    /**
     * @param bool $clearCredentials
     */
    public function logout($clearCredentials = false)
    {
        $this->authenticated = false;

        if ($clearCredentials === false) {
            $this->clearCredentials();
        }
    }

    /**
     * @throws ApiException
     */
    public function clearCredentials()
    {
        if ($this->isAuthenticated() === false) {
            $this->authenticator = null;
        } else {
            throw new ApiException('You must logout before clearing credentials. Use logout() first');
        }
    }

    /**
     * @return mixed
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
     * @return \Psr\Http\Message\StreamInterface
     */
    public function send(string $method, string $uri, array $body = [], array $params = [], array $headers = [])
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

        try {
            $response = $this->client->request($method, $url, [
                'headers' => $headers,
                'body'    => json_encode($body)
            ]);

            return $this->output->transform($response->getBody());
        } catch (ClientException $e) {
            return $this->output->transform($e->getResponse()->getBody()->getContents());
        }
    }

    /**
     * @return Resource\User\User
     */
    public function user()
    {
        return new User($this);
    }

    /**
     * @return OrganizationType
     */
    public function organizationType()
    {
        return new OrganizationType($this);
    }

    /**
     * @return OAuth
     */
    public function oauth()
    {
        return new OAuth($this);
    }

    /**
     * @return Auth
     */
    public function auth()
    {
        return new Auth($this);
    }
}

/**
 * General API Exception
 */
class ApiException extends \Exception
{
}

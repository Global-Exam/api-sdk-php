<?php namespace GlobalExam\Api\Sdk\Resource\User;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Authentication\AuthorizationCodeGrant;
use GlobalExam\Api\Sdk\Authentication\PasswordCredentialsGrant;
use Psr\Http\Message\ResponseInterface;

/**
 * Class OAuth
 * @package GlobalExam\Api\Sdk\Resource\User
 */
class OAuth
{
    const RESOURCE_KEY = 'oauth';

    /**
     * @var
     */
    private $api;

    /**
     * User constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }

    /**
     * @return mixed|ResponseInterface
     */
    public function getToken()
    {
        /** @var PasswordCredentialsGrant $authenticator */
        $authenticator = $this->api->getAuthenticator();

        $body = [
            'grant_type'    => 'password',
            'client_id'     => $authenticator->getOAuthClient()->getClientId(),
            'client_secret' => $authenticator->getOAuthClient()->getClientSecret(),
            'username'      => $authenticator->getUsername(),
            'password'      => $authenticator->getPassword(),
            'scope'         => $authenticator->getScope()
        ];

        return $this->api->send('POST', self::RESOURCE_KEY . '/token', $body);
    }

    /**
     * @return mixed|ResponseInterface
     */
    public function renewToken()
    {
        /** @var AuthorizationCodeGrant $authenticator */
        $authenticator = $this->api->getAuthenticator();

        $body = [
            'grant_type'    => 'refresh_token',
            'client_id'     => $authenticator->getOAuthClient()->getClientId(),
            'client_secret' => $authenticator->getOAuthClient()->getClientSecret(),
            'refresh_token' => $authenticator->getRefreshToken(),
            'scope'         => $authenticator->getScope()
        ];

        return $this->api->send('POST', self::RESOURCE_KEY . '/token', $body);
    }
}

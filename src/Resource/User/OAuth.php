<?php

namespace GlobalExam\Api\Sdk\Resource\User;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Authentication\AuthorizationCodeGrant;
use GlobalExam\Api\Sdk\Authentication\PasswordCredentialsGrant;
use GlobalExam\Api\Sdk\Resource\Resource;
use Psr\Http\Message\ResponseInterface;

/**
 * Class OAuth
 *
 * @package GlobalExam\Api\Sdk\Resource\User
 */
class OAuth
{
    use Resource;

    const RESOURCE_KEY = 'oauth';

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
     * @param string $grantType
     *
     * @return mixed|ResponseInterface
     */
    public function getToken($grantType)
    {
        $authenticator = $this->api->getAuthenticator();

        switch ($grantType) {
            case 'password':
                /** @var PasswordCredentialsGrant $authenticator */
                $body = [
                    'grant_type'    => $grantType,
                    'client_id'     => $authenticator->getOAuthClient()->getClientId(),
                    'client_secret' => $authenticator->getOAuthClient()->getClientSecret(),
                    'username'      => $authenticator->getUsername(),
                    'password'      => $authenticator->getPassword(),
                    'scope'         => $authenticator->getScope(),
                ];
                break;
            case 'client_credentials':
                $body = [
                    'grant_type'    => $grantType,
                    'client_id'     => $authenticator->getOAuthClient()->getClientId(),
                    'client_secret' => $authenticator->getOAuthClient()->getClientSecret(),
                    'scope'         => $authenticator->getScope(),
                ];
                break;
            default:
                $body = [];
                break;
        }

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
            'scope'         => $authenticator->getScope(),
        ];

        return $this->api->send('POST', self::RESOURCE_KEY . '/token', $body);
    }
}

<?php

namespace GlobalExam\Api\Sdk\Resource\User;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Authentication\AuthorizationCodeGrant;
use GlobalExam\Api\Sdk\Authentication\PasswordCredentialsGrant;
use GlobalExam\Api\Sdk\Authentication\SocialCredentialsGrant;
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
     * @param       $grantType
     * @param array $extraBody
     *
     * @return mixed|ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getToken($grantType, $extraBody = [])
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
            case 'social':
                /** @var SocialCredentialsGrant $authenticator */
                $body = [
                    'grant_type'          => $grantType,
                    'client_id'           => $authenticator->getOAuthClient()->getClientId(),
                    'client_secret'       => $authenticator->getOAuthClient()->getClientSecret(),
                    'network'             => $authenticator->getNetwork(),
                    'access_token'        => $authenticator->getAccessToken(),
                    'access_token_secret' => $authenticator->getAccessTokenSecret(),
                    'scope'               => $authenticator->getScope(),
                ];
                break;
            default:
                $body = [];
                break;
        }

        return $this->api->send('POST', self::RESOURCE_KEY . '/token', array_merge($body, $extraBody));
    }

    /**
     * @return mixed|ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
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

<?php

namespace GlobalExam\Api\Sdk\Authentication;

/**
 * Class SocialCredentialsGrant
 *
 * @package GlobalExam\Api\Sdk\Authentication
 */
class SocialCredentialsGrant implements AuthenticationInterface
{
    /**
     * @var string
     */
    private $grantType = 'social';

    /**
     * @var OAuthClient
     */
    private $OAuthClient;

    /**
     * @var string
     */
    private $network;

    /**
     * @var
     */
    private $accessToken;

    /**
     * @var
     */
    private $accessTokenSecret;

    /**
     * @var string
     */
    private $scope;

    /**
     * @var array
     */
    private $headers;

    /**
     * SocialCredentialsGrant constructor.
     *
     * @param OAuthClient $OAuthClient
     * @param             $network
     * @param             $accessToken
     * @param null        $accessTokenSecret
     * @param string      $scope
     * @param array       $headers
     */
    public function __construct(OAuthClient $OAuthClient, $network, $accessToken, $accessTokenSecret = null, $scope = '', array $headers = [])
    {
        $this->OAuthClient       = $OAuthClient;
        $this->network           = $network;
        $this->scope             = $scope;
        $this->headers           = $headers;
        $this->accessToken       = $accessToken;
        $this->accessTokenSecret = $accessTokenSecret;
    }

    /**
     * @return string
     */
    public function getGrantType()
    {
        return $this->grantType;
    }

    /**
     * @return OAuthClient
     */
    public function getOAuthClient()
    {
        return $this->OAuthClient;
    }

    /**
     * @return string
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * @return string
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * @return string
     */
    public function getAccessTokenSecret()
    {
        return $this->accessTokenSecret;
    }

    /**
     * @return string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * @return array
     */
    public function getHeaders()
    {
        return $this->headers;
    }
}

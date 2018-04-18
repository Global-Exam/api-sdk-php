<?php

namespace GlobalExam\Api\Sdk\Authentication;

/**
 * Class OAuthTokenGrant
 *
 * @package GlobalExam\Api\Sdk\Authentication
 */
class AuthorizationCodeGrant implements AuthenticationInterface
{
    /**
     * @var string
     */
    private $grantType = null;

    /**
     * @var OAuthClient
     */
    private $OAuthClient;

    /**
     * @var string
     */
    private $accessToken;

    /**
     * @var string
     */
    private $refreshToken;

    /**
     * @var mixed
     */
    private $expiresIn;

    /**
     * @var string
     */
    private $scope = '';

    /**
     * @var array
     */
    private $headers = [];

    /**
     * AuthorizationCodeGrant constructor.
     *
     * @param OAuthClient $OAuthClient
     * @param array       $tokens
     * @param string      $scope
     * @param array       $headers
     */
    public function __construct(OAuthClient $OAuthClient, array $tokens, $scope = '', array $headers = [])
    {
        $this->OAuthClient  = $OAuthClient;
        $this->accessToken  = $tokens['access_token'];
        $this->refreshToken = isset($tokens['refresh_token']) === true ? $tokens['refresh_token'] : null;
        $this->expiresIn    = isset($tokens['expires_in']) === true ? $tokens['expires_in'] : null;
        $this->scope        = $scope;
        $this->headers      = array_merge(['X-CLIENT-ID' => $OAuthClient->getClientId()], $headers);
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
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * @return string
     */
    public function getRefreshToken()
    {
        return $this->refreshToken;
    }

    /**
     * @return mixed
     */
    public function getExpiresIn()
    {
        return $this->expiresIn;
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
        $headers = ['Authorization' => 'Bearer ' . $this->accessToken];

        return array_merge($headers, $this->headers);
    }

    /**
     * @param array $headers
     *
     * @return mixed|void
     */
    public function setHeaders(array $headers = [])
    {
        $this->headers = array_merge($this->headers, $headers);
    }
}

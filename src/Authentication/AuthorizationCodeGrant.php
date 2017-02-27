<?php namespace GlobalExam\Api\Sdk\Authentication;

/**
 * Class OAuthTokenGrant
 * @package GlobalExam\Api\Sdk\Authentication
 */
class AuthorizationCodeGrant implements AuthenticationInterface
{
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
    private $meta;

    /**
     * AuthorizationCodeGrant constructor.
     *
     * @param OAuthClient $OAuthClient
     * @param array       $tokens
     * @param string      $scope
     * @param array       $meta
     */
    public function __construct(OAuthClient $OAuthClient, array $tokens, $scope = '', array $meta = [])
    {
        $this->OAuthClient  = $OAuthClient;
        $this->accessToken  = $tokens['access_token'];
        $this->refreshToken = $tokens['refresh_token'];
        $this->expiresIn    = $tokens['expires_in'];
        $this->scope        = $scope;
        $this->meta         = $meta;
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
    public function getMeta()
    {
        return $this->meta;
    }

    /**
     * @return array
     */
    public function getHeaders()
    {
        return [
            'x-agent-country' => $this->meta['country'],
            'x-forwarded-for' => $this->meta['ip'],
            'Authorization'   => 'Bearer ' . $this->accessToken
        ];
    }
}

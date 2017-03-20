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
        $this->refreshToken = isset($tokens['refresh_token']) === true ? $tokens['refresh_token'] : null;
        $this->expiresIn    = isset($tokens['expires_in']) === true ? $tokens['expires_in'] : null;
        $this->scope        = $scope;
        $this->meta         = $meta;
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
    public function getMeta()
    {
        return $this->meta;
    }

    /**
     * @return array
     */
    public function getHeaders()
    {
        $headers = ['Authorization' => 'Bearer ' . $this->accessToken];

        if (isset($this->meta['subdomain']) === true) {
            $headers['Accept-Language'] = $this->meta['accept_language'];
        }

        if (isset($this->meta['subdomain']) === true) {
            $headers['x-subdomain'] = $this->meta['subdomain'];
        }

        if (isset($this->meta['country']) === true) {
            $headers['x-agent-country'] = $this->meta['country'];
        }

        if (isset($this->meta['ip']) === true) {
            $headers['x-forwarded-for'] = $this->meta['ip'];
        }

        return $headers;
    }
}

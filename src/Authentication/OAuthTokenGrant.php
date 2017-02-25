<?php namespace GlobalExam\Api\Sdk\Authentication;

/**
 * Class OAuthTokenGrant
 * @package GlobalExam\Api\Sdk\Authentication
 */
class OAuthTokenGrant implements AuthenticationInterface
{
    const CLIENT_ID     = 1;
    const CLIENT_SECRET = 'Yq7pUe8Ne1LRe6J2qS3kyBz9FNJkyMKYA1d471dz';

    /**
     * @var string
     */
    public $accessToken;

    /**
     * @var string
     */
    public $refreshToken;

    /**
     * @var mixed
     */
    public $expiresIn;

    /**
     * @var string
     */
    public $scope = '';

    /**
     * @var array
     */
    public $meta;

    /**
     * OAuthTokenGrant constructor.
     *
     * @param array  $credentials
     * @param string $scope
     * @param array  $meta
     */
    public function __construct(array $credentials, $scope = '', array $meta = [])
    {
        $this->accessToken  = $credentials['access_token'];
        $this->refreshToken = $credentials['refresh_token'];
        $this->expiresIn    = $credentials['expires_in'];
        $this->scope        = $scope;
        $this->meta         = $meta;
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

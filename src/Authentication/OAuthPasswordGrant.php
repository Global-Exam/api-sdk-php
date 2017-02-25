<?php namespace GlobalExam\Api\Sdk\Authentication;

/**
 * Class OAuthPasswordGrant
 * @package GlobalExam\Api\Sdk\Authentication
 */
class OAuthPasswordGrant implements AuthenticationInterface
{
    const GRANT_TYPE    = 'password';
    const CLIENT_ID     = 1;
    const CLIENT_SECRET = 'Yq7pUe8Ne1LRe6J2qS3kyBz9FNJkyMKYA1d471dz';

    /**
     * @var string
     */
    public $username;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var array
     */
    private $meta;

    /**
     * OAuthPasswordGrant constructor.
     *
     * @param string $username
     * @param string $password
     * @param string $scope
     * @param array  $meta
     */
    public function __construct(string $username, string $password, string $scope = '', array $meta = [])
    {
        $this->username = $username;
        $this->password = $password;
        $this->scope    = $scope;
        $this->meta     = $meta;
    }

    /**
     * @return array
     */
    public function getHeaders()
    {
        return [
            'x-agent-country' => $this->meta['country'],
            'x-forwarded-for' => $this->meta['ip']
        ];
    }
}

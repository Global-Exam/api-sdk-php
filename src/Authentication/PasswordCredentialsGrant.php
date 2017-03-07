<?php namespace GlobalExam\Api\Sdk\Authentication;

/**
 * Class OAuthPasswordGrant
 * @package GlobalExam\Api\Sdk\Authentication
 */
class PasswordCredentialsGrant implements AuthenticationInterface
{
    /**
     * @var string
     */
    private $grantType = 'password';

    /**
     * @var OAuthClient
     */
    private $OAuthClient;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $scope;

    /**
     * @var array
     */
    private $meta;

    /**
     * OAuthPasswordGrant constructor.
     *
     * @param OAuthClient $OAuthClient
     * @param string      $username
     * @param string      $password
     * @param string      $scope
     * @param array       $meta
     */
    public function __construct(OAuthClient $OAuthClient, $username, $password, $scope = '', array $meta = [])
    {
        $this->OAuthClient = $OAuthClient;
        $this->username    = $username;
        $this->password    = $password;
        $this->scope       = $scope;
        $this->meta        = $meta;
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
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
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
            'x-forwarded-for' => $this->meta['ip']
        ];
    }
}

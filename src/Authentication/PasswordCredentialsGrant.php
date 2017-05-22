<?php

namespace GlobalExam\Api\Sdk\Authentication;

/**
 * Class OAuthPasswordGrant
 *
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
    private $headers;

    /**
     * PasswordCredentialsGrant constructor.
     *
     * @param OAuthClient $OAuthClient
     * @param             $username
     * @param             $password
     * @param string      $scope
     * @param array       $headers
     */
    public function __construct(OAuthClient $OAuthClient, $username, $password, $scope = '', array $headers = [])
    {
        $this->OAuthClient = $OAuthClient;
        $this->username    = $username;
        $this->password    = $password;
        $this->scope       = $scope;
        $this->headers     = $headers;
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
    public function getHeaders()
    {
        return $this->headers;
    }
}

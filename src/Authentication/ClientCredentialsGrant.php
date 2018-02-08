<?php

namespace GlobalExam\Api\Sdk\Authentication;

/**
 * Class ClientCredentialsGrant
 *
 * @package GlobalExam\Api\Sdk\Authentication
 */
class ClientCredentialsGrant implements AuthenticationInterface
{
    /**
     * @var string
     */
    private $grantType = 'client_credentials';

    /**
     * @var OAuthClient
     */
    private $OAuthClient;

    /**
     * @var string
     */
    private $scope;

    /**
     * @var array
     */
    private $headers;

    /**
     * ClientCredentialsGrant constructor.
     *
     * @param OAuthClient $OAuthClient
     * @param string      $scope
     * @param array       $headers
     */
    public function __construct(OAuthClient $OAuthClient, $scope = '', array $headers = [])
    {
        $this->OAuthClient = $OAuthClient;
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

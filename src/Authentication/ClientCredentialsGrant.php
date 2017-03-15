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
     * ClientCredentialsGrant constructor.
     *
     * @param OAuthClient $OAuthClient
     * @param string      $scope
     */
    public function __construct(OAuthClient $OAuthClient, $scope = '')
    {
        $this->OAuthClient = $OAuthClient;
        $this->scope       = $scope;
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
        return [];
    }
}

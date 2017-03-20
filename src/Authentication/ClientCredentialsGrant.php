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
    private $meta;

    /**
     * ClientCredentialsGrant constructor.
     *
     * @param OAuthClient $OAuthClient
     * @param string      $scope
     * @param array       $meta
     */
    public function __construct(OAuthClient $OAuthClient, $scope = '', array $meta = [])
    {
        $this->OAuthClient = $OAuthClient;
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
        $headers = [];

        if (isset($this->meta['subdomain']) === true) {
            $headers['x-subdomain'] = $this->meta['subdomain'];
        }

        return $headers;
    }
}

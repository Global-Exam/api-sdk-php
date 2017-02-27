<?php namespace GlobalExam\Api\Sdk\Authentication;

/**
 * Class OAuthClient
 * @package GlobalExam\Api\Sdk\Authentication
 */
class OAuthClient
{
    /**
     * @var
     */
    private $clientId;

    /**
     * @var
     */
    private $clientSecret;

    /**
     * Credential constructor.
     *
     * @param $clientId
     * @param $clientSecret
     */
    public function __construct($clientId, $clientSecret)
    {
        $this->clientId     = $clientId;
        $this->clientSecret = $clientSecret;
    }

    /**
     * @return mixed
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * @return mixed
     */
    public function getClientSecret()
    {
        return $this->clientSecret;
    }
}

<?php namespace GlobalExam\Api\Sdk\Resource\User;

use GlobalExam\Api\Sdk\Api;
use Psr\Http\Message\ResponseInterface;

/**
 * Class OAuth
 * @package GlobalExam\Api\Sdk\Resource\User
 */
class OAuth
{
    const RESOURCE_KEY = 'oauth';

    /**
     * @var
     */
    private $api;

    /**
     * User constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }

    /**
     * @return mixed|ResponseInterface
     */
    public function getToken()
    {
        $authenticator = $this->api->authenticator;

        $body = [
            'grant_type'    => $authenticator::GRANT_TYPE,
            'client_id'     => $authenticator::CLIENT_ID,
            'client_secret' => $authenticator::CLIENT_SECRET,
            'username'      => $authenticator->username,
            'password'      => $authenticator->password,
            'scope'         => $authenticator->scope
        ];

        return $this->api->send('POST', self::RESOURCE_KEY . '/token', $body);
    }

    /**
     * @return mixed|ResponseInterface
     */
    public function renewToken()
    {
        $authenticator = $this->api->authenticator;

        $body = [
            'grant_type'    => 'refresh_token',
            'client_id'     => $authenticator::CLIENT_ID,
            'client_secret' => $authenticator::CLIENT_SECRET,
            'refresh_token' => $authenticator->refreshToken,
            'scope'         => $authenticator->scope
        ];

        return $this->api->send('POST', self::RESOURCE_KEY . '/token', $body);
    }
}

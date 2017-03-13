<?php namespace GlobalExam\Api\Sdk\Resource\User;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;
use Psr\Http\Message\ResponseInterface;

/**
 * Class Auth
 * @package GlobalExam\Api\Sdk\Resource\User
 */
class Auth
{
    use Resource;

    const RESOURCE_KEY = 'auth';

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
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function register(array $body)
    {
        return $this->api->send('POST', self::RESOURCE_KEY . '/register', $body);
    }

    /**
     * @param $token
     *
     * @return mixed|ResponseInterface
     */
    public function confirm($token)
    {
        return $this->api->send('GET', self::RESOURCE_KEY . '/confirm/' . $token);
    }

    /**
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function forgottenPassword(array $body)
    {
        return $this->api->send('POST', self::RESOURCE_KEY . '/forgotten-password', $body);
    }

    /**
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function resetPassword(array $body)
    {
        return $this->api->send('POST', self::RESOURCE_KEY . '/reset-password', $body);
    }
}

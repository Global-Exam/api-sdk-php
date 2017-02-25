<?php namespace GlobalExam\Api\Sdk\Resource\User;

use GlobalExam\Api\Sdk\Api;

/**
 * Class Auth
 * @package GlobalExam\Api\Sdk\Resource\User
 */
class Auth
{
    const RESOURCE_KEY = 'auth';

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
     * @param array $body
     *
     * @return \Psr\Http\Message\StreamInterface
     */
    public function create(array $body)
    {
        return $this->api->send('POST', self::RESOURCE_KEY . '/register', $body);
    }
}

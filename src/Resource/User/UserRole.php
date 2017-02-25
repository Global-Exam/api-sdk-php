<?php namespace GlobalExam\Api\Sdk\Resource\User;

use GlobalExam\Api\Sdk\Api;

/**
 * Class User
 * @package GlobalExam\Api\Sdk\Resource\User
 */
class UserRole
{
    const RESOURCE_KEY = 'user-role';

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
     * @param array $params
     *
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
    public function getAll(array $params = [])
    {
        return $this->api->send('GET', self::RESOURCE_KEY, [], $params);
    }
}

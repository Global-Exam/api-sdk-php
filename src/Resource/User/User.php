<?php namespace GlobalExam\Api\Sdk\Resource\User;

use GlobalExam\Api\Sdk\Api;

/**
 * Class User
 * @package GlobalExam\Api\Sdk\Resource\User
 */
class User
{
    const RESOURCE_KEY = 'user';

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
     * @return mixed
     */
    public function me()
    {
        return $this->api->send('GET', self::RESOURCE_KEY . '/me');
    }

    /**
     * @param null $sort
     *
     * @return mixed
     */
    public function getAll($sort = null)
    {
        $params = [
            'sort' => $sort
        ];

        return $this->api->send('GET', self::RESOURCE_KEY, [], $params);
    }
}

<?php namespace GlobalExam\Api\Sdk\Resource\Organization;

use GlobalExam\Api\Sdk\Api;

/**
 * Class User
 * @package GlobalExam\Api\Sdk\Resource\User
 */
class OrganizationType
{
    const RESOURCE_KEY = 'organization-type';

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
     * @param null $sort
     *
     * @return mixed
     */
    public function getAll($sort = null)
    {
        $params = [
            'sort' => $sort
        ];

        return $this->api->receive($this->api->send('GET', self::RESOURCE_KEY, [], $params));
    }
}

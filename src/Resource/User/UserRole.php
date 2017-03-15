<?php
namespace GlobalExam\Api\Sdk\Resource\User;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class UserRole
 *
 * @package GlobalExam\Api\Sdk\Resource\User
 */
class UserRole
{
    use Resource;

    const RESOURCE_KEY = 'user-role';

    /**
     * UserRole constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}

<?php namespace GlobalExam\Api\Sdk\Resource\User;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;
use Psr\Http\Message\ResponseInterface;

/**
 * Class UserProvider
 * @package GlobalExam\Api\Sdk\Resource\User
 */
class UserProvider
{
    use Resource;

    const RESOURCE_KEY = 'user-provider';

    /**
     * UserProvider constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}

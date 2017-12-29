<?php

namespace GlobalExam\Api\Sdk\Resource\Organization;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;
use Psr\Http\Message\ResponseInterface;

/**
 * Class Organization
 *
 * @package GlobalExam\Api\Sdk\Resource\Organization
 */
class Organization
{
    use Resource;

    const RESOURCE_KEY = 'organization';

    /**
     * Organization constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }

    /**
     * @param array $body
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function search(array $body = [], array $params = [])
    {
        return $this->api->send('POST', self::RESOURCE_KEY . '/search', $body, $params);
    }
}

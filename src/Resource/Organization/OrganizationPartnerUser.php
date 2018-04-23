<?php

namespace GlobalExam\Api\Sdk\Resource\Organization;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;
use GlobalExam\Api\Sdk\Resource\User\User;
use Psr\Http\Message\ResponseInterface;

/**
 * Class OrganizationPartnerUser
 *
 * @package GlobalExam\Api\Sdk\Resource\Organization
 */
class OrganizationPartnerUser
{
    use Resource;

    const RESOURCE_KEY = 'organization';

    /**
     * OrganizationType constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }

    /**
     * @param       $id
     * @param array $body
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return mixed|ResponseInterface
     */
    public function detachUser($id, array $body = [])
    {
        return $this->api->send('DELETE', static::RESOURCE_KEY . '/' . $id . '/partner/relationships/' . User::RESOURCE_KEY, $body);
    }
}

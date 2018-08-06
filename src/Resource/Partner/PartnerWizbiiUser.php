<?php

namespace GlobalExam\Api\Sdk\Resource\Partner;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class PartnerWizbiiUser
 *
 * @package GlobalExam\Api\Sdk\Resource\Partner
 */
class PartnerWizbiiUser
{
    use Resource;

    const RESOURCE_KEY = 'partner/wizbii/user';

    /**
     * PartnerWizbiiUser constructor.
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
     * @return mixed|\Psr\Http\Message\ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function deleteUser(array $body = [])
    {
        return $this->api->send('DELETE', self::RESOURCE_KEY, $body);
    }
}

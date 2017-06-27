<?php

namespace GlobalExam\Api\Sdk\Resource\Skill;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;
use Psr\Http\Message\ResponseInterface;

/**
 * Class Skill
 *
 * @package GlobalExam\Api\Sdk\Resource\Country
 */
class Skill
{
    use Resource;

    const RESOURCE_KEY = 'skill';

    /**
     * Skill constructor.
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
     * @return mixed|ResponseInterface
     */
    public function syncLanguage($id, array $body = [])
    {
        return $this->api->send('PATCH', static::RESOURCE_KEY . '/' . $id . '/relationships/language', $body);
    }
}

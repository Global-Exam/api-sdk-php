<?php

namespace GlobalExam\Api\Sdk\Resource\Stats;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;
use Psr\Http\Message\ResponseInterface;

/**
 * Class Stats
 *
 * @package GlobalExam\Api\Sdk\Resource\Stats
 */
class Stats
{
    use Resource;

    const RESOURCE_KEY = 'stats';

    /**
     * Stats constructor.
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
     * @return mixed|ResponseInterface
     */
    public function global(array $body = [])
    {
        return $this->api->send('POST', static::RESOURCE_KEY . '/global', $body);
    }

    /**
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function trainingMode(array $body = [])
    {
        return $this->api->send('POST', static::RESOURCE_KEY . '/training-mode', $body);
    }

    /**
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function examMode(array $body = [])
    {
        return $this->api->send('POST', static::RESOURCE_KEY . '/exam-mode', $body);
    }
}

<?php

namespace GlobalExam\Api\Sdk\Resource\Board;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;
use Psr\Http\Message\ResponseInterface;

class Board
{
    use Resource;

    const RESOURCE_KEY = 'board';

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
     * @return mixed|ResponseInterface
     */
    public function getAll(array $params = [])
    {
        return json_decode($this->api->send('GET', static::RESOURCE_KEY, [], $params)->getBody()->getContents(), true);
    }
}

<?php

namespace GlobalExam\Api\Sdk\Resource\Board;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;
use Psr\Http\Message\ResponseInterface;

/**
 * Class BoardLevel
 *
 * @package GlobalExam\Api\Sdk\Resource\Board
 */
class BoardLevel
{
    use Resource;

    const RESOURCE_KEY = 'board-level';

    /**
     * BoardLevel constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }

    /**
     * @param       $id
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getBoardModes($id, array $params = [])
    {
        return $this->api->send('GET', static::RESOURCE_KEY . '/' . $id . '/'. BoardMode::RESOURCE_KEY, [], $params);
    }
}

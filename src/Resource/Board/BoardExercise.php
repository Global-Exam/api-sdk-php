<?php

namespace GlobalExam\Api\Sdk\Resource\Board;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;
use Psr\Http\Message\ResponseInterface;

/**
 * Class BoardExercise
 *
 * @package GlobalExam\Api\Sdk\Resource\Board
 */
class BoardExercise
{
    use Resource;

    const RESOURCE_KEY = 'board-exercise';

    /**
     * BoardExercise constructor.
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
    public function getBoardTrainings($id, array $params = [])
    {
        return $this->api->send('GET', static::RESOURCE_KEY . '/' . $id . '/' . BoardTraining::RESOURCE_KEY, [], $params);
    }
}

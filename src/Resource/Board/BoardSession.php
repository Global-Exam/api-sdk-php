<?php

namespace GlobalExam\Api\Sdk\Resource\Board;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Exam\ExamPart;
use GlobalExam\Api\Sdk\Resource\Resource;
use Psr\Http\Message\ResponseInterface;

/**
 * Class BoardSession
 *
 * @package GlobalExam\Api\Sdk\Resource\Board
 */
class BoardSession
{
    use Resource;

    const RESOURCE_KEY = 'board-session';

    /**
     * BoardSession constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }

    /**
     * @param $id
     *
     * @return mixed|ResponseInterface
     */
    public function start($id)
    {
        return $this->api->send('PATCH', static::RESOURCE_KEY . '/' . $id . '/start');
    }

    /**
     * @param $id
     *
     * @return mixed|ResponseInterface
     */
    public function complete($id)
    {
        return $this->api->send('PATCH', static::RESOURCE_KEY . '/' . $id . '/complete');
    }

    /**
     * @param       $id
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getExamParts($id, array $params = [])
    {
        return $this->api->send('GET', static::RESOURCE_KEY . '/' . $id . '/relationships/' . ExamPart::RESOURCE_KEY, [], $params);
    }

    /**
     * @param       $id
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function syncExamPart($id, array $body = [])
    {
        return $this->api->send('PATCH', static::RESOURCE_KEY . '/' . $id . '/relationships/' . ExamPart::RESOURCE_KEY, $body);
    }

    /**
     * @param       $id
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getBoardTrainings($id, array $params = [])
    {
        return $this->api->send('GET', static::RESOURCE_KEY . '/' . $id . '/relationships/' . BoardTraining::RESOURCE_KEY, [], $params);
    }

    /**
     * @param       $id
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function syncBoardTraining($id, array $body = [])
    {
        return $this->api->send('PATCH', static::RESOURCE_KEY . '/' . $id . '/relationships/' . BoardTraining::RESOURCE_KEY, $body);
    }
}

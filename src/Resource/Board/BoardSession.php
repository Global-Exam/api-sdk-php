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
     * @param       $id
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function syncExamPart($id, array $body = [])
    {
        return $this->api->send('PATCH', static::RESOURCE_KEY . '/' . $id . '/relationships/' . ExamPart::RESOURCE_KEY, $body);
    }
}

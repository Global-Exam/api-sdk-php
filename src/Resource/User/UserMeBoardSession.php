<?php

namespace GlobalExam\Api\Sdk\Resource\User;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Exam\ExamPart;
use GlobalExam\Api\Sdk\Resource\Exam\ExamQuestion;
use GlobalExam\Api\Sdk\Resource\Resource;
use Psr\Http\Message\ResponseInterface;

/**
 * Class UserMeBoardSession
 *
 * @package GlobalExam\Api\Sdk\Resource\User
 */
class UserMeBoardSession
{
    use Resource;

    const RESOURCE_KEY = 'user/me/board-session';

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
     * @param $id
     * @param $examQuestionId
     * @param $file
     *
     * @return mixed|ResponseInterface
     */
    public function storeBoardSessionExamQuestionMediaAudio($id, $examQuestionId, $file)
    {
        return $this->api->sendFile('POST', static::RESOURCE_KEY . '/' . $id . '/' . ExamQuestion::RESOURCE_KEY . '/' . $examQuestionId . '/audio', [
            [
                'name'     => 'media',
                'contents' => $file,
            ],
        ]);
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
    public function attachBoardTraining($id, array $body = [])
    {
        return $this->api->send('POST', static::RESOURCE_KEY . '/' . $id . '/relationships/' . BoardTraining::RESOURCE_KEY, $body);
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
    public function attachExamPart($id, array $body = [])
    {
        return $this->api->send('POST', static::RESOURCE_KEY . '/' . $id . '/relationships/' . ExamPart::RESOURCE_KEY, $body);
    }
}

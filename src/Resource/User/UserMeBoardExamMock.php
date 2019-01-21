<?php

namespace GlobalExam\Api\Sdk\Resource\User;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;
use Psr\Http\Message\ResponseInterface;

/**
 * Class UserMeBoardExamMock
 *
 * @package GlobalExam\Api\Sdk\Resource\User
 */
class UserMeBoardExamMock
{
    use Resource;

    const RESOURCE_KEY = 'user/me/board-exam-mock';

    /**
     * UserMeBoardExamMock constructor.
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
     * @param array $params
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return mixed|ResponseInterface
     */
    public function searchUncompletedBoardSessions($id, array $body = [], array $params = [])
    {
        return $this->api->send('POST', self::RESOURCE_KEY . '/' . $id . '/board-session/search', $body, $params);
    }
}

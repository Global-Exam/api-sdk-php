<?php

namespace GlobalExam\Api\Sdk\Resource\User;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;
use Psr\Http\Message\ResponseInterface;

/**
 * Class UserMeAdaptative
 *
 * @package GlobalExam\Api\Sdk\Resource\User
 */
class UserMeAdaptative
{
    use Resource;

    const RESOURCE_KEY = 'user/me/adaptative';

    /**
     * UserMeAdaptative constructor.
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
        return $this->api->send('POST', self::RESOURCE_KEY . '/board-mode/' . $id . '/board-session/search', $body, $params);
    }

    /**
     * @param       $id
     * @param array $params
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return mixed|ResponseInterface
     */
    public function getNextExamPart($id, array $params = [])
    {
        return $this->api->send('GET', self::RESOURCE_KEY . '/board-session/' . $id . '/relationships/exam-part', $params);
    }
}

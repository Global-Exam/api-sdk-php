<?php

namespace GlobalExam\Api\Sdk\Resource\User;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Board\BoardLevel;
use GlobalExam\Api\Sdk\Resource\Exam\ExamQuestion;
use GlobalExam\Api\Sdk\Resource\Resource;
use Psr\Http\Message\ResponseInterface;

/**
 * Class UserMeStats
 *
 * @package GlobalExam\Api\Sdk\Resource\User
 */
class UserMeStats
{
    use Resource;

    const RESOURCE_KEY = 'user/me/stats';

    /**
     * UserMeStats constructor.
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
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getBoardLevels(array $params = [])
    {
        return $this->api->send('GET', static::RESOURCE_KEY . '/' . BoardLevel::RESOURCE_KEY, [], $params);
    }

    /**
     * @param array $body
     *
     * @return mixed|ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getGlobal(array $body = [])
    {
        return $this->api->send('POST', static::RESOURCE_KEY . '/global', $body);
    }

    /**
     * @param int   $boardSessionId
     * @param int   $examQuestionId
     * @param array $params
     *
     * @return mixed|ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getBoardSessionExamQuestion(int $boardSessionId, int $examQuestionId, array $params = [])
    {
        return $this->api->send('GET', static::RESOURCE_KEY . '/board-session/' . $boardSessionId . '/' . ExamQuestion::RESOURCE_KEY . '/' . $examQuestionId, [], $params);
    }
}

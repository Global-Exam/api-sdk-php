<?php

namespace GlobalExam\Api\Sdk\Resource\User;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Board\BoardExamMock;
use GlobalExam\Api\Sdk\Resource\Board\BoardExercise;
use GlobalExam\Api\Sdk\Resource\Board\BoardSession;
use GlobalExam\Api\Sdk\Resource\Board\BoardTraining;
use GlobalExam\Api\Sdk\Resource\Exam\ExamQuestion;
use GlobalExam\Api\Sdk\Resource\Resource;
use GlobalExam\Api\Sdk\Resource\Stats\Stats;
use Psr\Http\Message\ResponseInterface;

/**
 * Class UserMeStatsExamMode
 *
 * @package GlobalExam\Api\Sdk\Resource\User
 */
class UserMeStatsExamMode
{
    use Resource;

    const RESOURCE_KEY = 'user/me/stats/exam-mode';

    /**
     * UserMeStatsExamMode constructor.
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
    public function getGlobal(array $body = [])
    {
        return $this->api->send('POST', static::RESOURCE_KEY . '/global', $body);
    }

    /**
     * @param int   $boardExamMockId
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getBoardExamMockBoardSessions(int $boardExamMockId, array $params = [])
    {
        return $this->api->send('GET', static::RESOURCE_KEY . '/' . BoardExamMock::RESOURCE_KEY . '/' . $boardExamMockId . '/' . BoardSession::RESOURCE_KEY, [], $params);
    }

    /**
     * @param int   $boardSessionId
     * @param array $params
     *
     * @return mixed|ResponseInterface$
     */
    public function getBoardSession(int $boardSessionId, array $params = [])
    {
        return $this->api->send('GET', static::RESOURCE_KEY . '/' . BoardSession::RESOURCE_KEY . '/' . $boardSessionId, [], $params);
    }

    /**
     * @param int   $boardSessionId
     * @param int   $boardExerciseId
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getBoardSessionBoardExerciseBoardTrainings(int $boardSessionId, int $boardExerciseId, array $params = [])
    {
        return $this->api->send('GET', static::RESOURCE_KEY . '/' . BoardSession::RESOURCE_KEY . '/' . $boardSessionId . '/' . BoardExercise::RESOURCE_KEY . '/' . $boardExerciseId . '/' . BoardTraining::RESOURCE_KEY, [], $params);
    }

    /**
     * @param int   $boardSessionId
     * @param int   $boardTrainingId
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getBoardSessionBoardTrainingExamQuestions(int $boardSessionId, int $boardTrainingId, array $params = [])
    {
        return $this->api->send('GET', static::RESOURCE_KEY . '/' . BoardSession::RESOURCE_KEY . '/' . $boardSessionId . '/' . BoardTraining::RESOURCE_KEY . '/' . $boardTrainingId . '/' . ExamQuestion::RESOURCE_KEY, [], $params);
    }
}

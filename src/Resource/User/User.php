<?php

namespace GlobalExam\Api\Sdk\Resource\User;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Board\BoardExamMock;
use GlobalExam\Api\Sdk\Resource\Board\BoardExercise;
use GlobalExam\Api\Sdk\Resource\Board\BoardLevel;
use GlobalExam\Api\Sdk\Resource\Board\BoardSession;
use GlobalExam\Api\Sdk\Resource\Board\BoardTraining;
use GlobalExam\Api\Sdk\Resource\Exam\ExamQuestion;
use GlobalExam\Api\Sdk\Resource\Organization\Organization;
use GlobalExam\Api\Sdk\Resource\Organization\OrganizationLicense;
use GlobalExam\Api\Sdk\Resource\Resource;
use GlobalExam\Api\Sdk\Resource\Stats\Stats;
use Psr\Http\Message\ResponseInterface;

/**
 * Class User
 *
 * @package GlobalExam\Api\Sdk\Resource\User
 */
class User
{
    use Resource;

    const RESOURCE_KEY = 'user';

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
    public function me(array $params = [])
    {
        return $this->api->send('GET', self::RESOURCE_KEY . '/me', [], $params);
    }

    /**
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function updateMe(array $body = [])
    {
        return $this->api->send('PUT', static::RESOURCE_KEY . '/me', $body);
    }

    /**
     * @param $id
     *
     * @return mixed|ResponseInterface
     */
    public function disable($id)
    {
        return $this->api->send('PATCH', self::RESOURCE_KEY . '/' . $id . '/disable');
    }

    /**
     * @return mixed|ResponseInterface
     */
    public function disableMe()
    {
        return $this->api->send('PATCH', self::RESOURCE_KEY . '/me/disable');
    }

    /**
     * @param       $id
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function changeCreditCard($id, array $body = [])
    {
        return $this->api->send('PATCH', self::RESOURCE_KEY . '/' . $id . '/credit-card', $body);
    }

    /**
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function changeMyCreditCard(array $body = [])
    {
        return $this->api->send('PATCH', self::RESOURCE_KEY . '/me/credit-card', $body);
    }

    /**
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function changePassword(array $body = [])
    {
        return $this->api->send('PATCH', self::RESOURCE_KEY . '/me/change-password', $body);
    }

    /**
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function sendAccountConfirmation(array $body = [])
    {
        return $this->api->send('POST', self::RESOURCE_KEY . '/me/send-account-confirmation', $body);
    }

    /**
     * @return mixed|ResponseInterface
     */
    public function logout()
    {
        return $this->api->send('GET', self::RESOURCE_KEY . '/me/logout');
    }

    /**
     * @param       $id
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getBoardSessions($id, array $params = [])
    {
        return $this->api->send('GET', self::RESOURCE_KEY . '/' . $id . '/' . BoardSession::RESOURCE_KEY, [], $params);
    }

    /**
     * @param       $id
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getUserLicenses($id, array $params = [])
    {
        return $this->api->send('GET', self::RESOURCE_KEY . '/' . $id . '/' . UserLicense::RESOURCE_KEY, [], $params);
    }

    /**
     * @param       $id
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getUserLicensePayments($id, array $params = [])
    {
        return $this->api->send('GET', self::RESOURCE_KEY . '/' . $id . '/' . UserLicensePayment::RESOURCE_KEY, [], $params);
    }

    /**
     * @param       $id
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getOrganizations($id, array $params = [])
    {
        return $this->api->send('GET', self::RESOURCE_KEY . '/' . $id . '/relationships/' . Organization::RESOURCE_KEY, [], $params);
    }

    /**
     * @param       $id
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function attachOrganization($id, array $body = [])
    {
        return $this->api->send('POST', static::RESOURCE_KEY . '/' . $id . '/relationships/' . Organization::RESOURCE_KEY, $body);
    }

    /**
     * @param       $id
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function syncOrganization($id, array $body = [])
    {
        return $this->api->send('PATCH', static::RESOURCE_KEY . '/' . $id . '/relationships/' . Organization::RESOURCE_KEY, $body);
    }

    /**
     * @param       $id
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function detachOrganization($id, array $body = [])
    {
        return $this->api->send('DELETE', static::RESOURCE_KEY . '/' . $id . '/relationships/' . Organization::RESOURCE_KEY, $body);
    }

    /**
     * @param       $id
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getOrganizationLicenses($id, array $params = [])
    {
        return $this->api->send('GET', self::RESOURCE_KEY . '/' . $id . '/relationships/' . OrganizationLicense::RESOURCE_KEY, [], $params);
    }

    /**
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getMyStatsBoardLevels(array $params = [])
    {
        return $this->api->send('GET', static::RESOURCE_KEY . '/me/' . Stats::RESOURCE_KEY . '/' . BoardLevel::RESOURCE_KEY, [], $params);
    }

    /**
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function getMyGlobalStats(array $body = [])
    {
        return $this->api->send('POST', static::RESOURCE_KEY . '/me/' . Stats::RESOURCE_KEY . '/global', $body);
    }

    /**
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function getMyTrainingModeStats(array $body = [])
    {
        return $this->api->send('POST', static::RESOURCE_KEY . '/me/' . Stats::RESOURCE_KEY . '/training-mode', $body);
    }

    /**
     * @param int   $boardExerciseId
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getMyBoardSessionsByBoardExercise(int $boardExerciseId, array $params = [])
    {
        return $this->api->send('GET', static::RESOURCE_KEY . '/me/' . Stats::RESOURCE_KEY . '/training-mode/' . BoardExercise::RESOURCE_KEY . '/' . $boardExerciseId . '/' . BoardSession::RESOURCE_KEY, [], $params);
    }

    /**
     * @param int   $boardSessionId
     * @param int   $boardTrainingId
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getMyBoardSession(int $boardSessionId, int $boardTrainingId, array $params = [])
    {
        return $this->api->send('GET', static::RESOURCE_KEY . '/me/' . Stats::RESOURCE_KEY . '/training-mode/' . BoardSession::RESOURCE_KEY . '/' . $boardSessionId . '/' . BoardTraining::RESOURCE_KEY . '/' . $boardTrainingId, [], $params);
    }

    /**
     * @param int   $boardSessionId
     * @param int   $boardTrainingId
     * @param int   $examQuestionId
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getMyExamQuestion(int $boardSessionId, int $boardTrainingId, int $examQuestionId, array $params = [])
    {
        return $this->api->send('GET', static::RESOURCE_KEY . '/me/' . Stats::RESOURCE_KEY . '/training-mode/' . BoardSession::RESOURCE_KEY . '/' . $boardSessionId . '/' . BoardTraining::RESOURCE_KEY . '/' . $boardTrainingId . '/' . ExamQuestion::RESOURCE_KEY . '/' . $examQuestionId, [], $params);
    }

    /**
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function getMyExamModeStats(array $body = [])
    {
        return $this->api->send('POST', static::RESOURCE_KEY . '/me/' . Stats::RESOURCE_KEY . '/exam-mode', $body);
    }

    /**
     * @param int   $boardExamMockId
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getMyBoardSessionsByBoardExamMock(int $boardExamMockId, array $params = [])
    {
        return $this->api->send('GET', static::RESOURCE_KEY . '/me/' . Stats::RESOURCE_KEY . '/exam-mode/' . BoardExamMock::RESOURCE_KEY . '/' . $boardExamMockId . '/' . BoardSession::RESOURCE_KEY, [], $params);
    }

    /**
     * @param int   $boardSessionId
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getExamMyBoardSession(int $boardSessionId, array $params = [])
    {
        return $this->api->send('GET', static::RESOURCE_KEY . '/me/' . Stats::RESOURCE_KEY . '/exam-mode/' . BoardSession::RESOURCE_KEY . '/' . $boardSessionId, [], $params);
    }

    /**
     * @param int   $boardSessionId
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getExamMyBoardSessionBoardExercise(int $boardSessionId, array $params = [])
    {
        return $this->api->send('GET', static::RESOURCE_KEY . '/me/' . Stats::RESOURCE_KEY . '/exam-mode/' . BoardSession::RESOURCE_KEY . '/' . $boardSessionId . '/' . BoardSession::RESOURCE_KEY . '/' . $boardSessionId . '/' . BoardTraining::RESOURCE_KEY, [], $params);
    }
}

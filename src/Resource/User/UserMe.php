<?php

namespace GlobalExam\Api\Sdk\Resource\User;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Board\BoardExamMock;
use GlobalExam\Api\Sdk\Resource\Board\BoardExercise;
use GlobalExam\Api\Sdk\Resource\Board\BoardMode;
use GlobalExam\Api\Sdk\Resource\Board\BoardTraining;
use GlobalExam\Api\Sdk\Resource\Resource;
use Psr\Http\Message\ResponseInterface;

/**
 * Class UserMe
 *
 * @package GlobalExam\Api\Sdk\Resource\User
 */
class UserMe
{
    use Resource;

    const RESOURCE_KEY = 'user/me';

    /**
     * UserMe constructor.
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
    public function get(array $params = [])
    {
        return $this->api->send('GET', self::RESOURCE_KEY, [], $params);
    }

    /**
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function update(array $body = [])
    {
        return $this->api->send('PUT', static::RESOURCE_KEY, $body);
    }

    /**
     * @return mixed|ResponseInterface
     */
    public function disable()
    {
        return $this->api->send('PATCH', self::RESOURCE_KEY . '/disable');
    }

    /**
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function changeCreditCard(array $body = [])
    {
        return $this->api->send('PATCH', self::RESOURCE_KEY . '/credit-card', $body);
    }

    /**
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function changePassword(array $body = [])
    {
        return $this->api->send('PATCH', self::RESOURCE_KEY . '/change-password', $body);
    }

    /**
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function sendAccountConfirmation(array $body = [])
    {
        return $this->api->send('POST', self::RESOURCE_KEY . '/send-account-confirmation', $body);
    }

    /**
     * @param int   $id
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function subscribe(int $id, array $body = [])
    {
        return $this->api->send('POST', self::RESOURCE_KEY . '/' . UserPlan::RESOURCE_KEY . '/' . $id . '/subscription', $body);
    }

    /**
     * @param int   $id
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function unsubscribe(int $id, array $body = [])
    {
        return $this->api->send('DELETE', self::RESOURCE_KEY . '/' . UserPlan::RESOURCE_KEY . '/' . $id . '/subscription', $body);
    }

    /**
     * @return mixed|ResponseInterface
     */
    public function logout()
    {
        return $this->api->send('GET', self::RESOURCE_KEY . '/logout');
    }

    /**
     * @param int   $boardExerciseId
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getBoardExerciseBoardTrainings(int $boardExerciseId, array $params = [])
    {
        return $this->api->send('GET', self::RESOURCE_KEY . '/' . BoardExercise::RESOURCE_KEY . '/' . $boardExerciseId . '/' . BoardTraining::RESOURCE_KEY, [], $params);
    }

    /**
     * @param int   $boardModeId
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getBoardModeBoardExamMocks(int $boardModeId, array $params = [])
    {
        return $this->api->send('GET', self::RESOURCE_KEY . '/' . BoardMode::RESOURCE_KEY . '/' . $boardModeId . '/' . BoardExamMock::RESOURCE_KEY, [], $params);
    }

    /**
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getUserLicenseSubscriptions(array $params = [])
    {
        return $this->api->send('GET', self::RESOURCE_KEY . '/' . UserLicenseSubscription::RESOURCE_KEY, [], $params);
    }
}

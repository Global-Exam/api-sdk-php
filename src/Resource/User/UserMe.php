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
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get(array $params = [])
    {
        return $this->api->send('GET', self::RESOURCE_KEY, [], $params);
    }

    /**
     * @param array $body
     *
     * @return mixed|ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function update(array $body = [])
    {
        return $this->api->send('PUT', static::RESOURCE_KEY, $body);
    }

    /**
     * @return mixed|ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function disable()
    {
        return $this->api->send('PATCH', self::RESOURCE_KEY . '/disable');
    }

    /**
     * @param array $body
     *
     * @return mixed|ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function changeCreditCard(array $body = [])
    {
        return $this->api->send('PATCH', self::RESOURCE_KEY . '/credit-card', $body);
    }

    /**
     * @param array $body
     *
     * @return mixed|ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function changePassword(array $body = [])
    {
        return $this->api->send('PATCH', self::RESOURCE_KEY . '/change-password', $body);
    }

    /**
     * @param array $body
     *
     * @return mixed|ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function sendAccountConfirmation(array $body = [])
    {
        return $this->api->send('POST', self::RESOURCE_KEY . '/send-account-confirmation', $body);
    }

    /**
     * @param int   $id
     * @param array $body
     * @param array $params
     *
     * @return mixed|ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function subscribe(int $id, array $body = [], array $params = [])
    {
        return $this->api->send('POST', self::RESOURCE_KEY . '/' . UserPlan::RESOURCE_KEY . '/' . $id . '/subscription', $body, $params);
    }

    /**
     * @param int   $id
     * @param array $body
     * @param array $params
     *
     * @return mixed|ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function unsubscribe(int $id, array $body = [], array $params = [])
    {
        return $this->api->send('DELETE', self::RESOURCE_KEY . '/' . UserPlan::RESOURCE_KEY . '/' . $id . '/subscription', $body, $params);
    }

    /**
     * @return mixed|ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
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
     * @throws \GuzzleHttp\Exception\GuzzleException
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
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getBoardModeBoardExamMocks(int $boardModeId, array $params = [])
    {
        return $this->api->send('GET', self::RESOURCE_KEY . '/' . BoardMode::RESOURCE_KEY . '/' . $boardModeId . '/' . BoardExamMock::RESOURCE_KEY, [], $params);
    }

    /**
     * @param int   $userId
     * @param array $body
     * @param array $params
     *
     * @return mixed|ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function storeLoggedAs(int $userId, array $body = [], array $params = [])
    {
        return $this->api->send('POST', self::RESOURCE_KEY . '/' . User::RESOURCE_KEY . '/' . $userId . '/logged-as', $body, $params);
    }

    /**
     * @param array $params
     *
     * @return mixed|ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getUserLicenseSubscriptions(array $params = [])
    {
        return $this->api->send('GET', self::RESOURCE_KEY . '/' . UserLicenseSubscription::RESOURCE_KEY, [], $params);
    }

    /**
     * @param int   $id
     * @param array $params
     *
     * @return mixed|ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getOneUserLicenseSubscriptionWithInvoices(int $id, array $params = [])
    {
        return $this->api->send('GET', self::RESOURCE_KEY . '/' . UserLicenseSubscription::RESOURCE_KEY . '/' . $id . '/invoices', [], $params);
    }

    /**
     * @param int   $id
     * @param array $body
     * @param array $params
     *
     * @return mixed|ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getOneUserLicenseSubscriptionInvoice(int $id, array $body = [], array $params = [])
    {
        return $this->api->send('POST', self::RESOURCE_KEY . '/' . UserLicenseSubscription::RESOURCE_KEY . '/' . $id . '/invoice', $body, $params);
    }
}

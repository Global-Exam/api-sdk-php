<?php

namespace GlobalExam\Api\Sdk\Resource\User;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Board\Board;
use GlobalExam\Api\Sdk\Resource\Coupon\Coupon;
use GlobalExam\Api\Sdk\Resource\Resource;
use Psr\Http\Message\ResponseInterface;

/**
 * Class UserPlan
 *
 * @package GlobalExam\Api\Sdk\Resource\User
 */
class UserPlan
{
    use Resource;

    const RESOURCE_KEY = 'user-plan';

    /**
     * UserPlan constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }

    /**
     * @param       $id
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getBoards($id, array $params = [])
    {
        return $this->api->send('GET', static::RESOURCE_KEY . '/' . $id . '/relationships/' . Board::RESOURCE_KEY, [], $params);
    }

    /**
     * @param       $id
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function attachBoard($id, array $body = [])
    {
        return $this->api->send('POST', self::RESOURCE_KEY . '/' . $id . '/relationships/' . Board::RESOURCE_KEY, $body);
    }

    /**
     * @param       $id
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function detachBoard($id, array $body = [])
    {
        return $this->api->send('DELETE', self::RESOURCE_KEY . '/' . $id . '/relationships/' . Board::RESOURCE_KEY, $body);
    }

    /**
     * @param       $id
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getCoupons($id, array $params = [])
    {
        return $this->api->send('GET', static::RESOURCE_KEY . '/' . $id . '/relationships/' . Coupon::RESOURCE_KEY, [], $params);
    }

    /**
     * @param       $id
     * @param       $code
     * @param array $params
     *
     * @return mixed|ResponseInterface
     */
    public function getOneCoupon($id, $code, array $params = [])
    {
        return $this->api->send('GET', static::RESOURCE_KEY . '/' . $id . '/relationships/' . Coupon::RESOURCE_KEY . '/' . $code, [], $params);
    }
}

<?php
namespace GlobalExam\Api\Sdk\Resource\Plan;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Board\Board;
use GlobalExam\Api\Sdk\Resource\Resource;
use GlobalExam\Api\Sdk\Resource\User\User;
use Psr\Http\Message\ResponseInterface;

/**
 * Class Plan
 *
 * @package GlobalExam\Api\Sdk\Resource\Plan
 */
class Plan
{
    use Resource;

    const RESOURCE_KEY = 'plan';

    /**
     * Organization constructor.
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
    public function syncLanguage($id, array $body = [])
    {
        return $this->api->send('PATCH', self::RESOURCE_KEY . '/' . $id . '/relationships/language', $body);
    }

    /**
     * @param       $id
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function syncBoard($id, array $body = [])
    {
        return $this->api->send('PATCH', self::RESOURCE_KEY . '/' . $id . '/relationships/' . Board::RESOURCE_KEY, $body);
    }

    /**
     * @param       $id
     * @param array $body
     *
     * @return mixed|ResponseInterface
     */
    public function syncUser($id, array $body = [])
    {
        return $this->api->send('PATCH', self::RESOURCE_KEY . '/' . $id . '/relationships/' . User::RESOURCE_KEY, $body);
    }
}

<?php

namespace GlobalExam\Api\Sdk\Resource\User;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;
use Psr\Http\Message\ResponseInterface;

/**
 * Class UserMeSkillStudySheet
 *
 * @package GlobalExam\Api\Sdk\Resource\User
 */
class UserMeSkillStudySheet
{
    use Resource;

    const RESOURCE_KEY = 'user/me/relationships/skill-study-sheet';

    /**
     * UserMeSkillStudySheet constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }

    /**
     * @param int $id
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return mixed|ResponseInterface
     */
    public function storeView(int $id)
    {
        return $this->api->send('POST', self::RESOURCE_KEY . '/' . $id);
    }
}

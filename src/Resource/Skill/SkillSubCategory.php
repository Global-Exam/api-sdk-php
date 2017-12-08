<?php

namespace GlobalExam\Api\Sdk\Resource\Skill;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;
use Psr\Http\Message\ResponseInterface;

/**
 * Class SkillSubCategory
 *
 * @package GlobalExam\Api\Sdk\Resource\Skill
 */
class SkillSubCategory
{
    use Resource;

    const RESOURCE_KEY = 'skill-sub-category';

    /**
     * SkillSubCategory constructor.
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
    public function getSkills($id, array $params = [])
    {
        return $this->api->send('GET', static::RESOURCE_KEY . '/' . $id . '/' . Skill::RESOURCE_KEY, [], $params);
    }
}
<?php

namespace GlobalExam\Api\Sdk\Resource\Skill;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class SkillCategory
 *
 * @package GlobalExam\Api\Sdk\Resource\Skill
 */
class SkillCategory
{
    use Resource;

    const RESOURCE_KEY = 'skill-category';

    /**
     * SkillCategory constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}

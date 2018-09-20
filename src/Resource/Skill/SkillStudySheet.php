<?php

namespace GlobalExam\Api\Sdk\Resource\Skill;

use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Resource\Resource;

/**
 * Class SkillStudySheet
 *
 * @package GlobalExam\Api\Sdk\Resource\Skill
 */
class SkillStudySheet
{
    use Resource;

    const RESOURCE_KEY = 'skill-study-sheet';

    /**
     * Skill constructor.
     *
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }
}

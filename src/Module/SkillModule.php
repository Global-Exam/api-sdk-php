<?php

namespace GlobalExam\Api\Sdk\Module;

use GlobalExam\Api\Sdk\Resource\Skill\Skill;
use GlobalExam\Api\Sdk\Resource\Skill\SkillCategory;

/**
 * Trait SkillModule
 *
 * @package GlobalExam\Api\Sdk\Module
 */
trait SkillModule
{
    /**
     * @return Skill
     */
    public function skill()
    {
        return new Skill($this);
    }

    /**
     * @return SkillCategory
     */
    public function skillCategory()
    {
        return new SkillCategory($this);
    }
}

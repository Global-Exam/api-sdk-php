<?php

namespace GlobalExam\Api\Sdk\Module;

use GlobalExam\Api\Sdk\Resource\Skill\Skill;
use GlobalExam\Api\Sdk\Resource\Skill\SkillCategory;
use GlobalExam\Api\Sdk\Resource\Skill\SkillStudySheet;
use GlobalExam\Api\Sdk\Resource\Skill\SkillSubCategory;

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

    /**
     * @return SkillStudySheet
     */
    public function skillStudySheet()
    {
        return new SkillStudySheet($this);
    }

    /**
     * @return SkillSubCategory
     */
    public function skillSubCategory()
    {
        return new SkillSubCategory($this);
    }
}

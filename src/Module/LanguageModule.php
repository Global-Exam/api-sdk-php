<?php

namespace GlobalExam\Api\Sdk\Module;

use GlobalExam\Api\Sdk\Resource\Language\Language;

/**
 * Trait LanguageModule
 *
 * @package GlobalExam\Api\Sdk\Module
 */
trait LanguageModule
{
    /**
     * @return Language
     */
    public function language()
    {
        return new Language($this);
    }
}

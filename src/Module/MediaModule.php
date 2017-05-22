<?php

namespace GlobalExam\Api\Sdk\Module;

use GlobalExam\Api\Sdk\Resource\Media\MediaFormat;
use GlobalExam\Api\Sdk\Resource\Media\MediaUsage;

/**
 * Trait MediaModule
 *
 * @package GlobalExam\Api\Sdk\Module
 */
trait MediaModule
{
    /**
     * @return MediaFormat
     */
    public function mediaFormat()
    {
        return new MediaFormat($this);
    }

    /**
     * @return MediaUsage
     */
    public function mediaUsage()
    {
        return new MediaUsage($this);
    }
}

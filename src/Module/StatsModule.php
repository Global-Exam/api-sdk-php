<?php

namespace GlobalExam\Api\Sdk\Module;

use GlobalExam\Api\Sdk\Resource\Stats\Stats;

/**
 * Trait StatsModule
 *
 * @package GlobalExam\Api\Sdk\Module
 */
trait StatsModule
{
    /**
     * @return Stats
     */
    public function stats()
    {
        return new Stats($this);
    }
}

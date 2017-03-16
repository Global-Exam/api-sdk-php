<?php

namespace GlobalExam\Api\Sdk\Module;

use GlobalExam\Api\Sdk\Resource\Plan\Plan;
use GlobalExam\Api\Sdk\Resource\Plan\PlanType;

/**
 * Class PlanModule
 *
 * @package GlobalExam\Api\Sdk\Module
 */
trait PlanModule
{
    /**
     * @return Plan
     */
    public function plan()
    {
        return new Plan($this);
    }

    /**
     * @return PlanType
     */
    public function planType()
    {
        return new PlanType($this);
    }
}

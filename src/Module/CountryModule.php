<?php

namespace GlobalExam\Api\Sdk\Module;

use GlobalExam\Api\Sdk\Resource\Country\Country;

/**
 * Class CountryModule
 *
 * @package GlobalExam\Api\Sdk\Module
 */
trait CountryModule
{
    /**
     * @return Country
     */
    public function country()
    {
        return new Country($this);
    }
}

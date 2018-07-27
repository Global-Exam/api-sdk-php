<?php

namespace GlobalExam\Api\Sdk\Module;

use GlobalExam\Api\Sdk\Resource\Partner\PartnerWizbiiUser;

/**
 * Trait PartnerModule
 *
 * @package GlobalExam\Api\Sdk\Module
 */
trait PartnerModule
{
    /**
     * @return PartnerWizbiiUser
     */
    public function partnerWizbiiUser()
    {
        return new PartnerWizbiiUser($this);
    }
}

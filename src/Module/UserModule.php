<?php

namespace GlobalExam\Api\Sdk\Module;

use GlobalExam\Api\Sdk\Resource\User\Auth;
use GlobalExam\Api\Sdk\Resource\User\OAuth;
use GlobalExam\Api\Sdk\Resource\User\User;
use GlobalExam\Api\Sdk\Resource\User\UserExamQuestionMedia;
use GlobalExam\Api\Sdk\Resource\User\UserLicense;
use GlobalExam\Api\Sdk\Resource\User\UserLicensePayment;
use GlobalExam\Api\Sdk\Resource\User\UserLicenseStatus;
use GlobalExam\Api\Sdk\Resource\User\UserMe;
use GlobalExam\Api\Sdk\Resource\User\UserMeAdaptive;
use GlobalExam\Api\Sdk\Resource\User\UserMeBoard;
use GlobalExam\Api\Sdk\Resource\User\UserMeBoardExamMock;
use GlobalExam\Api\Sdk\Resource\User\UserMeBoardSession;
use GlobalExam\Api\Sdk\Resource\User\UserMeBoardTraining;
use GlobalExam\Api\Sdk\Resource\User\UserMeOrganization;
use GlobalExam\Api\Sdk\Resource\User\UserMeOrganizationLicense;
use GlobalExam\Api\Sdk\Resource\User\UserMeOrganizationStats;
use GlobalExam\Api\Sdk\Resource\User\UserMeSkill;
use GlobalExam\Api\Sdk\Resource\User\UserMeSkillStudySheet;
use GlobalExam\Api\Sdk\Resource\User\UserMeStats;
use GlobalExam\Api\Sdk\Resource\User\UserMeStatsAssessmentMode;
use GlobalExam\Api\Sdk\Resource\User\UserMeStatsExamMode;
use GlobalExam\Api\Sdk\Resource\User\UserMeStatsSkill;
use GlobalExam\Api\Sdk\Resource\User\UserMeStatsTrainingMode;
use GlobalExam\Api\Sdk\Resource\User\UserMeUserPlan;
use GlobalExam\Api\Sdk\Resource\User\UserMeUserPlanning;
use GlobalExam\Api\Sdk\Resource\User\UserPaymentStatus;
use GlobalExam\Api\Sdk\Resource\User\UserPlan;
use GlobalExam\Api\Sdk\Resource\User\UserPlanPeriod;
use GlobalExam\Api\Sdk\Resource\User\UserProvider;
use GlobalExam\Api\Sdk\Resource\User\UserRole;

/**
 * Class UserModule
 *
 * @package GlobalExam\Api\Sdk\Module
 */
trait UserModule
{
    /**
     * @return Auth
     */
    public function auth()
    {
        return new Auth($this);
    }

    /**
     * @return OAuth
     */
    public function oauth()
    {
        return new OAuth($this);
    }

    /**
     * @return User
     */
    public function user()
    {
        return new User($this);
    }

    /**
     * @return UserExamQuestionMedia
     */
    public function userExamQuestionMedia()
    {
        return new UserExamQuestionMedia($this);
    }

    /**
     * @return UserLicense
     */
    public function userLicense()
    {
        return new UserLicense($this);
    }

    /**
     * @return UserLicensePayment
     */
    public function userLicensePayment()
    {
        return new UserLicensePayment($this);
    }

    /**
     * @return UserLicenseStatus
     */
    public function userLicenseStatus()
    {
        return new UserLicenseStatus($this);
    }

    /**
     * @return UserMe
     */
    public function userMe()
    {
        return new UserMe($this);
    }

    /**
     * @return UserMeAdaptive
     */
    public function userMeAdaptive()
    {
        return new UserMeAdaptive($this);
    }

    /**
     * @return UserMeBoard
     */
    public function userMeBoard()
    {
        return new UserMeBoard($this);
    }

    /**
     * @return UserMeBoardExamMock
     */
    public function userMeBoardExamMock()
    {
        return new UserMeBoardExamMock($this);
    }

    /**
     * @return UserMeBoardSession
     */
    public function userMeBoardSession()
    {
        return new UserMeBoardSession($this);
    }

    /**
     * @return UserMeBoardTraining
     */
    public function userMeBoardTraining()
    {
        return new UserMeBoardTraining($this);
    }

    /**
     * @return UserMeOrganization
     */
    public function userMeOrganization()
    {
        return new UserMeOrganization($this);
    }

    /**
     * @return UserMeOrganizationLicense
     */
    public function userMeOrganizationLicense()
    {
        return new UserMeOrganizationLicense($this);
    }

    /**
     * @return UserMeOrganizationStats
     */
    public function userMeOrganizationStats()
    {
        return new UserMeOrganizationStats($this);
    }

    /**
     * @return UserMeSkill
     */
    public function userMeSkill()
    {
        return new UserMeSkill($this);
    }

    /**
     * @return UserMeSkillStudySheet
     */
    public function userMeSkillStudySheet()
    {
        return new UserMeSkillStudySheet($this);
    }

    /**
     * @return UserMeStats
     */
    public function userMeStats()
    {
        return new UserMeStats($this);
    }

    /**
     * @return UserMeStatsAssessmentMode
     */
    public function userMeStatsAssessmentMode()
    {
        return new UserMeStatsAssessmentMode($this);
    }

    /**
     * @return UserMeStatsExamMode
     */
    public function userMeStatsExamMode()
    {
        return new UserMeStatsExamMode($this);
    }

    /**
     * @return UserMeStatsSkill
     */
    public function userMeStatsSkill()
    {
        return new UserMeStatsSkill($this);
    }

    /**
     * @return UserMeStatsTrainingMode
     */
    public function userMeStatsTrainingMode()
    {
        return new UserMeStatsTrainingMode($this);
    }

    /**
     * @return UserMeUserPlan
     */
    public function userMeUserPlan()
    {
        return new UserMeUserPlan($this);
    }

    /**
     * @return UserMeUserPlanning
     */
    public function userMeUserPlanning()
    {
        return new UserMeUserPlanning($this);
    }

    /**
     * @return UserPaymentStatus
     */
    public function userPaymentStatus()
    {
        return new UserPaymentStatus($this);
    }

    /**
     * @return UserPlan
     */
    public function userPlan()
    {
        return new UserPlan($this);
    }

    /**
     * @return UserPlanPeriod
     */
    public function userPlanPeriod()
    {
        return new UserPlanPeriod($this);
    }

    /**
     * @return UserProvider
     */
    public function userProvider()
    {
        return new UserProvider($this);
    }

    /**
     * @return UserRole
     */
    public function userRole()
    {
        return new UserRole($this);
    }
}

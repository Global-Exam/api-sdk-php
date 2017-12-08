<?php

namespace GlobalExam\Api\Sdk\Module;

use GlobalExam\Api\Sdk\Resource\Exam\Exam;
use GlobalExam\Api\Sdk\Resource\Exam\ExamAnswer;
use GlobalExam\Api\Sdk\Resource\Exam\ExamAnswerGroup;
use GlobalExam\Api\Sdk\Resource\Exam\ExamCecrlLevel;
use GlobalExam\Api\Sdk\Resource\Exam\ExamDifficulty;
use GlobalExam\Api\Sdk\Resource\Exam\ExamExercise;
use GlobalExam\Api\Sdk\Resource\Exam\ExamLevel;
use GlobalExam\Api\Sdk\Resource\Exam\ExamPart;
use GlobalExam\Api\Sdk\Resource\Exam\ExamPartTemplate;
use GlobalExam\Api\Sdk\Resource\Exam\ExamQuestion;
use GlobalExam\Api\Sdk\Resource\Exam\ExamQuestionMedia;
use GlobalExam\Api\Sdk\Resource\Exam\ExamQuestionPoint;
use GlobalExam\Api\Sdk\Resource\Exam\ExamQuestionType;
use GlobalExam\Api\Sdk\Resource\Exam\ExamSection;
use GlobalExam\Api\Sdk\Resource\Exam\ExamSectionScore;
use GlobalExam\Api\Sdk\Resource\Exam\ExamSectionType;
use GlobalExam\Api\Sdk\Resource\Exam\ExamSupport;
use GlobalExam\Api\Sdk\Resource\Exam\ExamSupportAction;
use GlobalExam\Api\Sdk\Resource\Exam\ExamSupportEvent;
use GlobalExam\Api\Sdk\Resource\Exam\ExamSupportEventAction;
use GlobalExam\Api\Sdk\Resource\Exam\ExamSupportMedia;
use GlobalExam\Api\Sdk\Resource\Exam\ExamTraining;

/**
 * Class ExamModule
 *
 * @package GlobalExam\Api\Sdk\Module
 */
trait ExamModule
{
    /**
     * @return Exam
     */
    public function exam()
    {
        return new Exam($this);
    }

    /**
     * @return ExamAnswer
     */
    public function examAnswer()
    {
        return new ExamAnswer($this);
    }

    /**
     * @return ExamAnswerGroup
     */
    public function examAnswerGroup()
    {
        return new ExamAnswerGroup($this);
    }

    /**
     * @return ExamCecrlLevel
     */
    public function examCecrlLevel()
    {
        return new ExamCecrlLevel($this);
    }

    /**
     * @return ExamDifficulty
     */
    public function examDifficulty()
    {
        return new ExamDifficulty($this);
    }

    /**
     * @return ExamExercise
     */
    public function examExercise()
    {
        return new ExamExercise($this);
    }

    /**
     * @return ExamLevel
     */
    public function examLevel()
    {
        return new ExamLevel($this);
    }

    /**
     * @return ExamPart
     */
    public function examPart()
    {
        return new ExamPart($this);
    }

    /**
     * @return ExamPartTemplate
     */
    public function examPartTemplate()
    {
        return new ExamPartTemplate($this);
    }

    /**
     * @return ExamQuestion
     */
    public function examQuestion()
    {
        return new ExamQuestion($this);
    }

    /**
     * @return ExamQuestionMedia
     */
    public function examQuestionMedia()
    {
        return new ExamQuestionMedia($this);
    }

    /**
     * @return ExamQuestionPoint
     */
    public function examQuestionPoint()
    {
        return new ExamQuestionPoint($this);
    }

    /**
     * @return ExamQuestionType
     */
    public function eamQuestionType()
    {
        return new ExamQuestionType($this);
    }

    /**
     * @return ExamSection
     */
    public function examSection()
    {
        return new ExamSection($this);
    }

    /**
     * @return ExamSectionScore
     */
    public function examSectionScore()
    {
        return new ExamSectionScore($this);
    }

    /**
     * @return ExamSectionType
     */
    public function examSectionType()
    {
        return new ExamSectionType($this);
    }

    /**
     * @return ExamSupport
     */
    public function examSupport()
    {
        return new ExamSupport($this);
    }

    /**
     * @return ExamSupportAction
     */
    public function examSupportAction()
    {
        return new ExamSupportAction($this);
    }

    /**
     * @return ExamSupportEvent
     */
    public function examSupportEvent()
    {
        return new ExamSupportEvent($this);
    }

    /**
     * @return ExamSupportEventAction
     */
    public function examSupportEventAction()
    {
        return new ExamSupportEventAction($this);
    }

    /**
     * @return ExamSupportMedia
     */
    public function examSupportMedia()
    {
        return new ExamSupportMedia($this);
    }

    /**
     * @return ExamTraining
     */
    public function examTraining()
    {
        return new ExamTraining($this);
    }
}

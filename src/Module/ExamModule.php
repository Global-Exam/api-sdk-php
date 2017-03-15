<?php

namespace GlobalExam\Api\Sdk\Module;

use GlobalExam\Api\Sdk\Resource\Exam\Exam;
use GlobalExam\Api\Sdk\Resource\Exam\ExamExercise;
use GlobalExam\Api\Sdk\Resource\Exam\ExamLevel;
use GlobalExam\Api\Sdk\Resource\Exam\ExamPart;
use GlobalExam\Api\Sdk\Resource\Exam\ExamQuestion;
use GlobalExam\Api\Sdk\Resource\Exam\ExamQuestionAnswer;
use GlobalExam\Api\Sdk\Resource\Exam\ExamQuestionAnswerGroup;
use GlobalExam\Api\Sdk\Resource\Exam\ExamQuestionPoint;
use GlobalExam\Api\Sdk\Resource\Exam\ExamQuestionType;
use GlobalExam\Api\Sdk\Resource\Exam\ExamSection;
use GlobalExam\Api\Sdk\Resource\Exam\ExamSectionScore;
use GlobalExam\Api\Sdk\Resource\Exam\ExamSectionType;
use GlobalExam\Api\Sdk\Resource\Exam\ExamSupport;
use GlobalExam\Api\Sdk\Resource\Exam\ExamSupportType;
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
     * @return ExamQuestion
     */
    public function examQuestion()
    {
        return new ExamQuestion($this);
    }

    /**
     * @return ExamQuestionAnswer
     */
    public function examQuestionAnswer()
    {
        return new ExamQuestionAnswer($this);
    }

    /**
     * @return ExamQuestionAnswerGroup
     */
    public function examQuestionAnswerGroup()
    {
        return new ExamQuestionAnswerGroup($this);
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
     * @return ExamSupportType
     */
    public function examSupportType()
    {
        return new ExamSupportType($this);
    }

    /**
     * @return ExamTraining
     */
    public function examTraining()
    {
        return new ExamTraining($this);
    }
}

<?php

namespace GlobalExam\Api\Sdk\Module;

use GlobalExam\Api\Sdk\Resource\Board\Board;
use GlobalExam\Api\Sdk\Resource\Board\BoardContent;
use GlobalExam\Api\Sdk\Resource\Board\BoardExamMock;
use GlobalExam\Api\Sdk\Resource\Board\BoardExamMockCecrlLevelScore;
use GlobalExam\Api\Sdk\Resource\Board\BoardExercise;
use GlobalExam\Api\Sdk\Resource\Board\BoardLevel;
use GlobalExam\Api\Sdk\Resource\Board\BoardMode;
use GlobalExam\Api\Sdk\Resource\Board\BoardModeType;
use GlobalExam\Api\Sdk\Resource\Board\BoardNumberingType;
use GlobalExam\Api\Sdk\Resource\Board\BoardSection;
use GlobalExam\Api\Sdk\Resource\Board\BoardSessionExamQuestionMedia;
use GlobalExam\Api\Sdk\Resource\Board\BoardTraining;

/**
 * Class BoardModule
 *
 * @package GlobalExam\Api\Sdk\Module
 */
trait BoardModule
{
    /**
     * @return Board
     */
    public function board()
    {
        return new Board($this);
    }

    /**
     * @return BoardContent
     */
    public function boardContent()
    {
        return new BoardContent($this);
    }

    /**
     * @return BoardExamMock
     */
    public function boardExamMock()
    {
        return new BoardExamMock($this);
    }

    /**
     * @return BoardExamMockCecrlLevelScore
     */
    public function boardExamMockCecrlLevelScore()
    {
        return new BoardExamMockCecrlLevelScore($this);
    }

    /**
     * @return BoardExercise
     */
    public function boardExercise()
    {
        return new BoardExercise($this);
    }

    /**
     * @return BoardLevel
     */
    public function boardLevel()
    {
        return new BoardLevel($this);
    }

    /**
     * @return BoardMode
     */
    public function boardMode()
    {
        return new BoardMode($this);
    }

    /**
     * @return BoardModeType
     */
    public function boardModeType()
    {
        return new BoardModeType($this);
    }

    /**
     * @return BoardNumberingType
     */
    public function boardNumberingType()
    {
        return new BoardNumberingType($this);
    }

    /**
     * @return BoardSection
     */
    public function boardSection()
    {
        return new BoardSection($this);
    }

    /**
     * @return BoardSessionExamQuestionMedia
     */
    public function boardSessionExamQuestionMedia()
    {
        return new BoardSessionExamQuestionMedia($this);
    }

    /**
     * @return BoardTraining
     */
    public function boardTraining()
    {
        return new BoardTraining($this);
    }
}

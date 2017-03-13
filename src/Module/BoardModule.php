<?php

namespace GlobalExam\Api\Sdk\Module;

use GlobalExam\Api\Sdk\Resource\Board\Board;
use GlobalExam\Api\Sdk\Resource\Board\BoardExercise;
use GlobalExam\Api\Sdk\Resource\Board\BoardLevel;
use GlobalExam\Api\Sdk\Resource\Board\BoardMode;
use GlobalExam\Api\Sdk\Resource\Board\BoardSection;
use GlobalExam\Api\Sdk\Resource\Board\BoardTraining;

/**
 * Class BoardModule
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
     * @return BoardSection
     */
    public function boardSection()
    {
        return new BoardSection($this);
    }

    /**
     * @return BoardExercise
     */
    public function boardExercise()
    {
        return new BoardExercise($this);
    }

    /**
     * @return BoardTraining
     */
    public function boardTraining()
    {
        return new BoardTraining($this);
    }
}

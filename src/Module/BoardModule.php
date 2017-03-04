<?php

namespace GlobalExam\Api\Sdk\Module;

use GlobalExam\Api\Sdk\Resource\Board\Board;
use GlobalExam\Api\Sdk\Resource\Board\BoardSection;

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
     * @return BoardSection
     */
    public function boardSection()
    {
        return new BoardSection($this);
    }
}
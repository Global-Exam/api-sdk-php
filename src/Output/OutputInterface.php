<?php namespace GlobalExam\Api\Sdk\Output;

interface OutputInterface
{
    /**
     * @param $data
     *
     * @return mixed
     */
    public function transform($data);
}

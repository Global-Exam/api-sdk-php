<?php namespace GlobalExam\Api\Sdk\Output;

class ArrayOutput implements OutputInterface
{
    /**
     * @param $data
     *
     * @return mixed
     */
    public function transform($data)
    {
        return json_decode($data, true);
    }
}

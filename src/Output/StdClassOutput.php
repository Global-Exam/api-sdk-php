<?php namespace GlobalExam\Api\Sdk\Output;

class StdClassOutput implements OutputInterface
{
    /**
     * @param $data
     *
     * @return mixed
     */
    public function transform($data)
    {
        return json_decode($data);
    }
}

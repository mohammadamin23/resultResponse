<?php


namespace Prs\ResultResponse\Service;


class ResultService
{
    /**
     * ResultResponse constructor.
     *
     * @param $isDone boolean
     * @param $data
     * @param $message string
     * @param int $status
     */
    public function response($isDone , $data, $message = '' , $status = 200)
    {
        return response()->json(array(
            'isDone' => $isDone,
            'data' => $data,
            'message' => $message
        ) , $status);
    }
}

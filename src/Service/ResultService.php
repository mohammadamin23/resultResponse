<?php


namespace Prs\ResultResponse\Service;


use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ResultService
{
    /**
     * ResultResponse constructor.
     *
     * @param $isDone boolean
     * @param $data
     * @param $message string
     * @param int $status
     * @return \Illuminate\Http\JsonResponse|JsonResource|ResourceCollection
     */
    public function response(bool $isDone , $data, $message = '' , $status = 200)
    {
        if ($data instanceof JsonResource || $data instanceof ResourceCollection) {
            return $data->additional(['isDone' => $isDone , 'message' => $message]);
        } else {
            return response()->json(array(
                'isDone' => $isDone,
                'data' => $data,
                'message' => $message
            ) , $status);
        }
    }
}

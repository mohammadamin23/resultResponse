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
     * @param $additional
     * @param $message string
     * @param int $status
     * @return \Illuminate\Http\JsonResponse|JsonResource|ResourceCollection
     */
    public function response(bool $isDone , $data, $additional = null , $message = '' , $status = 200)
    {
        if ($data instanceof JsonResource || $data instanceof ResourceCollection) {
            $array = array(
                'isDone' => $isDone,
                'message' => $message
            );
            return $data->additional(array_merge($array , $additional ?? []));
        } else {
            $array = array(
                'isDone' => $isDone,
                'data' => $data,
                'message' => $message
            );
            return response()->json(array_merge($array , $additional ?? []) , $status);
        }
    }
}

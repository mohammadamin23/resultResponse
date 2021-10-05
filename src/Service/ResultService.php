<?php


namespace Prs\ResultResponse\Service;


class ResultService
{
    /**
     * ResultResponse constructor.
     *
     * @param $isDone boolean
     * @param $data
     * @param bool $paginate
     * @param $message string
     * @param int $status
     * @return \Illuminate\Http\JsonResponse
     */
    public function response($isDone , $data, $paginate = false, $message = '' , $status = 200)
    {
        return response()->json(array(
            'isDone' => $isDone,
            'data' => $data,
            'paginate' => $paginate ? [
                'total' => $data->total() , 'perPage' => $data->perPage()  , 'queryParam' => 'page' , 'currentPage' => $data->currentPage()  , 'lastPage' => $data->lastPage()
            ] : null,
            'message' => $message
        ) , $status);
    }
}

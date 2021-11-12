<?php


namespace Prs\ResultResponse;

trait withDefaultResponse
{

    public bool $isDone = true;
    public string $message = '';

    /**
     * Get additional data that should be returned with the resource array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function with($request)
    {
        return [
            'isDone' => $this->isDone,
            'message' => $this->message
        ];
    }
}

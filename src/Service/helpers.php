<?php

use Prs\ResultResponse\Service\Result;

if (!function_exists('result')) {
    function result($isDone , $data , $additional , $message='' ,$status=200)
    {
        return Result::response($isDone , $data , $additional , $message ,$status);
    }
}

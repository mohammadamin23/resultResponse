<?php

use Prs\ResultResponse\Service\Result;

if (!function_exists('result')) {
    function result($isDone , $data , $message='' ,$status=200)
    {
        return Result::response($isDone , $data , $message ,$status);
    }
}

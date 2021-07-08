<?php


namespace Prs\ResultResponse\Service;

use Illuminate\Support\Facades\Facade;

/**
 * Class ResultResponseFacade
 * @package App\Service
 * @method static array response(bool $isDone , $data , string $message = '' , int  $status = 200)
 */

class Result extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'result';
    }
}

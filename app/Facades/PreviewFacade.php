<?php


namespace App\Facades;


use Illuminate\Support\Facades\Facade;

class PreviewFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'preview';
    }
}

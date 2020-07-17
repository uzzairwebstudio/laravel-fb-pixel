<?php
namespace UzzairWebStudio\FBPixel;

use Illuminate\Support\Facades\Facade;

class FBPixelFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'uws-fb-pixel';
    }
}
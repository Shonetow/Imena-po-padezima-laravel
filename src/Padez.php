<?php namespace Shonetow\Padezi;

use Illuminate\Support\Facades\Facade;

class Padez extends Facade
{
    /**
     * Get the binding in the IoC container
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'padez';
    }
}
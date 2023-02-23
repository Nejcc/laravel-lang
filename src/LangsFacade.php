<?php

namespace Nejcc\LaravelPlus\Langs;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Nejcc\LaravelPlus\Skeleton\SkeletonClass
 */
class LangsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'langs';
    }
}

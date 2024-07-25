<?php

namespace Rvzug\FilamentSpatieOpeningHours\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Rvzug\FilamentSpatieOpeningHours\FilamentSpatieOpeningHours
 */
class FilamentSpatieOpeningHours extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Rvzug\FilamentSpatieOpeningHours\FilamentSpatieOpeningHours::class;
    }
}

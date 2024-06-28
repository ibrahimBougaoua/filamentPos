<?php

namespace IbrhimBougaoua\FilamentPos\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \IbrhimBougaoua\FilamentPos\FilamentPos
 */
class FilamentPos extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \IbrhimBougaoua\FilamentPos\FilamentPos::class;
    }
}

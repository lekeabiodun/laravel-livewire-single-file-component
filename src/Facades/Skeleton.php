<?php

namespace Lekeabiodun\LivewireSingleFileComponent\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Lekeabiodun\LivewireSingleFileComponent\LivewireSingleFileComponent
 */
class LivewireSingleFileComponent extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'livewire-single-file-component';
    }
}

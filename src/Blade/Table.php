<?php

namespace CleaniqueCoders\BladePlusPlus\Blade;

use Illuminate\Support\Facades\Blade;

class Table
{
    public static function register()
    {
        Blade::component('laravel-blade-directives::components.tables.base', 'table');
    }
}

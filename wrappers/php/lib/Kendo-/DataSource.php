<?php

namespace Kendo;

use \Illuminate\Foundation\Application;

class DataSource
{
    protected $app;

    public function __construct(Application $app, array $input, array $columns)
    {
        $this->app = $app;
    }
}
<?php

namespace Kendo;

use \Illuminate\Foundation\Application;

class DataSourceManager
{
    protected $app;

    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    public function make(array $input, array $columns)
    {
        return new DataSource($this->app, $input, $columns);
    }
}
<?php

namespace Modules\Helpdesk\Test;

use Orchestra\Testbench\TestCase as Orchestra;
use Modules\Helpdesk\Providers\HelpdeskServiceProvider;

abstract class TestCase extends Orchestra
{
    /**
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            // maybe VainServiceProvider::class is necessary, too?
            HelpdeskServiceProvider::class,
        ];
    }
}
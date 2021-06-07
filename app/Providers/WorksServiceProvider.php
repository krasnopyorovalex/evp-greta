<?php

namespace App\Providers;

use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Support\ServiceProvider;

class WorksServiceProvider extends ServiceProvider
{
    /**
     * @throws BindingResolutionException
     */
    public function register()
    {
        $this->app->make('view')->composer(['page.index', 'layouts.forms.order'], 'App\Http\ViewComposers\WorksComposer');
    }
}

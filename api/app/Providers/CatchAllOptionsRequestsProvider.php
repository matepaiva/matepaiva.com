<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CatchAllOptionsRequestsProvider extends ServiceProvider
{
    /**
     * If the incoming request is an OPTIONS request
     * we will register a handler for the requested route
     * @return void
     */
    public function register()
    {
        $request = app('request');
        if ($request->isMethod('OPTIONS'))
        {
            app()->options($request->path(), function() { return response('', 200); });
        }
    }
}
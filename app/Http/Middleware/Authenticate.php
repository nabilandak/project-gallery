<?php

namespace App\Http\Middleware;

// use Illuminate\Console\View\Components\Alert;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            Alert::info('Anda belum login!', 'Silahkan login terlebih dahulu.')->persistent(true)->autoclose(3000);
            return route('login');
        }
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ShareDataWithViews
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check()) 
        {
            $massage = "Hello, " . auth()->user()->name . " !";
            View::share('massage', $massage);
        }
        else{
            $massage = "Welcome !";
            View::share('massage', $massage);
        }
        return $next($request);
    }
}

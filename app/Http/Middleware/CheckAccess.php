<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Проверка за достъпа тук
        if (auth()->check())
        {
            // Потребителят има достъп, продължете към контролера
            return $next($request);
        }

        // Ако няма достъп, пренасочете към друга страница или изведете съобщение
        return redirect('/unauthorized'); // При
    }
}

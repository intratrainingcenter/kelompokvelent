<?php

namespace App\Http\Middleware;

use Closure;

class sarkom
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // dd($request->sarkom);
        if ($request->sarkom == 'root') {
            return redirect('/');
        }
        return $next($request);
    }
}

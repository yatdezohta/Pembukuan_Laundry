<?php

namespace App\Http\Middleware;

use Closure;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, String $level, String $level2=null)
    {
      if($level == $request->user()->level || $level2 == $request->user()->level )
        return $next($request);
    }
    return redirect('/');s
}

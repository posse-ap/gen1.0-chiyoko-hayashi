<?php

namespace App\Http\Middleware;

use Closure;

class HelloMiddleware
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
        $data = [
            ['name'=>'chiyoko', 'mail'=>'chiyoko@mail'],
            ['name'=>'moripa', 'mail'=>'chiyoko@mail']
        ];
        $request->merge(['data'=>$data]);
        return $next($request);
    }
}

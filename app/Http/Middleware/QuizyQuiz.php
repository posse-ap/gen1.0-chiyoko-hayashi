<?php

namespace App\Http\Middleware;

use Closure;

class QuizyQuiz
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
            ['img'=>'takanwa', 'choicies'=>'たかなわ'],
            ['img'=>'kameido', 'choicies'=>'かめいど']
        ];
        $request->merge(['data'=>$data]);
        return $next($request);
    }
}
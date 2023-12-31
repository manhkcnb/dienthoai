<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Hello
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //xuất chuỗi lên màn hình
        echo "<h1>Middleware Hello được triệu gọi</h1>";
        return $next($request);
    }
}

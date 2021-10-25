<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class BlockIpMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $blockIps = config('app.block_ip');
        if (in_array($request->ip(), $blockIps)) {
            return view("Error.403");
        }
        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    
    public function handle(Request $request, Closure $next)
    {
        if(Gate::allows("admin")){
            return $next($request);
        }
        return redirect()->route("home");
        
    }
}

<?php

namespace App\Http\Middleware;
use Closure;
use auth;

class AccessAdmin
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
        if(auth::user()->hasAnyRoles(['admin'])){
            return redirect('/products');
        }
        return redirect('/home');
    }
}
?>

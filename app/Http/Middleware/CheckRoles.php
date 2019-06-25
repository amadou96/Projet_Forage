<?php

namespace App\Http\Middleware;

use Closure;

class CheckRoles
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $roles)
    {
        $rolesArray= explode("|",$roles); //decouper les elements du tableau $role
        if (! $request->user()->hasAnyRoles($role)) {
            return redirect()->route('home')->with(
                ['permission'=>"Action non autorisee"]
            );
        }

        return $next($request);
    }
}

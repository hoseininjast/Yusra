<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class Employe
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (\Auth::user()->Permission == 'Employee') {
            return $next($request);
        }else{
            Alert::toast('You Cant Access Employee Page','error');
            return redirect()->route('login');
        }
    }
}

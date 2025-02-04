<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use RealRashid\SweetAlert\Toaster;
use Symfony\Component\HttpFoundation\Response;

class checkrole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles ): Response
    {
        if(!Auth::check()){
            return redirect()->route('sesi');
        }
        if(in_array(Auth::user()->role, $roles)){
            return $next($request);
        }

        Alert::error('Failed', 'You dont have permission');

        return redirect()->back();
    }
}

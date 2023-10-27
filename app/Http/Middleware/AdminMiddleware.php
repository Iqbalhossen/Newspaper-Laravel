<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
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
        if(!session()->has('loggedInUser')){

        }else{
        $tk = "admin"; //hardcoded for the time being
        $tenant = \App\Models\User::where('role', $tk)->first();
        $value = session('loggedInUser');
        $all = \App\Models\User::where('id', $value)->first();
        $role = \App\Models\User::where('role', $all->role)->first();
        $aa = $all->role === 'admin';
        }

        if(!session()->has('loggedInUser') && ($request->path() != '/login' && $request->path() != '/signup')){
            return redirect('/login');
        }
        if(session()->has('loggedInUser') && (($request->path() == '/login') || ($request->path() == '/signup')) && $aa == true){
        
        return redirect('admin/dashboard');
            
        }

        return $next($request)->header('Cache-Control','no-cache, no-store, max-age=0, must-revalidate')->header('Pragma', 'no-cache')->header('Expires', 'Sat 01 Jan 1990 00:00:00 GMT');
    }
}

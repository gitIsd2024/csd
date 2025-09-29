<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use DB;

class technoDemoMiddleware
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
        //TECHNO-DEMO
        $userid=Auth::user()->userId;
        $state = DB::table("role_user")->where('userId',$userid)->where('roleId',25)->count();
        //dd($userid);
        if($state>0){
            return redirect('palaysikatan/dashboard');
        }

        //MOET DEVELOPERS ASPPD
        $state = DB::table("role_user")->where('userId',$userid)->where('roleId',38)->count();
        //dd($userid);
        if($state>0){
            return redirect('moet_dev');
        }

        $state_nrp = DB::table("role_user")->where('userId',$userid)->where('roleId',41)->count();
        // dd($state_nrp);
        if($state_nrp>0){
            return redirect('seed-postion');
        }
        
        return $next($request);
    }
}

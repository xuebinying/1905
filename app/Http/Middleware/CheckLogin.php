<?php

namespace App\Http\Middleware;

use Closure;

class CheckLogin
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
        session(['user'=>'zhangsan']);
//        $user = session('user');
//        echo '请登录';
//        dd($user);
//        if(!$user){
//        dd($request->session()->has('user'));
        if(!$request->session()->has('user')){
            return redirect('/test');
        }
        return $next($request);
    }
}

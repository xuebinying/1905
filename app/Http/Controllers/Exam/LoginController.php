<?php

namespace App\Http\Controllers\Exam;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('exam.login.login');
    }
    public function loginDo(){
        $data = request()->except('_token');
//       
       if (Auth::attempt($data)) {
           // 认证通过...
           return redirect('/login/create');
       }else{
           return redirect('/login/login')->with('msg','账号或密码有误');
       }
   }
   public function doReg(){
    $data = request()->except('_token');
    $data['password'] = bcrypt($data['password']);
    $res = User::create($data);
    if($res){
        return redirect('/login/index');
    }else{
        return redirect('reg');
    }
}
}

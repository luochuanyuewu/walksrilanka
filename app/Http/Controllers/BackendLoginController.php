<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class BackendLoginController extends Controller
{

    //处理用户登陆
    public function Login(Request $request){
        $input = $request->all();
        $users = User::all();
        foreach ($users as $user)
        {
            if(($user->email == $input['email']) and (decrypt($user->password) == $input['password']))
            {
                session(['username' => $user->name,'islogin'=>1]);
                return redirect(route('backend.index'));
            }
        }
        Session::flash('login_error','email or password is incorrent!');
        return redirect(route('backend.login'));
    }

    //处理用户登出
    public function Logout(){
        Session::flush();
        return redirect(route('backend.login'));
    }
}

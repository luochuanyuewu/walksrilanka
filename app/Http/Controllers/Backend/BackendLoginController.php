<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class BackendLoginController extends Controller
{
    //显示用户登录界面
    public function Index()
    {
        return view('backend.login');
    }
    //处理用户登陆
    public function Login(Request $request){

        $this->validate($request, [
            'name' =>'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $input = $request->all();
        $users = User::all();
        foreach ($users as $user)
        {
            if(($user->email == $input['email']) and (decrypt($user->password) == $input['password']))
            {
                session(['username' => $request->name,'islogin'=>1]);
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    //
    public function login()
    {
        return view('pagems.login-page');
    }
    public function doLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return view('pagems.page1');

        }

        return redirect()->back()->with('status_admin', 'Tên đăng nhập hoặc mật khẩu không đúng');
    }

    public function register()
    {
        return view('pagems.register-page');
    }
    public function doRegister(Request $request)
    {
        $credentials = $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'password' => ['required']
        ]);
        $saveUser = User::updateOrCreate([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
             ]);

        Auth::loginUsingId($saveUser->id);
        return redirect()->back()->with('status_admin', 'Tên đăng nhập hoặc mật khẩu không đúng');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
    public function homePage(){
        return view('pagems.page1');
    }
    public function library(){
        return view('pagems.page3');
    }
    public function playlist(){
        return view('pagems.page4');
    }
    public function lovemusic(){
        return view('pagems.page5');
    }
    public function taiKhoan(){
        return view('pagems.mPage3');
    }
    public function eProfile(){
        return view('pagems.mPage3a');
    }
    public function hoSo(){
        return view('pagems.mPage4');
    }
    public function eplaylist(){
        return view('pagems.page4b');
    }
    public function search(){
        return view('pagems.page2');
    }

}

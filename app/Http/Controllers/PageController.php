<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TheLoai; 
use App\Models\LoaiTin; 
use App\Models\TinTuc;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    function __construct()
    {
        $theLoais = TheLoai::all();
    }

    public function getPosts()
    {
        return view('Frontend.Pages.posts');
    }

    public function getContact()
    {
        return view('Frontend.Pages.contact');
    }

    public function getAbout()
    {
        return view('Frontend.Pages.about');
    }

    public function getSignUp()
    {
        return view('Frontend.Pages.register');
    }

    public function postSignUp(Request $req)
    {
        $validate = $req->validate(
            [
                'userName' => 'required',
                'email' => 'required | email |  unique:users,email',
                'password' => 'required | min:8',
                'passwordConfirm' => 'required | same:password'
            ],
            [   
                'userName.required' => 'Username is not Null',
                'email.required' => 'Email is not Null',
                'email.email' => 'Wrong format Email ex: abc@gmail.com',
                'email.unique' => 'Email already exists',
                'password.required' => 'Password is not Null',
                'password.min' => 'Password must be at least 8 characters',
                'passwordConfirm.required' => 'Password again is not Null',
                'passwordConfirm.same' => 'password again incorrect'
            ]
        );
        $user = new User;
        $user->name = $validate['userName'];
        $user->email = $validate['email'];
        $user->password = bcrypt($validate['password']);
        $user->quyen = 0;
        $user->save();
        return redirect()->route('login')->with('thongBao', 'Account registration successful, please login again!');
    }

    public function postLogin(Request $req)
    {
        $validate = $req->validate(
            [
                'email' => 'required | unique',
                'password' => 'required | min:8',
            ],
            [
                'email.required' => 'Email is not Null',
                'email.unique' => 'Email already exists',
                'password.required' => 'Password is not Null',
                'password.min' => 'Password must be at least 8 characters',
            ]
        );

        if (Auth::attempt(['email' => $validate['email'], 'password' => $validate['password']])) {
            return redirect()->route('home');
        } else {
            return redirect()->route('home')->with('thongBao', 'Đăng nhập thất bại');
        }
    }

    public function getLogin()
    {
        return view('Frontend.Pages.login');
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\TheLoai; 
use App\Models\LoaiTin; 
use App\Models\TinTuc;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class PageController extends Controller
{
    public function getPosts()
    {
        return view('Frontend.Pages.posts');
    }

    public function postDetail($id) {
        $post = TinTuc::find($id);
        $hotPosts = TinTuc::where('NoiBat', 1)->take(4)->get();
        $relationPosts = TinTuc::where("idLoaiTin", $post->idLoaiTin)->take(4)->get();
        $comments = Comment::where('idTinTuc', $id)->get();
        $date = Carbon::now()->toDateTimeString();
        return view('Frontend.Pages.post_detail', compact('post', 'hotPosts', 'relationPosts', 'date','comments'));
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
                'email' => 'required | email',
                'password' => 'required | min:8'
            ],
            [
                'email.required' => 'Email is not Null',
                'email.email' => 'Email is not email Format',
                'password.required' => 'Password is not Null',
                'password.min' => 'Password must be at least 8 characters'
            ]
        );

        if (Auth::attempt(['email' => $validate['email'], 'password' => $validate['password']])) {
            return redirect()->route('home');
        } else {
            return redirect()->route('login')->with('thongBao', 'Đăng nhập thất bại');
        }
    }

    public function getLogin()
    {
        return view('Frontend.Pages.login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function getLoaiTin($id) 
    {
        $loaiTin = LoaiTin::find($id);
        $posts = TinTuc::where('idLoaiTin', $id)->paginate(5);
        return view('Frontend.Pages.loai_tin', compact('loaiTin', 'posts'));
    }

    public function comment(Request $req, $id) {
        $userId = $req->userId;
        $val = $req->validate(
            [
                'content'=>'required | min:10 | max:1000'
            ],
            [
                'content.required'=>'Please write your comment',
                'content.min'=>'min are 10 character',
                'content.max'=>'max are 10 character',
            ]
        );
        $content = $val['content'];
        $comment = new Comment();
        $comment->idTinTuc = $id;
        $comment->idUser = $userId;
        $comment->NoiDung = $content;
        $comment->save();
        return redirect()->route('postDetail',['id'=>$id]);
    }

    public function myAccount() {
        return view('Frontend.Pages.my_account');
    }

    public function postSearch(Request $req) {
        $key = $req->key;
        $posts = TinTuc::where('TieuDe', 'like', '%'.$key.'%')
                        ->orWhere('TomTat', 'like', '%'.$key.'%')
                        ->orWhere('NoiDung', 'like', '%'.$key.'%')
                        ->take(30)->paginate(5);
        return view("Frontend.Pages.search",compact('key', 'posts'));
    }

    public function getSearch($key) {
        $key = $key;
        return view("Frontend.Pages.search", compact('key'));
    }
}
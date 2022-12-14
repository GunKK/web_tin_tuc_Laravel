<?php

namespace App\Http\Controllers;

use App\Models\TinTuc;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getPosts() 
    {
        $posts = TinTuc::paginate(6);
        return view('Admin.Posts.index', compact('posts'));
    }

    public function getAddPost() 
    {

    }

    public function postAddPost() 
    {

    }

    public function getUpdatePost() 
    {

    }

    public function postUpdatePost() 
    {

    }

    public function getDestroyPost() 
    {

    }

}

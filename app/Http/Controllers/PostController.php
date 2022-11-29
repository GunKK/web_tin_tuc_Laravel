<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TheLoai; 
use App\Models\LoaiTin; 
use App\Models\TinTuc;

class PostController extends Controller
{
    public function __construct()
    {
        $posts = TinTuc::all();
    }

    public function show() {
        
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\LoaiTin;
use App\Models\TheLoai;
use App\Models\TinTuc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    
    public function getPosts() {
        $posts = TinTuc::orderBy("id", "ASC")->paginate(8);
        return view('Admin.Posts.index', compact('posts'));
    }

    public function getAddPost() {
        $categorys = TheLoai::all();
        $topics = LoaiTin::all();
        return view('Admin.Posts.add', compact('categorys', 'topics'));
    }

    // ajax
    public function getCategory($categoryId) {
        $topics = LoaiTin::where("idTheLoai", $categoryId)->get();
        foreach($topics as $topic) {
            echo "<option value='".$topic->id."'>".$topic->Ten."</option>";
        }
    }


    public function postAddPost(Request $req) {
        $val = $req->validate(
            [
                "loaiTinId" => "required",
                "tieuDe" => "required|min:3|unique:tintuc,TieuDe",
                "tomTat" => "required",
                "noiDung" => "required"
            ],
            [
                "loaiTinId.required" => "Bạn chưa chọn loại tin",
                "tieuDe.required" => "Bạn chưa nhập tiêu",
                "tieuDe.min" => "Tiêu đề ít nhất 3 ký tự",
                "tieuDe.unique" => "Tiêu đề đã tồn tại",
                "tomTat.required" => "Bạn chưa nhập tóm tắt",
                "noiDung.required" => "Bạn chưa nhập nội dung"
            ]
        );

        $post = new TinTuc();
        $post->TieuDe = $val["tieuDe"];
        $post->TieuDeKhongDau = $val["tieuDe"];
        $post->idLoaiTin = $val["loaiTinId"];
        $post->TomTat = $val["tomTat"];
        $post->NoiDung = $val["noiDung"];
        $post->SoLuotXem = 0;
        $post->NoiBat = 0;
        if ($req->hasFile('image')) {
            $file = $req->file('image');
            $ext = $file->getClientOriginalExtension();
            if ($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg') {
                return redirect()->route('post')->with('Error', 'Phần mở rộng file ảnh chỉ gồm jpg, png, jpeg');
            }
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('images/tintuc/'), $fileName);
            $post->Hinh = $fileName;
            // $location = public_path('public/assets/uploads/images/'.$fileName);
            // Image::make($file)->resize(300, 300)->save($location);
        }
        $post->save();
        return redirect()->route('post')->with("notify", "Thêm mới thành công");
    }

    public function getShowPost() {

    }

    public function getUpdatePost() {

    }

    public function postUpdatePost() {

    }

    public function getDestroyPost() {

    }

}

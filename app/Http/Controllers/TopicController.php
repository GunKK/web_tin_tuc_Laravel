<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoaiTin;
use App\Models\TheLoai;

class TopicController extends Controller
{
    public function getTopics() 
    {
        $topics = LoaiTin::paginate(6);
        return view('Admin.Topics.index', compact('topics'));
    }

    public function getAddTopic() 
    {
        $categorys = TheLoai::all();
        return view('Admin.Topics.add', compact('categorys'));
    }

    public function postAddTopic(Request $req) 
    {
        $val = $req->validate(
            [
                "name" => 'required|min:3|max:100|unique:LoaiTin,Ten',
                "categoryId" => "required"
            ],
            [
                "name.required" => "Bạn chưa nhập tên chủ đề",
                "name.min" => "Tên chủ đề tối thiểu 3 ký tự",
                "name.max" => "Tên chủ đề tối đa 100 ký tự",
                "name.unique" => "Tên chủ đề đã có trong CSDL",
                "categoryId.required" => "Bạn chưa chọn danh mục"
            ]
        );
            $topic = new LoaiTin();
            $topic->Ten = $val["name"];
            $topic->TenKhongDau = $val['name'];
            $topic->idTheLoai = $val['categoryId'];
            $topic->save();
            return redirect()->route('Topic')->with("notify", "Thêm mới thành công");
    }

    public function getUpdateTopic($id) 
    {   
        $categorys = TheLoai::all();
        $topic = LoaiTin::find($id);
        return view('Admin.Topics.edit', compact('topic','categorys'));
    }

    public function postUpdateTopic(Request $req, $id) 
    {
        $val = $req->validate(
            [
                "name" => 'required|min:3|max:100',
                "categoryId" => "required"
            ],
            [
                "name.required" => "Bạn chưa nhập tên chủ đề",
                "name.min" => "Tên chủ đề tối thiểu 3 ký tự",
                "name.max" => "Tên chủ đề tối đa 100 ký tự",
                "categoryId.required" => "Bạn chưa chọn danh mục"
            ]
        );
        $topic = LoaiTin::find($id);
        $topic->Ten = $val['name'];
        $topic->TenKhongDau = $val['name'];
        $topic->idTheLoai = $val['categoryId'];
        $topic->save();
        return redirect()->route('topic')->with("notify","Sửa thành công");
    }

    public function getDestroyTopic($id) 
    {   
        $topic = LoaiTin::find($id)->delete();
        return redirect()->route('topic')->with('notify', 'Đã xóa thành công');
    }
}

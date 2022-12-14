<?php

namespace App\Http\Controllers;

use App\Models\TheLoai;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCategorys() 
    {
        $categorys = TheLoai::paginate(6);
        return view('Admin.Categorys.index', compact('categorys'));
    }

    public function getAddCategory() 
    {
        return view('Admin.Categorys.add');
    }

    public function postAddCategory(Request $req) 
    {
        $val = $req->validate(
            [
                "name" => 'required|min:3|max:100|unique:TheLoai,Ten'
            ],
            [
                "name.required" => "Bạn chưa nhập tên danh mục",
                "name.min" => "Tên danh mục tối thiểu 3 ký tự",
                "name.max" => "Tên danh mục tối đa 100 ký tự",
                "name.unique" => "Tên danh mục đã có trong CSDL"
            ]
        );
            $categorys = new TheLoai();
            $categorys->Ten = $val["name"];
            $categorys->TenKhongDau = $val['name'];
            // $categorys->TenKhongDau = changeTitle($val['name']);
            $categorys->save();
            return redirect()->route('category')->with("notify", "Thêm mới thành công");
    }

    public function getUpdateCategory($id) 
    {
        $category = TheLoai::find($id);
        return view('Admin.Categorys.edit', compact('category'));
    }

    public function postUpdateCategory(Request $req, $id) 
    {
        $val = $req->validate(
            [
                "name" => 'required|min:3|max:100|unique:TheLoai,Ten'
            ],
            [
                "name.required" => "Bạn chưa nhập tên danh mục",
                "name.min" => "Tên danh mục tối thiểu 3 ký tự",
                "name.max" => "Tên danh mục tối đa 100 ký tự",
                "name.unique" => "Tên danh mục đã có trong CSDL"
            ]
        );
        $category = TheLoai::find($id);
        $category->Ten = $val['name'];
        $category->TenKhongDau = $val['name'];
        $category->save();
        return redirect()->route('category')->with("notify","Sửa thành công");
    }

    public function getDestroyCategory($id) 
    {   
        $category = TheLoai::find($id)->delete();
        return redirect()->route('category')->with('notify', 'Đã xóa thành công');
    }

}

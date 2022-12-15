<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
// use Intervention\Image\ImageManagerStatic as Image;

class SlideController extends Controller
{
    public function getSlides() 
    {
        $slides = Slide::paginate(3);
        return view('Admin.Slides.index', compact('slides'));
    }

    public function getAddSlide() 
    {
        return view('Admin.Slides.add');
    }

    public function postAddSlide(Request $req) 
    {
        $val = $req->validate(
            [
                "name" => 'required',
                "content" => 'required|min:3|max:1000'
            ],
            [
                "name.required" => "Bạn chưa nhập tên slide",
                "content.required" => "Bạn chưa nhập nội dung",
                "content.min" => "Tên danh mục tối thiểu 3 ký tự",
                "content.max" => "Tên danh mục tối đa 1000 ký tự",
            ]
        );
            $slide = new Slide();
            $slide->Ten = $val["name"];
            $slide->Hinh = $val["name"];
            $slide->NoiDung = $val['content'];
            if ($req->hasFile('image')) {
                $file = $req->file('image');
                $ext = $file->getClientOriginalExtension();
                if ($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg') {
                    return redirect()->route('slide')->with('Error', 'Phần mở rộng file ảnh chỉ gồm jpg, png, jpeg');
                }
                $fileName = time().'.'.$file->getClientOriginalExtension();
                $file->move(public_path('images/slide/'), $fileName);
                $slide->link = $fileName;
                // $location = public_path('public/assets/uploads/images/'.$fileName);
                // Image::make($file)->resize(300, 300)->save($location);
            }
            $slide->save();
            return redirect()->route('slide')->with("notify", "Thêm mới thành công");
    }

    public function getUpdateSlide($id) 
    {
        $slide = Slide::find($id);
        return view('Admin.Slides.edit', compact('slide'));
    }

    public function postUpdateSlide(Request $req, $id) 
    {
        $val = $req->validate(
            [
                "name" => 'required',
                "content" => 'required|min:3|max:1000'
            ],
            [
                "name.required" => "Bạn chưa nhập tên slide",
                "content.required" => "Bạn chưa nhập nội dung",
                "content.min" => "Tên danh mục tối thiểu 3 ký tự",
                "content.max" => "Tên danh mục tối đa 1000 ký tự",
            ]
        );
        $slide = Slide::find($id);
        $link = $slide->link;
        $slide->Ten = $val["name"];
        $slide->Hinh = $val["name"];
        $slide->NoiDung = $val['content'];
        if ($req->hasFile('image')) {
            $file = $req->file('image');
            $ext = $file->getClientOriginalExtension();
            if ($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg') {
                return redirect()->route('slide')->with('Error', 'Phần mở rộng file ảnh chỉ gồm jpg, png, jpeg');
            }
            // delete old
            $image_path = "images/slide/".$link; 
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            // create new
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('images/slide/'), $fileName);
            $slide->link = $fileName;
            // $location = public_path('public/assets/uploads/images/'.$fileName);
            // Image::make($file)->resize(300, 300)->save($location);
        }
        $slide->save();
        return redirect()->route('slide')->with("notify","Sửa thành công");
    }

    public function getDestroySlide($id) 
    {   
        $slide = Slide::find($id);
        $image_path = "images/slide/".$slide->link; 
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
        $slide->delete();
        return redirect()->route('slide')->with('notify', 'Đã xóa thành công');
    }

}

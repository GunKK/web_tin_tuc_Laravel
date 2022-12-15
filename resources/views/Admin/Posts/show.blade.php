@extends('Admin.Layouts.master')
@section('title', 'showpost')
@section('content')  
<div id="page-wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Bài viết
                        <small>Chi tiết bài viết</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <div>
                        <div class="form-group">
                            <label>Tiêu đề</label>
                            <input class="form-control" type="text" value="{{ $post->TieuDe }}" placeholder="Please Enter title" readonly />
                        </div>
                        <div class="form-group">
                            <label>Tóm tắt</label>
                            <textarea class="form-control" id="" cols="30" rows="5" placeholder="Please Enter summary" readonly>{{ $post->TomTat }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Nội dung</label>
                            <textarea class="form-control" id="" cols="30" rows="5" name="noiDung" placeholder="Please Enter content" readonly>{{ $post->NoiDung }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Danh mục</label>
                            <select class="form-control" name="" id="category">
                                @foreach ( $categorys as $category )
                                    <option value="{{ $category->id }}">{{ $category->Ten }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>File ảnh</label>
                            <div>
                                <img width="200px" src="{{ asset('images/tintuc/'.$post->Hinh) }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
</div>
@endsection
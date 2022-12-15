@extends('Admin.Layouts.master')
@section('title', 'addSlide')
@section('content')    
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Bài viết
                    <small>Thêm bài viết</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="{{ url()->current() }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Tiêu đề</label>
                        <input class="form-control" type="text" name="tieuDe" placeholder="Please Enter title" />
                    </div>
                    <div class="form-group">
                        <label>Tóm tắt</label>
                        <textarea class="form-control" id="" cols="30" rows="5" name="tomTat" placeholder="Please Enter summary"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Nội dung</label>
                        <textarea class="form-control" id="" cols="30" rows="5" name="noiDung" placeholder="Please Enter content"></textarea>
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
                        <label>Chủ đề</label>
                        <select class="form-control" name="loaiTinId" id="topic">
                            @foreach ( $topics as $topic )
                                <option value="{{ $topic->id }}">{{ $topic->Ten }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>File ảnh</label>
                        <input class="form-control" type="file" name="image" />
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                <form>
                @if ($errors->any())
                    <div class="alert alert-danger" style="margin-top:12px">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('error')) 
                    <div class="row">
                        <div class="alert alert-success">
                            {{ session('error') }}
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection

@section("script")
    <script>
        $(document).ready(function(){
            $("#category").change(function(){
                var categoryId = $(this).val();
                console.log(categoryId);
                $.get("/admin/post/ajax/topic/" + categoryId, function(data){
                $("#topic").html(data);
                });
            });
        });
    </script>
@endsection
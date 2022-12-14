@extends('Admin.Layouts.master')
@section('title', 'showpost')
@section('content')  
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Bài viết
                    <small>Bài viết <span class="text-primary">#{{ $post->id }}</span></small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <div>
                    <div class="form-group">
                        <label>Tiêu đề bài viết</label>
                        <input class="form-control" name="name" value="{{ $post->TieuDe }}" readonly />
                    </div>
                    <div class="form-group">
                        <label>Tên danh mục</label>
                        <input class="form-control" name="name" value="{{ $post->Ten }}" readonly />
                    </div>
                    <div class="form-group">
                        <label>Tên danh mục</label>
                        <input class="form-control" name="name" value="{{ $post->Ten }}" readonly />
                    </div>
                    <div class="form-group">
                        <label>Tên danh mục</label>
                        <input class="form-control" name="name" value="{{ $post->Ten }}" readonly />
                    </div>
                    <div class="form-group">
                        <label>Tên danh mục</label>
                        <input class="form-control" name="name" value="{{ $post->Ten }}" readonly />
                    </div>
                    <a href="{{ route('post') }}" class="btn btn-primary">Quay lại</a>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection
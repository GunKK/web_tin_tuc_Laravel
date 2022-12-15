@extends('Admin.Layouts.master')
@section('title', 'addSlide')
@section('content')    
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Slide
                    <small>Thêm slide</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="{{ url()->current() }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Tên</label>
                        <input class="form-control" type="text" name="name" placeholder="Please Enter Name" />
                    </div>
                    <div class="form-group">
                        <label>Nội dung</label>
                        <textarea class="form-control" id="" cols="30" rows="5" name="content" placeholder="Please Enter Content"></textarea>
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
@extends('Admin.Layouts.master')
@section('title', 'editCategory')
@section('content')  
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Slide
                    <small>Cập nhật</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="{{ url()->current() }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Tên</label>
                        <input class="form-control" name="name" value="{{ $slide->Ten }}" />
                    </div>
                    <div class="form-group">
                        <label>Tên</label>
                        <textarea class="form-control" id="" cols="30" rows="5" name="content">{{ $slide->NoiDung }}</textarea>
                    </div>
                    <div class="form-group">
                        <div>
                            <img width="400px" src="{{ asset('images/slide/'.$slide->link) }}" alt="">
                        </div>
                        <label>Hình</label>
                        <div>
                            <input class="form-control" type="file" name="image" />
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
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
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection
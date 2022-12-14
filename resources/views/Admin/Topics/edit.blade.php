@extends('Admin.Layouts.master')
@section('title', 'editTopic')
@section('content')  
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Chủ đề
                    <small>Sửa chủ đề</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="{{ url()->current() }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Tên chủ đề</label>
                        <input class="form-control" name="name" value="{{ $topic->Ten }}" />
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="categoryId" aria-label="Default select example">
                            @foreach ( $categorys as $category )    
                                <option 
                                    value="{{ $category->id }}"
                                    @if ($category->id == $topic->idTheLoai)
                                        selected
                                    @endif
                                >
                                    {{ $category->Ten }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Cập nhật</button>
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
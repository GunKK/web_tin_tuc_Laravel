@extends('Admin.Layouts.master')
@section('title', 'showpost')
@section('content')    
<div id="page-wrapper">
    <div class="container-fluid">
        @if (session('notify')) 
        <div class="row">
            <div class="alert alert-success">
                {{ session('notify') }}
            </div>
        </div>
        @endif
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tin tức
                    <small>Danh sách tin tức</small>
                </h1>
                <h1>
                    <a href="{{ route('addPost') }}" class="btn btn-primary"><i class="fa-regular fa-plus"></i> Thêm mới</a>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th class="row">STT</th>
                        <th class="row">Mã tin tức</th>
                        <th class="col">Tiêu đề</th>
                        <th class="col">Tóm tắt</th>
                        <th class="col">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @php 
                        $i=1;
                    @endphp
                    @foreach ( $posts as $post )       
                    <tr class="odd gradeX">
                        <td>{{ $i }}</td>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->TieuDe }}</td>
                        <td>{{ $post->TomTat }}</td>
                        <td>
                            <div style="margin:4px 0;">
                                <a style="width:100%" class="btn btn-default" href="{{ route('showPost', ['id'=>$post->id]) }}"><i class="fa-solid fa-eye"></i></i> View</a>
                            </div>
                            <div style="margin:4px 0;">
                                <a style="width:100%" class="btn btn-warning" href="{{ route('updatePost', ['id'=>$post->id]) }}"><i class="fa-solid fa-pencil"></i> Edit</a>
                            </div>
                            <div style="margin:4px 0;">
                                <a style="width:100%" class="btn btn-danger" href="{{ route('destroyPost', ['id'=>$post->id]) }}"><i class="fa-solid fa-trash-can"></i> Delete</a>
                            </div>
                        </td>
                    </tr>
                    @php
                        $i++;
                    @endphp
                    @endforeach
                </tbody>
            </table>
            {{ $posts->links() }}
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection
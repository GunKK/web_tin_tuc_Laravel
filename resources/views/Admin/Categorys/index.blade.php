@extends('Admin.Layouts.master')
@section('title', 'showCategory')
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
                <h1 class="page-header">Danh mục
                    <small>Danh sách danh mục</small>
                </h1>
                <h1>
                    <a href="{{ route('addCategory') }}" class="btn btn-primary"><i class="fa-regular fa-plus"></i> Thêm mới</a>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th class="row">STT</th>
                        <th class="row">Mã thể loại</th>
                        <th class="col">Tên thể loại</th>
                        <th class="col">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @php 
                        $i=1;
                    @endphp
                    @foreach ( $categorys as $category )       
                    <tr class="odd gradeX">
                        <td>{{ $i }}</td>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->Ten }}</td>
                        <td class="center">
                            <a class="btn btn-warning" href="{{ route('updateCategory', ['id'=>$category->id]) }}"><i class="fa-solid fa-pencil"></i> Edit</a>
                            <a class="btn btn-danger" href="{{ route('destroyCategory', ['id'=>$category->id]) }}"><i class="fa-solid fa-trash-can"></i> Delete</a>
                        </td>
                    </tr>
                    @php
                        $i++;
                    @endphp
                    @endforeach
                </tbody>
            </table>
            {{ $categorys->links() }}
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection
@extends('Admin.Layouts.master')
@section('title', 'showTopic')
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
                <h1 class="page-header">Chủ đề
                    <small>Danh sách chủ đề</small>
                </h1>
                <h1>
                    <a href="{{ route('addTopic') }}" class="btn btn-primary"><i class="fa-regular fa-plus"></i> Thêm mới</a>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th class="row">STT</th>
                        <th class="row">Mã chủ đề</th>
                        <th class="col">Tên chủ đề</th>
                        <th class="col">Danh mục</th>
                        <th class="col">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @php 
                        $i=1;
                    @endphp
                    @foreach ( $topics as $topic )       
                    <tr class="odd gradeX">
                        <td>{{ $i }}</td>
                        <td>{{ $topic->id }}</td>
                        <td>{{ $topic->Ten }}</td>
                        <td>{{ $topic->TheLoai->Ten }}</td>
                        <td class="center">
                            <a class="btn btn-warning" href="{{ route('updateTopic', ['id'=>$topic->id]) }}"><i class="fa-solid fa-pencil"></i> Edit</a>
                            <a class="btn btn-danger" href="{{ route('destroyTopic', ['id'=>$topic->id]) }}"><i class="fa-solid fa-trash-can"></i> Delete</a>
                        </td>
                    </tr>
                    @php
                        $i++;
                    @endphp
                    @endforeach
                </tbody>
            </table>
            {{ $topics->links() }}
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection
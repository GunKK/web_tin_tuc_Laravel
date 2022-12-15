@extends('Admin.Layouts.master')
@section('title', 'showSlide')
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
                <h1 class="page-header">Slide
                    <small>Danh sách slides</small>
                </h1>
                <h1>
                    <a href="{{ route('addSlide') }}" class="btn btn-primary"><i class="fa-regular fa-plus"></i> Thêm mới</a>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th class="row">STT</th>
                        <th class="row">#Mã</th>
                        <th class="col">Tên</th>
                        <th class="col">Hình</th>
                        <th class="col">Nội dung</th>
                        <th class="col">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @php 
                        $i=1;
                    @endphp
                    @foreach ( $slides as $slide )       
                    <tr class="odd gradeX">
                        <td>{{ $i }}</td>
                        <td>{{ $slide->id }}</td>
                        <td>{{ $slide->Ten }}</td>
                        <td>
                            <img width="100px" src="{{ asset('images/slide/'.$slide->link) }}" alt="">
                        </td>
                        <td>{{ $slide->NoiDung }}</td>
                        <td class="center">
                            <div>
                                <a style="width: 100%" class="btn btn-warning" href="{{ route('updateSlide', ['id'=>$slide->id]) }}"><i class="fa-solid fa-pencil"></i> Edit</a>
                                <a style="width: 100%; margin-top: 4px" class="btn btn-danger" href="{{ route('destroySlide', ['id'=>$slide->id]) }}"><i class="fa-solid fa-trash-can"></i> Delete</a>
                            </div>
                        </td>
                    </tr>
                    @php
                        $i++;
                    @endphp
                    @endforeach
                </tbody>
            </table>
            {{ $slides->links() }}
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection
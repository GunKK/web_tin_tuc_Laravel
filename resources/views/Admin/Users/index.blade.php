@extends('Admin.Layouts.master')
@section('title', 'showUser')
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
                <h1 class="page-header">Người dùng
                    <small>Danh sách người dùng</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th class="row">STT</th>
                        <th class="col">Mã người dùng</th>
                        <th class="col">Tên người dùng</th>
                        <th class="col">Email</th>
                        <th class="col">Role</th>
                        <th class="col">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @php 
                        $i=1;
                    @endphp
                    @foreach ( $users as $user )       
                    <tr class="odd gradeX">
                        <td>{{ $i }}</td>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @if ($user->quyen == 1)
                                Admin
                            @else
                                User
                            @endif
                        </td>
                        <td class="center">
                            <a class="btn btn-warning @if ($user->quyen == 1) disabled @endif" href="{{ route('updateUser', ['id'=>$user->id]) }}"><i class="fa-solid fa-pencil"></i> Set   admin</a>
                            <a class="btn btn-danger @if ($user->quyen == 1) disabled @endif" href="{{ route('destroyUser', ['id'=>$user->id]) }}"><i class="fa-solid fa-trash-can"></i> Delete</a>
                        </td>
                    </tr>
                    @php
                        $i++;
                    @endphp
                    @endforeach
                </tbody>
            </table>
            {{ $users->links() }}
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection
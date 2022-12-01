@extends('Frontend.layouts.master')
@section('title', 'Login')
@section('content') 
<div class="container">

    <!-- slider -->
    <div class="row carousel-holder">
        <div class="col-md-4"></div>
        <div class="col-md-4" style="margin-bottom: 80px">
            <div class="panel panel-default">
                  <h3 class="panel-heading text-center" style="margin: 0;background-color: var(--primary-color)">Đăng nhập</h3>
                  <div class="panel-body">
                    @if ($message = Session::get("thongBao"))
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @endif
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div>
                            <label>Email</label>
                              <input type="email" class="form-control" placeholder="Enter your email" name="email">
                        </div>
                        @if ($errors->has('email'))
                            <div class="text-danger">{{ $errors->first("email")}}</div>
                        @endif
                        <br>
                        <div>
                            <label>Mật khẩu</label>
                              <input type="password" class="form-control" name="password">
                        </div>
                        @if ($errors->has('password'))
                            <div class="text-danger">{{ $errors->first("password")}}</div>
                        @endif
                        <div style="display: flex; align-items-center; margin-top: 16px">
                            <input style="margin: 0" type="checkbox" class="form-check-input">
                            <label style="margin: 0; margin-left: 8px">Nhớ mật khẩu</label>
                        </div>
                        <div style="margin-top: 16px">
                            <label style="margin: 0; margin-left: 8px">Bạn chưa có tài khoản? <a class="text-primary" href="{{ route('signUp') }}">Đăng kí ngay</a></label>
                        </div>
                        <div class="text-center" style="margin-top: 16px">
                            <button type="submit" name="login" class="btn btn-lg btn-primary">Đăng nhập</button>
                        </div>
                    </form>
                  </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
    <!-- end slide -->
</div>
@endsection
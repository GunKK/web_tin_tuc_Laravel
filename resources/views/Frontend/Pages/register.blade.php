@extends('Frontend.layouts.master')
@section('title', 'Sign up')
@section('content') 
<div class="container">

    <!-- slider -->
    <div class="row carousel-holder">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <div class="panel panel-default">
                  <h3 class="panel-heading text-center" style="margin: 0; background-color: var(--primary-color)">Đăng ký tài khoản</h3>
                  <div class="panel-body">
                    <form action="{{ route('signUp') }}" method="POST">
                        @csrf
                        <div>
                            <label>Họ tên</label>
                              <input type="text" class="form-control" placeholder="Username" name="userName" value="{{ $userName ?? '' }}" aria-describedby="basic-addon1">
                        </div>
                        @if ($errors->has("userName"))
                            <div class="text-danger">{{ $errors->first("userName")}}</div>
                        @endif
                        <br>
                        <div>
                            <label>Email</label>
                              <input type="email" class="form-control" placeholder="Ex: abc@gmail.com" name="email" value="{{ $email ?? '' }}" aria-describedby="basic-addon1"
                              >
                        </div>
                        @if ($errors->has("email"))
                            <div class="text-danger">{{ $errors->first("email")}}</div>
                        @endif
                        <br>	
                        <div>
                            <label>Nhập mật khẩu</label>
                              <input type="password" class="form-control" name="password" value="{{ $password ?? '' }}" aria-describedby="basic-addon1">
                        </div>
                        @if ($errors->has("password"))
                            <div class="text-danger">{{ $errors->first("password")}}</div>
                        @endif
                        <br>
                        <div>
                            <label>Nhập lại mật khẩu</label>
                              <input type="password" class="form-control" name="passwordConfirm" value="{{ $passwordConfirm ?? '' }}" aria-describedby="basic-addon1">
                        </div>
                        @if ($errors->has("passwordConfirm"))
                            <div class="text-danger">{{ $errors->first("passwordConfirm")}}</div>
                        @endif
                        <div style="margin-top: 16px" class="text-center">
                            <button type="submit" class="btn btn-lg btn-success">Đăng ký</button>
                        </div>
                    </form>
                  </div>
            </div>
        </div>
        <div class="col-md-2">
        </div>
    </div>
    <!-- end slide -->
</div>
@endsection
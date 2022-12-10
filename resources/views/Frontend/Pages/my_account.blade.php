@extends('Frontend.Layouts.master')
@section('content')
@section('title', 'MyAccount')
    <div class="container">
        <!-- slider -->
        <div class="row carousel-holder">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: var(--primary-color)"><b>Thông tin tài khoản</b></div>
                    <div class="panel-body">
                        <form>
                            <div>
                                <label>Họ tên</label>
                                <input type="text" class="form-control" placeholder="Username" name="name" aria-describedby="basic-addon1">
                            </div>
                            <br>
                            <div>
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="Email" name="email" aria-describedby="basic-addon1"
                                disabled
                                >
                            </div>
                            <br>
                            <div>
                                <input type="checkbox" class="" id="changepassword" name="checkpassword">
                                <label>Đổi mật khẩu</label>
                                <input type="password" class="form-control password" name="password" aria-describedby="basic-addon1">
                            </div>
                            <br>
                            <div>
                                <label>Nhập lại mật khẩu</label>
                                <input type="password" class="form-control password" name="passwordAgain" aria-describedby="basic-addon1">
                            </div>
                            <br>
                            <button type="button" class="btn btn-default">Sửa
                            </button>

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
@section('script')
    <script>
        $(document).ready(function() {
            $('#changepassword').change(function() {
                if(this).is('checked') {
                    $('.password').removeAttr('disabled');
                } else {
                    $('.password').attr('disabled'. '');
                }
            });
        });
    </script>
@endsection
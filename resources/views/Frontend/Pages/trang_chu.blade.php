@extends('Frontend.layouts.master')
@section('title', 'Home Page')
@section('content') 
<div class="container">

    <!-- slider -->
    @include('Frontend.layouts.slide')
    <!-- end slide -->

    <div class="space20"></div>


    <div class="row">
        <div class="col" style="margin: 0 15px">
            <div class="panel panel-default">
                <div class="panel-heading text-light text-center" style="background-color: var(--primary-color)">
                    <h2 style="margin-top:0px; margin-bottom:0px;">Laravel Tin Tức</h2>
                </div>

                <div class="panel-body">
                    <!-- item -->
                    <div class="row-item row">
                        <h2 class="text-center">Admin</h2>
                        <div class="col-md-6 col-sm-12 border-right">
                            <div class="col-md-5">
                                <a href="https://www.facebook.com/GUNKK.2510">
                                    <img class="img-responsive" style="border-radius: 50%" src="{{ asset('images/profile_1913304.jpg') }}" alt="">
                                </a>
                            </div>

                            <div class="col-md-7">
                                <h3>I'm Hau Duc Nguyen</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, quo, minima, inventore voluptatum saepe quos nostrum provident .</p>
                                <a class="btn btn-primary" href="https://www.facebook.com/GUNKK.2510">Contact</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="col-md-5">
                                <a href="#">
                                    <img class="img-responsive" style="border-radius: 50%" src="{{ asset('images/logo.jpg') }}" alt="">
                                </a>
                            </div>

                            <div class="col-md-7">
                                <h3>Bạn chưa có tài khoản</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, quo, minima, inventore voluptatum saepe quos nostrum provident .</p>
                                <a class="btn btn-primary" href="{{ route('signUp') }}">Sign up now</a>
                            </div>
                        </div>

                        <div class="break"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>
@endsection
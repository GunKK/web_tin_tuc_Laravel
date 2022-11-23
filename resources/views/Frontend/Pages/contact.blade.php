@extends('Frontend.layouts.master')
@section('title', 'Contact')
@section('content')    
<!-- slider -->
@include('Frontend.layouts.slide')
<!-- end slide -->

<div class="space20"></div>


<div class="row main-left">
    @include('Frontend.layouts.menu')
    <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color: var(--primary-color); color:white;" >
                <h2 style="margin-top:0px; margin-bottom:0px;">Liên hệ</h2>
            </div>

            <div class="panel-body">
                <!-- item -->
                <h3><span class="glyphicon glyphicon-align-left"></span> Thông tin liên hệ</h3>

                <div class="break"></div>
                <h4><span class= "glyphicon glyphicon-home "></span> Địa chỉ : </h4>
                <p>Kí túc xá khu B, Đông Hòa, Dĩ An, Bình Dương </p>

                <h4><span class="glyphicon glyphicon-envelope"></span> Email : </h4>
                <p><a href = "mailto: hau.nguyenbk8786@gmail.com">hau.nguyenbk8786@gmail.com</a></p>

                <h4><span class="glyphicon glyphicon-phone"></span> Điện thoại : </h4>
                <p><a href="tel:+84 82848xxx">Liên hệ: +84 82848xxx</a> </p>



                <br><br>
                <h3><span class="glyphicon glyphicon-globe"></span> Bản đồ</h3>
                <div class="break"></div><br>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.0730521258683!2d106.78039021382338!3d10.882048360213204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174d89aad780e49%3A0x54542761d4c22175!2zS8O9IHTDumMgeMOhIEtodSBCIMSQ4bqhaSBo4buNYyBRdeG7kWMgZ2lhIFRQLkhDTQ!5e0!3m2!1svi!2s!4v1669215466877!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>
@endsection
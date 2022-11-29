@extends('Frontend.layouts.master')
@section('title', 'Posts')
@section('content')    
<div class="container">

    <!-- slider -->
    @include('Frontend.layouts.slide')
    <!-- end slide -->

    <div class="space20"></div>


    <div class="row main-left">
       @include('Frontend.layouts.menu')
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading text-light" style="background-color: var(--primary-color)">
                    <h2 style="margin-top:0px; margin-bottom:0px;">Laravel Tin Tức</h2>
                </div>

                <div class="panel-body">
                    @foreach ( $theLoais as $theLoai )    
                    <!-- item -->
                        @if( count($theLoai->LoaiTin) > 0)
                        <div class="row-item row">
                            <h3>
                                <a href="#">{{ $theLoai->Ten }}</a> |
                                @foreach ( $theLoai->LoaiTin as $loaiTin )
                                    <small><a href="#"><i>{{ $loaiTin->Ten }}</i></a>/</small>
                                @endforeach
                            </h3>
                            @php $datas = $theLoai->TinTuc->where('NoiBat', '=', 1)->sortByDesc('id')->take(5)
                            @endphp
                            @php ($firstPost = $datas->shift()) {{-- Lấy phần tử đầu tiên khỏi mảng --}}
                            <div class="col-md-8 border-right">
                                <div class="col-md-5">
                                    <a href="#" style="display: block; margin-top:20px;">
                                        <img class="img-responsive" src="{{ asset('images/tintuc/' . $firstPost->Hinh) }}" alt="" style="width: 190px; height: 120px; border-radius: 2px">
                                    </a>
                                </div>
                                <div class="col-md-7">
                                    <h4>{{ $firstPost->Ten }}</h4>
                                    <p style="text-align: justify" >{{ $firstPost->TomTat }}</p>
                                    <a class="btn btn-warning" href="">Chi tiết <span class="glyphicon glyphicon-chevron-right"></span></a>
                                </div>

                            </div>


                            <div class="col-md-4">
                                @foreach ( $datas as $data )   
                                    <a href="#">
                                        <h5>
                                            {{-- <span class="glyphicon glyphicon-list-alt"></span> --}}
                                            <i class="fa-light fa-newspaper"></i>
                                            {{ $data->TieuDe }}
                                        </h5>
                                    </a>
                                @endforeach
                            </div>

                            <div class="break"></div>
                        </div>
                        @endif
                    @endforeach
                    <!-- end item -->
                    <!-- item -->
                    {{-- <div class="row-item row">
                        <h3><a href="#">Category</a> |
                            <small><a href="#"><i>subtitle</i></a>/</small>
                            <small><a href="#"><i>subtitle</i></a>/</small>
                            <small><a href="#"><i>subtitle</i></a>/</small>
                            <small><a href="#"><i>subtitle</i></a>/</small>
                            <small><a href="#"><i>subtitle</i></a>/</small>
                        </h3>
                        <div class="col-md-8 border-right">
                            <div class="col-md-5">
                                <a href="#">
                                    <img class="img-responsive" src="image/320x150.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <h3>Project Five</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, quo, minima, inventore voluptatum saepe quos nostrum provident .</p>
                                <a class="btn btn-warning" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <a href="#">
                                <h4>
                                    <span class="glyphicon glyphicon-list-alt"></span>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </h4>
                            </a>

                            <a href="#">
                                <h4>
                                    <span class="glyphicon glyphicon-list-alt"></span>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </h4>
                            </a>

                            <a href="#">
                                <h4>
                                    <span class="glyphicon glyphicon-list-alt"></span>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </h4>
                            </a>

                            <a href="#">
                                <h4>
                                    <span class="glyphicon glyphicon-list-alt"></span>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </h4>
                            </a>
                        </div>



                        <div class="break"></div>
                    </div> --}}
                    <!-- end item -->
                    <!-- item -->
                    {{-- <div class="row-item row">
                        <h3><a href="#">Category</a> |
                            <small><a href="#"><i>subtitle</i></a>/</small>
                            <small><a href="#"><i>subtitle</i></a>/</small>
                            <small><a href="#"><i>subtitle</i></a>/</small>
                            <small><a href="#"><i>subtitle</i></a>/</small>
                            <small><a href="#"><i>subtitle</i></a>/</small>
                        </h3>
                        <div class="col-md-8 border-right">
                            <div class="col-md-5">
                                <a href="#">
                                    <img class="img-responsive" src="image/320x150.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <h3>Project Five</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, quo, minima, inventore voluptatum saepe quos nostrum provident .</p>
                                <a class="btn btn-warning" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <a href="#">
                                <h4>
                                    <span class="glyphicon glyphicon-list-alt"></span>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </h4>
                            </a>

                            <a href="#">
                                <h4>
                                    <span class="glyphicon glyphicon-list-alt"></span>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </h4>
                            </a>

                            <a href="#">
                                <h4>
                                    <span class="glyphicon glyphicon-list-alt"></span>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </h4>
                            </a>

                            <a href="#">
                                <h4>
                                    <span class="glyphicon glyphicon-list-alt"></span>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </h4>
                            </a>
                        </div>



                        <div class="break"></div>
                    </div> --}}
                    <!-- end item -->
                    <!-- item -->
                    {{-- <div class="row-item row">
                        <h3><a href="#">Category</a> |
                            <small><a href="#"><i>subtitle</i></a>/</small>
                            <small><a href="#"><i>subtitle</i></a>/</small>
                            <small><a href="#"><i>subtitle</i></a>/</small>
                            <small><a href="#"><i>subtitle</i></a>/</small>
                            <small><a href="#"><i>subtitle</i></a>/</small>
                        </h3>
                        <div class="col-md-8 border-right">
                            <div class="col-md-5">
                                <a href="#">
                                    <img class="img-responsive" src="image/320x150.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <h3>Project Five</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, quo, minima, inventore voluptatum saepe quos nostrum provident .</p>
                                <a class="btn btn-warning" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <a href="#">
                                <h4>
                                    <span class="glyphicon glyphicon-list-alt"></span>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </h4>
                            </a>

                            <a href="#">
                                <h4>
                                    <span class="glyphicon glyphicon-list-alt"></span>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </h4>
                            </a>

                            <a href="#">
                                <h4>
                                    <span class="glyphicon glyphicon-list-alt"></span>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </h4>
                            </a>

                            <a href="#">
                                <h4>
                                    <span class="glyphicon glyphicon-list-alt"></span>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </h4>
                            </a>
                        </div>
                    </div> --}}
                    <!-- end item -->

                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>
@endsection
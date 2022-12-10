@extends('Frontend.Layouts.master')
@section('title', 'Search')
@section('content')
<?php
    function doimau($str, $tukhoa){
        return str_replace($tukhoa, "<span style='color:red; backgroundcolor:yellow'>$tukhoa</span>",$str);
    }
?>
<div class="container">
    <div class="row">
    @include("FrontEnd.Layouts.menu")
        <div class="col-md-9 ">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:var(--primary-color); color:white;">
                    <h4><b>Tìm kiếm: {{ $key }}</b></h4>
                </div>
                @foreach($posts as $post)
                <div class="row-item row">
                        <div class="col-md-3">
                            <a href="{{route('postDetail',$post->id)}}">
                                <br>
                                <img width="200px" height="200px" class="img-responsive"
                                src="{{ asset('images/tintuc/'.$post->Hinh) }}" alt="">
                            </a>
                        </div>
                        <div class="col-md-9">
                            <h3>{!! doimau($post->TieuDe,$key) !!}</h3>
                            <p>{!! doimau($post->TomTat,$key) !!}</p>
                            <a class="btn btn-warning" href="{{route('postDetail',$post->id)}}">Xem thêm <span class="glyphicon glyphicon-chevron-right"></span></a>
                        </div>
                        <div class="break"></div>
                    </div>
                @endforeach
            <!-- Pagination -->
                <div style="text-align:center">
                {{ $posts->appends(Request::all())->links() }}
                </div>
            <!-- /.row -->
            </div>
        </div>
    </div>
</div>
@endsection
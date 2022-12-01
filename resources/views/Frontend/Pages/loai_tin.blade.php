@extends('Frontend.Layouts.master')
@section('title', 'loaiTin')
@section('content')
<div class="container">
    <div class="row">
        @include('Frontend.Layouts.menu')

        <div class="col-md-9 ">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: var(--primary-color);">
                    <h4>Chủ đề: <b>{{ $loaiTin->Ten }}</b></h4>
                </div>

                @foreach ( $posts as $post )    
                    <div class="row-item row">
                        <div class="col-md-3">

                            <a href="{{ route('postDetail',['id'=>$post->id]) }}">
                                <br>
                                <img style="width:200px; height: 150px; border-radius: 2px" class="img-responsive" src="{{ asset('images/tintuc/' . $post->Hinh) }}" alt="{{ asset('images/tintuc/' . $post->TieuDe) }}">
                            </a>
                        </div>

                        <div class="col-md-9">
                            <h3>{{ $post->TieuDe }}</h3>
                            <p>{{ $post->TomTat }}</p>
                            <a class="btn btn-warning" href="{{ route('postDetail',['id'=>$post->id]) }}">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
                        </div>
                        <div class="break"></div>
                    </div>
                @endforeach

                <!-- Pagination -->
                {{-- <div class="row text-center">
                    <div class="col-lg-12">
                        <ul class="pagination">
                            <li>
                                <a href="#">&laquo;</a>
                            </li>
                            <li class="active">
                                <a href="#">1</a>
                            </li>
                            <li>
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li>
                                <a href="#">4</a>
                            </li>
                            <li>
                                <a href="#">5</a>
                            </li>
                            <li>
                                <a href="#">&raquo;</a>
                            </li>
                        </ul>
                    </div>
                </div> --}}
                <div class="row text-center">
                    {{ $posts->links() }}
                </div>
                <!-- /.row -->

            </div>
        </div>

    </div>

</div>
@endsection
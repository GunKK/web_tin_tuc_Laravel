@extends('Frontend.Layouts.master')
@section('title', 'postDetail')
@section('content')
    
@endsection    
    <!-- Page Content -->
    <div class="container" style="margin-top: 80px">
        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-9">

                <!-- Blog Post -->

                <!-- Title -->
                <h1>{{ $post->TieuDe }}</h1>

                <!-- Author -->
                <p class="lead">
                    by <a href="#">Admin</a>
                </p>
                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> Posted on {{ $post->creat_at ?? $date }}</p>

                <!-- Preview Image -->
                <img class="img-responsive" style="border-radius: 2px; width: 396px; height: 284px" src="{{ asset('images/tintuc/'.$post->Hinh) }}" alt="">

                <hr>

                <!-- Post Content -->
                <p>{{ $post->NoiDung }}</p>
                <hr>

                <!-- Blog Comments -->

            @if (Auth::check())
                <!-- Comments Form -->
                <div class="well">
                    <h4>Viết bình luận ...<i class="fa-sharp fa-solid fa-pencil"></i></h4>
                    <input type="hidden" name="userId" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="postId" value="{{ $post->id }}">
                    <form role="form" action="{{ route('comment') }}" method="POST"> 
                        <div class="form-group">
                            <textarea class="form-control" rows="3" placeholder="Write comment..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg">SEND</button>
                    </form>
                </div>
            @endif
                <hr>

                <!-- Posted Comments -->

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="{{ asset('images/logo.jpg') }}" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div>

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="{{ asset('images/logo.jpg') }}" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div>

            </div>
            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-3">

                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: var(--primary-color)"><b>Tin liên quan</b></div>
                    <div class="panel-body">
                        <div class="container" style="width: 100%">
                            @foreach ( $relationPosts as $relationPost )
                                <!-- item -->
                                <div class="container" style="width: 100%">
                                    <div class="row" style="margin-top: 10px;">
                                        <div class="col-md-5" style="padding-left: 0 !important" >
                                            <a href="{{ route('postDetail',['id'=>$relationPost->id]) }}">
                                                <img class="img-responsive" src="{{ asset('images/tintuc/' . $relationPost->Hinh) }}" alt="">
                                            </a>
                                        </div>
                                        <div class="col-md-7" style="padding: 0px">
                                            <a href="{{ route('postDetail',['id'=>$relationPost->id]) }}" class="format-paragraph-2"><b>{{ $relationPost->TieuDe }}</b></a>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 8px">
                                        <p class="format-paragraph-2" style="text-align:justify">{{  $relationPost->TomTat  }}</p>
                                        <div class="break"></div>   
                                    </div>
                                </div>
                                <!-- end item -->
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: var(--primary-color)"><b>Tin nổi bật</b></div>
                    <div class="panel-body">
                        <div class="container" style="width: 100%">
                            @foreach ( $hotPosts as $hotPost )
                                <!-- item -->
                                <div class="container" style="width: 100%">
                                    <div class="row" style="margin-top: 10px;">
                                        <div class="col-md-5" style="padding-left: 0 !important">
                                            <a href="{{ route('postDetail', ['id'=>$hotPost->id]) }}">
                                                <img class="img-responsive" src="{{ asset('images/tintuc/' . $hotPost->Hinh) }}" alt="">
                                            </a>
                                        </div>
                                        <div class="col-md-7" style="padding: 0px">
                                            <a href="{ route('postDetail', ['id'=>$hotPost->id]) }}" class="format-paragraph-2"><b>{{ $hotPost->TieuDe }}</b></a>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 8px">
                                        <p class="format-paragraph-2" style="text-align:justify">{{  $hotPost->TomTat  }}</p>
                                        <div class="break"></div>   
                                    </div>
                                </div>
                                <!-- end item -->
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- /.row -->
    </div>
    <!-- end Page Content -->
<!-- slider -->
<div class="row carousel-holder">
    <div class="col-md-12">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                @php
                    $i=0;
                @endphp
                @foreach ( $slides as $slide) 
                    <li data-target="#carousel-example-generic" data-slide-to="{{ $i }}" @if($i==0) class="active" @endif></li>
                    @php
                        $i++;
                    @endphp
                @endforeach
                {{-- <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li> --}}
            </ol>
            <div class="carousel-inner">
                @php
                    $i=0;
                @endphp
                @foreach ( $slides as $slide)    
                <div @if ($i==0) class=" item active" @else class=" item" @endif>
                    <img class="slide-image" src="{{ asset('images/slide/' . $slide->link) }}" alt="{{ $slide->Ten }}">
                </div>
                @php
                    $i++;
                @endphp
                @endforeach
            </div>
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </div>
</div>
<!-- end slide -->
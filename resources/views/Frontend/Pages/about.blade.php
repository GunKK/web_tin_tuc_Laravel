@extends('Frontend.layouts.master')
@section('title', 'About')
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
                <h2 style="margin-top:0px; margin-bottom:0px;">Giới thiệu</h2>
            </div>

            <div class="panel-body">
                <!-- item -->
                <p>
                    <span style="font-size:20pt;color:red">T</span>heo từ điển
                    Wikipedia thì tin tức được hiểu là thông tin về các sự kiện hiện tại. Tin tức có thể
                    xuất hiện thông qua truyền miệng hoặc qua các phương tiện phát thanh truyền hình, phương
                    tiện in ấn hay thông tin điện tử. Nói chung là có rất nhiều phương thức khác nhau được
                    gọi là phương thức lan truyền tin tức.
                </p>
                <p>
                    <span style="font-size:20pt;color:red">H</span>iểu một cách nôm
                    na nhất thì tin tức chính là các thông tin chúng ta tiếp nhận hàng ngày. Các thông tin
                    này liên quan tới con người, sự vật, hiện tượng hay hành động cụ thể. Ngày nay khi nói
                    tới tin tức, chúng ta thường liên tưởng tới báo chí, truyền hình hay các trang tin tức
                    điện tử trên mạng Internet.
                </p>
                <p align="center">
                    <img src="{{ asset('images/logo.jpg') }}" alt="hình news">
                </p>
                <p>
                    <span style="font-size:20pt;color:red">T</span>in tức được cho
                    là có nguồn gốc đầu tiên từ Trung Quốc với hình thức đầu tiên chính là báo viết và giấy
                    in. Bởi giấy là một phát minh nổi tiếng của người Trung Quốc. Báo chí có vai trò cungcấp và lan truyền tin tức nhanh chóng. Vì vậy báo chí sau đó lan rộng ra Châu Âu và các
                    quốc gia khác trên thế giới.
                </p>
                <p>
                    Tham khảo: <b>https://dibo.vn/tin-tuc/</b>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection

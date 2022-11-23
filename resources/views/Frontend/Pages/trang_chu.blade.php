@extends('Frontend.layouts.master')
@section('title', 'Home Page')
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
                    <!-- item -->
                    <div class="row-item row">
                        <h3>
                            <a href="category.html">Category</a> |
                            <small><a href="category.html"><i>subtitle</i></a>/</small>
                            <small><a href="category.html"><i>subtitle</i></a>/</small>
                            <small><a href="category.html"><i>subtitle</i></a>/</small>
                            <small><a href="category.html"><i>subtitle</i></a>/</small>
                            <small><a href="category.html"><i>subtitle</i></a>/</small>
                        </h3>
                        <div class="col-md-8 border-right">
                            <div class="col-md-5">
                                <a href="detail.html">
                                    <img class="img-responsive" src="image/320x150.png" alt="">
                                </a>
                            </div>

                            <div class="col-md-7">
                                <h3>Project Five</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, quo, minima, inventore voluptatum saepe quos nostrum provident .</p>
                                <a class="btn btn-warning" href="detail.html">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
                            </div>

                        </div>


                        <div class="col-md-4">
                            <a href="detail.html">
                                <h4>
                                    <span class="glyphicon glyphicon-list-alt"></span>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </h4>
                            </a>

                            <a href="detail.html">
                                <h4>
                                    <span class="glyphicon glyphicon-list-alt"></span>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </h4>
                            </a>

                            <a href="detail.html">
                                <h4>
                                    <span class="glyphicon glyphicon-list-alt"></span>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </h4>
                            </a>

                            <a href="detail.html">
                                <h4>
                                    <span class="glyphicon glyphicon-list-alt"></span>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </h4>
                            </a>
                        </div>

                        <div class="break"></div>
                    </div>
                    <!-- end item -->
                    <!-- item -->
                    <div class="row-item row">
                        <h3><a href="category.html">Category</a> |
                            <small><a href="category.html"><i>subtitle</i></a>/</small>
                            <small><a href="category.html"><i>subtitle</i></a>/</small>
                            <small><a href="category.html"><i>subtitle</i></a>/</small>
                            <small><a href="category.html"><i>subtitle</i></a>/</small>
                            <small><a href="category.html"><i>subtitle</i></a>/</small>
                        </h3>
                        <div class="col-md-8 border-right">
                            <div class="col-md-5">
                                <a href="detail.html">
                                    <img class="img-responsive" src="image/320x150.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <h3>Project Five</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, quo, minima, inventore voluptatum saepe quos nostrum provident .</p>
                                <a class="btn btn-warning" href="detail.html">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <a href="detail.html">
                                <h4>
                                    <span class="glyphicon glyphicon-list-alt"></span>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </h4>
                            </a>

                            <a href="detail.html">
                                <h4>
                                    <span class="glyphicon glyphicon-list-alt"></span>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </h4>
                            </a>

                            <a href="detail.html">
                                <h4>
                                    <span class="glyphicon glyphicon-list-alt"></span>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </h4>
                            </a>

                            <a href="detail.html">
                                <h4>
                                    <span class="glyphicon glyphicon-list-alt"></span>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </h4>
                            </a>
                        </div>



                        <div class="break"></div>
                    </div>
                    <!-- end item -->
                    <!-- item -->
                    <div class="row-item row">
                        <h3><a href="category.html">Category</a> |
                            <small><a href="category.html"><i>subtitle</i></a>/</small>
                            <small><a href="category.html"><i>subtitle</i></a>/</small>
                            <small><a href="category.html"><i>subtitle</i></a>/</small>
                            <small><a href="category.html"><i>subtitle</i></a>/</small>
                            <small><a href="category.html"><i>subtitle</i></a>/</small>
                        </h3>
                        <div class="col-md-8 border-right">
                            <div class="col-md-5">
                                <a href="detail.html">
                                    <img class="img-responsive" src="image/320x150.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <h3>Project Five</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, quo, minima, inventore voluptatum saepe quos nostrum provident .</p>
                                <a class="btn btn-warning" href="detail.html">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <a href="detail.html">
                                <h4>
                                    <span class="glyphicon glyphicon-list-alt"></span>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </h4>
                            </a>

                            <a href="detail.html">
                                <h4>
                                    <span class="glyphicon glyphicon-list-alt"></span>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </h4>
                            </a>

                            <a href="detail.html">
                                <h4>
                                    <span class="glyphicon glyphicon-list-alt"></span>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </h4>
                            </a>

                            <a href="detail.html">
                                <h4>
                                    <span class="glyphicon glyphicon-list-alt"></span>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </h4>
                            </a>
                        </div>



                        <div class="break"></div>
                    </div>
                    <!-- end item -->
                    <!-- item -->
                    <div class="row-item row">
                        <h3><a href="category.html">Category</a> |
                            <small><a href="category.html"><i>subtitle</i></a>/</small>
                            <small><a href="category.html"><i>subtitle</i></a>/</small>
                            <small><a href="category.html"><i>subtitle</i></a>/</small>
                            <small><a href="category.html"><i>subtitle</i></a>/</small>
                            <small><a href="category.html"><i>subtitle</i></a>/</small>
                        </h3>
                        <div class="col-md-8 border-right">
                            <div class="col-md-5">
                                <a href="detail.html">
                                    <img class="img-responsive" src="image/320x150.png" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <h3>Project Five</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, quo, minima, inventore voluptatum saepe quos nostrum provident .</p>
                                <a class="btn btn-warning" href="detail.html">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <a href="detail.html">
                                <h4>
                                    <span class="glyphicon glyphicon-list-alt"></span>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </h4>
                            </a>

                            <a href="detail.html">
                                <h4>
                                    <span class="glyphicon glyphicon-list-alt"></span>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </h4>
                            </a>

                            <a href="detail.html">
                                <h4>
                                    <span class="glyphicon glyphicon-list-alt"></span>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </h4>
                            </a>

                            <a href="detail.html">
                                <h4>
                                    <span class="glyphicon glyphicon-list-alt"></span>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </h4>
                            </a>
                        </div>



                        {{-- <div class="break"></div> --}}
                    </div>
                    <!-- end item -->

                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>
@endsection
@extends('layouts.master')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/post.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/post_responsive.css') }}">
    <style type="text/css">
        @media only screen and (max-width: 575px) 
            .show.flex {
                flex-direction: column;
            }
    </style>
@stop
@section('content')
<div class="home">
    <div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/post.jpg" data-speed="0.8"></div>
    <div class="home_content">
        <div class="post_category trans_200"><a href="category.html" class="trans_200">sport</a></div>
        <div class="post_title">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</div>
    </div>
</div>
<!-- Page Content -->

<div class="page_content">
    <div class="container">
        <br><br>
        <div class="heading">
            <h2><center>Our Pricing</center></h2>
        </div>
        <!-- <div class="row">
            <div class="col-4-lg ml-5 mr-5 mb-10 mt-5">
                <a href="#">
                    <div class="card" style="width:18rem;">
                        <img src="{{ asset('images/netellar.jpeg')}}" alt="card one" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">
                                Scrill / Netellar 
                            </h5>
                            <p class="cart-text">
                                Effects present letters inquiry no an removed or friends. Desire behind latter me though in. Supposing shameless am he engrossed up additions. My possible peculiar together to. Desire so better am cannot he up before points. Remember mistaken opinions 
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-4-lg ml-5 mr-5 mb-10 mt-5">
                <a href="/matches">
                    <div class="card" style="width:18rem;">
                        <img src="{{ asset('images/2.jpg')}}" alt="card one" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">
                                Cricket Prediction
                            </h5>
                            <p class="cart-text">
                                Effects present letters inquiry no an removed or friends. Desire behind latter me though in. Supposing shameless am he engrossed up additions. My possible peculiar together to. Desire so better am cannot he up before points. Remember mistaken opinions 
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-4-lg ml-5 mb-10 mt-5">
                <a href="#">
                    <div class="card" style="width:18rem;">
                        <img src="{{ asset('images/3.jpg')}}" alt="card one" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">
                                Dream 11 Prediction 
                            </h5>
                            <p class="cart-text">
                                Effects present letters inquiry no an removed or friends. Desire behind latter me though in. Supposing shameless am he engrossed up additions. My possible peculiar together to. Desire so better am cannot he up before points. Remember mistaken opinions 
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div> -->
        <div class="show flex">    
            @include('layouts.plan', ['name' => 'Monthly'])
            @include('layouts.plan', ['name' => 'Yearly'])
            @include('layouts.plan', ['name' => 'Annualy'])
            @include('layouts.plan', ['name' => 'Monthly'])
        </div>
    </div>
</div>

@endsection
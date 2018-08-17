@extends('layouts.master')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/post.css') }}">
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
        <br>
        <div class="center">
            <h1><center>Matches</center></h1>
        </div>
            <?php foreach ($matches as $match): ?>
                <a href="{{ route('match-detail.show', $match->id) }}">
                    <div class="sec col-lg-12 col-12">
                        <div class="team-1">
                            {{ $match->team_1 }}
                        </div>
                        <div class="between">
                            V/s
                        </div>
                        <div class="team-2">
                            {{ $match->team_2 }}
                        </div>
                    </div>
                </a>
            <?php endforeach ?>
    </div>
</div>
@endsection
@extends('layouts.master')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/post.css') }}">
@stop
@section('content')
<div class="home">
    <div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('images/post.jpg') }}" data-speed="0.8"></div>
    <div class="home_content">
        <div class="post_category trans_200"><a href="category.html" class="trans_200">sport</a></div>
        <div class="post_title">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</div>
    </div>
</div>
<!-- Page Content -->

<div class="page_content">
    <div class="container">
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
        <div class="heading">
            <h2><center>Top 11</center></h2>
        </div> 
        <div class="col-lg-12"><div class="second-heading"><b>{{ $match->team_1 }}</b></div>
            <ul>
                <?php foreach ($team1 as $team): ?>
                    
                <li><img src="{{ asset('images/blue.png') }}" class="icon-left">{{ $team->player->player_name }}</li>
                
                <?php endforeach ?>
            </ul>
        </div>
        <div class="col-lg-12 top-11-right"><div class="second-heading"><b>{{ $match->team_2 }}</b></div>
            <ul>
                <?php foreach ($team2 as $team): ?>
                    <li>{{ $team->player->player_name }}<img src="{{ asset('images/green.png') }}" class="icon-right"></li>
                <?php endforeach ?>
            </ul>
        </div>

        <div class="heading">
            <h2><center>MATCH DETAILS</center></h2>
        </div>
        <div>
            {{ $match->match_detail }}
        </div>

        <div class="heading mt-5 mb-4">
            <h2><center>FANTASY TIPS</center></h2>
        </div> 
        <div class="col-lg-12"><div class="second-heading"><b>Safe Captain Choices</b></div>
            <ul class="ml-5">
                <?php foreach ($safe as $team): ?>
                    <li>{{ $team->player->player_name }}</li>
                <?php endforeach ?>
                <?php foreach ($safe as $team): ?>
                    <li>{{ $team->player->player_name }}</li>
                <?php endforeach ?>
                <?php foreach ($safe as $team): ?>
                    <li>{{ $team->player->player_name }}</li>
                <?php endforeach ?>
                <?php foreach ($safe as $team): ?>
                    <li>{{ $team->player->player_name }}</li>
                <?php endforeach ?>
                <?php foreach ($safe as $team): ?>
                    <li>{{ $team->player->player_name }}</li>
                <?php endforeach ?>
            </ul>
        </div>
        <div class="col-lg-12 top-11-right mb-5"><div class="second-heading"><b>Risky Captain Choices</b></div>
            <ul class="mr-5">
                <?php foreach ($risky as $team): ?>
                    <li>{{ $team->player->player_name }}</li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>
@endsection
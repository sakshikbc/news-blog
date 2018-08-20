@extends('layouts.app2')

@section('content')
<div class="container">
    <center><h1>Match Details</h1></center>
    <form method="POST" action="/match-details" enctype="multipart/form-data">
        {{ csrf_field() }}
        @include('layouts.errors')
        <!-- <div class="form-group">
            <label for="title">URL</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div> -->
        <div class="form-group">
            <label for="team">Team 1</label>
            <select class="form-control" id="team1" name="team_1">
                    <option>Select Team 1</option>
                    <?php foreach ($teams as $team): ?>
                        <option>{{ $team->team_name }}</option>
                    <?php endforeach ?>
            </select>
        </div>
        <div class="form-group">
            <label for="sel1">Team 1</label>
            <select class="form-control" id="team2" name="team_2">
                    <option>Select Team 2</option>
                    <?php foreach ($teams as $team): ?>
                        <option>{{ $team->team_name }}</option>
                    <?php endforeach ?>
            </select>
        </div>
        <div class="form-group">
            <label for="match_detail">Match Details</label>
                <!-- <textarea></textarea> -->

            <textarea id="froala_editor" name="match_detail"></textarea>
        </div>
        <div class="form-group">
            <label>Match Date</label>
            <input type="date" name="match_date">
        </div>
        <!-- <div class="form-group row">
            <div class="col-md-6">
                <label for="body">Featured Image</label>
                <input type="file" class="form-control" name="file" required>
            </div>
            <div class="col-md-6">
                <label for="body">Alt </label>
                <input type="text" class="form-control" name="alt" required>
            </div>
        </div>
        <div class="form-group">
          <label for="title">Meta Keywords</label>
          <input type="text" class="form-control" name="meta_keywords" required>
        </div>
        <div class="form-group">
            <label for="title">Meta Description</label>
            <input type="text" class="form-control" name="meta_desc" required>
        </div>
        <div class="form-group">
            <label for="title">Author Name</label>
            <input type="text" class="form-control" name="author_name" required>
        </div>
        <div class="form-group">
            <label for="title">Seo Title</label>
            <input type="text" class="form-control" name="seo_title" required>
        </div>
        <div class="form-group">
            <label for="title">Url</label>
            <input type="text" class="form-control" name="url" required>
        </div> -->


        <div class="form-group">
            <button type="submit" id="saveButton" class="btn btn-primary btn-round">Submit</button>
        </div>
    </form>
</div>
@endsection
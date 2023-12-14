@extends('layout')
@section('content')
<div class="container">

    <div class="card">
        <div class="card-header" style="text-align: center;">
            New Posts
        </div>
        <div class="card-body">
            <form action="/posts" method="post">
                @csrf
                <div class="form-group">
                    <label for="tittle1">Title</label>
                    <input type="text" name="title" id="title1" placeholder="Enter Title" class="form-control">
                </div><br>
                <div class="form-group">
                    <label for="desc">Description</label>
                    <input type="text" name="description" id="desc" placeholder="Enter Description" class="form-control">
                </div><br>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/posts" class="btn btn-success">Back</a>

            </form>


        </div>
    </div>
</div>
@endsection
@extends('layout')
@section('content')
<div class="container">

    <div class="card">
        <div class="card-header" style="text-align: center;">
            Edit Posts
        </div>
        <div class="card-body">
            <form action="/posts/{{$edit->id}}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="tittle1">Title</label>
                    <input value="{{$edit->title}}" type="text" name="title" id="title1" placeholder="Enter Title" class="form-control">
                </div><br>
                <div class="form-group">
                    <label for="desc">Description</label>
                    <input value="{{$edit->description}}" type="text" name="description" id="desc" placeholder="Enter Description" class="form-control">
                </div><br>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="/posts" class="btn btn-success">Back</a>

            </form>


        </div>
    </div>
</div>
@endsection
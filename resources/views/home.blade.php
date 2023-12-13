@extends('layout')
@section('content')
<div class="container">
<div class="card">
  <div class="card-header">
    Contents
  </div>
  <div class="card-body">
    
    @foreach ($data as $key)
    <div>
    <h5 class="card-title">{{ $key->title }}</h5>
    <p class="card-text">{{ $key->description }}</p>
    <a href="#" class="btn btn-primary">View  </a>
    </div><br>
    @endforeach
    
  </div>
</div>
</div>
@endsection
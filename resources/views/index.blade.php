@extends('layouts.app')

@section('content')
<style>
.card img {
  height: 280px;
  width: 100%;
  object-fit: cover;
  position: relative;
  overflow: hidden;
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container">
<h1 style="text-align: center;">What is Photo Pack ?</h1><br>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<p></p>
<div class="container">
  <div class="card-deck">
    @foreach($feed as $f)
    <div class="card">
     <img class="card-img-top" src="/feed/{{ $f->photo }}" alt="{{ $f->title }}">
      <div class="card-body">
        <h5 class="card-title">{{ $f->title }}</h5>
        <p class="card-text">{{ Str::limit($f->content, 35) }}</p>
      </div>
      <div class="card-footer">
        <p class="card-text"><i class="fa fa-user" style="font-size:15px">&nbsp;  {{ Str::limit($f->user->name, 15) }}</i></p>
        <i class="fa fa-clock-o" style="font-size:14px">&nbsp;{{ $f->created_at}}</i>&nbsp;
      </div>
    </div>
    @endforeach
  </div>
</div>
<div style="display:flex;justify-content:center;margin-top:25px;">
  {{ $feed->links() }}
</div>
@endsection

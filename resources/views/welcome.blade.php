@extends('layout')

@section('content')
  <div class="flex-center position-ref full-height">
      @if (Route::has('login'))
          <div class="top-right links">
              <a href="{{ url('/login') }}">Login</a>
              <a href="{{ url('/register') }}">Register</a>
          </div>
      @endif

      <div class="content">
          <div class="title m-b-md">
              Laravel Home Page
          </div>
          <div class="container">
            <a href="index" class="title">Display Cards</a>
          </div>
          <div class="container">
            <a href="about" class="title small">About Page</a>
          </div>
      </div>
  </div>
@endsection

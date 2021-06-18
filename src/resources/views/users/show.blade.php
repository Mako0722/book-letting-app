@extends('app')

@section('title', $user->name)

@section('content')
  @include('nav')
  <div class="container ">
  @include('users.user')
    @foreach($articles as $article)
      @include('articles.card')
    @endforeach
  </div>
@endsection
@extends('app')

@section('title', '記事一覧')

@section('content')
@include('nav')
  <div class="container w-50">
  @foreach($articles as $article)
  
  @include('articles.card')
  @endforeach
  </div>
@endsection
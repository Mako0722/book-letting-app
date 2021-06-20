@extends('layouts.comicapp')
@section('title', 'comic.add')
 
@section('menubar')
  @parent
  登録ページ
@endsection
 
@section('content')
  {!! Form::open(['url' => '/comic/add', 'method' => 'post', 'files' => true]) !!} 
 
    <!-- バリデーション -->
    @if($errors->has('comic_name'))
      <p>{{$errors->first('comic_name')}}</p>
    @endif

    @if($errors->has('image'))
    <p>{{$errors->first('image')}}</p>
    @endif
 
    {{Form::label('comic', 'コミック名')}}
    {{Form::text('comic_name', old('comic_name'))}}  
 
    {{Form::label('authors', '作者')}}   
    <select name="author_id">
      @foreach($authors as $author)
        <option value={{$author->id}} @if(old('author_id')==$author->id) selected  @endif>
          {{$author->author}}
        </option>
      @endforeach
    </select>
 
    {{Form::label('magazines', '連載誌')}}      
    <select name="magazine_id">
      @foreach($magazines as $magazine)
        <option value={{$magazine->id}} @if(old('magazine_id')==$magazine->id) selected  @endif>
          {{$magazine->magazine}}
        </option>
      @endforeach
    </select>
 
    {{Form::label('comic', '説明')}}
    {{Form::text('description', old('description'))}}
 
    {{Form::label('image', '画像')}}
    {{Form::file('image', $attributes = [])}}

    {!! Form::submit('登録') !!}
  {!! Form::close() !!}
@endsection
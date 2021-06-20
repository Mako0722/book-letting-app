@extends('layouts.comicapp')
@section('title', 'comic.Index')

@section('menubar')
  @parent
  
@endsection

@section('content')

　　<!-- 登録ページに遷移 -->
  {!! Form::open(['url' => '/comic/add', 'method' => 'get']) !!}
    {!! Form::submit('登録', ['class' => 'form-control', 'id' => '']) !!}
  {!! Form::close() !!}  
 
  <!-- データベースの表示 -->
  <table>
    <tr>
      <th>コミック</th>
      <th>作者</th>
      <th>連載誌</th>
      <th>説明</th>
    </tr>
    @foreach($items as $item)
      <tr>
        <td>{{$item->comic_name}}</td>
        <td>{{$item->magazine->magazine}}</td>
        <td>{{$item->author->author}}</td>
        <td>{{$item->description}}</td>
        @if($item->image)
            <td>
              <img src="/storage/images/{{$item->image}}" alt="images" width="300" height="300">
            </td>
          @else
            <td>
              <img src="/storage/images/Noimage_image.png" alt="images" width="300" height="300">
            </td>                   
          @endif
      </tr>
    @endforeach
  </table>   
@endsection
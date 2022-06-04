@extends('layout')

@section('content')

<div class="text-right">
    <a href="{{ route('create') }}" class="btn btn-outline-secondary btn-sm mt-4">新規ファイル作成</a>
</div>

<div class="container">
    <div class="row">
@foreach ($albums as $album)
<div class="col-md-4 text-left mt-4">
    <div class="text-right">
        <div class="mt-5"><img src=" {{ asset('storage/'.$album->content) }}" width="300" height="300" art=""></div>
        <div class="mt-5"><a href="{{ route('delete',['id'=>$album->id]) }}" class="btn btn-outline-secondary btn-sm">削除</a></div>
    </div>
</div>
@endforeach
</div>
  </div>
@endsection
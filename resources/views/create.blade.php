@extends('layout')

@section('content')
<div>
<form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
  @csrf
  @if ($errors->any())
  @foreach ($errors->all() as $error)
  <p>{{ $error }}</p>
  @endforeach
  @endif
  <input type="file" name="profile_img">
    <input type="submit" value="アップロードする"></button>
    <a href="{{ route('index') }}">キャンセル</a>
  </div>
</form>

@endsection
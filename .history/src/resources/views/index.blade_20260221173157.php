@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<form action="" class="form">
    <div class="form-list">
        <label><input type="radio"><span>おすすめ</span></label>
        <label><input type="radio"><span>マイリスト</span></label>
    </div>
    <div class="form-list">
        <img src="" alt="商品画像" class="img">
        <div class="name">商品名</div>
    </div>
</form>
@endsection
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')
<div class="profile">
    <div class="profile-div">
        <img src="" alt="" class="profile-img">
        <h2>ユーザー名</h2>
    </div>
    <a href="{{ route('profile.index') }}">プロフィールを編集</a>
</div>
@endsection
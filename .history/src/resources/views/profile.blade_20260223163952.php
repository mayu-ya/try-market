@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('content')
<div class="content">
    <div class="title">
        <h1 class="title-h">プロフィール設定</h1>
    </div>

    <form class="form" action="" method="">
        <div class="form-img">
            <div class="img">
                <img src="" class="img-picture" id="sample">
            </div>
            <div class="img-input">
                <input type="file" class="img-input-file" id="input" name="profile_img"><label>画像を選択する</label>
            </div>
        </div>

        <div class="form-content">
            <span class="form-span">ユーザー名</span>
            <div class="form-input">
                <input type="text" class="form-input-text" name="name">
            </div>
        </div>
        <div class="form-content">
            <span class="form-span">郵便番号</span>
            <div class="form-input">
                <input type="text" class="form-input-text" name="post_code">
            </div>
        </div>
        <div class="form-content">
            <span class="form-span">住所</span>
            <div class="form-input">
                <input type="text" class="form-input-text" name="address">
            </div>
        </div>
        <div class="form-content">
            <span class="form-span">建物名</span>
            <div class="form-input">
                <input type="text" class="form-input-text" name="building">
            </div>
        </div>
        <div class="form-button">
            <button class="form-button-submit">更新する</button>
        </div>
        <script src="app.js"></script>
    </form>
</div>
@endsection
@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css')}}">
@endsection
@section('content')
<div class="register-form">
    <h2 class="register-form__heading">商品登録</h2>
    <div class="register-form__content">
        <form action="{{ route('posts.store') }}" method="POST">
        @csrf
            <div class="register-for__group">
                <label class="register-form__label">商品名
                <span class="register-form__required">必須</span>
                </label>
                <div class="register-form__input">
                    <input class="register-form__input-text" type="text" name="name" id="name" value="{{ old('name') }}" placeholder="商品名を入力">
                    <p class="register-form__error-message">
                        @error('name')
                        {{ $message }}
                        @enderror
                    </p>
                </div>
            </div>
            <div class="register-for__group">
                <label class="register-form__label">値段
                <span class="register-form__required">必須</span>
                </label>
                <div class="register-form__input">
                    <input class="register-form__input-text" type="integer" name="price" id="price" value="{{ old('price') }}" placeholder="値段を入力">
                    <p class="register-form__error-message">
                        @error('price')
                        {{ $message }}
                        @enderror
                    </p>
                </div>
            </div>
            <div class="register-for__group">
                <label class="register-form__label">商品画像
                <span class="register-form__required">必須</span>
                </label>
                <div class="register-form__input">
                    <input class="register-form__input-image" type="file" name="image" id="image" value="{{ old('image') }}" placeholder="ファイルを選択" required>
                    <p class="register-form__error-message">
                        @error('image')
                        {{ $message }}
                        @enderror
                    </p>
                </div>
            </div>
            <div class="register-for__group">
                <label class="register-form__label">季節
                <span class="register-form__required">必須</span>
                <span class="register-form__annotation">複数選択可</span>
                </label>
                <div class="register-form__input">
                    <input class="register-form__input-select" type="radio" name="season_id" checked />
                        <label class="register-form__input-select-label" for="spring">春</label>
                        <label class="register-form__input-select-label" for="summer">夏</label>
                        <label class="register-form__input-select-label" for="autumn">秋</label>
                        <label class="register-form__input-select-label" for="winter">冬</label>
                    <p class="register-form__error-message">
                        @error('season')
                        {{ $message }}
                        @enderror
                    </p>
                </div>
                <div class="register-for__group">
                <label class="register-form__label">商品説明
                <span class="register-form__required">必須</span>
                </label>
                <div class="register-form__input">
                    <input class="register-form__input-text" type="text" name="description" id="description" value="{{ old('description') }}" placeholder="商品の説明を入力">
                    <p class="register-form__error-message">
                        @error('description')
                        {{ $message }}
                        @enderror
                    </p>
                </div>
            </div>
            <div class="register-button">
                <input class="submit-button" type="submit" value="登録" name="send">
                <input class="back-button" type="submit" value="戻る" name="back">
            </div>
        </form>
    </div>
</div>
@endsection
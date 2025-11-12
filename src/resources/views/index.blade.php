@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css')}}">
@endsection

@section('content')
<h1 class="title">商品一覧</h1>

<div class="register">
    <a class="register-button" href="{{ route('products.register') }}">商品登録</a>
</div>

<div class="search">
    <form class="search-area" action="{{ route('products.find') }}" method="GET">
        <input class="search-area_textbox" type="text" name="keyword" value="{{ $keyword ?? '' }}" placeholder="商品名で検索">
        <button type="submit">検索</button>
    </form>

    <div class="sort-title">価格順で表示</div>
    <div class="sort-pulldown">
        <!-- 並び替え機能は後で実装 -->
    </div>
</div>

<div class="card-area">
    @forelse($products as $product)
        <a href="{{ route('products.show', $product->id) }}" class="block">
            <div class="card">
                <!-- 画像 -->
                <div class="card__image">
                    @if($product->image)
                        <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}">
                    @else
                        <div class="bg-gray-200 border-2 border-dashed rounded-xl w-full h-48"></div>
                    @endif
                </div>

                <!-- カード内容 -->
                <div class="card__inner">
                    <h3 class="font-semibold text-lg text-gray-800 mb-2 line-clamp-2">
                        {{ $product->name }}
                    </h3>
                    <p class="text-xl font-bold text-indigo-600">
                        ¥{{ number_format($product->price) }}
                    </p>
                </div>
            </div>
        </a>
    @empty
        <div class="col-span-full text-center py-12">
            <p class="text-gray-500 text-lg">商品が登録されていません。</p>
        </div>
    @endforelse
</div>
@endsection
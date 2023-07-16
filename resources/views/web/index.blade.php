@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-3">
        @component('components.sidebar', ['categories' => $categories, 'major_categories' => $major_categories])
        @endcomponent
    </div>
    <div class="col-md-9">
        <h1>おすすめ商品</h1>
        <div class="row">
            @foreach ($recommend_products as $recommend_product)
            <div class="col-md-4 mb-4">
                <a href="{{ route('products.show', $recommend_product) }}">
                    <div class="card">
                        <div class="card-body">
                            @if ($recommend_product->image !=="")
                            <img src="{{ asset($recommend_product->image) }}" class="card-img-top" alt="{{ $recommend_product->name }}">
                            @else
                            <img src="{{ asset('img/dummy.png')}}" class="card-img-top" alt="Dummy Image">
                            @endif
                            <h5 class="card-title mt-3">{{ $recommend_product->name }}</h5>
                            <p class="card-text">
                                <span class="text-muted">￥{{ $recommend_product->price }}</span>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>

        <h1>新着商品</h1>
        <div class="row">
            @foreach ($recently_products as $recently_product)
            <div class="col-md-3 mb-4">
                <a href="{{ route('products.show', $recently_product) }}">
                    <div class="card">
                        <div class="card-body">
                            @if ($recently_product->image !== "")
                            <img src="{{ asset($recently_product->image) }}" class="card-img-top" alt="{{ $recently_product->name }}">
                            @else
                            <img src="{{ asset('img/dummy.png') }}" class="card-img-top" alt="Dummy Image">
                            @endif
                            <h5 class="card-title mt-3">{{ $recently_product->name }}</h5>
                            <p class="card-text">
                                <span class="text-muted">￥{{ $recently_product->price }}</span>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

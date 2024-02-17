@extends('layouts.app', ['page' => __('Products'), 'pageSlug' => 'products'])

@section('content')
    <h1>All Products</h1>
    @foreach ($products as $product)
        <div class="card">
            <div class="card-header">
                <h5 class="title">{{ $product->description }}</h5>
            </div>
            <div class="card-body">
                <!-- Вставляем изображение с помощью тега <img> -->
                <img src="{{ asset('images/' . $product->image) }}" >
            </div>
        </div>
        <a href="{{ route('admin.create.image', $product->id) }}" class="btn btn-primary">Add Image</a>
    @endforeach
@endsection

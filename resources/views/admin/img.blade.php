@extends('layouts.app', ['page' => __('Products'), 'pageSlug' => 'products'])

@section('content')
    <h1>All Products</h1>
    <div class="row">
        @foreach ($products as $product)
            <div class="col-md-4">
                <div class="card card-user">
                    <div class="card-body">
                        <!-- Вставляем изображение с помощью тега <img> -->
                        <img style="margin: 0 auto; height:500px" src="{{ asset('images/' . $product->image) }}" >
                    </div>
                    <h5 class="title" style="text-align: center; font-size:20px">{{ $product->description }}</h5>
                    <div class="mb-3" style="width: 40%; margin:0 auto;">
                        <a href="{{ route('admin.create.image', $product->id) }}" class="btn btn-primary">Add Image</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

@extends('layouts.app', ['page' => __('Create Product'), 'pageSlug' => 'product_create'])

@section('content')
<h1>Create Product</h1>

            <form method="post" action="{{ route('products.store') }}" autocomplete="off" enctype="multipart/form-data">
                    <div class="card-body">
                        @csrf
                        @method('POST')

                        @include('alerts.success')



                        <div class="form-group{{ $errors->has('image') ? ' has-danger' : '' }}">
                            <label>{{ __('Image') }}</label>
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input{{ $errors->has('image') ? ' is-invalid' : '' }}" id="customFile">
                                <label class="custom-file-label" for="customFile">{{ __('Choose file') }}</label>
                            </div>
                            @include('alerts.feedback', ['field' => 'image'])
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary">{{ __('Save') }}</button>
                    </div>
                </form>

@endsection
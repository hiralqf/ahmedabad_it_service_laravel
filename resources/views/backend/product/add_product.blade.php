@extends('layouts/layoutMaster')

@section('title', 'Create product')

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/cards-advance.css')}}">
@endsection

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/flatpickr/flatpickr.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
@endsection

@section('content')
<div class="card">
    <h5 class="card-header">{{ isset($product) ? "Edit product" : "Create product" }}</h5>
    <div class="card-body">
        <form id="product" class="mb-3 product" 
              action="{{ isset($product) ? route('product-insert', $product->id) : route('product-insert') }}" 
              data-mode="{{ isset($product) ? 'update' : 'insert' }}" 
              method="POST" 
              enctype="multipart/form-data">
            @csrf

            <div class="row">
                <!-- Primary Title -->
                <div class="mb-3 col-4">
                    <label class="form-label" for="primary_title">Primary Title</label>
                    <input type="text" name="primary_title" id="primary_title" class="form-control" placeholder="Enter Primary Title" 
                           value="{{ isset($product) ? $product->primary_title : old('primary_title') }}"/>
                </div>

                <!-- Secondary Title -->
                <div class="mb-3 col-4">
                    <label class="form-label" for="secondary_title">Secondary Title</label>
                    <input type="text" name="secondary_title" id="secondary_title" class="form-control" placeholder="Enter Secondary Title" 
                           value="{{ isset($product) ? $product->secondary_title : old('secondary_title') }}"/>
                </div>

                <!-- Sub Title -->
                <div class="mb-3 col-4">
                    <label class="form-label" for="sub_title">Sub Title</label>
                    <input type="text" name="sub_title" id="sub_title" class="form-control" placeholder="Enter Sub Title" 
                           value="{{ isset($product) ? $product->sub_title : old('sub_title') }}"/>
                </div>

                <!-- Category -->
                <div class="mb-3 col-4">
                    <label for="category_id" class="form-label">Category</label>
                    <select name="category_id" id="category_id" class="select2 form-select">
                        <option value="">Select category</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}"
                            {{ old('category_id', isset($product) ? $product->category_id : '') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Description -->
                <div class="mb-3 col-12">
                    <label class="form-label" for="description">Description</label>
                    <textarea name="description" id="description" class="form-control" rows="4" placeholder="Enter Description">{{ isset($product) ? $product->description : old('description') }}</textarea>
                </div>

                <!-- Thumbnail -->
                <div class="mb-3 col-4">
                    <label for="thumbnail" class="form-label">Thumbnail</label>
                    <input type="file" name="thumbnail" id="thumbnail" class="form-control"/>
                    @if(isset($product) && $product->thumbnail)
                        <img src="{{ asset('storage/' . $product->thumbnail) }}" id="thumbnail_preview" 
                             alt="{{ $product->alt }}" class="mt-2 pics" height="120" width="100">
                    @endif
                </div>

                <!-- Images -->
                <div class="mb-3 col-8">
                    <label for="images" class="form-label">Additional Images</label>
                    <input type="file" name="images[]" id="images" class="form-control" multiple accept="image/*"/>
                    <small class="text-muted">You can select multiple images. Hold Ctrl/Cmd to select multiple files.</small>
                                            @if(isset($product) && $product->images && is_array($product->images))
                            <div class="mt-2">
                                @foreach($product->images as $index => $image)
                                    <img src="{{ asset('storage/' . $image) }}" 
                                         alt="Product Image {{ $index + 1 }}" 
                                         class="mt-2 pics me-2" height="80" width="60">
                                @endforeach
                            </div>
                        @endif
                </div>

                <!-- Alt -->
                <div class="mb-3 col-4">
                    <label class="form-label" for="alt">Thumbnail Alt</label>
                    <input type="text" name="alt" id="alt" class="form-control" placeholder="Enter Thumbnail Alt" 
                           value="{{ isset($product) ? $product->alt : old('alt') }}"/>
                </div>

                <!-- Slug -->
                <div class="mb-3 col-4">
                    <label class="form-label" for="slug">Slug</label>
                    <input type="text" name="slug" id="slug" class="form-control" placeholder="Enter Slug" 
                           value="{{ isset($product) ? $product->slug : old('slug') }}"/>
                    <small>Note: Accept only capital letters, small letters, and dashes.</small>
                </div>

                <!-- is_show_home -->
                <div class="mb-3 mt-4 col-2">
                    <label class="form-check-label" for="is_show_home">Show on Home?</label>
                    <input type="checkbox" name="is_show_home" class="form-check-input" id="is_show_home" value="1" 
                           {{ isset($product) && $product->is_show_home == 1 ? 'checked' : '' }}/>
                </div>



                <!-- Submit Button -->
                <div class="mb-3 d-flex justify-content-end">
                    <button class="btn btn-primary me-2" type="submit">{{ isset($product) ? "Update product" : "Add product" }}</button>
                    <a href="{{ route('products') }}" class="btn btn-info">Back</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('page-script')
<script>
    $(document).ready(function () {
        var formMode = $("#product").data('mode');

        jQuery.validator.addMethod("alpha", function (value, element) {
            return this.optional(element) || /^[a-zA-Z0-9\-]+$/i.test(value);
        }, "Only letters, numbers, and dashes allowed.");

        $.validator.addMethod('imageData', function (value, element) {
            if (element.files.length === 0) return true;
            var extension = value.split('.').pop().toLowerCase();
            return ['jpg', 'jpeg', 'png', 'webp', 'svg'].includes(extension);
        }, 'Only JPG, JPEG, PNG, SVG, or WEBP allowed.');

        $('#product').validate({
            rules: {
                primary_title: 'required',
                category_id: 'required',
                thumbnail: {
                    required: function () {
                        return formMode === 'insert';
                    },
                    imageData: true
                },
                slug: {
                    required: true,
                    alpha: true
                },
                alt: 'required'
            },
            messages: {
                primary_title: "Please enter product primary title.",
                category_id: "Please select a category.",
                thumbnail: {
                    required: "Please upload a product image.",
                    imageData: "Only JPG, JPEG, PNG, SVG, or WEBP allowed."
                },
                slug: {
                    required: 'Slug is required.',
                    alpha: 'Only letters, numbers, and dashes are allowed.'
                },
                alt: "Please enter alt text for the image."
            },
            submitHandler: function (form) {
                form.submit();
            }
        });
    });
</script>
@endsection

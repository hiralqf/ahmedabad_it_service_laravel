@extends('layouts/layoutMaster')

@section('title', 'Create Category')

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
    <h5 class="card-header">{{ isset($category) ? "Edit Category" : "Create Category" }}</h5>
    <div class="card-body">
        <form id="category" class="mb-3 category" action="{{ isset($category) ? route('category-insert', $category->id) : route('category-insert') }}" data-mode="{{ isset($category) && isset($category->id) ? 'update' : 'insert' }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <!-- Name -->
                <div class="mb-3 col-4">
                    <label class="form-label" for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" value="{{ isset($category) ? $category->name : old('name') }}"/>
                </div>

                <!-- Thumbnail -->
                <!-- <div class="mb-3 col-4">
                    <label for="thumbnail" class="form-label">Thumbnail</label>
                    <input type="file" name="thumbnail" id="thumbnail" class="form-control"/>
                    @if(isset($category) && $category->thumbnail)
                        <img src="{{ asset('storage/app/public/' . $category->thumbnail) }}" id="thumbnail_preview" alt="{{ $category->alt }}" class="mt-2 pics" height="100" width="200">
                    @endif
                </div> -->

                <!-- Alt -->
                <!-- <div class="mb-3 col-4">
                    <label class="form-label" for="alt">Thumbnail alt</label>
                    <input type="text" name="alt" id="alt" class="form-control" placeholder="Enter Thumbnail alt" value="{{ isset($category) ? $category->alt : old('alt') }}"/>
                </div> -->
                <!-- slug -->
                <div class="mb-3 col-4">
                    <label class="form-label" for="slug">Slug</label>
                    <input type="text" name="slug" id="slug" class="form-control" placeholder="Enter Slug" value="{{ isset($category) && isset($category->slug) ? $category->slug : old('slug') }}"/>
                    <small>Note: Accept only capital letter, small letter and dash. (slug)</small>
                </div>
                <!-- Submit Button -->
                <div class="mb-3 d-flex justify-content-end">
                    <button class="btn btn-primary me-2" type="submit">{{ isset($category) ? "Update Category" : "Add Category" }}</button>
                    <a href="{{ route('category') }}" class="btn btn-info">Back</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('page-script')

<script>
    $(document).ready(function() {

        var formMode = $("#category").data('mode');

        // Custom method to allow only letters, numbers, and dashes
        jQuery.validator.addMethod("alpha", function(value, element) {
        return this.optional(element) || /^[a-zA-Z0-9\-]+$/i.test(value);
        }, "Letters, numbers, and dashes only please");

        $.validator.addMethod('imageData', function(value, element) {
            if (element.files.length === 0) {
                return true;
            }
        var extension = value.split('.').pop().toLowerCase();
        console.log(extension);
        var allowedExtensions = ['jpg', 'jpeg', 'png', 'webp', 'svg'];
        return $.inArray(extension, allowedExtensions) !== -1;
        }, 'Please choose a valid image file.');

        $('#category').validate({
            rules: {
                name:'required',
                // thumbnail: {
                //     required: function(element) {
                //         return formMode === 'insert'; 
                //     },
                //     imageData: true
                // },
                slug: {
                    required: true,
                    alpha: true
                },
                // alt : 'required',
            },
            messages: {
                name: "Please enter name.",
                // thumbnail: {
                //     required: "Please select an image file.",
                //     imageData: "Please choose a JPG, JPEG, PNG, SVG, WEBP file."
                // },
                slug: {
                    required: 'Please enter slug',
                    alpha: 'Accept only capital letter, small letter and dash'
                },
                // alt: "Please select alt"
            },
            submitHandler: function (form) {
                form.submit();
            }
        })
    });
</script>
@endsection
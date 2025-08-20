@extends('layouts/layoutMaster')

{{-- @section('title', $event['title']) --}}

@section('page-style')
<!-- Page -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/cards-advance.css')}}">
@endsection

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/flatpickr/flatpickr.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
@endsection

@section('content')
<div class="container-fluid">
    {{-- <div class="page-header mb-4 d-flex justify-content-between align-items-center">
        <nav class="fw-bold text-dark sp-3 mb-4">
            <div class="container-fluid fs-3">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('joinourteam') }}" class="text-dark">Join Our Team Submission</a></li>
                    <li class="breadcrumb-item mb-2 active" aria-current="page">{{ $joinourteam['name'] }}</li>
                </ol>
            </div>
        </nav>
    </div>
     --}}
    <h4 class="mb-4">inquery box </h4>

    <div class="row">
        <div class="col-md-8 col-lg-12 mx-auto">
            <div class="card shadow-sm border rounded-3">
                <div class="card-body">
                    <h5 class="card-title mb-3"><strong>Name :</strong> {{ $contactshow->name }}</h5>

                    <p>
                        <strong>Email :</strong> 
                        @if(!empty($contactshow->email))
                          <a href="mailto:{{ $contactshow->email }}">{{ $contactshow->email }}</a>
                        @else
                          N/A
                        @endif
                      </p>
                      
                    <p>
                        <strong>Phone :</strong> 
                        @if(!empty($contactshow->phone))
                          <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $contactshow->phone) }}" target="_blank">
                            {{ $contactshow->phone }}
                          </a>
                        @else
                          N/A
                        @endif
                    </p>
                    <p><strong>Message :</strong><br>{{ $contactshow->message ?? 'No message provided.' }}</p>

                    <p><strong>Submitted At :</strong> {{ $contactshow->created_at->format('d M Y, h:i A') }}</p>

                    <div class="mb-2 d-flex justify-content-start mt-3">
                        <a href="{{ route('contactshow') }}" class="btn btn-info">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


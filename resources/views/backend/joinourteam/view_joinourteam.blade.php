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
    <h4 class="mb-4">Join Our Team Submission</h4>

    <div class="row">
        <div class="col-md-8 col-lg-12 mx-auto">
            <div class="card shadow-sm border rounded-3">
                <div class="card-body">
                    <h5 class="card-title mb-3"><strong>Name :</strong> {{ $joinourteam->name }}</h5>

                    <p>
                        <strong>Email :</strong>
                        @if(!empty($joinourteam->email))
                          <a href="mailto:{{ $joinourteam->email }}">{{ $joinourteam->email }}</a>
                        @else
                          N/A
                        @endif
                      </p>
                      
                      <p>
                        <strong>Phone :</strong>
                        @if(!empty($joinourteam->phone))
                          <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $joinourteam->phone) }}" target="_blank">
                            {{ $joinourteam->phone }}
                          </a>
                        @else
                          N/A
                        @endif
                      </p>
                    <p><strong>Message :</strong><br>{{ $joinourteam->message ?? 'No message provided.' }}</p>

                    <p><strong>Submitted At :</strong> {{ $joinourteam->created_at->format('d M Y, h:i A') }}</p>

                    <div class="mt-3">
                        <strong>Resume :</strong><br>
                        @if($joinourteam->pdf_url)
                            <a href="{{ asset('storage/app/public/' . $joinourteam->pdf_url) }}" target="_blank" class="btn btn-md btn-primary mt-2 my-2">
                                <i class="bx bx-download"></i> Download Resume
                            </a>
                        @else
                            <span class="text-muted">No resume uploaded.</span>
                        @endif
                    </div>
                    <div class="mb-2 d-flex justify-content-start mt-3">
                        <a href="{{ route('joinourteam') }}" class="btn btn-info">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


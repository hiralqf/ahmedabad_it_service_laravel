@extends('layouts/layoutMaster')

@section('title', 'Dashboard')

@section('vendor-style')
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/swiper/swiper.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css') }}" />
@endsection

@section('page-style')
<link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/cards-advance.css') }}">
@endsection

@section('vendor-script')
<script src="{{ asset('assets/vendor/libs/swiper/swiper.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
@endsection

@section('content')

<div class="container-fluid">
    <div class="row g-4 mb-4">
       
      
        <!-- Card 2: Inquiries -->
        <div class="col-md-6 col-lg-4 col-xl-3">
          <a href="{{ url('/contactshow') }}" class="text-decoration-none text-reset">
            <div class="card shadow-sm  border-start border-warning border-4">
              <div class="card-body d-flex align-items-center">
                <div class="me-3">
                  <div class="text-warning rounded p-2">
                    <i class="menu-icon tf-icons ti ti-mail fs-1"></i>
                  </div>
                </div>
                <div>
                  <small class="text-muted fs-5">Inquiries</small>
                  <h4 class="mb-0">{{ $inquiryCount }}</h4>
                </div>
              </div>
            </div>
          </a>
        </div>
       <!-- Card 3: Category -->
       <div class="col-md-6 col-lg-4 col-xl-3">
        <a href="{{ url('/category') }}" class="text-decoration-none text-reset">
          <div class="card shadow-sm border-start border-danger border-4">
            <div class="card-body d-flex align-items-center">
              <div class="me-3">
                <div class="text-danger rounded p-2">
                  <i class="menu-icon tf-icons ti  ti-category fs-1"></i>
                </div>
              </div>
              <div>
                <small class="text-muted fs-5">Category</small>
                <h4 class="mb-0">{{ $categoryCount }}</h4>
              </div>
            </div>
          </div>
        </a>
      </div>

        <!-- Card 3: Products -->
        <div class="col-md-6 col-lg-4 col-xl-3">
          <a href="{{ url('/products') }}" class="text-decoration-none text-reset">
            <div class="card shadow-sm border-start border-success border-4">
              <div class="card-body d-flex align-items-center">
                <div class="me-3">
                  <div class="text-success rounded p-2">
                    <i class="menu-icon tf-icons ti ti-package fs-1"></i>
                  </div>
                </div>
                <div>
                  <small class="text-muted fs-5">Products</small>
                  <h4 class="mb-0">{{ $productCount }}</h4>
                </div>
              </div>
            </div>
          </a>
        </div>
      
       
      
        <!-- Card 5: Our Team -->
        
      
      
  <!-- Latest Inquiries Table -->
  <div class="card shadow-sm mb-4">
    <div class="card-header  text-white py-2 d-flex justify-content-between align-items-center">
        <h5 class="mb-0 fs-5">
            <a href="{{ url('/contactshow') }}" class="text-decoration-none text-reset">Latest Inquiries</a>
        </h5>
    </div>
    <div class="table-responsive">
      <table class="table table-bordered table-striped table-hover mb-0">
        <thead class="table-primary">
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Phone</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>
          @forelse($latestInquiries as $inquiry)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $inquiry->name }}</td>
            <td>{{ $inquiry->email }}</td>
            <td>{{ Str::limit($inquiry->message, 40) }}</td>
            <td>
              @if($inquiry->phone)
                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $inquiry->phone) }}" target="_blank" class="text-success fw-semibold">
                  <i class="fab fa-whatsapp me-1"></i>{{ $inquiry->phone }}
                </a>
              @else
                <span class="text-muted">N/A</span>
              @endif
            </td>
            <td>{{ $inquiry->created_at->format('d M Y') }}</td>
          </tr>
          @empty
          <tr>
            <td colspan="6" class="text-center text-muted">No inquiries found.</td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
  

</div>

@endsection
   

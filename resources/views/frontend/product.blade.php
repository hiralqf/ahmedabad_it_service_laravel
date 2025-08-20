@extends('frontend.layouts.indexheader')

@section('title', 'Our Products | Chamunda Industries - Tanker Trailers, Bulk Carriers & Custom Transport Solutions')

@section('description', 'Explore Chamunda Industries’ full range of industrial transportation products, including tanker trailers, bulk carriers, and custom-engineered logistics solutions built for performance and safety.')

@section('keywords', 'Chamunda Industries products, tanker trailers, bulk carriers, semi trailers, industrial transport equipment, custom transport solutions, logistics trailers, heavy-duty trailers')

@section('content')
<!-- Page Title -->
     <div class="page-title dark-background page-title-bg-banner" data-aos="fade">
      <div class="container position-relative">
       <h1>Our Products</h1>
<p>Explore our diverse range of industrial products, including Mainda Flour Bulkers, Silo Manufacturing, Cement Bulkers, and more. Designed for reliability, performance, and efficiency in the transportation and storage sector.</p>

        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li class="current">Our Products</li>
          </ol>
        </nav>
      </div>
    </div>

<!-- Products Filter Section -->
<section class="products-filter section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="filter-buttons text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-out-cubic">
          <button class="filter-btn active" data-filter="all">ALL</button>
          @if(isset($category) && count($category) > 0)
            @foreach($category as $cat)
              <button class="filter-btn" data-filter="{{ $cat->slug }}">{{ strtoupper($cat->name) }}</button>
            @endforeach
          @endif
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Products Grid Section -->
<section class="products-grid section">
  <div class="container">
    <div class="row gy-4" id="products-container">
      
      @if(isset($product) && count($product) > 0)
        @foreach($product as $index => $prod)
          <div class="col-lg-4 col-md-6 product-item" data-category="{{ $prod->category ? $prod->category->slug : '' }}" data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}" data-aos-duration="800" data-aos-easing="ease-out-cubic">
            <div class="product-card">
              <div class="product-image">
                                @if($prod->thumbnail)
                  <img src="{{ asset('storage/' . $prod->thumbnail) }}" alt="{{ $prod->alt ?? $prod->primary_title }}" class="img-fluid">
                @else
                    <img src="{{ asset('frontend/images/our-products/product-1.png') }}" alt="{{ $prod->primary_title }}" class="img-fluid">
                @endif
                <div class="product-overlay">
                  <a href="{{ route('fronted.viewproduct', $prod->slug) }}" class="btn btn-primary">View Details</a>
                </div>
              </div>
                             <div class="product-info">
                 <h4>
                   {{ $prod->primary_title }}
                   @if($prod->secondary_title)
                     {{ $prod->secondary_title }}
                   @endif
                 </h4>
                 <p class="description-truncate">{{ $prod->description ?? 'Industrial transportation solutions' }}</p>
               </div>
            </div>
          </div>
        @endforeach
      @else
        <!-- No products message -->
        <div class="col-12 text-center">
          <div class="no-products-message" data-aos="fade-up" data-aos-duration="800">
            <i class="fas fa-box-open fa-3x text-muted mb-3"></i>
            <h3>No Products Available</h3>
            <p class="text-muted">We're currently updating our product catalog. Please check back soon!</p>
          </div>
        </div>
      @endif

    </div>
  </div>
</section>

<!-- Custom CSS for Product Cards -->
<style>
  .description-truncate {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
    line-height: 1.4;
    max-height: 2.8em; /* 2 lines * 1.4 line-height */
  }
  
  .product-info h4 {
    margin-bottom: 0.5rem;
    line-height: 1.3;
  }
  

</style>

<!-- Products Filter JavaScript -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const productItems = document.querySelectorAll('.product-item');

    filterButtons.forEach(button => {
      button.addEventListener('click', function() {
        // Remove active class from all buttons
        filterButtons.forEach(btn => btn.classList.remove('active'));
        // Add active class to clicked button
        this.classList.add('active');

        const filterValue = this.getAttribute('data-filter');

        productItems.forEach(item => {
          if (filterValue === 'all') {
            item.style.display = 'block';
            item.style.animation = 'fadeInUp 0.6s ease-out';
          } else {
            const categories = item.getAttribute('data-category').split(' ');
            if (categories.includes(filterValue)) {
              item.style.display = 'block';
              item.style.animation = 'fadeInUp 0.6s ease-out';
            } else {
              item.style.display = 'none';
            }
          }
        });
      });
    });
  });
</script>

@include('frontend.layouts.footer')
@endsection
@extends('frontend.layouts.indexheader')

@section('title', 'Product Details | Chamunda Industries - Tanker Trailers & Bulk Transport Solutions')

@section('description', 'View detailed specifications and features of our high-quality industrial transportation products including tanker trailers and bulk carriers, built for performance and safety.')

@section('keywords', 'Chamunda Industries, product details, tanker trailers, bulk carriers, industrial transport, semi trailers, heavy-duty trailers, transport equipment')



@section('content')
  <main class="main">

         <!-- Page Title -->
     <div class="page-title dark-background page-title-bg-banner" data-aos="fade">
       <div class="container position-relative">
         <h1>
           {{ $product->primary_title ?? 'Product Details' }}
           @if($product->secondary_title)
             {{ $product->secondary_title }}
           @endif
         </h1>
         <p>Explore our comprehensive range of industrial tanks, trailers, and transportation solutions.</p>
         <nav class="breadcrumbs">
           <ol>
             <li><a href="{{ url('/') }}">Home</a></li>
             <li><a href="{{ route('fronted.product', 'all') }}">Our Products</a></li>
             <li class="current">
               {{ $product->primary_title ?? 'Product Details' }}
               @if($product->secondary_title)
                 - {{ $product->secondary_title }}
               @endif
             </li>
           </ol>
         </nav>
       </div>
     </div>

<section class="product-detail-section py-5">
  <div class="container">
    <div class="row">
      <!-- Left: Product Image and Thumbnails -->
      <div class="col-lg-6 mb-4 mb-lg-0">
        <div class="main-image-gallery position-relative text-center mb-3">
          <button class="gallery-arrow left-arrow" type="button">
            <i class="fas fa-chevron-left"></i>
          </button>
          @if($product->thumbnail)
            <img id="mainProductImage" src="{{ asset('storage/' . $product->thumbnail) }}" alt="{{ $product->alt ?? $product->primary_title }}" class="img-fluid main-image shadow cursor-pointer" onclick="openImageModal()">
          @else
            <img id="mainProductImage" src="{{ asset('frontend/images/our-products/product-1.png') }}" alt="{{ $product->primary_title }}" class="img-fluid main-image shadow cursor-pointer" onclick="openImageModal()">
          @endif
          <button class="gallery-arrow right-arrow" type="button">
            <i class="fas fa-chevron-right"></i>
          </button>
        </div>
        <div class="thumbnails-wrapper">
          <div class="thumbnails justify-content-center">
            @if($product->thumbnail)
              <img src="{{ asset('storage/' . $product->thumbnail) }}" class="img-thumbnail active" data-index="0">
            @endif
            @if($product->images && is_array($product->images))
              @foreach($product->images as $index => $image)
                <img src="{{ asset('storage/' . $image) }}" class="img-thumbnail" data-index="{{ $index + 1 }}">
              @endforeach
            @endif
            @if(!$product->thumbnail && (!$product->images || empty($product->images)))
              <img src="{{ asset('frontend/images/our-products/product-1.png') }}" class="img-thumbnail active" data-index="0">
            @endif
          </div>
        </div>
      </div>
      <!-- Right: Product Info -->
      <div class="col-lg-6">
        <div class="title-bar mb-2">
          <div class="accent-bar"></div>
          <h1 class="mb-0">
            {{ $product->primary_title ?? 'Product Details' }}
            @if($product->secondary_title)
              <span>{{ $product->secondary_title }}</span>
            @endif
          </h1>
        </div>
        <div class="capacity mb-3">
         {{ $product->sub_title }}
        </div>
        <div class="description mb-4">
          {!! $product->description ?? 'Product description not available.' !!}
        </div>
        
        
        
        
     </div>
    </div>
  </div>
</section>

<!-- Related Products Section -->
<section class="related-products section bg-light">
  <div class="container">
    <div class="section-title text-center mb-5">
      <span>Related Products</span>
      <h2>Related Products</h2>
      <p>Explore our other transportation solutions</p>
    </div>
    <div class="row">
      @if(isset($relatedProducts) && count($relatedProducts) > 0)
        @foreach($relatedProducts as $relatedProduct)
          <div class="col-lg-4 col-md-6 product-item" data-category="{{ $relatedProduct->category ? $relatedProduct->category->slug : '' }}" data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}" data-aos-duration="800" data-aos-easing="ease-out-cubic">
            <div class="product-card">
              <div class="product-image">
                                @if($relatedProduct->thumbnail)
                  <img src="{{ asset('storage/' . $relatedProduct->thumbnail) }}" alt="{{ $relatedProduct->alt ?? $relatedProduct->primary_title }}" class="img-fluid">
                @else
                    <img src="{{ asset('frontend/images/our-products/product-1.png') }}" alt="{{ $relatedProduct->primary_title }}" class="img-fluid">
                @endif
                <div class="product-overlay">
                  <a href="{{ route('fronted.viewproduct', $relatedProduct->slug) }}" class="btn btn-primary">View Details</a>
                </div>
              </div>
              <div class="product-info">
                <h4>
                  {{ $relatedProduct->primary_title }}
                   @if($relatedProduct->secondary_title)
                     {{ $relatedProduct->secondary_title }}
                   @endif
                 </h4>
                 <p class="description-truncate">{{ $relatedProduct->description ?? 'Industrial transportation solutions' }}</p>
               </div>
            </div>
          </div>
        @endforeach
             @else
         <!-- No related products message -->
         <div class="col-12 text-center">
           <div class="no-related-products" data-aos="fade-up" data-aos-duration="800">
             <i class="fas fa-boxes fa-3x text-muted mb-3"></i>
             <h4>No Related Products</h4>
             <p class="text-muted">Check back soon for more related products.</p>
           </div>
         </div>
       @endif
    </div>
  </div>
</section>

<!-- Custom CSS for Product Details -->
<style>
  .secondary-title {
    font-weight: normal;
    font-size: 0.7em;
    color: #6c757d;
    margin-left: 10px;
  }
  
  .title-bar h1 {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
  }
  
  .description-truncate {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
    line-height: 1.4;
    max-height: 2.8em; /* 2 lines * 1.4 line-height */
  }
  
  .product-info h5 {
    margin-bottom: 0.5rem;
    line-height: 1.3;
  }
</style>

<!-- Image Modal -->
<div id="imageModal" class="image-modal">
  <div class="modal-overlay" onclick="closeImageModal()"></div>
  <div class="modal-content">
    <button class="modal-close" onclick="closeImageModal()">
      <i class="fas fa-times"></i>
    </button>
    <div class="modal-image-container">
      <button class="modal-arrow left-arrow" onclick="changeModalImage(-1)">
        <i class="fas fa-chevron-left"></i>
      </button>
      <img id="modalImage" src="" alt="Product Image" class="modal-image">
      <button class="modal-arrow right-arrow" onclick="changeModalImage(1)">
        <i class="fas fa-chevron-right"></i>
      </button>
    </div>
    <div class="modal-thumbnails">
      <div class="modal-thumbnails-container">
        <!-- Thumbnails will be populated by JavaScript -->
      </div>
    </div>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const mainImage = document.getElementById('mainProductImage');
  const thumbnailsWrapper = document.querySelector('.thumbnails-wrapper');
  const thumbnails = Array.from(document.querySelectorAll('.thumbnails .img-thumbnail'));
  let currentIndex = thumbnails.findIndex(thumb => thumb.classList.contains('active'));
  if (currentIndex === -1) currentIndex = 0;

  // Modal variables
  const modal = document.getElementById('imageModal');
  const modalImage = document.getElementById('modalImage');
  const modalThumbnailsContainer = document.querySelector('.modal-thumbnails-container');
  let modalCurrentIndex = currentIndex;

  function showImage(index) {
    if (index < 0) index = thumbnails.length - 1;
    if (index >= thumbnails.length) index = 0;
    mainImage.src = thumbnails[index].src;
    thumbnails.forEach(thumb => thumb.classList.remove('active'));
    thumbnails[index].classList.add('active');
    currentIndex = index;
    // Scroll thumbnail into view smoothly
    thumbnails[index].scrollIntoView({ behavior: 'smooth', inline: 'center', block: 'nearest' });
  }

  // Modal functions
  window.openImageModal = function() {
    modalImage.src = mainImage.src;
    modalCurrentIndex = currentIndex;
    modal.classList.add('active');
    document.body.style.overflow = 'hidden';
    populateModalThumbnails();
    updateModalThumbnails();
  };

  window.closeImageModal = function() {
    modal.classList.remove('active');
    document.body.style.overflow = '';
  };

  window.changeModalImage = function(direction) {
    modalCurrentIndex += direction;
    if (modalCurrentIndex < 0) modalCurrentIndex = thumbnails.length - 1;
    if (modalCurrentIndex >= thumbnails.length) modalCurrentIndex = 0;
    
    modalImage.src = thumbnails[modalCurrentIndex].src;
    updateModalThumbnails();
  };

  function populateModalThumbnails() {
    modalThumbnailsContainer.innerHTML = '';
    thumbnails.forEach((thumb, index) => {
      const modalThumb = document.createElement('img');
      modalThumb.src = thumb.src;
      modalThumb.className = 'modal-thumbnail';
      modalThumb.onclick = () => {
        modalCurrentIndex = index;
        modalImage.src = thumb.src;
        updateModalThumbnails();
      };
      modalThumbnailsContainer.appendChild(modalThumb);
    });
  }

  function updateModalThumbnails() {
    const modalThumbnails = document.querySelectorAll('.modal-thumbnail');
    modalThumbnails.forEach((thumb, index) => {
      thumb.classList.toggle('active', index === modalCurrentIndex);
    });
  }

  thumbnails.forEach((thumb, idx) => {
    thumb.addEventListener('click', () => showImage(idx));
  });

  document.querySelector('.gallery-arrow.left-arrow').addEventListener('click', function() {
    showImage(currentIndex - 1);
  });
  document.querySelector('.gallery-arrow.right-arrow').addEventListener('click', function() {
    showImage(currentIndex + 1);
  });

  // Keyboard navigation for modal
  document.addEventListener('keydown', function(e) {
    if (modal.classList.contains('active')) {
      if (e.key === 'Escape') {
        closeImageModal();
      } else if (e.key === 'ArrowLeft') {
        changeModalImage(-1);
      } else if (e.key === 'ArrowRight') {
        changeModalImage(1);
      }
    }
  });
});
</script>
  @include('frontend.layouts.footer')
@endsection
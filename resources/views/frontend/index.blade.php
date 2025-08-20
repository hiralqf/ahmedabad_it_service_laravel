@extends('frontend.layouts.indexheader')

@section('title', 'Bulker Manufacturer in India | Flour & Cement Bulkers | Chamunda Industries')
@section('description', 'Chamunda Industries is among the top bulker manufacturers in India, specializing in wheat flour, maida flour, and cement bulkers. Custom designs, high durability, and nationwide delivery. Contact us today for a free quote.')
@section('keywords', ' bulker manufacturer in india, chamunda industries bulkers, flour bulker manufacturer, cement bulker manufacturer, wheat bulker, maida bulker, bulk cement tanker, powder transport bulker, bulk carrier manufacturer in india')
@section('body_class', 'home-page')

@section('content')
  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background hero-bg-banner">
      <div class="hero-overlay"></div>
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-8 col-md-10">
            <h1 class="white-space-h1" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-out-cubic">Chamunda Industries – Leading Bulker Manufacturer in India</h1>
            <p data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-out-cubic">
    Trusted manufacturer of maida flour bulkers, silo manufacturers, and cement bulkers. We use advanced engineering, precision welding, and premium materials for superior durability and safe bulk transportation.
</p>

            <div data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000" data-aos-easing="ease-out-cubic">
              <a href="{{ route('fronted.product', 'all') }}" class="btn btn-primary btn-lg">Get a Free Quote</a>
              <a href="{{ route('fronted.product', 'all') }}" class="btn btn-primary btn-lg">Explore Our Bulker Range</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section">
      <div class="container">
        <div class="row gy-4">

        <div class="col-lg-4 col-md-6 service-item d-flex scale-hover">
            <div class="icon flex-shrink-0"><i class="fa-solid fa-wheat-awn-circle-exclamation"></i></div>
            <div>
              <h4 class="title">Maida Flour Bulkers</h4>
              <p class="description">Custom-engineered maida flour bulkers with moisture protection and efficient pneumatic unloading systems</p>
              <a href="{{ route('fronted.about') }}" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 service-item d-flex scale-hover">
            <div class="icon flex-shrink-0"><i class="fa-solid fa-wheat-awn"></i></div>
            <div>
  <h4 class="title">Silo Manufacturer</h4>
  <p class="description">Specialized design for silo manufacturing with advanced engineering, ensuring durability and safety for bulk storage and transportation.</p>
  <a href="{{ route('fronted.about') }}" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
</div>

          </div>

          

          <div class="col-lg-4 col-md-6 service-item d-flex scale-hover">
            <div class="icon flex-shrink-0"><i class="fa-solid fa-industry"></i></div>
            <div>
              <h4 class="title">Cement Bulkers</h4>
              <p class="description">Heavy-duty construction with abrasion-resistant materials and air compressor unloading for large-volume cement transport</p>
              <a href="{{ route('fronted.about') }}" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about section bg-color">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 position-relative align-self-start order-lg-last order-first" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-out-cubic">
            <img src="{{ asset('frontend/images/about-us-image.webp') }}" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
          </div>

          <div class="col-lg-6 content order-last order-lg-first" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-out-cubic">
            <h3>About Chamunda Industries</h3>
            <p>
              Chamunda Industries is a trusted bulker manufacturer in India, specializing in wheat flour bulkers, maida flour bulkers , silo manufacturing , and cement bulkers. Using cutting-edge engineering, precision welding, and premium-grade materials, we deliver exceptional durability, maximum load capacity, and safe bulk transportation.
            </p>
            <p>
              Our bulkers are built to meet domestic and export standards, serving flour mills, cement manufacturers, and logistics companies across India.
            </p>
            <ul>
              <li>
                <i class="bi bi-diagram-3"></i>
                <div>
                  <h5>Custom-Engineered Designs</h5>
                  <!-- <p>Perfectly suited for specific materials like wheat, maida, and cement</p> -->
                   <div>
  <p>Perfectly suited for specific materials like wheat flour bulkers, maida flour bulkers, cement bulkers, and silo manufacturing, ensuring optimal performance for each application.</p>
</div>

                </div>
              </li>
              <li>
                <i class="bi bi-fullscreen-exit"></i>
                <div>
                  <h5>High-Grade Materials & Components</h5>
                  <p>Built for long life and heavy-duty use with premium materials</p>
                </div>
              </li>
              <li>
                <i class="bi bi-broadcast"></i>
                <div>
                  <h5>Pan-India Delivery & Global Export</h5>
                  <p>Comprehensive service network across India with global export support</p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Why Choose Us Section -->
    <section id="why-choose-us" class="why-choose-us section">
      <div class="container section-title" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-out-cubic">
        <span>Why Choose Us</span>
        <h2>Why Choose Chamunda Industries as Your Bulker Manufacturer?</h2>
        <p>Leading bulker manufacturer in India with innovative designs and superior quality</p>
      </div>

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-out-cubic">
            <div class="feature-card">
              <div class="icon">
                <i class="fa-solid fa-cogs"></i>
              </div>
              <h4>Custom-Engineered Designs</h4>
              <p>Perfectly suited for specific materials like wheat flour bulkers, maida flour bulkers, cement bulkers, and silo manufacturing, ensuring optimal performance for each application.</p>
            </div>
          </div>

          <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-out-cubic">
            <div class="feature-card">
              <div class="icon">
                <i class="fa-solid fa-shield-halved"></i>
              </div>
              <h4>High-Grade Materials & Components</h4>
              <p>Built for long life and heavy-duty use with premium-grade materials and construction</p>
            </div>
          </div>

          <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000" data-aos-easing="ease-out-cubic">
            <div class="feature-card">
              <div class="icon">
                <i class="fa-solid fa-clock"></i>
              </div>
             <h4>On-Time Deliveries</h4>
<p>Reliable and prompt delivery services ensuring your materials reach their destination without delay.</p>

            </div>
          </div>

          <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000" data-aos-easing="ease-out-cubic">
            <div class="feature-card">
              <div class="icon">
                <i class="fa-solid fa-certificate"></i>
              </div>
              <h4>Industry-Approved Standards</h4>
              <p>Certified for safety and performance meeting domestic and export standards</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Bulker Types Section -->
    <section id="bulker-types" class="bulker-types section bg-color">
      <div class="container section-title" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-out-cubic">
        <span>Our Bulker Range</span>
        <h2>Specialized Bulker Solutions</h2>
        <p>Custom-engineered bulkers for different materials and applications</p>
      </div>

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-out-cubic">
            <div class="bulker-type-card">
              <div class="bulker-image">
                <img src="{{ asset('frontend/images/our-products/product-5.webp') }}" alt="Flour Bulkers" class="img-fluid">
              </div>
              <div class="bulker-content">
                <h3>Flour Bulkers (Wheat & Maida)</h3>
                <ul>
                  <li><i class="bi bi-check-circle"></i> Special powder handling design</li>
                  <li><i class="bi bi-check-circle"></i> Prevents contamination and moisture entry</li>
                  <li><i class="bi bi-check-circle"></i> Easy-to-clean interiors</li>
                  <li><i class="bi bi-check-circle"></i> Food-grade material compliance</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-out-cubic">
            <div class="bulker-type-card">
              <div class="bulker-image">
                <img src="{{ asset('frontend/images/our-products/product-4.webp') }}" alt="Cement Bulkers" class="img-fluid">
              </div>
              <div class="bulker-content">
                <h3>Cement Bulkers</h3>
                <ul>
                  <li><i class="bi bi-check-circle"></i> Heavy-duty construction for large-volume cement transport</li>
                  <li><i class="bi bi-check-circle"></i> Abrasion-resistant material</li>
                  <li><i class="bi bi-check-circle"></i> Air compressor unloading system for efficiency</li>
                  <li><i class="bi bi-check-circle"></i> Maximum load capacity design</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Industries We Serve Section -->
    <section id="industries-served" class="industries-served section">
      <div class="container section-title" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-out-cubic">
        <span>Industries We Serve</span>
        <h2>Industries We Serve</h2>
        <p>Comprehensive bulker solutions for diverse industrial applications</p>
      </div>

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-out-cubic">
            <div class="industry-card">
              <div class="icon">
                <i class="fa-solid fa-wheat-awn"></i>
              </div>
              <h4>Flour Mills & Food Processing Plants</h4>
              <p>Specialized flour bulkers for wheat and maida transportation with contamination prevention</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-out-cubic">
            <div class="industry-card">
              <div class="icon">
                <i class="fa-solid fa-industry"></i>
              </div>
              <h4>Cement Manufacturing Units</h4>
              <p>Heavy-duty cement bulkers with abrasion-resistant materials and efficient unloading systems</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000" data-aos-easing="ease-out-cubic">
            <div class="industry-card">
              <div class="icon">
                <i class="fa-solid fa-building"></i>
              </div>
              <h4>Construction & Infrastructure Companies</h4>
              <p>Reliable bulk transportation solutions for construction materials and infrastructure projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000" data-aos-easing="ease-out-cubic">
            <div class="industry-card">
              <div class="icon">
                <i class="fa-solid fa-truck"></i>
              </div>
              <h4>Logistics & Transport Service Providers</h4>
              <p>Efficient bulk transportation solutions for logistics companies across India</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Top Bulker Manufacturers Section -->
    <section id="top-manufacturers" class="top-manufacturers section bg-color">
      <div class="container">
        <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-out-cubic">
          <div class="col-lg-8">
            <h2>Top Bulker Manufacturers in India</h2>
            <p>Chamunda Industries is recognized among the top bulker manufacturers in India for our innovative designs, superior quality, and unmatched after-sales support. From food-grade flour bulkers to industrial-grade cement bulkers, we provide solutions trusted by industries nationwide.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Products Section -->
    <section id="services" class="services section">
      <div class="container section-title" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-out-cubic">
        <span>Our Products</span>
        <h2>Our Products</h2>
        <p>Comprehensive range of industrial transportation solutions</p>
      </div>

      <div class="container">
        <div class="row gy-4" id="products-container">
          @if(isset($product) && count($product) > 0)
            @foreach($product as $index => $item)
            <div class="col-lg-4 col-md-6 product-item" data-category="{{ $item->category->name ?? '' }}" data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}" data-aos-duration="800" data-aos-easing="ease-out-cubic">
              <div class="product-card">
                <div class="product-image">
                  <img src="{{ asset('storage/' . $item->thumbnail) }}" alt="{{ $item->primary_title }}" class="img-fluid">
                  <div class="product-overlay">
                    <a href="{{ route('fronted.viewproduct', $item->slug) }}" class="btn btn-primary">View Details</a>
                  </div>
                </div>
                <div class="product-info">
                  <h4>
                    {{ $item->primary_title }}
                    @if($item->secondary_title)
                      - {{ $item->secondary_title }}
                    @endif
                  </h4>
                  <p class="description-truncate">{{ $item->description ?? 'Industrial transportation solutions' }}</p>
                </div>
              </div>
            </div>
            @endforeach
          @else
            <div class="col-12 text-center">
              <p>No products available at the moment.</p>
            </div>
          @endif
        </div>
      </div>
    </section>

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section dark-background">
      <img src="{{ asset('frontend/images/call-to-action-banner.webp') }}" alt="">
      <div class="container">
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-out-cubic">
          <div class="col-xl-10">
            <div class="text-center">
              <h3 data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">Ready to Get Started?</h3>
              <p data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">Contact us today to discuss your transportation needs and get a customized solution for your business.</p>
              <a class="cta-btn" href="{{ route('fronted.contacus') }}" data-aos="fade-up" data-aos-delay="400" data-aos-duration="800">Contact Us</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features section bg-color">
      <div class="container section-title" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-out-cubic">
        <span>Features</span>
        <h2>Why Choose Chamunda Industries</h2>
        <p>Discover what makes us the preferred choice for industrial transportation solutions</p>
      </div>

      <div class="container">
        <div class="row gy-4 align-items-center features-item">
          <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-out-cubic">
            <img src="{{ asset('frontend/images/bulker-drwaing-img.webp') }}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-out-cubic">
            <h3>Advanced Manufacturing Technology</h3>
            <p class="fst-italic">
              Our state-of-the-art manufacturing facilities utilize the latest technology and precision engineering to create transportation equipment that meets the highest industry standards.
            </p>
            <ul>
              <li><i class="bi bi-check"></i><span> Precision engineering and quality control</span></li>
              <li><i class="bi bi-check"></i> <span>Advanced materials and construction techniques</span></li>
              <li><i class="bi bi-check"></i> <span>Compliance with international safety standards</span></li>
            </ul>
          </div>
        </div>

        <div class="row gy-4 align-items-center features-item">
          <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-out-cubic">
            <img src="{{ asset('frontend/images/bulker-2.webp') }}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 order-2 order-md-1" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-out-cubic">
            <h3>Custom Design Solutions</h3>
            <p class="fst-italic">
              Every industry has unique transportation requirements. Our engineering team works closely with clients to design and manufacture custom solutions that perfectly match their specific needs.
            </p>
            <p>
              From specialized tanker trailers for chemical transport to bulk carriers designed for specific materials, we create solutions that optimize efficiency, safety, and reliability for your operations.
            </p>
          </div>
        </div>

        <div class="row gy-4 align-items-center features-item">
          <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-duration="1000" data-aos-easing="ease-out-cubic">
            <img src="{{ asset('frontend/images/bulker-drwaing-img.webp') }}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-out-cubic">
            <h3>Comprehensive Service & Support</h3>
            <p>Our commitment doesn't end with delivery. We provide comprehensive after-sales support, maintenance services, and technical assistance to ensure your transportation equipment operates at peak performance.</p>
            <ul>
              <li><i class="bi bi-check"></i> <span>24/7 technical support and emergency services</span></li>
              <li><i class="bi bi-check"></i><span> Regular maintenance and inspection programs</span></li>
              <li><i class="bi bi-check"></i> <span>Spare parts availability and quick delivery</span></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section dark-background">
      <img src="{{ asset('frontend/images/testimonial-banner.webp') }}" class="testimonials-bg" alt="">
      <div class="container" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-out-cubic">
        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('frontend/images/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
                <h3>John Smith</h3>
                <h4>Transport Manager</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Chamunda Industries delivered exceptional quality tanker trailers that exceeded our expectations. Their service and support are outstanding.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('frontend/images/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
                <h3>Sarah Johnson</h3>
                <h4>Operations Director</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>The custom bulk carriers we received are perfectly designed for our specific requirements. Excellent craftsmanship and reliability.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('frontend/images/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
                <h3>Michael Brown</h3>
                <h4>Fleet Manager</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Outstanding quality and durability. Our transportation efficiency has improved significantly since partnering with Chamunda Industries.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>

    <!-- Trusted Brands Section -->
    <section id="trusted-brands" class="trusted-brands section bg-color">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-lg-8 section-title">
            <span>Trusted by Top Brands</span>
            <h2>Trusted by Top Brands</h2>
            <p data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-out-cubic">Including Leading Fortune Enterprises</p>
          </div>
        </div>
      </div>
      
      <div class="brands-scroll-container">
        <div class="brands-scroll">
          <div class="brand-item">
            <div class="brand-logo">
              <img src="{{ asset('frontend/images/brand-images/acc.png') }}" alt="ACC" class="brand-image">
            </div>
          </div>
          <div class="brand-item">
            <div class="brand-logo">
              <img src="{{ asset('frontend/images/brand-images/ashok.png') }}" alt="Ashok Leyland" class="brand-image">
            </div>
          </div>
          <div class="brand-item">
            <div class="brand-logo">
              <img src="{{ asset('frontend/images/brand-images/britania.jpg') }}" alt="britannia" class="brand-image">
            </div>
          </div>
          <div class="brand-item">
            <div class="brand-logo">
              <img src="{{ asset('frontend/images/brand-images/nestle-seeklogo.jpg') }}" alt="Nestle" class="brand-image">
            </div>
          </div>
          <!-- <div class="brand-item">
            <div class="brand-logo">
              <img src="{{ asset('frontend/images/brand-images/asian-paint.png') }}" alt="Asian Paints" class="brand-image">
            </div>
          </div> -->
          <div class="brand-item">
            <div class="brand-logo">
              <img src="{{ asset('frontend/images/brand-images/eil.png') }}" alt="EIL" class="brand-image">
            </div>
          </div>
          <div class="brand-item">
            <div class="brand-logo">
              <img src="{{ asset('frontend/images/brand-images/jsw.png') }}" alt="JSW" class="brand-image">
            </div>
          </div>
          <!-- <div class="brand-item">
            <div class="brand-logo">
              <img src="{{ asset('frontend/images/brand-images/lafarge.png') }}" alt="Lafarge" class="brand-image">
            </div>
          </div> -->
          <!-- <div class="brand-item">
            <div class="brand-logo">
              <img src="{{ asset('frontend/images/brand-images/mecon.png') }}" alt="MECON" class="brand-image">
            </div>
          </div> -->
          <!-- <div class="brand-item">
            <div class="brand-logo">
              <img src="{{ asset('frontend/images/brand-images/nirma.png') }}" alt="Nirma" class="brand-image">
            </div>
          </div> -->
          <div class="brand-item">
            <div class="brand-logo">
              <img src="{{ asset('frontend/images/brand-images/shree.png') }}" alt="Shree Cement" class="brand-image">
            </div>
          </div>
          <!-- <div class="brand-item">
            <div class="brand-logo">
              <img src="{{ asset('frontend/images/brand-images/technimont.png') }}" alt="Technimont" class="brand-image">
            </div>
          </div> -->
          <div class="brand-item">
            <div class="brand-logo">
              <img src="{{ asset('frontend/images/brand-images/ultratech.png') }}" alt="UltraTech" class="brand-image">
            </div>
          </div>
          <!-- <div class="brand-item">
            <div class="brand-logo">
              <img src="{{ asset('frontend/images/brand-images/unilever.png') }}" alt="Unilever" class="brand-image">
            </div>
          </div> -->
        </div>
      </div>
    </section>

  </main>

  @include('frontend.layouts.footer')

@endsection
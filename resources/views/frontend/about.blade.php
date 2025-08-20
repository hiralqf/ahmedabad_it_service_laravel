@extends('frontend.layouts.indexheader')

@section('title', 'About Us | Chamunda Industries - Bulker Manufacturer in India')
@section('description', 'Chamunda Industries is a trusted bulker manufacturer in India for wheat flour bulkers, maida flour bulkers, and cement bulkers — engineered for durability, maximum capacity, and safe bulk transportation.')
@section('keywords', 'Chamunda Industries, bulker manufacturer India, wheat flour bulker, maida bulker, cement bulker, pneumatic bulker, bulk transportation, flour mill bulker, cement transport')
@section('body_class', 'home-page')

@section('content')
  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background page-title-bg-banner" data-aos="fade">
      <div class="container position-relative">
        <h1>About Us</h1>
<p>Chamunda Industries offers high-quality Mainda Flour Bulkers, Silo Manufacturing, and Cement Bulkers, designed for durability and efficiency. Our solutions are tailored to meet the evolving needs of the bulk handling industry.</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li class="current">About</li>
          </ol>
        </nav>
      </div>
    </div>

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
                  <p>Perfectly suited for specific materials like wheat flour bulkers, maida flour bulkers, cement bulkers, and silo manufacturing, ensuring optimal performance for each application.</p>
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

     <!-- Our History Section -->
    <section id="our-history" class="our-history section bg-color">
      
      <!-- Section Title -->
      <div class="container mb-0 section-title" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-out-cubic">
        <span>Our History</span>
        <h2>Our History</h2>
        <p>From humble beginnings to industry leadership - our journey of innovation and growth</p>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="history-item" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800" data-aos-easing="ease-out-cubic">
              <div class="history-text">
                <div class="history-year">2005</div>
                <h3>Company Foundation</h3>
                <p>Founded in 2005, Chamunda Industries began with a simple vision – to deliver reliable and innovative bulker solutions for India’s growing industries. Over the years, we have grown into one of the leading bulker and silo manufacturers in India, trusted for our superior designs, uncompromising quality, and dedicated after-sales support. From specialized Maida Flour Bulkers designed for contamination-free food transport to heavy-duty cement bulkers built for strength and efficiency, we have established ourselves as a trusted partner for both cement manufacturers and logistics providers. Our journey reflects a strong commitment to innovation, durability, and customer satisfaction. Today, Chamunda Industries continues to power India’s cement, construction, and logistics sectors with advanced bulk transportation and storage solutions.</p>
                <div class="history-stats">
                  <div class="stat-item">
                    <span class="stat-number">5</span>
                    <span class="stat-label">Employees</span>
                  </div>
                  <div class="stat-item">
                    <span class="stat-number">1</span>
                    <span class="stat-label">Workshop</span>
                  </div>
                  <div class="stat-item">
                    <span class="stat-number">100%</span>
                    <span class="stat-label">Quality Focus</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Commented out history items for now -->
        <!-- <div class="history-item" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800" data-aos-easing="ease-out-cubic">
          <div class="history-images-left">
            <div class="floating-image image-1">
              <img src="{{ asset('frontend/images/our-products/product-1.png') }}" alt="Innovation Center" class="img-fluid">
            </div>
            <div class="floating-image image-2">
              <img src="{{ asset('frontend/images/our-products/product-3.png') }}" alt="Technology" class="img-fluid">
            </div>
          </div>
          <div class="history-content-right">
            <div class="history-text">
              <div class="history-year">2010</div>
              <h3>National Expansion</h3>
              <p>Expanded our operations nationwide with multiple manufacturing units and service centers. Established partnerships with major logistics companies and diversified our product portfolio.</p>
              <div class="history-stats">
                <div class="stat-item">
                  <span class="stat-number">100+</span>
                  <span class="stat-label">Employees</span>
                </div>
                <div class="stat-item">
                  <span class="stat-number">5</span>
                  <span class="stat-label">Units</span>
                </div>
                <div class="stat-item">
                  <span class="stat-number">50+</span>
                  <span class="stat-label">Clients</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="history-item" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800" data-aos-easing="ease-out-cubic">
          <div class="history-images-left">
            <div class="floating-image image-1">
              <img src="{{ asset('frontend/images/our-products/product-4.png') }}" alt="Global Recognition" class="img-fluid">
            </div>
            <div class="floating-image image-2">
              <img src="{{ asset('frontend/images/our-products/product-5.jpg') }}" alt="Future Vision" class="img-fluid">
            </div>
          </div>
          <div class="history-content-right">
            <div class="history-text">
              <div class="history-year">2015</div>
              <h3>Innovation Center</h3>
              <p>Launched our dedicated R&D center to develop cutting-edge transportation solutions. Introduced eco-friendly tanker designs and smart monitoring systems for enhanced safety and efficiency.</p>
              <div class="history-stats">
                <div class="stat-item">
                  <span class="stat-number">R&D</span>
                  <span class="stat-label">Center</span>
                </div>
                <div class="stat-item">
                  <span class="stat-number">Eco</span>
                  <span class="stat-label">Friendly</span>
                </div>
                <div class="stat-item">
                  <span class="stat-number">Smart</span>
                  <span class="stat-label">Solutions</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="history-item" data-aos="fade-up" data-aos-delay="400" data-aos-duration="800" data-aos-easing="ease-out-cubic">
          <div class="history-images-left">
            <div class="floating-image image-1">
              <img src="{{ asset('frontend/images/our-products/cargo-delivery-vehicle.jpg') }}" alt="Global Recognition" class="img-fluid">
            </div>
            <div class="floating-image image-2">
              <img src="{{ asset('frontend/images/our-products/supply-chain-representation-still-life.jpg') }}" alt="Future Vision" class="img-fluid">
            </div>
          </div>
          <div class="history-content-right">
            <div class="history-text">
              <div class="history-year">2024</div>
              <h3>Global Recognition</h3>
              <p>Achieved international certifications and expanded exports to multiple countries. Recognized as a leading manufacturer of industrial transportation equipment with a focus on quality and innovation.</p>
              <div class="history-stats">
                <div class="stat-item">
                  <span class="stat-number">200+</span>
                  <span class="stat-label">Employees</span>
                </div>
                <div class="stat-item">
                  <span class="stat-number">Global</span>
                  <span class="stat-label">Export</span>
                </div>
                <div class="stat-item">
                  <span class="stat-number">AI</span>
                  <span class="stat-label">Integration</span>
                </div>
              </div>
            </div>
          </div>
        </div> -->

      </div>
    </section>
    <!-- /Our History Section -->

    <!-- Bulker Types Section -->
    <section id="bulker-types" class="bulker-types section">
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

    <!-- Industries We Serve Section -->
    <section id="industries-served" class="industries-served section bg-color">
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

    <!-- Stats Section -->
    <section id="stats" class="stats section bg-color">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Clients</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p>Workers</p>
            </div>
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
                  <span>Chamunda Industries delivered exceptional quality bulkers that exceeded our expectations. Their service and support are outstanding.</span>
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
                  <span>The custom flour bulkers we received are perfectly designed for our specific requirements. Excellent craftsmanship and reliability.</span>
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
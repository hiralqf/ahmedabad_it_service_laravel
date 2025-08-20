@extends('frontend.layouts.indexheader')

@section('title', 'Contact Us | Chamunda Industries - Industrial Transportation Solutions')

@section('description', 'Get in touch with Chamunda Industries for inquiries about tanker trailers, bulk carriers, and custom industrial transport solutions. We’re here to support your logistics needs worldwide.')

@section('keywords', 'Chamunda Industries contact, industrial trailer inquiries, tanker trailer support, logistics solutions, transportation equipment manufacturer, bulk carrier contact, custom trailer quote')


@section('content')
  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background page-title-bg-banner" data-aos="fade">
      <div class="container position-relative">
        <h1>Contact Us</h1>
<p>Get in touch with Chamunda Industries for all your Mainda Flour Bulker, Silo Manufacturing, and Cement Bulker needs. We're here to provide you with tailored solutions and excellent customer support.</p>

        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li class="current">Contact</li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
          <!-- <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
          <iframe class="google-maps-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29381.64777860368!2d72.6659909706869!3d22.9978372146824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e87cf76479217%3A0xbe50540453c71a8c!2sVastral%2C%20Ahmedabad%2C%20Gujarat%20380038!5e0!3m2!1sen!2sin!4v1754054676142!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div>
            <!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55</p>
              </div>
            </div>
            <!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>info@example.com</p>
              </div>
            </div>
            <!-- End Info Item -->

          </div>

          <div class="col-lg-8">
            @if(session('success'))
              <div class="alert alert-success alert-dismissible fade show mb-4 contact-success-alert" role="alert">
                <div class="d-flex">
                  <i class="fas fa-check-circle"></i>
                  <div>
                    <strong>Success!</strong>
                    <div style="margin-top: 5px;">{{ session('success') }}</div>
                  </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
            
            <form action="{{ route('contactus-form') }}" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200" id="contactForm">
              @csrf
              <div class="row gy-4">

                <div class="col-md-6">
                  <label for="name" class="form-label">Full Name *</label>
                  <input type="text" name="name" id="name" class="form-control" placeholder="Enter your full name" required value="{{ old('name') }}">
                  <div class="contact-error-message" id="name-error"></div>
                  @error('name')
                    <div class="contact-error-message">{{ $message }}</div>
                  @enderror
                </div>

                <div class="col-md-6">
                  <label for="phone" class="form-label">Phone Number *</label>
                  <input type="tel" name="phone" id="phone" class="form-control" placeholder="Enter your phone number (10 digits)" required value="{{ old('phone') }}" maxlength="10" pattern="[0-9]{10}">
                  <div class="contact-error-message" id="phone-error"></div>
                  @error('phone')
                    <div class="contact-error-message">{{ $message }}</div>
                  @enderror
                </div>

                <div class="col-md-12">
                  <label for="email" class="form-label">Email Address *</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email address" required value="{{ old('email') }}">
                  <div class="contact-error-message" id="email-error"></div>
                  @error('email')
                    <div class="contact-error-message">{{ $message }}</div>
                  @enderror
                </div>

                <div class="col-md-12">
                  <label for="message" class="form-label">Message</label>
                  <textarea class="form-control" name="message" id="message" rows="6" placeholder="Enter your message here...">{{ old('message') }}</textarea>
                  <div class="contact-error-message" id="message-error"></div>
                  @error('message')
                    <div class="contact-error-message">{{ $message }}</div>
                  @enderror
                </div>

                <div class="col-md-12">
                  <div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>
                  <div class="contact-error-message" id="recaptcha-error"></div>
                  @error('g-recaptcha-response')
                    <div class="contact-error-message">{{ $message }}</div>
                  @enderror
                </div>

                <div class="col-md-12 text-center">
                  <button type="submit" class="btn btn-primary contact-submit-btn">
                    <i class="fas fa-paper-plane"></i>Send Message
                  </button>
                </div>

              </div>
            </form>
          </div>
          <!-- End Contact Form -->

        </div>

      </div>

    </section>
    <!-- /Contact Section -->

  </main>

  <!-- reCAPTCHA Script -->
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  
  <script>
    // Debug reCAPTCHA
    window.onload = function() {
      if (typeof grecaptcha !== 'undefined') {
        console.log('reCAPTCHA loaded successfully');
        grecaptcha.ready(function() {
          console.log('reCAPTCHA is ready');
        });
      } else {
        console.error('reCAPTCHA failed to load');
      }
    };
    
    // Phone number validation - only allow digits
    document.getElementById('phone').addEventListener('input', function(e) {
      // Remove any non-digit characters
      this.value = this.value.replace(/[^0-9]/g, '');
      
      // Limit to 10 digits
      if (this.value.length > 10) {
        this.value = this.value.slice(0, 10);
      }
      
      // Hide error message when user starts typing
      const errorDiv = document.getElementById('phone-error');
      if (errorDiv) {
        errorDiv.style.display = 'none';
      }
    });

    // Auto-hide error messages when user starts typing
    document.getElementById('name').addEventListener('input', function() {
      const errorDiv = document.getElementById('name-error');
      if (errorDiv) {
        errorDiv.style.display = 'none';
      }
    });

    document.getElementById('email').addEventListener('input', function() {
      const errorDiv = document.getElementById('email-error');
      if (errorDiv) {
        errorDiv.style.display = 'none';
      }
    });

    document.getElementById('message').addEventListener('input', function() {
      const errorDiv = document.getElementById('message-error');
      if (errorDiv) {
        errorDiv.style.display = 'none';
      }
    });
    
    // Form submission handler
    document.getElementById('contactForm').addEventListener('submit', function(e) {
      const recaptchaResponse = grecaptcha.getResponse();
      if (!recaptchaResponse) {
        e.preventDefault();
        const errorDiv = document.getElementById('recaptcha-error');
        if (errorDiv) {
          errorDiv.textContent = 'Please complete the reCAPTCHA verification.';
          errorDiv.style.display = 'block';
        }
        return false;
      }
    });

    // Auto-hide success message after 5 seconds
    @if(session('success'))
      setTimeout(function() {
        const alert = document.querySelector('.alert-success');
        if (alert) {
          alert.style.transition = 'opacity 0.5s ease';
          alert.style.opacity = '0';
          setTimeout(function() {
            alert.remove();
          }, 500);
        }
      }, 5000);
    @endif
  </script>

  @include('frontend.layouts.footer')
@endsection
  <footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <!-- <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">Logis</span>
          </a> -->
           <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto">
      <!-- Replace the h1 with an image logo -->
      <img src="{{ asset('frontend/images/Chamunda Industries - Logo-white.png') }}" alt="Logis Logo" class="logo-img">
    </a>
          <p>Chamunda Industries specializes in manufacturing high-quality Mainda Flour Bulkers, Silo Manufacturers, and Cement Bulkers. Our products are designed for durability, safety, and efficient bulk transportation across industries.</p>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Quick Links</h4>
          <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ route('fronted.about') }}">About us</a></li>
            <!-- <li><a href="#">Services</a></li> -->
             <li><a href="{{ route('fronted.product', 'all') }}">Our Products</a></li>
            <li><a href="{{ route('fronted.contacus') }}">Contact Us</a></li>
            <!-- <li><a href="#">Privacy policy</a></li> -->
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Products</h4>
          <ul>
              {{--
              @if(isset($footer_category) && count($footer_category) > 0)
                @foreach($footer_category as $cat)
                  <li><a href="{{ route('fronted.product', $cat->slug) }}">{{ $cat->name }}</a></li>
                @endforeach
              @else
                <li><a href="{{ route('fronted.product', 'all') }}">All Products</a></li>
              @endif
              --}}
              @if(isset($footer_products) && count($footer_products) > 0)
                @foreach($footer_products as $prod)
                  <li><a href="{{ route('fronted.viewproduct', $prod->slug) }}">{{ $prod->primary_title }}</a></li>
                @endforeach
              @else
                <li><a href="#">No products found</a></li>
              @endif
          </ul>
        </div>


        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>A108 Adam Street</p>
          <p>New York, NY 535022</p>
          <p>United States</p>
          <p class="mt-4"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
          <p><strong>Email:</strong> <span>info@example.com</span></p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename"><a class="text-white" href="{{ url('/') }}">Chamunda Industries</a></strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href=“https://themewagon.com>ThemeWagon -->
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('frontend/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('frontend/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('frontend/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('frontend/js/main.js') }}"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Indian Business Hub | Get a Free Business Listing </title>

  <meta name="keywords" content="Business listing, Verify Your Business, List Your Business, Indian Business Hub, Business to Business, small enterprises, startups, business listing platform, list your business on indian business hub, Grow Your Business, Get listed for Free on Indian business Hub">

  <meta name="description" content="List and verify your business on the Indian Business Hub. Connect, grow, and explore trusted business networks across India with our online platform. ">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet"> -->
   <link rel="preload" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" as="style" onload="this.rel='stylesheet'">
<noscript>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
</noscript>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <!-- AOS CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
  <link rel="stylesheet" href="/assets/css/style.css" />
  <link rel="stylesheet" href="/assets/css/responsive.css" />
  <!-- Favicons -->
  <link href="/assets/images/IBH-Logo.png" rel="icon">
  <!-- <link href="/assets/images/logo/ibh-white-logo.png" rel="icon"> -->

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- SweetAlert2 CDN -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is IBH?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Indian Business Hub (IBH) is a business listing and networking platform designed to help businesses connect, collaborate, and grow. It allows startups, SMEs, and enterprises to showcase their business, discover partners, and build B2B relationships."
      }
    },
    {
      "@type": "Question",
      "name": "How does IBH help my business?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "IBH increases your business visibility, allows profile creation, and enables B2B networking and collaborations. It helps you connect with other businesses for growth and partnership."
      }
    },
    {
      "@type": "Question",
      "name": "How can I list my business on Indian Business Hub?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Download the IBH app, sign up, and create your profile by adding your business details and uploading verification documents like Aadhaar or GST. After approval, your business will be listed on the app."
      }
    },
    {
      "@type": "Question",
      "name": "What information is required to list your business?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You need to provide your business name, contact information, industry category, services/products offered, location, and optionally a logo, photos, and verification documents."
      }
    },
    {
      "@type": "Question",
      "name": "Can I update my business information later?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, you can log into your IBH dashboard anytime to update or edit your business details."
      }
    },
    {
      "@type": "Question",
      "name": "Can I contact a business directly from IBH?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, IBH includes direct messaging features so you can easily reach out to other businesses listed on the platform."
      }
    },
    {
      "@type": "Question",
      "name": "How can I connect or collaborate with another business?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You can send a collaboration request or message businesses directly through the IBH platform."
      }
    },
    {
      "@type": "Question",
      "name": "Is my data safe on IBH?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, IBH uses encryption and secure servers to keep your personal and business data safe. Your privacy is our priority."
      }
    }
  ]
}
</script>

</head>

<body>
  <?php
  $currentPage = basename($_SERVER['PHP_SELF']);
  ?>
  <!-- Header -->
  <header class="sticky-top bg-white-custom shadow-sm">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container px-3">
        <div class="gap-3">
       <button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>

         <a class="navbar-logo" href="/index.php">
            <img src="/assets/images/IBH-Logo.png" alt="Logo" height="40">
          </a>
        </div>
 

        <div class="d-flex justify-content-center align-items-center ">

         
          <a href="#" class="btn add-buisness-btn d-none btn-custom ms-lg-3 mt-lg-0 d-lg-none d-md-block d-sm-block" data-bs-toggle="modal" data-bs-target="#businessModal">
            Add Business
          </a>
        </div>


        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto d-flex align-items-lg-center gap-2 gap-lg-4">
            <li class="nav-item">
              <a class="nav-link custom-link <?php echo ($currentPage == 'index.php') ? 'active' : ''; ?>" href="/index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link custom-link <?php echo ($currentPage == 'blog.php') ? 'active' : ''; ?>" href="/blog.php">Blog</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link custom-link <?php echo ($currentPage == 'services.php') ? 'active' : ''; ?>" href="#">Services</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link custom-link <?php echo ($currentPage == 'faqs.php') ? 'active' : ''; ?>" href="/faqs.php">FAQs</a>
            </li>
            <li class="nav-item">
              <a href="/index.php#contactform" class="nav-link custom-link" data-bs-toggle="Contact" >Contact</a>
            </li>

           

            <li class="nav-item ">
              <a href="#" id="addBusinessBtn" class="btn btn-custom ms-lg-3 mt-2 mt-lg-0 d-none" data-bs-toggle="modal" data-bs-target="#businessModal">
                Add Business
              </a>

              <!-- Placeholder for business name -->
              <div class="dropdown d-inline-block">
                <span id="businessNameDisplay" class="fw-bold highlight dropdown-toggle d-none" data-bs-toggle="dropdown" aria-expanded="false" role="button">
                </span>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="#" id="logoutBtn">
                      <i class="bi bi-box-arrow-right me-2"></i> Logout
                    </a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
  <a class="p-0" href="https://play.google.com/store/apps/details?id=com.app.indianbusinesshub" download>
    <img src="/assets/images/google-play.png" alt="Download on Google Play">
  </a>
</li>

          </ul>
        </div>
      </div>
    </nav>
  </header>


  <div class="modal fade" id="businessModal" tabindex="-1" aria-labelledby="businessModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content border-0">
        <div class="modal-body d-flex flex-column businessModal-bg justify-content-center align-items-center text-center  position-relative" style="min-height: 100vh;">


        <div class="card shdaow p-5" style="width: 36rem;">
          <!-- Step Indicator -->
          <div class="stepper w-100  px-4" style="max-width: 600px;">
            <div class="step-line position-relative d-flex justify-content-between">
              <div class="step-circle" data-step="1">1</div>
              <div class="step-circle" data-step="2">2</div>
              <div class="step-circle" data-step="3">3</div>
              <div class="step-progress"></div>
            </div>
          </div>

            <!-- Form Steps -->
            <div class="form-step active" id="step1">
              <h2 class="fw-bold mb-3">What's the name of your business?</h2>
              <div class="mb-3">
                <input type="text" class="form-control" name="business_name" placeholder="Business name">
              </div>
              <div class="mb-3">
                <textarea class="form-control" name="description" placeholder="Description" rows="4"></textarea>
              </div>
              <div class="d-flex justify-content-between mt-4">
                <button class="btn btn-dark back-btn" data-bs-dismiss="modal">Back</button>
                <button class="btn btn-primary next-btn" data-step="1">Next</button>
              </div>
            </div>

            <div class="form-step d-none" id="step2">
              <h2 class="fw-bold mb-3">Contact Info</h2>
              <div class="mb-3">
                <input type="email" class="form-control" name="email" placeholder="Email">
              </div>
              <div class="mb-3">
                <input type="text" name="phone" id="phone" placeholder="Phone number" maxlength="10" pattern="\d{10}" required class="form-control">
              </div>
              <div class="d-flex justify-content-between mt-4">
                <button class="btn btn-dark back-btn" data-step="1">Back</button>
                <button class="btn btn-primary next-btn" data-step="2">Next</button>
              </div>
            </div>

            <div class="form-step d-none" id="step3">
              <h2 class="fw-bold mb-3">Account Security</h2>
              <div class="mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password">
              </div>
              <div class="mb-3">
                <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm password">
              </div>
              <div class="d-flex justify-content-between mt-4">
                <button class="btn btn-dark back-btn" data-step="2">Back</button>
                <button class="btn btn-primary" id="registerSubmitBtn">Finish</button>
              </div>

              <div id="modalLoaderWrapper" class="text-center mt-3 d-none">
                <div class="spinner-border text-danger" role="status"></div>
                <div class="mt-2 fw-semibold text-danger">Please wait... We're submitting your registration.</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
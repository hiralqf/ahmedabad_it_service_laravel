/**
* Template Name: Logis
* Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
* Updated: Aug 07 2024 with Bootstrap v5.3.3
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

(function() {
  "use strict";

  /**
   * Apply .scrolled class to the body as the page is scrolled down
   */
  function toggleScrolled() {
    const selectBody = document.querySelector('body');
    const selectHeader = document.querySelector('#header');
    if (!selectHeader.classList.contains('scroll-up-sticky') && !selectHeader.classList.contains('sticky-top') && !selectHeader.classList.contains('fixed-top')) return;
    window.scrollY > 100 ? selectBody.classList.add('scrolled') : selectBody.classList.remove('scrolled');
  }

  document.addEventListener('scroll', toggleScrolled);
  window.addEventListener('load', toggleScrolled);

  /**
   * Mobile nav toggle
   */
  const mobileNavToggleBtn = document.querySelector('.mobile-nav-toggle');

  function mobileNavToogle() {
    document.querySelector('body').classList.toggle('mobile-nav-active');
    mobileNavToggleBtn.classList.toggle('bi-list');
    mobileNavToggleBtn.classList.toggle('bi-x');
  }
  mobileNavToggleBtn.addEventListener('click', mobileNavToogle);

  /**
   * Hide mobile nav on same-page/hash links
   */
  document.querySelectorAll('#navmenu a').forEach(navmenu => {
    navmenu.addEventListener('click', () => {
      if (document.querySelector('.mobile-nav-active')) {
        mobileNavToogle();
      }
    });

  });

  /**
   * Toggle mobile nav dropdowns
   */
  document.querySelectorAll('.navmenu .toggle-dropdown').forEach(navmenu => {
    navmenu.addEventListener('click', function(e) {
      e.preventDefault();
      this.parentNode.classList.toggle('active');
      this.parentNode.nextElementSibling.classList.toggle('dropdown-active');
      e.stopImmediatePropagation();
    });
  });

  /**
   * Preloader
   */
  const preloader = document.querySelector('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove();
    });
  }

  /**
   * Scroll top button
   */
  let scrollTop = document.querySelector('.scroll-top');

  function toggleScrollTop() {
    if (scrollTop) {
      window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
    }
  }
  scrollTop.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });

  window.addEventListener('load', toggleScrollTop);
  document.addEventListener('scroll', toggleScrollTop);

  /**
   * Enhanced Animation on scroll function and init
   */
  function aosInit() {
    AOS.init({
      duration: 800,
      easing: 'ease-in-out-cubic',
      once: true,
      mirror: false,
      offset: 100,
      delay: 0
    });
  }
  window.addEventListener('load', aosInit);

  /**
   * Smooth scroll for anchor links
   */
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        target.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
    });
  });

  /**
   * Enhanced hover animations for interactive elements
   */
  function initHoverAnimations() {
    // Add stagger animation to service items
    const serviceItems = document.querySelectorAll('.featured-services .service-item');
    serviceItems.forEach((item, index) => {
      item.style.setProperty('--animation-order', index);
    });

    // Add floating animation to hero image
    const heroImg = document.querySelector('.hero-img img');
    if (heroImg) {
      heroImg.style.animationDelay = '0.5s';
    }

    // Add pulse animation to stats on scroll
    const statsItems = document.querySelectorAll('.stats-item');
    const observerOptions = {
      threshold: 0.5,
      rootMargin: '0px 0px -50px 0px'
    };

    const statsObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.style.animation = 'pulse 1s ease-out';
        }
      });
    }, observerOptions);

    statsItems.forEach(item => {
      statsObserver.observe(item);
    });
  }

  /**
   * Parallax effect for hero background
   */
  function initParallax() {
    const heroBg = document.querySelector('.hero-bg');
    if (heroBg) {
      window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        const rate = scrolled * -0.5;
        heroBg.style.transform = `translateY(${rate}px)`;
      });
    }
  }

  /**
   * Enhanced counter animation
   */
  function initEnhancedCounters() {
    const counters = document.querySelectorAll('.purecounter');
    counters.forEach(counter => {
      const target = parseInt(counter.getAttribute('data-purecounter-end'));
      const duration = parseInt(counter.getAttribute('data-purecounter-duration')) || 2000;
      let current = 0;
      const increment = target / (duration / 16);
      
      const updateCounter = () => {
        current += increment;
        if (current < target) {
          counter.textContent = Math.floor(current);
          requestAnimationFrame(updateCounter);
        } else {
          counter.textContent = target;
        }
      };

      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            updateCounter();
            observer.unobserve(entry.target);
          }
        });
      });

      observer.observe(counter);
    });
  }

  /**
   * Typing effect for hero title
   */
  function initTypingEffect() {
    const heroTitle = document.querySelector('.hero h1');
    if (heroTitle) {
      const text = heroTitle.textContent;
      heroTitle.textContent = '';
      heroTitle.style.overflow = 'hidden';
      heroTitle.style.borderRight = '2px solid var(--accent-color)';
      heroTitle.style.whiteSpace = 'nowrap';
      
      let i = 0;
      const typeWriter = () => {
        if (i < text.length) {
          heroTitle.textContent += text.charAt(i);
          i++;
          setTimeout(typeWriter, 100);
        } else {
          heroTitle.style.borderRight = 'none';
        }
      };
      
      setTimeout(typeWriter, 500);
    }
  }

  /**
   * Enhanced card hover effects
   */
  function initCardAnimations() {
    const cards = document.querySelectorAll('.card, .pricing-item, .service-item');
    
    cards.forEach(card => {
      card.addEventListener('mouseenter', function() {
        this.style.transform = 'translateY(-10px) scale(1.02)';
        this.style.boxShadow = '0 15px 35px rgba(0, 0, 0, 0.1)';
      });
      
      card.addEventListener('mouseleave', function() {
        this.style.transform = 'translateY(0) scale(1)';
        this.style.boxShadow = '';
      });
    });
  }

  /**
   * Smooth reveal animations for sections
   */
  function initRevealAnimations() {
    const sections = document.querySelectorAll('section');
    
    const sectionObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.style.opacity = '1';
          entry.target.style.transform = 'translateY(0)';
        }
      });
    }, {
      threshold: 0.1,
      rootMargin: '0px 0px -50px 0px'
    });

    sections.forEach(section => {
      section.style.opacity = '0';
      section.style.transform = 'translateY(30px)';
      section.style.transition = 'all 0.8s ease-out';
      sectionObserver.observe(section);
    });
  }

  /**
   * Initiate Pure Counter
   */
  new PureCounter();

  /**
   * Initiate glightbox
   */
  const glightbox = GLightbox({
    selector: '.glightbox'
  });

  /**
   * Init swiper sliders
   */
  function initSwiper() {
    document.querySelectorAll(".init-swiper").forEach(function(swiperElement) {
      let config = JSON.parse(
        swiperElement.querySelector(".swiper-config").innerHTML.trim()
      );

      if (swiperElement.classList.contains("swiper-tab")) {
        initSwiperWithCustomPagination(swiperElement, config);
      } else {
        new Swiper(swiperElement, config);
      }
    });
  }

  window.addEventListener("load", initSwiper);

  /**
   * Frequently Asked Questions Toggle
   */
  document.querySelectorAll('.faq-item h3, .faq-item .faq-toggle').forEach((faqItem) => {
    faqItem.addEventListener('click', () => {
      faqItem.parentNode.classList.toggle('faq-active');
    });
  });

  /**
   * Initialize all enhanced animations
   */
  window.addEventListener('load', () => {
    initHoverAnimations();
    initParallax();
    initEnhancedCounters();
    initTypingEffect();
    initCardAnimations();
    initRevealAnimations();
  });

  /**
   * Enhanced Trusted Brands Scrolling
   */
  function initTrustedBrands() {
    const brandsScroll = document.querySelector('.brands-scroll');
    const brandsContainer = document.querySelector('.brands-scroll-container');
    
    if (!brandsScroll || !brandsContainer) return;
    
    // Clone brands for seamless loop
    const originalBrands = brandsScroll.innerHTML;
    brandsScroll.innerHTML = originalBrands + originalBrands;
    
    // Pause on hover
    brandsContainer.addEventListener('mouseenter', () => {
      brandsScroll.style.animationPlayState = 'paused';
    });
    
    brandsContainer.addEventListener('mouseleave', () => {
      brandsScroll.style.animationPlayState = 'running';
    });
    
    // Touch events for mobile
    let isPaused = false;
    brandsContainer.addEventListener('touchstart', () => {
      isPaused = true;
      brandsScroll.style.animationPlayState = 'paused';
    });
    
    brandsContainer.addEventListener('touchend', () => {
      setTimeout(() => {
        if (isPaused) {
          brandsScroll.style.animationPlayState = 'running';
          isPaused = false;
        }
      }, 1000);
    });
    
    // Add scroll speed control based on device performance
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
    if (prefersReducedMotion.matches) {
      brandsScroll.style.animation = 'none';
    }
  }

  // Initialize trusted brands when DOM is loaded
  document.addEventListener('DOMContentLoaded', initTrustedBrands);
  window.addEventListener('load', initTrustedBrands);

})();
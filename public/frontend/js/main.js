/**
* Template Name: Medilab
* Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
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
   * Animation on scroll function and init
   */
  function aosInit() {
    AOS.init({
      duration: 600,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    });
  }
  window.addEventListener('load', aosInit);

  /**
   * Initiate glightbox
   */
  const glightbox = GLightbox({
    selector: '.glightbox'
  });

  /**
   * Initiate Pure Counter
   */
  new PureCounter();

  /**
   * Frequently Asked Questions Toggle
   */
  document.querySelectorAll('.faq-item h3, .faq-item .faq-toggle').forEach((faqItem) => {
    faqItem.addEventListener('click', () => {
      faqItem.parentNode.classList.toggle('faq-active');
    });
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
   * Correct scrolling position upon page load for URLs containing hash links.
   */
  window.addEventListener('load', function(e) {
    if (window.location.hash) {
      if (document.querySelector(window.location.hash)) {
        setTimeout(() => {
          let section = document.querySelector(window.location.hash);
          let scrollMarginTop = getComputedStyle(section).scrollMarginTop;
          window.scrollTo({
            top: section.offsetTop - parseInt(scrollMarginTop),
            behavior: 'smooth'
          });
        }, 100);
      }
    }
  });

  /**
   * Navmenu Scrollspy
   */
  let navmenulinks = document.querySelectorAll('.navmenu a');

  function navmenuScrollspy() {
    navmenulinks.forEach(navmenulink => {
      if (!navmenulink.hash) return;
      let section = document.querySelector(navmenulink.hash);
      if (!section) return;
      let position = window.scrollY + 200;
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        document.querySelectorAll('.navmenu a.active').forEach(link => link.classList.remove('active'));
        navmenulink.classList.add('active');
      } else {
        navmenulink.classList.remove('active');
      }
    })
  }
  window.addEventListener('load', navmenuScrollspy);
  document.addEventListener('scroll', navmenuScrollspy);

})();

// faq


const accordionItems = document.querySelectorAll(".accordion-item");

accordionItems.forEach((item) => {
  const button = item.querySelector(".accordion-button");
  const icon = item.querySelector(".accordion-icon i");
  const collapse = item.querySelector(".accordion-collapse");

  // Listen for show
  collapse.addEventListener("show.bs.collapse", () => {
    icon.classList.remove("fa-plus");
    icon.classList.add("fa-minus");
  });

  // Listen for hide
  collapse.addEventListener("hide.bs.collapse", () => {
    icon.classList.remove("fa-minus");
    icon.classList.add("fa-plus");
  });
});

// Bootstrap validation

 
        // Your JSON data for the FAQ section
        const faqData = [
            {
                "name": "What are the top IT services in Ahmedabad?",
                "acceptedAnswer": {
                    "text": "Top IT services in Ahmedabad include website development, SEO, mobile app development, e-commerce solutions, cloud services, and custom software development."
                }
            },
            {
                "name": "Why should I choose an IT company in Ahmedabad?",
                "acceptedAnswer": {
                    "text": "Ahmedabad-based IT companies offer affordable pricing, local support, and a deep understanding of the regional market, making them ideal partners for digital transformation."
                }
            },
            {
                "name": "Which company provides affordable website development in Ahmedabad?",
                "acceptedAnswer": {
                    "text": "Ahmedabad IT Services offers cost-effective and high-quality website development for startups, SMEs, and enterprises."
                }
            },
            {
                "name": "How can I improve my website's SEO in Ahmedabad?",
                "acceptedAnswer": {
                    "text": "Improving your website's SEO involves optimizing your website structure, content, using local keywords, obtaining backlinks, and ensuring mobile-friendliness."
                }
            },
            {
                "name": "What are the benefits of mobile app development for my business?",
                "acceptedAnswer": {
                    "text": "Mobile app development enhances customer engagement, offers a personalized user experience, and provides a direct channel for promotions and services."
                }
            },
            {
                "name": "Is it possible to get e-commerce solutions in Ahmedabad?",
                "acceptedAnswer": {
                    "text": "Yes, you can get customized, scalable, and secure e-commerce solutions in Ahmedabad, including WooCommerce, Shopify, and Magento development."
                }
            },
            {
                "name": "How do custom software solutions benefit my business?",
                "acceptedAnswer": {
                    "text": "Custom software solutions improve business processes, enhance productivity, and provide a unique approach tailored to your company's specific needs."
                }
            },
            {
                "name": "How much does website development cost in Ahmedabad?",
                "acceptedAnswer": {
                    "text": "The cost of website development in Ahmedabad varies based on the project complexity, design, features, and functionality required. Prices typically start from ₹10,000 and go up to ₹1,00,000 or more."
                }
            },
            {
                "name": "What are SEO services for Ahmedabad businesses?",
                "acceptedAnswer": {
                    "text": "SEO services in Ahmedabad include local search optimization, keyword research, on-page optimization, content creation, and building high-quality backlinks to improve your website's search rankings."
                }
            },
            {
                "name": "What types of mobile apps can be developed in Ahmedabad?",
                "acceptedAnswer": {
                    "text": "In Ahmedabad, mobile apps for various industries such as e-commerce, healthcare, education, real estate, and services can be developed, with options for both Android and iOS platforms."
                }
            },
            {
                "name": "How do cloud services benefit my business?",
                "acceptedAnswer": {
                    "text": "Cloud services offer scalability, cost savings, enhanced collaboration, remote access, and improved security for businesses, making them a valuable solution for companies in Ahmedabad."
                }
            },
            {
                "name": "What is the role of digital marketing in Ahmedabad?",
                "acceptedAnswer": {
                    "text": "Digital marketing in Ahmedabad helps businesses reach targeted customers through strategies like SEO, social media marketing, content marketing, email marketing, and paid ads, boosting online visibility and sales."
                }
            },
            {
                "name": "What is website development in Ahmedabad?",
                "acceptedAnswer": {
                    "text": "Website development in Ahmedabad involves creating websites with strong functionality, responsive designs, fast loading speeds, and SEO-friendly structures tailored to business goals."
                }
            },
            {
                "name": "Can I get a custom e-commerce website developed in Ahmedabad?",
                "acceptedAnswer": {
                    "text": "Yes, custom e-commerce websites can be developed in Ahmedabad, featuring product catalogs, secure payment gateways, inventory management, and easy integration with shipping services."
                }
            },
            {
                "name": "How does SEO help in local business growth in Ahmedabad?",
                "acceptedAnswer": {
                    "text": "SEO for local businesses in Ahmedabad helps them rank higher on Google search results for location-specific keywords, driving organic traffic, leads, and customers from the local market."
                }
            },
            {
                "name": "Why should I consider app development for my Ahmedabad-based business?",
                "acceptedAnswer": {
                    "text": "App development allows businesses in Ahmedabad to engage with their customers directly, offering features like easy access to services, online shopping, booking, and customer support."
                }
            },
            {
                "name": "What is the process of SEO for Ahmedabad-based businesses?",
                "acceptedAnswer": {
                    "text": "SEO for Ahmedabad businesses involves keyword research, on-page SEO, optimizing local listings, creating quality content, and building backlinks to boost organic visibility and drive traffic."
                }
            },
            {
                "name": "How do I know which IT services I need in Ahmedabad?",
                "acceptedAnswer": {
                    "text": "Assess your business goals and challenges. If you're looking to improve online visibility, SEO services would be beneficial. For customer engagement, consider app development or e-commerce solutions."
                }
            },
            {
                "name": "What makes Ahmedabad IT companies different from others?",
                "acceptedAnswer": {
                    "text": "Ahmedabad IT companies are known for their deep understanding of local businesses, offering tailored solutions that blend affordability with high-quality results. They are also known for their strong customer service and timely support."
                }
            },
            {
                "name": "What should I expect during the website development process in Ahmedabad?",
                "acceptedAnswer": {
                    "text": "During the website development process, you can expect consultation for design and features, development and coding, testing for usability and functionality, and launch support."
                }
            },
            {
                "name": "How do I integrate online payment gateways into my website in Ahmedabad?",
                "acceptedAnswer": {
                    "text": "Integrating payment gateways into your website involves choosing a reliable service provider, creating a secure API connection, and ensuring compliance with local regulations."
                }
            },
            {
                "name": "Can I improve my website's loading speed in Ahmedabad?",
                "acceptedAnswer": {
                    "text": "Yes, website speed optimization can be done by compressing images, leveraging caching, optimizing code, and using a reliable hosting provider."
                }
            },
            {
                "name": "How does SEO affect local searches in Ahmedabad?",
                "acceptedAnswer": {
                    "text": "SEO helps businesses rank higher in local search results when customers search for location-based services in Ahmedabad, increasing visibility and attracting more local customers."
                }
            },
            {
                "name": "How long does it take to develop a website in Ahmedabad?",
                "acceptedAnswer": {
                    "text": "The timeline for website development depends on the complexity of the project. Basic websites may take 2-4 weeks, while complex websites may require 8 weeks or more."
                }
            },
             {
                "name": "What is the role of social media marketing for businesses in Ahmedabad?",
                "acceptedAnswer": {
                    "text": "Social media marketing helps businesses in Ahmedabad build brand awareness, engage with customers, and drive traffic to their website through platforms like Facebook, Instagram, and LinkedIn."
                }
            },
             {
                "name": "How do I choose the right IT services for my Ahmedabad-based business?",
                "acceptedAnswer": {
                    "text": "Choosing the right IT services depends on your business needs, such as website development, SEO, mobile app development, or cloud solutions. Consult with an expert to identify the best solutions for your goals."
                }
            },
             {
                "name": "What are the benefits of SEO for local businesses in Ahmedabad?",
                "acceptedAnswer": {
                    "text": "SEO helps local businesses in Ahmedabad appear in local search results, improving visibility, attracting more traffic, and generating more business opportunities."
                }
            },
        ];

        // Reference the FAQ container
     document.addEventListener('DOMContentLoaded', function () {
    const accordionContainer = document.querySelector('#accordionExample');
    const faqSection = document.querySelector('section.faq-section');

    if (!accordionContainer || !faqSection) return;

    const isHomePageFaq = faqSection.id === 'faqs';
    const visibleFaqs = isHomePageFaq ? faqData.slice(0, 10) : faqData;

    visibleFaqs.forEach((faq, index) => {
        const accordionItem = document.createElement('div');
        accordionItem.classList.add('accordion-item');

        accordionItem.innerHTML = `
            <h2 class="accordion-header" id="heading${index + 1}">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse${index + 1}" aria-expanded="false" aria-controls="collapse${index + 1}">
                    ${faq.name}
                    <span class="accordion-icon">
                        <i class="fa-solid fa-plus"></i>
                    </span>
                </button>
            </h2>
            <div id="collapse${index + 1}" class="accordion-collapse collapse" aria-labelledby="heading${index + 1}" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    ${faq.acceptedAnswer.text}
                </div>
            </div>
        `;

        accordionContainer.appendChild(accordionItem);
    });
});

// quick-link url set

const links = document.querySelectorAll('.quick-links');

// Get the current domain name
const currentDomain = window.location.hostname;

let targetDomain;

// Decide which homepage URL to set based on the current domain
switch (currentDomain) {
  case 'ahmedabaditservices.com':
    targetDomain = 'https://ahmedabaditservices.com/';
    break;
  case 'ahmedabaditcompany.com':
    targetDomain = 'https://ahmedabaditcompany.com/';
    break;
  case 'ahmedabadwebsites.com':
    targetDomain = 'https://ahmedabadwebsites.com/';
    break;
  case 'ahmedabaditservice.com':
    targetDomain = 'https://ahmedabaditservice.com/';
    break;
  default:
    targetDomain = window.location.origin; // If domain doesn't match, use the current domain
}

links.forEach(link => {
  link.href = targetDomain; // Set the link to the correct homepage
});



    



  





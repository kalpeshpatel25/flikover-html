<?php $page_css='home1.css'; include 'includes/header1.php'; ?>

<!-- === MAIN LAYOUT SECTION S === -->
<div class="page-content">
  <!-- === HERO SECTION S === -->
  <section class="hero-section">
      <div class="hero-grid-bg"></div>

      <div class="container hero-container">
          
          <div class="hero-content">
              <h1 class="hero-title">
                  No. 1 Group Buy <br>Community In The <br>World
              </h1>
              
              <p class="hero-description">
                  Get 20 Premium Tools Access With Instant Support,<br>
                  Providing quality service since 13th Oct 2016
              </p>

              <form action="#" class="hero-form">
                  <input type="email" placeholder="Enter your email" required />
                  <button type="submit" class="btn btn-tertiary">Try For Free</button>
              </form>

              <div class="social-proof">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <circle cx="12" cy="12" r="12" fill="#1877F2"/>
                      <path d="M15.5 12.5H13V20H10V12.5H8.5V10H10V8.2C10 6.1 11.3 5 13.2 5C14.1 5 14.9 5.1 15.1 5.1V7.2H14.1C13.1 7.2 12.9 7.7 12.9 8.3V10H15.3L15.5 12.5Z" fill="white"/>
                  </svg>
                  <span>6K people use & recommend Flikover</span>
              </div>
          </div>

          <div class="hero-image-wrapper">
             <img src="<?= $base_url ?>/assets/images/hero-new.png" alt="Illustration" class="hero-img">
          </div>

      </div>

      <div class="container hero-disclaimer">
          <p>
              The only original website Flikover.com which everyone use. Be aware<br>
              from other fake/spam websites which using our design/name.
          </p>
      </div>

  </section>
  <!-- === HERO SECTION E === -->

  <!-- === FAQ SECTION S === -->
  <section class="section faq-section">
      <div class="container">
          <div class="faq-header">
              <h2 class="faq-title">Frequently asked questions</h2>
              <p class="faq-subtitle">Everything you need to know about the product and billing.</p>
          </div>

          <div class="faq-container">
              <!-- === FAQ ITEM 1 S === -->
              <div class="faq-item">
                  <button class="faq-question">
                      <span>Is there a free trial available?</span>
                      <div class="faq-icon">
                          <svg class="icon-plus" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/>
                              <path d="M12 8V16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                              <path d="M8 12H16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                          </svg>
                          <svg class="icon-minus" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/>
                              <path d="M8 12H16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                          </svg>
                      </div>
                  </button>
                  <div class="faq-answer">
                      Yes, you can try us for free for 30 days. If you want, we'll provide you with a free, personalized 30-minute onboarding call to get you up and running as soon as possible.
                  </div>
              </div>
              <!-- === FAQ ITEM 1 E === -->

              <!-- === FAQ ITEM 2 S === -->
              <div class="faq-item">
                  <button class="faq-question">
                      <span>Can I change my plan later?</span>
                      <div class="faq-icon">
                          <svg class="icon-plus" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/><path d="M12 8V16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><path d="M8 12H16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
                          <svg class="icon-minus" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/><path d="M8 12H16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
                      </div>
                  </button>
                  <div class="faq-answer">
                      Yes, you can easily change your plan at any time through your account settings. Changes will be applied immediately.
                  </div>
              </div>
              <!-- === FAQ ITEM 2 E === -->

              <!-- === FAQ ITEM 3 S === -->
              <div class="faq-item">
                  <button class="faq-question">
                      <span>What is your cancellation policy?</span>
                      <div class="faq-icon">
                          <svg class="icon-plus" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/><path d="M12 8V16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><path d="M8 12H16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
                          <svg class="icon-minus" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/><path d="M8 12H16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
                      </div>
                  </button>
                  <div class="faq-answer">
                      You can cancel your subscription at any time. We do not offer refunds for partial billing periods, but you will retain access until the end of your billing cycle.
                  </div>
              </div>
              <!-- === FAQ ITEM 3 E === -->

                <!-- === FAQ ITEM 4 S === -->
              <div class="faq-item">
                  <button class="faq-question">
                      <span>Can other info be added to an invoice?</span>
                      <div class="faq-icon">
                          <svg class="icon-plus" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/><path d="M12 8V16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><path d="M8 12H16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
                          <svg class="icon-minus" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/><path d="M8 12H16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
                      </div>
                  </button>
                  <div class="faq-answer">
                      Yes, you can add custom details such as your company name, address, and VAT number to your invoices in the billing settings.
                  </div>
              </div>
              <!-- === FAQ ITEM 4 E === -->

              <!-- === FAQ ITEM 5 S === -->
              <div class="faq-item">
                  <button class="faq-question">
                      <span>How does billing work?</span>
                      <div class="faq-icon">
                          <svg class="icon-plus" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/><path d="M12 8V16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><path d="M8 12H16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
                          <svg class="icon-minus" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/><path d="M8 12H16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
                      </div>
                  </button>
                  <div class="faq-answer">
                      We offer monthly and annual billing cycles. Payments are processed securely via Stripe or PayPal at the beginning of each cycle.
                  </div>
              </div>
              <!-- === FAQ ITEM 5 E === -->

              <!-- === FAQ ITEM 6 S === -->
              <div class="faq-item">
                  <button class="faq-question">
                      <span>How do I change my account email?</span>
                      <div class="faq-icon">
                          <svg class="icon-plus" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/><path d="M12 8V16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><path d="M8 12H16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
                          <svg class="icon-minus" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/><path d="M8 12H16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
                      </div>
                  </button>
                  <div class="faq-answer">
                      To change your account email, please navigate to the profile settings page, enter your new email address, and verify the change via the confirmation link sent to you.
                  </div>
              </div>
              <!-- === FAQ ITEM 6 E === -->
          </div>

        
  </section>
  <!-- === FAQ SECTION E === -->

  <!-- === CLIENT TESTIMONIALS SECTION S === -->
  <section class="section testimonials-section">
      <div class="container">
        <div class="testimonials-slider-wrapper">
            
            <div class="testimonials-main-content">
                <div class="testimonials-header">
                    <h2 class="testimonials-title">Client Testimonials</h2>
                </div>
                
                <div class="testimonials-slider" id="testimonialSlider">
                    
                    <!-- === TESTIMONIAL CARD 1 S === -->
                    <div class="testimonial-card">
                        <p class="testimonial-quote">"We love Landingfolio! Our designers were using it for their projects, so clients already knew what Landingfolio was and how to use it."</p>
                        <div class="testimonial-author">
                            <div class="author-name">Darlene Robertson</div>
                            <div class="author-role">Product Manager at Jomanar</div>
                        </div>
                    </div>
                    <!-- === TESTIMONIAL CARD 1 E === -->

                    <!-- === TESTIMONIAL CARD 2 S === -->
                    <div class="testimonial-card">
                        <p class="testimonial-quote">"I didn't know designing in Webflow could be this individualized. I'd never considered it before, but Landingfolio changed my mind."</p>
                        <div class="testimonial-author">
                            <div class="author-name">Bessie Cooper</div>
                            <div class="author-role">Freelance UX Designer</div>
                        </div>
                    </div>
                    <!-- === TESTIMONIAL CARD 2 E === -->

                    <!-- === TESTIMONIAL CARD 3 S === -->
                    <div class="testimonial-card">
                        <p class="testimonial-quote">"We love Landingfolio! Our designers were using it for their projects, so clients already knew what Landingfolio was and how to use it."</p>
                        <div class="testimonial-author">
                            <div class="author-name">Arlene McCoy</div>
                            <div class="author-role">Product Designer at Martina.co</div>
                        </div>
                    </div> 
                    <!-- === TESTIMONIAL CARD 3 E === -->
                    
                    <!-- === TESTIMONIAL CARD 4 S === -->
                    <div class="testimonial-card">
                        <p class="testimonial-quote">"We love Landingfolio! Our designers were using it for their projects, so clients already knew what Landingfolio was and how to use it."</p>
                        <div class="testimonial-author">
                            <div class="author-name">Arlene McCoy</div>
                            <div class="author-role">Product Designer at Martina.co</div>
                        </div>
                    </div>
                    <!-- === TESTIMONIAL CARD 4 E === -->

                </div>
            </div>

            <div class="testimonials-controls">
                <button class="slider-arrow slider-prev" id="prevTestimonial">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5"/><path d="M12 19l-7-7 7-7"/></svg>
                </button>

                <button class="slider-arrow slider-next" id="nextTestimonial">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>
                </button>
            </div>

        </div>
      </div>
  </section>
  <!-- === CLIENT TESTIMONIALS SECTION E === -->

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script>
  document.addEventListener('DOMContentLoaded', function() {
      // FAQ Logic
      const faqItems = document.querySelectorAll('.faq-item');
      faqItems.forEach(item => {
          const question = item.querySelector('.faq-question');
          question.addEventListener('click', (e) => {
              e.stopPropagation();
              faqItems.forEach(otherItem => {
                  if (otherItem !== item && otherItem.classList.contains('active')) {
                      otherItem.classList.remove('active');
                  }
              });
              item.classList.toggle('active');
          });
      });
      document.addEventListener('click', (e) => {
          faqItems.forEach(item => {
              if (item.classList.contains('active') && !item.contains(e.target)) {
                  item.classList.remove('active');
              }
          });
      });

      // Testimonial Slick Slider - Reusable Logic
      $('.testimonials-slider-wrapper').each(function() {
          var $wrapper = $(this);
          var $slider = $wrapper.find('.testimonials-slider');
          var $prevBtn = $wrapper.find('.slider-prev');
          var $nextBtn = $wrapper.find('.slider-next');

          $slider.slick({
              slidesToShow: 3,
              slidesToScroll: 1,
              arrows: false, // We use custom arrows bindings below
              infinite: true,
              responsive: [
                  {
                      breakpoint: 992,
                      settings: { slidesToShow: 2 }
                  },
                  {
                      breakpoint: 768,
                      settings: { slidesToShow: 1 }
                  }
              ]
          });

          // Custom Navigation scoped to this specific wrapper
          $prevBtn.click(function() {
              $slider.slick('slickPrev');
          });
          $nextBtn.click(function() {
              $slider.slick('slickNext');
          });
      });
  });
  </script>

</div>
<!-- === MAIN LAYOUT SECTION E === -->
<?php include 'includes/footer.php'; ?>

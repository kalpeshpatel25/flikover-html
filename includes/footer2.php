<footer class="site-footer-2">
  <div class="container">
    <div class="footer-new-layout">
        
        <!-- Part 1: Contact & Support (Left) -->
        <div class="footer-part-1">
            <div class="footer-contact-group">
                 <div class="footer-contact">
                    <i class="envelope-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                      </svg>
                    </i>
                    <a href="mailto:contact@flikover.com">contact@flikover.com</a>
                  </div>
                  
                  <div class="footer-support">
                    <span class="support-label">For any support:</span>
                    <a href="#" class="btn-contact-us">Contact us</a>
                  </div>
            </div>
        </div>

        <!-- Part 2: Payment & Copyright (Right) -->
        <div class="footer-part-2">
            <div class="footer-payment">
                <img src="assets/images/paytm_logo.svg.png" alt="Paytm" class="payment-logo">
                <img src="assets/images/path3789 (1).png" alt="Visa" class="payment-logo">
                <img src="assets/images/Group (2).png" alt="Mastercard" class="payment-logo">
                <img src="assets/images/1280px-UPI-Logo-vector.svg 1 (1).png" alt="UPI" class="payment-logo">
            </div>
            
            <div class="footer-copyright">
                <span>© 2016-2026 Flikover.com</span>
                <span class="dot-sep">·</span>
                <a href="#">Terms</a>
                <span class="dot-sep">·</span>
                <a href="#">Privacy</a>
                <span class="dot-sep">·</span>
                <a href="#">Disclaimer</a>
                <span class="dot-sep">·</span>
                <a href="#">Contact</a>
            </div>
        </div>
        
    </div>
  </div>
</footer>

<style>
    .footer-new-layout {
        display: flex;
        justify-content: space-between;
        align-items: flex-start; /* Top align columns */
        padding: 20px 0;
    }

    .footer-part-1, .footer-part-2 {
        display: flex;
        flex-direction: column;
        gap: 20px; /* Space between rows inside parts */
    }

    .footer-part-2 {
        align-items: flex-end; /* Right align content */
    }

    /* Keep existing styles active inside usage */
    .footer-contact, .footer-support {
        display: flex;
        align-items: center;
        gap: 10px;
    }
    
    .footer-payment {
        display: flex;
        gap: 15px;
        align-items: center;
    }
    
    .footer-copyright {
        display: flex;
        gap: 5px;
        align-items: center;
        font-size: 14px; /* Ensure readability */
    }

    /* Mobile Responsiveness */
    @media (max-width: 768px) {
        .footer-new-layout {
            flex-direction: column;
            align-items: center; /* Center main layout */
            gap: 30px;
        }
        
        .footer-part-1, .footer-part-2 {
            width: 100%;
            align-items: center; /* Center children */
        }
        
        .footer-contact, .footer-support {
            justify-content: center; /* Center detailed rows */
            width: 100%;
        }
        
        .footer-payment {
            justify-content: center;
            width: 100%;
            flex-wrap: wrap; 
        }
        
        .footer-copyright {
            justify-content: center;
            width: 100%;
            flex-wrap: wrap;
            text-align: center;
        }
    }
</style>
 <!-- Row 2: Support & Copyright E -->

<!-- Mobile Menu Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  const mobileToggle = document.querySelector('.mobile-toggle');
  const headerNav = document.querySelector('.header-nav');

  if (mobileToggle && headerNav) {
    const closeDrawer = () => {
      mobileToggle.classList.remove('active');
      headerNav.classList.remove('active');
      document.body.style.overflow = 'auto';
    };

    mobileToggle.addEventListener('click', function() {
      this.classList.toggle('active');
      headerNav.classList.toggle('active');
      document.body.style.overflow = headerNav.classList.contains('active') ? 'hidden' : 'auto';
    });

    // Listen to the dedicated close button
    const drawerClose = document.querySelector('.drawer-close');
    if (drawerClose) {
      drawerClose.addEventListener('click', closeDrawer);
    }
  }
});
</script>
</body>
</html>

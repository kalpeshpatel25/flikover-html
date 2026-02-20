<footer class="site-footer-2">
  <!-- === FOOTER BOTTOM BAR S === -->
  <div class="footer-bottom-bar">
      <div class="container">
          <div class="bottom-bar-content">
              <!-- === COPYRIGHT LINKS S === -->
              <div class="footer-copyright-links">
                  <span>© 2016-2026 Flikover.com</span>
                  <span class="dot-sep">·</span>
                  <a href="#">Terms</a>
                  <span class="dot-sep">·</span>
                  <a href="#">Privacy</a>
                  <span class="dot-sep">·</span>
                  <a href="#">Disclaimer</a>
                  <span class="dot-sep">·</span>
                  <a href="#">Contact us</a>
              </div>
              <!-- === COPYRIGHT LINKS E === -->

              <!-- === PAYMENT LOGOS S === -->
              <div class="footer-payment-logos">
                  <img src="assets/images/paytm_logo.svg.png" alt="Paytm" class="payment-logo">
                  <img src="assets/images/path3789 (1).png" alt="Visa" class="payment-logo">
                  <img src="assets/images/Group (2).png" alt="Mastercard" class="payment-logo">
                  <img src="assets/images/1280px-UPI-Logo-vector.svg 1 (1).png" alt="UPI" class="payment-logo">
              </div>
              <!-- === PAYMENT LOGOS E === -->
          </div>
      </div>
  </div>
  <!-- === FOOTER BOTTOM BAR E === -->
</footer>

<style>
    /* === FOOTER STYLES S === */
    .site-footer-2 {
        padding: 0;
        margin: 0;
        background-color: #000;
    }

    .footer-bottom-bar {
        background-color: #363636;
        color: #ffffff;
        padding: 15px 0;
        width: 100%;
        margin: 0;
    }

    .bottom-bar-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
    }

    .footer-copyright-links {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        font-size: 13px;
        color: #ffffff;
    }

    .footer-copyright-links a {
        color: #ffffff;
        text-decoration: none;
        transition: color 0.2s;
    }

    .footer-copyright-links a:hover {
        color: #ffffff;
    }

    .footer-payment-logos {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .payment-logo {
        height: 20px; 
        width: auto;
        filter: grayscale(100%) brightness(200%); 
        opacity:unset;
    }

    .dot-sep {
        margin: 0 5px;
        color: #ffffff;
    }

    @media (max-width: 768px) {
        .bottom-bar-content {
            flex-direction: column-reverse; 
            gap: 20px;
            align-items: center;
            text-align: center;
        }
        
        .footer-copyright-links {
            justify-content: center;
        }
    }
    /* === FOOTER STYLES E === */
</style>

<!-- === MOBILE MENU SCRIPT S === -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  /* === DRAWER FUNCTIONALITY S === */
  const mobileToggle = document.querySelector('.mobile-toggle');
  const headerNav = document.querySelector('.site-header-2 .header-nav');

  if (mobileToggle && headerNav) {
    const closeDrawer = () => {
      mobileToggle.classList.remove('active');
      headerNav.classList.remove('active');
      document.body.style.overflow = 'auto';
    };

    mobileToggle.addEventListener('click', function(e) {
      e.stopPropagation();
      this.classList.toggle('active');
      headerNav.classList.toggle('active');
      document.body.style.overflow = headerNav.classList.contains('active') ? 'hidden' : 'auto';
    });

    const drawerClose = document.querySelector('.drawer-close');
    if (drawerClose) {
      drawerClose.addEventListener('click', function(e) {
        e.stopPropagation();
        closeDrawer();
      });
    }

    document.addEventListener('click', function(e) {
      if (headerNav.classList.contains('active')) {
        if (!headerNav.contains(e.target) && !mobileToggle.contains(e.target)) {
          closeDrawer();
        }
      }
    });

    headerNav.addEventListener('click', function(e) {
        e.stopPropagation();
    });
  }
  /* === DRAWER FUNCTIONALITY E === */
});
</script>
<!-- === MOBILE MENU SCRIPT E === -->
</body>
</html>

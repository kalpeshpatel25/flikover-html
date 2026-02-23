</main>
<footer class="site-footer-2">
  <!-- === FOOTER BOTTOM BAR S === -->
  <div class="footer-bottom-bar">
      <div class="container">
          <div class="bottom-bar-content">
              <!-- === COPYRIGHT LINKS S === -->
              <div class="footer-copyright-links">
                  <span>© 2016-2026 Flikover.com</span>
                  <span class="dot-sep">·</span>
                  <a href="terms-conditions.php">Terms</a>
                  <span class="dot-sep">·</span>
                  <a href="privacy-policy.php">Privacy</a>
                  <span class="dot-sep">·</span>
                  <a href="disclaimer.php">Disclaimer</a>
                  <span class="dot-sep">·</span>
                  <a href="contactus.php">Contact us</a>
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

<!-- === MOBILE MENU SCRIPT S === -->

<script>
  $(function(){
    var headerHeight = $('.site-header-2').innerHeight();
  
    $('main').css('padding-top', headerHeight + 'px');
  });
  jQuery(window).scroll(function() {
    if (jQuery(this).scrollTop() > 0){
      jQuery('.site-header-2').addClass("sticky");
    }
    else{
      jQuery('.site-header-2').removeClass("sticky");
    }
  });
</script>
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

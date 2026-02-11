<!-- ==== DASHBOARD HEADER S ==== -->
<?php
$page_title = 'Dashboard';
$page_css = 'dashboard.css';
include('../includes/header2.php');
?>
<!-- ==== DASHBOARD HEADER E ==== -->

<div class="container dashboard-container">
  
  <!-- ==== DASHBOARD WELCOME S ==== -->
  
  <div class="dashboard-header">
    <div class="header-left">
      <div class="welcome-text">
        <h2>
          <span>👋</span> Good Afternoon, User Name
        </h2> 
        <p class="sub-text">Free Testing: Access ahrefs for free</p>
      </div>
    </div>
    <div class="header-right">
      <a href="tool-access.php" class="notes-link" data-toggle="modal" data-target="#notesModal">Show notes here</a>
    </div>
  </div>
  <!-- ==== DASHBOARD WELCOME E ==== -->

  <!-- ==== PLANS HIGHLIGHT SECTION S ==== -->
  
  <div class="plans-wrapper">
    
   
    <div class="plan-card">
      <div class="plan-row-top">
        <h3 class="plan-title">Combo Plan</h3>
        <div class="plan-price">₹ 2500/m</div>
      </div>
      
      <div class="plan-row-bottom">
        <ul class="plan-features">
          <li>
            <span class="feature-text">Access all tools</span> 
            <span class="info-icon" title="More info">i</span>
          </li>
          <li>
            <span class="feature-text">Testing Tools</span> 
            <span class="info-icon" title="More info">i</span>
          </li>
        </ul>
        
        <a href="tool-access.php" class="btn-plan">Buy Now</a>
      </div>
    </div>

    <div class="plan-card">
     
      <div class="badge-top-seller">
        <svg width="70" height="70" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
          <!-- Scalloped Seal Background -->
          <path d="M50 5C53.5 5 55.4 9.1 58.7 9.8C62 10.5 65.5 7.8 68.3 9.4C71.1 11 71.6 15.2 74 17.5C76.4 19.8 80.6 20.3 82.2 23.1C83.8 25.9 81.1 29.4 81.8 32.7C82.5 36 86.6 37.9 86.6 41.4C86.6 44.9 82.5 46.8 81.8 50.1C81.1 53.4 83.8 56.9 82.2 59.7C80.6 62.5 76.4 63 74 65.3C71.6 67.6 71.1 71.8 68.3 73.4C65.5 75 62 72.3 58.7 73C55.4 73.7 53.5 77.8 50 77.8C46.5 77.8 44.6 73.7 41.3 73C38 72.3 34.5 75 31.7 73.4C28.9 71.8 28.4 67.6 26 65.3C23.6 63 19.4 62.5 17.8 59.7C16.2 56.9 18.9 53.4 18.2 50.1C17.5 46.8 13.4 44.9 13.4 41.4C13.4 37.9 17.5 36 18.2 32.7C18.9 29.4 16.2 25.9 17.8 23.1C19.4 20.3 23.6 19.8 26 17.5C28.4 15.2 28.9 11 31.7 9.4C34.5 7.8 38 10.5 41.3 9.8C44.6 9.1 46.5 5 50 5Z" fill="#D6A04B"/>
          
          <!-- Stars (center arched) -->
          <path d="M50 18L51.2 21.6H55L52 23.8L53.2 27.4L50 25.2L46.8 27.4L48 23.8L45 21.6H48.8L50 18Z" fill="black"/>
          <path d="M38 22L39.2 25.6H43L40 27.8L41.2 31.4L38 29.2L34.8 31.4L36 27.8L33 25.6H36.8L38 22Z" fill="black"/>
          <path d="M62 22L63.2 25.6H67L64 27.8L65.2 31.4L62 29.2L58.8 31.4L60 27.8L57 25.6H60.8L62 22Z" fill="black"/>

          <!-- TOP Text -->
          <text x="50" y="48" font-family="Arial, sans-serif" font-size="20" fill="black" text-anchor="middle" font-weight="900">TOP</text>
          
          <!-- SELLER Background/Banner -->
          <path d="M25 52H75L78 65L75 62H25L22 65L25 52Z" fill="black"/>
          <text x="50" y="60" font-family="Arial, sans-serif" font-size="10" fill="white" text-anchor="middle" font-weight="800" letter-spacing="0.5">SELLER</text>
          
          <!-- Banner Tail -->
          <path d="M38 62V78L50 72L62 78V62H38Z" fill="black"/>
        </svg>
      </div>

      <div class="plan-row-top">
        <h3 class="plan-title">Combo Mini Plan</h3>
        <div class="plan-price">₹ 1200/m</div>
      </div>
      
      <div class="plan-row-bottom">
        <ul class="plan-features">
          <li>
            <span class="feature-text">Access all tools expect Ahrefs</span> 
            <span class="info-icon" title="More info">i</span>
          </li>
          <li>
            <span class="feature-text">Testing Tools</span> 
            <span class="info-icon" title="More info">i</span>
          </li>
        </ul>
        
        <a href="tool-access.php" class="btn-plan">Buy Now</a>
      </div>
    </div>

  </div> 
  <!-- ==== PLANS HIGHLIGHT SECTION E ==== -->

  <!-- ==== SIGNAL PRODUCT PLANS S ==== -->

  <div class="signal-plans-section">
    <h3 class="section-title">Signal Product Plans</h3>
    
    <div class="product-grid">

      <div class="product-card">
        <div class="product-logo">
          <span class="logo-text ahrefs">ahrefs</span>
        </div>
        <div class="product-price">₹ 1200/m</div>
        <a href="tool-access.php" class="btn-product" data-toggle="modal" data-target="#signalModal">Access</a>
      </div>


      <div class="product-card">
        <div class="product-logo">
          <span class="logo-text crello">crello</span>
        </div>
        <div class="product-price">₹ 1200/m</div>
        <a href="tool-access.php" class="btn-product" data-toggle="modal" data-target="#signalModal">Access</a>
      </div>

 
      <div class="product-card">
        <div class="product-logo">
          <span class="logo-text serpstat">SERPSTAT</span>
        </div>
        <div class="product-price">₹ 1200/m</div>
        <a href="tool-access.php" class="btn-product" data-toggle="modal" data-target="#signalModal">Access</a>
      </div>


      <div class="product-card">
        <div class="product-logo">
          <span class="logo-text semrush">semrush</span>
        </div>
        <div class="product-price">₹ 1200/m</div>
        <a href="tool-access.php" class="btn-product" data-toggle="modal" data-target="#signalModal">Access</a>
      </div>

      <div class="product-card">
        <div class="product-logo">
          <span class="logo-text picmonkey">PicMonkey</span>
        </div>
        <div class="product-price">₹ 1200/m</div>
        <a href="tool-access.php" class="btn-product" data-toggle="modal" data-target="#signalModal">Access</a>
      </div>

      <div class="product-card">
        <div class="product-logo">
          <span class="logo-text ahrefs">ahrefs</span>
        </div>
        <div class="product-price">₹ 1200/m</div>
        <a href="tool-access.php" class="btn-product" data-toggle="modal" data-target="#signalModal">Access</a>
      </div>

      
      <div class="product-card">
        <div class="product-logo">
          <span class="logo-text picmonkey">PicMonkey</span>
        </div>
        <div class="product-price">₹ 1200/m</div>
        <a href="tool-access.php" class="btn-product" data-toggle="modal" data-target="#signalModal">Access</a>
      </div>

      
      <div class="product-card">
        <div class="product-logo">
          <span class="logo-text ahrefs">ahrefs</span>
        </div>
        <div class="product-price">₹ 1200/m</div>
        <a href="tool-access.php" class="btn-product" data-toggle="modal" data-target="#signalModal">Access</a>
      </div>

      
      <div class="product-card">
        <div class="product-logo">
          <span class="logo-text skillshare">SKILLSHARE</span>
        </div>
        <div class="product-price">₹ 1200/m</div>
        <a href="tool-access.php" class="btn-product" data-toggle="modal" data-target="#signalModal">Access</a>
      </div>            

      
      <div class="product-card">
        <div class="product-logo">
          <span class="logo-text ahrefs">ahrefs</span>
        </div>
        <div class="product-price">₹ 1200/m</div>
        <a href="tool-access.php" class="btn-product" data-toggle="modal" data-target="#signalModal">Access</a>
      </div>

      
      
      <div class="product-card">
        <div class="product-logo">
          <span class="logo-text woorank">woorank</span>
        </div>
        <div class="product-price">₹ 1200/m</div>
        <a href="tool-access.php" class="btn-product" data-toggle="modal" data-target="#signalModal">Access</a>
      </div>

      
      <div class="product-card">
        <div class="product-logo">
          <span class="logo-text ahrefs">ahrefs</span>
        </div>
        <div class="product-price">₹ 1200/m</div>
        <a href="tool-access.php" class="btn-product" data-toggle="modal" data-target="#signalModal">Access</a>
      </div>

      
      <div class="product-card">
        <div class="product-logo">
          <span class="logo-text ahrefs">ahrefs</span>
        </div>
        <div class="product-price">₹ 1200/m</div>
        <a href="tool-access.php" class="btn-product" data-toggle="modal" data-target="#signalModal">Access</a>
      </div>

      
      <div class="product-card">
        <div class="product-logo">
          <span class="logo-text picmonkey">PicMonkey</span>
        </div>
        <div class="product-price">₹ 1200/m</div>
        <a href="tool-access.php" class="btn-product" data-toggle="modal" data-target="#signalModal">Access</a>
      </div>

     
      <div class="product-card">
        <div class="product-logo">
          <span class="logo-text ahrefs">ahrefs</span>
        </div>
        <div class="product-price">₹ 1200/m</div>
        <a href="tool-access.php" class="btn-product" data-toggle="modal" data-target="#signalModal">Access</a>
      </div>

    </div>
  </div>
  <!-- ==== SIGNAL PRODUCT PLANS E ==== -->

  <!-- ==== TESTING TOOLS SECTION S ==== -->
  <div class="signal-plans-section">
    <h3 class="section-title">Testing tools (only for combo & mini users)</h3>
    
    <div class="product-grid">
      <?php for($i=0; $i<9; $i++): ?>
      <div class="product-card">
        <div class="product-logo">
          <span class="logo-text ahrefs">ahrefs</span>
        </div>
        <div class="product-price">₹ 1200/m</div>
        <a href="tool-access.php" class="btn-product" data-toggle="modal" data-target="#signalModal">Access</a>
      </div>
      <?php endfor; ?>
    </div>
  </div>
  <!-- ==== TESTING TOOLS SECTION E ==== -->


</div> <!-- End dashboard-container -->

<!-- ==== MODAL SECTION S ==== -->
<div class="modal" id="accessVideoModal">
  <div class="modal-dialog" style="max-width: 600px;">
    <div class="modal-header">
      <h3>How to access</h3>
      <button class="modal-close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body" style="padding: 0;">
      <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;">
        <iframe 
          src="https://www.youtube.com/embed/dQw4w9WgXcQ" 
          style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 0;" 
          allowfullscreen>
        </iframe>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="notesModal">
  <div class="modal-dialog">
    <div class="modal-header">
      <h3>Hi Testmme, Don't Forget !!</h3>
      <button class="modal-close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">
      <div class="notes-content">
        <p class="notes-main-text">Your Ahrefs subscription going to expire in next <strong>1 day.</strong></p>
        <p class="notes-sub-text">Note: If you renew today then service will get added after your current expiry date, no days overlap.</p>
        <p class="notes-highlight-text">Renew your service today to enjoy uninterrupted service !!</p>
        <div class="notes-signature">
          <p>Best Wishes,</p>
          <p>Team Flikover</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="signalModal">
  <div class="modal-dialog">
    <div class="modal-header">
      <h3>Signal Product Plans</h3>
      <button class="modal-close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">
      <div class="modal-logos-grid">
        <div class="modal-logo-item" title="Majestic">
          <span class="logo-placeholder brand-majestic"><i>★★★★★</i> MAJESTIC</span>
          <img src="https://logo.clearbit.com/majestic.com" alt="Majestic" onerror="this.style.display='none'">
        </div>
        <div class="modal-logo-item" title="Serpstat">
          <span class="logo-placeholder brand-serpstat">SERPSTAT</span>
          <img src="https://logo.clearbit.com/serpstat.com" alt="Serpstat" onerror="this.style.display='none'">
        </div>
        <div class="modal-logo-item" title="Semrush">
          <span class="logo-placeholder brand-semrush">semrush</span>
          <img src="https://logo.clearbit.com/semrush.com" alt="Semrush" onerror="this.style.display='none'">
        </div>
        <div class="modal-logo-item" title="Ahrefs">
          <span class="logo-placeholder brand-ahrefs">ahrefs</span>
          <img src="https://logo.clearbit.com/ahrefs.com" alt="Ahrefs" onerror="this.style.display='none'">
        </div>
        <div class="modal-logo-item" title="PicMonkey">
          <span class="logo-placeholder brand-picmonkey">PicMonkey</span>
          <img src="https://logo.clearbit.com/picmonkey.com" alt="PicMonkey" onerror="this.style.display='none'">
        </div>
        <div class="modal-logo-item" title="Crello">
          <span class="logo-placeholder brand-crello">crello</span>
          <img src="https://logo.clearbit.com/vistacreate.com" alt="Crello" onerror="this.style.display='none'">
        </div>
        <div class="modal-logo-item" title="Piktochart">
          <span class="logo-placeholder brand-piktochart">PIKTOCHART</span>
          <img src="https://logo.clearbit.com/piktochart.com" alt="Piktochart" onerror="this.style.display='none'">
        </div>
        <div class="modal-logo-item" title="Canva">
          <span class="logo-placeholder brand-canva">Canva</span>
          <img src="https://logo.clearbit.com/canva.com" alt="Canva" onerror="this.style.display='none'">
        </div>
        <div class="modal-logo-item" title="Grammarly">
          <span class="logo-placeholder brand-grammarly">grammarly</span>
          <img src="https://logo.clearbit.com/grammarly.com" alt="Grammarly" onerror="this.style.display='none'">
        </div>
        <div class="modal-logo-item" title="Woorank">
          <span class="logo-placeholder brand-woorank">Woorank</span>
          <img src="https://logo.clearbit.com/woorank.com" alt="Woorank" onerror="this.style.display='none'">
        </div>
        <div class="modal-logo-item" title="Lynda">
          <span class="logo-placeholder brand-lynda">lynda.com</span>
          <img src="https://logo.clearbit.com/lynda.com" alt="Lynda" onerror="this.style.display='none'">
        </div>
        <div class="modal-logo-item" title="Skillshare">
          <span class="logo-placeholder brand-skillshare">SKILLSHARE</span>
          <img src="https://logo.clearbit.com/skillshare.com" alt="Skillshare" onerror="this.style.display='none'">
        </div>
        <div class="modal-logo-item" title="Animoto">
          <span class="logo-placeholder brand-animoto">ANIMOTO</span>
          <img src="https://logo.clearbit.com/animoto.com" alt="Animoto" onerror="this.style.display='none'">
        </div>
        <div class="modal-logo-item" title="Envato Elements">
          <span class="logo-placeholder brand-envato">envatoelements</span>
          <img src="https://logo.clearbit.com/envato.com" alt="Envato" onerror="this.style.display='none'">
        </div>
        <div class="modal-logo-item" title="SpyFu">
          <span class="logo-placeholder brand-spyfu">SpyFu</span>
          <img src="https://logo.clearbit.com/spyfu.com" alt="SpyFu" onerror="this.style.display='none'">
        </div>
        <div class="modal-logo-item" title="Moz">
          <span class="logo-placeholder brand-moz">MOZ</span>
          <img src="https://logo.clearbit.com/moz.com" alt="Moz" onerror="this.style.display='none'">
        </div>
        <div class="modal-logo-item" title="BuzzSumo">
          <span class="logo-placeholder brand-buzzsumo">BuzzSumo</span>
          <img src="https://logo.clearbit.com/buzzsumo.com" alt="BuzzSumo" onerror="this.style.display='none'">
        </div>
        <div class="modal-logo-item" title="Keyword Tool">
          <span class="logo-placeholder brand-keywordtool">Keyword Tool</span>
          <img src="https://logo.clearbit.com/keywordtool.io" alt="Keyword Tool" onerror="this.style.display='none'">
        </div>
        <div class="modal-logo-item" title="WordAi">
          <span class="logo-placeholder brand-wordai">WordAi</span>
          <img src="https://logo.clearbit.com/wordai.com" alt="WordAi" onerror="this.style.display='none'">
        </div>
      </div>
    </div>
  </div>
</div>

<script>
    /* =====================================
        COMMON MODAL SCRIPT (ONE TIME ONLY)
    ===================================== */

    // Open modal
    document.addEventListener("click", function (e) {
        const trigger = e.target.closest('[data-toggle="modal"]');
        if (trigger) {
            const target = trigger.getAttribute("data-target");
            const modal = document.querySelector(target);
            if (modal) {
                modal.style.display = "block";
                document.body.style.overflow = "hidden"; 
            }
        }
    });

    // Close modal (button)
    document.addEventListener("click", function (e) {
        if (e.target.matches('[data-dismiss="modal"]')) {
            const modal = e.target.closest(".modal");
            if (modal) {
                modal.style.display = "none";
                document.body.style.overflow = "auto";
            }
        }
    });

    // Close modal (click outside)
    document.addEventListener("click", function (e) {
        if (e.target.classList.contains("modal")) {
            e.target.style.display = "none";
            document.body.style.overflow = "auto";
        }
    });
</script>
<!-- ==== MODAL SECTION E ==== -->



<!-- ==== SITE FOOTER S ==== -->
<?php include('../includes/footer2.php'); ?>
<!-- ==== SITE FOOTER E ==== -->

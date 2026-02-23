<?php
$page_title = 'Dashboard';
$page_css = 'dashboard.css'; // Link the new CSS
include('includes/header.php');
?>

<!-- === MAIN LAYOUT SECTION S === -->
<div class="tool-access-container">

    <!-- === WELCOME & COMBO PLANS SECTION S === -->
    <div class="content-box">
        <!-- === WELCOME SECTION S === -->
        <div class="welcome-section">
            <div class="welcome-left">
                <div class="welcome-text">
                    <h2><img src="assets/images/image 3.png" alt="Welcome" class="welcome-icon"> Good Afternoon, User Name</h2>
                </div>
                <p class="sub-text">Free Testing: Access ahrefs for free</p>
            </div>
            <div class="welcome-right">
                <a href="#" class="notes-link">Show notes here</a>
            </div>
        </div>
        <!-- === WELCOME SECTION E === -->

        <!-- === COMBO PLANS SECTION S === -->
        <div class="plans-wrapper">
            <!-- === COMBO PLAN CARD 1 S === -->
            <div class="plan-card">
                <div class="plan-header">
                    <h3 class="plan-title">Combo Plan</h3>
                    <div class="plan-price">₹ 2500/m</div>
                </div>
                <ul class="plan-features">
                    <li>Access all tools <span class="info-icon" data-tooltip="Get full access to all our 20+ premium tools instantly.">i</span></li>
                    <li class="feature-with-action">
                        <div class="feature-info">
                            <span>Testing Tools <span class="info-icon" data-tooltip="Access tools that are currently in beta or testing phase.">i</span></span>
                        </div>
                        <a href="#" class="buy-now-btn">Buy Now</a>
                    </li>
                </ul>
            </div>
            <!-- === COMBO PLAN CARD 1 E === -->

            <!-- === COMBO PLAN CARD 2 S === -->
            <div class="plan-card">
                <div class="top-seller-badge">
                     <svg viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M50 5C53.5 5 55.4 9.1 58.7 9.8C62 10.5 65.5 7.8 68.3 9.4C71.1 11 71.6 15.2 74 17.5C76.4 19.8 80.6 20.3 82.2 23.1C83.8 25.9 81.1 29.4 81.8 32.7C82.5 36 86.6 37.9 86.6 41.4C86.6 44.9 82.5 46.8 81.8 50.1C81.1 53.4 83.8 56.9 82.2 59.7C80.6 62.5 76.4 63 74 65.3C71.6 67.6 71.1 71.8 68.3 73.4C65.5 75 62 72.3 58.7 73C55.4 73.7 53.5 77.8 50 77.8C46.5 77.8 44.6 73.7 41.3 73C38 72.3 34.5 75 31.7 73.4C28.9 71.8 28.4 67.6 26 65.3C23.6 63 19.4 62.5 17.8 59.7C16.2 56.9 18.9 53.4 18.2 50.1C17.5 46.8 13.4 44.9 13.4 41.4C13.4 37.9 17.5 36 18.2 32.7C18.9 29.4 16.2 25.9 17.8 23.1C19.4 20.3 23.6 19.8 26 17.5C28.4 15.2 28.9 11 31.7 9.4C34.5 7.8 38 10.5 41.3 9.8C44.6 9.1 46.5 5 50 5Z" fill="#D6A04B"/>
                      <path d="M50 18L51.2 21.6H55L52 23.8L53.2 27.4L50 25.2L46.8 27.4L48 23.8L45 21.6H48.8L50 18Z" fill="black"/>
                      <path d="M38 22L39.2 25.6H43L40 27.8L41.2 31.4L38 29.2L34.8 31.4L36 27.8L33 25.6H36.8L38 22Z" fill="black"/>
                      <path d="M62 22L63.2 25.6H67L64 27.8L65.2 31.4L62 29.2L58.8 31.4L60 27.8L57 25.6H60.8L62 22Z" fill="black"/>
                      <text x="50" y="48" font-family="Arial, sans-serif" font-size="20" fill="black" text-anchor="middle" font-weight="900">TOP</text>
                      <path d="M25 52H75L78 65L75 62H25L22 65L25 52Z" fill="black"/>
                      <text x="50" y="60" font-family="Arial, sans-serif" font-size="10" fill="white" text-anchor="middle" font-weight="800" letter-spacing="0.5">SELLER</text>
                      <path d="M38 62V78L50 72L62 78V62H38Z" fill="black"/>
                    </svg>
                </div>
                <div class="plan-header">
                    <h3 class="plan-title">Combo Mini Plan</h3>
                    <div class="plan-price">₹ 1200/m</div>
                </div>
                <ul class="plan-features">
                    <li>Access all tools except Ahrefs <span class="info-icon" data-tooltip="Get access to all tools in our collection except for Ahrefs.">i</span></li>
                    <li class="feature-with-action">
                        <div class="feature-info">
                            <span>Testing Tools <span class="info-icon" data-tooltip="Access tools that are currently in beta or testing phase.">i</span></span>
                        </div>
                        <a href="#" class="buy-now-btn">Buy Now</a>
                    </li>
                </ul>
            </div>
        </div>
            <!-- === COMBO PLAN CARD 2 E === -->
        </div>
        <!-- === COMBO PLANS SECTION E === -->

    <!-- === WELCOME & COMBO PLANS SECTION E === -->

    <!-- === SINGLE PRODUCT PLANS SECTION S === -->
    <div class="content-box rounded-top">
        <!-- <h3 class="single-plans-title">Single Product Plans</h3> -->
        
        <div class="single-plans-grid">
            <?php 
            $single_tools = [
                ['name' => 'Ahrefs', 'img' => 'assets/images/ahrefs 2.png'],
                ['name' => 'Semrush', 'img' => 'assets/images/ahrefs 2 (1).png'],
                ['name' => 'PicMonkey', 'img' => 'assets/images/ahrefs 2 (2).png'],
                ['name' => 'Skillshare', 'img' => 'assets/images/ahrefs 2 (3).png'],
                ['name' => 'Crello', 'img' => 'assets/images/ahrefs 2 (4).png'],
                ['name' => 'Serpstat', 'img' => 'assets/images/ahrefs 2 (5).png'],
                ['name' => 'Ahrefs', 'img' => 'assets/images/ahrefs 2.png'],
                ['name' => 'Semrush', 'img' => 'assets/images/ahrefs 2 (1).png'],
                ['name' => 'PicMonkey', 'img' => 'assets/images/ahrefs 2 (2).png'],
                ['name' => 'Skillshare', 'img' => 'assets/images/ahrefs 2 (3).png'],
                ['name' => 'Ahrefs', 'img' => 'assets/images/ahrefs 2.png'],
                ['name' => 'Semrush', 'img' => 'assets/images/ahrefs 2 (1).png'],
                ['name' => 'PicMonkey', 'img' => 'assets/images/ahrefs 2 (2).png'],
                ['name' => 'Skillshare', 'img' => 'assets/images/ahrefs 2 (3).png'],
                ['name' => 'Crello', 'img' => 'assets/images/ahrefs 2 (4).png'],
                ['name' => 'Serpstat', 'img' => 'assets/images/ahrefs 2 (5).png'],
                ['name' => 'Ahrefs', 'img' => 'assets/images/ahrefs 2.png'],
                ['name' => 'Semrush', 'img' => 'assets/images/ahrefs 2 (1).png'],
                ['name' => 'PicMonkey', 'img' => 'assets/images/ahrefs 2 (2).png'],
                ['name' => 'Skillshare', 'img' => 'assets/images/ahrefs 2 (3).png'],
            ];
            foreach ($single_tools as $tool): ?>
                <div class="single-plan-card">
                    <div class="single-plan-logo">
                        <?php if(isset($tool['img'])): ?>
                            <img src="<?= $tool['img'] ?>" alt="<?= $tool['name'] ?>">
                        <?php else: ?>
                            <span><?= $tool['name'] ?></span>
                        <?php endif; ?>
                    </div>
                    <a href="#" class="single-plan-btn">Access</a>
                    <div class="single-plan-price">₹ 1200/m</div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- === SINGLE PRODUCT PLANS SECTION E === -->

     <!-- === TESTING TOOLS SECTION S === -->
    <div class="content-box rounded-top">
        <h3 class="single-plans-title">Testing tools(only for combo & mini user)</h3>
        
        <div class="single-plans-grid">
            <?php 
            $single_tools = [
                ['name' => 'Ahrefs', 'img' => 'assets/images/pexels-who0ne-35581905.jpg'],
                ['name' => 'Semrush', 'img' => 'assets/images/ahrefs 2 (1).png'],
                ['name' => 'PicMonkey', 'img' => 'assets/images/ahrefs 2 (2).png'],
                ['name' => 'Skillshare', 'img' => 'assets/images/ahrefs 2 (3).png'],
                ['name' => 'Crello', 'img' => 'assets/images/ahrefs 2 (4).png'],
                ['name' => 'Serpstat', 'img' => 'assets/images/ahrefs 2 (5).png'],
                ['name' => 'Ahrefs', 'img' => 'assets/images/ahrefs 2.png'],
                ['name' => 'Semrush', 'img' => 'assets/images/ahrefs 2 (1).png'],
                ['name' => 'PicMonkey', 'img' => 'assets/images/ahrefs 2 (2).png'],
                
            ];
            foreach ($single_tools as $tool): ?>
                <div class="single-plan-card">
                    <div class="single-plan-logo">
                        <?php if(isset($tool['img'])): ?>
                            <img src="<?= $tool['img'] ?>" alt="<?= $tool['name'] ?>">
                        <?php else: ?>
                            <span><?= $tool['name'] ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="single-plan-price">₹ 1200/m</div>
                    <a href="#" class="single-plan-btn">Access</a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- === TESTING TOOLS SECTION E === -->

</div>
<!-- === MAIN LAYOUT SECTION E === -->

<!-- === PRODUCT LOGO GRID MODAL SECTION S === -->
<div id="product-modal" class="modal-overlay">
    <div class="modal-container modal-lg">
        <div class="modal-header">
            <h3>Signal Product Plans</h3>
            <button class="modal-close close-modal"><img src="assets/images/Frame.png" alt="Close"></button>
        </div>
        <div class="modal-divider"></div>
        <div class="modal-body">
            <div class="logo-grid">
                <!-- Row 1 -->
                <div class="modal-logo-item"><img src="assets/images/single_product_plans/majestic 1.png" alt="Majestic"></div>
                <div class="modal-logo-item"><img src="assets/images/single_product_plans/serpok 1.png" alt="Serp Ok"></div>
                <div class="modal-logo-item"><img src="assets/images/single_product_plans/serpstat 1.png" alt="Serpstat"></div>
                <div class="modal-logo-item"><img src="assets/images/single_product_plans/semrush 1.png" alt="Semrush"></div>
                <div class="modal-logo-item"><img src="assets/images/single_product_plans/ahrefs 1.png" alt="Ahrefs"></div>
                <div class="modal-logo-item"><img src="assets/images/single_product_plans/picmonkey 1.png" alt="PicMonkey"></div>
                
                <!-- Row 2 -->
                <div class="modal-logo-item"><img src="assets/images/single_product_plans/crello 1.png" alt="Crello"></div>
                <div class="modal-logo-item"><img src="assets/images/single_product_plans/piktochart11 1.png" alt="Piktochart"></div>
                <div class="modal-logo-item"><img src="assets/images/single_product_plans/canva_new 1.png" alt="Canva"></div>
                <div class="modal-logo-item"><img src="assets/images/single_product_plans/grammarly 1.png" alt="Grammarly"></div>
                <div class="modal-logo-item"><img src="assets/images/single_product_plans/woorank 1.png" alt="Woorank"></div>
                
                <!-- Row 3 -->
                <div class="modal-logo-item"><img src="assets/images/single_product_plans/lynda 1.png" alt="Lynda"></div>
                <div class="modal-logo-item"><img src="assets/images/single_product_plans/skillshare 1.png" alt="Skillshare"></div>
                <div class="modal-logo-item"><img src="assets/images/single_product_plans/animoto1 1.png" alt="Animoto"></div>
                <div class="modal-logo-item"><img src="assets/images/single_product_plans/semscoop 1.png" alt="Semscoop"></div>
                <div class="modal-logo-item"><img src="assets/images/single_product_plans/envato 1.png" alt="Envato Elements"></div>
                
                <!-- Row 4 -->
                <div class="modal-logo-item"><img src="assets/images/single_product_plans/spyfu 1.png" alt="SpyFu"></div>
                <div class="modal-logo-item"><img src="assets/images/single_product_plans/moz 1.png" alt="Moz"></div>
                <div class="modal-logo-item"><img src="assets/images/single_product_plans/buzzsumologo 1.png" alt="BuzzSumo"></div>
                <div class="modal-logo-item"><img src="assets/images/single_product_plans/keyword-tool-logo 1.png" alt="Keyword Tool"></div>
                <div class="modal-logo-item"><img src="assets/images/single_product_plans/wordai 1.png" alt="WordAi"></div>
            </div>
        </div>
    </div>
</div>
<!-- === PRODUCT LOGO GRID MODAL SECTION E === -->

<!-- === EXPIRY NOTIFICATION MODAL SECTION S === -->
<div id="expiry-modal" class="modal-overlay">
    <div class="modal-container modal-md">
        <div class="modal-header">
            <h3>Hi Testmme, Don't Forget !!</h3>
            <button class="modal-close close-modal"><img src="assets/images/Frame.png" alt="Close"></button>
        </div>
        <div class="modal-divider"></div>
        <div class="modal-body">
            <p class="text-bold">Your Ahrefs subscription going to expire in next 1 day.</p>
            <p>Note: If you renew today then service will get added after your current expiry date, no days overlap.</p>
            <p class="text-green text-bold">Renew your service today to enjoy uninterrupted service !!</p>
            
            <div class="modal-footer-note">
                <span class="best-wishes">Best Wishes,</span>
                <span class="team-name text-bold">Team Flikover</span>
            </div>
        </div>
    </div>
</div>
<!-- === EXPIRY NOTIFICATION MODAL SECTION E === -->

<!-- === VIDEO INSTRUCTION MODAL SECTION S === -->
<div id="video-modal" class="modal-overlay">
    <div class="modal-container modal-md">
        <div class="modal-header">
            <h3>How to access</h3>
            <button class="modal-close close-modal"><img src="assets/images/Frame.png" alt="Close"></button>
        </div>
        <div class="modal-divider"></div>
        <div class="modal-body">
            <div style="width: 100%; border-radius: 12px; overflow: hidden; position: relative; padding-top: 56.25%;">
                <iframe 
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 0;"
                    src="https://www.youtube.com/embed/dQw4w9WgXcQ" 
                    title="How to access tool from Flikover.com" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>
</div>
<!-- === VIDEO INSTRUCTION MODAL SECTION E === -->

<!-- === PAGE SCRIPTS SECTION S === -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const overlays = document.querySelectorAll('.modal-overlay');
    const closeBtns = document.querySelectorAll('.close-modal');
    const singlePlanBtns = document.querySelectorAll('.single-plan-btn');
    const videoBtns = document.querySelectorAll('.open-video-modal');
    const buyNowBtns = document.querySelectorAll('.buy-now-btn');

    
    const openModal = (id) => {
        const modal = document.getElementById(id);
        if (modal) {
            modal.classList.add('active');
            document.body.style.overflow = 'hidden';
        }
    };

    
    
    // buyNowBtns behavior removed as requested


    
    singlePlanBtns.forEach((btn, index) => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = 'product-modal';
            openModal(targetId);
        });
    });

    
    videoBtns.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            openModal('video-modal');
        });
    });

    
    const notesLink = document.querySelector('.notes-link');
    if (notesLink) {
        notesLink.addEventListener('click', function(e) {
            e.preventDefault();
            openModal('expiry-modal');
        });
    }

    
    const headerBtn = document.getElementById('header-access-btn');
    if (headerBtn) {
        headerBtn.addEventListener('click', function(e) {
            e.preventDefault();
            openModal('video-modal');
        });
    }

    
    const closeAllModals = () => {
        overlays.forEach(modal => modal.classList.remove('active'));
        document.body.style.overflow = 'auto';
    };

    closeBtns.forEach(btn => btn.addEventListener('click', closeAllModals));

    overlays.forEach(overlay => {
        overlay.addEventListener('click', function(e) {
            if (e.target === overlay) closeAllModals();
        });
    });

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') closeAllModals();
    });
});
</script>
<!-- === PAGE SCRIPTS SECTION E === -->

<?php include('includes/footer2.php'); ?>

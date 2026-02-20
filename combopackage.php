<?php
$page_title = 'Combo Package';
$page_css = 'combopackage.css'; 
include 'includes/header.php';
?>

<!-- === MAIN LAYOUT SECTION S === -->
<div class="combo-package-container">
    <!-- === CONTENT BOX SECTION S === -->
    <div class="content-box">
    <div class="combo-header">
            <h1 class="combo-title">Combo Package</h1>
            <p class="combo-subtitle">19 + Testing Tools (without Ahrefs)</p>
            <h2 class="combo-question">How Many Month Access You Want ?</h2>
        </div>

    <!-- === PRICING CARDS SECTION S === -->
    <div class="inner-box">
        <!-- === ACTIVE GRID (1 MONTH) S === -->
        <div id="grid-1-month" class="pricing-deck">
            <!-- === CARD 1 S === -->
            <div class="pricing-card">
                <div class="save-header">You will save:<br>₹ 0</div>
                <div class="card-body">
                    <div class="plan-name">1 Month</div>
                    <a href="#" class="btn-visit">Visit Here</a>
                    <div class="plan-price">₹ 1200 for 30 days</div>
                </div>
            </div>

            <!-- === CARD 1 E === -->

            <!-- === CARD 2 S === -->
            <div class="pricing-card">
                <div class="save-header">You will save:<br>₹ 200</div>
                <div class="card-body">
                    <div class="plan-name">2 Month</div>
                    <a href="#" class="btn-visit">Visit Here</a>
                    <div class="plan-price">₹ 2200 for 60 days</div>
                </div>
            </div>

            <!-- === CARD 2 E === -->

            <!-- === CARD 3 (POPULAR) S === -->
            <div class="pricing-card popular">
                <!-- Badge -->
                <div class="popular-badge-wrap">
                    <img src="<?= $base_url ?>/assets/images/mstpop.png" alt="Most Popular" class="badge-icon">
                </div>

                <div class="save-header">You will save:<br>₹ 500</div>
                <div class="card-body">
                    <div class="plan-name">3 Month</div>
                    <a href="#" class="btn-visit">Visit Here</a>
                    <div class="plan-price">₹ 3100 for 90 days</div>
                </div>
            </div>

            <!-- === CARD 3 (POPULAR) E === -->

            <!-- === CARD 6 S === -->
            <div class="pricing-card">
                <div class="save-header">You will save:<br>₹ 1200</div>
                <div class="card-body">
                    <div class="plan-name">6 Month</div>
                    <a href="#" class="btn-visit">Visit Here</a>
                    <div class="plan-price">₹ 6000 for 180 days</div>
                </div>
            </div>
            <!-- === CARD 6 E === -->
        </div>
        <!-- === ACTIVE GRID (1 MONTH) E === -->

        <!-- === HIDDEN GRID (12 MONTH) S === -->
        <div id="grid-12-month" class="pricing-deck" style="display: none;">

             <!-- === CARD 2 MONTH S === -->
            <div class="pricing-card">
                <div class="save-header">You will save:<br>₹ 200</div>
                <div class="card-body">
                    <div class="plan-name">2 Month</div>
                    <a href="#" class="btn-visit">Visit Here</a>
                    <div class="plan-price">₹ 2200 for 60 days</div>
                </div>
            </div>

            <!-- === CARD 2 MONTH E === -->

            <!-- === CARD 3 MONTH (POPULAR) S === -->
            <div class="pricing-card popular">
                <!-- Badge -->
                <div class="popular-badge-wrap">
                    <img src="<?= $base_url ?>/assets/images/mstpop.png" alt="Most Popular" class="badge-icon">
                </div>

                <div class="save-header">You will save:<br>₹ 500</div>
                <div class="card-body">
                    <div class="plan-name">3 Month</div>
                    <a href="#" class="btn-visit">Visit Here</a>
                    <div class="plan-price">₹ 3100 for 90 days</div>
                </div>
            </div>

            <!-- === CARD 3 MONTH (POPULAR) E === -->

            <!-- === CARD 6 MONTH S === -->
            <div class="pricing-card">
                <div class="save-header">You will save:<br>₹ 1200</div>
                <div class="card-body">
                    <div class="plan-name">6 Month</div>
                    <a href="#" class="btn-visit">Visit Here</a>
                    <div class="plan-price">₹ 6000 for 180 days</div>
                </div>
            </div>

            <!-- === CARD 6 MONTH E === -->

            <!-- === CARD 12 MONTH S === -->
             <div class="pricing-card">
                <div class="popular-badge-wrap">
                    <img src="<?= $base_url ?>/assets/images/most_saving1.png" alt="Most Saving" class="badge-icon">
                </div>
                <div class="save-header">You will save:<br>₹ 5000</div>
                <div class="card-body">
                    <div class="plan-name">12 Month</div>
                    <a href="#" class="btn-visit">Visit Here</a>
                    <div class="plan-price">₹ 25000 for 365 days</div>
                </div>
            </div>
            <!-- === CARD 12 MONTH E === -->
        </div>
        <!-- === HIDDEN GRID (12 MONTH) E === -->

        <div class="bottom-link-wrapper">
            <a href="#" id="link1Month" class="link-12-month" style="display: none;">&lt; For 1 month</a>
            <div style="flex: 1;"></div> <!-- Spacer -->
            <a href="#" id="link12Month" class="link-12-month">For 12 month &gt;</a>
        </div>
    </div>
    <!-- === PRICING CARDS SECTION E === -->
</div>
<!-- === CONTENT BOX SECTION E === -->
</div>
<!-- === MAIN LAYOUT SECTION E === -->

<script>
    const link1Month = document.getElementById('link1Month');
    const link12Month = document.getElementById('link12Month');
    const grid1 = document.getElementById('grid-1-month');
    const grid12 = document.getElementById('grid-12-month');

    link12Month.addEventListener('click', (e) => {
        e.preventDefault();
        // Switch to 12 Month
        grid1.style.display = 'none';
        grid12.style.display = 'flex';
        
        // Hide 12 Month link, Show 1 Month link
        link12Month.style.display = 'none';
        link1Month.style.display = 'inline-block';
    });

    link1Month.addEventListener('click', (e) => {
        e.preventDefault();
        // Switch to 1 Month
        grid1.style.display = 'flex';
        grid12.style.display = 'none';
        
        // Hide 1 Month link, Show 12 Month link
        link1Month.style.display = 'none';
        link12Month.style.display = 'inline-block';
    });
</script>

<?php include 'includes/footer2.php'; ?>
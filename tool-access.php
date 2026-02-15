<?php
$page_title = 'Tool Access';
$page_css = 'tool-access.css';
include('includes/header.php');
?>

<div class="tool-access-container">

    <div class="main-white-container">
        <!-- Horizontal Tool Row -->

        <div class="active-tool-card">
            <div class="tool-logo">
                <img src="assets/images/ahrefs 2.png" alt="Ahrefs">
            </div>

            <div class="tool-info-items">
                <div class="info-group">
                    <span class="info-val">Direct</span>
                    <span class="info-lbl">Access Mode</span>
                </div>

                <div class="info-group">
                    <span class="info-val">Paid</span>
                    <span class="info-lbl">Account Status</span>
                </div>

                <div class="info-group">
                    <span class="info-val">₹2000</span>
                    <span class="info-lbl">Monthly cost</span>
                </div>

                 <div class="info-group">
                    <span class="info-val">22/12/2026</span>
                    <span class="info-lbl">Expiry Date</span>
                </div>
            </div>

            <div class="tool-actions">
                <a href="#" class="renew-button">Renew</a>
               
            </div>

            
        </div>

        <!-- Tool Details Section -->
        <div class="tool-details-content">
            <div class="details-grid">
                <!-- Left Column -->
                <div class="details-col">
                    <h4 class="details-title">Steps to access Ahrefs</h4>
                    <ol class="steps-list">
                        <li>Pay the amount to activate ahrefs service.</li>
                        <li>Click link below to access ahrefs.</li>
                    </ol>
                    
                    <div class="note-section">
                        <h5 class="note-title">Note:</h5>
                        <ul class="simple-list">
                            <li>For bulk domain metric check, use batch analysis in ahrefs.</li>
                        </ul>
                    </div>
                </div>

                <!-- Vertical Divider -->
                <div class="vertical-divider"></div>

                <!-- Right Column -->
                <div class="details-col">
                    <h4 class="details-title">Important things to Note</h4>
                    <ul class="simple-list">
                        <li>Renew subscription before expiry.</li>
                        <li class="important-warning">Flikover not allow you to share account access with any 2nd user (no matter friend, family or office colleague). "One account, one user access". </li>
                        <li class="important-warning">If you share access then account will be automatically block by our system.</li>                        
                    </ul>
                </div>
            </div>

            <!-- Large Access Button -->
            <a href="#" class="large-access-button">
                <span class="main-text">Click here to access Ahrefs</span>
                <span class="sub-text">In semrush, for siteaudit & adding project access "from here"</span>
            </a>

            <!-- Package Access Alert -->
            <div class="package-access-alert">
                You need to buy Package to access Ahrefs
            </div>

            <!-- Plugin Status Alert -->
            <div class="plugin-status-alert">
                <div class="main-msg">Both Flikover Plugins <a href="#">Flikover 1</a> and <a href="#">Flikover 2</a> are not active together.</div>
                <div class="sub-msg">Enable both plugin and then refresh this page to access tool.</div>
            </div>
        </div>
    </div>


</div>

<?php 
include('includes/footer2.php'); 
?>

<?php
$page_title = 'Logout';
// Styles specific to logout page
?>
<link rel="stylesheet" href="assets/css/pages/logout.css">

<?php include('includes/header.php'); ?>

<!-- === MAIN LAYOUT SECTION S === -->
<div class="logout-page-wrapper">
    <!-- === CONTENT CONTAINER SECTION S === -->
    <div class="logout-container">
        <!-- === THANK YOU IMAGE SECTION S === -->
        <img src="assets/images/image.png" alt="Thank You" class="thank-you-image">
        <!-- === THANK YOU IMAGE SECTION E === -->

        <!-- === MESSAGE SECTION S === -->
        <h1>Logout successfully done.</h1>

        <div class="message-text">
            We hope in your digital journey, we able to help you.<br>
            Please share our website <a href="#">Flikover.com</a> with your friends/colleagues.
        </div>
        <!-- === MESSAGE SECTION E === -->

        <!-- === FACEBOOK WIDGET SECTION S === -->
        <div class="fb-widget">
            <div class="fb-content-wrapper">
                <div class="fb-logo-wrapper">
                    <!-- Using the provided image copy.png as the logo inside the widget -->
                    <img src="assets/images/image copy.png" alt="Flikover" class="fb-logo-img">
                </div>
                <div class="fb-details">
                    <a href="#" class="fb-name">Flikover</a>
                    <div class="fb-actions">
                        <button class="fb-follow-btn">
                            <span class="fb-f-icon">f</span> Follow Page
                        </button>
                        <span class="fb-followers">5.9K followers</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- === FACEBOOK WIDGET SECTION E === -->

        <!-- === SUPPORT TEXT SECTION S === -->
        <div class="support-text">
            For support & updates please like our Facebook page
        </div>
        <!-- === SUPPORT TEXT SECTION E === -->

    </div>
    <!-- === CONTENT CONTAINER SECTION E === -->
</div>
<!-- === MAIN LAYOUT SECTION E === -->

<?php include 'includes/footer2.php'; ?>
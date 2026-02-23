<?php
$page_title = 'Payment Successful';
$page_css = 'passed.css';
include('includes/header.php');
?>

<!-- === MAIN LAYOUT SECTION S === -->
<div class="passed-container">
    <div class="passed-card">
        
        <!-- === HEADING SECTION S === -->
        <h1 class="passed-heading">Your payment has been processed successfully.</h1>
        <!-- === HEADING SECTION E === -->

        <!-- === INFO TABLE SECTION S === -->
        <table class="passed-table">
            <tr>
                <td>Payment Method</td>
                <td>PhonePe</td>
            </tr>
            <tr>
                <td>Amount received</td>
                <td>₹ 1200</td>
            </tr>
            <tr>
                <td>Service</td>
                <td>Combo3</td>
            </tr>
        </table>
        <!-- === INFO TABLE SECTION E === -->

        <!-- === SUCCESS NOTE SECTION S === -->
        <div class="passed-note">
            Visit <a href="dashboard.php">dashboard</a> page, Install our two plugins & then access tool.
        </div>
        <!-- === SUCCESS NOTE SECTION E === -->

        <!-- === THANK YOU GRAPHIC SECTION S === -->
        <div class="thanks-graphic">
            <img src="assets/images/thank_you.png" alt="Thank You">
        </div>
        <!-- === THANK YOU GRAPHIC SECTION E === -->

    </div>
</div>
<!-- === MAIN LAYOUT SECTION E === -->

<?php include('includes/footer2.php'); ?>

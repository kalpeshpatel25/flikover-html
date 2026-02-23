<?php
$page_title = 'Request Failed';
$page_css = 'failed.css';
include('includes/header.php');
?>

<!-- === MAIN LAYOUT SECTION S === -->
<div class="failed-container">
    <div class="failed-card">
        
        <!-- === HEADING SECTION S === -->
        <h1 class="failed-heading">We're unable to process your request.</h1>
        <!-- === HEADING SECTION E === -->

        <!-- === INFO TABLE SECTION S === -->
        <table class="failed-table">
            <tr>
                <td>Failure Reason:</td>
                <td>User has not completed transaction.</td>
            </tr>
            <tr>
                <td>Payment Method</td>
                <td>PhonePe</td>
            </tr>
            <tr>
                <td>Amount</td>
                <td>₹ 1000.00</td>
            </tr>
        </table>
        <!-- === INFO TABLE SECTION E === -->

        <!-- === REFUND NOTE SECTION S === -->
        <div class="failed-note">
            If amount debited from your account,<br>
            You will get refund from bank within 3-5 working days.
        </div>
        <!-- === REFUND NOTE SECTION E === -->

        <!-- === SORRY GRAPHIC SECTION S === -->
        <div class="sorry-graphic">
            <img src="assets/images/sorry.png" alt="Sorry!">
        </div>
        <!-- === SORRY GRAPHIC SECTION E === -->

    </div>
</div>
<!-- === MAIN LAYOUT SECTION E === -->

<?php include('includes/footer2.php'); ?>

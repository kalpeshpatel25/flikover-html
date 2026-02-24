<?php
$page_title = 'Email Verified';
$page_css = 'email-verified.css';
include('includes/header1.php');
?>

<div class="verified-container">
    <div class="verified-card">
        <!-- 1. Success Message Banner -->
        <div class="success-banner">
            Email successfully verified
        </div>
        <div class="success-invalid">
           Invalid or Expired link
        </div>

        <!-- 2. Action Button -->
        <div class="verified-action">
            <a href="dashboard.php" class="btn btn-tertiary btn-dashboard">Open dashboard</a>
        </div>
    </div>
</div>

<?php include('includes/footer2.php'); ?>

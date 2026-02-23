<?php
$page_title = 'Reset Password';
$page_css = 'reset-password.css';
include('includes/header.php'); // Used solely for CSS imports
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<!-- === MAIN LAYOUT SECTION S === -->
<div class="reset-wrapper">
    <!-- === RESET FORM SECTION S === -->
    <div class="reset-form-container">
        <!-- === TITLE SECTION S === -->
        <h1 class="reset-title">Reset Password</h1>
        <!-- === TITLE SECTION E === -->

        <!-- === FORM INPUTS SECTION S === -->
        <form action="" method="post" class="reset-form">
            <div class="form-group">
                <label for="identifier">Mobile or Email</label>
                <input type="text" id="identifier" class="form-control" name="identifier" placeholder="Enter Mobile or Email" required>
            </div>

            <!-- === CAPTCHA SECTION S === -->
            <div class="captcha-container">
                <div class="captcha-image">
                    <!-- Example Captcha content -->
                    <img src="https://via.placeholder.com/150x50/eee/333?text=646280" alt="Captcha">
                </div>
                <a href="#" class="captcha-refresh" title="Refresh Captcha">
                    <i class="fas fa-sync-alt fa-flip-horizontal"></i>
                </a>
            </div>
            <!-- === CAPTCHA SECTION E === -->

            <div class="form-group">
                <label for="security_code">Security Code</label>
                <input type="text" id="security_code" class="form-control" name="security_code" placeholder="Security Code" required>
            </div>

            <button type="submit" class="btn-reset">Reset</button>
        </form>
        <!-- === FORM INPUTS SECTION E === -->

        <!-- === FOOTER SECTION S === -->
        <?php include('includes/footer3.php'); ?>
        <!-- === FOOTER SECTION E === -->
    </div>
    <!-- === RESET FORM SECTION E === -->
</div>
<!-- === MAIN LAYOUT SECTION E === -->

</main>
</body>
</html>

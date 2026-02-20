<?php
$page_title = 'Flikover Sign Up';
include('includes/header.php'); // Used solely for CSS imports
?>

<link rel="stylesheet" href="assets/css/pages/signup.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<!-- === MAIN LAYOUT SECTION S === -->
<div class="signup-wrapper">
    <!-- === SIGNUP FORM CONTAINER SECTION S === -->
    <div class="signup-form-container">
        <!-- === SIGNUP TITLE SECTION S === -->
        <h1 class="signup-title">Flikover Sign Up</h1>
        <!-- === SIGNUP TITLE SECTION E === -->

        <!-- === SIGNUP FORM SECTION S === -->
        <form action="" method="post" class="signup-form">
            <div class="form-row">
                <div class="form-group">
                    <input type="text" class="form-control" name="first_name" placeholder="First Name" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
                </div>
            </div>

            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email Address" required>
            </div>

            <div class="form-group">
                <input type="tel" class="form-control" name="mobile" placeholder="Mobile Number (10 Digit)" pattern="[0-9]{10}" required>
            </div>
            
            <span class="help-text">Password will be sent to above number.</span>

            <!-- === CAPTCHA SECTION S === -->
            <div class="captcha-container">
                <div class="captcha-image">
                    <img src="https://via.placeholder.com/150x50/eee/333?text=355591" alt="Captcha">
                </div>
                <a href="#" class="captcha-refresh" title="Refresh Captcha">
                    <i class="fas fa-sync-alt fa-flip-horizontal"></i>
                </a>
            </div>
            <!-- === CAPTCHA SECTION E === -->

            <div class="form-group">
                <input type="text" class="form-control" name="security_code" placeholder="Security Code" required>
            </div>

            <button type="submit" class="btn-signup">Sign Up</button>
        </form>
        <!-- === SIGNUP FORM SECTION E === -->

        <!-- === FOOTER SECTION S === -->
        <?php include('includes/footer3.php'); ?>
        <!-- === FOOTER SECTION E === -->
    </div>
    <!-- === SIGNUP FORM CONTAINER SECTION E === -->
</div>
<!-- === MAIN LAYOUT SECTION E === -->
</body>
</html>

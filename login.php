<?php
$page_title = 'Flikover Login';
$page_css = 'login.css';
include('includes/header.php');
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<!-- === MAIN LAYOUT SECTION S === -->
<div class="login-wrapper">
    <!-- === LOGIN FORM SECTION S === -->
    <div class="login-form">
        <!-- === TITLE SECTION S === -->
        <h1 class="login-title">Flikover Login</h1>
        <!-- === TITLE SECTION E === -->

        <!-- === FORM INPUTS SECTION S === -->
        <form action="" method="post">
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" id="email" placeholder="testtest@gmail.com" name="email">
            </div>

            <div class="form-group">
                <label for="passwordField">Password</label>
                <div class="password-input-wrapper">
                    <input type="password" class="form-control" placeholder="Password" name="password" id="passwordField">
                    <span class="password-toggle" onclick="togglePassword()">
                        <i class="fa fa-eye"></i>
                    </span>
                </div>
            </div>

            <div class="forgot-password">
                <a href="reset-password.php">Forgot password?</a>
            </div>

            <button type="submit" class="btn-login">Login</button>
        </form>
        <!-- === FORM INPUTS SECTION E === -->

        <!-- === INFO TEXT SECTION S === -->
        <div class="info-text">
            <span class="text-green">The only original website <a href="#">Flikover.com</a> which everyone use.</span>
            <span class="text-warning">Be aware from other fake/spam websites which using our design/name !!</span>
        </div>
        <!-- === INFO TEXT SECTION E === -->

        <!-- === FOOTER SECTION S === -->
        <?php include('includes/footer3.php'); ?>
        <!-- === FOOTER SECTION E === -->

    </div>
    <!-- === LOGIN FORM SECTION E === -->
</div>
<!-- === MAIN LAYOUT SECTION E === -->

<!-- === PAGE SCRIPTS SECTION S === -->
<script>
    function togglePassword() {
        var x = document.getElementById("passwordField");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
<!-- === PAGE SCRIPTS SECTION E === -->

</main>
</body>
</html>

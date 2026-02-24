<?php
$page_title = 'Email Verification';
$page_css = 'verify-email.css';
include('includes/header.php');
?>

<!-- === MAIN LAYOUT SECTION S === -->
<div class="verify-email-container">
    <div class="verify-email-card">
        
        <!-- === VERIFICATION HEADER S === -->
        <div class="verify-header">
            <h1 class="verify-title">Hello Rahul, Please verify your email.</h1>
        </div>
        <!-- === VERIFICATION HEADER E === -->

        <!-- === VERIFICATION BODY S === -->
        <div class="verify-body">
            
            <!-- 1. REQUEST STATE (Initial Form) -->
            <div id="request-state" class="verify-state">
                <div class="verify-grid-layout">
                    <!-- Email Input Block -->
                    <div class="grid-item item-input">
                        <div class="email-input-wrapper">
                            <input type="email" class="email-input" id="email-field" placeholder="Email" value="testtest@gmail.com">
                            <button type="button" class="btn btn-tertiary btn-edit">Edit</button>
                        </div>
                    </div>

                    <!-- Support Section -->
                    <div class="grid-item item-support">
                        <div class="support-section">
                            <p class="support-text">For any support:</p>
                            <a href="contactus.php" class="btn btn-tertiary btn-support">Contact us</a>
                        </div>
                    </div>

                    <!-- Verify Button -->
                    <div class="grid-item item-action">
                        <div class="verify-action">
                            <button type="button" class="btn btn-tertiary btn-verify" id="btn-verify-trigger">Verify Email</button>
                        </div>
                    </div>

                    <!-- Note -->
                    <div class="grid-item item-note">
                        <div class="verify-note-box">
                            <p class="note-text">
                                <strong>NOTE:</strong> Your Login ID will be the above email.<br class="desktop-br"> 
                                If you change it, will also change your login id.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2. SUCCESS STATE (Link Sent) -->
            <div id="success-state" class="verify-state" style="display: none;">
                <div class="verify-grid-layout">
                    <div class="grid-item item-success-content">
                        <h2 class="success-msg">Activation link sent to <span id="display-email">testtest@gmail.com</span><br>(check spam/inbox)</h2>
                        <p class="wait-text">Please wait max 1 minute for confirmation email.</p>
                        
                        <div class="success-actions">
                            <button type="button" class="btn btn-tertiary btn-resend">Resend code</button>
                            <button type="button" class="btn btn-secondary btn-edit-back">Edit email</button>
                        </div>
                        
                        <p class="spam-note">Note: If email is in spam then mark as "not spam" for future communication.</p>
                    </div>

                    <!-- Support Section -->
                    <div class="grid-item item-support">
                        <div class="support-section">
                            <p class="support-text">For any support:</p>
                            <a href="contactus.php" class="btn btn-tertiary btn-support">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- === VERIFICATION BODY E === -->

    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const btnVerify = document.getElementById('btn-verify-trigger');
    const requestState = document.getElementById('request-state');
    const successState = document.getElementById('success-state');
    const emailField = document.getElementById('email-field');
    const displayEmail = document.getElementById('display-email');
    const btnEditBack = document.querySelector('.btn-edit-back');

    if(btnVerify) {
        btnVerify.addEventListener('click', function() {
            // Update display email
            displayEmail.textContent = emailField.value;
            // Toggle states
            requestState.style.display = 'none';
            successState.style.display = 'block';
        });
    }

    if(btnEditBack) {
        btnEditBack.addEventListener('click', function() {
            successState.style.display = 'none';
            requestState.style.display = 'block';
        });
    }
});
</script>
<!-- === MAIN LAYOUT SECTION E === -->

<?php include('includes/footer2.php'); ?>

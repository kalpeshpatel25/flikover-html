<?php
$page_title = 'Change Details';
$page_css = 'changeDetails.css'; // Uses the new stylesheet
include('includes/header.php');
?>

<div class="profile-container">
    <!-- Sidebar -->
    <div class="profile-sidebar">
        <div class="sidebar-menu-group">
            <a href="profile.php" class="sidebar-link">Profile</a>
            <a href="changePassword.php" class="sidebar-link">Change Password</a>
            <a href="#" class="sidebar-link active">Change Details</a>
        </div>
    </div>

    <!-- Main Form Area -->
    <div class="profile-form-area">
        <form action="" method="POST" class="change-details-grid">
            <!-- Section 1 Header -->
            <div class="section-title">Change Phone Number and Email</div>

            <!-- Row 1: Phone & Email -->
            <div class="form-group span-2">
                <label for="new_phone">New Phone Number</label>
                <input type="tel" id="new_phone" name="new_phone" placeholder="Enter New Phone Number">
            </div>
            <div class="form-group span-2">
                <label for="new_email">New Email</label>
                <input type="email" id="new_email" name="new_email" placeholder="Enter New number"> <!-- Text per screenshot -->
            </div>

            <!-- Section 2 Header -->
            <div class="section-title">Change Address</div>

            <!-- Row 2: Company & Address -->
            <div class="form-group span-2">
                <label for="company_name">Company Name</label>
                <input type="text" id="company_name" name="company_name" placeholder="Enter Company Name">
            </div>
            <div class="form-group span-2">
                <label for="address">Address</label>
                <input type="text" id="address" name="address" placeholder="Enter New number"> <!-- Text per screenshot -->
            </div>

            <!-- Row 3: 4 Columns -->
            <div class="form-group span-1">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="Enter your State">
            </div>
            <div class="form-group span-1">
                <label for="city">City</label>
                <input type="text" id="city" name="city" placeholder="Enter city">
            </div>
            <div class="form-group span-1">
                <label for="pincode">Pincode</label>
                <input type="text" id="pincode" name="pincode" placeholder="Enter pincode">
            </div>
            <div class="form-group span-1">
                <label for="country">Country</label>
                <input type="text" id="country" name="country" placeholder="Enter Country">
            </div>

            <!-- Submit Button (Spans 2 columns ~ 442px) -->
            <button type="submit" class="submit-btn span-2" style="border-radius: 30px; width: 100%;">Submit</button>
        </form>
    </div>
</div>

<!-- Password Modal -->
<div id="passwordModal" class="custom-modal">
    <div class="modal-content">
        <span class="close-modal">&times;</span>
        <h2>Enter Password to change Details</h2>
        <div class="form-group">
            <label for="confirm_password">New password</label>
            <input type="password" id="confirm_password" placeholder="Enter new password">
        </div>
        <button type="button" class="submit-modal-btn">Submit</button>
    </div>
</div>

<script>
    // Get modal elements
    const modal = document.getElementById('passwordModal');
    const form = document.querySelector('.change-details-grid');
    const closeBtn = document.querySelector('.close-modal');
    const modalSubmitBtn = document.querySelector('.submit-modal-btn');

    // Show modal on form submit
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        modal.style.display = 'flex';
    });

    // Close modal
    closeBtn.addEventListener('click', function() {
        modal.style.display = 'none';
    });

    // Close on outside click
    window.addEventListener('click', function(e) {
        if (e.target == modal) {
            modal.style.display = 'none';
        }
    });

    // Handle Modal Submit
    modalSubmitBtn.addEventListener('click', function() {
        // Here you would handle the password verification logic
        // For now, we just simulate submission or close
        alert('Details Submitted!');
        modal.style.display = 'none';
        // HTMLFormElement.prototype.submit.call(form); // Uncomment to submit real form
    });
</script>

<?php include('includes/footer2.php'); ?>
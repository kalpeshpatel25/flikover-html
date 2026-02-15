<?php
$page_title = 'Profile';
$page_css = 'profile.css';
include('includes/header.php');
?>

<div class="profile-container">
    <div class="profile-content">
        <!-- Sidebar -->
        <div class="profile-sidebar">
            <div class="sidebar-menu-group">
                <a href="#" class="sidebar-link active">Profile</a>
                <a href="changePassword.php" class="sidebar-link">Change Password</a>
                <a href="changeDetails.php" class="sidebar-link">Change Details</a>
            </div>
        </div>

        <!-- Main Form Area -->
        <div class="profile-form-area">
            <form action="" method="POST" class="profile-form-grid">
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" id="first_name" name="first_name" placeholder="Enter First Name">
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" id="last_name" name="last_name" placeholder="Enter Last Name">
                </div>

                <div class="form-group">
                    <label for="mobile_number">Mobile Number</label>
                    <input type="tel" id="mobile_number" name="mobile_number" value="+91 999 999 9999" placeholder="Enter Mobile Number" readonly>
                </div>
                <div class="form-group">
                    <label for="email_address">Email Address</label>
                    <input type="email" id="email_address" name="email_address" value="abc@email.com" placeholder="Enter Email Address" readonly>
                </div>

                <button type="submit" class="save-btn">Save</button>
            </form>
        </div>
    </div>
</div>

<?php include('includes/footer2.php'); ?>

<?php
$page_title = 'Change Password';
$page_css = 'changePassword.css';
include('includes/header.php');
?>

<div class="profile-container">
    <div class="profile-content">
        <!-- Sidebar -->
        <div class="profile-sidebar">
            <div class="sidebar-menu-group">
                <a href="profile.php" class="sidebar-link">Profile</a>
                <a href="#" class="sidebar-link active">Change Password</a>
                <a href="changeDetails.php" class="sidebar-link">Change Details</a>
            </div>
        </div>

        <!-- Main Form Area -->
        <div class="profile-form-area">
            <form action="" method="POST" class="profile-form-grid">
                <!-- Current Password -->
                <div class="form-group full-width">
                    <label for="current_password">Current Password</label>
                    <input type="password" id="current_password" name="current_password" placeholder="Enter last password">
                </div>

                <div class="form-group">
                    <label for="new_password">New password</label>
                    <input type="password" id="new_password" name="new_password" placeholder="Enter new password">
                </div>

                <div class="form-group">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" id="confirm_password" name="confirm_password" placeholder="Enter new password">
                </div>

                <button type="submit" class="save-btn">Change Password</button>
            </form>
        </div>
    </div>
</div>

<?php include('includes/footer2.php'); ?>
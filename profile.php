<?php
$page_title = 'Profile';
// Include all necessary CSS files to support the merged layout and forms
?>
<link rel="stylesheet" href="assets/css/pages/profile.css">

<?php
include('includes/header.php');
?>

<!-- === MAIN LAYOUT SECTION S === -->
<div class="profile-container">
    <div class="profile-content">
        <!-- === SIDEBAR SECTION S === -->
        <div class="profile-sidebar">
            <div class="sidebar-menu-group">
                <a href="javascript:void(0)" class="sidebar-link active" onclick="showTab('profile', this)">Profile</a>
                <a href="javascript:void(0)" class="sidebar-link" onclick="showTab('password', this)">Change Password</a>
                <a href="javascript:void(0)" class="sidebar-link" onclick="requestDetailsAccess(this)">Change Details</a>
                <a href="javascript:void(0)" class="sidebar-link" onclick="showTab('address', this)">Change Address</a>
            </div>
        </div>
        <!-- === SIDEBAR SECTION E === -->

        <!-- === MAIN FORM AREA SECTION S === -->
        <div class="profile-form-area">
            
            <!-- === TAB 1: PROFILE SECTION S === -->
            <div id="tab-profile" class="tab-content">
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
                        <input type="tel" id="mobile_number" name="mobile_number" placeholder="Enter Mobile Number">
                    </div>
                    <div class="form-group">
                        <label for="email_address">Email Address</label>
                        <input type="email" id="email_address" name="email_address" placeholder="Enter Email Address">
                    </div>

                    <button type="submit" class="save-btn">Save</button>
                </form>
            </div>
            <!-- === TAB 1: PROFILE SECTION E === -->

            <!-- === TAB 2: CHANGE PASSWORD SECTION S === -->
            <div id="tab-password" class="tab-content" style="display:none;">
                <form action="" method="POST" class="profile-form-grid">
                    <!-- Current Password -->
                    <div class="form-group full-width" style="grid-column: 1 / -1;">
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
            <!-- === TAB 2: CHANGE PASSWORD SECTION E === -->

            <!-- === TAB 3: CHANGE DETAILS SECTION S === -->
            <div id="tab-details" class="tab-content" style="display:none;">
                <form action="" method="POST" class="change-details-grid">
                    <!-- Section 1 Header -->
                    <!-- <div class="section-title">Change Phone Number and Email</div> -->

                    <!-- Row 1: Phone & Email -->
                    <div class="form-group span-2">
                        <label for="new_phone">New Phone Number</label>
                        <input type="tel" id="new_phone" name="new_phone" placeholder="Enter New Phone Number">
                    </div>
                    <div class="form-group span-2">
                        <label for="new_email">New Email</label>
                        <input type="email" id="new_email" name="new_email" placeholder="Enter New number"> 
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="submit-btn span-2">Submit</button>
                </form>
            </div>
            <!-- === TAB 3: CHANGE DETAILS SECTION E === -->

            <!-- === TAB 4: CHANGE ADDRESS SECTION S === -->
            <div id="tab-address" class="tab-content" style="display:none;">
                <form action="" method="POST" class="change-details-grid">
                    <!-- Section Header -->
                    <!-- <div class="section-title">Change Address</div> -->

                    <!-- Row 1: Company & Address -->
                    <div class="form-group span-2">
                        <label for="company_name">Company Name</label>
                        <input type="text" id="company_name" name="company_name" placeholder="Enter Company Name">
                    </div>
                    <div class="form-group span-2">
                        <label for="address">Address</label>
                        <input type="text" id="address" name="address" placeholder="Enter New number">
                    </div>

                    <!-- Row 2: 4 Columns -->
                    <!-- Note: In mobile profile.css, span-1 becomes full width -->
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

                    <!-- Submit Button -->
                    <button type="submit" class="submit-btn span-2">Submit</button>
                </form>
            </div>
            <!-- === TAB 4: CHANGE ADDRESS SECTION E === -->

        </div>
        <!-- === MAIN FORM AREA SECTION E === -->
    </div>
</div>
<!-- === MAIN LAYOUT SECTION E === -->

<!-- === PASSWORD MODAL SECTION S === -->
<div id="passwordModal" class="custom-modal">
    <div class="modal-content">
        <span class="close-modal">&times;</span>
        <h2>Enter Password to change Details</h2>
        <div class="form-group">
            <label for="modal_confirm_password">New password</label>
            <input type="password" id="modal_confirm_password" placeholder="Enter new password">
        </div>
        <button type="button" class="submit-modal-btn">Submit</button>
    </div>
</div>
<!-- === PASSWORD MODAL SECTION E === -->

<!-- === PAGE SCRIPTS SECTION S === -->
<script>
    // Tab Functionality
    function showTab(tabName, element) {
        // Hide all tabs
        document.querySelectorAll('.tab-content').forEach(el => el.style.display = 'none');
        // Show target tab
        const target = document.getElementById('tab-' + tabName);
        if(target) target.style.display = 'block';
        
        // Update Sidebar Active State
        document.querySelectorAll('.sidebar-link').forEach(el => el.classList.remove('active'));
        if(element) element.classList.add('active');
    }

    let pendingDetailsLink = null;

    function requestDetailsAccess(element) {
        // Trigger Gatekeeper Modal
        const modal = document.getElementById('passwordModal');
        modal.style.display = 'flex';
        pendingDetailsLink = element;
    }

    // Modal Elements
    const modal = document.getElementById('passwordModal');
    const closeBtn = document.querySelector('.close-modal');
    const modalSubmitBtn = document.querySelector('.submit-modal-btn');
    const passwordInput = document.getElementById('modal_confirm_password');

    // Close modal
    if(closeBtn) {
        closeBtn.addEventListener('click', function() {
            modal.style.display = 'none';
        });
    }

    // Close on outside click
    window.addEventListener('click', function(e) {
        if (e.target == modal) {
            modal.style.display = 'none';
        }
    });

    // Handle Modal Submit (Access Gatekeeper)
    if(modalSubmitBtn) {
        modalSubmitBtn.addEventListener('click', function() {
            if(passwordInput.value.trim() !== '') {
                // Mock Success
                modal.style.display = 'none';
                showTab('details', pendingDetailsLink);
                passwordInput.value = ''; // Clear input
            } else {
                alert('Please enter password to access details.');
            }
        });
    }
</script>
<!-- === PAGE SCRIPTS SECTION E === -->

<?php include('includes/footer2.php'); ?>

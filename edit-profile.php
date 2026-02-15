<?php $page_title = 'Edit Profile - Flikover'; $page_css = 'edit-profile.css'; include '../includes/header2.php'; ?>
   
<!-- ==== EDIT PROFILE SECTION S ==== -->
<main class="edit-profile-container">
    <div class="profile-card">
          <!-- ==== EDIT PROFILE SIDEBAR S ==== -->

        <!-- Sidebar Navigation -->
        <aside class="profile-sidebar">
            <nav class="sidebar-nav">
                <a href="#" class="nav-item active" data-target="section-profile">Profile</a>
                <a href="#" class="nav-item" data-target="section-password">Change Password</a>
                <a href="#" class="nav-item" data-target="section-details">Change Details</a>
            </nav>
</aside>
  <!-- ==== EDIT PROFILE SIDEBAR E ==== -->

  <!-- ==== EDIT PROFILE CONTENT S ==== -->
        <section class="profile-content">
              <!-- ==== EDIT PROFILE CONTENT S ==== -->
            <div id="section-profile" class="profile-section">
                <h2 class="form-title" style="margin-bottom: 24px; font-size: 20px; font-weight: 600;">Profile Details</h2>
                <form action="#" method="POST">
                    <div class="form-grid">
                    
                        <div class="form-group">
                            <label for="first_name" class="form-label">First Name</label>
                            <input type="text" id="first_name" name="first_name" class="form-input" placeholder="Enter First Name" value="">
                        </div>

                      
                        <div class="form-group">
                            <label for="last_name" class="form-label">Last Name</label>
                            <input type="text" id="last_name" name="last_name" class="form-input" placeholder="Enter Last Name" value="">
                        </div>

                        <div class="form-group">
                            <label for="mobile_number" class="form-label">Mobile Number</label>
                            <input type="tel" id="mobile_number" name="mobile_number" class="form-input read-only" placeholder="+91 999 999 9999" >
                        </div>

                        <div class="form-group">
                            <label for="email_address" class="form-label">Email Address</label>
                            <input type="email" id="email_address" name="email_address" class="form-input read-only" placeholder="abc@email.com" >
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn-save">Save</button>
                    </div>
                </form>
            </div>
  <!-- ==== EDIT PROFILE CONTENT E ==== -->

  <!-- ==== EDIT PROFILE CHANGE PASSWORD S ==== -->

            <div id="section-password" class="profile-section" style="display: none;">
                <h2 class="form-title" style="margin-bottom: 24px; font-size: 20px; font-weight: 600;">Change Password</h2>
                
                <form action="#" method="POST">
                    <div class="form-group" style="margin-bottom: 32px;">
                        <label for="current_password" class="form-label">Current Password</label>
                        <input type="password" id="current_password" name="current_password" class="form-input" placeholder="Enter last password">
                    </div>

                    <div class="form-grid">
                        <div class="form-group">
                            <label for="new_password" class="form-label">New password</label>
                            <input type="password" id="new_password" name="new_password" class="form-input" placeholder="Enter new password">
                        </div>
                        <div class="form-group">
                            <label for="confirm_password" class="form-label">Confirm Password</label>
                            <input type="password" id="confirm_password" name="confirm_password" class="form-input" placeholder="Enter new password">
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn-save">Change Password</button>
                    </div>
                </form>
            </div>
              <!-- ==== EDIT PROFILE CHANGE PASSWORD E ==== -->

              <!-- ==== EDIT PROFILE CHANGE DETAILS S ==== -->
            <div id="section-details" class="profile-section" style="display: none;">
                <form action="#" method="POST">
                    
                    <div class="form-section-title">Change Phone Number and Email</div>
                    
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="new_phone" class="form-label">New Phone Number</label>
                            <input type="tel" id="new_phone" name="new_phone" class="form-input" placeholder="Enter New Phone Number">
                        </div>

                        <div class="form-group">
                            <label for="new_email" class="form-label">New Email</label>
                            <input type="email" id="new_email" name="new_email" class="form-input" placeholder="Enter New number"> <!-- Kept placeholder from screenshot -->
                        </div>
                    </div>

                    <div class="form-section-title" style="margin-top: 32px;">Change Address</div>

                    <div class="form-grid">
                        <div class="form-group">
                            <label for="company_name" class="form-label">Company Name</label>
                            <input type="text" id="company_name" name="company_name" class="form-input" placeholder="Enter Company Name">
                        </div>

                        <div class="form-group">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" id="address" name="address" class="form-input" placeholder="Enter New number"> <!-- Kept placeholder from screenshot -->
                        </div>
                    </div>

                    <div class="grid-4-cols">
                        <div class="form-group">
                            <label for="state" class="form-label">State</label>
                            <input type="text" id="state" name="state" class="form-input" placeholder="Enter your State">
                        </div>

                        <div class="form-group">
                            <label for="city" class="form-label">City</label>
                            <input type="text" id="city" name="city" class="form-input" placeholder="Enter city">
                        </div>
                        <div class="form-group">
                            <label for="pincode" class="form-label">Pincode</label>
                            <input type="text" id="pincode" name="pincode" class="form-input" placeholder="Enter pincode">
                        </div>
                        <div class="form-group">
                            <label for="country" class="form-label">Country</label>
                            <input type="text" id="country" name="country" class="form-input" placeholder="Enter Country">
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn-save">Submit</button>
                    </div>
                </form>
            </div>
  <!-- ==== EDIT PROFILE CHANGE DETAILS E ==== -->

        </section>
    </div>
</main>
  <!-- ==== EDIT PROFILE PAGE E ==== -->
  
  <!-- ==== PASSWORD MODAL SYSTEM S ==== -->
  <div id="password-modal" class="modal-overlay" style="display: none;">
      <div class="modal-content">
          <h3 class="modal-title">Enter Password to change Details</h3>
          <form id="verify-password-form">
              <div class="form-group">
                  <label for="verify_password" class="form-label" style="font-size: 14px; color: #111; font-weight: 700;">New password</label>
                  <input type="password" id="verify_password" class="form-input" placeholder="Enter new password" required>
              </div>
              <button type="submit" class="btn-submit-modal">Submit</button>
          </form>
      </div>
  </div>
  <!-- ==== PASSWORD MODAL SYSTEM E ==== -->

<script>
document.addEventListener('DOMContentLoaded', function() {
    const tabs = document.querySelectorAll('.nav-item');
    const sections = document.querySelectorAll('.profile-section');
    const passwordModal = document.getElementById('password-modal');
    const verifyPasswordForm = document.getElementById('verify-password-form');
    let detailsUnlocked = false;

    tabs.forEach(tab => {
        tab.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('data-target');
            
            // Check if user is trying to access 'Change Details'
            if (targetId === 'section-details') {
                if (!detailsUnlocked) {
                    // Show modal and prevent switching tab until unlocked
                    passwordModal.style.display = 'flex';
                    // Store the intended tab to switch to after success? 
                    // For now, we just show modal. If they cancel, they stay on current tab.
                    return; 
                }
            }
            
            // If not details section OR if already unlocked, switch tab
            switchTab(this, targetId);
        });
    });

    // Handle Password Submission
    verifyPasswordForm.addEventListener('submit', function(e) {
        e.preventDefault();
        const password = document.getElementById('verify_password').value;
        
        if (password.trim() !== "") {
            // Simulate successful verification
            detailsUnlocked = true;
            passwordModal.style.display = 'none';
            document.getElementById('verify_password').value = ''; // Clear input
            
            // Switch to the 'Change Details' tab automatically
            const detailsTab = document.querySelector('.nav-item[data-target="section-details"]');
            if (detailsTab) {
                switchTab(detailsTab, 'section-details');
            }
        }
    });

    // Optional: Close modal if clicking outside (background)
    passwordModal.addEventListener('click', function(e) {
        if (e.target === passwordModal) {
            passwordModal.style.display = 'none';
        }
    });

    function switchTab(clickedTab, targetId) {
        // Remove active class from all tabs
        tabs.forEach(t => t.classList.remove('active'));
        // Add active class to clicked tab
        clickedTab.classList.add('active');

        // Hide all sections
        sections.forEach(s => s.style.display = 'none');
        // Show target section
        const targetSection = document.getElementById(targetId);
        if (targetSection) {
            targetSection.style.display = 'block';
        }
    }
});
</script>

<?php include '../includes/footer2.php'; ?>

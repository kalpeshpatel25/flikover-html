<?php
// Default values
$page_title = $page_title ?? 'Flikover';
$page_description = $page_description ?? 'Flikover platform';
$page_css = $page_css ?? null;

// Base URL
$base_url = '/flikover-html'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- === META TAGS S === -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($page_title); ?></title>
  <meta name="description" content="<?= htmlspecialchars($page_description); ?>">
  <!-- === META TAGS E === -->

  <!-- === FONTS S === -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  <!-- === FONTS E === -->

  <!-- === SLICK SLIDER S === -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
  <!-- === SLICK SLIDER E === -->

  <!-- === CSS STYLESHEETS S === -->
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/tokens.css">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/layout.css?v=<?= time() ?>">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/global.css">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/background.css">
  <?php if ($page_css): ?>
    <link rel="stylesheet" href="<?= $base_url ?>/assets/css/pages/<?= htmlspecialchars($page_css); ?>?v=<?= time() ?>">
  <?php endif; ?>
  <!-- === CSS STYLESHEETS E === -->
</head>

<body>

<!-- === SITE HEADER S === -->
<header class="site-header-2">
  <div class="header-content">
    <input type="checkbox" id="mobile-nav-toggle" class="hidden-toggle">
    <label for="mobile-nav-toggle" class="nav-backdrop"></label>
    
    <!-- === LOGO SECTION S === -->
    <div class="header-left">
      <a href="<?= $base_url ?>/home.php" class="site-logo">
        <img src="<?= $base_url ?>/assets/images/logo_new 1.png" alt="Flikover" width="160">
      </a>
    </div>
    <!-- === LOGO SECTION E === -->

    <!-- === NAVIGATION SECTION S === -->
    <nav class="header-nav">
      <label for="mobile-nav-toggle" class="drawer-close" aria-label="Close Navigation">&times;</label>
      
      <?php $current_page = basename($_SERVER['PHP_SELF']); ?>
      
      <a href="dashboard.php" class="nav-link <?= $current_page == 'dashboard.php' ? 'active' : '' ?>">Dashboard</a>
      <a href="combomini.php" class="nav-link" id="header-access-btn">Access</a>
      <a href="tool-access.php" class="nav-link <?= $current_page == 'tool-access.php' ? 'active' : '' ?>">Tool</a>
      <a href="statement.php" class="nav-link <?= $current_page == 'statement.php' ? 'active' : '' ?>">Statement</a>
      <a href="bank-statement.php" class="nav-link <?= $current_page == 'bank-statement.php' ? 'active' : '' ?>">Bank Statement</a>
      <a href="profile.php" class="nav-link <?= $current_page == 'profile.php' ? 'active' : '' ?>">Edit Profile</a>
      <a href="contactus.php" class="nav-link <?= $current_page == 'contactus.php' ? 'active' : '' ?>">Contact Us</a>
      <a href="logout.php" class="nav-link <?= $current_page == 'logout.php' ? 'active' : '' ?>">Logout</a>
    </nav>
    <!-- === NAVIGATION SECTION E === -->

    <!-- === MOBILE TOGGLE S === -->
    <label for="mobile-nav-toggle" class="mobile-toggle" aria-label="Toggle Navigation">
      <span></span>
      <span></span>
      <span></span>
    </label>
    <!-- === MOBILE TOGGLE E === -->

    <!-- === LOGOUT SECTION S === -->
    <div class="header-right">
      <a href="#" class="logout-btn">Logout</a>
    </div>
    <!-- === LOGOUT SECTION E === -->

  </div>
</header>
<!-- === SITE HEADER E === -->
<main>
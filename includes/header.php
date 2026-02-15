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
  <!-- ==== META TAGS S ==== -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($page_title); ?></title>
  <meta name="description" content="<?= htmlspecialchars($page_description); ?>">
  <!-- ==== META TAGS E ==== -->

  <!-- ==== FONTS S ==== -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  <!-- ==== FONTS E ==== -->

  <!-- ==== Slick Slider S ==== -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
  <!-- ==== Slick Slider E ==== -->

  <!-- ==== CSS STYLESHEETS S ==== -->
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/tokens.css">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/layout.css?v=<?= time() ?>">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/components.css">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/global.css">
  <?php if ($page_css): ?>
    <link rel="stylesheet" href="<?= $base_url ?>/assets/css/pages/<?= htmlspecialchars($page_css); ?>?v=<?= time() ?>">
  <?php endif; ?>
  <!-- ==== CSS STYLESHEETS E ==== -->
</head>

<body>

<!-- ==== SITE HEADER S ==== -->
<header class="site-header-2">
  <div class="header-content">
    
    <!-- Logo Section (Left) -->
    <div class="header-left">
      <a href="<?= $base_url ?>/home1.php" class="site-logo">
        <img src="<?= $base_url ?>/assets/images/logo_new 1.png" alt="Flikover" width="160">
      </a>
    </div>

    <!-- Navigation Section (Center) -->
    <nav class="header-nav">
      <!-- Dedicated Drawer Close -->
      <button class="drawer-close" aria-label="Close Menu">&times;</button>
      
      <a href="dashboard.php" class="nav-link">Dashboard</a>
      <a href="tool-access.php" class="nav-link" id="header-access-btn">Access</a>
      <a href="statement.php" class="nav-link">Statement</a>
      <a href="edit-profile.php" class="nav-link">Edit Profile</a>
      <a href="#" class="nav-link">Contact Us</a>
      <a href="#" class="nav-link">Affiliate</a>
      <a href="#" class="nav-link nav-logout-mobile">Logout</a>
    </nav>

    <!-- Mobile Toggle -->
    <button class="mobile-toggle" aria-label="Toggle Navigation">
      <span></span>
      <span></span>
      <span></span>
    </button>

    <!-- Logout Section (Right) -->
    <div class="header-right">
      <a href="#" class="logout-btn">Logout</a>
    </div>

  </div>
</header>
<!-- ==== SITE HEADER E ==== -->

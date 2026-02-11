<?php
// Default values (safe fallback)
$page_title = $page_title ?? 'Flikover';
$page_description = $page_description ?? 'Flikover platform';
$page_css = $page_css ?? null;

// Base URL for assets (adjust if your folder name changes)
$base_url = '/flikover-html'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- ==== META TAGS S ==== -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- ==== META TAGS E ==== -->
  <title><?= htmlspecialchars($page_title); ?></title>
  <meta name="description" content="<?= htmlspecialchars($page_description); ?>">

  <!-- ==== FONTS S ==== -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  <!-- ==== FONTS E ==== -->

  <!-- ==== CSS STYLESHEETS S ==== -->
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/global.css">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">

 
  <?php if ($page_css): ?>
    <link rel="stylesheet" href="<?= $base_url ?>/assets/css/pages/<?= htmlspecialchars($page_css); ?>">
  <?php endif; ?>
  <!-- ==== CSS STYLESHEETS E ==== -->
</head>

<body>

<!-- ==== SITE HEADER S ==== -->
<header class="site-header-2">
  <div class="container">
   
    <a href="<?= $base_url ?>/pages/home.php" class="site-logo">
      <span class="f-icon">f</span>LIKOVER<sup>TM</sup>
    </a>

   
    <nav class="header-nav">
      <a href="dashboard.php" class="nav-link">Dashboard</a>
      <a href="tool-access.php" class="nav-link" data-toggle="modal" data-target="#accessVideoModal">Access</a>
      <a href="#" class="nav-link">Tools</a>
      <a href="statement.php" class="nav-link">Statement</a>
      <a href="edit-profile.php" class="nav-link">Edit Profile</a>
      <a href="#" class="nav-link">Contact Us</a>
      <a href="#" class="nav-link">Affiliate</a>
    </nav>

    
    <div class="header-actions">
      <a href="#" class="btn btn-outline" style="border-radius: 999px; padding: 6px 20px; font-weight: 500;">Logout</a>
    </div>
  </div>
  <!-- ==== SITE HEADER E ==== -->
</header>

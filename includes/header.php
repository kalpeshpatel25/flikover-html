<?php
$page_title = $page_title ?? 'Flikover';
$page_description = $page_description ?? 'Flikover platform';
$page_css = $page_css ?? null;

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
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/global.css">
  <?php if ($page_css): ?>
    <link rel="stylesheet" href="<?= $base_url ?>/assets/css/pages/<?= htmlspecialchars($page_css); ?>">
  <?php endif; ?>
  <!-- ==== CSS STYLESHEETS E ==== -->
</head>

<body>

<!-- ==== SITE HEADER S ==== -->
<header class="site-header">
  <div class="container">
    
    
    <a href="<?= $base_url ?>/pages/home.php" class="site-logo">
      <span class="f-icon">f</span>LIKOVER<sup>TM</sup>
    </a>

    <div class="header-actions">
      <a href="#" class="nav-link">Contact Us</a>
      <a href="#" class="btn btn-outline">Log In</a>
      <a href="#" class="btn btn-primary">Sign Up</a>
    </div>
    <!-- ==== SITE HEADER E ==== -->

  </div>
</header>

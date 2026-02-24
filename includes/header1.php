<?php
$page_title = $page_title ?? 'Flikover';
$page_description = $page_description ?? 'Flikover platform';
$page_css = $page_css ?? null;

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

  <!-- === jquery S === -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <!-- === jquery E === -->

  <!-- === SLICK SLIDER S === -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
  <!-- === SLICK SLIDER E === -->

  <!-- === CSS STYLESHEETS S === -->
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/tokens.css">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/layout.css?v=<?= time() ?>">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/global.css">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/feedback.css">
  <?php if ($page_css): ?>
    <link rel="stylesheet" href="<?= $base_url ?>/assets/css/pages/<?= htmlspecialchars($page_css); ?>?v=<?= time() ?>">
  <?php endif; ?>
  <!-- === CSS STYLESHEETS E === -->

  <style>
    main {
      padding-top: 98.5625px;
    }
    @media (max-width: 768px) {
      main {
        padding-top: 85.3594px;
      }
    }
    @media (max-width: 480px) {
      main {
        padding-top: 58.3281px;
      }
    }
  </style>
</head>

<body>

<!-- === SITE HEADER S === -->
<header class="site-header">
  <div class="container">
    
    <!-- === LOGO S === -->
    <a href="<?= $base_url ?>/home.php" class="site-logo">
      <img src="<?= $base_url ?>/assets/images/logo_new 1.png" alt="Flikover" width="120" style="height: auto; display: block;">
    </a>
    <!-- === LOGO E === -->

    <!-- === HEADER ACTIONS S === -->
    <div class="header-actions">
      <a href="contactus.php" class="nav-link">Contact Us</a>
      <a href="login.php" class="btn btn-outline">Log In</a>
      <a href="signup.php" class="btn btn-primary">Sign Up</a>
    </div>
    <!-- === HEADER ACTIONS E === -->
    
  </div>
</header>
<!-- === SITE HEADER E === -->
<main>
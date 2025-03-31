<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Varga D. Benedek Ügyvédi Iroda - Átfogó jogi megoldások">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  
  <!-- Favicon links -->
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_template_directory_uri(); ?>/img/favicon/android-chrome-192x192.png">
    <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/favicon/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/img/favicon/mstile-150x150.png">
    <meta name="msapplication-config" content="<?php echo get_template_directory_uri(); ?>/img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
  <!-- Navigation Bar (adapted from your index.html :contentReference[oaicite:4]{index=4}&#8203;:contentReference[oaicite:5]{index=5}) -->
  <nav class="navbar navbar-expand-xl fixed-top">
    <div class="container">
      <a class="navbar-brand" href="https://www.drvb.hu/">
        <img src="<?php echo get_template_directory_uri(); ?>/img/vdb_web_logo_nav.jpg" alt="logo" id="navbar-logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <!-- Close Button -->
        <button type="button" class="btn-close float-end" aria-label="Close" data-bs-toggle="collapse" data-bs-target="#navbarNav"></button>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link px-3 fs-5 text-uppercase" href="https://www.drvb.hu/">Kezdőlap</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-3 fs-5 text-uppercase" href="https://www.drvb.hu/#about">Rólunk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-3 fs-5 text-uppercase" href="https://www.drvb.hu/#services">Szakterületek</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-3 fs-5 text-uppercase" href="https://www.drvb.hu/#contact">Elérhetőség</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-3 fs-5 text-uppercase" href="https://blog.drvb.hu">Blog</a>
          </li>
          <!-- Language Links (adapt if needed) -->
          <li class="nav-item mobile-only">
            <a class="nav-link lang-link px-1 fs-5 text-uppercase" href="https://www.drvb.hu/en/">EN</a>
            <a class="nav-link lang-link px-1 fs-5 text-uppercase" href="https://www.drvb.hu/de/">DE</a>
            <a class="nav-link lang-link px-1 fs-5 text-uppercase" href="https://www.drvb.hu/no/">NO</a>
          </li>
          <li class="nav-item bigger-screen-only">
            <a class="nav-link px-2 fs-5" href="https://www.drvb.hu/en/"><span class="fi fi-gb"></span></a>
          </li>
          <li class="nav-item bigger-screen-only">
            <a class="nav-link px-2 fs-5" href="https://www.drvb.hu/de/"><span class="fi fi-de"></span></a>
          </li>
          <li class="nav-item bigger-screen-only">
            <a class="nav-link px-2 fs-5" href="https://www.drvb.hu/no/"><span class="fi fi-no"></span></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="header-image"></div>
</header>
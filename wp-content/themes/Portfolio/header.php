<?php

/**
 * The header for our theme
 *
 *

 */
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-0XSG6B7149"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-0XSG6B7149');
  </script>

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="icon" href="<?php echo get_stylesheet_directory_uri() . '/src/assets/images/favicon/favicon.png' ?>" type="image/png" sizes="16x16 32x32" />
  <title>Ali Shkeir - Portfolio</title>

  <!--  CSS Files -->
  <link href="<?php echo get_stylesheet_directory_uri() . '/inc/includes/assets/css/aos.css' ?>" rel="stylesheet" />
  <link href="<?php echo get_stylesheet_directory_uri() . '/inc/includes/assets/css/jquery-confirm.min.css' ?>" rel="stylesheet" />
  <link href="<?php echo get_stylesheet_directory_uri() . '/inc/includes/assets/css/bootstrap.min.css' ?>" rel="stylesheet" />
  <link href="<?php echo get_stylesheet_directory_uri() . '/inc/includes/assets/css/icofont.min.css' ?>" rel="stylesheet" />
  <link href="<?php echo get_stylesheet_directory_uri() . '/inc/includes/assets/css/boxicons.min.css' ?>" rel="stylesheet" />
  <link href="<?php echo get_stylesheet_directory_uri() . '/inc/includes/assets/css/font-awesome.min.css' ?>" rel="stylesheet" />
  <!-- Main CSS File -->
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/dist/bundle.css' ?>" />
  <?php wp_head() ?>
  <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-D20WCYZ5ZJ"></script>
</head>

<body class="dark">


  <?php
  get_template_part('template-parts/components/header/header', '', [])
  ?>
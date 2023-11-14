<?php

declare(strict_types=1);

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" sizes="180x180" href="<?= vite_src_static('apple-touch-icon.png'); ?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= vite_src_static('favicon-32x32.png'); ?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= vite_src_static('favicon-16x16.png'); ?>">
  <!--=============== REMIXICONS ICONS ===============-->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body id="top" data-type="<?= IS_TYPE ?>" <?php body_class(); ?> >
<?php if (IS_TYPE_LOCAL)
    get_template_part('./partials/helper-grid') ?>
<div class="wrapper">

  <?php get_template_part('./template-parts/header/global-header') ?>

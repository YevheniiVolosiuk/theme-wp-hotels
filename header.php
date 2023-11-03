<?php

declare(strict_types=1);
$custom_logo_id = get_theme_mod('custom_logo');
$logo = wp_get_attachment_image_src($custom_logo_id, 'full');


?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" sizes="180x180" href="<?= vite_src_static('/apple-touch-icon.png'); ?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= vite_src_static('/favicon-32x32.png'); ?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= vite_src_static('/favicon-16x16.png'); ?>">
  <?php wp_head(); ?>
</head>

<body id="top" data-type="<?= IS_TYPE ?>" <?php body_class(); ?>>
  <?php if (IS_TYPE_LOCAL)
    get_template_part('./partials/helper-grid') ?>
  <div class="wrapper">
    <header class="global-header">
      <div class='global-header__container'>


        <!--Header Logo-->
        <div class='global-header__logo'>
          <?php
          if (has_custom_logo()) {
            echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">';
          } else {
            echo '<h1>' . get_bloginfo('name') . '</h1>';
          }
          ?>
          <a href="/">BankHotel</a>
        </div>

        <!--Header Nav-->
        <div class="global-header__menu global-menu">

          <!--Hamburger Menu Btn -->
          <?php
          get_template_part('./template-parts/components/global-hamburger-menu-btn') ?>

          <nav class="global-menu__body">
            <ul class="global-menu__list">
              <li class="global-menu__item"><a href="" class="global-menu__link">Home</a></li>
              <li class="global-menu__item"><a href="" class="global-menu__link">About</a></li>
              <li class="global-menu__item"><a href="" class="global-menu__link">Rooms</a></li>
              <li class="global-menu__item"><a href="" class="global-menu__link">Restaurant</a></li>
              <li class="global-menu__item"><a href="" class="global-menu__link">Conference hall</a></li>
              <li class="global-menu__item"><a href="" class="global-menu__link">Contacts</a></li>
            </ul>
            <div class='global-header__mobile-footer header-mobile-footer'>
              <address class='header-mobile-footer__address'>8 Lystopadovoho Chynu,Lviv</address>
              <ul class="header-mobile-footer__social-items">
                <li class='header-mobile-footer__social-item'><a class="header-mobile-footer__social-link" href="">Facebook</a></li>
                <li class='header-mobile-footer__social-item'><a class="header-mobile-footer__social-link" href="">Instagram</a></li>
                <li class='header-mobile-footer__social-item'><a class="header-mobile-footer__social-link" href="">Twitter</a></li>
              </ul>
            </div>
          </nav>
        </div>

        <!--Header Phone-->
        <a href="tel:380322975020" data-da=".global-header__mobile-footer, 991.98,0" class='global-header__phone'>+38
          032 297 50 20
        </a>
      </div>
    </header>

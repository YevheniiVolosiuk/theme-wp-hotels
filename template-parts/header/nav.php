<?php

/**
 * Header Navigation template.
 *
 * @package stw
 */

use StarterThemeWp\STW\Classes\CustomNavWalker;

?>

<nav class="global-menu__body">
    <?php
    wp_nav_menu([
        'menu'            => THEME_DOMAIN . '-header-menu',
        'theme_location'  => THEME_DOMAIN . '-header-menu',
        'container'       => false,
        'container_id'    => false,
        'container_class' => 'global-menu__body',
        'menu_id'         => 'nav-menu',
        'menu_class'      => 'nav__list',
        'depth'           => 0,
        'fallback_cb'     => 'CustomNavWalker::fallback',
        'walker'          => new CustomNavWalker(),
    ]); ?>

  <div class='global-header__mobile-footer header-mobile-footer'>
    <address class='header-mobile-footer__address'>8 Lystopadovoho Chynu,Lviv</address>
    <ul class="header-mobile-footer__social-items">
      <li class='header-mobile-footer__social-item'>
        <a class="header-mobile-footer__social-link" href="">Facebook</a>
      </li>
      <li class='header-mobile-footer__social-item'>
        <a class="header-mobile-footer__social-link" href="">Instagram</a>
      </li>
      <li class='header-mobile-footer__social-item'>
        <a class="header-mobile-footer__social-link" href="">Twitter</a>
      </li>
    </ul>
  </div>
</nav>

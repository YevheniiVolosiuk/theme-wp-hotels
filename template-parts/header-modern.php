<?php

declare(strict_types=1);

?>

<header class="global-header">
  <div class='global-header__container'>

    <!--Header Logo-->
      <?php get_template_part('./template-parts/components/global-logo') ?>

    <div class="global-header__menu global-menu">

      <!--Hamburger Menu Btn -->
        <?php get_template_part('./template-parts/components/global-hamburger-menu-btn') ?>

      <!--Header Nav-->
        <?php get_template_part('./template-parts/header/nav') ?>
    </div>

    <!--Header Phone-->
    <a href="tel:560322920020" data-da=".global-header__mobile-footer, 991.98,0" class='global-header__phone'>
      +26 056 297 20 20
    </a>
  </div>
</header>

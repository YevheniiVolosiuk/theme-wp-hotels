<?php

declare(strict_types=1);

$logo = wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full');
if (has_custom_logo()) : ?>
  <a class="global-header__logo global-header__logo-ibg nav__logo" href=" <?= get_site_url() ?>">
    <img
         src="<?= esc_url($logo[0]) ?>"
         alt="<?= get_bloginfo('name') ?>">
  </a>
<?php else: ?>
  <a class="global-header__logo nav__logo" href="<?= get_site_url() ?>"> <?= get_bloginfo('name') ?> </a>
<?php endif; ?>

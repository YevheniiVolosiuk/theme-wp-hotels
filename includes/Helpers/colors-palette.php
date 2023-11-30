<?php

declare(strict_types=1);

if ( ! function_exists('getCustomizerThemeColorPaletteCss')) {
    function getCustomizerThemeColorPaletteCss(): string
    {
        ob_start();
        ?>
      :root {
      --primary: rgb(49 63 56 / 100%);
      --secondary: rgb(252 208 67 / 100%);


      --textPrimary: <?= get_theme_mod('text_primary_color', '#1b3b36'); ?>;
      --textPrimary-8: rgb(27 59 54 / 80%);
      --textPrimary-2: rgb(27 59 54 / 20%);

      --textSecondary: <?= get_theme_mod('text_secondary_color', '#fffcf6'); ?>;
      --textSecondary-8: rgb(255 252 246 / 80%);

      --textYellow: rgb(252 208 67 / 100%);


      --bgPrimary: <?= get_theme_mod('background_primary_color', '#313F38'); ?>;
      --bgPrimary-test: rgb(49 63 56 / 100%);
      --bgPrimary-hover: rgb(252 208 67 / 100%);
      --bgPrimary-24: rgb(49 63 56 / 24%);


      --bgSecondary: <?= get_theme_mod('background_primary_color', '#fffcf6'); ?>;
      --bgSecondary-24: rgb(255 252 246 / 24%);
      --bgSecondary-2: rgb(255 252 246 / 20%);

      --bgTertiary: rgb(69 82 75 / 100%);

      --bgYellow: rgb(252 208 67 / 100%);

      --bgWhite: rgb(216 216 216 / 100%);
      --bgWhite-2: rgb(216 216 216 / 20%);


      --borderPrimary: <?= get_theme_mod('border_primary_color', '#313F38'); ?>;
      --borderPrimary-48: rgb(49 63 56 / 48%);
      --borderPrimary-24: rgb(49 63 56 / 24%);
      --borderPrimary-8: rgb(49 63 56 / 80%);

      --borderSecondary: <?= get_theme_mod('border_secondary_color', '#fffcf6'); ?>;
      --borderSecondary-32: rgb(255 252 246 / 32%);
      --borderSecondary-24: rgb(255 252 246 / 24%);
      --borderSecondary-12: rgb(255 252 246 / 12%);

      --borderTertiary: rgb(123 121 125 / 100%);

      --borderFourth: rgb(63 81 72 / 100%);

      --borderYellow: rgb(252 208 67 / 100%);


      --hoverYellow: rgb(252 196 18 / 100%);
      --hoverAccent: rgb(252 192 0 / 100%);


      --error: rgb(176 62 62 / 100%);
      --attention: rgb(220 155 57 / 100%);
      --success: rgb(42 91 70 / 100%);
      --link: rgb(27 59 54 / 100%);
      --link-hover: rgb(69 89 85 / 100%);
      }
        <?php
        return ob_get_clean();
    }
}

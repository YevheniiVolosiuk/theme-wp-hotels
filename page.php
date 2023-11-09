<?php

/**
 * Page template
 *
 * @package stm
 */

declare(strict_types=1);

get_header();
?>

<main class="base-page">

    <section class="base-page__hero text-hero-section" data-watch>
        <h1>It is "page.php" file</h1>
        <div class="text-hero-section__container">
            <h1 class="text-hero-section__title"><?php the_title() ?></h1>
            <div class="text-hero-section__left">
                <h2 class="text-hero-section__sub-title">One of a Kind</h2>
            </div>
            <div class="text-hero-section__right">
                <p class="text-hero-section__text">
                    <?= wp_strip_all_tags( get_the_content() ); ?>
                </p>
                <svg class="text-hero-section__decore-vetical-line"  viewBox="0 0 1384 696" fill="none">
                    <path d="M1 696C1 312.162 310.595 1 692.5 1C1074.4 1 1384 312.162 1384 696" stroke="#3F5148" />
                </svg>
                <svg class="text-hero-section__decore-rainbow" viewBox="0 0 2 1250" fill="none">
                    <path d="M1 0L0.999945 1250" stroke="#3F5148" />
                </svg>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>

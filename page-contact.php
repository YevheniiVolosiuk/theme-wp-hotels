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

    <section class="base-page__hero text-hero-section">
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

  <section class="base-page__contact contact-section">
    <div class="contact-section__container  ">
      <h2 class="contact-section__title mb-4 ">Contact Us</h2>
      <p class="contact-section__text ">Got a technical issue? Want to send feedback about a beta feature? Need details about our Business plan? Let us know.</p>
      <form action="#" class="contact-section__form">
        <div>
          <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your email</label>
          <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="name@flowbite.com" required>
        </div>
        <div>
          <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subject</label>
          <input type="text" id="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Let us know how we can help you" required>
        </div>
        <div class="sm:col-span-2">
          <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your message</label>
          <textarea id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Leave a comment..."></textarea>
        </div>
        <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Send message</button>
      </form>
    </div>
  </section>

</main>

<?php get_footer(); ?>

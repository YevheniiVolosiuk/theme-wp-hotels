<?php

/**
 * Page template
 *
 * @package stm
 */

declare(strict_types=1);

get_header();
?>

<main class="contact-page">

  <section class="contact-page__hero text-hero-section" data-watch>
    <h1>It is "page.php" file</h1>
    <div class="text-hero-section__container">
      <h1 class="text-hero-section__title"><?php the_title() ?></h1>
      <div class="text-hero-section__left">
        <h2 class="text-hero-section__sub-title">Be in touch <br>with us</h2>
      </div>
      <div class="text-hero-section__right">
          <form class="text-hero-section__form box-form" action="files/sendmail/sendmail.php" method="POST">
            <div class="box-form__top">
              <input autocomplete="off" type="text" name="form[name]" data-error="Error" placeholder="Name" class="box-form__input">
              <input autocomplete="off" type="text" name="form[email]" data-error="Error" placeholder="Email*" class="box-form__input">
              <input autocomplete="off" type="text" name="form[subject]" data-error="Error" placeholder="Subject" class="box-form__input">
            </div>
            <textarea class="box-form__input --textarea" name="form[message]" rows="10" placeholder="Message*"></textarea>
            <div class="box-form__inner">
              <button type="submit" class="box-form__button">submit</button>
            </div>
          </form>
        <svg class=" text-hero-section__decore-rainbow" viewBox="0 0 1384 696" fill="none">
          <path d="M1 696C1 312.162 310.595 1 692.5 1C1074.4 1 1384 312.162 1384 696" stroke="#3F5148" />
        </svg>
        <svg class="text-hero-section__decore-vetical-line" viewBox="0 0 2 1250" fill="none">
          <path d="M1 0L0.999945 1250" stroke="#3F5148" />
        </svg>
      </div>
    </div>
  </section>

  <section class="contact-page__map map-section">
    <div class="map-section__container">
      <div class="map-section__box">
        <div id="map" >
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d621714.0752842133!2d12.76539017126555!3d52.50501192236543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a84e373f035901%3A0x42120465b5e3b70!2sBerlin%2C%20Germany!5e0!3m2!1sen!2spl!4v1699975562220!5m2!1sen!2spl" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
        </div>
         <div data-da=".map-section__container, 991.98,0" class="map-section__description map-description">
          <div class="map-description__row">
            <h3 class="map-description__title">Bank<span>Hotel</span></h3>
            <address class="map-description__address">269 King Str, 05th Floor, Utral Hosue Building, Dubai, VIC 3000, UAE.</address>
          </div>

          <div class="map-description__row">
            <div class="map-description__phone">+99 (0) 344 956 4050</div>
          </div>

          <div class="map-description__row">
            <ul class="map-description__list">
              <li class="map-description__item">
                Email:
                <a href="/">info@sparch.co</a>
              </li>
              <li class="map-description__item">
                Follow us:
              </li>
              <li class="map-description__item">
                Work Hours:
                <a href="/">Monday - Friday : 08h00 - 17h30</a>
              </li>
            </ul>
          </div>

        </div>
      </div>

    </div>
  </section>

</main>

<?php get_footer(); ?>

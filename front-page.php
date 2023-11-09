<?php

declare(strict_types=1);

get_header();
?>

<main class="front-page">
  <section class="front-page__hero section-hero" data-watch>
    <div class="section-hero__container">
      <div class="section-hero__content">
        <div class="section-hero__info">
          <h1 class="section-hero__title">Bank<span>Hotel</span></h1>
          <div class="section-hero__services">rooms // restaurant // congress hall // wine bar</div>
        </div>
        <div class="section-hero__history">
          <div class="section-hero__year since-year">
            <div class='since-year__box'>
              <svg viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.5 0L18.8519 13.3391L27.7862 3.3422L21.0394 14.9284L34.1435 12.0922L21.875 17.5L34.1435 22.9078L21.0394 20.0716L27.7862 31.6578L18.8519 21.6609L17.5 35L16.148 21.6609L7.21376 31.6578L13.9605 20.0716L0.85651 22.9078L13.125 17.5L0.85651 12.0922L13.9605 14.9284L7.21376 3.3422L16.148 13.3391L17.5 0Z" fill="#FCD043" />
              </svg>
              <span>since 1973</span>
            </div>
          </div>
          <div class="section-hero__text">
            <p>The luxurious hotel in the most beautiful European city with an exclusive
              restaurant, conference-hall, and art-bar.
            </p>
          </div>
        </div>
      </div>
      <div class="section-hero__slider"></div>
    </div>
  </section>

  <section class="front-page__book section-book">
    <div class="section-book__container">
      <div class="section-book__image-ibg">
        <img src="<?= vite_src_images('fullscreen-1.jpg') ?>" alt="Rooms">
      </div>
      <div class="section-book__form reservation-form">
        <div class="reservation-form__inner">
          <div class="reservation-form__label reservation-form__label--disable">Find a room</div>
          <form method="POST" action="#!" class="reservation-form__form">
            <div class="reservation-form__row reservation-form__row--border-transparent">
              <div class="reservation-form__column reservation-form__column--line-white reservation-form__column--bg-blur">
                <input autocomplete="off" type="text" name="reservation-form[check_in_date]" data-error="Error" placeholder="Check in" class="reservation-form__input reservation-form__input--text-white">
                <svg width="17" height="11" viewBox="0 0 17 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M16.4688 1C16.4688 1 14.1354 1.61538 12.1354 3.46154C10.1354 5.30769 8.46875 8.38462 8.46875 8.38462C8.46875 8.38462 6.80208 5.30769 4.80208 3.46154C2.80208 1.61538 0.46875 0.999999 0.46875 0.999999" stroke="#FCD043" stroke-width="2" />
                </svg>
              </div>
              <div class="reservation-form__column reservation-form__column--bg-blur">
                <input autocomplete="off" type="text" name="reservation-form[check_out_date]" data-error="Error" placeholder="Check out" class="reservation-form__input reservation-form__input--text-white">
                <svg width="17" height="11" viewBox="0 0 17 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M16.4688 1C16.4688 1 14.1354 1.61538 12.1354 3.46154C10.1354 5.30769 8.46875 8.38462 8.46875 8.38462C8.46875 8.38462 6.80208 5.30769 4.80208 3.46154C2.80208 1.61538 0.46875 0.999999 0.46875 0.999999" stroke="#FCD043" stroke-width="2" />
                </svg>
              </div>
              <button type="submit" class="reservation-form__button reservation-form__button--bg-yellow">book
                room</button>
            </div>
          </form>
        </div>
        <a href="/" class="section-book__form-button book-room-button book-room-button--disable">Book
          room
          <svg viewBox="0 0 192 200" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M96 0L154.779 19.0983L191.106 69.0983V130.902L154.779 180.902L96 200L37.2215 180.902L0.894348 130.902V69.0983L37.2215 19.0983L96 0Z" />
          </svg>
        </a>
      </div>
    </div>
  </section>

  <section class="front-page__about section-about">
    <div class="section-about__container">
      <div class="section-about__top">
        <div class="section-about__info">
          <a href="tel:380322975020" class="section-about__phone">+20 932 256 50 20</a>
          <address class="section-about__address">8 Lorempines Chynu,Lorem</address>
        </div>
        <div class="section-about__label">
          Art & Congress hall
        </div>
      </div>
      <div class="section-about__content">
        <div class="section-about__wrapper">
          <div class="section-about__content-left left-content">
            <h2 class="left-content__title"><span>About</span>US</h2>
            <div class="left-content__image-ibg">
              <img src="<?= vite_src_images('about-us-1.jpg'); ?>" alt="About Us">
            </div>
            <div class="left-content__content">
              <h3 class="left-content__sub-title">High quality</h3>
              <p class="left-content__text">The five-star Bank Hotel was reopened to visitors in 2016. The building was renovated and modernized to meet the expectations of the most demanding guests. We offer luxurious rooms, numerous facilities, and exceptional service.</p>
            </div>

            <svg class="decor-vertical-line" viewBox="0 0 2 975" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1 0L1.00004 975" stroke="#3F5148" />
            </svg>
            <svg class="decor-rainbow" viewBox="0 0 1419 714" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1418 714C1418 320.221 1100.79 1 709.5 1C318.206 1 1 320.221 1 714" stroke="#3F5148" />
            </svg>
            <svg class=" decor-horizontal-line" viewBox="0 0 1190 2" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1191 1L-1.89543e-05 1" stroke="#3F5148" />
            </svg>
          </div>
          <div class="section-about__content-right right-content">
            <div class="right-content__image-ibg">
              <img src="<?= vite_src_images('about-us-2.jpg'); ?>" alt="About Us">
            </div>
            <a href="/" class="right-content__button room-and-apartments-button">
              Rooms <span> and apartments</span>
              <svg class="circle" viewBox="0 0 192 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.32" d="M37.5305 19.5236L96 0.525732L154.47 19.5236L190.606 69.2608V130.739L154.469 180.476L96 199.474L37.5305 180.476L1.39435 130.739V69.2608L37.5305 19.5236Z" stroke="#FFFCF6" />
              </svg>
              <svg class="arrow-down" viewBox="0 0 26 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M25 1C25 1 21.5 2 18.5 5C15.5 8 13 13 13 13C13 13 10.5 8 7.5 5C4.5 2 1 0.999999 1 0.999999" stroke="#FCD043" stroke-width="2" />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="front-page__full-block full-section-hero">
    <svg class="full-section-hero__decore" viewBox="0 0 1920 563" fill="none">
      <path d="M2163.86 130.875C2035.07 20.3109 1683.21 -122.021 1306.1 193.165C834.699 587.147 262.5 776.804 -244.148 183.689" stroke="#FCD043" stroke-width="2"/>
    </svg>
    <div class="full-section-hero__container">
      <div class="full-section-hero__content">
        <h1 class="full-section-hero__title">Best apartments</h1>
        <p class="full-section-hero__text">All room decoration was made with ecological certified and safe materials.</p>
      </div>
    </div>
    <div class="full-section-hero__image-ibg">
      <img src="<?= vite_src_images('page-room-2.jpg'); ?>" alt="Best apartments">
    </div>
  </section>

  <section class="front-page__touch section-touch">
    <div class="section-touch__container">
      <div class="section-touch__info">
        <div class="section-touch__inner">
          <a href="tel:380322975020" class="section-touch__phone">+28 032 220 50 20</a>
          <address class="section-touch__address">8 Lorempines Chynu,Lorem</address>
        </div>
      </div>

      <div class="section-touch__content content-touch">
        <div class="content-touch__left">
          Get in
          <svg viewBox="0 0 150 149" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M75 0L80.4577 49.3236L105.505 6.48409L90.4294 53.7633L130.736 24.8152L97.7332 61.875L146.329 51.8237L101.106 72.2561L149.589 82.8396L99.9652 83.1117L139.952 112.5L94.5076 92.5647L119.084 135.676L85.6768 98.9806L90.5934 148.361L75 101.25L59.4066 148.361L64.3232 98.9806L30.9161 135.676L55.4924 92.5647L10.0481 112.5L50.0348 83.1117L0.410858 82.8396L48.8938 72.2561L3.67076 51.8237L52.2668 61.875L19.2641 24.8152L59.5706 53.7633L44.4948 6.48409L69.5423 49.3236L75 0Z" fill="#FCD043" />
          </svg>
        </div>
        <div class="content-touch__right">
          touch
        </div>
        <div class="content-touch__image-ibg">
          <img src="<?= vite_src_images('get-in-touch.jpg') ?>" alt="Get in Touch">
        </div>
      </div>

      <div class="section-touch__reservation reservation-form">
        <div class="reservation-form__inner">
          <div class="reservation-form__label">Find a room</div>
          <form method="POST" action="book-room.php" class="reservation-form__form">
            <div class="reservation-form__row">
              <div class="reservation-form__column">
                <input autocomplete="off" type="text" name="reservation-form[check_in_date]" data-error="Error" placeholder="Check in" class="reservation-form__input">
                <svg width="17" height="11" viewBox="0 0 17 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M16.4688 1C16.4688 1 14.1354 1.61538 12.1354 3.46154C10.1354 5.30769 8.46875 8.38462 8.46875 8.38462C8.46875 8.38462 6.80208 5.30769 4.80208 3.46154C2.80208 1.61538 0.46875 0.999999 0.46875 0.999999" stroke="#FCD043" stroke-width="2" />
                </svg>
              </div>
              <div class="reservation-form__column">
                <input autocomplete="off" type="text" name="reservation-form[check_out_date]" data-error="Error" placeholder="Check out" class="reservation-form__input">
                <svg width="17" height="11" viewBox="0 0 17 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M16.4688 1C16.4688 1 14.1354 1.61538 12.1354 3.46154C10.1354 5.30769 8.46875 8.38462 8.46875 8.38462C8.46875 8.38462 6.80208 5.30769 4.80208 3.46154C2.80208 1.61538 0.46875 0.999999 0.46875 0.999999" stroke="#FCD043" stroke-width="2" />
                </svg>
              </div>
              <button type="submit" class="reservation-form__button">book room</button>
            </div>
          </form>
        </div>
        <a href="/" class="section-touch__book-room-button book-room-button book-room-button--disable book-room-button--disable-margin">Book
          room
          <svg viewBox="0 0 192 200" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M96 0L154.779 19.0983L191.106 69.0983V130.902L154.779 180.902L96 200L37.2215 180.902L0.894348 130.902V69.0983L37.2215 19.0983L96 0Z" />
          </svg>
        </a>
      </div>
    </div>

    <svg class="section-touch__decor-line" viewBox="0 0 1920 563" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path opacity="0.6" d="M2345.86 130.875C2217.07 20.3109 1865.21 -122.021 1488.1 193.165C1016.7 587.147 444.5 776.804 -62.1477 183.689" stroke="#FCD043" />
    </svg>
  </section>

</main>

<?php get_footer(); ?>

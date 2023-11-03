<?php
get_header();
?>

<main class="page-room">
  <section class="page-room__full-hero full-section-hero">
    <div class="full-section-hero__container">
      <div class="full-section-hero__content">
        <h1 class="full-section-hero__title">Superior twin</h1>
        <p class="full-section-hero__text">All room decoration was made with ecological certified and safe materials.</p>
      </div>
      <a href="/" class="full-section-hero__book-room-button book-room-button book-room-button--disable-margin">
        Book room
        <svg viewBox="0 0 192 200" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path d="M96 0L154.779 19.0983L191.106 69.0983V130.902L154.779 180.902L96 200L37.2215 180.902L0.894348 130.902V69.0983L37.2215 19.0983L96 0Z" />
        </svg>
      </a>
    </div>
    <div class="full-section-hero__image-ibg">
      <img src="<?= vite_src_images('page-room-1.jpg'); ?>" alt="Superior Twin">
    </div>
  </section>

  <section class="page-room__description description-section">
    <div class="description-section__container">
      <div class="description-section__left">
        <div class="description-section__since-year since-year">
          <div class='since-year__box'>
            <svg viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M17.5 0L18.8519 13.3391L27.7862 3.3422L21.0394 14.9284L34.1435 12.0922L21.875 17.5L34.1435 22.9078L21.0394 20.0716L27.7862 31.6578L18.8519 21.6609L17.5 35L16.148 21.6609L7.21376 31.6578L13.9605 20.0716L0.85651 22.9078L13.125 17.5L0.85651 12.0922L13.9605 14.9284L7.21376 3.3422L16.148 13.3391L17.5 0Z" fill="#FCD043" />
            </svg>
            <span>since 1973</span>
          </div>
        </div>
        <h2 class="description-section__sub-title">All suites have a unique design because we want our every guest to feel special.</h2>
      </div>
      <div class="description-section__right">
        <p class="description-section__text">The Superior twin would perfectly match the needs of those who plan to stay long. The bright and airy room is equipped with superior soft Italian furniture. Large windows open a beautiful view to the historical part of the city. Contemporary interior design and comfortable beds will make your stay cozy and delightful.</p>
      </div>
    </div>
  </section>

  <section class="page-room__preview preview-section">
    <h3 class="preview-section__title">Premier Standard</h3>
    <div class="preview-section__container">
      <div class="preview-section__fullscreen-img-ibg">
        <img src="<?= vite_src_images('page-room-2.jpg'); ?>" alt="Premier Standard">
      </div>
    </div>
    <svg class="decore-wave" viewBox="0 0 1920 643" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path opacity="0.12" d="M2031 493.504C1902.21 619.92 1550.36 782.66 1173.24 422.283C701.846 -28.1883 129.647 -245.038 -377 433.118" stroke="#FFFCF6" />
    </svg>
  </section>

  <section class="page-room__cards cards-section">
    <div class="cards-section__container">
      <div class="cards-section__row">
        <div class="cards-section__column">
          <div class="cards-section__img-ibg">
            <img src="<?= vite_src_images('cards-section-1.jpg'); ?>" alt="Superior Twin">
          </div>
          <h2 class="cards-section__title">Superior twin</h2>
          <div class="cards-section__text">All rooms in Bank Hotel have a special charm achieved through a combination of modern functional design and original 20th century layout.</div>
          <a href="/" data-da=".cards-section__column-second, 991.98" class="cards-section__book-room-small">/Book room</a>
        </div>
        <div class="cards-section__column cards-section__column-second">
          <div class="cards-section__img-ibg">
            <img src="<?= vite_src_images('cards-section-2.jpg'); ?>" alt="Superior Twin">
          </div>
          <div class="cards-section__text">The Superior twin includes two functional zones: a living room with the best Italian furniture, and an isolated cozy bedroom with a large bed. Here, you will find space both for work and comfortable rest. Hotel offers supreme comfort and outstanding 24-hour room service to make sure that the time you spend here is enjoyable and pleasant.</div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-room__touch section-touch">
    <div class="section-touch__container">
      <div class="section-touch__info">
        <div class="section-touch__inner">
          <a href="tel:380322975020" class="section-touch__phone">+38 032 297 50 20</a>
          <address class="section-touch__address">8 Lystopadovoho Chynu,Lviv</address>
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

<?php
get_footer();
?>

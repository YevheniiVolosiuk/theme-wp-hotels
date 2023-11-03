<?php
get_header();
?>

<main class="facility-page">
  <section class="facility-page__hero text-hero-section">
    <div class="text-hero-section__container">
      <h1 class="text-hero-section__title">“Safe” restaurant</h1>
      <div class="text-hero-section__left">
        <h2 class="text-hero-section__sub-title">One of a Kind</h2>
      </div>
      <div class="text-hero-section__right">
        <p class="text-hero-section__text">Bank Hotel proudly welcomes you to the Safe Restaurant, a place where you will wish you could dine every day. The restaurant offers a unique menu developed by the team of professionals led by chef Mary-Ann Jones, the wine list with more than 250 items, the outstanding service, and the unforgettable atmosphere.</p>
        <svg class="text-hero-section__decore-vetical-line"  viewBox="0 0 1384 696" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1 696C1 312.162 310.595 1 692.5 1C1074.4 1 1384 312.162 1384 696" stroke="#3F5148" />
        </svg>
        <svg class="text-hero-section__decore-rainbow" viewBox="0 0 2 1250" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1 0L0.999945 1250" stroke="#3F5148" />
        </svg>
      </div>
    </div>
  </section>

  <section class="facility-page__service service-section">
    <div class="service-section__container">
      <div class="service-section__box">
        <div class="service-section__left-img-ibg">
          <img src="<?= vite_src_images('facility-1.jpg'); ?>" alt="At Your Service">
        </div>
        <div class="service-section__right-img-ibg">
          <img src="<?= vite_src_images('facility-2.jpg'); ?>" alt="At Your Service">
        </div>
      </div>
      <div class="service-section__info">
          <h2 class="service-section__sub-title">at your service</h2>
        <p class="service-section__text">The team of the Safe Restaurant aims to exceed all expectations of our guests. Our chef worked hard to develop a unique menu that features the best meals of the European cuisine that will match the tastes of the most demanding clients. Friendly and attentive waiters will ensure that you will enjoy your time in our restaurant.</p>
      </div>
    </div>
  </section>

  <section class="facility-page__design design-section">
    <div class="design-section__container">
      <h2 class="design-section__title">Once you try our cuisine and service, you shall never want to visit another restaurant.</h2>
      <div class="design-section__box">
        <div data-da=".design-section__box-mobile,998" class="design-section__left-img-ibg">
          <img src="<?= vite_src_images('facility-3.jpg'); ?>" alt="At Your Service">
        </div>
        <div class="design-section__right-img-ibg">
          <img src="<?= vite_src_images('facility-4.jpg'); ?>" alt="At Your Service">
        </div>
      </div>
      <div class="design-section__info">
        <p data-da=".design-section__box-mobile,998" class="design-section__label">All room decoration was made with ecological certified and safe materials.</p>
        <div class="design-section__row">
          <h2 class="design-section__sub-title">Spend Your Time With Us</h2>
          <p class="design-section__text">If you are looking for an exclusive place to have a romantic dinner, organize a business meeting, or spend an enjoyable evening with friends, visit Safe Restaurant in Bank Hotel. With our delicious meals, unique interior design, and atmosphere of comfort and exquisiteness you shall never want to go to a different restaurant.</p>
        </div>
        <div class="design-section__box-mobile"></div>
        <svg class="design-section__decore-wave" viewBox="0 0 1024 298" fill="none">
          <path opacity="0.12" d="M1028 214.501C939.5 262.957 782.316 390.114 552.02 180.157C292.634 -56.3214 -16.5 -71.9988 -319.5 214.501" stroke="#FFFCF6"/>
        </svg> 
      </div>
    </div>
  </section>

  <section class="facility-page__touch section-touch">
    <div class="section-touch__container">
      <div class="section-touch__info --text-white">
        <div class="section-touch__inner">
          <a href="tel:380322975020" class="section-touch__phone --bg-line-opacity">+38 032 297 50 20</a>
          <address class="section-touch__address">8 Lystopadovoho Chynu,Lviv</address>
        </div>
      </div>

      <div class="section-touch__content content-touch">
        <div class="content-touch__left --text-white">
          Get in
          <svg viewBox="0 0 150 149" fill="none">
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

      <div class="section-touch__reservation reservation-form ">
        <div class="reservation-form__inner">
          <div class="reservation-form__label">Find a room</div>
          <form method="POST" action="book-room.php" class="reservation-form__form">
            <div class="reservation-form__row">
              <div class="reservation-form__column reservation-form__column--bg-blur-green">
                <input autocomplete="off" type="text" name="reservation-form[check_in_date]" data-error="Error" placeholder="Check in" class="reservation-form__input reservation-form__input--text-white">
                <svg width="17" height="11" viewBox="0 0 17 11" fill="none">
                  <path d="M16.4688 1C16.4688 1 14.1354 1.61538 12.1354 3.46154C10.1354 5.30769 8.46875 8.38462 8.46875 8.38462C8.46875 8.38462 6.80208 5.30769 4.80208 3.46154C2.80208 1.61538 0.46875 0.999999 0.46875 0.999999" stroke="#FCD043" stroke-width="2" />
                </svg>
              </div>
              <div class="reservation-form__column reservation-form__column--bg-blur-green">
                <input autocomplete="off" type="text" name="reservation-form[check_out_date]" data-error="Error" placeholder="Check out" class="reservation-form__input reservation-form__input--text-white">
                <svg width="17" height="11" viewBox="0 0 17 11" fill="none">
                  <path d="M16.4688 1C16.4688 1 14.1354 1.61538 12.1354 3.46154C10.1354 5.30769 8.46875 8.38462 8.46875 8.38462C8.46875 8.38462 6.80208 5.30769 4.80208 3.46154C2.80208 1.61538 0.46875 0.999999 0.46875 0.999999" stroke="#FCD043" stroke-width="2" />
                </svg>
              </div>
              <button type="submit" class="reservation-form__button --button-yellow">book room</button>
            </div>
          </form>
        </div>
        <a href="/" class="section-touch__book-room-button book-room-button book-room-button--disable book-room-button--disable-margin">Book
          room
          <svg viewBox="0 0 192 200" fill="currentColor">
            <path d="M96 0L154.779 19.0983L191.106 69.0983V130.902L154.779 180.902L96 200L37.2215 180.902L0.894348 130.902V69.0983L37.2215 19.0983L96 0Z" />
          </svg>
        </a>
      </div>
    </div>

    <svg class="section-touch__decor-line" viewBox="0 0 1920 563" fill="none">
      <path opacity="0.6" d="M2345.86 130.875C2217.07 20.3109 1865.21 -122.021 1488.1 193.165C1016.7 587.147 444.5 776.804 -62.1477 183.689" stroke="#FCD043" />
    </svg>
  </section>
</main>

<?php
get_footer();
?>

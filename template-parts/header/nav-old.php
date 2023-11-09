<?php

/**
 * Header Navigation template.
 *
 * @package stm
 */

?>

<nav class="global-menu__body">

  <li><a href="#" class="nav__link">Home</a></li>

  <li><a href="#" class="nav__link">Company</a></li>

  <!--  =============== DROPDOWN 1 ===============-->
  <li class="dropdown__item">
    <div class="nav__link">
      Analytics <i class="ri-arrow-down-s-line dropdown__arrow"></i>
    </div>

    <ul class="dropdown__menu">
      <li>
        <a href="#" class="dropdown__link">
          <i class="ri-pie-chart-line"></i> Overview
        </a>
      </li>

      <li>
        <a href="#" class="dropdown__link">
          <i class="ri-arrow-up-down-line"></i> Transactions
        </a>
      </li>

      <!--      =============== DROPDOWN SUBMENU ===============-->
      <li class="dropdown__subitem dropdown__item">
        <div class="dropdown__link">
          <i class="ri-bar-chart-line"></i> Reports <i class="ri-add-line dropdown__add"></i>
        </div>

        <ul class="dropdown__submenu">
          <li>
            <a href="#" class="dropdown__sublink">
              <i class="ri-file-list-line"></i> Documents
            </a>
          </li>

          <li>
            <a href="#" class="dropdown__sublink">
              <i class="ri-cash-line"></i> Payments
            </a>
          </li>

          <li>
            <a href="#" class="dropdown__sublink">
              <i class="ri-refund-2-line"></i> Refunds
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </li>

  <li><a href="#" class="nav__link">Products</a></li>

  <!--  =============== DROPDOWN 2 ===============-->
  <li class="dropdown__item">
    <div class="nav__link">
      Users <i class="ri-arrow-down-s-line dropdown__arrow"></i>
    </div>

    <ul class="dropdown__menu">
      <li>
        <a href="#" class="dropdown__link">
          <i class="ri-user-line"></i> Profiles
        </a>
      </li>

      <li>
        <a href="#" class="dropdown__link">
          <i class="ri-lock-line"></i> Accounts
        </a>
      </li>

      <li>
        <a href="#" class="dropdown__link">
          <i class="ri-message-3-line"></i> Messages
        </a>
      </li>
    </ul>
  </li>

  <li><a href="#" class="nav__link">Contact</a></li>

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

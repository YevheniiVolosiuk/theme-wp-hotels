<header class="global-header">
    <div class='global-header__container'>

        <!--Header Logo-->
        <?php get_template_part('./template-parts/components/global-logo') ?>

        <!--Header Nav-->
        <div class="global-header__menu global-menu">

            <!--Hamburger Menu Btn -->
            <?php get_template_part('./template-parts/components/global-hamburger-menu-btn') ?>

            <nav class="global-menu__body">
                <!--          <#?php-->
                <!--          wp_nav_menu([-->
                <!--              'menu'            => 'stw-header-menu',-->
                <!--              'theme_location'  => 'stw-header-menu',-->
                <!--              'container'       => '',-->
                <!--              'container_id'    => 'global-menu',-->
                <!--              'container_class' => 'global-menu__body',-->
                <!--              'menu_id'         => false,-->
                <!--              'menu_class'      => 'global-menu__list',-->
                <!--              'depth'           => 3,-->
                <!--              'fallback_cb'     => 'CustomNavWalker::fallback',-->
                <!--              'walker'          => new CustomNavWalker()-->
                <!--          ]); ?>-->
                <ul class="global-menu__list">
                    <li class="global-menu__item"><a href="" class="global-menu__link">Home</a>
                        <ul class="global-sub-menu__list">
                            <li class="global-sub-menu__item">
                                <a href="/" class="global-sub-menu__link">Sub Link 1</a>
                            </li>
                            <li class="global-sub-menu__item">
                                <a href="/" class="global-sub-menu__link">Sub 2</a>
                            </li>
                            <li class="global-sub-menu__item">
                                <a href="/" class="global-sub-menu__link">Link 3</a>
                                <ul class="global-sub-sub-menu__list">
                                    <li class="global-sub-sub-menu__item">
                                        <a href="/" class="global-sub-sub-menu__link">Sub Link 1</a>
                                    </li>
                                    <li class="global-sub-sub-menu__item">
                                        <a href="/" class="global-sub-sub-menu__link">Sub 2</a>
                                    </li>
                                    <li class="global-sub-sub-menu__item">
                                        <a href="/" class="global-sub-sub-menu__link">Link 3</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="global-menu__item"><a href="" class="global-menu__link">About</a></li>
                    <li class="global-menu__item"><a href="" class="global-menu__link">Rooms</a></li>
                    <li class="global-menu__item"><a href="" class="global-menu__link">Restaurant</a></li>
                    <li class="global-menu__item"><a href="" class="global-menu__link">Conference hall</a></li>
                    <li class="global-menu__item"><a href="" class="global-menu__link">Contacts</a></li>
                </ul>
                <div class='global-header__mobile-footer header-mobile-footer'>
                    <address class='header-mobile-footer__address'>8 Lystopadovoho Chynu,Lviv</address>
                    <ul class="header-mobile-footer__social-items">
                        <li class='header-mobile-footer__social-item'><a class="header-mobile-footer__social-link" href="">Facebook</a>
                        </li>
                        <li class='header-mobile-footer__social-item'><a class="header-mobile-footer__social-link" href="">Instagram</a>
                        </li>
                        <li class='header-mobile-footer__social-item'>
                            <a class="header-mobile-footer__social-link" href="">Twitter</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <!--Header Phone-->
        <a href="tel:380322975020" data-da=".global-header__mobile-footer, 991.98,0" class='global-header__phone'>+38
            032 297 50 20
        </a>
    </div>
</header>

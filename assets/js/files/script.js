// Підключення функціоналу "Чертоги Фрілансера"
import { isMobile } from './functions';
// Підключення списку активних модулів
// import { flsModules } from './modules.js';

/*=============== SHOW DROPDOWN MENUS ON MOBILE ===============*/
document.addEventListener( "DOMContentLoaded", function() {
  const navMenu = document.getElementById( "nav-menu" );
  const dropdownItems = navMenu.querySelectorAll( "li.dropdown__item div" );
  // let isDropdownOpen = false;

  dropdownItems.forEach( ( dropdownItem ) => {
    if (dropdownItem.nextElementSibling !== null) {
      dropdownItem.addEventListener( "click", ( event ) => {

        if (isMobile) {
          event.target.parentElement.classList.toggle('dropdown__open');
        }
      } );
    }
  } );

  // Close submenus when clicking outside the menu or on a link
  document.addEventListener( "click", ( event ) => {
    const dropdownItems = navMenu.querySelectorAll( ".dropdown__item" );
    if (!navMenu.contains( event.target )) {
      dropdownItems.forEach( ( dropdownItem ) => {
        if (dropdownItem) {
          dropdownItem.classList.remove('dropdown__open');
        }
      } );
    }
  } );


//Watcher added custom class for goToTopButton
  document.addEventListener( "watcherCallback", function( e ) {
    const goToTopButton = document.getElementById( "goToTopButton" );
    const entry = e.detail.entry;

    if (entry.isIntersecting) {
      goToTopButton.classList.remove( "back-to-top-button--up" );
    } else {
      goToTopButton.classList.add( "back-to-top-button--up" );
    }
  } );
} );

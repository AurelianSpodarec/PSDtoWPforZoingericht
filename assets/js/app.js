const css = require('../scss/app.scss');
 
document.addEventListener('DOMContentLoaded', function() {

 
  
  // MAIN NAVIGATION MENU TOGGLE
  var siteNav = document.querySelector(".site-nav--mobile");
  var siteHamburger = document.querySelector(".site-header__hamburger");
  var siteCanvas = document.querySelector(".site-canvas-animation");


  function toggleMainMenu() {

    siteNav.classList.toggle("is-active");
    siteHamburger.classList.toggle("is-active");
    siteCanvas.classList.toggle('is-active');
  
  }

  siteHamburger.addEventListener('click', toggleMainMenu, false);


 


});


 
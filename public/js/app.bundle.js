/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

const css = __webpack_require__(1);
 
document.addEventListener('DOMContentLoaded', function() {




//////////////////////////////////////////////////
//
// Slider
//  
//////////////////////////////////////////////////



// var slides = document.querySelectorAll('.slider-item'),
//     currentSlide = 0,
//     slideInterval = setInterval(nextSlide, 6500);



//     function showSlides(n) {
//     var i;
//     var slides = document.getElementsByClassName("mySlides");
//     var dots = document.getElementsByClassName("dot");
//     if (n > slides.length) {slideIndex = 1} 
//     if (n < 1) {slideIndex = slides.length}

//     for (i = 0; i < slides.length; i++) {
//       slides[i].style.display = "none"; 
//     }
 
//     slides[slideIndex-1].style.display = "block"; 
//     dots[slideIndex-1].className += " active";
// }

//    // slides.forEach(function(dot) {
//    //      var controls = document.querySelector('.controls');
//    //      dot.document.createElement("li");
//    //      controls.appendChild(dots);
//    //  });

//       for (var i = 0; i < slides.length; i++) {
//         var controls = document.querySelector('.controls');
//         var dots = slides[i].document.createElement("li");
//         controls.appendChild(dots);
//     };



// function nextSlide(){
//   goToSlide(currentSlide+1);
// }

// function previousSlide(){
//   goToSlide(currentSlide-1);
// }

// function goToSlide(n){
//   slides[currentSlide].className = 'slider-item';
//   currentSlide = (n+slides.length)%slides.length;
//   slides[currentSlide].className = 'slider-item showing';
// }

// var slideBtnNext = document.querySelector(".slider-btn-next"),
//     slideBtnPrev = document.querySelector(".slider-btn-prev");


//     slideBtnNext.addEventListener('click', function(){
//       nextSlide();
//     });

//     slideBtnPrev.addEventListener('click', function(){
//       previousSlide();
//     });

 
  
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



  

// MAIN NAVIGATION STICKY
    var siteHeader = document.querySelector('.site-header'),
        siteHeaderHeight = siteHeader.offsetHeight,
        prevScroll = 0;
    
    function stickyNav(e) {
        if(siteNav.classList.contains("is-active")) {
            return;
        }
        if (window.scrollY >= siteHeaderHeight) {
            siteHeader.classList.add('is-sticky');
        } else{
            siteHeader.classList.remove('is-sticky');
        }
    }

    function showNav(e) {

        if(siteNav.classList.contains("is-active")) {
            return;
        }
        var currentScroll = window.pageYOffset;

        if(currentScroll < prevScroll) {
            siteHeader.classList.add('sticky-show');
        } else {
            siteHeader.classList.remove('sticky-show');
        }
    
        prevScroll = currentScroll;
    }

    window.addEventListener('scroll', showNav);
    window.addEventListener('scroll', stickyNav);

  // var items = document.querySelectorAll('.carousel .item');
  // var dots = document.querySelectorAll('.carousel-indicators li');
  // var currentItem = 0;
  // var isEnabled = true;

  // function changeCurrentItem(n) {
  //   currentItem = (n + items.length) % items.length;
  // }

  // function nextItem(n) {
  //   hideItem('to-left');
  //   changeCurrentItem(n + 1);
  //   showItem('from-right');
  // }

  // function previousItem(n) {
  //   hideItem('to-right');
  //   changeCurrentItem(n - 1);
  //   showItem('from-left');
  // }

  // function goToItem(n) {
  //   if (n < currentItem) {
  //     hideItem('to-right');
  //     currentItem = n;
  //     showItem('from-left');
  //   } else {
  //     hideItem('to-left');
  //     currentItem = n;
  //     showItem('from-right');
  //   }
  // }

  // function hideItem(direction) {
  //   isEnabled = false;
  //   items[currentItem].classList.add(direction);
  //   dots[currentItem].classList.remove('active');
  //   items[currentItem].addEventListener('animationend', function() {
  //     this.classList.remove('active', direction);
  //   });
  // }

  // function showItem(direction) {
  //   items[currentItem].classList.add('next', direction);
  //   dots[currentItem].classList.add('active');
  //   items[currentItem].addEventListener('animationend', function() {
  //     this.classList.remove('next', direction);
  //     this.classList.add('active');
  //     isEnabled = true;
  //   });
  // }

  // document.querySelector('.carousel-control.left').addEventListener('click', function() {
  //   if (isEnabled) {
  //     previousItem(currentItem);
  //   }
  // });

  // document.querySelector('.carousel-control.right').addEventListener('click', function() {
  //   if (isEnabled) {
  //     nextItem(currentItem);
  //   }
  // });

  // document.querySelector('.carousel-indicators').addEventListener('click', function(e) {
  //   var target = [].slice.call(e.target.parentNode.children).indexOf(e.target);
  //   if (target !== currentItem && target < dots.length) {
  //     goToItem(target);
  //   }
  // });

  //  function automate() {
  //     nextItem(currentItem);
  // }

  // setInterval(automate, 226500);
 



});


 

/***/ }),
/* 1 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ })
/******/ ]);
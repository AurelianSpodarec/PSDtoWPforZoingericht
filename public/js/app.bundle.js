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



  var items = document.querySelectorAll('.carousel .item');
  var dots = document.querySelectorAll('.carousel-indicators li');
  var currentItem = 0;
  var isEnabled = true;

  function changeCurrentItem(n) {
    currentItem = (n + items.length) % items.length;
  }

  function nextItem(n) {
    hideItem('to-left');
    changeCurrentItem(n + 1);
    showItem('from-right');
  }

  function previousItem(n) {
    hideItem('to-right');
    changeCurrentItem(n - 1);
    showItem('from-left');
  }

  function goToItem(n) {
    if (n < currentItem) {
      hideItem('to-right');
      currentItem = n;
      showItem('from-left');
    } else {
      hideItem('to-left');
      currentItem = n;
      showItem('from-right');
    }
  }

  function hideItem(direction) {
    isEnabled = false;
    items[currentItem].classList.add(direction);
    dots[currentItem].classList.remove('active');
    items[currentItem].addEventListener('animationend', function() {
      this.classList.remove('active', direction);
    });
  }

  function showItem(direction) {
    items[currentItem].classList.add('next', direction);
    dots[currentItem].classList.add('active');
    items[currentItem].addEventListener('animationend', function() {
      this.classList.remove('next', direction);
      this.classList.add('active');
      isEnabled = true;
    });
  }

  document.querySelector('.carousel-control.left').addEventListener('click', function() {
    if (isEnabled) {
      previousItem(currentItem);
    }
  });

  document.querySelector('.carousel-control.right').addEventListener('click', function() {
    if (isEnabled) {
      nextItem(currentItem);
    }
  });

  document.querySelector('.carousel-indicators').addEventListener('click', function(e) {
    var target = [].slice.call(e.target.parentNode.children).indexOf(e.target);
    if (target !== currentItem && target < dots.length) {
      goToItem(target);
    }
  });

   function automate() {
      nextItem(currentItem);
  }

  setInterval(automate, 226500);
 



});


 

/***/ }),
/* 1 */
/***/ (function(module, exports) {

throw new Error("Module build failed: ModuleBuildError: Module build failed: \r\n@import \"4-layouts/layout-global\";\r\n^\r\n      File to import not found or unreadable: C:\\Users\\Aurelian\\Desktop\\Web Development\\Client\\Mike Rozema - zoingericht - PSD to WP\\wordpress\\wp-content\\themes\\zoingericht\\assets\\scss\\4-layouts\\_layout-global.scss.\nParent style sheet: stdin\r\n      in C:\\Users\\Aurelian\\Desktop\\Web Development\\Client\\Mike Rozema - zoingericht - PSD to WP\\wordpress\\wp-content\\themes\\zoingericht\\assets\\scss\\app.scss (line 30, column 1)\n    at runLoaders (C:\\Users\\Aurelian\\Desktop\\Web Development\\Client\\Mike Rozema - zoingericht - PSD to WP\\wordpress\\wp-content\\themes\\zoingericht\\node_modules\\webpack\\lib\\NormalModule.js:195:19)\n    at C:\\Users\\Aurelian\\Desktop\\Web Development\\Client\\Mike Rozema - zoingericht - PSD to WP\\wordpress\\wp-content\\themes\\zoingericht\\node_modules\\loader-runner\\lib\\LoaderRunner.js:364:11\n    at C:\\Users\\Aurelian\\Desktop\\Web Development\\Client\\Mike Rozema - zoingericht - PSD to WP\\wordpress\\wp-content\\themes\\zoingericht\\node_modules\\loader-runner\\lib\\LoaderRunner.js:230:18\n    at context.callback (C:\\Users\\Aurelian\\Desktop\\Web Development\\Client\\Mike Rozema - zoingericht - PSD to WP\\wordpress\\wp-content\\themes\\zoingericht\\node_modules\\loader-runner\\lib\\LoaderRunner.js:111:13)\n    at Object.asyncSassJobQueue.push [as callback] (C:\\Users\\Aurelian\\Desktop\\Web Development\\Client\\Mike Rozema - zoingericht - PSD to WP\\wordpress\\wp-content\\themes\\zoingericht\\node_modules\\sass-loader\\lib\\loader.js:55:13)\n    at Object.<anonymous> (C:\\Users\\Aurelian\\Desktop\\Web Development\\Client\\Mike Rozema - zoingericht - PSD to WP\\wordpress\\wp-content\\themes\\zoingericht\\node_modules\\async\\dist\\async.js:2257:31)\n    at Object.callback (C:\\Users\\Aurelian\\Desktop\\Web Development\\Client\\Mike Rozema - zoingericht - PSD to WP\\wordpress\\wp-content\\themes\\zoingericht\\node_modules\\async\\dist\\async.js:958:16)\n    at options.error (C:\\Users\\Aurelian\\Desktop\\Web Development\\Client\\Mike Rozema - zoingericht - PSD to WP\\wordpress\\wp-content\\themes\\zoingericht\\node_modules\\node-sass\\lib\\index.js:294:32)");

/***/ })
/******/ ]);
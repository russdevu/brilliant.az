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
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
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
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/main/main.js":
/*!***********************************!*\
  !*** ./resources/js/main/main.js ***!
  \***********************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _post_post_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./post/post.js */ "./resources/js/main/post/post.js");
/* harmony import */ var _post_post_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_post_post_js__WEBPACK_IMPORTED_MODULE_0__);
var cl = console.log,
    click = "click"; // Sign-up / Sign-In Modals...

$(function () {
  var overlay = $('.overlay'),
      loginTrigger = $('.login-trigger'),
      loginModal = $('.popup-login'),
      forgotModal = $('.popup-forgot'),
      signIn = $('#sign-in'),
      register = $('#register'),
      formSignIn = $('.popup-form.sign-in'),
      formRegister = $('.popup-form.register');
  loginTrigger.on(click, function () {
    signIn.addClass('active');
    overlay.addClass('visible');
    loginModal.addClass('visible');
    formSignIn.addClass('active');
  });
  $('#forgotTrigger').on(click, function () {
    loginModal.removeClass('visible');
    forgotModal.addClass('visible');
  });
  $('.back_arr').on(click, function () {
    forgotModal.removeClass('visible');
    loginModal.addClass('visible');
  });
  register.on(click, function () {
    signIn.removeClass('active');
    register.addClass('active');
    formSignIn.removeClass('active');
    formRegister.addClass('active');
  });
  signIn.on(click, function () {
    signIn.addClass('active');
    register.removeClass('active');
    formSignIn.addClass('active');
    formRegister.removeClass('active');
  });
  overlay.on(click, function () {
    signIn.removeClass('active');
    overlay.removeClass('visible');
    register.removeClass('active');
    loginModal.removeClass('visible');
    forgotModal.removeClass('visible');
    formSignIn.removeClass('active');
    formRegister.removeClass('active');
  });
}); // navbar dropdown

$('li.auth a').on(click, function (e) {
  var navDropUl = $('li.auth ul');
  e.stopPropagation();
  navDropUl.toggleClass('active');
  $(document).on(click, function (e) {
    if (navDropUl.hasClass('active') && e.target != navDropUl) {
      navDropUl.removeClass('active');
    }
  });
}); // slots with images (upload images on /new-post)
// const slot = $('.slot'),
//       closestInput = slot.children('input');
// slot.on(click, (e) => {
//     const clickedSlot = e.currentTarget;
//     // cl(clickedSlot.getAttribute('data-target'));
//     cl(clickedSlot);
//     // alert($(this).children('input'));
//     // $(this).children('input').click();
// });
// Alert message

var AlertBox = function AlertBox(id, option) {
  this.show = function (msg) {
    if (msg === '' || typeof msg === 'undefined' || msg === null) {
      throw '"msg parameter is empty"';
    } else {
      var alertArea = document.querySelector(id);
      var alertBox = document.createElement('DIV');
      var alertContent = document.createElement('DIV');
      var alertClose = document.createElement('A');
      var alertClass = this;
      alertContent.classList.add('alert-content');
      alertContent.innerText = msg;
      alertClose.classList.add('alert-close');
      alertClose.setAttribute('href', '#');
      alertBox.classList.add('alert-box');
      alertBox.appendChild(alertContent);

      if (!option.hideCloseButton || typeof option.hideCloseButton === 'undefined') {
        alertBox.appendChild(alertClose);
      }

      alertArea.appendChild(alertBox);
      alertClose.addEventListener('click', function (event) {
        event.preventDefault();
        alertClass.hide(alertBox);
      });

      if (!option.persistent) {
        var alertTimeout = setTimeout(function () {
          alertClass.hide(alertBox);
          clearTimeout(alertTimeout);
        }, option.closeTime);
      }
    }
  };

  this.hide = function (alertBox) {
    alertBox.classList.add('hide');
    var disperseTimeout = setTimeout(function () {
      alertBox.parentNode.removeChild(alertBox);
      clearTimeout(disperseTimeout);
    }, 500);
  };
};

var alertNoClose = new AlertBox('#alert-area', {
  closeTime: 3000,
  persistent: false,
  hideCloseButton: true
}); // show alert
// alertNoClose.show('message');



/***/ }),

/***/ "./resources/js/main/post/post.js":
/*!****************************************!*\
  !*** ./resources/js/main/post/post.js ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

var newPostForm = $('#newPostForm');
var customPostID = $('#custom_post_id');
newPostForm.on('submit', function (e) {
  e.preventDefault();
  customPostIdVal = Math.floor(Math.random() * 1000000);
  console.log(customPostIdVal);
  customPostID.val(customPostIdVal);
});

/***/ }),

/***/ 1:
/*!*****************************************!*\
  !*** multi ./resources/js/main/main.js ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /var/www/brilliant.az/resources/js/main/main.js */"./resources/js/main/main.js");


/***/ })

/******/ });
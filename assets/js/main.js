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
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./dev-assets/js/main.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./dev-assets/js/main.js":
/*!*******************************!*\
  !*** ./dev-assets/js/main.js ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


__webpack_require__(/*! ./starter */ "./dev-assets/js/starter.js");

+function ($) {
  var slickArrLeft = "\n\t\t    \t<div class=\"slick-prev business-power-arrow business-power-arrow-prev\">\n\t\t    \t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.1\" id=\"Layer_1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 511.991 511.991\" style=\"enable-background:new 0 0 511.991 511.991;\" xml:space=\"preserve\" width=\"50px\" height=\"50px\"><g><g>\n\t\t\t\t\t<g>\n\t\t\t\t\t\t<path d=\"M153.433,255.991L381.037,18.033c4.063-4.26,3.917-11.01-0.333-15.083c-4.229-4.073-10.979-3.896-15.083,0.333    L130.954,248.616c-3.937,4.125-3.937,10.625,0,14.75L365.621,508.7c2.104,2.188,4.896,3.292,7.708,3.292    c2.646,0,5.313-0.979,7.375-2.958c4.25-4.073,4.396-10.823,0.333-15.083L153.433,255.991z\" data-original=\"#000000\" class=\"active-path\" data-old_color=\"#000000\" />\n\t\t\t\t\t</g>\n\t\t\t\t\t</g></g> </svg>\n\t\t\t\t</div>";
  var slickArrRight = "\n\t\t\t\t<div class=\"slick-prev business-power-arrow business-power-arrow-next\">\n\t\t\t\t    <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.1\" id=\"Layer_1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 511.995 511.995\" style=\"enable-background:new 0 0 511.995 511.995;\" xml:space=\"preserve\" width=\"50px\" height=\"50px\"><g><g>\n\t\t\t\t\t<g>\n\t\t\t\t\t\t<path d=\"M381.039,248.62L146.373,3.287c-4.083-4.229-10.833-4.417-15.083-0.333c-4.25,4.073-4.396,10.823-0.333,15.083    L358.56,255.995L130.956,493.954c-4.063,4.26-3.917,11.01,0.333,15.083c2.063,1.979,4.729,2.958,7.375,2.958    c2.813,0,5.604-1.104,7.708-3.292L381.039,263.37C384.977,259.245,384.977,252.745,381.039,248.62z\" data-original=\"#000000\" class=\"active-path\" data-old_color=\"#000000\" />\n\t\t\t\t\t</g>\n\t\t\t\t\t</g></g> </svg>\n\t\t\t\t</div>";

  function searchToggler() {
    $("#search-toggler").on('click', function (event) {
      event.preventDefault();
      $(".top-search-form").slideToggle();
      $('.top-search-form .search-field').focus();
    });
  }

  function scrollToTop() {
    jQuery('.scroll-to-top').click(function () {
      jQuery('body,html').animate({
        scrollTop: 0
      }, 500);
    });
  }

  function featureSlider() {
    $('.business-power-feature-slider-init').slick({
      prevArrow: slickArrLeft,
      nextArrow: slickArrRight
    });
  }

  function testimonialSlider() {
    $('.business-power-testimonial').slick();
  }

  var documentReadyCallbackFunc = function documentReadyCallbackFunc() {
    searchToggler();
    featureSlider();
    testimonialSlider();
    scrollToTop();
  };
  /* DOM ready event */


  $(document).ready(documentReadyCallbackFunc);
  $(window).load(function () {
    $("#loader-wrapper").fadeOut(1000);
    $("#loaded").fadeOut(400);
  });
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() >= 500) {
      jQuery('.scroll-to-top').fadeIn(200);
    } else {
      jQuery('.scroll-to-top').fadeOut(200);
    }
  });
}(jQuery);

/***/ }),

/***/ "./dev-assets/js/mobile-menu.js":
/*!**************************************!*\
  !*** ./dev-assets/js/mobile-menu.js ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


// shiftMenu
+function ($) {
  var classToggler = function classToggler(param) {
    this.animation = param.animation, this.toggler = param.toggler, this.className = param.className, this.exceptions = param.exceptions;

    this.init = function () {
      var that = this; // for stop propagation

      var stopToggler = this.implode(this.exceptions);

      if (typeof stopToggler !== 'undefined') {
        $(document).on('click', stopToggler, function (e) {
          e.stopPropagation();
        });
      } // for toggle class


      var toggler = this.implode(this.toggler);

      if (typeof toggler !== 'undefined') {
        $(document).on('click', toggler, function (e) {
          e.stopPropagation();
          e.preventDefault();
          that.toggle();
        });
      }
    }; //class toggler


    this.toggle = function () {
      var selectors = this.implode(this.animation);

      if (typeof selectors !== 'undefined') {
        $(selectors).toggleClass(this.className);
      }
    }; // array selector maker


    this.implode = function (arr, imploder) {
      // checking arg is array or not
      if (!(arr instanceof Array)) {
        return arr;
      } // setting default imploder


      if (typeof imploder == 'undefined') {
        imploder = ',';
      } // making selector


      var data = arr;
      var ele = '';

      for (var j = 0; j < arr.length; j++) {
        ele += arr[j];

        if (j !== arr.length - 1) {
          ele += imploder;
        }
      }

      data = ele;
      return data;
    };
  }; //End mobileMenu


  $.fn.mrMobileMenu = function (config) {
    /* defining default config*/
    var defaultConfig = {
      icon: '#menu-icon',
      closeIcon: true,
      overlay: true
    };
    $.extend(defaultConfig, config);

    if (!$(this.selector).length) {
      console.error('Selected Element not found in DOM (Mobile menu plugin)');
      return this;
    }

    var _this = this;

    var shiftMenu = function shiftMenu() {
      var mobileMenuHTML = $(_this.selector).html(),
          that = this;
      /* constructor function */

      this.init = function () {
        $(document).ready(function () {
          that.createMenu();
          that.addDownArrow();
          that.toggleSubUl();
          that.menuToggler();
          that.addClassOnFirstUl();
        });
      };

      this.createMenu = function () {
        var closeHTML = defaultConfig.closeIcon ? this.closeMenuIcon() : null,
            overlayHTML = defaultConfig.overlay ? this.addOverlay() : null;
        $('body').append('<div class="business-power-mobile-menu" id="business-power-mobile-menu">' + closeHTML + mobileMenuHTML + '</div>' + overlayHTML);
      };

      this.closeMenuIcon = function () {
        return '<div class="business-power-close-wrapper"> <span class="business-power-inner-box" id="business-power-close"><span class="business-power-inner"></span></span> </div>';
      };

      this.addOverlay = function () {
        return '<div class="business-power-mobile-menu-overlay"></div>';
      };

      this.addClassOnFirstUl = function () {
        if ($('#business-power-mobile-menu ul').first().hasClass('menu')) {} else {
          $('#business-power-mobile-menu ul').first().addClass('menu');
        }
      };

      this.addDownArrow = function () {
        var $mobileMenu = $('#business-power-mobile-menu'),
            $hasSubUl = $('#business-power-mobile-menu .menu-item-has-children'),
            haveClassOnLi = $mobileMenu.find('.menu-item-has-children');

        if (haveClassOnLi.length > 0) {
          $hasSubUl.children('a').append('<span class="business-power-arrow-box"><span class="business-power-down-arrow"></span></span>');
        } else {
          $('#business-power-mobile-menu ul li:has(ul)').children('a').append('<span class="business-power-arrow-box"><span class="business-power-down-arrow"></span></span>');
        }
      };

      this.toggleSubUl = function () {
        $(document).on('click', '.business-power-arrow-box', toggleSubMenu);

        function toggleSubMenu(e) {
          e.stopPropagation();
          e.preventDefault();
          $(this).toggleClass('open').parent().next().slideToggle();
        }
      };

      this.menuToggler = function () {
        var menuConfig = {
          animation: ['.business-power-mobile-menu-overlay', '#business-power-mobile-menu', 'body', '#menu-icon'],
          //where class add element
          exceptions: ['#business-power-mobile-menu'],
          //stop propagation
          toggler: ['#menu-icon', '.business-power-mobile-menu-overlay', '#business-power-close'],
          //class toggle on click
          className: 'business-power-menu-open'
        };
        new classToggler(menuConfig).init();
      };
    };
    /* End shiftMenu */

    /* instance of shiftmenu */


    new shiftMenu().init();
  };
  /* End shiftMenu */

}(jQuery);

/***/ }),

/***/ "./dev-assets/js/show-nav-on-screen.js":
/*!*********************************************!*\
  !*** ./dev-assets/js/show-nav-on-screen.js ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

/**
 * Show the Navigation around the screen
 */
+function ($) {
  var ShowNavOnScreen = /*#__PURE__*/function () {
    /** 
     * Initialize the necessory functions on initial load
     */
    function ShowNavOnScreen(config) {
      _classCallCheck(this, ShowNavOnScreen);

      if (!config.selector) {
        console.log('Must pass the selector on config');
        return;
      }

      ;
      this.rightPositionCSS = {
        'left': 'initial',
        'right': '100%'
      };
      this.selector = config.selector;
      this.handleHoverEvent();
      this.windowSize = $(window).width();
    }
    /**
     *  This function update windowSize value 
     *  on window resize event
     *  @returns {void}
     */


    _createClass(ShowNavOnScreen, [{
      key: "updateWindowSize",
      value: function updateWindowSize() {
        var _this = this;

        $(window).on('resize', function () {
          _this.windowSize = $(window).width();
        });
      }
    }, {
      key: "changePosition",

      /**
       * This function change the position of 
       * sub menu to the right 
       * @returns {void}
       */
      value: function changePosition($ele) {
        $ele.css(this.rightPositionCSS);
      }
    }, {
      key: "calSubMenuWidth",

      /** 
       * This function calculate the submenu size and 
       * change the position to visible on screen
       * @uses ['changePosition']
       * @param {object} e - event
       * @returns {void}
       */
      value: function calSubMenuWidth(e) {
        /* Here target element should be a tag */
        var $subMenu = $('+ul', $(e.target));
        /* If we don't have sub menu then return from here */

        if (!$subMenu.length) return;
        var submenuWidth = $subMenu.outerWidth(true);
        var submenuLeftOffset = $subMenu.offset().left;
        var totalSizeOfSubMenu = submenuLeftOffset + submenuWidth;
        /* If submenu goes to out of window then change the position */

        totalSizeOfSubMenu > this.windowSize && this.changePosition($subMenu);
      }
    }, {
      key: "handleHoverEvent",

      /**
       * Listion hover event on selector and call the 
       * calSubMenuWidth functon
       * @uses ['calSubMenuWidth']
       * @returns {void}
       */
      value: function handleHoverEvent() {
        var _this2 = this;

        $(this.selector).on('hover', function (e) {
          _this2.calSubMenuWidth(e);
        });
      }
    }]);

    return ShowNavOnScreen;
  }();

  $(document).ready(function () {
    /**
     *  Configuratin object
     *  Selector should be second level ul which is positioning absolute
     */
    var config = {
      selector: '#site-navigation ul ul li'
    };
    new ShowNavOnScreen(config);
  });
}(jQuery);

/***/ }),

/***/ "./dev-assets/js/skip-link-focus-fix.js":
/*!**********************************************!*\
  !*** ./dev-assets/js/skip-link-focus-fix.js ***!
  \**********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


(function () {
  var isIe = /(trident|msie)/i.test(navigator.userAgent);

  if (isIe && document.getElementById && window.addEventListener) {
    window.addEventListener('hashchange', function () {
      var id = location.hash.substring(1),
          element;

      if (!/^[A-z0-9_-]+$/.test(id)) {
        return;
      }

      element = document.getElementById(id);

      if (element) {
        if (!/^(?:a|select|input|button|textarea)$/i.test(element.tagName)) {
          element.tabIndex = -1;
        }

        element.focus();
      }
    }, false);
  }
})();

/***/ }),

/***/ "./dev-assets/js/starter.js":
/*!**********************************!*\
  !*** ./dev-assets/js/starter.js ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


__webpack_require__(/*! ./show-nav-on-screen */ "./dev-assets/js/show-nav-on-screen.js");

__webpack_require__(/*! ./mobile-menu */ "./dev-assets/js/mobile-menu.js");

__webpack_require__(/*! ./skip-link-focus-fix.js */ "./dev-assets/js/skip-link-focus-fix.js");

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

+function ($) {
  var Starter = /*#__PURE__*/function () {
    function Starter() {
      _classCallCheck(this, Starter);

      this.$body = $('body');
      this.toggleSearchWithOverlay();
      this.mobileMenuInit();
      this.triggerEventEscButtonPress();
      this.closeMobileMenuOnEscKeyPress();
    }

    _createClass(Starter, [{
      key: "mobileMenuInit",
      value: function mobileMenuInit() {
        var $pbMenu = $('#site-navigation');
        $pbMenu.length && $pbMenu.mrMobileMenu();
      }
    }, {
      key: "triggerEventEscButtonPress",
      value: function triggerEventEscButtonPress() {
        document.addEventListener('keydown', function (e) {
          e = e || window.event;

          if (e.keyCode == 27) {
            /* Creating custom event */
            var event = new Event('onEscKeypressed');
            document.dispatchEvent(event);
          }
        });
      }
    }, {
      key: "closeMobileMenuOnEscKeyPress",
      value: function closeMobileMenuOnEscKeyPress() {
        var _this = this;

        document.addEventListener('onEscKeypressed', function () {
          return _this.$body.hasClass('business-power-menu-open') && document.getElementById('menu-icon').click();
        });
      }
    }, {
      key: "toggleSearchWithOverlay",
      value: function toggleSearchWithOverlay() {
        var _this2 = this;

        var $searchToggler = $('.business-power-toggle-search');
        var className = 'business-power-search-opened';
        var $searchInput = $('.business-power-header-search .search-field');
        /* Overlay */

        var overlayClassName = 'business-power-search-overlay';
        var overlayHtml = "<div class=\"".concat(overlayClassName, "\"></div>");
        var delayAmountToFocusInput = 300;

        var toggleSearech = function toggleSearech() {
          _this2.$body.toggleClass(className);

          if (_this2.$body.hasClass(className)) {
            setTimeout(function () {
              var searchInputValue = $searchInput.val();
              $searchInput.val('');
              $searchInput.focus().val(searchInputValue);
            }, delayAmountToFocusInput);

            _this2.$body.prepend(overlayHtml);
          } else $(document).find(".".concat(overlayClassName)).remove();
        };

        $searchToggler.length && $searchToggler.on('click', function () {
          toggleSearech();
        });
        /* Close if Esc key pressed */

        document.addEventListener('onEscKeypressed', function () {
          return $(_this2.$body).hasClass(className) && toggleSearech();
        });
      }
    }]);

    return Starter;
  }();

  $(document).ready(function () {
    new Starter();
  });
}(jQuery);

/***/ })

/******/ });
//# sourceMappingURL=main.js.map
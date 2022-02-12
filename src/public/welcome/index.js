/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/common.js":
/*!********************************!*\
  !*** ./resources/js/common.js ***!
  \********************************/
/***/ (() => {

window.addEventListener('DOMContentLoaded', function () {});

/***/ }),

/***/ "./resources/js/components/burgerMenu.js":
/*!***********************************************!*\
  !*** ./resources/js/components/burgerMenu.js ***!
  \***********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
var initBurgerMenu = function initBurgerMenu() {
  var burgerBtn = document.querySelector(".burger-button");
  var burgerMenu = document.querySelector(".burger-menu");
  var headerEl = document.querySelector(".header");
  var bodyEl = document.body;
  var isOpen = false;
  burgerBtn.addEventListener('click', toggleMenu);
  window.addEventListener('keydown', handleEscape);

  function handleEscape(e) {
    if (!isOpen) return;

    if (e.key === 'Escape') {
      e.preventDefault();
      closeMenu();
    }
  }

  function toggleMenu() {
    if (isOpen) {
      closeMenu();
    } else {
      openMenu();
    }
  }

  function openMenu() {
    burgerBtn.classList.toggle("active");
    burgerMenu.classList.toggle("active");
    headerEl.classList.add("open-menu");
    bodyEl.classList.add("no-scroll");
    isOpen = true;
  }

  function closeMenu() {
    var hasActiveBurgerBtn = burgerMenu.classList.contains('active');
    var hasActiveBurgerMenu = burgerMenu.classList.contains('active');
    var hasActiveHeader = headerEl.classList.contains('open-menu');
    var hasActiveBody = bodyEl.classList.contains('no-scroll');
    if (hasActiveBurgerBtn) burgerBtn.classList.remove("active");
    if (hasActiveBurgerMenu) burgerMenu.classList.remove("active");
    if (hasActiveHeader) headerEl.classList.remove("open-menu");
    if (hasActiveBody) bodyEl.classList.remove("no-scroll");
    isOpen = false;
  }
};

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (initBurgerMenu);

/***/ }),

/***/ "./resources/js/components/header.js":
/*!*******************************************!*\
  !*** ./resources/js/components/header.js ***!
  \*******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
function _slicedToArray(arr, i) { return _arrayWithHoles(arr) || _iterableToArrayLimit(arr, i) || _unsupportedIterableToArray(arr, i) || _nonIterableRest(); }

function _nonIterableRest() { throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

function _iterableToArrayLimit(arr, i) { var _i = arr == null ? null : typeof Symbol !== "undefined" && arr[Symbol.iterator] || arr["@@iterator"]; if (_i == null) return; var _arr = []; var _n = true; var _d = false; var _s, _e; try { for (_i = _i.call(arr); !(_n = (_s = _i.next()).done); _n = true) { _arr.push(_s.value); if (i && _arr.length === i) break; } } catch (err) { _d = true; _e = err; } finally { try { if (!_n && _i["return"] != null) _i["return"](); } finally { if (_d) throw _e; } } return _arr; }

function _arrayWithHoles(arr) { if (Array.isArray(arr)) return arr; }

var initHeader = function initHeader() {
  var headerEl = document.querySelector(".header");
  var firstSectionEl = document.querySelector(".first-section");
  var observerOptions = {
    threshold: 0
  };
  var observer = new IntersectionObserver(intersectionCallback, observerOptions);

  function handleChangeColor(isIntersecting) {
    if (isIntersecting) {
      headerEl.classList.remove("scrolled");
    } else {
      headerEl.classList.add("scrolled");
    }
  }

  ;

  function intersectionCallback(_ref) {
    var _ref2 = _slicedToArray(_ref, 1),
        entry = _ref2[0];

    handleChangeColor(entry.isIntersecting);
  }

  ;
  observer.observe(firstSectionEl);
};

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (initHeader);

/***/ }),

/***/ "./resources/js/components/modal.js":
/*!******************************************!*\
  !*** ./resources/js/components/modal.js ***!
  \******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it["return"] != null) it["return"](); } finally { if (didErr) throw err; } } }; }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

var initModals = function initModals() {
  var modals = document.querySelectorAll(".modal");
  var modalLinks = document.querySelectorAll("[data-modal]");

  var _iterator = _createForOfIteratorHelper(modalLinks),
      _step;

  try {
    var _loop = function _loop() {
      var modalLink = _step.value;
      modalLink.addEventListener('click', function (e) {
        e.preventDefault();
        var modalId = modalLink.dataset.modal;
        if (!modalId) return;
        modals.forEach(function (modal) {
          console.log(modal.id);
          if (modal.id != modalId) return;
          openModal(modal);
        });
      });
    };

    for (_iterator.s(); !(_step = _iterator.n()).done;) {
      _loop();
    }
  } catch (err) {
    _iterator.e(err);
  } finally {
    _iterator.f();
  }

  function openModal(modal) {
    modal.classList.add('active');
    document.body.classList.add('no-scroll');
  }

  var _iterator2 = _createForOfIteratorHelper(modals),
      _step2;

  try {
    for (_iterator2.s(); !(_step2 = _iterator2.n()).done;) {
      var modal = _step2.value;
      initModal(modal);
    }
  } catch (err) {
    _iterator2.e(err);
  } finally {
    _iterator2.f();
  }
};

var initModal = function initModal(modalEl) {
  if (!modalEl) return;
  var closeBtn = modalEl.querySelector('.modal__close');
  var bodyEl = document.body;
  closeBtn.addEventListener('click', closeModal);
  window.addEventListener('keydown', handleEscape);

  function handleEscape(e) {
    var isOpenModal = modalEl.classList.contains('active');

    if (e.key === 'Escape' && isOpenModal) {
      e.preventDefault();
      closeModal();
    }
  }

  function closeModal() {
    var isOpenModal = modalEl.classList.contains('active');
    var isNoScroll = bodyEl.classList.contains('no-scroll');
    if (isOpenModal) modalEl.classList.remove('active');
    if (isNoScroll) bodyEl.classList.remove('no-scroll');
  }
};

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (initModals);

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be in strict mode.
(() => {
"use strict";
/*!******************************************!*\
  !*** ./resources/views/welcome/index.js ***!
  \******************************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _js_common__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../js/common */ "./resources/js/common.js");
/* harmony import */ var _js_common__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_js_common__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _js_components_header__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../js/components/header */ "./resources/js/components/header.js");
/* harmony import */ var _js_components_burgerMenu__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../js/components/burgerMenu */ "./resources/js/components/burgerMenu.js");
/* harmony import */ var _js_components_modal__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../js/components/modal */ "./resources/js/components/modal.js");
/* import common js */




/* Your JS Code goes here */

window.addEventListener("DOMContentLoaded", function () {
  (0,_js_components_header__WEBPACK_IMPORTED_MODULE_1__["default"])();
  (0,_js_components_burgerMenu__WEBPACK_IMPORTED_MODULE_2__["default"])();
  (0,_js_components_modal__WEBPACK_IMPORTED_MODULE_3__["default"])();
});
window.addEventListener("load", function () {});
})();

/******/ })()
;
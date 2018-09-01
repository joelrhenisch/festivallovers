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
/******/ 	__webpack_require__.p = "/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 66);
/******/ })
/************************************************************************/
/******/ ({

/***/ 66:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(67);


/***/ }),

/***/ 67:
/***/ (function(module, exports) {

// Login-Panel ein- und ausblenden
$("#ticket-black").click(function () {
    // Wenn auf Panel geklickt wird, soll dieses eingeblendet bleiben.
    // (#login-black ist ein untergeordnetes Element von #ticket-black, darum folgende 3 Zeilen
    $("#login-black").click(function () {
        return false;
    });
    $("#login-black").toggle();
});

// Auf Startseite gehen
$("#home-black").click(function () {
    window.location = $(this).find("a:first").attr("href");
    return false;
});
// Auf Ticketseite gehen
$("#go-to-ticket-black").click(function () {
    window.location = $(this).find("a:first").attr("href");
    return false;
});

$("#nav__btn-menu-black").click(function () {
    // Scrolling aktivieren
    var html = document.documentElement;
    html.classList.remove('disable-scrolling');
    // normale Navi wieder ausblenden
    $("#nav-normal").removeClass('d-none');
    $("#nav-normal").addClass('d-show');
    // Schwarzes Menufenster ausblenden
    $("#navigation__menu-neg").removeClass('d-show');
    $("#navigation__menu-neg").addClass('d-none');
});

// Menupunkte bei schwarzem Overlay verlinken
$(".nav__list-element").click(function () {
    window.location = $(this).find("a:first").attr("href");
    return false;
});

/***/ })

/******/ });
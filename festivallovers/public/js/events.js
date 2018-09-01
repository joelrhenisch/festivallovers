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
/******/ 	return __webpack_require__(__webpack_require__.s = 72);
/******/ })
/************************************************************************/
/******/ ({

/***/ 72:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(73);


/***/ }),

/***/ 73:
/***/ (function(module, exports) {

$(document).ready(function () {
    // Filter zurücksetzen
    $("#events-result-reset").click(function () {
        $("#jazz").removeClass("--darken-yellow");
        $("#hiphop").removeClass("--darken-pink");
        $("#indie").removeClass("--darken-mint");
        $("#poprock").removeClass("--darken-blue");
        $("#electronic").removeClass("--darken-violet");
    });

    // MOBILE
    // zum Start Icon von Liste auf Opacity 0.5 setzen
    $("#icon-liste").addClass('opacity-50');

    // DESKTOP
    // events: Zwischen Kacheln und Liste switchen - Text der jeweiligen Ansicht bold setzen
    $("#btn__events-kacheln").click(function () {
        $("#eventslist_kacheln").show();
        $("#eventslist_liste").hide();
        $("#text-kacheln").addClass('bold');
        $("#text-liste").removeClass('bold');
    });
    $("#btn__events-liste").click(function () {
        $("#eventslist_liste").show();
        $("#eventslist_kacheln").hide();
        $("#text-liste").addClass('bold');
        $("#text-kacheln").removeClass('bold');
    });

    // events: Hover auf Kacheln-/Listensymbol
    $("#btn__events-kacheln").click(function () {
        $("#eventslist_kacheln").show();
        $("#eventslist_liste").hide();
        $("#text-kacheln").addClass('bold');
        $("#text-liste").removeClass('bold');
    });
    $("#btn__events-liste").click(function () {
        $("#eventslist_liste").show();
        $("#eventslist_kacheln").hide();
        $("#text-liste").addClass('bold');
        $("#text-kacheln").removeClass('bold');
    });

    // MOBILE
    // events: Zwischen Kacheln und Liste switchen - Icon der passiven Ansicht auf Opacity 0.5 setzen
    $("#btn__events-kacheln-sm").click(function () {
        $("#eventslist_kacheln-sm").show();
        $("#eventslist_liste-sm").hide();
        $("#icon-liste").addClass('opacity-50');
        $("#icon-liste").removeClass('opacity-100');
        $("#icon-kacheln").addClass('opacity-100');
        $("#icon-kacheln").removeClass('opacity-50');
    });
    $("#btn__events-liste-sm").click(function () {
        $("#eventslist_liste-sm").show();
        $("#eventslist_kacheln-sm").hide();
        $("#icon-liste").removeClass('opacity-50');
        $("#icon-liste").addClass('opacity-100');
        $("#icon-kacheln").addClass('opacity-50');
        $("#icon-kacheln").removeClass('opacity-100');
    });

    // Zurück zu den Filtern
    $("#events-filter-show").click(function () {
        window.location = $(this).find("a:first").attr("href");
        return false;
    });

    // Zum jeweiligen Event weiterverlinkt werden (Kacheln-Ansicht)
    $(".img__container").click(function () {
        window.location = $(this).find("a:first").attr("href");
        return false;
    });

    // Zum jeweiligen Event weiterverlinkt werden (Listen-Ansicht)
    $(".eventslist__row").click(function () {
        window.location = $(this).find("a:first").attr("href");
        return false;
    });
});

/***/ })

/******/ });
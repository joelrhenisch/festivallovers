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
/******/ 	return __webpack_require__(__webpack_require__.s = 60);
/******/ })
/************************************************************************/
/******/ ({

/***/ 60:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(61);


/***/ }),

/***/ 61:
/***/ (function(module, exports) {

// Filter für Mobile einblenden
$("#filter-sm").click(function () {
    window.location = $(this).find("a:first").attr("href");
    return false;
});
// Button zu Events verlinken. (Sucht erstes a-Element und verwendet das href-Attribut davon)
$("#result-show-lg").click(function () {
    window.location = $(this).find("a:first").attr("href");
    return false;
});
// Filter zurücksetzen
$("#result-reset-lg").click(function () {
    $("#jazz").removeClass("--darken-yellow");
    $("#hiphop").removeClass("--darken-pink");
    $("#indie").removeClass("--darken-mint");
    $("#poprock").removeClass("--darken-blue");
    $("#electronic").removeClass("--darken-violet");
});
// einzelne Artikel aufklappen
$("#article-1-show").click(function () {
    $("#article-1").toggle();
});
$("#article-2-show").click(function () {
    $("#article-2").toggle();
});
$("#article-3-show").click(function () {
    $("#article-3").toggle();
});
$("#article-4-show").click(function () {
    $("#article-4").toggle();
});
$("#article-5-show").click(function () {
    $("#article-5").toggle();
});
$("#article-6-show").click(function () {
    $("#article-6").toggle();
});
// weitere Artikel aufklappen via Button, unterhalb von letztem Artikel
$("#article__btn-show-more").click(function () {
    $("#article__container").show();
    $("#article__btn-show-more").hide();
});
// weitere News einblenden via Button, unterhalb von letzter News
$("#news__btn-show-more").click(function () {
    $("#news-show-more").show();
    $("#hide-himself").hide();
});

/***/ })

/******/ });
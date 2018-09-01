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
/******/ 	return __webpack_require__(__webpack_require__.s = 70);
/******/ })
/************************************************************************/
/******/ ({

/***/ 70:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(71);


/***/ }),

/***/ 71:
/***/ (function(module, exports) {

$(document).ready(function () {
    // Zu Tickets-Kaufen
    $(".go-to-ticketbuy").click(function () {
        window.location = $(this).find("a:first").attr("href");
        return false;
    });
    // Anreise & Rückreise (Akkordeon) ein- und ausblenden
    $("#anreise").click(function () {
        $("#container__anreiserueckreise").toggle();
    });
});

// Line Up von Freitag ein- und ausblenden
// DESKTOP
$("#tabs__btnfreitag-lg").on("click", picture);

function picture() {
    if ($('#zielbox').is(':empty')) {
        var pic = document.createElement('img');
        pic.setAttribute("src", "images/lineup_detailsite.png");
        pic.classList.add('img-183prozent');
        document.getElementById("zielbox").appendChild(pic);
        document.getElementById('tabs__btnfreitag').classList.add('tabs__btn--active', '.tabs__imagebox');
    } else {
        var list = document.getElementById("zielbox");
        list.removeChild(list.childNodes[0]);
        document.getElementById('tabs__btnfreitag').classList.add('tabs__btn');
        document.getElementById('tabs__btnfreitag').classList.remove('tabs__btn--active');
    }
}
// MOBILE
$("#tabs__btnfreitag-sm").on("click", picturesm);
function picturesm() {
    if ($('#zielbox-sm').is(':empty')) {
        var pic = document.createElement('img');
        pic.setAttribute("src", "images/lineup_detailsite.png");
        pic.classList.add('img-183prozent');
        document.getElementById("zielbox-sm").appendChild(pic);
        document.getElementById('tabs__btnfreitag').classList.add('tabs__btn--active', '.tabs__imagebox');
    } else {
        var list = document.getElementById("zielbox-sm");
        list.removeChild(list.childNodes[0]);
        document.getElementById('tabs__btnfreitag').classList.add('tabs__btn');
        document.getElementById('tabs__btnfreitag').classList.remove('tabs__btn--active');
    }
}

/***/ })

/******/ });
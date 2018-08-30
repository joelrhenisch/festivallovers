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
/******/ 	return __webpack_require__(__webpack_require__.s = 54);
/******/ })
/************************************************************************/
/******/ ({

/***/ 54:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(55);


/***/ }),

/***/ 55:
/***/ (function(module, exports) {

// Zu Tickets-Kaufen
$(".go-to-ticketbuy").click(function () {
    window.location = $(this).find("a:first").attr("href");
    return false;
});

// Anreise & Rückreise (Akkordeon) ein- und ausblenden
$(document).ready(function () {
    $("#anreise").click(function () {
        $("#container__anreiserueckreise").toggle();
    });
});

// Line Up von Freitag ein- und ausblenden
// DESKTOP
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

// Google Maps API wird ausgeführt und eine Map erstellt
function initMap() {
    // styling Google Maps
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 16,
        center: {
            lat: 47.4431335,
            lng: 9.4695168
        },
        styles: [{
            "elementType": "geometry",
            "stylers": [{
                "color": "#f5f5f5"
            }]
        }, {
            "elementType": "labels.icon",
            "stylers": [{
                "visibility": "off"
            }]
        }, {
            "elementType": "labels.text.fill",
            "stylers": [{
                "color": "#616161"
            }]
        }, {
            "elementType": "labels.text.stroke",
            "stylers": [{
                "color": "#f5f5f5"
            }]
        }, {
            "featureType": "administrative.land_parcel",
            "elementType": "labels.text.fill",
            "stylers": [{
                "color": "#bdbdbd"
            }]
        }, {
            "featureType": "poi",
            "elementType": "geometry",
            "stylers": [{
                "color": "#eeeeee"
            }]
        }, {
            "featureType": "poi",
            "elementType": "labels.text.fill",
            "stylers": [{
                "color": "#757575"
            }]
        }, {
            "featureType": "poi.park",
            "elementType": "geometry",
            "stylers": [{
                "color": "#e5e5e5"
            }]
        }, {
            "featureType": "poi.park",
            "elementType": "labels.text.fill",
            "stylers": [{
                "color": "#9e9e9e"
            }]
        }, {
            "featureType": "road",
            "elementType": "geometry",
            "stylers": [{
                "color": "#ffffff"
            }]
        }, {
            "featureType": "road.arterial",
            "elementType": "labels.text.fill",
            "stylers": [{
                "color": "#757575"
            }]
        }, {
            "featureType": "road.highway",
            "elementType": "geometry",
            "stylers": [{
                "color": "#dadada"
            }]
        }, {
            "featureType": "road.highway",
            "elementType": "labels.text.fill",
            "stylers": [{
                "color": "#616161"
            }]
        }, {
            "featureType": "road.local",
            "elementType": "labels.text.fill",
            "stylers": [{
                "color": "#9e9e9e"
            }]
        }, {
            "featureType": "transit.line",
            "elementType": "geometry",
            "stylers": [{
                "color": "#e5e5e5"
            }]
        }, {
            "featureType": "transit.station",
            "elementType": "geometry",
            "stylers": [{
                "color": "#eeeeee"
            }]
        }, {
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [{
                "color": "#c9c9c9"
            }]
        }, {
            "featureType": "water",
            "elementType": "labels.text.fill",
            "stylers": [{
                "color": "#9e9e9e"
            }]
        }]
    });
    // Füge Marker der Map hinzu
    var marker = new google.maps.Marker({
        position: { lat: 47.444242, lng: 9.469508 },
        map: map
    });
}

/***/ })

/******/ });
!function(e){var n={};function t(o){if(n[o])return n[o].exports;var r=n[o]={i:o,l:!1,exports:{}};return e[o].call(r.exports,r,r.exports,t),r.l=!0,r.exports}t.m=e,t.c=n,t.d=function(e,n,o){t.o(e,n)||Object.defineProperty(e,n,{configurable:!1,enumerable:!0,get:o})},t.n=function(e){var n=e&&e.__esModule?function(){return e.default}:function(){return e};return t.d(n,"a",n),n},t.o=function(e,n){return Object.prototype.hasOwnProperty.call(e,n)},t.p="/",t(t.s=56)}({56:function(e,n,t){e.exports=t(57)},57:function(e,n){$(function(){$("#jazz").click(function(){$(this).toggleClass("--darken-yellow")}),$("#hiphop").click(function(){$(this).toggleClass("--darken-pink")}),$("#indie").click(function(){$(this).toggleClass("--darken-mint")}),$("#poprock").click(function(){$(this).toggleClass("--darken-blue")}),$("#electronic").click(function(){$(this).toggleClass("--darken-violet")}),$("#result-reset").click(function(){$("#jazz").removeClass("--darken-yellow"),$("#hiphop").removeClass("--darken-pink"),$("#indie").removeClass("--darken-mint"),$("#poprock").removeClass("--darken-blue"),$("#electronic").removeClass("--darken-violet")})})}});
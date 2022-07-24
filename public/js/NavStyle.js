/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**********************************!*\
  !*** ./resources/js/NavStyle.js ***!
  \**********************************/
$(function () {
  var ham = $('.home-btn');
  ham.on('click', function () {
    ham.toggleClass('active');
  });
  $('.content').on('click', function () {
    if (ham.hasClass('active')) {
      ham.removeClass('active');
    }
  });
});
/******/ })()
;
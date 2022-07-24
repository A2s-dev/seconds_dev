/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*********************************!*\
  !*** ./resources/js/NavOpen.js ***!
  \*********************************/
$(function () {
  var nav = $('#menu');
  $('#nav-btn').on('click', function () {
    nav.toggleClass('appear');
  });
  $('.content').on('click', function () {
    if (nav.hasClass('appear')) {
      nav.removeClass('appear');
    }
  });
});
/******/ })()
;
/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**********************************!*\
  !*** ./resources/js/StrCount.js ***!
  \**********************************/
$(function () {
  $('.edit-content').on('keydown keyup keypress change', function () {
    var str = $(this).val();
    str = str.replace(/(\n|\r)/g, "");
    str = str.replace(/( |　)/g, "");
    var strCount = str.length;
    $('#js_count').text(strCount);
  });
});
/******/ })()
;
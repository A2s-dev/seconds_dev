/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**************************************!*\
  !*** ./resources/js/DisableEnter.js ***!
  \**************************************/
// Suppressing the enter key
$("input[name = edit_title]").on('keypress', function (e) {
  if (e.which === 13) {
    return false;
  }
});
/******/ })()
;
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
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 94);
/******/ })
/************************************************************************/
/******/ ({

/***/ 94:
/***/ (function(module, exports) {

eval("// Tabs\n\n(function ($) {\n\t$(document).ready(function () {\n\t\tvar titleWrap = '.wp-block-themepunchblocks-tpc-tabs-tab-title-wrap';\n\t\tvar contentWrap = '.wp-block-themepunchblocks-tpc-tabs-tab-content-wrap';\n\t\t$(document).on('click', '.wp-block-themepunchblocks-tpc-tabs-tab-title-wrap', function () {\n\t\t\tvar parent = $(this).closest('.wp-block-themepunchblocks-tpc-tabs');\n\t\t\tvar contentWrapEl = parent.find('.wp-block-themepunchblocks-tpc-tabs-tab-content-wrap');\n\t\t\tvar activeStyle = parent.find('.wp-block-themepunchblocks-tpc-tabs-tab-title-wrap.active').attr('style');\n\t\t\tvar defaultStyle = parent.find('.wp-block-themepunchblocks-tpc-tabs-tab-title-wrap:not(.active)').attr('style');\n\n\t\t\t$(this).siblings(titleWrap).removeClass('active').attr('style', defaultStyle);\n\t\t\t$(this).addClass('active').attr('style', activeStyle);\n\n\t\t\tcontentWrapEl.removeClass('active').addClass('tpc-hide');\n\t\t\tparent.find(contentWrap + ':nth-of-type(' + ($(this).index() + 1) + ')').addClass('active').removeClass('tpc-hide');\n\t\t});\n\t});\n})(jQuery);//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiOTQuanMiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9ibG9ja3MvZnJvbnRlbmQuanM/ZDJkNSJdLCJzb3VyY2VzQ29udGVudCI6WyIvLyBUYWJzXG5cbihmdW5jdGlvbiAoJCkge1xuXHQkKGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbiAoKSB7XG5cdFx0dmFyIHRpdGxlV3JhcCA9ICcud3AtYmxvY2stdGhlbWVwdW5jaGJsb2Nrcy10cGMtdGFicy10YWItdGl0bGUtd3JhcCc7XG5cdFx0dmFyIGNvbnRlbnRXcmFwID0gJy53cC1ibG9jay10aGVtZXB1bmNoYmxvY2tzLXRwYy10YWJzLXRhYi1jb250ZW50LXdyYXAnO1xuXHRcdCQoZG9jdW1lbnQpLm9uKCdjbGljaycsICcud3AtYmxvY2stdGhlbWVwdW5jaGJsb2Nrcy10cGMtdGFicy10YWItdGl0bGUtd3JhcCcsIGZ1bmN0aW9uICgpIHtcblx0XHRcdHZhciBwYXJlbnQgPSAkKHRoaXMpLmNsb3Nlc3QoJy53cC1ibG9jay10aGVtZXB1bmNoYmxvY2tzLXRwYy10YWJzJyk7XG5cdFx0XHR2YXIgY29udGVudFdyYXBFbCA9IHBhcmVudC5maW5kKCcud3AtYmxvY2stdGhlbWVwdW5jaGJsb2Nrcy10cGMtdGFicy10YWItY29udGVudC13cmFwJyk7XG5cdFx0XHR2YXIgYWN0aXZlU3R5bGUgPSBwYXJlbnQuZmluZCgnLndwLWJsb2NrLXRoZW1lcHVuY2hibG9ja3MtdHBjLXRhYnMtdGFiLXRpdGxlLXdyYXAuYWN0aXZlJykuYXR0cignc3R5bGUnKTtcblx0XHRcdHZhciBkZWZhdWx0U3R5bGUgPSBwYXJlbnQuZmluZCgnLndwLWJsb2NrLXRoZW1lcHVuY2hibG9ja3MtdHBjLXRhYnMtdGFiLXRpdGxlLXdyYXA6bm90KC5hY3RpdmUpJykuYXR0cignc3R5bGUnKTtcblxuXHRcdFx0JCh0aGlzKS5zaWJsaW5ncyh0aXRsZVdyYXApLnJlbW92ZUNsYXNzKCdhY3RpdmUnKS5hdHRyKCdzdHlsZScsIGRlZmF1bHRTdHlsZSk7XG5cdFx0XHQkKHRoaXMpLmFkZENsYXNzKCdhY3RpdmUnKS5hdHRyKCdzdHlsZScsIGFjdGl2ZVN0eWxlKTtcblxuXHRcdFx0Y29udGVudFdyYXBFbC5yZW1vdmVDbGFzcygnYWN0aXZlJykuYWRkQ2xhc3MoJ3RwYy1oaWRlJyk7XG5cdFx0XHRwYXJlbnQuZmluZChjb250ZW50V3JhcCArICc6bnRoLW9mLXR5cGUoJyArICgkKHRoaXMpLmluZGV4KCkgKyAxKSArICcpJykuYWRkQ2xhc3MoJ2FjdGl2ZScpLnJlbW92ZUNsYXNzKCd0cGMtaGlkZScpO1xuXHRcdH0pO1xuXHR9KTtcbn0pKGpRdWVyeSk7XG5cblxuLy8vLy8vLy8vLy8vLy8vLy8vXG4vLyBXRUJQQUNLIEZPT1RFUlxuLy8gLi9ibG9ja3MvZnJvbnRlbmQuanNcbi8vIG1vZHVsZSBpZCA9IDk0XG4vLyBtb2R1bGUgY2h1bmtzID0gMSJdLCJtYXBwaW5ncyI6IkFBQUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSIsInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///94\n");

/***/ })

/******/ });
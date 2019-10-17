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
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
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
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/* Importando JavaScript */
__webpack_require__(/*! ./modal */ "./resources/js/modal.js");

__webpack_require__(/*! ./cadastro */ "./resources/js/cadastro.js");

__webpack_require__(/*! ./menu */ "./resources/js/menu.js"); // require('./curriculo'); com problema


__webpack_require__(/*! ./requisitos */ "./resources/js/requisitos.js");

__webpack_require__(/*! ./vagas */ "./resources/js/vagas.js");

/***/ }),

/***/ "./resources/js/cadastro.js":
/*!**********************************!*\
  !*** ./resources/js/cadastro.js ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// let senha = document.getElementById("senha");
// let confirmar_senha = document.getElementById("confirmar_senha");
//
// function validarSenha(){
//   if(senha.value != confirmar_senha.value) {
//     confirmar_senha.setCustomValidity("Senhas diferentes!");
//   } else {
//     confirmar_senha.setCustomValidity('');
//   }
// }
//
// // senha.onchange = validarSenha;
// // confirmar_senha.onkeyup = validarSenha;

/***/ }),

/***/ "./resources/js/menu.js":
/*!******************************!*\
  !*** ./resources/js/menu.js ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

var menu = document.querySelector('#menu-burg');
var menuCollapse = document.querySelector('#menu-collapse');
var menuItems = document.querySelectorAll('.menu-nav-list-link-item');
var menuBarras = document.querySelector('.menu-nav-burg');

if (menu) {
  menu.addEventListener('click', function () {
    menuCollapse.classList.toggle('is-active');
    menuBarras.classList.toggle('is-active');

    if (menuCollapse.classList.contains('is-active')) {
      menuItems.forEach(function (elem, idx) {
        setTimeout(function () {
          elem.classList.add('is-active');
        }, idx * 250);
      });
    } else {
      menuItems.forEach(function (elem) {
        elem.classList.remove('is-active');
      });
    }
  });
}

/***/ }),

/***/ "./resources/js/modal.js":
/*!*******************************!*\
  !*** ./resources/js/modal.js ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports) {

var modal = document.getElementById("modal-cortar");
var abrirModal = document.getElementById("abrirModal");
var fecharModal = document.getElementById("modal-fechar");
abrirModal.addEventListener('click', openModal);
fecharModal.addEventListener('click', closeModal);
window.addEventListener('click', clickOutside);

function openModal() {
  modal.style.display = 'block';
}

function closeModal() {
  modal.style.display = 'none';
}

function clickOutside(e) {
  if (e.target == modal) {
    modal.style.display = 'none';
  }
}

/***/ }),

/***/ "./resources/js/requisitos.js":
/*!************************************!*\
  !*** ./resources/js/requisitos.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports) {

var listCurriculoParent = document.querySelectorAll('.js-curriculo-parent');
var listCurriculoAll = document.querySelectorAll('.js-curriculo-list');
listCurriculoParent.forEach(function (elem, idx) {
  var listCurriculoText = elem.querySelector('.js-curriculo-text');
  var listCurriculo = elem.querySelector('.js-curriculo-list');
  var listCurriculoContent = elem.querySelector('.js-curriculo-list-content');
  var listCurriculoItem = elem.querySelectorAll('.js-curriculo-list-item');
  listCurriculoText.addEventListener('click', function () {
    if (listCurriculo.classList.contains('is-active')) {
      listCurriculo.classList.remove('is-active');
      listCurriculo.style.height = '0';
    } else {
      listCurriculo.classList.add('is-active');
      var height = listCurriculoContent.offsetHeight;
      listCurriculo.style.height = "".concat(height + 40, "px");
    }

    listCurriculoAll.forEach(function (elem, idx) {
      if (elem !== listCurriculo && elem.classList.contains('is-active')) {
        elem.classList.remove('is-active');
        listCurriculo.style.height = '0';
      }
    });
  });
  listCurriculoItem.forEach(function (elem, idx) {
    elem.addEventListener('click', function () {
      var dataValue = elem.getAttribute('data-value');
      var dataText = elem.innerHTML;
      listCurriculoText.innerHTML = "".concat(dataText);
      listCurriculo.classList.remove('is-active');
      listCurriculo.style.height = '0';
    });
  });
});

/***/ }),

/***/ "./resources/js/vagas.js":
/*!*******************************!*\
  !*** ./resources/js/vagas.js ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports) {



/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /Applications/MAMP/htdocs/new-vision/aGoodFit/resources/js/app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! /Applications/MAMP/htdocs/new-vision/aGoodFit/resources/sass/app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });
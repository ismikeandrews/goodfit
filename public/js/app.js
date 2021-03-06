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
var containerCadastro = document.querySelector('.container-cadastro');
var containerCurriculo = document.querySelector('.container-curriculo');
var containerRequisitos = document.querySelector('.container-requisitos');
var containerEndereco = document.querySelector('.container-endereco');
var containerModal = document.querySelector('.container-modal');
var containerVagas = document.querySelector('.container-vagas');
var containerPerfil = document.querySelector('.container-perfil');
var containerCadastroVaga = document.querySelector('.container-cadastro-vaga');

__webpack_require__(/*! ./menu */ "./resources/js/menu.js");

if (containerCadastro) {
  __webpack_require__(/*! ./cadastro */ "./resources/js/cadastro.js");
}

if (containerCurriculo) {
  __webpack_require__(/*! ./curriculo */ "./resources/js/curriculo.js");
}

if (containerPerfil || containerCadastro) {
  __webpack_require__(/*! ./foto-upload */ "./resources/js/foto-upload.js");
}

if (containerModal) {
  __webpack_require__(/*! ./modal */ "./resources/js/modal.js");
}

if (containerEndereco || containerCadastroVaga) {
  __webpack_require__(/*! ./busca-cep */ "./resources/js/busca-cep.js");
}

if (containerRequisitos) {
  __webpack_require__(/*! ./requisitos */ "./resources/js/requisitos.js");
}

if (containerVagas) {
  __webpack_require__(/*! ./vagas */ "./resources/js/vagas.js");

  __webpack_require__(/*! ./slide */ "./resources/js/slide.js");
}

/***/ }),

/***/ "./resources/js/busca-cep.js":
/*!***********************************!*\
  !*** ./resources/js/busca-cep.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
  $("#cep").focusout(function () {
    var cep = $("#cep").val();
    cep = cep.replace("-", "");
    var StringUrl = "https://viacep.com.br/ws/" + cep + "/json/";
    $.ajax({
      url: StringUrl,
      type: "get",
      dataType: "json",
      success: function success(data) {
        if (erro = true) {
          console.log("Cep não encontrado");
        }

        console.log(data);
        $("#cidade").val(data.localidade);
        $("#logradouro").val(data.logradouro);
        $("#bairro").val(data.bairro);
        $("#estado").val(data.uf);
      },
      erro: function (_erro) {
        function erro(_x) {
          return _erro.apply(this, arguments);
        }

        erro.toString = function () {
          return _erro.toString();
        };

        return erro;
      }(function (erro) {
        console.log(erro);
      })
    });
  });
});

/***/ }),

/***/ "./resources/js/cadastro.js":
/*!**********************************!*\
  !*** ./resources/js/cadastro.js ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports) {

var btnNext = document.querySelector('#btn-next');
var btnPrev = document.querySelector('#btn-prev');
var counterCadastro = document.querySelectorAll('.counter-etapas-etapa');
var contents = document.querySelectorAll('.counter-etapas-content');
var idx = 0;
var contentsLength = contents.length;
btnNext.addEventListener('click', function (e) {
  if (idx + 1 < contentsLength) {
    e.preventDefault();
    contents[idx].classList.remove('is-active');
    btnPrev.classList.remove('is-disable');
    idx++;
    contents[idx].classList.add('is-active');
    counterCadastro[idx].classList.remove('is-disable');

    if (idx + 1 === contentsLength) {
      btnNext.innerHTML = 'Concluir';
      btnNext.type = 'submit';
    }
  }
});
btnPrev.addEventListener('click', function (e) {
  if (idx - 1 >= 0) {
    e.preventDefault();
    btnNext.innerHTML = 'Avançar';
    counterCadastro[idx].classList.add('is-disable');
    contents[idx].classList.remove('is-active');
    idx--;
    contents[idx].classList.add('is-active');

    if (idx == 0) {
      btnPrev.classList.add('is-disable');
    }
  }
});

/***/ }),

/***/ "./resources/js/curriculo.js":
/*!***********************************!*\
  !*** ./resources/js/curriculo.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

/* Curriculo - Submenu etapas */
var submenu = document.querySelectorAll('.curriculo-etapa1-submenu-item');
var content = document.querySelectorAll('.curriculo-etapa1-content');
submenu.forEach(function (elem, idx) {
  submenu[idx].addEventListener('click', function () {
    if (submenu[0].classList.contains('is-active')) {
      submenu[0].classList.remove('is-active');
      submenu[1].classList.add('is-active');
      content[0].classList.remove('is-active');
      content[1].classList.add('is-active');
    } else {
      submenu.forEach(function (elem) {
        submenu[0].classList.add('is-active');
        submenu[1].classList.remove('is-active');
        content[0].classList.add('is-active');
        content[1].classList.remove('is-active');
      });
    }
  });
});
/* Curriculo - Botões */

var etapa = document.querySelectorAll('.counter-etapas-etapa');
var etapaContent = document.querySelectorAll('.counter-etapas-content');
var btnAvancar = document.querySelector('#btn-avancar');
var btnVoltar = document.querySelector('#btn-voltar');
var linha = 0;
var conteudo = 0;
/* Curriculo - Botão Avançar */

btnAvancar.addEventListener('click', function (e) {
  if (!(etapa.length - 1 === linha)) {
    e.preventDefault();
    etapa[linha + 1].classList.remove('is-disable');
    etapaContent[conteudo].classList.remove('is-active');
    linha += 1;
    conteudo += 1;
    etapaContent[conteudo].classList.add('is-active');
  }

  if (etapa.length - 1 === linha) {
    btnAvancar.innerHTML = 'Concluir';
    btnAvancar.type = 'submit';
  }

  if (linha > 0) {
    btnVoltar.classList.remove('is-disable');
  }

  window.scroll(0, 0);
});
/* Curriculo - Botão Voltar */

btnVoltar.addEventListener('click', function () {
  if (etapa.length - 1 === linha) {
    btnAvancar.innerHTML = 'Avançar';
  }

  if (linha > 0) {
    etapa[linha].classList.add('is-disable');
    etapaContent[conteudo].classList.remove('is-active');
    linha -= 1;
    conteudo -= 1;
    etapaContent[conteudo].classList.add('is-active');
  }

  if (linha === 0) {
    btnVoltar.classList.add('is-disable');
  }

  window.scroll(0, 0);
});

/***/ }),

/***/ "./resources/js/foto-upload.js":
/*!*************************************!*\
  !*** ./resources/js/foto-upload.js ***!
  \*************************************/
/*! no static exports found */
/***/ (function(module, exports) {

var reader = new FileReader();
var fotoPerfil = document.getElementById('foto-perfil');
var selecaoArquivo = document.getElementById('selecao-arquivo');

selecaoArquivo.onchange = function () {
  reader.onload = function () {
    if (reader.readyState == 2) {
      fotoPerfil.src = reader.result;
    }
  };

  reader.readAsDataURL(event.target.files[0]);
};

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

var modal = document.querySelectorAll('.modal');
var openModal = document.querySelectorAll('.status-box');
var closeModal = document.querySelectorAll('.modal-content-header-close');
var container = document.querySelectorAll('.container');

if (modal) {
  openModal.forEach(function (elem, idx) {
    elem.addEventListener('click', function () {
      modal[idx].classList.add('is-active');
    });
  });
  closeModal.forEach(function (elem, idx) {
    elem.addEventListener('click', function () {
      modal[idx].classList.remove('is-active');
    });
  });
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
      listCurriculo.style.height = "".concat(height + 60, "px");
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

      if (elem.classList.contains('js-curriculo-select-requisito-escolaridade')) {
        var input = document.querySelector('#input-escolaridade');
      } else {
        var input = document.querySelector('#input-alfabetizacao');
      }

      input.value = dataValue;
      listCurriculoText.innerHTML = "".concat(dataText);
      listCurriculo.classList.remove('is-active');
      listCurriculo.style.height = '0';
    });
  });
});

/***/ }),

/***/ "./resources/js/slide.js":
/*!*******************************!*\
  !*** ./resources/js/slide.js ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports) {

var slide = document.querySelector('.slide');
var slideWrapper = document.querySelector('.slide-wrapper');
var slideItem = document.querySelectorAll('.slide-item');
var slideNext = document.querySelector('.slide-next');
var slidePrev = document.querySelector('.slide-prev');
var vagaImage = document.querySelector('.vagas-empresa-logo');
var vagasBtn = document.querySelector('.vagas-btn');
var slideLength = slideItem.length;
var slideItemWidth = slideItem[0].clientWidth;
var vagaItemHeight = slideItem[0].clientHeight;
var idx = 0;
var position = 0;
slideWrapper.style.width = "".concat(slideItemWidth * slideLength, "px");
slideItem[0].classList.add('is-active');
slideNext.addEventListener('click', function () {
  if (idx + 1 < slideLength) {
    slideItem[idx].classList.remove('is-active');
    idx++;
    slideItem[idx].classList.add('is-active');
    position += slideItemWidth;
    slideWrapper.style.transform = "translateX(-".concat(position, "px)");
    vagasBtn.style.transform = "top:".concat(vagaItemHeight - 15, "px");
  }
});
slidePrev.addEventListener('click', function () {
  if (idx > 0) {
    slideItem[idx].classList.remove('is-active');
    idx--;
    slideItem[idx].classList.add('is-active');
    position -= slideItemWidth;
    slideWrapper.style.transform = "translateX(-".concat(position, "px)");
  }
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

__webpack_require__(/*! C:\xampp\htdocs\goodfit\resources\js\app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! C:\xampp\htdocs\goodfit\resources\sass\app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });
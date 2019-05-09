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

__webpack_require__(/*! ./custom/general.js */ "./resources/js/custom/general.js");

__webpack_require__(/*! ./custom/crear.js */ "./resources/js/custom/crear.js");

__webpack_require__(/*! ./custom/editar.js */ "./resources/js/custom/editar.js");

__webpack_require__(/*! ./custom/eliminar.js */ "./resources/js/custom/eliminar.js");

__webpack_require__(/*! ./custom/clientes.js */ "./resources/js/custom/clientes.js");

/***/ }),

/***/ "./resources/js/custom/clientes.js":
/*!*****************************************!*\
  !*** ./resources/js/custom/clientes.js ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

var _this = this;

window.validateTipoDocumento = function () {
  $("#crearClienteForm #tipo_persona").change(function (e) {
    if ($("#crearClienteForm #tipo_persona option:selected").val() == 2) {
      $("#crearClienteForm #tipo_documento option").map(function () {
        if ($(this).val() != 9) $(this).hide();else $(this).attr("selected", "selected");
      });
    } else {
      $("#crearClienteForm #tipo_documento option").map(function () {
        $(this).show();
      });
    }
  });
};

window.validateUbigeo = function () {
  $('#crearClienteForm #departamento, #crearClienteForm #provincia, #crearClienteForm #distrito').prop('disabled', true).trigger("chosen:updated");
  $("#pais").chosen().change(function (e) {
    if ($("#crearClienteForm #pais").val() == "Perú") {
      $('#crearClienteForm #departamento, #crearClienteForm #provincia, #crearClienteForm #distrito').prop('disabled', false).trigger("chosen:updated");
    } else {
      $('#crearClienteForm #departamento, #crearClienteForm #provincia, #crearClienteForm #distrito').prop('disabled', true).trigger("chosen:updated");
    }
  });
  $("#crearClienteForm #departamento").chosen().change(function (e) {
    $("#crearClienteForm #provincia option").map(function () {
      console.log($(_this));
      console.log($(_this).attr("id"));
    });
  });
};

/***/ }),

/***/ "./resources/js/custom/crear.js":
/*!**************************************!*\
  !*** ./resources/js/custom/crear.js ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports) {

window.crearElemento = function (idForm, modulo) {
  var Data = {};
  $("#" + idForm + " input").map(function (key, input) {
    return Data[input.id] = input.value;
  });
  $.ajax({
    type: 'POST',
    url: url + "/" + modulo,
    data: Data,
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    success: function success(result) {}
  });
};

/***/ }),

/***/ "./resources/js/custom/editar.js":
/*!***************************************!*\
  !*** ./resources/js/custom/editar.js ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports) {



/***/ }),

/***/ "./resources/js/custom/eliminar.js":
/*!*****************************************!*\
  !*** ./resources/js/custom/eliminar.js ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports) {



/***/ }),

/***/ "./resources/js/custom/general.js":
/*!****************************************!*\
  !*** ./resources/js/custom/general.js ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

window.ValidarGeneral = function (id, tipo, modulo) {
  $("#" + id).on('submit', function (e) {
    e.preventDefault();
    var form = $(this);
    form.parsley().validate();

    if (form.parsley().isValid()) {
      if (tipo == "crear") {
        crearElemento(id, modulo);
      }
    }
  });
};

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

__webpack_require__(/*! C:\xampp\htdocs\Workana\Avicola\resources\js\app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! C:\xampp\htdocs\Workana\Avicola\resources\sass\app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });
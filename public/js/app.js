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

__webpack_require__(/*! ./custom/update.js */ "./resources/js/custom/update.js");

__webpack_require__(/*! ./custom/eliminar.js */ "./resources/js/custom/eliminar.js");

__webpack_require__(/*! ./custom/clientes.js */ "./resources/js/custom/clientes.js");

__webpack_require__(/*! ./custom/proveedores.js */ "./resources/js/custom/proveedores.js");

__webpack_require__(/*! ./custom/contactos.js */ "./resources/js/custom/contactos.js");

__webpack_require__(/*! ./custom/seguridad.js */ "./resources/js/custom/seguridad.js");

__webpack_require__(/*! ./custom/empleados.js */ "./resources/js/custom/empleados.js");

/***/ }),

/***/ "./resources/js/custom/clientes.js":
/*!*****************************************!*\
  !*** ./resources/js/custom/clientes.js ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

window.EditarCliente = function (Datos, departamento, provincia, distrito, idForm) {
  DatosEdit = JSON.parse(Datos);
  Datos = JSON.parse(Datos);
  $("#" + idForm + " input:not(.chosen-search-input)").map(function (key, input) {
    input.value = Datos[input.id];
  });
  $("#" + idForm + " select").map(function (key, input) {
    input.value = Datos[input.id];
    $('#' + idForm + ' #' + input.id).trigger("chosen:updated");
  });

  if (DatosEdit.pais == "Perú") {
    $("#" + idForm + " #departamento").removeAttr("disabled");
    $("#" + idForm + " #provincia").removeAttr("disabled");
    $("#" + idForm + " #distrito").removeAttr("disabled");
    $("#" + idForm + " #departamento").val(departamento);
    $("#" + idForm + " #provincia").empty();

    for (key in window.Ubigeo[departamento]) {
      $("#" + idForm + " #provincia").append("<option value='" + key + "'>" + key.replace(/_/g, " ") + "</option>");
    }

    $("#" + idForm + " #distrito").empty();

    for (key in window.Ubigeo[departamento][provincia]) {
      $("#" + idForm + " #distrito").append("<option value='" + key + "'>" + key.replace(/_/g, " ") + "</option>");
    }

    $("#" + idForm + " #provincia").val(provincia);
    $("#" + idForm + " #distrito").val(distrito);
  } else {
    $("#" + idForm + " #departamento").attr("disabled", "disabled");
    $("#" + idForm + " #provincia").attr("disabled", "disabled");
    $("#" + idForm + " #distrito").attr("disabled", "disabled");
  }

  if (Datos.tipo_persona == 2) {
    $("#" + idForm + " #tipo_documento option").map(function () {
      if ($(this).val() != 4) {
        $(this).hide();
        $('#' + idForm + ' #tipo_documento, #' + idForm + ' #tipo_persona').trigger("chosen:updated");
      } else $(this).attr("selected", "selected");
    });
  }

  $('#' + idForm + ' #departamento, #' + idForm + ' #provincia, #' + idForm + ' #distrito').trigger("chosen:updated");
  $('#editarCliente').modal('toggle');
};

/***/ }),

/***/ "./resources/js/custom/contactos.js":
/*!******************************************!*\
  !*** ./resources/js/custom/contactos.js ***!
  \******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

window.EditarContacto = function (Datos, departamento, provincia, distrito, idForm) {
  DatosEdit = JSON.parse(Datos);
  Datos = JSON.parse(Datos);
  $("#" + idForm + " input:not(.chosen-search-input)").map(function (key, input) {
    input.value = Datos[input.id];
  });
  $("#" + idForm + " select").map(function (key, input) {
    input.value = Datos[input.id];
    $('#' + idForm + ' #' + input.id).trigger("chosen:updated");
  });

  if (DatosEdit.pais == "Perú") {
    $("#" + idForm + " #departamento").removeAttr("disabled");
    $("#" + idForm + " #provincia").removeAttr("disabled");
    $("#" + idForm + " #distrito").removeAttr("disabled");
    $("#" + idForm + " #departamento").val(departamento);
    $("#" + idForm + " #provincia").empty();

    for (key in window.Ubigeo[departamento]) {
      $("#" + idForm + " #provincia").append("<option>" + key.replace(/_/g, " ") + "</option>");
    }

    $("#" + idForm + " #distrito").empty();

    for (key in window.Ubigeo[departamento][provincia]) {
      $("#" + idForm + " #distrito").append("<option>" + key.replace(/_/g, " ") + "</option>");
    }

    $("#" + idForm + " #provincia").val(provincia);
    $("#" + idForm + " #distrito").val(distrito);
  } else {
    $("#" + idForm + " #departamento").attr("disabled", "disabled");
    $("#" + idForm + " #provincia").attr("disabled", "disabled");
    $("#" + idForm + " #distrito").attr("disabled", "disabled");
  }

  if (Datos.tipo_persona == 2) {
    $("#" + idForm + " #tipo_documento option").map(function () {
      if ($(this).val() != 4) {
        $(this).hide();
        $('#' + idForm + ' #tipo_documento, #' + idForm + ' #tipo_persona').trigger("chosen:updated");
      } else $(this).attr("selected", "selected");
    });
  }

  $("#" + idForm + " #id_cliente").val(Datos.id_cliente);
  $("#" + idForm + " #id_proveedor").val(Datos.id_proveedor);
  $('#' + idForm + ' #departamento, #' + idForm + ' #provincia, #' + idForm + ' #distrito, #' + idForm + ' #id_cliente, #' + idForm + ' #id_proveedor').trigger("chosen:updated");
  $('#editarContacto').modal('toggle');
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
  $("#" + idForm + " input,#" + idForm + " select").map(function (key, input) {
    return Data[input.id] = input.value;
  });
  $(".btn_avicola").hide("fast", function () {
    $(".loading_avicola").show("fast");
  });
  $(".input-error").remove();
  $.ajax({
    type: 'POST',
    url: url + "/" + modulo,
    data: Data,
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    success: function success(result) {
      $(".loading_avicola").hide("fast", function () {
        $(".btn_avicola").show("fast");
      });

      if (result == "Exito") {
        swal("¡Listo!", "Registro realizado de manera exitosa", "success");
        $("#" + idForm + " input").map(function (key, input) {
          $(this).val("");
        });
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
        $("#listUpdate").load(url + "/" + modulo + "/listUpdate", {
          Data: "Ex"
        });
        if (modulo == "guias-entrada" || modulo == "guias-pedido") $("#listUpdateProductos").load(url + "/" + modulo + "/listUpdateProductos", {
          Data: "Ex"
        });
        $("#listUpdateProductosEditar").load(url + "/" + modulo + "/listUpdateProductosEditar", {
          Data: "Ex"
        });
      } else {
        for (key in result) {
          $("#" + idForm + " #" + key).after().after("<p class='input-error' style='color:red'>" + result[key][0] + "</p>");
        }
      }
    }
  });
};

window.crearCuenta = function (idForm, modulo) {
  var Data = {};
  $("#" + idForm + " input,#" + idForm + " select").map(function (key, input) {
    return Data[input.id] = input.value;
  });
  $(".btn_avicola").hide("fast", function () {
    $(".loading_avicola").show("fast");
  });
  $(".input-error").remove();
  $.ajax({
    type: 'POST',
    url: url + "/" + modulo + "/crearCuenta",
    data: Data,
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    success: function success(result) {
      $(".loading_avicola").hide("fast", function () {
        $(".btn_avicola").show("fast");
      });

      if (result == "Exito") {
        swal("¡Listo!", "Registro realizado de manera exitosa", "success");
        $("#" + idForm + " input").map(function (key, input) {
          $(this).val("");
        });
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
        $("#listUpdate").load(url + "/" + modulo + "/listUpdate", {
          Data: "Ex"
        });
        if (modulo == "guias-entrada" || modulo == "guias-pedido") $("#listUpdateProductos").load(url + "/" + modulo + "/listUpdateProductos", {
          Data: "Ex"
        });
        $("#listUpdateProductosEditar").load(url + "/" + modulo + "/listUpdateProductosEditar", {
          Data: "Ex"
        });
      } else {
        for (key in result) {
          $("#" + idForm + " #" + key).after().after("<p class='input-error' style='color:red'>" + result[key][0] + "</p>");
        }
      }
    }
  });
};

/***/ }),

/***/ "./resources/js/custom/editar.js":
/*!***************************************!*\
  !*** ./resources/js/custom/editar.js ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports) {

window.editarElemento = function (Datos, idForm) {
  Datos = JSON.parse(Datos);
  if (idForm == "editarChofer") if (Datos.cargo != undefined) Datos.cargo = Datos.cargo.id;
  $("#" + idForm + " input:not(.chosen-search-input, input[type=search], input[type=checkbox], input[type=radio])").map(function (key, input) {
    input.value = Datos[input.id];
  });
  $("#" + idForm + " select:not(.chosen-search-input, .dataTables_length select) ").map(function (key, input) {
    input.value = Datos[input.id];
    $('#' + idForm + ' #' + input.id).trigger("chosen:updated");
  });
  $('#' + idForm).modal('toggle');
};

/***/ }),

/***/ "./resources/js/custom/eliminar.js":
/*!*****************************************!*\
  !*** ./resources/js/custom/eliminar.js ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

window.EliminarElemento = function (id, modulo) {
  swal({
    title: "¡Espera!",
    text: "Estas seguro de eliminar este elemento?",
    icon: "warning",
    buttons: true,
    dangerMode: true
  }).then(function (willDelete) {
    if (willDelete) {
      swal("¡Listo!", "Elemento eliminado satisfactoriamente", "success");
      $("#" + modulo + "_" + id).fadeOut("slow", function () {
        $("#" + modulo + "_" + id).remove();
      });
      $.ajax({
        type: 'DELETE',
        url: url + "/" + modulo + "/" + id,
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function success(result) {}
      });
    } else {}
  });
};

/***/ }),

/***/ "./resources/js/custom/empleados.js":
/*!******************************************!*\
  !*** ./resources/js/custom/empleados.js ***!
  \******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

window.validateChofer = function (idForm) {
  $('#' + idForm + ' #chofer').change(function () {
    if (this.checked) {
      $("#" + idForm + " #licencia").removeAttr("disabled");
      $("#" + idForm + " #licencia").attr("required", "required");
      $("#" + idForm + " #chofer").val("Si");
    } else {
      $("#" + idForm + " #licencia").attr("disabled", "disabled");
      $("#" + idForm + " #licencia").removeAttr("required", "required");
      $("#" + idForm + " #licencia").val("");
      $("#" + idForm + " #chofer").val("No");
    }
  });
};

window.editarEmpleado = function (Datos, idForm) {
  var Empleado = JSON.parse(Datos);

  if (Empleado.chofer == "Si") {
    $("#editarEmpleado #licencia").removeAttr("disabled");
    $("#editarEmpleado #chofer").val("Si");
    $("#editarEmpleado #chofer").prop('checked', true);
  } else {
    $("#editarEmpleado #licencia").attr("disabled", "disabled");
    $("#editarEmpleado #licencia").removeAttr("required");
    $("#editarEmpleado #licencia").val("");
    $("#editarEmpleado #chofer").val("No");
    $("#editarEmpleado #chofer").prop('checked', false);
  }

  if (Empleado.cargo != undefined) {
    Empleado.cargo = Empleado.cargo.id;
  }

  editarElemento(JSON.stringify(Empleado), idForm);
};

/***/ }),

/***/ "./resources/js/custom/general.js":
/*!****************************************!*\
  !*** ./resources/js/custom/general.js ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

window.ValidarGeneral = function (id, tipo, modulo) {
  var execute = false;
  var i = 0;
  $("#" + id).on('submit', function (e) {
    e.preventDefault();
    var form = $(this);
    form.parsley().validate();

    if (form.parsley().isValid()) {
      if (tipo == "crear") {
        if (execute == false && i == 0) {
          crearElemento(id, modulo);
          execute = true;
          i = 1;
        }
      }

      if (tipo == "update") {
        if (execute == false && i == 0) {
          updateElemento(id, modulo);
          execute = true;
          i = 1;
        }
      }

      if (tipo == "login") {
        if (execute == false && i == 0) {
          loginAvi(id, modulo);
          execute = true;
          i = 1;
        }
      }

      if (tipo == "resetPass") {
        if (execute == false && i == 0) {
          resetAvi(id, modulo);
          execute = true;
          i = 1;
        }
      }

      if (tipo == "resetPass2") {
        if (execute == false && i == 0) {
          resetAvi2(id, modulo);
          execute = true;
          i = 1;
        }
      }

      if (tipo == "crear_cuenta") {
        crearCuenta(id, modulo);
      }
    }
  });
};

window.validateTipoDocumento = function () {
  $("#crearClienteForm #tipo_persona").change(function (e) {
    if ($("#crearClienteForm #tipo_persona option:selected").val() == 2) {
      $("#crearClienteForm #tipo_documento option").map(function () {
        if ($(this).val() != 4) {
          $(this).hide();
          $('#crearClienteForm #tipo_documento, #crearClienteForm #tipo_persona').trigger("chosen:updated");
        } else $(this).attr("selected", "selected");
      });
    } else {
      $("#crearClienteForm #tipo_documento option").map(function () {
        $(this).show();
        $('#crearClienteForm #tipo_documento, #crearClienteForm #tipo_persona').trigger("chosen:updated");
      });
    }
  });
};

window.validateUbigeo = function () {
  $('#crearClienteForm #departamento, #crearClienteForm #provincia, #crearClienteForm #distrito').prop('disabled', true).trigger("chosen:updated");
  $("#crearClienteForm #pais").chosen().change(function (e) {
    if ($("#crearClienteForm #pais").val() == "Perú") {
      $('#crearClienteForm #departamento, #crearClienteForm #provincia, #crearClienteForm #distrito').prop('disabled', false).trigger("chosen:updated");
    } else {
      $('#crearClienteForm #departamento, #crearClienteForm #provincia, #crearClienteForm #distrito').prop('disabled', true).trigger("chosen:updated");
    }
  });
  $("#crearClienteForm #departamento").chosen().change(function (e) {
    $("#crearClienteForm #provincia").empty();

    for (key in window.Ubigeo[$("#crearClienteForm #departamento").val()]) {
      $("#crearClienteForm #provincia").append("<option>" + key.replace(/_/g, " ") + "</option>");
    }

    $("#crearClienteForm #distrito").empty();

    for (key in window.Ubigeo[$("#crearClienteForm #departamento").val()][$("#crearClienteForm #provincia").val()]) {
      $("#crearClienteForm #distrito").append("<option>" + key.replace(/_/g, " ") + "</option>");
    }

    $('#crearClienteForm #departamento, #crearClienteForm #provincia, #crearClienteForm #distrito').trigger("chosen:updated");
  });
  $("#crearClienteForm #provincia").chosen().change(function (e) {
    $("#crearClienteForm #distrito").empty();

    for (key in window.Ubigeo[$("#crearClienteForm #departamento").val()][$("#crearClienteForm #provincia").val()]) {
      $("#crearClienteForm #distrito").append("<option>" + key.replace(/_/g, " ") + "</option>");
    }

    $('#crearClienteForm #departamento, #crearClienteForm #provincia, #crearClienteForm #distrito').trigger("chosen:updated");
  });
};

window.validateTipoDocumentoEditar = function () {
  $("#editarClienteForm #tipo_persona").change(function (e) {
    if ($("#editarClienteForm #tipo_persona option:selected").val() == 2) {
      $("#editarClienteForm #tipo_documento option").map(function () {
        if ($(this).val() != 4) {
          $(this).hide();
          $('#editarClienteForm #tipo_documento, #editarClienteForm #tipo_persona').trigger("chosen:updated");
        } else $(this).attr("selected", "selected");
      });
    } else {
      $("#editarClienteForm #tipo_documento option").map(function () {
        $(this).show();
        $('#editarClienteForm #tipo_documento, #editarClienteForm #tipo_persona').trigger("chosen:updated");
      });
    }
  });
};

window.validateUbigeoEditar = function () {
  $('#editarClienteForm #departamento, #editarClienteForm #provincia, #editarClienteForm #distrito').prop('disabled', true).trigger("chosen:updated");
  $("#editarClienteForm #pais").chosen().change(function (e) {
    if ($("#editarClienteForm #pais").val() == "Perú") {
      $('#editarClienteForm #departamento, #editarClienteForm #provincia, #editarClienteForm #distrito').prop('disabled', false).trigger("chosen:updated");
    } else {
      $('#editarClienteForm #departamento, #editarClienteForm #provincia, #editarClienteForm #distrito').prop('disabled', true).trigger("chosen:updated");
    }
  });
  $("#editarClienteForm #departamento").chosen().change(function (e) {
    $("#editarClienteForm #provincia").empty();

    for (key in window.Ubigeo[$("#editarClienteForm #departamento").val()]) {
      $("#editarClienteForm #provincia").append("<option>" + key.replace(/_/g, " ") + "</option>");
    }

    $("#editarClienteForm #distrito").empty();

    for (key in window.Ubigeo[$("#editarClienteForm #departamento").val()][$("#editarClienteForm #provincia").val()]) {
      $("#editarClienteForm #distrito").append("<option>" + key.replace(/_/g, " ") + "</option>");
    }

    $('#editarClienteForm #departamento, #editarClienteForm #provincia, #editarClienteForm #distrito').trigger("chosen:updated");
  });
  $("#editarClienteForm #provincia").chosen().change(function (e) {
    $("#editarClienteForm #distrito").empty();

    for (key in window.Ubigeo[$("#editarClienteForm #departamento").val()][$("#editarClienteForm #provincia").val()]) {
      $("#editarClienteForm #distrito").append("<option>" + key.replace(/_/g, " ") + "</option>");
    }

    $('#editarClienteForm #departamento, #editarClienteForm #provincia, #editarClienteForm #distrito').trigger("chosen:updated");
  });
};

window.validateTipoDocumentoProvee = function () {
  $("#crearProveedorForm #tipo_persona").change(function (e) {
    if ($("#crearProveedorForm #tipo_persona option:selected").val() == 2) {
      $("#crearProveedorForm #tipo_documento option").map(function () {
        if ($(this).val() != 4) {
          $(this).hide();
          $('#crearProveedorForm #tipo_documento, #crearProveedorForm #tipo_persona').trigger("chosen:updated");
        } else $(this).attr("selected", "selected");
      });
    } else {
      $("#crearProveedorForm #tipo_documento option").map(function () {
        $(this).show();
        $('#crearProveedorForm #tipo_documento, #crearProveedorForm #tipo_persona').trigger("chosen:updated");
      });
    }
  });
};

window.validateUbigeoProvee = function () {
  $('#crearProveedorForm #departamento, #crearProveedorForm #provincia, #crearProveedorForm #distrito').prop('disabled', true).trigger("chosen:updated");
  $("#crearProveedorForm #pais").chosen().change(function (e) {
    if ($("#crearProveedorForm #pais").val() == "Perú") {
      $('#crearProveedorForm #departamento, #crearProveedorForm #provincia, #crearProveedorForm #distrito').prop('disabled', false).trigger("chosen:updated");
    } else {
      $('#crearProveedorForm #departamento, #crearProveedorForm #provincia, #crearProveedorForm #distrito').prop('disabled', true).trigger("chosen:updated");
    }
  });
  $("#crearProveedorForm #departamento").chosen().change(function (e) {
    $("#crearProveedorForm #provincia").empty();

    for (key in window.Ubigeo[$("#crearProveedorForm #departamento").val()]) {
      $("#crearProveedorForm #provincia").append("<option>" + key.replace(/_/g, " ") + "</option>");
    }

    $("#crearProveedorForm #distrito").empty();

    for (key in window.Ubigeo[$("#crearProveedorForm #departamento").val()][$("#crearProveedorForm #provincia").val()]) {
      $("#crearProveedorForm #distrito").append("<option>" + key.replace(/_/g, " ") + "</option>");
    }

    $('#crearProveedorForm #departamento, #crearProveedorForm #provincia, #crearProveedorForm #distrito').trigger("chosen:updated");
  });
  $("#crearProveedorForm #provincia").chosen().change(function (e) {
    $("#crearProveedorForm #distrito").empty();

    for (key in window.Ubigeo[$("#crearProveedorForm #departamento").val()][$("#crearProveedorForm #provincia").val()]) {
      $("#crearProveedorForm #distrito").append("<option>" + key.replace(/_/g, " ") + "</option>");
    }

    $('#crearProveedorForm #departamento, #crearProveedorForm #provincia, #crearProveedorForm #distrito').trigger("chosen:updated");
  });
};

window.validateTipoDocumentoEditarProvee = function () {
  $("#editarProveedorForm #tipo_persona").change(function (e) {
    if ($("#editarProveedorForm #tipo_persona option:selected").val() == 2) {
      $("#editarProveedorForm #tipo_documento option").map(function () {
        if ($(this).val() != 4) {
          $(this).hide();
          $('#editarProveedorForm #tipo_documento, #editarProveedorForm #tipo_persona').trigger("chosen:updated");
        } else $(this).attr("selected", "selected");
      });
    } else {
      $("#editarProveedorForm #tipo_documento option").map(function () {
        $(this).show();
        $('#editarProveedorForm #tipo_documento, #editarProveedorForm #tipo_persona').trigger("chosen:updated");
      });
    }
  });
};

window.validateUbigeoEditarProvee = function () {
  $('#editarProveedorForm #departamento, #editarProveedorForm #provincia, #editarProveedorForm #distrito').prop('disabled', true).trigger("chosen:updated");
  $("#editarProveedorForm #pais").chosen().change(function (e) {
    if ($("#editarProveedorForm #pais").val() == "Perú") {
      $('#editarProveedorForm #departamento, #editarProveedorForm #provincia, #editarProveedorForm #distrito').prop('disabled', false).trigger("chosen:updated");
    } else {
      $('#editarProveedorForm #departamento, #editarProveedorForm #provincia, #editarProveedorForm #distrito').prop('disabled', true).trigger("chosen:updated");
    }
  });
  $("#editarProveedorForm #departamento").chosen().change(function (e) {
    $("#editarProveedorForm #provincia").empty();

    for (key in window.Ubigeo[$("#editarProveedorForm #departamento").val()]) {
      $("#editarProveedorForm #provincia").append("<option>" + key.replace(/_/g, " ") + "</option>");
    }

    $("#editarProveedorForm #distrito").empty();

    for (key in window.Ubigeo[$("#editarProveedorForm #departamento").val()][$("#editarProveedorForm #provincia").val()]) {
      $("#editarProveedorForm #distrito").append("<option>" + key.replace(/_/g, " ") + "</option>");
    }

    $('#editarProveedorForm #departamento, #editarProveedorForm #provincia, #editarProveedorForm #distrito').trigger("chosen:updated");
  });
  $("#editarProveedorForm #provincia").chosen().change(function (e) {
    $("#editarProveedorForm #distrito").empty();

    for (key in window.Ubigeo[$("#editarProveedorForm #departamento").val()][$("#editarProveedorForm #provincia").val()]) {
      $("#editarProveedorForm #distrito").append("<option>" + key.replace(/_/g, " ") + "</option>");
    }

    $('#editarProveedorForm #departamento, #editarProveedorForm #provincia, #editarProveedorForm #distrito').trigger("chosen:updated");
  });
};

window.validateTipoDocumentoCont = function () {
  $("#crearContactoForm #tipo_persona").change(function (e) {
    if ($("#crearContactoForm #tipo_persona option:selected").val() == 2) {
      $("#crearContactoForm #tipo_documento option").map(function () {
        if ($(this).val() != 4) {
          $(this).hide();
          $('#crearContactoForm #tipo_documento, #crearContactoForm #tipo_persona').trigger("chosen:updated");
        } else $(this).attr("selected", "selected");
      });
    } else {
      $("#crearContactoForm #tipo_documento option").map(function () {
        $(this).show();
        $('#crearContactoForm #tipo_documento, #crearContactoForm #tipo_persona').trigger("chosen:updated");
      });
    }
  });
};

window.validateUbigeoCont = function () {
  $('#crearContactoForm #departamento, #crearContactoForm #provincia, #crearContactoForm #distrito').prop('disabled', true).trigger("chosen:updated");
  $("#crearContactoForm #pais").chosen().change(function (e) {
    if ($("#crearContactoForm #pais").val() == "Perú") {
      $('#crearContactoForm #departamento, #crearContactoForm #provincia, #crearContactoForm #distrito').prop('disabled', false).trigger("chosen:updated");
    } else {
      $('#crearContactoForm #departamento, #crearContactoForm #provincia, #crearContactoForm #distrito').prop('disabled', true).trigger("chosen:updated");
    }
  });
  $("#crearContactoForm #departamento").chosen().change(function (e) {
    $("#crearContactoForm #provincia").empty();

    for (key in window.Ubigeo[$("#crearContactoForm #departamento").val()]) {
      $("#crearContactoForm #provincia").append("<option>" + key.replace(/_/g, " ") + "</option>");
    }

    $("#crearContactoForm #distrito").empty();

    for (key in window.Ubigeo[$("#crearContactoForm #departamento").val()][$("#crearContactoForm #provincia").val()]) {
      $("#crearContactoForm #distrito").append("<option>" + key.replace(/_/g, " ") + "</option>");
    }

    $('#crearContactoForm #departamento, #crearContactoForm #provincia, #crearContactoForm #distrito').trigger("chosen:updated");
  });
  $("#crearContactoForm #provincia").chosen().change(function (e) {
    $("#crearContactoForm #distrito").empty();

    for (key in window.Ubigeo[$("#crearContactoForm #departamento").val()][$("#crearContactoForm #provincia").val()]) {
      $("#crearContactoForm #distrito").append("<option>" + key.replace(/_/g, " ") + "</option>");
    }

    $('#crearContactoForm #departamento, #crearContactoForm #provincia, #crearContactoForm #distrito').trigger("chosen:updated");
  });
};

window.validateTipoDocumentoEditarCont = function () {
  $("#editarContactoForm #tipo_persona").change(function (e) {
    if ($("#editarContactoForm #tipo_persona option:selected").val() == 2) {
      $("#editarContactoForm #tipo_documento option").map(function () {
        if ($(this).val() != 4) {
          $(this).hide();
          $('#editarContactoForm #tipo_documento, #editarContactoForm #tipo_persona').trigger("chosen:updated");
        } else $(this).attr("selected", "selected");
      });
    } else {
      $("#editarContactoForm #tipo_documento option").map(function () {
        $(this).show();
        $('#editarContactoForm #tipo_documento, #editarContactoForm #tipo_persona').trigger("chosen:updated");
      });
    }
  });
};

window.validateUbigeoEditarCont = function () {
  $('#editarContactoForm #departamento, #editarContactoForm #provincia, #editarContactoForm #distrito').prop('disabled', true).trigger("chosen:updated");
  $("#editarContactoForm #pais").chosen().change(function (e) {
    if ($("#editarContactoForm #pais").val() == "Perú") {
      $('#editarContactoForm #departamento, #editarContactoForm #provincia, #editarContactoForm #distrito').prop('disabled', false).trigger("chosen:updated");
    } else {
      $('#editarContactoForm #departamento, #editarContactoForm #provincia, #editarContactoForm #distrito').prop('disabled', true).trigger("chosen:updated");
    }
  });
  $("#editarContactoForm #departamento").chosen().change(function (e) {
    $("#editarContactoForm #provincia").empty();

    for (key in window.Ubigeo[$("#editarContactoForm #departamento").val()]) {
      $("#editarContactoForm #provincia").append("<option>" + key.replace(/_/g, " ") + "</option>");
    }

    $("#editarContactoForm #distrito").empty();

    for (key in window.Ubigeo[$("#editarContactoForm #departamento").val()][$("#editarContactoForm #provincia").val()]) {
      $("#editarContactoForm #distrito").append("<option>" + key.replace(/_/g, " ") + "</option>");
    }

    $('#editarContactoForm #departamento, #editarContactoForm #provincia, #editarContactoForm #distrito').trigger("chosen:updated");
  });
  $("#editarContactoForm #provincia").chosen().change(function (e) {
    $("#editarContactoForm #distrito").empty();

    for (key in window.Ubigeo[$("#editarContactoForm #departamento").val()][$("#editarContactoForm #provincia").val()]) {
      $("#editarContactoForm #distrito").append("<option>" + key.replace(/_/g, " ") + "</option>");
    }

    $('#editarContactoForm #departamento, #editarContactoForm #provincia, #editarContactoForm #distrito').trigger("chosen:updated");
  });
};

/***/ }),

/***/ "./resources/js/custom/proveedores.js":
/*!********************************************!*\
  !*** ./resources/js/custom/proveedores.js ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

window.EditarProveedor = function (Datos, departamento, provincia, distrito, idForm) {
  DatosEdit = JSON.parse(Datos);
  Datos = JSON.parse(Datos);
  $("#" + idForm + " input:not(.chosen-search-input)").map(function (key, input) {
    input.value = Datos[input.id];
  });
  $("#" + idForm + " select").map(function (key, input) {
    input.value = Datos[input.id];
    $('#' + idForm + ' #' + input.id).trigger("chosen:updated");
  });

  if (DatosEdit.pais == "Perú") {
    $("#" + idForm + " #departamento").removeAttr("disabled");
    $("#" + idForm + " #provincia").removeAttr("disabled");
    $("#" + idForm + " #distrito").removeAttr("disabled");
    $("#" + idForm + " #departamento").val(departamento);
    $("#" + idForm + " #provincia").empty();

    for (key in window.Ubigeo[departamento]) {
      $("#" + idForm + " #provincia").append("<option value='" + key + "'>" + key.replace(/_/g, " ") + "</option>");
    }

    $("#" + idForm + " #distrito").empty();

    for (key in window.Ubigeo[departamento][provincia]) {
      $("#" + idForm + " #distrito").append("<option value='" + key + "'>" + key.replace(/_/g, " ") + "</option>");
    }

    $("#" + idForm + " #provincia").val(provincia);
    $("#" + idForm + " #distrito").val(distrito);
  } else {
    $("#" + idForm + " #departamento").attr("disabled", "disabled");
    $("#" + idForm + " #provincia").attr("disabled", "disabled");
    $("#" + idForm + " #distrito").attr("disabled", "disabled");
  }

  if (Datos.tipo_persona == 2) {
    $("#" + idForm + " #tipo_documento option").map(function () {
      if ($(this).val() != 4) {
        $(this).hide();
        $('#' + idForm + ' #tipo_documento, #' + idForm + ' #tipo_persona').trigger("chosen:updated");
      } else $(this).attr("selected", "selected");
    });
  }

  $('#' + idForm + ' #departamento, #' + idForm + ' #provincia, #' + idForm + ' #distrito').trigger("chosen:updated");
  $('#editarProveedor').modal('toggle');
};

/***/ }),

/***/ "./resources/js/custom/seguridad.js":
/*!******************************************!*\
  !*** ./resources/js/custom/seguridad.js ***!
  \******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

window.loginAvi = function (idForm, modulo) {
  var Data = {};
  $("#" + idForm + " input").map(function (key, input) {
    return Data[input.id] = input.value;
  });
  $(".btn_avicola").hide("fast", function () {
    $(".loading_avicola").show("fast");
  });
  $(".input-error").remove();
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $.ajax({
    type: 'POST',
    url: url + "/login",
    data: Data,
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    success: function success(result) {
      $(".loading_avicola").hide("fast", function () {
        $(".btn_avicola").show("fast");
      });

      if (result == "Exito") {
        swal("¡Listo!", "Esta siendo redirigido al panel de control", "success");
        window.location.href = url;
      } else {
        swal("Error", "Credenciales Invalidas", "error");
      }
    }
  });
};

window.resetAvi = function (idForm, modulo) {
  var Data = {};
  $("#" + idForm + " input").map(function (key, input) {
    return Data[input.id] = input.value;
  });
  $(".btn_avicola").hide("fast", function () {
    $(".loading_avicola").show("fast");
  });
  $(".input-error").remove();
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $.ajax({
    type: 'POST',
    url: url + "/resetPass",
    data: Data,
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    success: function success(result) {
      $(".loading_avicola").hide("fast", function () {
        $(".btn_avicola").show("fast");
      });

      if (result == "Exito") {
        swal("¡Listo!", "Hemos enviado un correo a tu email para continuar con el preceso de cambio de contraseña", "success");
      } else {
        swal("Error", "Este email no concuerda con nuestros registros", "error");
      }
    }
  });
};

window.resetAvi2 = function (idForm, modulo) {
  var Data = {};
  $("#" + idForm + " input").map(function (key, input) {
    return Data[input.id] = input.value;
  });
  $(".btn_avicola").hide("fast", function () {
    $(".loading_avicola").show("fast");
  });
  $(".input-error").remove();
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  var parts = window.location.pathname.split('/');
  var urlPath = parts.pop() || parts.pop(); // handle potential trailing slash

  $.ajax({
    type: 'POST',
    url: url + "/resetPass2/" + urlPath,
    data: Data,
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    success: function success(result) {
      $(".loading_avicola").hide("fast", function () {
        $(".btn_avicola").show("fast");
      });

      if (result == "Exito") {
        swal("¡Listo!", "Contraseña actualizada exitosamente", "success");
        window.location.href = url;
      } else {}
    }
  });
};

/***/ }),

/***/ "./resources/js/custom/update.js":
/*!***************************************!*\
  !*** ./resources/js/custom/update.js ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports) {

window.updateElemento = function (idForm, modulo) {
  $(".input-error").remove();
  var Data = {};
  $("#" + idForm + " input,#" + idForm + " select").map(function (key, input) {
    return Data[input.id] = input.value;
  });
  $(".btn_avicola").hide("fast", function () {
    $(".loading_avicola").show("fast");
  });
  Data._method = "POST";
  $.ajax({
    type: 'PUT',
    url: url + "/" + modulo + "/" + Data.id,
    data: Data,
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    success: function success(result) {
      $(".loading_avicola").hide("fast", function () {
        $(".btn_avicola").show("fast");
      });

      if (result == "Exito") {
        swal("¡Listo!", "Registro realizado de manera exitosa", "success");
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
        $("#listUpdate").load(url + "/" + modulo + "/listUpdate", {
          Data: "Ex"
        });
        if (modulo == "guias-entrada" || modulo == "guias-pedido") $("#listUpdateProductos").load(url + "/" + modulo + "/listUpdateProductos", {
          Data: "Ex"
        });
        $("#listUpdateProductosEditar").load(url + "/" + modulo + "/listUpdateProductosEditar", {
          Data: "Ex"
        });
      } else {
        for (key in result) {
          $("#" + idForm + " #" + key).after().after("<p class='input-error' style='color:red'>" + result[key][0] + "</p>");
        }

        console.log(result);
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

__webpack_require__(/*! C:\xampp\htdocs\Temporal\Workana\Avicola\resources\js\app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! C:\xampp\htdocs\Temporal\Workana\Avicola\resources\sass\app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });
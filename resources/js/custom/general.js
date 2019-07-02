

window.ValidarGeneral = (id, tipo, modulo) => {

        var execute=false;
        var i=0;
        $("#"+id).on('submit', function(e){
            e.preventDefault();
            let form = $(this);
            form.parsley().validate();
            if (form.parsley().isValid()){
                if (tipo=="crear") {
                    if (execute==false && i==0) {
                        crearElemento(id, modulo);
                        execute=true;
                        i=1;
                    }
                }

                 if (tipo=="update") {
                    if (execute==false && i==0) {
                        updateElemento(id, modulo);
                        execute=true;
                        i=1;
                    }
                }

                if (tipo=="login") {
                    if (execute==false && i==0) {
                        loginAvi(id, modulo);
                        execute=true;
                        i=1;
                    }
                }

                if (tipo=="resetPass") {
                    if (execute==false && i==0) {
                        resetAvi(id, modulo);
                        execute=true;
                        i=1;
                    }
                }

                if (tipo=="resetPass2") {
                    if (execute==false && i==0) {
                        resetAvi2(id, modulo);
                        execute=true;
                        i=1;
                    }
                }

                if (tipo=="crear_cuenta") {
                    crearCuenta(id, modulo);
                }

            }
        });
}




window.validateTipoDocumento=() => {
    $("#crearClienteForm #tipo_persona").change((e) => {
      if($("#crearClienteForm #tipo_persona option:selected").val()==2){
          $("#crearClienteForm #tipo_documento option").map(function(){
            if($(this).val()!=4) {
                $(this).hide();
                $('#crearClienteForm #tipo_documento, #crearClienteForm #tipo_persona').trigger("chosen:updated");
            } else $(this).attr("selected", "selected")
        });
      } else{
          $("#crearClienteForm #tipo_documento option").map(function(){
            $(this).show();
            $('#crearClienteForm #tipo_documento, #crearClienteForm #tipo_persona').trigger("chosen:updated");
        });
      }
    });
}


window.validateUbigeo=() => {

    $('#crearClienteForm #departamento, #crearClienteForm #provincia, #crearClienteForm #distrito').prop('disabled', true).trigger("chosen:updated");

    $("#crearClienteForm #pais").chosen().change((e) => {
            if ($("#crearClienteForm #pais").val()=="Perú") {
                $('#crearClienteForm #departamento, #crearClienteForm #provincia, #crearClienteForm #distrito').prop('disabled', false).trigger("chosen:updated");
            } else{
                $('#crearClienteForm #departamento, #crearClienteForm #provincia, #crearClienteForm #distrito').prop('disabled', true).trigger("chosen:updated");
            }
    });


    $("#crearClienteForm #departamento").chosen().change((e) => {

        $("#crearClienteForm #provincia").empty();
        for(key in window.Ubigeo[$("#crearClienteForm #departamento").val()]){
            $("#crearClienteForm #provincia").append("<option>"+key.replace(/_/g, " ")+"</option>");
        }

        $("#crearClienteForm #distrito").empty();

        for(key in window.Ubigeo[$("#crearClienteForm #departamento").val()][$("#crearClienteForm #provincia").val()]){
            $("#crearClienteForm #distrito").append("<option>"+key.replace(/_/g, " ")+"</option>");
        }

            $('#crearClienteForm #departamento, #crearClienteForm #provincia, #crearClienteForm #distrito').trigger("chosen:updated");

    });



    $("#crearClienteForm #provincia").chosen().change((e) => {

        $("#crearClienteForm #distrito").empty();

        for(key in window.Ubigeo[$("#crearClienteForm #departamento").val()][$("#crearClienteForm #provincia").val()]){
            $("#crearClienteForm #distrito").append("<option>"+key.replace(/_/g, " ")+"</option>");
        }

            $('#crearClienteForm #departamento, #crearClienteForm #provincia, #crearClienteForm #distrito').trigger("chosen:updated");

    });
}













window.validateTipoDocumentoEditar=() => {
    $("#editarClienteForm #tipo_persona").change((e) => {
      if($("#editarClienteForm #tipo_persona option:selected").val()==2){
          $("#editarClienteForm #tipo_documento option").map(function(){
            if($(this).val()!=4) {
                $(this).hide();
                $('#editarClienteForm #tipo_documento, #editarClienteForm #tipo_persona').trigger("chosen:updated");
            } else $(this).attr("selected", "selected")
        });
      } else{
          $("#editarClienteForm #tipo_documento option").map(function(){
            $(this).show();
            $('#editarClienteForm #tipo_documento, #editarClienteForm #tipo_persona').trigger("chosen:updated");
        });
      }
    });
}


window.validateUbigeoEditar=() => {

    $('#editarClienteForm #departamento, #editarClienteForm #provincia, #editarClienteForm #distrito').prop('disabled', true).trigger("chosen:updated");

    $("#editarClienteForm #pais").chosen().change((e) => {
            if ($("#editarClienteForm #pais").val()=="Perú") {
                $('#editarClienteForm #departamento, #editarClienteForm #provincia, #editarClienteForm #distrito').prop('disabled', false).trigger("chosen:updated");
            } else{
                $('#editarClienteForm #departamento, #editarClienteForm #provincia, #editarClienteForm #distrito').prop('disabled', true).trigger("chosen:updated");
            }
    });


    $("#editarClienteForm #departamento").chosen().change((e) => {

        $("#editarClienteForm #provincia").empty();
        for(key in window.Ubigeo[$("#editarClienteForm #departamento").val()]){
            $("#editarClienteForm #provincia").append("<option>"+key.replace(/_/g, " ")+"</option>");
        }

        $("#editarClienteForm #distrito").empty();

        for(key in window.Ubigeo[$("#editarClienteForm #departamento").val()][$("#editarClienteForm #provincia").val()]){
            $("#editarClienteForm #distrito").append("<option>"+key.replace(/_/g, " ")+"</option>");
        }

            $('#editarClienteForm #departamento, #editarClienteForm #provincia, #editarClienteForm #distrito').trigger("chosen:updated");

    });



    $("#editarClienteForm #provincia").chosen().change((e) => {

        $("#editarClienteForm #distrito").empty();

        for(key in window.Ubigeo[$("#editarClienteForm #departamento").val()][$("#editarClienteForm #provincia").val()]){
            $("#editarClienteForm #distrito").append("<option>"+key.replace(/_/g, " ")+"</option>");
        }

            $('#editarClienteForm #departamento, #editarClienteForm #provincia, #editarClienteForm #distrito').trigger("chosen:updated");

    });
}


































window.validateTipoDocumentoProvee=() => {
    $("#crearProveedorForm #tipo_persona").change((e) => {
      if($("#crearProveedorForm #tipo_persona option:selected").val()==2){
          $("#crearProveedorForm #tipo_documento option").map(function(){
            if($(this).val()!=4) {
                $(this).hide();
                $('#crearProveedorForm #tipo_documento, #crearProveedorForm #tipo_persona').trigger("chosen:updated");
            } else $(this).attr("selected", "selected")
        });
      } else{
          $("#crearProveedorForm #tipo_documento option").map(function(){
            $(this).show();
            $('#crearProveedorForm #tipo_documento, #crearProveedorForm #tipo_persona').trigger("chosen:updated");
        });
      }
    });
}


window.validateUbigeoProvee=() => {

    $('#crearProveedorForm #departamento, #crearProveedorForm #provincia, #crearProveedorForm #distrito').prop('disabled', true).trigger("chosen:updated");

    $("#crearProveedorForm #pais").chosen().change((e) => {
            if ($("#crearProveedorForm #pais").val()=="Perú") {
                $('#crearProveedorForm #departamento, #crearProveedorForm #provincia, #crearProveedorForm #distrito').prop('disabled', false).trigger("chosen:updated");
            } else{
                $('#crearProveedorForm #departamento, #crearProveedorForm #provincia, #crearProveedorForm #distrito').prop('disabled', true).trigger("chosen:updated");
            }
    });


    $("#crearProveedorForm #departamento").chosen().change((e) => {

        $("#crearProveedorForm #provincia").empty();
        for(key in window.Ubigeo[$("#crearProveedorForm #departamento").val()]){
            $("#crearProveedorForm #provincia").append("<option>"+key.replace(/_/g, " ")+"</option>");
        }

        $("#crearProveedorForm #distrito").empty();

        for(key in window.Ubigeo[$("#crearProveedorForm #departamento").val()][$("#crearProveedorForm #provincia").val()]){
            $("#crearProveedorForm #distrito").append("<option>"+key.replace(/_/g, " ")+"</option>");
        }

            $('#crearProveedorForm #departamento, #crearProveedorForm #provincia, #crearProveedorForm #distrito').trigger("chosen:updated");

    });



    $("#crearProveedorForm #provincia").chosen().change((e) => {

        $("#crearProveedorForm #distrito").empty();

        for(key in window.Ubigeo[$("#crearProveedorForm #departamento").val()][$("#crearProveedorForm #provincia").val()]){
            $("#crearProveedorForm #distrito").append("<option>"+key.replace(/_/g, " ")+"</option>");
        }

            $('#crearProveedorForm #departamento, #crearProveedorForm #provincia, #crearProveedorForm #distrito').trigger("chosen:updated");

    });
}













window.validateTipoDocumentoEditarProvee=() => {
    $("#editarProveedorForm #tipo_persona").change((e) => {
      if($("#editarProveedorForm #tipo_persona option:selected").val()==2){
          $("#editarProveedorForm #tipo_documento option").map(function(){
            if($(this).val()!=4) {
                $(this).hide();
                $('#editarProveedorForm #tipo_documento, #editarProveedorForm #tipo_persona').trigger("chosen:updated");
            } else $(this).attr("selected", "selected")
        });
      } else{
          $("#editarProveedorForm #tipo_documento option").map(function(){
            $(this).show();
            $('#editarProveedorForm #tipo_documento, #editarProveedorForm #tipo_persona').trigger("chosen:updated");
        });
      }
    });
}


window.validateUbigeoEditarProvee=() => {

    $('#editarProveedorForm #departamento, #editarProveedorForm #provincia, #editarProveedorForm #distrito').prop('disabled', true).trigger("chosen:updated");

    $("#editarProveedorForm #pais").chosen().change((e) => {
            if ($("#editarProveedorForm #pais").val()=="Perú") {
                $('#editarProveedorForm #departamento, #editarProveedorForm #provincia, #editarProveedorForm #distrito').prop('disabled', false).trigger("chosen:updated");
            } else{
                $('#editarProveedorForm #departamento, #editarProveedorForm #provincia, #editarProveedorForm #distrito').prop('disabled', true).trigger("chosen:updated");
            }
    });


    $("#editarProveedorForm #departamento").chosen().change((e) => {

        $("#editarProveedorForm #provincia").empty();
        for(key in window.Ubigeo[$("#editarProveedorForm #departamento").val()]){
            $("#editarProveedorForm #provincia").append("<option>"+key.replace(/_/g, " ")+"</option>");
        }

        $("#editarProveedorForm #distrito").empty();

        for(key in window.Ubigeo[$("#editarProveedorForm #departamento").val()][$("#editarProveedorForm #provincia").val()]){
            $("#editarProveedorForm #distrito").append("<option>"+key.replace(/_/g, " ")+"</option>");
        }

            $('#editarProveedorForm #departamento, #editarProveedorForm #provincia, #editarProveedorForm #distrito').trigger("chosen:updated");

    });



    $("#editarProveedorForm #provincia").chosen().change((e) => {

        $("#editarProveedorForm #distrito").empty();

        for(key in window.Ubigeo[$("#editarProveedorForm #departamento").val()][$("#editarProveedorForm #provincia").val()]){
            $("#editarProveedorForm #distrito").append("<option>"+key.replace(/_/g, " ")+"</option>");
        }

            $('#editarProveedorForm #departamento, #editarProveedorForm #provincia, #editarProveedorForm #distrito').trigger("chosen:updated");

    });
}




























window.validateTipoDocumentoCont=() => {
    $("#crearContactoForm #tipo_persona").change((e) => {
      if($("#crearContactoForm #tipo_persona option:selected").val()==2){
          $("#crearContactoForm #tipo_documento option").map(function(){
            if($(this).val()!=4) {
                $(this).hide();
                $('#crearContactoForm #tipo_documento, #crearContactoForm #tipo_persona').trigger("chosen:updated");
            } else $(this).attr("selected", "selected")
        });
      } else{
          $("#crearContactoForm #tipo_documento option").map(function(){
            $(this).show();
            $('#crearContactoForm #tipo_documento, #crearContactoForm #tipo_persona').trigger("chosen:updated");
        });
      }
    });
}


window.validateUbigeoCont=() => {

    $('#crearContactoForm #departamento, #crearContactoForm #provincia, #crearContactoForm #distrito').prop('disabled', true).trigger("chosen:updated");

    $("#crearContactoForm #pais").chosen().change((e) => {
            if ($("#crearContactoForm #pais").val()=="Perú") {
                $('#crearContactoForm #departamento, #crearContactoForm #provincia, #crearContactoForm #distrito').prop('disabled', false).trigger("chosen:updated");
            } else{
                $('#crearContactoForm #departamento, #crearContactoForm #provincia, #crearContactoForm #distrito').prop('disabled', true).trigger("chosen:updated");
            }
    });


    $("#crearContactoForm #departamento").chosen().change((e) => {

        $("#crearContactoForm #provincia").empty();
        for(key in window.Ubigeo[$("#crearContactoForm #departamento").val()]){
            $("#crearContactoForm #provincia").append("<option>"+key.replace(/_/g, " ")+"</option>");
        }

        $("#crearContactoForm #distrito").empty();

        for(key in window.Ubigeo[$("#crearContactoForm #departamento").val()][$("#crearContactoForm #provincia").val()]){
            $("#crearContactoForm #distrito").append("<option>"+key.replace(/_/g, " ")+"</option>");
        }

            $('#crearContactoForm #departamento, #crearContactoForm #provincia, #crearContactoForm #distrito').trigger("chosen:updated");

    });



    $("#crearContactoForm #provincia").chosen().change((e) => {

        $("#crearContactoForm #distrito").empty();

        for(key in window.Ubigeo[$("#crearContactoForm #departamento").val()][$("#crearContactoForm #provincia").val()]){
            $("#crearContactoForm #distrito").append("<option>"+key.replace(/_/g, " ")+"</option>");
        }

            $('#crearContactoForm #departamento, #crearContactoForm #provincia, #crearContactoForm #distrito').trigger("chosen:updated");

    });
}













window.validateTipoDocumentoEditarCont=() => {
    $("#editarContactoForm #tipo_persona").change((e) => {
      if($("#editarContactoForm #tipo_persona option:selected").val()==2){
          $("#editarContactoForm #tipo_documento option").map(function(){
            if($(this).val()!=4) {
                $(this).hide();
                $('#editarContactoForm #tipo_documento, #editarContactoForm #tipo_persona').trigger("chosen:updated");
            } else $(this).attr("selected", "selected")
        });
      } else{
          $("#editarContactoForm #tipo_documento option").map(function(){
            $(this).show();
            $('#editarContactoForm #tipo_documento, #editarContactoForm #tipo_persona').trigger("chosen:updated");
        });
      }
    });
}


window.validateUbigeoEditarCont=() => {

    $('#editarContactoForm #departamento, #editarContactoForm #provincia, #editarContactoForm #distrito').prop('disabled', true).trigger("chosen:updated");

    $("#editarContactoForm #pais").chosen().change((e) => {
            if ($("#editarContactoForm #pais").val()=="Perú") {
                $('#editarContactoForm #departamento, #editarContactoForm #provincia, #editarContactoForm #distrito').prop('disabled', false).trigger("chosen:updated");
            } else{
                $('#editarContactoForm #departamento, #editarContactoForm #provincia, #editarContactoForm #distrito').prop('disabled', true).trigger("chosen:updated");
            }
    });


    $("#editarContactoForm #departamento").chosen().change((e) => {

        $("#editarContactoForm #provincia").empty();
        for(key in window.Ubigeo[$("#editarContactoForm #departamento").val()]){
            $("#editarContactoForm #provincia").append("<option>"+key.replace(/_/g, " ")+"</option>");
        }

        $("#editarContactoForm #distrito").empty();

        for(key in window.Ubigeo[$("#editarContactoForm #departamento").val()][$("#editarContactoForm #provincia").val()]){
            $("#editarContactoForm #distrito").append("<option>"+key.replace(/_/g, " ")+"</option>");
        }

            $('#editarContactoForm #departamento, #editarContactoForm #provincia, #editarContactoForm #distrito').trigger("chosen:updated");

    });



    $("#editarContactoForm #provincia").chosen().change((e) => {

        $("#editarContactoForm #distrito").empty();

        for(key in window.Ubigeo[$("#editarContactoForm #departamento").val()][$("#editarContactoForm #provincia").val()]){
            $("#editarContactoForm #distrito").append("<option>"+key.replace(/_/g, " ")+"</option>");
        }

            $('#editarContactoForm #departamento, #editarContactoForm #provincia, #editarContactoForm #distrito').trigger("chosen:updated");

    });
}

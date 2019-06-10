
<div id="editarGuiaEntrada" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h2>Editar Cargo</h2>
         </div>
         <div class="modal-body">
            <form id="editarGuiaEntradaForm" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" style="padding: 20px;">
               <input type="hidden" id="id">
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <small class='form_description'>Descripción de la Guia de Entrada</small>
                           <input type="text" id="descripcion_guia" required="required" class="form-control col-md-7 col-xs-12">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <small class='form_description'>Fecha de ingreso</small>
                           <input type="date" id="fecha_entrada" required="required" class="form-control col-md-7 col-xs-12">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <small class='form_description'>Proveedor</small>
                           <select type="text" id="id_proveedor" class="form-control col-md-7 col-xs-12">
                              @foreach ($Datos["Proveedores"] as $Proveedor)
                                 <option value="{{$Proveedor->id}}">{{$Proveedor->nombre}}</option>
                              @endforeach
                           </select>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <small class='form_description'>Producto</small>
                           <select type="text" id="id_producto" class="form-control col-md-7 col-xs-12">
                              @foreach ($Datos["Productos"] as $Producto)
                                 <option value="{{$Producto->id}}">{{$Producto->descripcion}}</option>
                              @endforeach
                           </select>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group" style="margin-top: 30px;border: 1px solid;padding: 37px;margin-top: 30px;padding: 37px;border-radius: 14px;-webkit-box-shadow: 0px 1px 9px 0px rgba(0,0,0,0.75);-moz-box-shadow: 0px 1px 9px 0px rgba(0,0,0,0.75);box-shadow: 0px 1px 9px 0px rgba(0,0,0,0.75);">
                        <div class="row">
                        <div class="col-md-12" align="center">
                           <h2 style="font-size: 18px;margin-top: 0px;" class='form_description'>Inserte las Unidades: <input type="text" id="unidades"></h2>
                        </div>
                     </div>
                        <div class="productos_div">
                           <div class="row input_div">
                              
                           </div>
                        </div>
                     </div>
                  </div>
                  <div style="display: none" class="ln_solid"></div>
                  <div class="form-group">
                     <div class="col-md-12" style="padding-top: 15px;">
                        <button onclick="ValidarGeneral('editarGuiaEntradaForm', 'update', 'guias-entrada')" style="width: 100%" class="btn btn-success btn-modal btn_avicola">Guardar</button>
                        <div align="center">
                           <div class="loading_avicola" style="display:none;width: 35px;height: 35px;"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>

<script>
   $(document).ready(function(){
      $("#editarGuiaEntrada #id_proveedor, #editarGuiaEntrada #id_producto").chosen();
   });


   const $unidadesEdit = document.querySelector('#editarGuiaEntradaForm #unidades');

   const AddUnidadEditar = function(e) {

      for (var i = 0; i < $("#editarGuiaEntradaForm #unidades").val(); i++) {

         if ($('.div_product_'+i).length==0) {
         
            $("#editarGuiaEntradaForm .input_div").append('<div class="col-md-2 div_product_'+i+'" style="margin-top: 10px;">'+
                                                         '  <input type="text" id="peso'+i+'" required="required" class="form-control col-md-7 col-xs-12" placeholder="Peso">'+
                                                         '</div>');

         }

      }

      for (var i = $("#editarGuiaEntradaForm #unidades").val(); i < 300; i++) {


               $('#editarGuiaEntradaForm .div_product_'+i).remove();

      }
   }

   $unidadesEdit.addEventListener('input', AddUnidadEditar) // register for oninput


</script>
<style>
   .btn-modal{
   position: inherit;
   transform: scale(1);
   border-radius: 8%;
   height: auto;
   font-size: initial;
   }
   .form_description{
      font-size: 14.5px;
   }
    #editarChoferForm .chosen-container{
          margin-top: 5px;
   }
</style>
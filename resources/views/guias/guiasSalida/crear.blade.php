<div class="contenedor">
   <button onclick="$('#crearGuiaSalida').modal('toggle')" class="botonF1">
   <span>+</span>
   </button>
</div>
<div id="crearGuiaSalida" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h2>Registrar Guia de Entrada</h2>
         </div>
         <div class="modal-body">
            <form id="crearGuiaSalidaForm" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" style="padding: 20px;">
               <input type="hidden" id="Productos">
               <div class="row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <small class='form_description' style="margin-bottom: 5px">Productos seleccionados: <span id="product_numer">0</span></small>
                           <button onclick="$('#EscogerProductos').modal({backdrop: 'static',keyboard: false})" style="width: 100%; color:#757976 font-weight: 600;margin-bottom: 6px;margin-top: 5px;" type="button" class="btn btn-outline-success">Añadir Productos</button>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <small class='form_description'>Descripción de la Guia de Salida</small>
                           <input type="text" id="descripcion_guia" required="required" class="form-control col-md-7 col-xs-12">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <small class='form_description'>Fecha pautada para la entrega</small>
                           <input type="date" id="fecha_entrega" required="required" class="form-control col-md-7 col-xs-12">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <small class='form_description'>Clientes</small>
                           <select type="text" id="id_cliente" class="form-control col-md-7 col-xs-12">
                              @foreach ($Datos["Clientes"] as $Cliente)
                                 <option value="{{$Cliente->id}}">{{$Cliente->nombre}}</option>
                              @endforeach
                           </select>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <small class='form_description'>Chofer</small>
                           <select type="text" id="id_empleado" class="form-control col-md-7 col-xs-12">
                              @foreach ($Datos["Choferes"] as $Chofer)
                                 <option value="{{$Chofer->id}}">{{$Chofer->nombre}}</option>
                              @endforeach
                           </select>
                     </div>
                  </div>
                  @for ($i = 1; $i <5 ; $i++)
                  <div class="col-md-3" style="margin-top: 10px;">
                     <div class="form-group">
                        <small class='form_description'>Acompañante {{$i}}</small>
                           <select type="text" id="acompanante_{{$i}}" class="form-control col-md-7 col-xs-12">
                              @foreach ($Datos["Empleados"] as $Empleado)
                                 <option value="{{$Empleado->id}}">{{$Empleado->nombre}}</option>
                              @endforeach
                           </select>
                     </div>
                  </div>
                  @endfor
                  <input type="hidden" id="productos">
                  <div style="display: none" class="ln_solid"></div>
                  <div class="form-group">
                     <div class="col-md-12" style="padding-top: 15px;">
                        <button onclick="RecopDat(this)" style="width: 100%" class="btn btn-success btn-modal btn_avicola">Guardar</button>
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
<style>  
.chosen-container{
       padding-top: 4px !important;
}
</style>
<script>

   function RecopDat(){

      var Pro='';
      $("#RecopilarProductosForm input").map(function(){
          if($(this).prop("checked")==true) {
          Pro+=this.value+",";
          }
      });
      $("#crearGuiaSalidaForm #productos").val(Pro);
         ValidarGeneral('crearGuiaSalidaForm', 'crear', 'guias-salida');
      }


      $(document).ready(function(){

         $("#crearGuiaSalidaForm #acompanante_1, #crearGuiaSalidaForm #acompanante_2, #crearGuiaSalidaForm #acompanante_3, #crearGuiaSalidaForm #acompanante_4").val("");

         $("#crearGuiaSalidaForm #id_cliente, #crearGuiaSalidaForm #id_empleado, #crearGuiaSalidaForm #acompanante_1, #crearGuiaSalidaForm #acompanante_2, #crearGuiaSalidaForm #acompanante_3, #crearGuiaSalidaForm #acompanante_4").chosen();
      });
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

   #crearChoferForm .chosen-container{
          margin-top: 5px;
   }
</style>

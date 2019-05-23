<div class="contenedor">
   <button onclick="$('#crearChofer').modal('toggle')" class="botonF1">
   <span>+</span>
   </button>
</div>
<div id="crearChofer" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h2>Registrar Chofer</h2>
         </div>
         <div class="modal-body">
            <form id="crearChoferForm" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" style="padding: 20px;">
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <small class='form_description'>Nombre</small>
                           <input type="text" id="nombre" required="required" class="form-control col-md-7 col-xs-12">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <small class='form_description'>Email</small>
                           <input type="text" id="email" data-parsley-type="email" required="required" class="form-control col-md-7 col-xs-12">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <small class='form_description'>Apellido Paterno</small>
                           <input type="text" id="apellido_paterno" required="required" class="form-control col-md-7 col-xs-12">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <small class='form_description'>Apellido Materno</small>
                           <input type="text" id="apellido_materno" required="required" class="form-control col-md-7 col-xs-12">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <small class='form_description'>Cargo del Empleado</small>
                           <select id="cargo" class="form-control">
                              @foreach ($Datos["Cargos"] as $Cargo)
                                 <option value="{{$Cargo->id}}">{{$Cargo->nombre}}</option>
                              @endforeach
                           </select>
                     </div>
                  </div>
                  <input type="hidden" id="chofer" value="Si">
                  <div class="col-md-6">
                     <div class="form-group">
                        <small class='form_description'>Licencia</small>
                           <input type="text" id="licencia" required="required" class="form-control col-md-7 col-xs-12">
                     </div>
                  </div>
                  <div style="display: none" class="ln_solid"></div>
                  <div class="form-group">
                     <div class="col-md-12" style="padding-top: 15px;">
                        <button onclick="ValidarGeneral('crearChoferForm', 'crear', 'choferes')" style="width: 100%" class="btn btn-success btn-modal btn_avicola">Guardar</button>
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
      $("#crearChoferForm #cargo").chosen();
   })
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

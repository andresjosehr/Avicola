
<div id="CrearCuenta" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h2>Crear cuenta para empleado</h2>
         </div>
         <div class="modal-body">
            <form id="CrearCuentaForm" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" style="padding: 20px;">
               <input type="hidden" id="id_empleado">
               <div class="row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <small class='form_description'>Introduzca una contraseña para la cuenta de usuario</small>
                           <input type="password" id="password" required="required" class="form-control col-md-7 col-xs-12">
                     </div>
                  </div>
                  <div style="display: none" class="ln_solid"></div>
                  <div class="form-group">
                     <div class="col-md-12" style="padding-top: 15px;">
                        <button onclick="ValidarGeneral('CrearCuentaForm', 'crear_cuenta', 'empleados')" style="width: 100%" class="btn btn-success btn-modal btn_avicola">Guardar</button>
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
      $("#editarEmpleadoForm #cargo").chosen();
      validateChofer("editarEmpleadoForm");
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
    #crearAutomovilForm .chosen-container{
          margin-top: 5px;
   }
</style>
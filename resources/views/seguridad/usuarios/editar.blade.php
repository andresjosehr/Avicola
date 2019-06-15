
<div id="editarUsuario" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h2>Asigna el usuario a un grupo de acceso</h2>
         </div>
         <div class="modal-body">
            <form id="editarUsuarioForm" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" style="padding: 20px;">
               <input type="hidden" id="id">
               <input type="hidden" id="id_grupo">
               <div class="row">
                  @foreach ($Datos["GruposUsuarios"] as $GrupoUsuario)
                     <div class="col-md-4">
                        <div class="radio">
                            <label class="">
                              <div class="iradio_flat-green" style="position: relative;"><input value="{{$GrupoUsuario->id}}" type="radio" class="flat" name="iCheck" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> {{$GrupoUsuario->descripcion}}
                            </label>
                          </div>
                     </div>
                  @endforeach
                  <div style="display: none" class="ln_solid"></div>
                  <div class="form-group">
                     <div class="col-md-12" style="padding-top: 40px;">
                        <button onclick="EditarUsuario()" style="width: 100%" class="btn btn-success btn-modal btn_avicola">Guardar</button>
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
      $("#editarChoferForm #cargo").chosen();
      validateChofer("editarChoferForm");
   })

   function EditarUsuario() {

      $("#editarUsuario #id_grupo").val($("#editarUsuario input[type=radio]:checked").val());

      ValidarGeneral('editarUsuarioForm', 'update', 'usuarios')
   }
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
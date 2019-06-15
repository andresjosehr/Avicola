
<div id="editarGupoUsuario" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg" style="width: 80%;">
      <div class="modal-content">
         <div class="modal-header">
            <h2>Editar Cargo</h2>
         </div>
         <div class="modal-body">
            <form id="editarGupoUsuarioForm" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" style="padding: 20px;">
               <input type="hidden" id="id">
               <div class="row">
                  <div class="col-md-12" style="margin-bottom: 20px">
                     <div class="form-group">
                        <small class='form_description'>Descripcion del grupo</small>
                           <input type="text" id="descripcion" required="required" class="form-control col-md-7 col-xs-12">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <table id="UsuariosTableEdit" class="display" style="width:100%">
                          <thead>
                              <tr>
                                  <th>Nombre</th>
                                  <th>Email</th>
                                  <th>Seleccionar</th>
                              </tr>
                          </thead>
                          <tbody>
                                  @foreach ($Datos["Usuarios"] as $Usuario)
                                  @if ($Usuario->rol==2)
                                  <tr id="usuario_{{$Usuario->id}}">
                                      <td>{{$Usuario->nombre}}</td>
                                      <td>{{$Usuario->email}}</td>
                                      <td>
                                       <div class="checkbox">
                                           <label class="">
                                             <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" value="{{$Usuario->id}}" class="flat" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                           </label>
                                         </div>
                                      </td>
                                  </tr>
                                  @endif
                                  @endforeach
                          </tbody>
                          <tfoot>
                              <tr>
                                  <th>Nombre</th>
                                  <th>Email</th>
                                  <th>Seleccionar</th>
                              </tr>
                          </tfoot>
                      </table>
                  </div>
                  <div class="col-md-6">
                     <table id="ModulosTableEdit" class="display" style="width:100%">
                          <thead>
                              <tr>
                                  <th>Nombre</th>
                                  <th>Seleccionar</th>
                              </tr>
                          </thead>
                          <tbody>
                                  @foreach ($Modulos as $Modulo)
                                  <tr id="modulo_{{$Modulo->id}}">
                                      <td>{{$Modulo->descripcion}}</td>
                                      <td>
                                         <div class="checkbox">
                                           <label class="">
                                             <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" value="{{$Modulo->id}}" identificador='{{$Modulo->id}}' class="flat" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                           </label>
                                         </div>
                                      </td>
                                  </tr>
                                  @endforeach
                          </tbody>
                          <tfoot>
                              <tr>
                                  <th>Nombre</th>
                                  <th>Seleccionar</th>
                              </tr>
                          </tfoot>
                      </table>
                  </div>
                  <input type="hidden" id="usuarios">
                  <input type="hidden" id="modulos">
                  <div style="display: none" class="ln_solid"></div>
                  <div class="form-group">
                     <div class="col-md-12" style="padding-top: 15px;">
                        <button onclick="EditarGrupo()" style="width: 100%" class="btn btn-success btn-modal btn_avicola">Guardar</button>
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
      $('#editarGupoUsuarioForm #UsuariosTableEdit,#editarGupoUsuarioForm #ModulosTableEdit').DataTable({
                language: {
                    url: 'http://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json'
                }
            });
   })



$("#UsuariosTableEdit .icheckbox_flat-green").click(function(){

         if ($(this).find("input").prop("checked")==false) {
            window.usuariosEdit.push($(this).find("input").val());
         }else{

             var index = window.usuariosEdit.indexOf($(this).find("input").val());
          
             if (index > -1) {
                window.usuariosEdit.splice(index, 1);
             }

         }
   })


   $("#ModulosTableEdit .icheckbox_flat-green").click(function(){

         if ($(this).find("input").prop("checked")==false) {
            window.modulosEdit.push($(this).find("input").val());
         }else{

             var index = window.modulosEdit.indexOf($(this).find("input").val());
          
             if (index > -1) {
                window.modulosEdit.splice(index, 1);
             }

         }
   })


   function EditarGrupo() {

      $("#editarGupoUsuarioForm #usuarios").val(window.usuariosEdit)
      $("#editarGupoUsuarioForm #modulos").val(window.modulosEdit)

      ValidarGeneral('editarGupoUsuarioForm', 'update', 'grupos-usuarios')
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
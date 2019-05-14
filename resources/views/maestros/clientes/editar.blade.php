
<div id="editarCliente" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h2>Editar Cliente</h2>
         </div>
         <div class="modal-body">
            <form id="editarClienteForm" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" style="padding: 20px;">
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <small class='form_description'>Tipo Persona</small>
                           <select id="tipo_persona" class="form-control" required="">
                              @foreach ($TipoPersonas as $TipoPersona)
                                <option value="{{$TipoPersona->id}}">{{$TipoPersona->tipo}}</option>
                              @endforeach
                          </select>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <small class='form_description'>Tipo de Documento</small>
                           <select id="tipo_documento" class="form-control" required="">
                              @foreach ($TipoDocumentos as $TipoDocumento)
                                <option value="{{$TipoDocumento->id}}">{{$TipoDocumento->descripcion}}</option>
                              @endforeach
                          </select>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <small class='form_description'>Nombre o Razón social</small>
                           <input type="text" id="nombre" required="required" class="form-control col-md-7 col-xs-12">
                           <input type="hidden" id="id">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <small class='form_description'>Identificación del Cliente</small>
                           <input type="text" id="codigo" required="required" class="form-control col-md-7 col-xs-12">
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
                        <small class='form_description'>Direccion</small>
                           <input type="text" id="direccion" required="required" class="form-control col-md-7 col-xs-12">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <small class='form_description'>Direccion 2</small>
                           <input type="text" id="direccion_2" required="required" class="form-control col-md-7 col-xs-12">
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group">
                        <small class='form_description'>Codigo Postal</small>
                           <input type="text" id="codigo_postal" required="required" class="form-control col-md-7 col-xs-12">
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="form-group">
                        <small class='form_description'>Pais</small>
                            <select id="pais">
                              @foreach ($Paises as $Pais)
                                 <option>{{$Pais->nombre}}</option>
                              @endforeach
                            </select>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="form-group">
                        <small class='form_description'>Departamento</small>
                            <select id="departamento">
                              @foreach ($Ubigeo["departamento"] as $Departamento)
                                 <option value="{{str_replace($no_permitidas, $permitidas ,$Departamento->departamento)}}" class='{{str_replace($no_permitidas, $permitidas ,$Departamento->departamento)}}'>{{$Departamento->departamento}}</option>
                              @endforeach
                              </select>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="form-group">
                        <small class='form_description'>Provincia</small>
                            <select id="provincia">
                              @foreach ($Ubigeo["provincia"] as $Provincia)
                                 <option value="{{str_replace($no_permitidas, $permitidas ,$Provincia->departamento)}}" class="{{str_replace($no_permitidas, $permitidas ,$Provincia->departamento)}}">{{$Provincia->provincia}}</option>
                              @endforeach
                              </select>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="form-group">
                        <small class='form_description'>Distrito</small>
                            <select id="distrito">
                                @foreach ($Ubigeo["distrito"] as $Distrito)
                                 <option value="{{str_replace($no_permitidas, $permitidas ,$Distrito->provincia)}}" class="{{str_replace($no_permitidas, $permitidas ,$Distrito->provincia)}}">{{$Distrito->distrito}}</option>
                              @endforeach
                              </select>
                     </div>
                  </div>
                  <div style="display: none" class="ln_solid"></div>
                  <div class="form-group">
                     <div class="col-md-12" style="padding-top: 15px;">
                        <button {{-- type="submit" --}} onclick="ValidarGeneral('editarClienteForm', 'update', 'clientes')" style="width: 100%" class="btn btn-success btn-modal btn_avicola">Guardar</button>
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
</style>
<script>
	$(document).ready(function(){
      $("#editarClienteForm #pais, #editarClienteForm #provincia, #editarClienteForm #departamento, #editarClienteForm #distrito, #editarClienteForm #tipo_persona, #editarClienteForm #tipo_documento").chosen();
      validateUbigeoEditar("editarClienteForm");
      validateTipoDocumentoEditar();
   });

      $("#editarClienteForm #provincia").empty();
         for(key in window.Ubigeo["AMAZONAS"]){
            $("#editarClienteForm #provincia").append("<option value='"+key+"'>"+key.replace(/_/g, " ")+"</option>");
         }

         $('#editarClienteForm #departamento, #editarClienteForm #provincia, #editarClienteForm #distrito').trigger("chosen:updated");



      $("#editarClienteForm #distrito").empty();

         $("#editarClienteForm #distrito").append("<option>"+"AMAZONAS"+"</option>");

         $('#editarClienteForm #departamento, #editarClienteForm #provincia, #editarClienteForm #distrito').trigger("chosen:updated");


</script>
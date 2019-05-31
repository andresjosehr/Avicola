<div class="contenedor">
   <button onclick="$('#crearTipoProducto').modal('toggle')" class="botonF1">
   <span>+</span>
   </button>
</div>
<div id="crearTipoProducto" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h2>Registrar Tipo de Producto</h2>
         </div>
         <div class="modal-body">
            <form id="crearTipoProductoForm" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" style="padding: 20px;">
               <div class="row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <small class='form_description'>Descripcion del tipo de producto</small>
                           <input type="text" id="descripcion" required="required" class="form-control col-md-7 col-xs-12">
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group">
                        <small class='form_description'>Categoria Asociada</small>
                           <select type="text" id="id_categoria" required="required" class="form-control col-md-7 col-xs-12">
                              @foreach ($Datos["Categorias"] as $Categoria)
                                 <option value="{{$Categoria->id}}">{{$Categoria->descripcion}}</option>
                              @endforeach
                           </select>
                     </div>
                  </div>
                  <div style="display: none" class="ln_solid"></div>
                  <div class="form-group">
                     <div class="col-md-12" style="padding-top: 15px;">
                        <button onclick="ValidarGeneral('crearTipoProductoForm', 'crear', 'tipo_productos')" style="width: 100%" class="btn btn-success btn-modal btn_avicola">Guardar</button>
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
      $("#crearTipoProductoForm #id_categoria").chosen();
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

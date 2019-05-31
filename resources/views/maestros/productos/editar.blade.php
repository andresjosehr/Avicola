
<div id="editarProducto" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h2>Editar Producto</h2>
         </div>
         <div class="modal-body">
            <form id="editarProductoForm" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" style="padding: 20px;">
               <input type="hidden" id="id">
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <small class='form_description'>Descripcion del Producto</small>
                           <input type="text" id="descripcion" required="required" class="form-control col-md-7 col-xs-12">
                     </div>
                  </div>
                   <div class="col-md-6">
                     <div class="form-group">
                        <small class='form_description'>Descripcion corta del Producto</small>
                           <input type="text" id="descripcion_corta" required="required" class="form-control col-md-7 col-xs-12">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <small class='form_description'>Nombre del Producto</small>
                           <select id="id_tipo_producto" required="required" class="form-control col-md-7 col-xs-12">
                              @foreach ($Datos["TipoProductos"] as $TipoProducto)
                                 <option value="{{$TipoProducto->id}}">{{$TipoProducto->descripcion}}</option>
                              @endforeach
                           </select>
                     </div>
                  </div>
                   <div class="col-md-6">
                     <div class="form-group">
                        <small class='form_description'>Nombre del Producto</small>
                           <select id="id_proveedor" required="required" class="form-control col-md-7 col-xs-12">
                              @foreach ($Datos["Proveedores"] as $Proveedor)
                                 <option value="{{$Proveedor->id}}">{{$Proveedor->nombre}}</option>
                              @endforeach
                           </select>
                     </div>
                  </div>
                  <div style="display: none" class="ln_solid"></div>
                  <div class="form-group">
                     <div class="col-md-12" style="padding-top: 15px;">
                        <button onclick="ValidarGeneral('editarProductoForm', 'update', 'productos')" style="width: 100%" class="btn btn-success btn-modal btn_avicola">Guardar</button>
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
      $("#editarProductoForm #id_tipo_producto, #editarProductoForm #id_proveedor").chosen();
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
    #editarChoferForm .chosen-container{
          margin-top: 5px;
   }
</style>
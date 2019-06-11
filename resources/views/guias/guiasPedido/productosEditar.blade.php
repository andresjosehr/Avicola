<div id="EscogerProductosEditar" style="z-index: 9999999;" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h2 style="text-align: center;">Escoge los productos que pertenecen a la guia de entrada</h2>
         </div>
         <div class="modal-body">
            <form id="RecopilarProductosEditarForm" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" style="padding: 20px;">
               <input type="hidden" id="Productos">
               <div class="row">
                  <div class="col-md-12">
                     <table id="RecopilarProductosEditarTable" class="display" style="width:100%">
                       <thead>
                           <tr>
                               <th>ID</th>
                               <th>Tipo de producto</th>
                               <th>Guia de entrada</th>
                               <th>Proveedor</th>
                               <th>Peso</th>
                               <th>Escoger</th>
                           </tr>
                       </thead>
                       <tbody>
                           @foreach ($Datos["UnidadesProductos"] as $Producto)
                              @if ($Producto->estatus==0 || $Producto->estatus==1)
                                 <tr>
                                     <td>{{$Producto->id}}</td>
                                     <td>{{$Producto->Producto["descripcion"]}}</td>
                                     <td>{{$Producto->GuiaEntrada["descripcion_guia"]}}</td>
                                     <td>{{$Producto->GuiaEntrada->Proveedor["nombre"]}}</td>
                                     <td>{{$Producto->peso}}</td>
                                     <td>
                                        <div class="checkbox">
                                           <label class="" onclick="ProductCountEdit('producto_{{$Producto->id}}')">
                                             <div class="icheckbox_flat-green" style="position: relative;">
                                                <input type="checkbox" class="flat" name="producto_{{$Producto->id}}" id="producto_{{$Producto->id}}" data-estatus="{{$Producto->estatus}}" data-id_guia_pedido="{{$Producto->id_guia_pedido}}" value="{{$Producto->id}}" style="position: absolute; opacity: 0;">
                                                <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                             </div> 
                                           </label>
                                         </div>
                                     </td>
                                  </tr>
                              @endif
                           @endforeach
                       </tbody>
                       <tfoot>
                           <tr>
                               <th>ID</th>
                               <th>Tipo de producto</th>
                               <th>Proveedor</th>
                               <th>Guia de entrada</th>
                               <th>Peso</th>
                               <th>Escoger</th>
                           </tr>
                       </tfoot>
                   </table>
                  </div>
                  <div style="display: none" class="ln_solid"></div>
                  <div class="form-group">
                     <div class="col-md-12" style="padding-top: 15px;">
                        <button type="button" onclick='ProductCountbtnEdit();' style="width: 100%" class="btn btn-success btn-modal btn_avicola">Aceptar</button>
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
      window.ProductNumber=0;
      $("#editarGuiaPedido #product_numer").text(window.ProductNumber);

      $('#RecopilarProductosEditarForm #RecopilarProductosEditarTable').DataTable({
                language: {
                    url: 'http://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json'
                }
            });
   })
   function ProductCountEdit(elemento){

      if ($("#RecopilarProductosEditarForm #"+elemento).prop("checked")==true) {
         window.ProductNumber--;
         $("#RecopilarProductosEditarForm #"+elemento).parent().addClass("checked");
      }else{
         window.ProductNumber++;
         $("#RecopilarProductosEditarForm #"+elemento).parent().removeClass("checked");
      }
      console.log(elemento);
      $("#editarGuiaPedido #product_numer").text(window.ProductNumber);
   }


   function ProductCountbtnEdit(){

      var Produc=0;
      $("#RecopilarProductosEditarForm input").map(function(){
         if($(this).prop("checked")==true){
            Produc++;
         }
      })
      
      $("#editarGuiaPedido #product_numer").text(Produc);
      $("#EscogerProductosEditar").modal("hide");
   }
</script>




<style>  
.chosen-container{
       padding-top: 4px !important;
}
</style>

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

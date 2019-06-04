<div class="contenedor">
   <button onclick="$('#crearGuiaEntrada').modal('toggle')" class="botonF1">
   <span>+</span>
   </button>
</div>
<div id="crearGuiaEntrada" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h2>Registrar Guia de Entrada</h2>
         </div>
         <div class="modal-body">
            <form id="crearGuiaEntradaForm" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" style="padding: 20px;">
               <input type="hidden" id="Productos">
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
                  <div class="col-md-12">
                     <div class="form-group">
                        <small class='form_description'>Proveedor</small>
                           <select type="text" id="id_proveedor" class="form-control col-md-7 col-xs-12">
                              @foreach ($Datos["Proveedores"] as $Proveedor)
                                 <option value="{{$Proveedor->id}}">{{$Proveedor->nombre}}</option>
                              @endforeach
                           </select>
                     </div>
                  </div>

                  <div class="col-md-12">
                     <div class="form-group" style="margin-top: 30px;border: 1px solid;padding: 37px;margin-top: 30px;padding: 37px;border-radius: 14px;-webkit-box-shadow: 0px 1px 9px 0px rgba(0,0,0,0.75);-moz-box-shadow: 0px 1px 9px 0px rgba(0,0,0,0.75);box-shadow: 0px 1px 9px 0px rgba(0,0,0,0.75);">
                        <div class="row">
                        <div class="col-md-12" align="center">
                           <h2 style="font-size: 18px;margin-top: 0px;" class='form_description'>Productos: <span id="product_numer">0</span></h2>
                        </div>
                     </div>
                        <div class="productos_div">
                           <div class="input_div">
                              
                           </div>
                           <div class="btn_div" style="margin-top: 10px">
                              <button type="button" onclick="AddProduct('{{$Datos["TipoProductos"]}}')" style="width: 100%" class="btn btn-primary btn-modal">Añadir Producto</button>
                           </div>
                        </div>
                     </div>
                  </div>
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

   function RecopDat(e) {



      var Productos={}, i=0;
      $("#crearGuiaEntradaForm .input_div .row").map(function(){
         Productos[i]={};
         Productos[i].descripcion=$(this).find("#descripcion").val();
         Productos[i].descripcion_corta=$(this).find("#descripcion_corta").val();
         Productos[i].id_tipo_producto=$(this).find("#id_tipo_producto").val();
         Productos[i].peso=$(this).find("#peso").val();  
         Productos[i].id_proveedor=$("#crearGuiaEntradaForm #id_proveedor").val();  
         i++;
      });

      $("#Productos").val(JSON.stringify(Productos));
      console.log($("#Productos").val())
      ValidarGeneral('crearGuiaEntradaForm', 'crear', 'guias-entrada');
   }
   $(document).ready(function(){
      $("#crearGuiaEntradaForm #id_proveedor").chosen();
         window.ProductCount=0;
         window.ProductTot=0;
   });



   function AddProduct(TipoProductos) {

      if (window.ProductTot!=0) {
         var descripcion       = $("#crearGuiaEntradaForm .div_product_"+window.ProductCount+" #descripcion").last().val();
         var descripcion_corta = $("#crearGuiaEntradaForm .div_product_"+window.ProductCount+" #descripcion_corta").last().val();
         var id_tipo_producto  = $("#crearGuiaEntradaForm .div_product_"+window.ProductCount+" #id_tipo_producto").last().val();
      } else{
         var descripcion       = "";
         var descripcion_corta = "";
         var id_tipo_producto  = "";
      }


      window.ProductCount++;
      window.ProductTot++;
      TipoProductos=JSON.parse(TipoProductos);
      var selec=''
      for (key in TipoProductos) {
            selec += '<option value="'+TipoProductos[key].id+'">'+TipoProductos[key].descripcion+'</option>'
      }

      $("#crearGuiaEntradaForm .input_div").append('<div class="row div_product_'+window.ProductCount+'" style="margin-top: 10px; display:none">'+
                              '   <div class="col-md-3">'+
                              '      <input type="text" value="'+descripcion+'" id="descripcion" required="required" class="form-control col-md-7 col-xs-12" placeholder="Descripción">'+
                              '   </div>'+
                              '   <div class="col-md-3">'+
                              '      <input type="text" value="'+descripcion_corta+'" id="descripcion_corta" required="required" class="form-control col-md-7 col-xs-12" placeholder="Descripción corta">'+
                              '   </div>'+
                              '   <div class="col-md-3">'+
                              '      <select type="text" id="id_tipo_producto" required="required" class="form-control col-md-7 col-xs-12" placeholder="Tipo de Producto">'+selec+'</select>'+
                              '   </div>'+
                              '   <div class="col-md-2">'+
                              '      <input type="text" id="peso" required="required" class="form-control col-md-7 col-xs-12" placeholder="Peso">'+
                              '   </div>'+
                              '   <div class="col-md-1">'+
                              '      <button type="button" onclick="deleteProduct('+"'"+window.ProductCount+"'"+')" style="width: 100%" class="btn btn-danger btn-modal">'+
                              '         <i style="border: 0px" class="fa fa-trash"></i>'+
                              '      </button>'+
                              '   </div>'+
                              '</div>');

      $('#crearGuiaEntradaForm .div_product_'+window.ProductCount+' #id_tipo_producto').chosen();
      $('#crearGuiaEntradaForm .div_product_'+window.ProductCount+' #id_tipo_producto').val(id_tipo_producto);
      $('#crearGuiaEntradaForm .div_product_'+window.ProductCount+' #id_tipo_producto').trigger("chosen:updated");

      $('#crearGuiaEntradaForm .div_product_'+window.ProductCount).show(200);
      $("#crearGuiaEntradaForm #product_numer").text(window.ProductTot);


   }
   function deleteProduct(id) {
      window.ProductTot--;
      $("#crearGuiaEntradaForm #product_numer").text(window.ProductTot);
      $("#crearGuiaEntradaForm .div_product_"+id).hide(200, function() {
        $("#crearGuiaEntradaForm .div_product_"+id).remove()
      })
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

   #crearChoferForm .chosen-container{
          margin-top: 5px;
   }
</style>

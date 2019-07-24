<div class="contenedor">
   <button onclick="$('#crearGuiaPedido').modal('toggle')" class="botonF1">
   <span>+</span>
   </button>
</div>
<div id="crearGuiaPedido" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h2>Registrar Guia de Pedido</h2>
         </div>
         <div class="modal-body">
            <form id="crearGuiaPedidoForm" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" style="padding: 20px;">
               <input type="hidden" id="id_guia_salida">
               <div class="row">
                  <div class="col-md-4">
                     <div class="form-group">
                        <small class='form_description'>Guia de Salida</small>
                           <select onchange="InfoGuiaSalida(this)" type="text" id="guiaSalida" class="form-control col-md-7 col-xs-12">
                              @foreach ($Datos["GuiasSalida"] as $GuiaSalida)
                                 <option value="{{$GuiaSalida->id}}" 
                                         guia-fecha='{{$GuiaSalida->fecha_entrega}}'
                                         guia-unidades-productos="{{$GuiaSalida->UnidadesProductos}}">{{$GuiaSalida->descripcion_guia}}</option>
                              @endforeach
                           </select>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-group">
                        <small class='form_description'>Fecha</small>
                           <input type="date" id="fecha_entrega" required="required" class="form-control col-md-7 col-xs-12" disabled="">
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-group">
                        <small class='form_description'>Peso</small>
                           <input type="text" id="peso_total" required="required" class="form-control col-md-7 col-xs-12" disabled="">
                     </div>
                  </div>



                  <div class="col-md-6">
                     <div class="form-group">
                        <small class='form_description'>Descripcion de la guia</small>
                           <input type="text" id="descripcion_guia_pedido" required="required" class="form-control col-md-7 col-xs-12" >
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <small class='form_description'>Fecha entrega</small>
                           <input type="date" id="fecha_entrega_guia_salida" required="required" class="form-control col-md-7 col-xs-12" >
                     </div>
                  </div>

                  <div id="VentasPedido" style="padding-top: 100px;padding-bottom: 100px;"> 
                     <h2 align="center">Informacion de guia de Pedido</h2>
                  </div>




                  <div class="col-md-3">
                     <div class="form-group">
                        <small class='form_description'>Pago Total</small>
                           <input type="text" id="precio_vendido" required="required" class="form-control col-md-7 col-xs-12" disabled="">
                     </div>
                  </div>

                  <div class="col-md-3">
                     <div class="form-group">
                        <small class='form_description'>Peso Total</small>
                           <input type="text" id="peso_vendido" required="required" class="form-control col-md-7 col-xs-12" disabled="">
                     </div>
                  </div>

                  <div class="col-md-3">
                     <div class="form-group">
                        <small class='form_description'>Merma</small>
                           <input type="text" id="merma" required="required" class="form-control col-md-7 col-xs-12">
                     </div>
                  </div>

                  <div class="col-md-3">
                     <div class="form-group">
                        <small class='form_description'>Cartones devueltos</small>
                           <input type="text" id="cartones" required="required" class="form-control col-md-7 col-xs-12">
                     </div>
                  </div>

                  <div class="col-md-12">
                     <div class="form-group">
                        <button type="button" class="btn btn-primary btn-block" onclick="VentasPedido()">Añadir ventas</button>
                     </div>
                  </div>
                  <input type="hidden" id="productos">
                  <div style="display: none;" class="ln_solid"></div>
                  <div class="form-group">
                     <div class="col-md-12" style="padding-top: 15px;">
                        <button onclick="ValidarGeneral('crearGuiaPedidoForm', 'crear', 'guias-pedido')" style="width: 100%" class="btn btn-success btn-modal btn_avicola">Guardar</button>
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


   function InfoGuiaSalida(e) {
      $("#crearGuiaPedidoForm #fecha_entrega").val($("#"+e.id+" option:selected").attr("guia-fecha"));
      $("#crearGuiaPedidoForm #id_guia_salida").val($("#"+e.id+" option:selected").val());
      var UnidadesProductos=JSON.parse($("#"+e.id+" option:selected").attr("guia-unidades-productos"));

      var pesoTotal=0;
      for (var key in UnidadesProductos) {
         pesoTotal=Number(pesoTotal)+Number(UnidadesProductos[key].peso);
      }

      $("#crearGuiaPedidoForm #peso_total").val(pesoTotal);
   }




      function VentasPedido() {

         window.ventas++;

         var UnidadesProductos=JSON.parse($("#crearGuiaPedidoForm option:selected").attr("guia-unidades-productos"));

         var Precios=[]; var option="";
         for (var key in UnidadesProductos) {
            if (UnidadesProductos[key].producto.precio_1!="") option=option+"<option value='"+UnidadesProductos[key].producto.precio_1+"'>"+UnidadesProductos[key].producto.precio_1+"</option>";
            if (UnidadesProductos[key].producto.precio_2!="") option=option+"<option value='"+UnidadesProductos[key].producto.precio_2+"'>"+UnidadesProductos[key].producto.precio_2+"</option>";
            if (UnidadesProductos[key].producto.precio_3!="") option=option+"<option value='"+UnidadesProductos[key].producto.precio_3+"'>"+UnidadesProductos[key].producto.precio_3+"</option>";
            if (UnidadesProductos[key].producto.precio_4!="") option=option+"<option value='"+UnidadesProductos[key].producto.precio_4+"'>"+UnidadesProductos[key].producto.precio_4+"</option>";
            break;
         }






         $("#VentasPedido").append("<div id='venta_numero_"+window.ventas+"' style='display: none'>"+
                                       "<div class='col-md-3'>"+
                                          "<div class='form-group'>"+
                                          "<small class='form_description'>Cliente</small>"+
                                          '<select id="cliente_'+window.ventas+'" class="form-control col-md-7 col-xs-12">'+
                                             @foreach ($Datos['Clientes'] as $Cliente)
                                                '<option value="{{$Cliente->id}}">{{$Cliente->nombre}}</option>'+
                                             @endforeach
                                          '</select>'+
                                          "</div>"+
                                       "</div>"+
                                       "<div class='col-md-3'>"+
                                          "<div class='form-group'>"+
                                             "<small class='form_description'>Precio</small>"+
                                             '<select onchange="CalcularPeso('+"'"+window.ventas+"'"+')" id="preciorango_'+window.ventas+'" class="preciorango_class form-control col-md-7 col-xs-12">'+
                                             option+
                                          '</select>'+
                                          "</div>"+
                                       "</div>"+
                                       "<div class='col-md-2'>"+
                                          "<div class='form-group'>"+
                                             "<small class='form_description'>Peso</small>"+
                                                "<input onchange='CalcularPeso("+'"'+window.ventas+'"'+")' type='text' id='peso_"+window.ventas+"' required='required' class='peso_class form-control col-md-7 col-xs-12'>"+
                                          "</div>"+
                                       "</div>"+
                                       "<div class='col-md-2'>"+
                                          "<div class='form-group'>"+
                                             "<small class='form_description'>Pago</small>"+
                                                "<input disabled='' type='text' id='preciovendido_"+window.ventas+"' required='required' class='preciovendido_class form-control col-md-7 col-xs-12'>"+
                                          "</div>"+
                                       "</div>"+
                                       "<div class='col-md-2'>"+
                                          "<small class='form_description'>Accion</small>"+
                                          "<button onclick='EliminarVenta("+'"'+window.ventas+'"'+")' type='button' class='btn btn-danger'>Eliminar</button>"+
                                       "</div>"+
                                    "</div>");


         $("#crearGuiaPedidoForm #cliente_"+window.ventas).val("");
         $("#crearGuiaPedidoForm #preciorango_"+window.ventas).val("");

         $("#crearGuiaPedidoForm #cliente_"+window.ventas).chosen();
         $("#crearGuiaPedidoForm #preciorango_"+window.ventas).chosen();

         $("#venta_numero_"+window.ventas).fadeIn(300)


      }

      function CalcularPeso(fila) {


         if ($("#peso_"+window.ventas).val()!="" && $("#preciorango_"+window.ventas).val()!="" ) {

            $("#preciovendido_"+window.ventas).val( Number($("#peso_"+window.ventas).val())*Number($("#preciorango_"+window.ventas).val()) )

            preciorangoTotal=0;
            $(".preciovendido_class").map(function() {
               preciorangoTotal=Number(preciorangoTotal)+Number(this.value);
            });

            $("#precio_vendido").val(preciorangoTotal);



            pesoTotal=0;
            $(".peso_class").map(function() {
               pesoTotal=Number(pesoTotal)+Number(this.value);
            });

            $("#peso_vendido").val(pesoTotal);

         }

      }


      function EliminarVenta(id) {
         $("#venta_numero_"+id).fadeOut(300, function(){
            $("#venta_numero_"+id).remove()
         });

      }


   $(document).ready(function(){
      window.ventas=0;
      $("#crearGuiaPedidoForm #guiaSalida").val("");
      $("#crearGuiaPedidoForm #guiaSalida").chosen();
   })

</script>



<style>
   .chosen-container{
          padding-top: 4px !important;
   }
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

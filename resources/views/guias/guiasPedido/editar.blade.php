<div class="contenedor">
   <button onclick="$('#verGuiaPedido').modal('toggle')" class="botonF1">
   <span>+</span>
   </button>
</div>
<div id="verGuiaPedido" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                                 <option>{{$Datos["GuiaPedido"]["GuiaSalida"]["descripcion_guia"]}}</option>
                           </select>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-group">
                        <small class='form_description'>Fecha</small>
                           <input type="date" id="fecha_entrega" required="required" class="form-control col-md-7 col-xs-12" disabled="" value="{{$Datos["GuiaPedido"]["GuiaSalida"]["fecha_entrega"]}}">
                     </div>
                  </div>
{{--                   <div class="col-md-8">
                     <div class="form-group">
                        <small class='form_description'>Peso</small>
                           <input type="text" id="peso_total" required="required" class="form-control col-md-7 col-xs-12" disabled="">
                     </div>
                  </div> --}}



                  <div class="col-md-6">
                     <div class="form-group">
                        <small class='form_description'>Descripcion de la guia</small>
                           <input type="text" id="descripcion_guia_pedido" required="required" class="form-control col-md-7 col-xs-12"  value="{{$Datos["GuiaPedido"]->descripcion_guia}}">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <small class='form_description'>Fecha entrega</small>
                           <input type="date" id="fecha_entrega_guia_salida" required="required" class="form-control col-md-7 col-xs-12" value="{{$Datos["GuiaPedido"]->fecha_entrega}}">
                     </div>
                  </div>

                  <div id="VentasPedido" style="padding-top: 30px;padding-bottom: 30px;"> 
                     <h2 align="center">Informacion de guia de Pedido</h2>
                  </div>


                  @foreach ($Datos["GuiaPedido"]["Ventas"] as $Venta)

                  <div>
                     <div class='col-md-3'>
                        <div class='form-group'>
                        <small class='form_description'>Cliente</small>
                        <input class="form-control col-md-7 col-xs-12" type="text"  disabled="" value="{{$Venta['ClienteN']["nombre"]}}">
                        </div>
                     </div>
                     <div class='col-md-3'>
                        <div class='form-group'>
                           <small class='form_description'>Precio</small>
                           <input class="form-control col-md-7 col-xs-12" type="text" disabled="" value="{{$Venta->precio}}">
                        </div>
                     </div>
                     <div class='col-md-3'>
                        <div class='form-group'>
                           <small class='form_description'>Peso</small>
                              <input class="form-control col-md-7 col-xs-12" type="text" disabled value="{{$Venta->peso}}">
                        </div>
                     </div>
                     <div class='col-md-3'>
                        <div class='form-group'>
                           <small class='form_description'>Pago</small>
                              <input class="form-control col-md-7 col-xs-12" type="text" disabled value="{{$Venta->precio_vendido}}">
                        </div>
                     </div>
                  </div>

                  @endforeach


                  <div class="col-md-3">
                     <div class="form-group">
                        <small class='form_description'>Pago Total</small>
                           <input type="text" id="precio_vendido" required="required" class="form-control col-md-7 col-xs-12" disabled="" value="{{$Datos["GuiaPedido"]->precio_total_vendido}}">
                     </div>
                  </div>

                  <div class="col-md-3">
                     <div class="form-group">
                        <small class='form_description'>Peso Total</small>
                           <input type="text" id="peso_vendido" required="required" class="form-control col-md-7 col-xs-12" disabled="" value="{{$Datos["GuiaPedido"]->peso_total_vendido}}">
                     </div>
                  </div>

                  <div class="col-md-3">
                     <div class="form-group">
                        <small class='form_description'>Merma</small>
                           <input type="text" id="merma" required="required" class="form-control col-md-7 col-xs-12" value="{{$Datos["GuiaPedido"]->merma_total}}">
                     </div>
                  </div>

                  <div class="col-md-3">
                     <div class="form-group">
                        <small class='form_description'>Cartones devueltos</small>
                           <input type="text" id="cartones" required="required" class="form-control col-md-7 col-xs-12" value="{{$Datos["GuiaPedido"]->cartones_devueltos}}">
                     </div>
                  </div>

                  <div class="col-md-12">
                     <div class="form-group">
                        <button type="button" class="btn btn-primary btn-block" onclick="VentasPedido()">Añadir ventas</button>
                     </div>
                  </div>
                  <input type="hidden" id="productos">
                  <div style="display: none;" class="ln_solid"></div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>

<script>$('#verGuiaPedido').modal('toggle')</script>


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

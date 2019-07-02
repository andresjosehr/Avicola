<div id="crearGuiaPedido" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h2>Registrar Guia de Entrada</h2>
         </div>
         <div class="modal-body">
            <form id="crearGuiaPedidoForm" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" style="padding: 20px;">
               <input type="hidden" id="id_guia_salida">
               <input type="hidden" id="id_empleado">
               <input type="hidden" id="id_automovil">
               <input type="hidden" id="id_cliente">
               <input type="hidden" id="producto_anadido">
               <input type="hidden" id="peso_sobrante">
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <small class='form_description'>Descripción de la Guia de Pedido</small>
                           <input type="text" id="descripcion_guia" required="required" class="form-control col-md-7 col-xs-12">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <small class='form_description'>Fecha pautada para la entrega</small>
                           <input type="date" id="fecha_entrega" required="required" class="form-control col-md-7 col-xs-12">
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group">
                        <small class='form_description'>Cartones devueltos</small>
                           <input type="text" id="cartones" required="required" class="form-control col-md-7 col-xs-12">
                     </div>
                  </div>
                  <div id="ProductosPedido">
                     
                  </div>
                  <div class="col-md-3">
                     <div class="form-group">
                        <small class='form_description'>Peso Total</small>
                           <input type="text" disabled="disabled" id="peso_total" required="required" class="form-control col-md-7 col-xs-12">
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="form-group">
                        <small class='form_description'>Peso total Vendido</small>
                           <input type="text" disabled="disabled" id="peso_total_vendido" required="required" class="form-control col-md-7 col-xs-12">
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="form-group">
                        <small class='form_description'>Merma Total</small>
                           <input type="text" disabled="disabled" id="merma_total" required="required" class="form-control col-md-7 col-xs-12">
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="form-group">
                        <small class='form_description'>Precio total vendido</small>
                           <input type="text" disabled="disabled" id="precio_total" required="required" class="form-control col-md-7 col-xs-12">
                     </div>
                  </div>
                  <input type="hidden" id="productos">
                  <div style="display: none" class="ln_solid"></div>
                  <div class="form-group">
                     <div class="col-md-12" style="padding-top: 15px;">
                        <button onclick="crearGuia(this)" style="width: 100%" class="btn btn-success btn-modal btn_avicola">Guardar</button>
                        <button style="display: none" id='crear_gui_btn' onclick="ValidarGeneral('crearGuiaPedidoForm', 'crear', 'guias-pedido');" style="width: 100%" class="btn btn-success btn-modal">Guardar</button>
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

   function crearGuia(){

      event.preventDefault();

      if (Number($("#peso_total_vendido").val())+Number($("#merma_total").val())<Number($("#peso_total").val())) {

            swal("Espera", "Al parecer el peso que se ha vendido ha sido menor al peso de la guia de salida. ¿Que quieres hacer con el peso del producto sobrante?", {
               icon: "warning",
              buttons: {
                crear: {
                  text: "Crear un nuevo nuevo producto con la medida de peso sobrante",
                  value: "crear",
                },
                asignar: {
                  text: "Asignar el peso sobrante a una unidad de producto existente",
                  value: "asignar",
                },
              },
            })
            .then((value) => {
              switch (value) {
             
                case "asignar":
                  $('#EscogerProductos').modal('toggle');
                  break;
             
                  case "crear":
                  crearUnidadGuiaPedido();
                  break;
             
                default:
              }
         });

      }
   
   }


   function crearUnidadGuiaPedido() {

      crearGuiaPedido();

      var pesito = Number($("#peso_total").val())-(Number($("#peso_total_vendido").val())+Number($("#merma_total").val()))

      $.ajax({
          type: 'POST',
          url: url+"/guias-pedido/crearProducto",
          data:{
            peso: pesito,
            id_guia_salida: $("#peso_total").val(),
          },
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
          success: function(result){
            console.log(result)

            if (result=="Exito") {
            }

         }
      });
   }


   function crearGuiaPedido() {
      var InfoPro={};
      $(".info_pro input").map(function(){
      if (InfoPro[$(this).attr('data_producto_id')]==undefined) InfoPro[$(this).attr('data_producto_id')]={}
      InfoPro[$(this).attr('data_producto_id')][$(this).attr('data_producto_tipo')]=this.value

      });

      $("#productos").val(JSON.stringify(InfoPro));

      $("#crear_gui_btn").click()
   }


      $(document).ready(function(){

         $("#crearGuiaSalidaForm #acompanante_1, #crearGuiaSalidaForm #acompanante_2, #crearGuiaSalidaForm #acompanante_3, #crearGuiaSalidaForm #acompanante_4").val("");

         $("#crearGuiaSalidaForm #id_cliente, #crearGuiaSalidaForm #id_empleado, #crearGuiaSalidaForm #acompanante_1, #crearGuiaSalidaForm #acompanante_2, #crearGuiaSalidaForm #acompanante_3, #crearGuiaSalidaForm #acompanante_4").chosen();
      });
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

<div class="contenedor">
   <button onclick="$('#crearGuiaSalida').modal('toggle')" class="botonF1">
   <span>+</span>
   </button>
</div>
<div id="crearGuiaSalida" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h2>Crear guia de salida</h2>
            {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button> --}}
         </div>
         <div class="modal-body">
            <form id="crearGuiaSalidaForm" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Chofer <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                     <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Vehiculo <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                     <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Fecha Inicio <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                     <input id="fecha_inicio" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Fecha Fin <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                     <input id="fecha_fin" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                  </div>
               </div>
               <div class="ln_solid"></div>
               <div class="form-group">
                  <div class="col-md-12">
                     <button type="submit" style="width: 100%" class="btn btn-success btn-modal">Guardar</button>
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
</style>
<script>
	$(document).ready(function(){
		ValidarGeneral('crearGuiaSalidaForm', 'crear');
		$('#fecha_inicio, #fecha_fin').datepicker();
	});
</script>
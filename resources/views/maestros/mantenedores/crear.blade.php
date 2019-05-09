<div class="contenedor">
   <button onclick="$('#crearMantenedor').modal('toggle')" class="botonF1">
   <span>+</span>
   </button>
</div>
<div id="crearMantenedor" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h2>Crear Mantenedor</h2>
         </div>
         <div class="modal-body">
            <form id="crearMantenedorForm" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nombre <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                     <input type="text" id="nombre" required="required" class="form-control col-md-7 col-xs-12">
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Apellido <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                     <input type="text" id="apellido" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                  </div>
               </div>
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Otvo <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                     <input id="otvo" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
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
		ValidarGeneral('crearMantenedorForm', 'crear', 'mantenedores');
	});
</script>
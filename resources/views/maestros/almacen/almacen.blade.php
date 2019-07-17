@include("general")
<div class="right_col" role="main">
   <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
            <h2>Almacen <small>Consulta de información</small></h2>
            <hr class="x_title">
         <div class="x_content">
            <p>Puedes Visualizar todos los productos disponibles dentro del almacen</p>
            <div id="listUpdate" style='overflow-x: auto;'>
               @include("maestros.almacen.lista")
            </div>
         </div>
      </div>
   </div>
</div>


{{-- @include("maestros.cargos.crear") --}}
{{-- @include("maestros.cargos.editar") --}}
@include("footer")
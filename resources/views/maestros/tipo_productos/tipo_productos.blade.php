@include("general")
<div class="right_col" role="main">
   <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
            <h2>Tipo de Productos <small>Consulta de información</small></h2>
            <hr class="x_title">
         <div class="x_content">
            <p>Para crear un tipo de producto puedes clikear el boton inferior derecho</p>
            <div id="listUpdate" style='overflow-x: auto;'>
               @include("maestros.tipo_productos.lista")
            </div>
         </div>
      </div>
   </div>
</div>


@include("maestros.tipo_productos.crear")
@include("maestros.tipo_productos.editar")
@include("footer")
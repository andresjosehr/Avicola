@include("general")
<div class="right_col" role="main">
   <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
            <h2>Categorias <small>Consulta de información</small></h2>
            <hr class="x_title">
         <div class="x_content">
            <p>Para crear una categoria puedes clikear el boton inferior derecho</p>
            <div id="listUpdate" style='overflow-x: auto;'>
               @include("maestros.categorias.lista")
            </div>
         </div>
      </div>
   </div>
</div>


@include("maestros.categorias.crear")
@include("maestros.categorias.editar")
@include("footer")
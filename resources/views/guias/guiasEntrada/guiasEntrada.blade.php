@include("general")
<div class="right_col" role="main">
   <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
            <h2>Guias de entrada <small>Consulta de información</small></h2>
            <hr class="x_title">
         <div class="x_content">
            <p>Para crear una guia de entrada puedes clikear el boton inferior derecho</p>
            <div id="listUpdate" style='overflow-x: auto;'>
               @include("guias.guiasEntrada.lista")
            </div>
         </div>
      </div>
   </div>
</div>


@include("guias.guiasEntrada.crear")

<div id="listUpdateProductos">
   @include("guias.guiasEntrada.productos")
</div>

<div id="listUpdateProductosEditar">
   @include("guias.guiasEntrada.productosEditar")
</div>
@include("guias.guiasEntrada.editar")
@include("footer")
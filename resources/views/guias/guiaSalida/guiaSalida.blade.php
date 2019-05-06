@include("general")
<div class="right_col" role="main">
   <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
            <h2>Guia de Salidas <small>Consulta de información</small></h2>
            <hr class="x_title">
         <div class="x_content">
            <p>Para crear una guía de salida puedes clikear el boton inferior derecho</p>
            @include("guias.guiaSalida.lista")
         </div>
      </div>
   </div>
</div>
@include("guias.guiaSalida.crear")
@include("footer")
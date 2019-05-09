@include("general")
<div class="right_col" role="main">
   <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
            <h2>Clientes <small>Consulta de información</small></h2>
            <hr class="x_title">
         <div class="x_content">
            <p>Para crear un mantenedor puedes clikear el boton inferior derecho</p>
            @include("maestros.clientes.lista")
         </div>
      </div>
   </div>
</div>
@include("maestros.clientes.crear")
@include("footer")
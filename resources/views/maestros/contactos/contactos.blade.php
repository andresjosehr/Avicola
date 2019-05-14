@include("general")
<div class="right_col" role="main">
   <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
            <h2>Clientes <small>Consulta de información</small></h2>
            <hr class="x_title">
         <div class="x_content">
            <p>Para crear un mantenedor puedes clikear el boton inferior derecho</p>
            <div id="listUpdate" style='overflow-x: auto;'>
               @include("maestros.contactos.lista")
            </div>
         </div>
      </div>
   </div>
</div>


<script>
    window.Ubigeo=[]; window.UbigeoVerd=[];
    @foreach ($Ubigeo["departamento"] as $Departamento)
           window.Ubigeo['{{str_replace($no_permitidas, $permitidas ,$Departamento->departamento)}}']=[];
           window.UbigeoVerd['{{$Departamento->departamento}}']=[];
    @endforeach
    @foreach ($Ubigeo["provincia"] as $Provincia)

           window.Ubigeo['{{str_replace($no_permitidas, $permitidas, $Provincia->departamento)}}']['{{str_replace($no_permitidas, $permitidas ,$Provincia->provincia)}}']=[];
           window.UbigeoVerd['{{$Provincia->departamento}}']['{{$Provincia->provincia}}']=[];

    @endforeach
    @foreach ($Ubigeo["distrito"] as $Distrito)
           
           window.Ubigeo['{{str_replace($no_permitidas, $permitidas, $Distrito->departamento)}}']['{{str_replace($no_permitidas, $permitidas ,$Distrito->provincia)}}']['{{str_replace($no_permitidas, $permitidas ,$Distrito->distrito)}}']=[];
           window.UbigeoVerd['{{$Distrito->departamento}}']['{{$Distrito->provincia}}']['{{$Distrito->distrito}}']=[];
    @endforeach
</script>
@include("maestros.contactos.crear")
@include("maestros.contactos.editar")
@include("footer")
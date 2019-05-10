<table id="clientesTable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Tipo Persona</th>
                <th>Tipo Documento</th>
                <th>Identificacion</th>
                <th>Pais</th>
                <th>Direccion</th>
                <th>Codigo Ubigeo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($Clientes as $Cliente)
                <tr id="clientes_{{$Cliente->id}}">
                    <td>{{$Cliente->nombre}}</td>
                    <td>{{$Cliente->apellido_materno}} {{$Cliente->apellido_paterno}}</td>
                    <td>
                        @foreach ($TipoPersonas as $Persona)
                            @if ($Cliente->tipo_persona==$Persona->id)
                                {{$Persona->tipo}}
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($TipoDocumentos as $Documento)
                            @if ($Cliente->tipo_documento==$Documento->id)
                                {{$Documento->descripcion}}
                            @endif
                        @endforeach
                </td>
                    <td>{{$Cliente->codigo}}</td>
                    <td>{{$Cliente->pais}}</td>
                    <td>{{$Cliente->direccion}}</td>
                    <td>@if($Cliente->codigo_ubigeo=="") No aplica @else {{$Cliente->codigo_ubigeo}} @endif </td>
                    <td style="display: flex;">
                        <a onclick="EditarCliente('{{$Cliente}}', '{{str_replace($no_permitidas, $permitidas ,$Cliente->ubigeo["departamento"])}}', '{{str_replace($no_permitidas, $permitidas, $Cliente->ubigeo["provincia"])}}', '{{str_replace($no_permitidas, $permitidas ,$Cliente->ubigeo["distrito"])}}', 'editarClienteForm')" class="btn btn-info btn-xs"><i class="far fa-edit"></i> Editar </a>
                        <a onclick="EliminarElemento('{{$Cliente->id}}', 'clientes')" class="btn btn-danger btn-xs"><i class="far fa-trash-alt"></i> Eliminar </a>
                    </td>
                </tr>
                @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Tipo Persona</th>
                <th>Tipo Documento</th>
                <th>Identificacion</th>
                <th>Pais</th>
                <th>Direccion</th>
                <th>Codigo Ubigeo</th>
                <th>Acciones</th>
            </tr>
        </tfoot>
    </table>

    <script>
            $('#clientesTable').DataTable();
    </script>
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
                @foreach ($Proveedores as $Proveedor)
                <tr id="proveedores_{{$Proveedor->id}}">
                    <td>{{$Proveedor->nombre}}</td>
                    <td>{{$Proveedor->apellido_materno}} {{$Proveedor->apellido_paterno}}</td>
                    <td>
                        @foreach ($TipoPersonas as $Persona)
                            @if ($Proveedor->tipo_persona==$Persona->id)
                                {{$Persona->tipo}}
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($TipoDocumentos as $Documento)
                            @if ($Proveedor->tipo_documento==$Documento->id)
                                {{$Documento->descripcion}}
                            @endif
                        @endforeach
                </td>
                    <td>{{$Proveedor->codigo}}</td>
                    <td>{{$Proveedor->pais}}</td>
                    <td>{{$Proveedor->direccion}}</td>
                    <td>@if($Proveedor->codigo_ubigeo=="") No aplica @else 0{{$Proveedor->codigo_ubigeo}} @endif </td>
                    <td style="display: flex;">
                        <a onclick="EditarProveedor('{{$Proveedor}}', '{{str_replace($no_permitidas, $permitidas ,$Proveedor->ubigeo["departamento"])}}', '{{str_replace($no_permitidas, $permitidas, $Proveedor->ubigeo["provincia"])}}', '{{str_replace($no_permitidas, $permitidas ,$Proveedor->ubigeo["distrito"])}}', 'editarProveedorForm')" class="btn btn-info btn-xs"><i class="far fa-edit"></i> Editar </a>
                        <a onclick="EliminarElemento('{{$Proveedor->id}}', 'proveedores')" class="btn btn-danger btn-xs"><i class="far fa-trash-alt"></i> Eliminar </a>
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
            $('#clientesTable').DataTable({
                language: {
                    url: 'http://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json'
                }
            });
    </script>
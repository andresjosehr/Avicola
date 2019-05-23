<table id="contactosTable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Tipo Persona</th>
                <th>Tipo Documento</th>
                <th>Identificacion</th>
                <th>Pais</th>
                <th>Direccion</th>
                <th>Cliente</th>
                <th>Proveedor</th>
                <th>Codigo Ubigeo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($Contactos as $Contacto)
                <tr id="contactos_{{$Contacto->id}}">
                    <td>{{$Contacto->nombre}}</td>
                    <td>{{$Contacto->apellido_materno}} {{$Contacto->apellido_paterno}}</td>
                    <td>
                        @foreach ($TipoPersonas as $Persona)
                            @if ($Contacto->tipo_persona==$Persona->id)
                                {{$Persona->tipo}}
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($TipoDocumentos as $Documento)
                            @if ($Contacto->tipo_documento==$Documento->id)
                                {{$Documento->descripcion}}
                            @endif
                        @endforeach
                </td>
                    <td>{{$Contacto->codigo}}</td>
                    <td>{{$Contacto->pais}}</td>
                    <td>{{$Contacto->direccion}}</td>
                    <td>@if($Contacto->cliente["nombre"]=="") No aplica @else {{$Contacto->cliente["nombre"]}} @endif </td>
                    <td>@if($Contacto->proveedor["nombre"]=="") No aplica @else {{$Contacto->proveedor["nombre"]}} @endif </td>
                    <td>@if($Contacto->codigo_ubigeo=="") No aplica @else {{$Contacto->codigo_ubigeo}} @endif </td>
                    <td style="display: flex;">
                        <a onclick="EditarContacto('{{$Contacto}}', '{{str_replace($no_permitidas, $permitidas ,$Contacto->ubigeo["departamento"])}}', '{{str_replace($no_permitidas, $permitidas, $Contacto->ubigeo["provincia"])}}', '{{str_replace($no_permitidas, $permitidas ,$Contacto->ubigeo["distrito"])}}', 'editarContactoForm')" class="btn btn-info btn-xs"><i class="far fa-edit"></i> Editar </a>
                        <a onclick="EliminarElemento('{{$Contacto->id}}', 'contactos')" class="btn btn-danger btn-xs"><i class="far fa-trash-alt"></i> Eliminar </a>
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
                <th>Cliente</th>
                <th>Proveedor</th>
                <th>Codigo Ubigeo</th>
                <th>Acciones</th>
            </tr>
        </tfoot>
    </table>

    <script>
            $('#contactosTable').DataTable({
                language: {
                    url: 'http://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json'
                }
            });
    </script>
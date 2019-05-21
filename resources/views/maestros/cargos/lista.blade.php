<table id="CargosTable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre del cargo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($Datos["Cargos"] as $Cargo)
                <tr id="cargos_{{$Cargo->id}}">
                    <td>{{$Cargo->id}}</td>
                    <td>{{$Cargo->nombre}}</td>
                    <td style="display: flex;">
                        <a onclick="editarElemento('{{$Cargo}}', 'editarCargo')" class="btn btn-info btn-xs"><i class="far fa-edit"></i> Editar </a>
                        <a onclick="EliminarElemento('{{$Cargo->id}}', 'cargos')" class="btn btn-danger btn-xs"><i class="far fa-trash-alt"></i> Eliminar </a>
                    </td>
                </tr>
                @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Nombre del cargo</th>
                <th>Acciones</th>
            </tr>
        </tfoot>
    </table>

    <script>
            $('#CargosTable').DataTable({
                language: {
                    url: 'http://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json'
                }
            });
    </script>
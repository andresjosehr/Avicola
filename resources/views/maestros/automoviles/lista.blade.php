<table id="AutomovilesTable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Placa</th>
                <th>Chofer</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($Datos["Automoviles"] as $Automovil)
                <tr id="automoviles_{{$Automovil->id}}">
                    <td>{{$Automovil->id}}</td>
                    <td>{{$Automovil->marca}}</td>
                    <td>{{$Automovil->modelo}}</td>
                    <td>{{$Automovil->placa}}</td>
                    <td>{{$Automovil->Chofer["nombre"]}}</td>
                    <td style="display: flex;">
                        <a onclick="editarElemento('{{$Automovil}}', 'editarAutomovil')" class="btn btn-info btn-xs"><i class="far fa-edit"></i> Editar </a>
                        <a onclick="EliminarElemento('{{$Automovil->id}}', 'automoviles')" class="btn btn-danger btn-xs"><i class="far fa-trash-alt"></i> Eliminar </a>
                    </td>
                </tr>
                @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Placa</th>
                <th>Chofer</th>
                <th>Acciones</th>
            </tr>
        </tfoot>
    </table>

    <script>
            $('#AutomovilesTable').DataTable({
                language: {
                    url: 'http://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json'
                }
            });
    </script>
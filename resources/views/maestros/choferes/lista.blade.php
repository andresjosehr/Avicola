<table id="ChoferesTable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Email</th>
                <th>Cargo</th>
                <th>Licencia</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($Datos["Choferes"] as $Chofer)
                <tr id="choferes_{{$Chofer->id}}">
                    <td>{{$Chofer->nombre}}</td>
                    <td>{{$Chofer->apellido_materno}} {{$Chofer->apellido_paterno}}</td>
                    <td>{{$Chofer->email}}</td>
                    <td>{{$Chofer->Cargo["nombre"]}}</td>
                    <td>{{$Chofer->licencia}}</td>
                    <td style="display: flex;">
                        <a onclick="editarElemento('{{$Chofer}}', 'editarChofer')" class="btn btn-info btn-xs"><i class="far fa-edit"></i> Editar </a>
                        <a onclick="EliminarElemento('{{$Chofer->id}}', 'choferes')" class="btn btn-danger btn-xs"><i class="far fa-trash-alt"></i> Eliminar </a>
                    </td>
                </tr>
                @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Email</th>
                <th>Cargo</th>
                <th>Licencia</th>
                <th>Acciones</th>
            </tr>
        </tfoot>
    </table>

    <script>
            $('#ChoferesTable').DataTable({
                language: {
                    url: 'http://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json'
                }
            });
    </script>
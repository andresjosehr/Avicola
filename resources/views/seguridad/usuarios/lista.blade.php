<table id="usuariosTable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($Usuarios as $Usuario)
                <tr id="usuarios_{{$Usuario->id}}">
                    <td>{{$Usuario->nombre}}</td>
                    <td>{{$Usuario->email}}</td>
                    <td style="display: flex;">
                        <a onclick="EliminarElemento('{{$Usuario->id}}', 'usuarios')" class="btn btn-danger btn-xs"><i class="far fa-trash-alt"></i> Eliminar </a>
                    </td>
                </tr>
                @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </tfoot>
    </table>

    <script>
            $('#usuariosTable').DataTable({
                language: {
                    url: 'http://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json'
                }
            });
    </script>
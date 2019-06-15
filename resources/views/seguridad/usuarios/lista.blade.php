<table id="UsuariosTable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($Datos["Usuarios"] as $Usuario)
                    @if ($Usuario->rol==2)
                        <tr id="usuarios_{{$Usuario->id}}">
                            <td>{{$Usuario->id}}</td>
                            <td>{{$Usuario->nombre}}</td>
                            <td>{{$Usuario->email}}</td>
                            <td style="display: flex;">
                                <a onclick="editarUsuario('{{$Usuario}}')" class="btn btn-info btn-xs"><i class="far fa-edit"></i> Gestionar grupo asignado </a>
                                <a onclick="EliminarElemento('{{$Usuario->id}}', 'usuarios')" class="btn btn-danger btn-xs"><i class="far fa-trash-alt"></i> Eliminar </a>
                            </td>
                        </tr>
                    @endif
                @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </tfoot>
    </table>

    <script>

        function editarUsuario(elemento) {
            var info=JSON.parse(elemento);

            $("#editarUsuarioForm input").map(function(){
                $(this).prop("checked", false)
                $(this).parent().removeClass("checked");
            })


            $("input[value='"+info.id_grupo+"']").prop("checked", true);
            $("input[value='"+info.id_grupo+"']").parent().addClass("checked");
            console.log($("input[value='"+info.id_grupo+"']")[0])
            console.log($("input[value='"+info.id_grupo+"']").parent()[0])
            editarElemento(elemento, 'editarUsuario')
        }
    </script>

    <script>
            $('#UsuariosTable').DataTable({
                language: {
                    url: 'http://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json'
                }
            });
    </script>
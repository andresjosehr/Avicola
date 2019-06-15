<table id="GruposUsuariosTable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Descripcion</th>
                <th>Numero de usuarios</th>
                <th>Numero de modulos</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($Datos["GruposUsuarios"] as $GrupoUsuario)
                <tr id="grupos-usuarios_{{$GrupoUsuario->id}}">
                    <td>{{$GrupoUsuario->descripcion}}</td>
                    <td>{{count($GrupoUsuario->modulos)}} </td>
                    <td>{{count($GrupoUsuario->usuarios)}} </td>
                    <td style="display: flex;">
                        <a onclick="editarGrupo('{{$GrupoUsuario}}')" class="btn btn-info btn-xs"><i class="far fa-edit"></i> Editar </a>
                        <a onclick="EliminarElemento('{{$GrupoUsuario->id}}', 'grupos-usuarios')" class="btn btn-danger btn-xs"><i class="far fa-trash-alt"></i> Eliminar </a>
                    </td>
                </tr>
                @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Descripcion</th>
                <th>Numero de usuarios</th>
                c<th>Numero de modulos</th>
                <th>Acciones</th>
            </tr>
        </tfoot>
    </table>

    <script>
        function editarGrupo(grupo) {

            window.modulosEdit=[];
                window.info=JSON.parse(grupo)
                $('#ModulosTableEdit').DataTable().rows().iterator('row', function(context, index){

                            var node = $(this.row(index).node()); 
                            $(node).find("input").parent().removeClass("checked");
                            $(node).find("input").prop("checked", false);
                            window.info.modulos.map(function(e){
                                if($(node).find("input").val()==e.id){
                                    $(node).find("input[value='"+e.id+"']").parent().addClass("checked");
                                    $(node).find("input[value='"+e.id+"']").prop("checked", true);

                                  window.modulosEdit.push($(node).find("input[value='"+e.id+"']").val());
                                }
                            })
                });



                window.usuariosEdit=[];
                window.info=JSON.parse(grupo)
                $('#UsuariosTableEdit').DataTable().rows().iterator('row', function(context, index){
                            var node = $(this.row(index).node()); 
                            $(node).find("input").parent().removeClass("checked");
                            $(node).find("input").prop("checked", false);
                            window.info.usuarios.map(function(e){
                                if($(node).find("input").val()==e.id){
                                    $(node).find("input[value='"+e.id+"']").parent().addClass("checked");
                                    $(node).find("input[value='"+e.id+"']").prop("checked", true);
                                    window.usuariosEdit.push($(node).find("input[value='"+e.id+"']").val());
                                }
                            })
                });



                editarElemento(grupo, 'editarGupoUsuario')
        }

    </script>

    <script>

            $('#GruposUsuariosTable').DataTable({
                language: {
                    url: 'http://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json'
                }
            });
    </script>
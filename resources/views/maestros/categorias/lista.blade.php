<table id="CategoriasTable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre de la categoria</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($Datos["Categorias"] as $Categoria)
                <tr id="categorias_{{$Categoria->id}}">
                    <td>{{$Categoria->id}}</td>
                    <td>{{$Categoria->descripcion}}</td>
                    <td style="display: flex;">
                        <a onclick="editarElemento('{{$Categoria}}', 'editarCategoria')" class="btn btn-info btn-xs"><i class="far fa-edit"></i> Editar </a>
                        <a onclick="EliminarElemento('{{$Categoria->id}}', 'categorias')" class="btn btn-danger btn-xs"><i class="far fa-trash-alt"></i> Eliminar </a>
                    </td>
                </tr>
                @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Nombre del categoria</th>
                <th>Acciones</th>
            </tr>
        </tfoot>
    </table>

    <script>
            $('#CategoriasTable').DataTable({
                language: {
                    url: 'http://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json'
                }
            });
    </script>
<table id="TipoProductosTable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre del tipo de producto</th>
                <th>Categoria asociada</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($Datos["TipoProductos"] as $TipoProducto)
                <tr id="tipo_productos_{{$TipoProducto->id}}">
                    <td>{{$TipoProducto->id}}</td>
                    <td>{{$TipoProducto->descripcion}}</td>
                    <td>{{$TipoProducto->categoria["descripcion"]}}</td>
                    <td style="display: flex;">
                        <a onclick="editarElemento('{{$TipoProducto}}', 'editarTipoProducto')" class="btn btn-info btn-xs"><i class="far fa-edit"></i> Editar </a>
                        <a onclick="EliminarElemento('{{$TipoProducto->id}}', 'tipo_productos')" class="btn btn-danger btn-xs"><i class="far fa-trash-alt"></i> Eliminar </a>
                    </td>
                </tr>
                @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Nombre del tipo de producto</th>
                <th>Categoria asociada</th>
                <th>Acciones</th>
            </tr>
        </tfoot>
    </table>

    <script>
            $('#TipoProductosTable').DataTable({
                language: {
                    url: 'http://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json'
                }
            });
    </script>
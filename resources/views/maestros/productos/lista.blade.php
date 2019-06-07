<table id="ProductosTable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Descripcion</th>
                <th>Descripcion corta</th>
                <th>Tipo de producto</th>
                <th>Peso</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($Datos["Productos"] as $Producto)
                <tr id="productos_{{$Producto->id}}">
                    <td>{{$Producto->id}}</td>
                    <td>{{$Producto->descripcion}}</td>
                    <td>{{$Producto->descripcion_corta}}</td>
                    <td>{{$Producto->TipoProducto["descripcion"]}}</td>
                    <td>{{$Producto->peso}}</td>
                    <td style="display: flex;">
                        <a onclick="editarElemento('{{$Producto}}', 'editarProducto')" class="btn btn-info btn-xs"><i class="far fa-edit"></i> Editar </a>
                        <a onclick="EliminarElemento('{{$Producto->id}}', 'productos')" class="btn btn-danger btn-xs"><i class="far fa-trash-alt"></i> Eliminar </a>
                    </td>
                </tr>
                @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Descripcion</th>
                <th>Descripcion corta</th>
                <th>Tipo de producto</th>
                <th>Peso</th>
                <th>Acciones</th>
            </tr>
        </tfoot>
    </table>

    <script>
            $('#ProductosTable').DataTable({
                language: {
                    url: 'http://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json'
                }
            });
    </script>
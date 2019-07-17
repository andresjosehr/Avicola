<table id="AlmacenTable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Peso</th>
                <th>Guia de Entrada</th>
                <th>eSTADO</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($Datos["UnidadesProductos"] as $Producto)
                <tr id="producto_{{$Producto->id_producto}}">
                    <td>{{$Producto->producto["descripcion"]}}</td>
                    <td>{{$Producto->peso}} KG</td>
                    <td>{{$Producto->GuiaEntrada["descripcion_guia"]}}</td>
                    <td><span class="btn btn-success btn-xs">{{-- <i class="far fa-check"></i> --}} Dentro del almacen </span></td>
                </tr>
                @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Producto</th>
                <th>Peso</th>
                <th>Guia de Entrada</th>
                <th>eSTADO</th>
            </tr>
        </tfoot>
    </table>

    <script>
            $('#AlmacenTable').DataTable({
                language: {
                    url: 'http://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json'
                }
            });
    </script>
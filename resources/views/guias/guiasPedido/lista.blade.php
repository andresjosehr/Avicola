<table id="GuiasSalidaTable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Descripcion</th>
                <th>Fecha</th>
                <th>Peso Total vendido</th>
                <th>Dinero Total vendido</th>
                <th>Merma</th>
                <th>Cartones devueltos</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($Datos["GuiasPedido"] as $GuiasPedido)
                <tr id="guias-pedido_{{$GuiasPedido->id}}">
                    <td>{{$GuiasPedido->id}}</td>
                    <td>{{$GuiasPedido->descripcion_guia}}</td>
                    <td>{{$GuiasPedido->fecha_entrega}}</td>
                    <td>{{$GuiasPedido->peso_total_vendido}}</td>
                    <td>{{$GuiasPedido->precio_total_vendido}}</td>
                    <td>{{$GuiasPedido->merma_total}}</td>
                    <td>{{$GuiasPedido->cartones_devueltos}}</td>
                    <td style="display: flex;">
                        <a onclick="editarGuiaPedido('{{$GuiasPedido->id}}')" class="btn btn-info btn-xs"><i class="far fa-edit"></i> Ver detalles </a>
                        <a onclick="EliminarElemento('{{$GuiasPedido->id}}', 'guias-pedido')" class="btn btn-danger btn-xs"><i class="far fa-trash-alt"></i> Eliminar </a>
                    </td>
                </tr>
                @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Descripcion</th>
                <th>Fecha</th>
                <th>Peso Total vendido</th>
                <th>Dinero Total vendido</th>
                <th>Merma</th>
                <th>Cartones devueltos</th>
                <th>Acciones</th>
            </tr>
        </tfoot>
    </table>

    <script>
            $('#GuiasSalidaTable').DataTable({
                language: {
                    url: 'http://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json'
                }
            });

            function editarGuiaPedido(datas) {
                window.datasita=datas;
                $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                            });

                $.ajax({
                    type: 'POST',
                    url: url+"/ver-guia-salida/"+window.datasita,
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    success: function(result){
                        console.log(result)
                        $("#verDetalle").empty(result);
                        $("#verDetalle").append(result);
            }
            });
            }
    </script>

    <div id="verDetalle">
        
    </div>
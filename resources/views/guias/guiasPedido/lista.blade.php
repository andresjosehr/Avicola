<table id="GuiasPedidoTable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Descripcion</th>
                <th>Fecha pautada para la entrega</th>
                <th>Cliente</th>
                <th>Numero de productos</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($Datos["GuiasPedido"] as $GuiaPedido)
                <tr id="guias-pedido_{{$GuiaPedido->id}}">
                    <td>{{$GuiaPedido->id}}</td>
                    <td>{{$GuiaPedido->descripcion_guia}}</td>
                    <td>{{$GuiaPedido->fecha_entrega}}</td>
                    <td>{{$GuiaPedido->Cliente["nombre"]}}</td>
                    <td>{{count($GuiaPedido->Productos)}}</td>
                    <td style="display: flex;">
                        <a onclick="editarGuiaPedido('{{$GuiaPedido}}')" class="btn btn-info btn-xs"><i class="far fa-edit"></i> Editar </a>
                        <a onclick="EliminarElemento('{{$GuiaPedido->id}}', 'guias-pedido')" class="btn btn-danger btn-xs"><i class="far fa-trash-alt"></i> Eliminar </a>
                    </td>
                </tr>
                @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Descripcion</th>
                <th>Fecha de ingreso</th>
                <th>Cliente</th>
                <th>Numero de productos</th>
                <th>Acciones</th>
            </tr>
        </tfoot>
    </table>

    <script>
            $('#GuiasPedidoTable').DataTable({
                language: {
                    url: 'http://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json'
                }
            });

            function editarGuiaPedido(data) {

                editarElemento(data, 'editarGuiaPedido');

                $("#RecopilarProductosEditarForm input").map(function(){

                    $("#"+this.id).prop('checked', false);
                    $("#"+this.id).parent().removeClass('checked');

                        $("#"+this.id).removeAttr('disabled');
                        $("#"+this.id).parent().removeClass('disabled');



                    if ($(this).attr("data-estatus")==2 && $(this).attr("data-id_guia_pedido")==$("#editarGuiaPedido #id").val()) {
                        $("#"+this.id).prop('checked', true);
                        $("#"+this.id).parent().addClass('checked');
                    }

                    if ($(this).attr("data-estatus")==2 && $(this).attr("data-id_guia_pedido")!=$("#editarGuiaPedido #id").val()) {
                        $("#"+this.id).attr('disabled', "disabled");
                        $("#"+this.id).parent().addClass('disabled');
                    }
                })
            }
    </script>
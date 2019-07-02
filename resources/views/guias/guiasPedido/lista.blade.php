<table id="GuiasPedidoTable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Guia de Salida</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($Datos["GuiasSalida"] as $GuiaSalida)
                    @if ($GuiaSalida->GuiaPedido=="[]")
                        <tr id="guias-pedido_{{$GuiaSalida->id}}">
                            <td>{{$GuiaSalida->descripcion_guia}}</td>
                            <td style="display: flex;">
                                <a onclick="crearGuiaSalida('{{$GuiaSalida}}')" class="btn btn-success btn-xs"><i class="far fa-edit"></i> Crear guia de pedido </a>
                            </td>
                        </tr>
                    @endif
                @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Guia de Salida</th>
                <th>Acciones</th>
            </tr>
        </tfoot>
</table>

<div style="padding-top: 200px">
<table id="GuiasPedidoTable2" class="display" style="width:100%;">
        <thead>
            <tr>
                <th>Guia de Salida</th>
                <th>Descripcion de guia de pedido</th>
                <th>Fecha de entrega</th>
                <th>Peso Vendido</th>
                <th>Merma</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($Datos["GuiasSalida"] as $GuiaSalida)
                    @if ($GuiaSalida->GuiaPedido!="[]")
                            <tr id="guias-pedido_{{$GuiaSalida->id}}">
                                <td>{{$GuiaSalida->descripcion_guia}}</td>
                                <td>{{$GuiaSalida->GuiaPedido[0]["descripcion_guia"]}}</td>

                                <td>{{$GuiaSalida->GuiaPedido[0]["fecha_entrega"]}}</td>

                                <td>{{$GuiaSalida->GuiaPedido[0]["peso_total_vendido"]}}</td>
                                <td>{{$GuiaSalida->GuiaPedido[0]["merma_total"]}}</td>
                                <td>{{$GuiaSalida->GuiaPedido[0]["precio_total"]}}</td>
                            </tr>
                    @endif
                @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Guia de Salida</th>
                <th>Descripcion de guia de pedido</th>
                <th>Fecha de entrega</th>
                <th>Peso Vendido</th>
                <th>Merma</th>
                <th>Precio</th>
            </tr>
        </tfoot>
    </table>
</div>















    <script>

        function PesoTotal(e) {
            var pesoTotal=0;
            $("input[data-input=peso]").map(function(v, v2){
                pesoTotal=Number(pesoTotal)+Number(v2.value);
            });
            $("#peso_total_vendido").val(pesoTotal);

        }

        function MermaTotal(e) {
            var mermaTotal=0;
            $("input[data-input=merma]").map(function(v, v2){
                mermaTotal=Number(mermaTotal)+Number(v2.value);
            });
            $("#merma_total").val(mermaTotal);

        }

        function PrecioTotal(e) {
            var precioTotal=0;
            $("input[data-input=precio]").map(function(v, v2){
                precioTotal=Number(precioTotal)+Number(v2.value);
            });
            $("#precio_total").val(precioTotal);

        }


        function crearGuiaSalida(data) {
            var PesoTotal=0;
            JSON.parse(data).unidades_productos.map(function(e){
                PesoTotal= Number(PesoTotal)+Number(e.peso);
            })
            $("#peso_total").val(PesoTotal);
            $("#id_guia_salida").val(JSON.parse(data).id);

            $("#id_empleado").val(JSON.parse(data).id_empleado);
            console.log(JSON.parse(data));
            $("#id_automovil").val(JSON.parse(data).id_automovil);
            console.log(JSON.parse(data));
            $("#id_cliente").val(JSON.parse(data).id_cliente);
            console.log(JSON.parse(data));

            $("#ProductosPedido").empty();
            JSON.parse(data).unidades_productos.map(function(e){
                $("#ProductosPedido").append('<div class="row info_pro" style="padding-right: 13px;padding-left: 13px;">'+
                                                '<div class="col-md-3">'+
                                                    '<div class="form-group">'+
                                                        '<small class="form_description">Peso</small>'+
                                                        '<input type="text" data_producto_id="'+e.id+'" data_producto_tipo="peso" input id="producto_'+e.id+'" value="'+e.peso+'" disabled required="required" class="form-control col-md-7 col-xs-12">'+
                                                    '</div>'+
                                                '</div>'+
                                                '<div class="col-md-3">'+
                                                    '<div class="form-group">'+
                                                        '<small class="form_description">Peso Vendido</small>'+
                                                        '<input type="text" data_producto_id="'+e.id+'" data_producto_tipo="peso_vendido" input="peso" data-input="peso" onchange="PesoTotal(this)" id="producto_'+e.id+'" required="required" class="form-control col-md-7 col-xs-12">'+
                                                    '</div>'+
                                                '</div>'+
                                                '<div class="col-md-3">'+
                                                    '<div class="form-group">'+
                                                        '<small class="form_description">Merma</small>'+
                                                        '<input type="text" data_producto_id="'+e.id+'" data_producto_tipo="merma" input="merma" data-input="merma" onchange="MermaTotal(this)" id="producto_'+e.id+'" value="" required="required" class="form-control col-md-7 col-xs-12">'+
                                                    '</div>'+
                                                '</div>'+
                                                '<div class="col-md-3">'+
                                                    '<div class="form-group">'+
                                                        '<small class="form_description">Precio</small>'+
                                                        '<input type="text" data_producto_id="'+e.id+'" data_producto_tipo="precio" input="precio" data-input="precio" onchange="PrecioTotal(this)" id="producto_'+e.id+'" value="" required="required" class="form-control col-md-7 col-xs-12">'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>');
            })

            $('#crearGuiaPedido').modal('toggle')
        }
            $('#GuiasPedidoTable, #GuiasPedidoTable2').DataTable({
                language: {
                    url: 'http://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json'
                }
            });

            function editarGuiaSalida(data) {

                $("#editarGuiaSalida #acompanante_1").val(JSON.parse(data).acompanante_1);
                $("#editarGuiaSalida #acompanante_2").val(JSON.parse(data).acompanante_2);
                $("#editarGuiaSalida #acompanante_3").val(JSON.parse(data).acompanante_3);
                $("#editarGuiaSalida #acompanante_4").val(JSON.parse(data).acompanante_4);


                $("#editarGuiaSalida #acompanante_1, #editarGuiaSalida #acompanante_2, #editarGuiaSalida #acompanante_3, #editarGuiaSalida #acompanante_4").trigger("chosen:updated");



                editarElemento(data, 'editarGuiaSalida');

                $("#RecopilarProductosEditarForm input").map(function(){

                    $("#"+this.id).prop('checked', false);
                    $("#"+this.id).parent().removeClass('checked');

                    $("#"+this.id).removeAttr('disabled');
                    $("#"+this.id).parent().removeClass('disabled');



                    if ($(this).attr("data-estatus")==1 && $(this).attr("data-id_guia_salida")==$("#editarGuiaSalida #id").val()) {
                        $("#"+this.id).prop('checked', true);
                        $("#"+this.id).parent().addClass('checked');
                    }

                    if ($(this).attr("data-estatus")==1 && $(this).attr("data-id_guia_salida")!=$("#editarGuiaSalida #id").val()) {
                        $("#"+this.id).attr('disabled', "disabled");
                        $("#"+this.id).parent().addClass('disabled');
                    }
                })
            }
    </script>
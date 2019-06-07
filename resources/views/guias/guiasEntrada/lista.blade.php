<table id="GuiasEntradaTable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Descripcion</th>
                <th>Fecha de ingreso</th>
                <th>Proveedor</th>
                <th>Numero de productos</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($Datos["GuiasEntrada"] as $GuiaEntrada)
                <tr id="guias-entrada_{{$GuiaEntrada->id}}">
                    <td>{{$GuiaEntrada->id}}</td>
                    <td>{{$GuiaEntrada->descripcion_guia}}</td>
                    <td>{{$GuiaEntrada->fecha_entrada}}</td>
                    <td>{{$GuiaEntrada->Proveedor["nombre"]}}</td>
                    <td>{{count($GuiaEntrada->Productos)}}</td>
                    <td style="display: flex;">
                        <a onclick="editarGuiaEntrada('{{$GuiaEntrada}}')" class="btn btn-info btn-xs"><i class="far fa-edit"></i> Editar </a>
                        <a onclick="EliminarElemento('{{$GuiaEntrada->id}}', 'guias-entrada')" class="btn btn-danger btn-xs"><i class="far fa-trash-alt"></i> Eliminar </a>
                    </td>
                </tr>
                @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Descripcion</th>
                <th>Fecha de ingreso</th>
                <th>Proveedor</th>
                <th>Numero de productos</th>
                <th>Acciones</th>
            </tr>
        </tfoot>
    </table>

    <script>
            $('#GuiasEntradaTable').DataTable({
                language: {
                    url: 'http://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json'
                }
            });

            function editarGuiaEntrada(data) {

                editarElemento(data, 'editarGuiaEntrada');

                $("#RecopilarProductosEditarForm input").map(function(){

                    $("#"+this.id).prop('checked', false);
                    $("#"+this.id).parent().removeClass('checked');

                        $("#"+this.id).removeAttr('disabled');
                        $("#"+this.id).parent().removeClass('disabled');



                    if ($(this).attr("data-estatus")==1 && $(this).attr("data-id_guia_entrada")==$("#editarGuiaEntrada #id").val()) {
                        $("#"+this.id).prop('checked', true);
                        $("#"+this.id).parent().addClass('checked');
                    }

                    if ($(this).attr("data-estatus")==1 && $(this).attr("data-id_guia_entrada")!=$("#editarGuiaEntrada #id").val()) {
                        $("#"+this.id).attr('disabled', "disabled");
                        $("#"+this.id).parent().addClass('disabled');
                    }
                })
            }
    </script>
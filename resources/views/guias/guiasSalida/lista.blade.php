<table id="GuiasSalidaTable" class="display" style="width:100%">
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
                @foreach ($Datos["GuiasSalida"] as $GuiaSalida)
                <tr id="guias-salida_{{$GuiaSalida->id}}">
                    <td>{{$GuiaSalida->id}}</td>
                    <td>{{$GuiaSalida->descripcion_guia}}</td>
                    <td>{{$GuiaSalida->fecha_entrega}}</td>
                    <td>{{$GuiaSalida->Cliente["nombre"]}}</td>
                    <td>{{count($GuiaSalida->UnidadesProductos)}}</td>
                    <td style="display: flex;">
                        <a onclick="editarGuiaSalida('{{$GuiaSalida}}')" class="btn btn-info btn-xs"><i class="far fa-edit"></i> Editar </a>
                        <a onclick="EliminarElemento('{{$GuiaSalida->id}}', 'guias-salida')" class="btn btn-danger btn-xs"><i class="far fa-trash-alt"></i> Eliminar </a>
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
            $('#GuiasSalidaTable').DataTable({
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
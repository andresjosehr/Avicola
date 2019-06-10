<table id="GuiasEntradaTable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Descripcion</th>
                <th>Fecha de ingreso</th>
                <th>Proveedor</th>
                <th>Productos</th>
                <th>Numero de unidades</th>
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
                    <td>{{$GuiaEntrada->Producto["descripcion"]}}</td>
                    <td>{{count($GuiaEntrada->UnidadesProductos)}}</td>
                    <td style="display: flex;">
                        <a onclick="EditarGuiaEntrada('{{$GuiaEntrada}}')" class="btn btn-info btn-xs"><i class="far fa-edit"></i> Editar </a>
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
                <th>Productos</th>
                <th>Numero de unidades</th>
                <th>Acciones</th>
            </tr>
        </tfoot>
    </table>

    <script>
        function EditarGuiaEntrada(elemento) {

            $("#editarGuiaEntradaForm .input_div").empty();
            var unidades_productos = JSON.parse(elemento).unidades_productos;
            elemento=JSON.parse(elemento);

            for (var i = 0; i < unidades_productos.length; i++) {

                $("#editarGuiaEntradaForm .input_div").append('<div class="col-md-2 div_product_'+i+'" style="margin-top: 10px;">'+
                                                                '<input type="text" id="peso'+i+'" value="'+unidades_productos[i].peso+'" required="required" class="form-control col-md-7 col-xs-12" placeholder="Peso">'+
                                                              '</div>');
                elemento["peso"+i]=unidades_productos[i].peso;
            }
            elemento["unidades"]=unidades_productos.length;
            elemento=JSON.stringify(elemento);

            editarElemento(elemento, 'editarGuiaEntrada')
        }


            $('#GuiasEntradaTable').DataTable({
                language: {
                    url: 'http://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json'
                }
            });
    </script>
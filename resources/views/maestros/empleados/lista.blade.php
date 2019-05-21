<table id="EmpleadosTable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Email</th>
                <th>Cargo</th>
                <th>Chofer</th>
                <th>Licencia</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($Datos["Empleados"] as $Empleado)

                <tr id="empleados_{{$Empleado->id}}">
                    <td>{{$Empleado->nombre}}</td>
                    <td>{{$Empleado->apellido_materno}} {{$Empleado->apellido_paterno}}</td>
                    <td>{{$Empleado->email}}</td>
                    <td>{{$Empleado->Cargo["nombre"]}}</td>
                    <td>{{$Empleado->chofer}}</td>
                    <td>@if ($Empleado->licencia==null) No Aplica @else {{$Empleado->licencia}} @endif </td>
                    <td style="display: flex;">
                        <a onclick="editarEmpleado('{{$Empleado}}', 'editarEmpleado')" class="btn btn-info btn-xs"><i class="far fa-edit"></i> Editar </a>
                        <a onclick="EliminarElemento('{{$Empleado->id}}', 'empleados')" class="btn btn-danger btn-xs"><i class="far fa-trash-alt"></i> Eliminar </a>
                    </td>
                </tr>
                @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Email</th>
                <th>Cargo</th>
                <th>Chofer</th>
                <th>Licencia</th>
                <th>Acciones</th>
            </tr>
        </tfoot>
    </table>

    <script>
            $('#EmpleadosTable').DataTable({
                language: {
                    url: 'http://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json'
                }
            });
    </script>
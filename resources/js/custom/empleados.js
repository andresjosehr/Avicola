


window.validateChofer=(idForm)=>{


	$('#'+idForm+' #chofer').change(function(){
        if (this.checked) {
            $("#"+idForm+" #licencia").removeAttr("disabled");
            $("#"+idForm+" #licencia").attr("required", "required");
            $("#"+idForm+" #chofer").val("Si");
        } else{
        	$("#"+idForm+" #licencia").attr("disabled", "disabled");
        	$("#"+idForm+" #licencia").removeAttr("required", "required");
        	$("#"+idForm+" #licencia").val("");
        	$("#"+idForm+" #chofer").val("No");

        }
    });


}


window.editarEmpleado=(Datos, idForm)=>{

    let Empleado=JSON.parse(Datos);

    if (Empleado.chofer=="Si") {
        $("#editarEmpleado #licencia").removeAttr("disabled");
        $("#editarEmpleado #chofer").val("Si");
        $("#editarEmpleado #chofer").prop('checked', true);
    } else{

            $("#editarEmpleado #licencia").attr("disabled", "disabled");
            $("#editarEmpleado #licencia").removeAttr("required");
            $("#editarEmpleado #licencia").val("");
            $("#editarEmpleado #chofer").val("No");
            $("#editarEmpleado #chofer").prop('checked', false);
    }

    if (Empleado.cargo!=undefined) {
        Empleado.cargo= Empleado.cargo.id;
    }



    editarElemento(JSON.stringify(Empleado), idForm);
}
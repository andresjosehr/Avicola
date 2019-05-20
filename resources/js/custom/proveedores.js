







window.EditarProveedor=(Datos, departamento, provincia, distrito, idForm)=>{

	DatosEdit=JSON.parse(Datos);


	Datos=JSON.parse(Datos);

	$("#"+idForm+" input:not(.chosen-search-input)").map((key, input)=>{ 
		input.value=Datos[input.id] 
	});

	$("#"+idForm+" select").map((key, input)=>{ 
		input.value=Datos[input.id] ;
		$('#'+idForm+' #'+input.id).trigger("chosen:updated");
	});


	if (DatosEdit.pais=="Perú") {
		$("#"+idForm+" #departamento").removeAttr("disabled");
		$("#"+idForm+" #provincia").removeAttr("disabled");
		$("#"+idForm+" #distrito").removeAttr("disabled");

		$("#"+idForm+" #departamento").val(departamento);

	 $("#"+idForm+" #provincia").empty();
         for(key in window.Ubigeo[departamento]){
            $("#"+idForm+" #provincia").append("<option value='"+key+"'>"+key.replace(/_/g, " ")+"</option>");
       	}

       	 $("#"+idForm+" #distrito").empty();
         for(key in window.Ubigeo[departamento][provincia]){
            $("#"+idForm+" #distrito").append("<option value='"+key+"'>"+key.replace(/_/g, " ")+"</option>");
       	}


       	$("#"+idForm+" #provincia").val(provincia);
       	$("#"+idForm+" #distrito").val(distrito);



	} else{
		$("#"+idForm+" #departamento").attr("disabled", "disabled");
		$("#"+idForm+" #provincia").attr("disabled", "disabled");
		$("#"+idForm+" #distrito").attr("disabled", "disabled");
	}



     


	if (Datos.tipo_persona==2) {

		$("#"+idForm+" #tipo_documento option").map(function(){
			if($(this).val()!=4) {
				$(this).hide();
				$('#'+idForm+' #tipo_documento, #'+idForm+' #tipo_persona').trigger("chosen:updated");
			} else $(this).attr("selected", "selected")
		});

	}



	$('#'+idForm+' #departamento, #'+idForm+' #provincia, #'+idForm+' #distrito').trigger("chosen:updated");
	$('#editarProveedor').modal('toggle')


}
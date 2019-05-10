

window.validateTipoDocumento=() => {
	$("#crearClienteForm #tipo_persona").change((e) => {
	  if($("#crearClienteForm #tipo_persona option:selected").val()==2){
	  	$("#crearClienteForm #tipo_documento option").map(function(){
			if($(this).val()!=4) {
				$(this).hide();
				$('#crearClienteForm #tipo_documento, #crearClienteForm #tipo_persona').trigger("chosen:updated");
			} else $(this).attr("selected", "selected")
		});
	  } else{
	  	$("#crearClienteForm #tipo_documento option").map(function(){
			$(this).show();
			$('#crearClienteForm #tipo_documento, #crearClienteForm #tipo_persona').trigger("chosen:updated");
		});
	  }
	});
}


window.validateUbigeo=() => {

	$('#crearClienteForm #departamento, #crearClienteForm #provincia, #crearClienteForm #distrito').prop('disabled', true).trigger("chosen:updated");

	$("#crearClienteForm #pais").chosen().change((e) => {
			if ($("#crearClienteForm #pais").val()=="Perú") {
				$('#crearClienteForm #departamento, #crearClienteForm #provincia, #crearClienteForm #distrito').prop('disabled', false).trigger("chosen:updated");
			} else{
				$('#crearClienteForm #departamento, #crearClienteForm #provincia, #crearClienteForm #distrito').prop('disabled', true).trigger("chosen:updated");
			}
	});


	$("#crearClienteForm #departamento").chosen().change((e) => {

		$("#crearClienteForm #provincia").empty();
		for(key in window.Ubigeo[$("#crearClienteForm #departamento").val()]){
			$("#crearClienteForm #provincia").append("<option>"+key+"</option>");
		}

		$("#crearClienteForm #distrito").empty();

		for(key in window.Ubigeo[$("#crearClienteForm #departamento").val()][$("#crearClienteForm #provincia").val()]){
			$("#crearClienteForm #distrito").append("<option>"+key+"</option>");
		}

			$('#crearClienteForm #departamento, #crearClienteForm #provincia, #crearClienteForm #distrito').trigger("chosen:updated");

	});



	$("#crearClienteForm #provincia").chosen().change((e) => {

		$("#crearClienteForm #distrito").empty();

		for(key in window.Ubigeo[$("#crearClienteForm #departamento").val()][$("#crearClienteForm #provincia").val()]){
			$("#crearClienteForm #distrito").append("<option>"+key+"</option>");
		}

			$('#crearClienteForm #departamento, #crearClienteForm #provincia, #crearClienteForm #distrito').trigger("chosen:updated");

	});
}













window.validateTipoDocumentoEditar=() => {
	$("#editarClienteForm #tipo_persona").change((e) => {
	  if($("#editarClienteForm #tipo_persona option:selected").val()==2){
	  	$("#editarClienteForm #tipo_documento option").map(function(){
			if($(this).val()!=4) {
				$(this).hide();
				$('#editarClienteForm #tipo_documento, #editarClienteForm #tipo_persona').trigger("chosen:updated");
			} else $(this).attr("selected", "selected")
		});
	  } else{
	  	$("#editarClienteForm #tipo_documento option").map(function(){
			$(this).show();
			$('#editarClienteForm #tipo_documento, #editarClienteForm #tipo_persona').trigger("chosen:updated");
		});
	  }
	});
}


window.validateUbigeoEditar=() => {

	$('#editarClienteForm #departamento, #editarClienteForm #provincia, #editarClienteForm #distrito').prop('disabled', true).trigger("chosen:updated");

	$("#editarClienteForm #pais").chosen().change((e) => {
			if ($("#editarClienteForm #pais").val()=="Perú") {
				$('#editarClienteForm #departamento, #editarClienteForm #provincia, #editarClienteForm #distrito').prop('disabled', false).trigger("chosen:updated");
			} else{
				$('#editarClienteForm #departamento, #editarClienteForm #provincia, #editarClienteForm #distrito').prop('disabled', true).trigger("chosen:updated");
			}
	});


	$("#editarClienteForm #departamento").chosen().change((e) => {

		$("#editarClienteForm #provincia").empty();
		for(key in window.Ubigeo[$("#editarClienteForm #departamento").val()]){
			$("#editarClienteForm #provincia").append("<option>"+key+"</option>");
		}

		$("#editarClienteForm #distrito").empty();

		for(key in window.Ubigeo[$("#editarClienteForm #departamento").val()][$("#editarClienteForm #provincia").val()]){
			$("#editarClienteForm #distrito").append("<option>"+key+"</option>");
		}

			$('#editarClienteForm #departamento, #editarClienteForm #provincia, #editarClienteForm #distrito').trigger("chosen:updated");

	});



	$("#editarClienteForm #provincia").chosen().change((e) => {

		$("#editarClienteForm #distrito").empty();

		for(key in window.Ubigeo[$("#editarClienteForm #departamento").val()][$("#editarClienteForm #provincia").val()]){
			$("#editarClienteForm #distrito").append("<option>"+key+"</option>");
		}

			$('#editarClienteForm #departamento, #editarClienteForm #provincia, #editarClienteForm #distrito').trigger("chosen:updated");

	});
}





window.EditarCliente=(Datos, departamento, provincia, distrito, idForm)=>{

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
            $("#"+idForm+" #provincia").append("<option>"+key+"</option>");
       	}

       	 $("#"+idForm+" #distrito").empty();
         for(key in window.Ubigeo[departamento][provincia]){
            $("#"+idForm+" #distrito").append("<option>"+key+"</option>");
       	}


       	$("#"+idForm+" #provincia").val(departamento);
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
	$('#editarCliente').modal('toggle')


}
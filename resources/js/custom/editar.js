



window.editarElemento=(Datos, idForm)=>{

	Datos=JSON.parse(Datos);

	if (idForm=="editarChofer") if (Datos.cargo!=undefined) Datos.cargo= Datos.cargo.id;
	

	$("#"+idForm+" input:not(.chosen-search-input, input[type=search], input[type=checkbox], input[type=radio])").map((key, input)=>{ 
		input.value=Datos[input.id] 
	});

	$("#"+idForm+" select:not(.chosen-search-input, .dataTables_length select) ").map((key, input)=>{ 
		input.value=Datos[input.id];
		$('#'+idForm+' #'+input.id).trigger("chosen:updated");
	});

	$('#'+idForm).modal('toggle');
}
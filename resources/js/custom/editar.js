



window.editarElemento=(Datos, idForm)=>{

	Datos=JSON.parse(Datos);

	$("#"+idForm+" input:not(.chosen-search-input)").map((key, input)=>{ 
		input.value=Datos[input.id] 
	});

	// $("#"+idForm+" select").map((key, input)=>{ 
	// 	input.value=Datos[input.id] ;
	// 	$('#'+idForm+' #'+input.id).trigger("chosen:updated");
	// });

	$('#editarCliente').modal('toggle')
}


window.validateTipoDocumento=() => {
	$("#crearClienteForm #tipo_persona").change((e) => {
	  if($("#crearClienteForm #tipo_persona option:selected").val()==2){
	  	$("#crearClienteForm #tipo_documento option").map(function(){
			if($(this).val()!=9) $(this).hide(); else $(this).attr("selected", "selected")
		});
	  } else{
	  	$("#crearClienteForm #tipo_documento option").map(function(){
			$(this).show();
		});
	  }
	});
}


window.validateUbigeo=() => {

	$('#crearClienteForm #departamento, #crearClienteForm #provincia, #crearClienteForm #distrito').prop('disabled', true).trigger("chosen:updated");

	$("#pais").chosen().change((e) => {
			if ($("#crearClienteForm #pais").val()=="Perú") {
				$('#crearClienteForm #departamento, #crearClienteForm #provincia, #crearClienteForm #distrito').prop('disabled', false).trigger("chosen:updated");
			} else{
				$('#crearClienteForm #departamento, #crearClienteForm #provincia, #crearClienteForm #distrito').prop('disabled', true).trigger("chosen:updated");
			}
	});


	$("#crearClienteForm #departamento").chosen().change((e) => {
			$("#crearClienteForm #provincia option").map(() =>{
				console.log($(this));
				console.log($(this).attr("id"));
			})
	});
}
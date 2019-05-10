




window.crearElemento=(idForm, modulo) => {

	var Data={};
	$("#"+idForm +" input,#"+idForm +" select").map((key, input) => Data[input.id]=input.value );

	$(".btn_avicola").hide("fast", function(){
		$(".loading_avicola").show("fast");
	})
	$.ajax({
		    type: 'POST',
		    url: url+"/"+modulo,
            data: Data,
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
		    success: function(result){

		    	if (result=="Exito") {
		    		swal("¡Listo!", "Registro realizado de manera exitosa", "success");

		    		$("#"+idForm+" input").map(function(key, input) {
		    				$(this).val("");
		    		})

		    		$(".loading_avicola").hide("fast", function(){
						$(".btn_avicola").show("fast");
					})

		    		$.ajaxSetup({
				        headers: {
				            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				        }
				    });

		    		$("#listUpdate").load(url+"/"+modulo+"/listUpdate",{Data: "Ex"});
		    	}

			}
		});
}
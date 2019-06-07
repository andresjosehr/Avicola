
window.updateElemento=(idForm, modulo)=>{


	$(".input-error").remove();

	var Data={};
	$("#"+idForm +" input,#"+idForm +" select").map((key, input) => Data[input.id]=input.value );

	$(".btn_avicola").hide("fast", function(){
		$(".loading_avicola").show("fast");
	})

	Data._method="POST";

	$.ajax({
		    type: 'PUT',
		    url: url+"/"+modulo+"/"+Data.id,
				data: Data,
				headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
		    	success: function(result){

		    		$(".loading_avicola").hide("fast", function(){
						$(".btn_avicola").show("fast");
					})

		    	if (result=="Exito") {
		    		swal("¡Listo!", "Registro realizado de manera exitosa", "success");

		    		$.ajaxSetup({
				        headers: {
				            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				        }
				    });

		    		$("#listUpdate").load(url+"/"+modulo+"/listUpdate",{Data: "Ex"});

		    		if (modulo=="guias-entrada" || modulo=="guias-pedido") $("#listUpdateProductos").load(url+"/"+modulo+"/listUpdateProductos",{Data: "Ex"}); $("#listUpdateProductosEditar").load(url+"/"+modulo+"/listUpdateProductosEditar",{Data: "Ex"});
		    	}else {
		    		for (key in result) {
		    			$("#"+idForm+" #"+key).after().after("<p class='input-error' style='color:red'>"+result[key][0]+"</p>")
		    		}
		    		console.log(result)
		    	}

			}
		});


}
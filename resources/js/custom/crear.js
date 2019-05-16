




window.crearElemento=(idForm, modulo) => {

	var Data={};
	$("#"+idForm +" input,#"+idForm +" select").map((key, input) => Data[input.id]=input.value );

	$(".btn_avicola").hide("fast", function(){
		$(".loading_avicola").show("fast");
	})
	$(".input-error").remove();
	$.ajax({
		    type: 'POST',
		    url: url+"/"+modulo,
            data: Data,
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
		    success: function(result){
		    	$(".loading_avicola").hide("fast", function(){
						$(".btn_avicola").show("fast");
					})

		    	if (result=="Exito") {
		    		swal("¡Listo!", "Registro realizado de manera exitosa", "success");

		    		$("#"+idForm+" input").map(function(key, input) {
		    				$(this).val("");
		    		})

		    		$.ajaxSetup({
				        headers: {
				            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				        }
				    });

		    		$("#listUpdate").load(url+"/"+modulo+"/listUpdate",{Data: "Ex"});
		    	} else {
		    		for (key in result) {
		    			$("#"+idForm+" #"+key).after().after("<p class='input-error' style='color:red'>"+result[key][0]+"</p>")
		    		}
		    		console.log(result)
		    	}

			}
		});
}
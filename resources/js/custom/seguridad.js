

window.loginAvi=(idForm, modulo)=>{



	var Data={};
	$("#"+idForm +" input").map((key, input) => Data[input.id]=input.value );

	$(".btn_avicola").hide("fast", function(){
		$(".loading_avicola").show("fast");
	})
	$(".input-error").remove();

	$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
	$.ajax({
		    type: 'POST',
		    url: url+"/login",
            data: Data,
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
		    success: function(result){
		    	$(".loading_avicola").hide("fast", function(){
					$(".btn_avicola").show("fast");
				})

		    	if (result=="Exito") {
		    		swal("¡Listo!", "Esta siendo redirigido al panel de control", "success");
		    		window.location.href = url;

		    	} else {
		    		swal("Error", "Credenciales Invalidas", "error")
		    	}

			}
		});
}











window.resetAvi=(idForm, modulo)=>{



	var Data={};
	$("#"+idForm +" input").map((key, input) => Data[input.id]=input.value );

	$(".btn_avicola").hide("fast", function(){
		$(".loading_avicola").show("fast");
	})
	$(".input-error").remove();

	$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
	$.ajax({
		    type: 'POST',
		    url: url+"/resetPass",
            data: Data,
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
		    success: function(result){
		    	$(".loading_avicola").hide("fast", function(){
					$(".btn_avicola").show("fast");
				})

		    	if (result=="Exito") {
		    		swal("¡Listo!", "Hemos enviado un correo a tu email para continuar con el preceso de cambio de contraseña", "success");

		    	} else {
		    		swal("Error", "Este email no concuerda con nuestros registros", "error")
		    	}

			}
		});
}








window.resetAvi2=(idForm, modulo)=>{



	var Data={};
	$("#"+idForm +" input").map((key, input) => Data[input.id]=input.value );

	$(".btn_avicola").hide("fast", function(){
		$(".loading_avicola").show("fast");
	})
	$(".input-error").remove();

	$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var parts = window.location.pathname.split('/');
	var urlPath = parts.pop() || parts.pop();  // handle potential trailing slash

	$.ajax({
		    type: 'POST',
		    url: url+"/resetPass2/"+urlPath,
            data: Data,
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
		    success: function(result){
		    	$(".loading_avicola").hide("fast", function(){
					$(".btn_avicola").show("fast");
				})

		    	if (result=="Exito") {
		    		swal("¡Listo!", "Contraseña actualizada exitosamente", "success");
		    		window.location.href = url;
		    	} else {
		    	}

			}
		});
}
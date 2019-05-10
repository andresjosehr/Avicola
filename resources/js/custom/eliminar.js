

window.EliminarElemento=(id, modulo)=>{
	swal({
	  title: "¡Espera!",
	  text: "Estas seguro de eliminar este elemento?",
	  icon: "warning",
	  buttons: true,
	  dangerMode: true,
	})
	.then((willDelete) => {
	  if (willDelete) {
		 swal("¡Listo!", "Elemento eliminado satisfactoriamente", "success");
		 $("#"+modulo+"_"+id).fadeOut("slow", function(){
		 	$("#"+modulo+"_"+id).remove();
		 })
	  	$.ajax({
		    type: 'DELETE',
				url: url+"/"+modulo+"/"+id,
				headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
		    success: function(result){
		    }
		});


	  } else {}
	});
}
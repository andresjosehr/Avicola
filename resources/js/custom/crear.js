




window.crearElemento=(idForm, modulo) => {

	var Data={};
	$("#"+idForm +" input").map((key, input) => Data[input.id]=input.value );

	$.ajax({
		    type: 'POST',
		    url: url+"/"+modulo,
            data: Data,
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
		    success: function(result){

			}
		});
}
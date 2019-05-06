window.ValidarGeneral=function(id, tipo) {

		var form = document.getElementById(id);
		form.addEventListener('submit', function(e) {
		  e.preventDefault();
		});
		var i=0;
		$('#'+id).parsley().on('form:success', function() {
			if (i==0) {
				if (tipo=="crear") {}
				alert("Creado");
			}
			i++;
		});
	}
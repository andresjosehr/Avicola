

window.ValidarGeneral= (id, tipo, modulo) => {


        $("#"+id).on('submit', function(e){
            e.preventDefault();
            let form = $(this);

            form.parsley().validate();

            if (form.parsley().isValid()){
                if (tipo=="crear") {
                	crearElemento(id, modulo);
                }
            }
        });
}



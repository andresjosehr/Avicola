

window.ValidarGeneral= (id, tipo, modulo) => {

        var execute=false;
        var i=0;
        $("#"+id).on('submit', function(e){
            e.preventDefault();
            let form = $(this);
            form.parsley().validate();
            if (form.parsley().isValid()){
                if (tipo=="crear") {
                    if (execute==false && i==0) {
                        crearElemento(id, modulo);
                        execute=true;
                        i=1;
                    }
                }

                 if (tipo=="update") {
                    if (execute==false && i==0) {
                        updateElemento(id, modulo);
                        execute=true;
                        i=1;
                    }
                }
            }
        });
}



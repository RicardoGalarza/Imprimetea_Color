$("body").on("click", "#crear_direccion", function(e) {

    let ciudad =$("#ciudad").val();
    let direccion =$("#direccion").val();
    let numero_casa=$("#numero_casa").val();
    let agencia_preferida =$("#agencia_preferida").val();

    console.log("la ciudad es"+ciudad);
    if(ciudad== ""){
        alert("Llene los campos");
    }else{

        $.ajax({
            url: 'crear_direccion',
            type: 'POST',
            dataType: 'json',
            data: { "dato_ciudad":ciudad, "dato_direccion":direccion, "dato_numero_casa":numero_casa, "dato_agencia_preferida":agencia_preferida }
        }).then(function(respuesta) {
            if(respuesta == true){
                alert("Se ha creado con éxito");
                $('#modal_crear_direccion').modal('hide');
            }else{
                alert("Ups, Ha ocurrido un error");
            }
        });

    }






});
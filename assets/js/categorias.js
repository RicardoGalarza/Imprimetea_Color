$("body").on("click", "#crear_categoria", function(e) {

    let nombre = $("#nombre").val();    
    let descripcion = $("#descripcion").val();

    console.log("la descripcion es: "+descripcion);
    if(nombre == ""){
        alert("Llene los campos");
    }else{

        $.ajax({
            url: 'crear_categoria',
            type: 'POST',
            dataType: 'json',
            data: { "dato_nombre":nombre, "dato_descripcion":descripcion }
        }).then(function(respuesta) {
            if(respuesta == true){
                $('#modal_crear_categoria').modal('hide');
                alert("Se ha creado con éxito");
            }else{
                alert("Ups, Ha ocurrido un error");
            }
        });

    }

});
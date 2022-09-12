$("body").on("click", "#crear_cliente", function(e) {

    let nombre =$("#nombre").val();
    let rut =$("#rut").val();
    let telefono =$("#telefono").val();
    let email =$("#email").val();

    console.log("el nombre es: "+nombre);
    if(nombre == ""){
        alert("Llene los campos");
    }else{

        $.ajax({
            url: 'crear_cliente',
            type: 'POST',
            dataType: 'json',
            data: { "dato_nombre":nombre, "dato_rut":rut, "dato_telefono":telefono, "dato_email":email }
        }).then(function(respuesta) {
            if(respuesta == true){
                alert("Se ha creado con éxito");
                $('#modal_crear_cliente').modal('hide');
            }else{
                alert("Ups, Ha ocurrido un error");
            }
        });

    }






});

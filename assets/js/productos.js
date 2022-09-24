$("body").on("click", "#crear_producto", function(e) {

    let nombre =$("#nombre").val();
    let precio =$("#precio").val();
    let stock_cantidad=$("#stock_cantidad").val();
    let costo =$("#costo").val();
    let descripcion =$("#descripcion").val();
    let foto =$("#foto").val();

    console.log("el nombre es"+nombre);
    if(nombre== "" || precio == "" || stock_cantidad == "" || costo == "") {
        alert("Llene los campos");
    }else{

        $.ajax({
            url: 'crear_producto',
            type: 'POST',
            dataType: 'json',
            data: { "dato_nombre":nombre, "dato_precio":precio, "dato_stock_cantidad":stock_cantidad, "dato_costo":costo, "dato_descripcion":descripcion, "dato_foto":foto }
        }).then(function(respuesta) {
            if(respuesta == true){
                alert("Se ha creado con éxito");
                $('#modal_crear_producto').modal('hide');
            }else{
                alert("Ups, Ha ocurrido un error");
            }
        });

    }






});
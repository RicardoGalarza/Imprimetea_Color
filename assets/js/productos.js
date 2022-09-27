$(document).ready(function() {

   rellenar_productos();
   rellenar_selector_categorias();
});

function editarProducto(id) {
  console.log("presiono boton editar y recibi el id: " + id);  
}

function eliminarProducto(id) {
    console.log("presiono boton eliminnar y recibi el id: " + id);  
  }

  
  function verDetalleProducto(id) {
    console.log("presiono boton detalle cliente y recibi el id: " + id);  
  }
  

function rellenar_productos() {

    console.log("SE EJECUTO RELLENAR_PRODUCTOS");

    $.ajax({
        url: 'listar_productos',
        type: 'GET',
        dataType: 'json'
    }).then(function (resultado) {
        let fila = "";

        $.each(resultado, function (i, c) {
            
            fila += '<tr>'
            fila += '<th scope="row">' + c.NOMBRE + '</th>'
            fila += '<td>' + c.PRECIO  + '</td>'
            fila += '<td>' + c.STOCK_CANTIDAD + '</td>'
            fila += '<td>' + c.COSTO + '</td>'
            fila += '<td>' + c.DESCRIPCION + '</td>'
            fila += '<td>' + c.CREATED_AT + '</td>'
            fila += '<td>' + c.UPDATED_AT + '</td>'
            
            fila += '<td>'

            fila += '<button  type="button" onclick="editarProducto(' + c.ID + ')" class="btn btn-success btn-sm   waves-effect "><i class="fas fa-pencil-alt"></i></button>'

            fila += '<button  type="button" onclick="eliminarProducto(' + c.ID + ')" class="btn btn-danger btn-sm  waves-effect "><i class="fe-trash-2"></i></button>' 

            fila += '<button  type="button" onclick="verDetalleProducto(' + c.ID + ')" class="btn btn-primary btn-sm waves-effect "><i class=" dripicons-preview"></i></button>'
            
            fila += '</td>'
            fila += '</tr>'

         
        })

        console.log(fila);

        $("#body_tabla_productos").append(fila);
    
     })
 
}


    


function rellenar_selector_categorias() {
    console.log("SE EJECUTO RELLENAR_CATEGORIAS");

    $.ajax({
        url: 'listar_categorias',
        type: 'GET',
        dataType: 'json'
    }).then(function (resultado) {
        let fila = "";
        fila += '<option selected>Seleccione una opción</option>';

        $.each(resultado, function (i, c) {

            fila += '<option value="' + c.ID + '">' + c.NOMBRE + '</option>'

        })

        $("#selector_categoria").append(fila);

    })
}






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
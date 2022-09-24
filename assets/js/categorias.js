$(document).ready(function() {

    rellenar_categorias();

});

function editarCategoria(id) {
  console.log("presiono boton editar y recibi el id: " + id);  
}

function eliminarCategoria(id) {
    console.log("presiono boton eliminnar y recibi el id: " + id);  
  }

  
  function verDetalleCategoria(id) {
    console.log("presiono boton detalle categoria y recibi el id: " + id);  
  }
  





function rellenar_categorias() {

    console.log("SE EJECUTO RELLENAR_CATEGORIAS");

    $.ajax({
        url: 'listar_categorias',
        type: 'GET',
        dataType: 'json'
    }).then(function (resultado) {
        let fila = "";

        $.each(resultado, function (i, c) {
            
            fila += '<tr>';
            fila += '<td scope="row">' + c.NOMBRE + '</td>'
            fila += '<td>' + c.DESCRIPCION + '</td>'
            fila += '<td>' + c.CREATED_AT + '</td>'
            fila += '<td>' + c.UPDATED_AT + '</td>'
            fila += '<td>'

            fila += '<button type="button" onclick="editarCategoria(' + c.ID + ')" class="btn btn-success  waves-effect "><i class="fas fa-pencil-alt"></i></button>'

            fila += '<button type="button" onclick="eliminarCategoria(' + c.ID + ')" class="btn btn-danger  waves-effect "><i class="fe-trash-2"></i></button>' 

            fila += '<button type="button" onclick="verDetalleCategoria(' + c.ID + ')" class="btn btn-primary waves-effect "><i class=" dripicons-preview"></i></button>'
            
        fila += '</td>'
     fila += '</tr>'

         
        })

        console.log(fila);

        $("#body_tabla_categorias").append(fila);
    
     })
 
}
















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
$(document).ready(function() {

    rellenar_direcciones();

});

function editarDireccion(id) {
  console.log("presiono boton editar y recibi el id: " + id);  
}

function eliminarDireccion(id) {
    console.log("presiono boton eliminnar y recibi el id: " + id);  
  }

  
  function verDetalleDireccion(id) {
    console.log("presiono boton detalle cliente y recibi el id: " + id);  
  }
  

function rellenar_direcciones() {

    console.log("SE EJECUTO RELLENAR_DIRECCIONES");

    $.ajax({
        url: 'listar_direcciones',
        type: 'GET',
        dataType: 'json'
    }).then(function (resultado) {
        let fila = "";

        $.each(resultado, function (i, c) {
            
            fila += '<tr>'
            fila += '<th scope="row">' + c.CIUDAD + '</th>'
            fila += '<td>' + c.DIRECCION + '</td>'
            fila += '<td>' + c.NUMERO_CASA + '</td>'
            fila += '<td>' + c.AGENCIA_PREFERIDA + '</td>'
            fila += '<td>' + c.CREATED_AT + '</td>'
            fila += '<td>' + c.UPDATED_AT + '</td>'
            fila += '<td>'

            fila += '<button type="button" onclick="editarDireccion(' + c.ID + ')" class="btn btn-success  waves-effect "><i class="fas fa-pencil-alt"></i></button>'

            fila += '<button type="button" onclick="eliminarDireccion(' + c.ID + ')" class="btn btn-danger  waves-effect "><i class="fe-trash-2"></i></button>' 

            fila += '<button type="button" onclick="verDetalleDireccion(' + c.ID + ')" class="btn btn-primary waves-effect "><i class=" dripicons-preview"></i></button>'
            
            fila += '</td>'
        fila += '</tr>'

         
        })

        console.log(fila);

        $("#body_tabla_direcciones").append(fila);
    
     })
 
}














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
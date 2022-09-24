$(document).ready(function() {

    rellenar_clientes();

});

function editarCliente(id) {
  console.log("presiono boton editar y recibi el id: " + id);  
}

function eliminarCliente(id) {
    console.log("presiono boton eliminnar y recibi el id: " + id);  
  }

  
  function verDetalleCliente(id) {
    console.log("presiono boton detalle cliente y recibi el id: " + id);  
  }
  

function rellenar_clientes() {

    console.log("SE EJECUTO RELLENAR_CLIENTES");

    $.ajax({
        url: 'listar_clientes',
        type: 'GET',
        dataType: 'json'
    }).then(function (resultado) {
        let fila = "";

        $.each(resultado, function (i, c) {
            
                fila += '<tr>'
                fila += '<th scope="row">' + c.NOMBRE + '</th>'
                fila += '<td>' + c.RUT + '</td>'
                fila += '<td>' + c.TELEFONO + '</td>'
                fila += '<td>' + c.EMAIL + '</td>'
                fila += '<td>' + c.CREATED_AT + '</td>'
                fila += '<td>' + c.UPDATED_AT + '</td>'
                fila += '<td>'

                fila += '<button type="button" onclick="editarCliente(' + c.ID + ')" class="btn btn-success  waves-effect "><i class="fas fa-pencil-alt"></i></button>'

                fila += '<button type="button" onclick="eliminarCliente(' + c.ID + ')" class="btn btn-danger  waves-effect "><i class="fe-trash-2"></i></button>' 

                fila += '<button type="button" onclick="verDetalleCliente(' + c.ID + ')" class="btn btn-primary waves-effect "><i class=" dripicons-preview"></i></button>'
                                                
                fila += '</td>'
             fila += '</tr>'

         
        })

        console.log(fila);

        $("#body_tabla_clientes").append(fila);
    
     })
 
}










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

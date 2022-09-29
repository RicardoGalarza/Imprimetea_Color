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
        $("#body_tabla_clientes").empty();

        $.each(resultado, function (i, c) {



            fila += '<tr>'
            fila += '<td scope="row">' + c.RUT + '</td>'
            fila += '<td>' + c.NOMBRES + '</td>'
            fila += '<td>' + c.APELLIDOS + '</td>'
            fila += '<td>' + c.TELEFONO + '</td>'
            fila += '<td>' + c.CORREO + '</td>'
            fila += '<td>' + c.CREATED_AT + '</td>'
            fila += '<td>' + c.UPDATED_AT + '</td>'
           
            fila += '<td>'

            fila += '<button  type="button" onclick="editarCliente(' + c.ID + ')" class="btn btn-success btn-sm   waves-effect "><i class="fas fa-pencil-alt"></i></button>'

            fila += '<button  type="button" onclick="eliminarCliente(' + c.ID + ')" class="btn btn-danger btn-sm  waves-effect "><i class="fe-trash-2"></i></button>' 

            fila += '<button  type="button" onclick="verDetalleCliente(' + c.ID + ')" class="btn btn-primary btn-sm waves-effect "><i class=" dripicons-preview"></i></button>'
            fila += '</td>'
        fila += '</tr>'

    })


    $("#body_tabla_clientes").append(fila);

 })

}











$("body").on("click", "#crear_cliente", function(e) {

    let rut = $("#rut").val();    
    let nombres = $("#nombres").val();
    let apellidos = $("#apellidos").val(); 
    let telefono = $("#telefono").val(); 
    let correo = $("#correo").val(); 
    

    if(nombres == ""){
        alert("Llene los campos");
    }else{

        $.ajax({
            url: 'crear_cliente',
            type: 'POST',
            dataType: 'json',
            data: { "dato_rut":rut, "dato_nombres":nombres, "dato_correo":correo, "dato_telefono":telefono, "dato_apellidos":apellidos, }
        }).then(function(respuesta) {
            if(respuesta == true){
                $('#modal_crear_cliente').modal('hide');
                rellenar_clientes()
                alert("Se ha creado con éxito");
                //rellenar_categorias();
            }else{
                alert("Ups, Ha ocurrido un error");
            }
        });

    }

});
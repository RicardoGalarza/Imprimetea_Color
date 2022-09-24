$(document).ready(function() {

    rellenar_emprendimientos();

});

function editarEmprendimiento(id) {
  console.log("presiono boton editar y recibi el id: " + id);  
}

function eliminarEmprendimiento(id) {
    console.log("presiono boton eliminnar y recibi el id: " + id);  
  }

  
  function verDetalleEmprendimiento(id) {
    console.log("presiono boton detalle cliente y recibi el id: " + id);  
  }
  

function rellenar_emprendimientos() {

    console.log("SE EJECUTO RELLENAR_EMPRENDIMIENTOS");

    $.ajax({
        url: 'listar_emprendimientos',
        type: 'GET',
        dataType: 'json'
    }).then(function (resultado) {
        let fila = "";

        $.each(resultado, function (i, c) {
            
            fila += '<tr>'
            fila += '<td scope="row">' + c.EMPRENDIMIENTO + '</td>'
            fila += '<td>' + c.CLIENTE + '</td>'
            fila += '<td>' + c.WHATSAPP + '</td>'
            fila += '<td>' + c.CREATED_AT + '</td>'
            fila += '<td>' + c.UPDATED_AT + '</td>'
           
            fila += '<td>'

            fila += '<button  type="button" onclick="editarEmprendimiento(' + c.ID + ')" class="btn btn-success btn-sm   waves-effect "><i class="fas fa-pencil-alt"></i></button>'

            fila += '<button  type="button" onclick="eliminarEmprendimiento(' + c.ID + ')" class="btn btn-danger btn-sm  waves-effect "><i class="fe-trash-2"></i></button>' 

            fila += '<button  type="button" onclick="verDetalleEmprendimiento(' + c.ID + ')" class="btn btn-primary btn-sm waves-effect "><i class=" dripicons-preview"></i></button>'
            fila += '</td>'
        fila += '</tr>'

         
        })

        console.log(fila);

        $("#body_tabla_emprendimientos").append(fila);
    
     })
 
}























$("body").on("click", "#crear_emprendimiento", function(e) {

    let emprendimiento =$("#emprendimiento").val();
    let cliente =$("#cliente").val();
    let whatsapp =$("#whatsapp").val();
   

    console.log("el emprendimiento es"+emprendimiento);
    if(emprendimiento== ""){
        alert("Llene los campos");
    }else{

        console.log("el whatsapp es"+whatsapp);
        $.ajax({
            url: 'crear_emprendimiento',
            type: 'POST',
            dataType: 'json',
            data: { "dato_emprendimiento":emprendimiento, "dato_cliente":cliente, "dato_whatsapp":whatsapp }
        }).then(function(respuesta) {
            if(respuesta == true){
                alert("Se ha creado con éxito");
                $('#modal_crear_emprendimiento').modal('hide');
            }else{
                alert("Ups, Ha ocurrido un error");
            }
        });

    }






});
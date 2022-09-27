$(document).ready(function() {

    rellenar_clientes();
    rellenar_selector_emprendimientos();
    formatear_rut();
    
    

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
        $("#body_tabla_clientes").empty();
        let fila = "";

        $.each(resultado, function (i, c) {
            
                fila += '<tr>'
                fila += '<th scope="row">' + c.RUT + '</th>'
                fila += '<td>' + c.NOMBRES + '</td>'
                fila += '<td>' + c.APELLIDOS + '</td>'
                fila += '<td>' + c.TELEFONO + '</td>'
                fila += '<td>' + c.CORREO + '</td>'
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

    
function rellenar_selector_emprendimientos() {
    console.log("SE EJECUTO RELLENAR_CLIENTES");

    $.ajax({
        url: 'listar_clientes',
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

function formatear_rut() {

    $("#rut").rut({
        useThousandsSeparator: true,
        validateOn: 'blur',
        formatOn: 'keyup'
    }).on('rutInvalido', function(e) {
        if ($.trim($(this).val()).length > 0) {
            toastr.error("El rut " + $(this).val() + " es inválido");
        }
        $(this).val("");
    }).on('rutValido', function(e) {
        
    });
}





$("body").on("click", "#crear_cliente", function(e) {

    let rut =$("#rut").val();
    let nombre =$("#nombre").val();
    let apellidos =$("#apellidos")
    let telefono =$("#telefono").val();
    let correo =$("#correo").val();
    

    console.log("el nombre es: "+nombre);
    if(nombre == ""){
        alert("Llene los campos");
    }else{

        $.ajax({
            url: 'crear_cliente',
            type: 'POST',
            dataType: 'json',
            data: { "dato_nombre":nombre, "dato_rut":rut, "dato_telefono":telefono, "dato_correo":correo, "dato_apellidos":apellidos }
        }).then(function(respuesta) {
            if(respuesta == true){
                alert("Se ha creado con éxito");
                $('#modal_crear_cliente').modal('hide');
                rellenar_clientes();
            }else{
                alert("Ups, Ha ocurrido un error");
            }
        });

    }






});


function operaciones(){

    $("#cargarTabla").click(function(){
        $("#contenido").load("php/repPacientes.php");
    })

    $("#cargarTabla").click(function(){
        $.get("php/repPacientes.php")
        .done(function( resultado ) {
            console.log("Data Loaded: " + resultado );
        })
    });
    
}
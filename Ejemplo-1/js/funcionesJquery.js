
function operaciones(){

    $("#cargarTabla").click(function(){
        $.get("php/listadoComunaJson.php")
        .done(function( resultado ) {
            console.log("Data Loaded: " + resultado );
        })
    });

}
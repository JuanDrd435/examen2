
function operaciones(){
  
    $("#cargarRP").click(function(){
        $("#contenido").load("html/regPacientes.html");
    })

    $("#cargarP2").click(function(){
        $("#contenido").load("html/historiaPacientes.html");
    })

    $("#cargarP3").click(function(){
        $.get("php/listadoComunaJson.php")
        .done(function( resultado ) {
            console.log("Data Loaded: " + resultado );
        })
    });

}
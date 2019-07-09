window.addEventListener("load", function() {
    
    
    setInterval(traerPelisNuevas, 20000)
})

function traerPelisNuevas() {
    fetch("http://localhost:8000/api/movies")
    .then(function(respuesta) {
        return respuesta.json()
        
    })
    .then(function(informacion) {
        var cantidadPelisOriginal = document.querySelectorAll("li.movie").length;

        
        if (informacion.length > cantidadPelisOriginal) {
            document.querySelector("h2").style.display = "block"

            document.querySelector("h2").onclick = function() {
                var cantidadNuevas = informacion.length - cantidadPelisOriginal;

                for (var i = 0; i < cantidadNuevas; i++) {
                    var peliNueva = informacion[cantidadPelisOriginal + i]

                    document.querySelector("ul.listadoPeliculas").innerHTML = "<li>" +  peliNueva.title + "</li>" + document.querySelector("ul.listadoPeliculas").innerHTML
                }
            }
        }
        
    })
    .catch(function(e) {
    })
}
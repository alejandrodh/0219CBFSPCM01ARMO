window.addEventListener("load", function() {
    document.querySelector("form").onsubmit = function(evento) {
        evento.preventDefault()

        var buscador = document.querySelector(".buscar").value  

        buscarGifs(buscador)
    }
})

function buscarGifs(buscador) {
    fetch("https://api.giphy.com/v1/gifs/search?api_key=lp7wQ6914aPRmDI6HePRPpQeZXyxLFkU&q=" + buscador + "&limit=25&offset=0&rating=G&lang=en")
    .then(function(respuesta) {
        return respuesta.json()
        
    })
    .then(function(informacion) {
        informacion = informacion.data
        document.querySelector(".resultados").innerHTML = ""
        for (var i = 0; i < informacion.length; i++) {
            console.log(informacion[i])
            document.querySelector(".resultados").innerHTML += "<li><h1>" + informacion[i].title + "</h1><img src=" + informacion[i].images.original.url + "></li>"
        }
        
    })
    .catch(function(e) {
        document.querySelector("h1").innerText = "Error. Intente luego nuevamente"
    })
}
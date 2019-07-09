window.addEventListener("load", function() {

    traerGifRandom()

    document.querySelector("button").onclick = traerGifRandom
})


function traerGifRandom() {
    fetch("https://api.giphy.com/v1/gifs/random?api_key=lp7wQ6914aPRmDI6HePRPpQeZXyxLFkU&tag=&rating=G")
    .then(function(respuesta) {
        return respuesta.json()
        
    })
    .then(function(informacion) {
        var id = informacion.data.id 
        var title = informacion.data.title 
        var imagen = informacion.data.images.original.url
        
        document.querySelector(".cargando").style.display = "none"

        document.querySelector("img").src = imagen
        document.querySelector("h1").innerText = title
        
    })
    .catch(function(e) {
        document.querySelector("h1").innerText = "Error. Intente luego nuevamente"
    })
}
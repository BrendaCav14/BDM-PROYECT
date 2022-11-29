MostrarListas();

function MostrarListas(){
    fetch("mostrar-listas.php",{
        method: "POST"
    }).then(response => response.text()).then(response => {

        lista.innerHTML = response;
       
    })

}



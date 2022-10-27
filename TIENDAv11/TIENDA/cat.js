MostrarCategorias();

function MostrarCategorias(){
    fetch("mostrar-cat.php",{
        method: "POST"
    }).then(response => response.text()).then(response => {

        resultado.innerHTML = response;
       
    })

}


function Eliminar(id){
    Swal.fire({
        title: '¿Esta seguro que quiere eliminar?',
        text: "No podra revertirlo",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, eliminalo!',
        cancelButtonText:  'NO'

    })
    .then((result) =>{

        if(result.isConfirmed){
            fetch("cat-eliminar.php", {
                 method: "POST",
                 body: id
            })

            .then(response => response.text()).then(response => {
                if(response == "ok"){
                    
                console.log(response);
                MostrarCategorias();

                Swal.fire(
                    'Eliminado!',
                    'La categoria a sido eliminada.',
                    'success'
                )
            }
            
        })
            
        }
    })

}


function Editar(id){
    fetch("cat-editar.php", {
        method: "POST",
        body: id
   }).then(response => response.json()).then(response => {
    console.log(response);
    // nombrecat.value = response.nombrecat;
    // descripcion.value = response.descripcion;
    // vendedor.value = response.vendedor;
    
       
    })
}
MostrarCategorias();

function MostrarCategorias(){
    fetch("mostrar-cat.php",{
        method: "POST"
    }).then(response => response.text()).then(response => {

        resultado.innerHTML = response;
       
    })

}


function EliminarCat(cat){
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
                 body: cat
            })

            .then(response => response.text()).then(response => {
                if(response == "ok"){
                    
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

// function Editar(id){
//     nombre=document.getElementById("nombrecat").value;
//     desc=document.getElementById("descripcion").value;
//     desc2=document.getElementById("desc").value;
//     ven=document.getElementById("vendedor").value;


//     fetch("cat-editar.php", {
//         method: "POST",
//         body: id
//    }).then(response => response.json()).then(response => {
//     console.log(response);
//     nombre = response.nombre_Cat;
//     desc2 = response.descripcion;
//     ven = response.FK_vendedor;
   
//     })
// }

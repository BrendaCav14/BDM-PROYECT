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



    // var nombre_Cat;
    // var descripcion;
    // var FK_vendedor;

// function Editar(id,descripcion,vendedor){
   

//     fetch("cat-editar.php", {
//         method: "POST",
//         body: id
//    }).then(response => response.json()).then(response => {
//     console.log(response);
//     document.getElementById("nombrecat").value = response.nombre_Cat;
//     document.getElementById("descripcion").value = descripcion;
//     document.getElementById("desc").value = descripcion;
//     document.getElementById("vendedor").value = vendedor;
   
//     })
// }


function EditarCat(id){
   

    fetch("cat-editar.php", {
        method: "POST",
        body: id
   }).then(response => response.json()).then(response => {
    console.log(response);
    document.getElementById("nombrecat").value = response.nombre_Cat;
    document.getElementById("descripcion").value = response.descripcion;
    document.getElementById("vendedor").value = response.FK_vendedor;
   
    })
}

// function Editar2(id,descripcion){
   

// //     fetch("cat-editar.php", {
// //         method: "POST",
// //         body: id
// //    }).then(response => response.text()).then(response => {
// //     console.log(response);
//     document.getElementById('nombrecat').value = id;
//     document.getElementById('descripcion').value = descripcion;
//     // document.getElementById('desc').value = descripcion;
//     // document.getElementById("vendedor").value = vendedor;
   
//     // })
// }
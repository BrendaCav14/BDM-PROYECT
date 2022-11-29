MostrarAutorizar();

function MostrarAutorizar(){
    fetch("mostrar-Autoproducto.php",{
        method: "POST"
    }).then(response => response.text()).then(response => {

        prod.innerHTML = response;
       
    })

}


function Eliminar(id){
    Swal.fire({
        title: '¿Quiere Autorizar Producto?',
        text: "No podra revertirlo",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si',
        cancelButtonText:  'No'

    })
    .then((result) =>{

        if(result.isConfirmed){
            fetch("Auto-eliminar.php", {
                 method: "POST",
                 body: id
            })

            .then(response => response.text()).then(response => {
              
                console.log(response);
                MostrarAutorizar();

                Swal.fire(
                    'Producto Autorizado!',
                    'Producto a sido agregado con exito.',
                    'success'
                )
     
            
        })
            
        }
    })

}
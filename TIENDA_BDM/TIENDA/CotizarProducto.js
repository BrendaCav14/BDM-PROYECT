MostrarCotizaciones();

function MostrarCotizaciones(){
    fetch("mostrar-Cotizacion.php",{
        method: "POST"
    }).then(response => response.text()).then(response => {

        prodCotizar.innerHTML = response;
       
    })

}


function Eliminar(id){
    Swal.fire({
        title: '¿Quiere Cotizar este Producto?',
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
                MostrarCotizaciones();

                Swal.fire(
                    'Producto Cotizado!',
                    'El comprador ya puede visualizar el precio.',
                    'success'
                )
     
            
        })
            
        }
    })

}
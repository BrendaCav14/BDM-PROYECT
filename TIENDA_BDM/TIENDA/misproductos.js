MostrarProductos();

function MostrarProductos(){
    fetch("mostrar-producto.php",{
        method: "POST"
    }).then(response => response.text()).then(response => {

        prod.innerHTML = response;
       
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
            fetch("prod-eliminar.php", {
                 method: "POST",
                 body: id
            })
  
            .then(response => response.text()).then(response => {
                if(response == "ok"){
                    
                console.log(response);
                MostrarProductos();
  
                Swal.fire(
                    'Eliminado!',
                    'El producto a sido eliminado.',
                    'success'
                )
            }
            
        })
            
        }
    })
  
  }
  
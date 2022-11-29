
MostrarPerfil();

function MostrarPerfil(){
    fetch("mostrar-perfil.php",{
        method: "POST"
    }).then(response => response.text()).then(response => {

        perfil.innerHTML = response;
       
    })

}

function readURL(input) {
    var url = input.value;
    var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
    if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg")) {
        var reader = new FileReader();
    
        reader.onload = function (e) {
            $('#avatar').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
    else{
         $('#avatar').attr('src', 'IMG/Imagen1.jpg');
      }
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
                fetch("eliminar.php", {
                     method: "POST",
                     body: id
                })
    
                .then(response => response.text()).then(response => {
                    if(response == "ok"){
                        
                    console.log(response);
                    
                    Swal.fire({
                        title: 'Usuario Eliminado !',
                        text: 'Salir',
                        showDenyButton: true,
                        confirmButtonText: 'Aceptar',
                      }).then((result) => {
                        
                        if (result.isConfirmed) {
                            location.href='logout.php'
                        } 
                      
                      })
                    
                }
               
                
            })
                
            }
        })
    
    }
    
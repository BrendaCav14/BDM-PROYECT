
MostrarPerfil();

function MostrarPerfil(){
    fetch("mostrar-perfil.php",{
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
            fetch("eliminar.php", {
                 method: "POST",
                 body: id
            })

            .then(response => response.text()).then(response => {
                if(response == "ok"){
                    
                console.log(response);
                MostrarPerfil();

                Swal.fire(
                    'Eliminado!',
                    'El usuario se a eliminado.',
                    'success'
                )
            }
            
        })
            
        }
    })

}


function Editar(id,nombre,nombre2,apat,amat,email){
    fetch("editar.php", {
        method: "POST",
        body: id
   }).then(response => response.json()).then(response => {
    console.log(response);
    document.getElementById("user_input").value = id;
    document.getElementById("name_input").value = nombre;
    document.getElementById("name2_input").value = nombre2;
    document.getElementById("apat_input").value = apat;
    document.getElementById("amat_input").value = amat;
    document.getElementById("email_input").value = email;
    // document.getElementById("contra").value = contra;
    // document.getElementById("cuenta").value = cuenta;
    // document.getElementById("rol").value = rol;
    // user_input.value = response.user_input;
    
       
    })
}

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



let Usuario = document.getElementById('usuario');
let Nombre = document.getElementById('nombre');
let Nombre2 = document.getElementById('nombre2');
let AP = document.getElementById('apat');
let AM = document.getElementById('amat');
let Email = document.getElementById('email');
let Contra = document.getElementById('contra');
// let Cuenta = document.getElementById('cuenta');
// let Rol = document.getElementById('roles');

function Editar(id){
    fetch("editar.php", {
        method: "POST",
        body: id
   }).then(response => response.text()).then(response => {
    console.log(response);
    idp.value = response.id;
    Usuario.value = response.Usuario;
    Nombre.value = response.Nombre;
    Nombre2.value = response.Nombre2;
    AP.value = response.AP;
    AM.value = response.AM;
    Email.value = response.Email;
    Contra.value = response.Contra;
    // Cuenta.value = response.Cuenta;
    // Rol.value = response.Rol;
    // fn.value = response.fn;
    // fi.value = response.fi;

       
    })
}
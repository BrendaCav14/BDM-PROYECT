
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO DE USUARIOS</title>

    <link rel="stylesheet" href="Cuerpo.css">
    <link rel="stylesheet" href="RegUsuario.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">


    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css"> 
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>


<script>
 function comprobarUsuario() {

jQuery.ajax({
url: "ajax-usuario.php",
data:'usuario='+$("#usuario").val(),
type: "POST",
success:function(data){
  $("#estadousuario").html(data);
},
error:function (){}
});
}

function comprobarEmail() {

jQuery.ajax({
url: "ajax-usuario.php",
data:'email='+$("#email").val(),
type: "POST",
success:function(data){
  $("#estadoemail").html(data);
},
error:function (){}
});
}
</script>

</head>
<body>

<main>
  <form class="nombreShop" style="height:100px; text-align:center; padding-top:20px; margin-left:250px; margin-top: 5px;">

   <h1 class="shopReg" style="font-family: Sofia, sans-serif; margin-top:4px;">Bienvenid@ a Shopping ♥</h1>
   <br></br>
   
   </form>

   <form method="post"  enctype="multipart/form-data" class="formularioReg" id="formulario" name="form1" style=" height:1000px; width:800px; margin-left:350px;">
<br>
<h5 class="regnosotros" style="font-family: 'Acme', sans-serif; font-size:30px; margin-top:-10px;"> ~¡ REGISTRATE CON NOSOTROS !~</h5>

<div style="margin-left:-250px; margin-top:30px;">
<div class="form_grupo" id="grupo_nombre">
<label for="nombre" class="form_label"  style=" font-size: 18px; font-weight: bolder; margin-left:-250px;">Nombre:</label>
   <div class="form_grupo-input">
<input type="text" id="nombre" class="form-control" style="  font-size: 18px; width:250px; margin-left:350px;" name="nombre" placeholder="Nombre" autocomplete="off">
  </div>
</div>

<div class="form_grupo" id="grupo_apat" style="margin-top:20px;">
<label for="apat" class="form_label"  style=" font-size: 18px; font-weight: bolder;  margin-left:-200px;">Apellido Paterno:</label>
<div class="form_grupo-input">
<input type="text" id="apat" class="form-control" style="  font-size: 18px; width:250px; margin-left:350px;" name="apat" placeholder="Apellido Paterno" autocomplete="off">
     </div>
</div>
</div>

<div style="margin-left:250px; margin-top:-160px;">
<div class="form_grupo" id="grupo_nombre2">
<label for="nombre2" class="form_label"  style=" font-size: 18px; font-weight: bolder;">Segundo Nombre:</label>
<div class="form_grupo-input">
<input type="text" id="nombre2" class="form-control" style="  font-size: 18px; width:250px; margin-left:200px;" name="nombre2" placeholder="Segundo Nombre" autocomplete="off">
  </div>
</div>

<div class="form_grupo" id="grupo_Amat" style="margin-top:20px;">
<label for="amat" class="form_label"  style=" font-size: 18px; font-weight: bolder;">Apellido Materno:</label>
<div class="form_grupo-input">
<input type="text" id="amat" class="form-control" style="  font-size: 18px; width:250px; margin-left:200px;" name="amat" placeholder="Apellido Materno" autocomplete="off">
  </div>
</div>
</div>
<br>

<div class="form_grupo" id="grupo_email">
<label for="email" class="form_label" style="font-size: 18px; font-weight: bolder; margin-left:-300px;">Email:</label>
<input type="text" id="email" class="form-control" style=" font-size: 18px; width:320px; margin-left:300px; margin-top:-40px;" name="email" placeholder="example@outlook.com" autocomplete="off" onkeydown="validation()" onkeyup="comprobarEmail()">
<span id="text"></span>
<br>
<span id="estadoemail"></span>

</div>
<br>
    <div class="formulario__grupo" id="grupo__usuario">
      <label for="usuario" class="formulario__label" style="font-size: 18px; font-weight: bolder; margin-left:-600px;">Usuario:</label>
      <input type="text" id="usuario" class="form-control" style=" font-size: 18px; width:200px; margin-left:150px; margin-top:-40px;" name="usuario" placeholder="user123" autocomplete="off" style="width:150px;"  onkeyup="comprobarUsuario()">
      <span style="margin-left:-280px;" id="estadousuario"></span> 
      <br><br>

      <div class="formulario__grupo" id="grupo__contra">
      <label for="usuario" class="formulario__label" style="font-size: 18px; font-weight: bolder; margin-left:-630px; margin-top:-20px;">Contraseña:</label>
<input type="password" id="PassEntry" class="form-control" style=" font-size: 18px; width:200px; margin-left:150px; margin-top:-45px;" name="contra" placeholder="********">
<br>
        <span id="StrengthDisp" class="badge displayBadge" style="width:180px; margin-left:150px;"></span>
<br>
</div>
<div style="margin-left:500px; margin-top:-150px;">
<label for="combo" class="combo" style="font-size: 18px; font-weight: bolder;">Rol:</label>
<select name="roles" class="form-select" id="roles" style="width:200px; font-size: 18px;" >
<option id="rol0" value="rol0" selected>Elija una opcion...</option>
<option id="Administrador" value="Administrador">Administrador</option>
<option id="Vendedor" value="Vendedor" >Vendedor</option>
<option id="Comprador" value="Comprador">Comprador</option>
</select>

<br>
<label for="combo" class="combo" style="font-size: 18px; font-weight: bolder; margin-top:30px; margin-left:-30px;">Cuenta:</label>
<select name="cuenta" class="cuenta" id="cuenta" style=" font-size:18px; width:200px;" >
<option id="cuenta0" value="cuenta0" selected>Elija una opcion...</option>
<option id="Publico" value="Publico" >Publico</option>
<option id="Privado" value="Privado" >Privado</option>
</select>
</div>
</div>

<br></br>

<label for="fn" class="fn"  style="margin-top:-30px; font-size: 18px; font-weight: bolder; margin-left:-10px;">Fecha de Nacimiento:</label>

<input type="date" id="fn" name="fn" value="2000-01-01" min="1960-01-01" max="2000-01-01">

<!-- <label for="fn" class="fi" style="margin-top:-30px; font-size: 18px; font-weight: bolder; margin-left:30px;">Fecha de Ingreso:</label>

<input type="date" id="fi" name="fi" value="2022-10-21" min="1990-01-01" max="2024-01-01"> -->
<br></br>
<div style="margin-left=-300px; text-align:center;">
<label for="genero" class="genero" style="font-size: 18px; font-weight: bolder;">Genero:</label>
  
<input type="radio" id="HombreX" name="genero" value="Masculino" style="margin-left:10px; font-size: 20px;">
<label for="HombreX" style="font-size: 18px;">Masculino</label>

<input type="radio" id="MujerX" name="genero" value="Femenino" style="margin-left:20px; font-size: 20px;">
<label for="MujerX" style="font-size: 18px;">Femenino</label>
   
</div>

<br>

<div style="margin-left:250px;">
                  <h6 style="margin-left:-800px; margin-top:100px;">Ingrese una Foto</h6>
                  <input type="file" class="form-control-file" style="margin-left:-200px; " name="foto" id="upload" accept=".png, .jpg, .jpeg" onchange="readURL(this);">
                  <img src="IMG/Imagen1.jpg" name="avatar" id="avatar" style="margin-left:150px; margin-top:-220px; background-color: black; border: 1px solid transparent; padding:3px; border-image:10 stretch;" width="100px" height="100px" alt="foto" class="usuario-foto" >
                
</div>
                    <br>

<input type="button" id="Registro" name="Registro" class="btn btn-primary btn-block" style=" margin-left:250px; width:300px;"  value="Registrarse"></input>
<a type="button" href="Login.php" class="btn btn-danger btn-block" style=" margin-left:600px; margin-top:-40px; width:100px;">Cancelar</a>

</form>


</main>
<script>
Registro.addEventListener("click", () =>{
    
    var nom = document.getElementById("nombre").value; 
    var nom2 = document.getElementById("nombre2").value; 
    var apat = document.getElementById("apat").value; 
    var amat = document.getElementById("amat").value; 
    var correo = document.getElementById("email").value; 
    var user = document.getElementById("usuario").value; 
    var pwd = document.getElementById("PassEntry").value; 
    var rol = document.getElementById("rol0").value; 
    var cuenta = document.getElementById("cuenta0").value; 

    var cont = 8;
    var cont2 = 3;

    if((correo == "") || (nom == "") || (nom2 == "") || (apat == "") || (amat == "") || (user == "") || (pwd == "")){

        Swal.fire({
            icon: 'error',
            title: 'Campos vacios!',
            text: 'Porfavor llena todos los campos',
            timer: 5000 // es ms (mili-segundos)
          })
          return false;


    }

    if(pwd.length < cont){
        Swal.fire({
            icon: 'error',
            title: 'Contraseña Invalida',
            text: 'Ingresa una contraseña de minimo 8 caracteres',
            timer: 5000 // es ms (mili-segundos)
    
          })
          return false;

 
    }

    if(user.length < cont2){
        Swal.fire({
            icon: 'error',
            title: 'Usuario Invalido',
            text: 'Ingresa un usuario de minimo 3 caracteres',
            timer: 5000 // es ms (mili-segundos)
    
          })
          return false;

 
    }
    
    Swal.fire({
    title: '¿Esta seguro que quiere Agregar?',
    text: "No podra revertirlo",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Agregar',
    cancelButtonText:  'Cancelar'
  
    })


.then((result) =>{

    if(result.isConfirmed){
        fetch("registrar.php", {
             method: "POST",
             body: new FormData(formulario)
        })

        .then(result => result.text()).then(result => {

        

            if(result == "ok"){
    

  Swal.fire({
  title: 'Usuario Agregado Exitosamente!',
  text: "Regresar al Inicio de Sesion",
  showDenyButton: true,
  confirmButtonText: 'Aceptar',
}).then((result) => {
  
  if (result.isConfirmed) {
    location.href="Login.php"
  } 

})
            
            
            return true;
            
        }

        else{
            Swal.fire({
                icon: 'error',
                title: 'ERROR',
                text: 'No se pudo registrar correctamente,intente de nuevo...'
              })
              return false;
        }
 
        
    })

  }
})
})



</script>



<script src="reg.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>
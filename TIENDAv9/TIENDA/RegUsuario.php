
<?php 

// include './BACKEND/Connection.php' ;

// if(isset($_POST['submit'])){
//   $nombre = $_POST['nombre'];
//   $nombre2 = $_POST['nombre2'];
//   $apat = $_POST['apat'];
//   $amat = $_POST['amat'];
//   $email = $_POST['email'];
//   $usuario = $_POST['usuario'];
//   $contra = $_POST['contra'];

//   if(empty($usuario) || empty($contra) || empty($email) || empty($nombre) || empty($nombre2) || empty($apat) || empty($amat))
// {
  
//   echo "Todos los campos deben ser llenados";
// }

// if(! filter_var($email, FILTER_VALIDATE_EMAIL))
// {
//   echo "Correo Electronico Invalido";

// }
  
//   $sql = "insert into usuario(nombre,nombre2,ApPat,ApMat,email,usuario,contraseña) values('$nombre','$nombre2','$apat','$amat','$email','$usuario','$contra')";
  
//   $result = mysqli_query($con,$sql);
  
//   if($result)
//   {
//     echo "Usuario agregado correctamente!";
//   }
  
//   else{
//     die(mysqli_error($con));
//   }
  
//   }

?>
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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
<body>

<main>
  <form class="nombreShop" style="height:100px; text-align:center; padding-top:20px;">

   <h1 class="shopReg" style="font-family: Sofia, sans-serif; margin-top:4px;">Bienvenid@ a Shopping ♥</h1>
   <br></br>
   
   </form>

   <form action="" method="post" enctype="multipart/form-data" class="formularioReg" id="formulario">
<br>
<h5 class="regnosotros" style="font-family: 'Acme', sans-serif;"> ~¡ REGISTRATE CON NOSOTROS !~</h5>

<div style="margin-left:-250px; margin-top:30px;">
<div class="form_grupo" id="grupo_nombre">
<label for="nombre" class="form_label">Nombre:</label>
   <div class="form_grupo-input">
<input type="text" id="nombre" class="form_input" name="nombre" placeholder="Nombre">
<i class="form_valida-estado  fas fa-times-circle"></i>
  </div>
</div>

<div class="form_grupo" id="grupo_apat">
<label for="apat" class="form_label">Apellido Paterno:</label>
<div class="form_grupo-input">
<input type="text" id="apat" class="form_input" name="apat" placeholder="Apellido Paterno">
     </div>
</div>
</div>

<div style="margin-left:300px; margin-top:-125px;">
<div class="form_grupo" id="grupo_nombre2">
<label for="nombre2" class="form_label">Segundo Nombre:</label>
<div class="form_grupo-input">
<input type="text" id="nombre2" class="form_input" name="nombre2" placeholder="Segundo Nombre">
  </div>
</div>

<div class="form_grupo" id="grupo_Amat">
<label for="amat" class="form_label">Apellido Materno:</label>
<div class="form_grupo-input">
<input type="text" id="amat" class="form_input" name="amat" placeholder="Apellido Materno">
  </div>
</div>
</div>
<br>
<br>
<div class="form_grupo" id="grupo_email">
<label for="email" class="form_label">Email:</label>
<input type="text" id="email" class="form_input" name="email" placeholder="example@outlook.com">
</div>
<br>
<br>
    <div class="formulario__grupo" id="grupo__usuario">
      <label for="usuario" class="formulario__label">Usuario:</label>
      <input type="text" id="usuario" class="form_input" name="usuario" placeholder="brenda123" style="width:150px;">


<label for="contra" class="form_label">Contraseña:</label>
<input type="password" id="contra" class="contra-input" name="contra" placeholder="********">
</div>
<br>
<br>

<label for="combo" class="combo">Rol:</label>
<select name="roles" class="roles" id="roles" >
<option value="Administrador" selected>Administrador</option>
<option value="Vendedor" >Vendedor</option>
<option value="Comprador">Comprador</option>
</select>

<label for="fn" class="fn">Fecha de Nacimiento:</label>
<input type="date" id="FechaN" name="fn" value="2022-08-31" min="1990-01-01" max="2022-12-31">
<br></br>
<div style="margin-left=-300px; text-align:center;">
<label for="genero" class="genero">Genero:</label>
  
<input type="radio" id="HombreX" name="HombreX" value="Masculino">
<label for="HombreX">Masculino</label>

<input type="radio" id="MujerX" name="MujerX" value="Femenino">
<label for="MujerX">Femenino</label>
   
</div>
<br>
<label for="combo" class="combo">Cuenta:</label>
<select name="cuenta" class="cuenta" id="cuenta" >
<option value="Publico" selected>Publico</option>
<option value="Privado" >Privado</option>
</select>

<label for="fn" class="fn">Fecha de Ingreso:</label>
<input type="date" id="start" name="fi" value="2022-08-31" min="1990-01-01" max="2024-01-01">
<br></br>

<div style="margin-left:250px;">
                  <h6 style="margin-left:-600px; margin-top:10px;">Ingrese una Foto</h6>
                  <input type="file" class="form-control-file" style="margin-left:-200px; " name="foto" id="upload">
                  <img src="IMG/Imagen1.jpg" name="foto" id="usuario-foto" style="margin-left:150px; margin-top:-80px;" width="150px" height="150px" alt="usuario-foto" class="usuario-foto">
                  
</div>
                  <!-- 
                  <img src="IMG/Imagen1.jpg" name="adjunto" id="usuario-foto" style="margin-left:5px; margin-top:-60px;" width="150px" height="150px" alt="usuario-foto" class="usuario-foto">
                  
                  </div> -->
                 
                  <!-- <div><input type="hidden" name="crud_req" value="Registrarse"></div> -->
                    <br>

<input type="button" id="registrar" name="submit" class="btn btn-primary btn-block" style=" margin-left:150px; margin-top:-20px; width:300px;" value="Registrarse"></input>

</form>


</main>

<script src="registro.js"></script>


</body>
</html>
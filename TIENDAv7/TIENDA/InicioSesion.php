<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo  "<title>INICIO DE SESION</title>"?>

    <link rel="stylesheet" href="InicioSesion.css">
    <link rel="stylesheet" href="Cuerpo.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>

<body>
<form class="formularioReg">

  <h1 class="regnosotros" style="font-family: Sofia, sans-serif;margin-left:30px;"> Shopping ♥</h1>
    <br>
  <h5 class="regnosotros" style="font-family: 'Acme', sans-serif;"> INICIO DE SESION</h5>
 
  <br>
  <label for="email" class="email">Email:</label>
  <input type="text" class="email-input" id="email" name="email" placeholder="example@outlook.com"><br></br>
  <label for="usuario" class="usuario">Nombre de Usuario:</label>
  <input type="text" class="usuario-input" id="usuario" name="usuario" placeholder="Nombre de Usuario"><br></br>
  <label for="contra" clas="contra">Contraseña:</label>
  <input type="password" clas="contra-input" id="contra" name="contra" placeholder="Contraseña"><br></br>


<h6 class="regnosotros" style="font-family: 'Acme', sans-serif; margin-top:-10px;"> Iniciar sesion con : </h6>
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-instagram"></a>
<br>

  <a type="submit" href="PaginaInicio.php" class="btn btn-primary btnAction" style="margin-top:10px;width:150px;">Iniciar Sesion</a><br>
     
      <form name="form1" action=""  method="post">
  <a type="submit" href="RegUsuario.php" class="btn btn-link" style="text-decoration: underline;font-size:15px;">¿no tienes cuenta?</a>
     </form>

</form>

<?php

if(isset($_POST["registrarse"]))
{
  header('Location:RegUsuario.php');
}

?>

<script src="InicioSesion.js"></script>

</body>
</html>
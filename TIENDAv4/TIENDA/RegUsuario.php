<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo  "<title>REGISTRO DE USUARIOS</title>";?>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="RegUsuario.css">
    <script src="RegUsuario.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
<body>
  <form class="nombreShop">

   <h1 class="shopReg" style="font-family: Sofia, sans-serif;">Bienvenid@ a Shopping ♥</h1>
   <br></br>
   
   </form>
<form class="formularioReg">
  <br>
  <h5 class="regnosotros" style="font-family: 'Acme', sans-serif;"> ~¡ REGISTRATE CON NOSOTROS !~</h5>
  <label for="nombre" class="nom">Nombre:</label>
  <input type="text" id="nombre" name="nombre" placeholder="Nombre"><br></br>
  <label for="nombre2" class="nom2">Segundo Nombre:</label>
  <input type="text" id="nombre2" name="nombre2" placeholder="Segundo Nombre"><br></br>
  <label for="apat" class="apat">Apellido Paterno:</label>
  <input type="text" id="apat" name="apat" placeholder="Apellido Paterno"><br></br>
  <label for="amat" class="amat">Apellido Materno:</label>
  <input type="text" id="amat" name="amat" placeholder="Apellido Materno"><br></br>
 
  <label for="email" class="email">Email:</label>
  <input type="text" id="email" name="email" placeholder="example@outlook.com"><br></br>
  <label for="usuario" class="usuario">Nombre de Usuario:</label>
  <input type="text" id="usuario" name="usuario" placeholder="Nombre de Usuario"><br></br>
  <label for="contra" clas="contra">Contraseña:</label>
  <input type="text" id="contra" name="contra" placeholder="Contraseña"><br></br>

  <label for="combo" class="combo">Rol:</label>
  <select name="select" class="roles">
  <option value="value1" selected>Administrador</option>
  <option value="value2" >Vendedor</option>
  <option value="value3">Comprador</option>
  </select>

  <label for="fn" class="fn">Fecha de Nacimiento:</label>
  <input type="date" id="start" name="trip-start" value="2022-08-31" min="1990-01-01" max="2022-12-31">
  <br></br>
  <label for="fn" class="fn">Sexo:</label>
<input type="radio" id="html" name="fav_language" value="HTML">
<label for="html">Hombre</label>
<input type="radio" id="css" name="fav_language" value="CSS">
<label for="css">Mujer</label><br>

<label for="fn" class="fn">Fecha de Ingreso:</label>
  <input type="date" id="start" name="trip-start" value="2022-08-31" min="1990-01-01" max="2023-12-31">
  <br></br>

  <label for="imagen" class="imagen" style="margin-left:-200px;">Ingrese una imagen:   </label>

  <img src="https://static.vecteezy.com/system/resources/thumbnails/001/993/889/small/beautiful-latin-woman-avatar-character-icon-free-vector.jpg"  alt="avatar" style="width:200px;height:200px;background-color: black;border-color:black;border:5px;"><br></br>

  <button type="button" style="margin-left:80px;">Seleccionar archivo</button>
  <input type="text" id="country" style="background-color:#c5bbbb;width:280px" readonly>
  <br></br>
  <button type="button" onclick="alerta()" class="btn btn-primary" style="margin-top:50px;width:150px;">Registrarse</button>
</form>

</body>
</html>
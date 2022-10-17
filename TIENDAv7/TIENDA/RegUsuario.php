<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo  "<title>REGISTRO DE USUARIOS</title>"?>

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
<form class="formularioReg" id="formulario" onsubmit="event.preventDefault()">

  <br>
  <h5 class="regnosotros" style="font-family: 'Acme', sans-serif;"> ~¡ REGISTRATE CON NOSOTROS !~</h5>
  
  <div style="margin-left:-250px; margin-top:30px;">
  <div class="form_grupo" id="grupo_nombre">
  <label for="nombre" class="form_label">Nombre:</label>
     <div class="form_grupo-input">
  <input type="text" id="nombre" class="form_input" name="nombre" placeholder="Brenda" onblur="validate(1)">
  <i class="form_valida-estado  fas fa-times-circle"></i>
    </div>
</div>

  <div class="form_grupo" id="grupo_nombre2">
  <label for="nombre2" class="form_label">Apellido Paterno:</label>
  <div class="form_grupo-input">
  <input type="text" id="nombre2" class="form_input" name="nombre2" placeholder="Stefania" onblur="validate(2)">
       </div>
  </div>
</div>

  <div style="margin-left:300px; margin-top:-125px;">
  <div class="form_grupo" id="grupo_Apat">
  <label for="apat" class="form_label">Segundo Nombre:</label>
  <div class="form_grupo-input">
  <input type="text" id="apat" class="form_input" name="apat" placeholder="Cavazos" onblur="validate(3)">
    </div>
  </div>
  
  <div class="form_grupo" id="grupo_Amat">
  <label for="amat" class="form_label">Apellido Materno:</label>
  <div class="form_grupo-input">
  <input type="text" id="amat" class="form_input" name="amat" placeholder="Contreras" onblur="validate(4)">
    </div>
  </div>
</div>
<br>
<br>
  <div class="form_grupo" id="grupo_email">
  <label for="email" class="form_label">Email:</label>
  <input type="text" id="email" class="form_input" name="email" placeholder="example@outlook.com" onblur="validate(5)">
  </div>
  <br>
  <br>
      <div class="formulario__grupo" id="grupo__usuario">
				<label for="usuario" class="formulario__label">Usuario:</label>
					<input type="text" class="usuario-input" name="usuario" id="usuario" placeholder="john123" onblur="validate(6)">
         


  <label for="contra" class="form_label">Contraseña:</label>
  <input type="password" id="contra" class="contra-input" name="contra" placeholder="********" onblur="validate(7)">
</div>
  <br>
  <br>

  <label for="combo" class="combo">Rol:</label>
  <select name="select" class="roles" id="roles" >
  <option value="value1" selected>Administrador</option>
  <option value="value2" >Vendedor</option>
  <option value="value3">Comprador</option>
  </select>

  <label for="fn" class="fn">Fecha de Nacimiento:</label>
  <input type="date" id="FechaN" name="fn" value="2022-08-31" min="1990-01-01" max="2022-12-31">
  <br></br>
  <div style="margin-left=-300px; text-align:center;">
  <label for="fn" class="fn">Genero:</label>
    
<input type="radio" id="H" name="hombreX" value="hombre">
<label for="H">Hombre</label>

<input type="radio" id="M" name="mujerX" value="mujer">
<label for="M">Mujer</label>
     
</div>
<br>

<label for="fn" class="fn">Fecha de Ingreso:</label>
  <input type="date" id="start" name="fi" value="2022-08-31" min="1990-01-01" max="2023-12-31">
  <br></br>

                    <div style="margin-left:250px;">

                      <h6 style="margin-left:-600px; margin-top:50px;">Ingrese una Foto</h6>
                    <input type="file" style="margin-left:-200px; " name="adjunto" id="upload" onchange="readURL(this)" accept=".jpeg,.jpg,.png" multiple >

                    <img src="IMG/Imagen1.jpg" name="adjunto" id="usuario-foto" style="margin-left:5px;" width="150px" height="150px" alt="usuario-foto" class="usuario-foto"><br>
                   
                    <div>

  <a type="button" href="InicioSesion.php" onclick="alerta()" class="btn btn-primary btnAction" style="margin-top:50px;width:150px;">Registrarse</a>
</form>

</main>

<script src="RegUsuario.js"></script>


</body>
</html>
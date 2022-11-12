
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
  <form class="nombreShop" style="height:100px; text-align:center; padding-top:20px;">

   <h1 class="shopReg" style="font-family: Sofia, sans-serif; margin-top:4px;">Bienvenid@ a Shopping ♥</h1>
   <br></br>
   
   </form>

   <form method="post" enctype="multipart/form-data" class="formularioReg" id="formulario" name="form1" style=" width:800px; margin-left:250px;">
<br>
<h5 class="regnosotros" style="font-family: 'Acme', sans-serif; font-size:30px; margin-top:-10px;"> ~¡ REGISTRATE CON NOSOTROS !~</h5>

<div style="margin-left:-250px; margin-top:30px;">
<div class="form_grupo" id="grupo_nombre">
<label for="nombre" class="form_label"  style="font-size: 15px; font-weight: bolder; margin-left:-250px;">Nombre:</label>
   <div class="form_grupo-input">
<input type="text" id="nombre" class="form-control" style="width:250px; margin-left:350px;" name="nombre" placeholder="Nombre" autocomplete="true" required>
  </div>
</div>

<div class="form_grupo" id="grupo_apat" style="margin-top:20px;">
<label for="apat" class="form_label"  style="font-size: 15px; font-weight: bolder;  margin-left:-200px;">Apellido Paterno:</label>
<div class="form_grupo-input">
<input type="text" id="apat" class="form-control" style="width:250px; margin-left:350px;" name="apat" placeholder="Apellido Paterno" autocomplete="true" required>
     </div>
</div>
</div>

<div style="margin-left:250px; margin-top:-160px;">
<div class="form_grupo" id="grupo_nombre2">
<label for="nombre2" class="form_label"  style="font-size: 15px; font-weight: bolder;">Segundo Nombre:</label>
<div class="form_grupo-input">
<input type="text" id="nombre2" class="form-control" style="width:250px; margin-left:200px;" name="nombre2" placeholder="Segundo Nombre" autocomplete="true" required>
  </div>
</div>

<div class="form_grupo" id="grupo_Amat" style="margin-top:20px;">
<label for="amat" class="form_label"  style="font-size: 15px; font-weight: bolder;">Apellido Materno:</label>
<div class="form_grupo-input">
<input type="text" id="amat" class="form-control" style="width:250px; margin-left:200px;" name="amat" placeholder="Apellido Materno" autocomplete="true" required>
  </div>
</div>
</div>
<br>

<div class="form_grupo" id="grupo_email">
<label for="email" class="form_label" style="font-size: 15px; font-weight: bolder; margin-left:-250px;">Email:</label>
<input type="text" id="email" class="form-control" style="width:320px; margin-left:300px; margin-top:-40px;" name="email" placeholder="example@outlook.com" autocomplete="true" onkeydown="validation()" onkeyup="comprobarEmail()" required>
<span id="text"></span>
<br>
<span id="estadoemail"></span>

</div>
<br>
    <div class="formulario__grupo" id="grupo__usuario">
      <label for="usuario" class="formulario__label" style="font-size: 15px; font-weight: bolder; margin-left:-300px;">Usuario:</label>
      <input type="text" id="usuario" class="form-control" style="width:200px; margin-left:300px; margin-top:-40px;" name="usuario" placeholder="user123" autocomplete="true" style="width:150px;"  onkeyup="comprobarUsuario()" required>
      <span id="estadousuario"></span> 
      <br><br>

      <div class="formulario__grupo" id="grupo__contra">
      <label for="usuario" class="formulario__label" style="font-size: 15px; font-weight: bolder; margin-left:-305px; margin-top:-20px;">Contraseña:</label>
<input type="password" id="PassEntry" class="form-control" style="width:200px; margin-left:300px; margin-top:-45px;" name="contra" placeholder="********" required>
<br>
        <span id="StrengthDisp" class="badge displayBadge" style="width:180px; margin-left:250px;"></span>
<br>
</div>
<div style="margin-left:500px; margin-top:-140px;">
<label for="combo" class="combo" style="font-size: 15px; font-weight: bolder;">Rol:</label>
<select name="roles" class="form-select" id="roles" style="width:150px; font-size: 15px;" >
<option value="Administrador" selected>Administrador</option>
<option value="Vendedor" >Vendedor</option>
<option value="Comprador">Comprador</option>
</select>

<br>
<label for="combo" class="combo" style="font-size: 15px; font-weight: bolder; margin-top:30px;">Cuenta:</label>
<select name="cuenta" class="cuenta" id="cuenta" style=" font-size:15px; width:100px;" >
<option value="Publico" selected>Publico</option>
<option value="Privado" >Privado</option>
</select>
</div>
</div>

<br></br>

<label for="fn" class="fn"  style="margin-top:-30px; font-size: 15px; font-weight: bolder; margin-left:-10px;">Fecha de Nacimiento:</label>

<input type="date" id="fn" name="fn" value="2000-01-01" min="1960-01-01" max="2000-01-01">

<label for="fn" class="fi" style="margin-top:-30px; font-size: 15px; font-weight: bolder; margin-left:30px;">Fecha de Ingreso:</label>

<input type="date" id="fi" name="fi" value="2022-10-21" min="1990-01-01" max="2024-01-01">
<br></br>
<div style="margin-left=-300px; text-align:center;">
<label for="genero" class="genero" style="font-size: 15px; font-weight: bolder;">Genero:</label>
  
<input type="radio" id="HombreX" name="genero" value="Masculino" style="margin-left:10px; font-size: 15px;">
<label for="HombreX">Masculino</label>

<input type="radio" id="MujerX" name="genero" value="Femenino" style="margin-left:20px; font-size: 15px;">
<label for="MujerX">Femenino</label>
   
</div>

<br>

<div style="margin-left:250px;">
                  <h6 style="margin-left:-600px; margin-top:10px;">Ingrese una Foto</h6>
                  <input type="file" class="form-control-file" style="margin-left:-80px; " name="foto" id="upload" accept=".png, .jpg, .jpeg" onchange="readURL(this);">
                  <img src="IMG/Imagen1.jpg" name="avatar" id="avatar" style="margin-left:150px; margin-top:-80px; background-color: black; border: 1px solid transparent; padding:3px; border-image:10 stretch;" width="100px" height="100px" alt="foto" class="usuario-foto" >
                  
</div>
                    <br>

<input type="submit" id="Reg" name="Reg" class="btn btn-primary btn-block" style=" margin-left:250px; margin-top:-10px; width:300px;" value="Registrarse"></input>

</form>


</main>

<!-- <script src="registro.js"></script> -->
<script src="reg.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>
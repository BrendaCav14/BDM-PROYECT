<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styleindex.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
      <?php echo  "<title>SHOPPING</title>";?>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
    </head>


<body>
   
<div class="container">
<div class="main-body">

    <!-- NAVEGADOR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="heigth:100px;">

  <a class="navbar-brand" style="color:white; font-family: Sofia, sans-serif; font-size:40px; margin-top:-15px" >Shopping ♥</a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">

<br>
</br>
<form class="form-inline" style="margin-left: 50px">
    
    <input class="form-control mr-sm-2" type="search" placeholder="Buscador" aria-label="Search" style="width: 300px;font-size:15px;">
    
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="color:#E7F3FF;font-size:15px;">Buscar</button>
  </form>

  </div>
  <button type="button" href="TIENDA/RegUsuario.php" class="btn btn-primary" style="width:100px; font-size:15px;">Registrate ya</button>
  <!--<input type="button" href="Listas.php" class="btn btn-primary"  style="font-size:15px;color:#7B1842;font-weight: bold;background-color:#F2933A;border-color:#F2933A;margin-right:10px" value="Registrate ya">-->
  <input type="button" href="InicioSesion.php" class="btn btn-link"  style="text-decoration: underline;font-size:15px;" value="Iniciar Sesion">
</nav>
<div style="background-color:white; width:800px; height: 900px; margin-left:5px; padding-top:30px;">

<div class="container" style="margin-top:10px;width:800px;height:500px">
<div id="myCarousel" class="carousel slide" data-ride="carousel" >
<!-- Indicators -->
<ol class="carousel-indicators">
<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
<li data-target="#myCarousel" data-slide-to="1"></li>
<li data-target="#myCarousel" data-slide-to="2"></li>
</ol>

<!-- Wrapper for slides -->
<div class="carousel-inner">
<div class="item active" style="width:800px;height:400px">
<img src="https://img.blogs.es/anexom/wp-content/uploads/2018/11/romwe.jpg" alt="Imagen1">
</div>

<div class="item" style="width:800px;height:400px">
<img src="https://imagenes.elpais.com/resizer/mol1mG5sX4CnBrqyk1vrpJMdUr8=/1960x0/cloudfront-eu-central-1.images.arcpublishing.com/prisa/XKOZUW2JWH3CDT2TBXEPNHMWTQ.jpg" alt="Imagen2">
</div>

<div class="item" style="width:800px;height:400px">
<img src="https://img.global.news.samsung.com/mx/wp-content/uploads/2019/10/ODT-623_Samsung-Fest-Master-ONE-SAMSUNG_Baja6.jpg" alt="Imagen3">
</div>
</div>

<!-- Left and right controls -->
<a class="left carousel-control" href="#myCarousel" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left"></span>
<span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#myCarousel" data-slide="next">
<span class="glyphicon glyphicon-chevron-right"></span>
<span class="sr-only">Next</span>
</a>
</div>
</div>
<hr>
<h1>hola</h1>


<div style="width:290px; height:900px; background-color:white; margin-left:810px; margin-top:-595px; padding-top:30px; padding-left:30px; padding-rigth:30px;">
<h3>Categorias:</h3>
<select name="select" class="perfiles" style="font-size:15px; width:150px; text-align:center;">
<option value="value1"  selected>Musica</option>
<option value="value2" >Arte</option>
<option value="value3" >Tecnologia</option>
<option value="value4" >Moda</option>
<option value="value5" >Aparatos</option>
<option value="value6" >Videojuegos</option>
<option value="value7" >Peliculas</option>
</select><br></br>
</div>          

</div>


</div>
</div>

</body>
</html>
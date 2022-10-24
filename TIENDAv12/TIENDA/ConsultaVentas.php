<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo  "<title>CONSULTA DE VENTAS</title>"?>

    <link rel="stylesheet" href="Cuerpo.css">
    <link rel="stylesheet" href="ConsultaVentas.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">

    <?php include('bootstrap.php') ?>

</head>
<body>

<div class="container">
<div class="main-body">


    <?php include('navbar.php') ?>

    <?php include('carrito.php') ?>

          <div style="background-color:white; width:1100px; height: 800px; margin-left:5px;">
        <br></br>
        <h1 style=" color:#D07118; font-weight: bolder; font-size:30px; margin-left:430px;">Ventas realizadas del Vendedor</h1>
 
       <br></br>
       <br></br>
      
       <div class="InfoProducto" style=" margin-left:200px;">
       <label for="producto" class="producto">Filtros</label>
       <br></br>
       <label for="producto" class="producto">Rango de Fechas</label>
       <br></br>
       <label for="producto" class="producto" >Inicio:</label>
       <input type="date" id="date" name="trip-start" value="2022-08-31" min="1990-01-01" max="2022-12-31">
       <br></br>
       <label for="producto" class="fin">Fin:</label>
       <input type="date" id="date" name="trip-start" value="2022-08-31" min="1990-01-01" max="2022-12-31">
       <br></br>
       <label for="producto" class="fin">Categoria:</label>
       <select name="select" class="perfiles" style="font-size:15px; width:150px; text-align:center;">
          <option value="value1"  selected>Musica</option>
          <option value="value2" >Arte</option>
          <option value="value3" >Tecnologia</option>
          <option value="value4" >Moda</option>
          <option value="value5" >Aparatos</option>
          <option value="value6" >Videojuegos</option>
          <option value="value7" >Peliculas</option>
          </select>
       <br></br>
       <button type="button" class="btn btn-success" style="width:130px; font-size:15px; margin-left:-70px;">Buscar</button>




</div> 

<div class="consulta1">
 <label for="producto"  >CONSULTA DETALLADA</label>
       <br></br> 
</div>
<div>

<table>
  
  <tr>
    <th>Fecha</th>
    <th>Hora</th>
    <th>Categoria</th>
    <th>Producto</th>
    <th>Calificacion</th>
    <th>Precio</th>
    <th>Existencia</th>
  </tr>
  <tr>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    <td>5</td>
    <td>6</td>
    <td>7</td>
  </tr>
  <tr>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    <td>5</td>
    <td>6</td>
    <td>7</td>
  </tr>
  <tr>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    <td>5</td>
    <td>6</td>
    <td>7</td>
  </tr>
  <tr>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    <td>5</td>
    <td>6</td>
    <td>7</td>
  </tr>
  
</table>




</div>

<div class="consulta2">
 <label for="producto"  >CONSULTA AGRUPADA</label>
       <br></br> 
</div>
<div>

<table class="table2">
  
  <tr>
    <th>Mes</th>
    <th>Año</th>
    <th>Categoria</th>
    <th>Ventas</th>
  </tr>
  <tr>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
  </tr>
  <tr>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
  </tr>
  <tr>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
  </tr>
  <tr>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
  </tr>
  
</table>




</div>

<div style="margin-left:850px; margin-top:40px;">
<a href="PaginaInicio.php" type="button" class="btn btn-danger" style="width:100px; font-size:15px; margin-left:100px;">Regresar</a>
</div>
        
</div>
</div>

</body>
</html>
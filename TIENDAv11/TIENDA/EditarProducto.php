<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo  "<title>EDITAR PRODUCTO</title>"?>

    <link rel="stylesheet" href="Cuerpo.css">
    <link rel="stylesheet" href="AgregaProducto.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
    
    <?php include('bootstrap.php') ?>
    
</head>
<body>

<div class="container">
<div class="main-body">


    <?php include('navbar.php') ?>

    <?php include('carrito.php') ?>


          <div style="background-color:white; width:1100px; height: 550px; margin-left:5px;">
        <br></br>
        <h1 style=" color:#D07118; font-weight: bolder; font-size:30px; margin-left:450px;">Editar Producto</h1>
 
       <br></br>
       <br></br>
       <div class="InfoProducto" style=" margin-left:100px;">
       <label for="producto" class="producto" style="font-size:15px; margin-left:-70px; font-weight: bold; font-family:'Trirong', sans-serif;">
       Nombre del Producto:</label>

       <input type="text" id="producto" name="producto" style="width:300px; font-size:15px;" placeholder="Nombre del Producto"><br></br>
       <label for="descripcion" class="descripcion" style="font-size:15px; font-weight: bold; font-family:'Trirong', sans-serif;">
       Descripcion:</label>

       <input type="text" id="descripcion" name="descripcion" style="width:200px; font-size:15px; width:600px;" placeholder="Descripcion corta sobre el producto"><br></br>
       <label for="categoria" class="categoria" style="margin-left:15px; font-size:15px; font-weight: bold; font-family:'Trirong', sans-serif;">
       Categoria:</label>
       
       <select name="select" class="perfiles" style="font-size:15px; width:150px; text-align:center;">
          <option value="value1"  selected>Musica</option>
          <option value="value2" >Arte</option>
          <option value="value3" >Tecnologia</option>
          <option value="value4" >Moda</option>
          <option value="value5" >Aparatos</option>
          <option value="value6" >Videojuegos</option>
          <option value="value7" >Peliculas</option>
          </select><br></br>

          <div style="margin-left:800px; margin-top:-100px;">
       <label for="precio" class="precio" style="font-size:15px; margin-left:-70px; font-weight: bold; font-family:'Trirong', sans-serif;">
       Precio: $</label>
       <input type="text" id="precio" name="precio" style="width:200px; font-size:15px; width:100px;" placeholder="200.00"><br></br>
       <label for="cantidad" class="cantidad" style="font-size:15px; margin-left:-70px; font-weight: bold; font-family:'Trirong', sans-serif;">
       Cantidad:</label>
          

       <select name="select" class="perfiles" style="font-size:15px; width:50px; text-align:center;">
          <option value="value1"  selected>1</option>
          <option value="value2" >2</option>
          <option value="value3" >3</option>
          <option value="value4" >4</option>
          <option value="value5" >5</option>
          <option value="value6" >6</option>
          <option value="value7" >7</option>
          <option value="value8" >8</option>
          <option value="value9" >9</option>
          <option value="value10" >10</option>
          </select>
          <br></br>
          <br></br> 
        </div>
    </div>

    <div>
    
<img src="https://img.freepik.com/vector-premium/dibujos-animados-productos-supermercado_24640-55628.jpg?w=740"  alt="avatar" style="width:200px;height:200px;background-color: black;border-color:black;border:5px;"><br></br>
 </div>

 <div style="margin-left:200px; margin-top:-220px;">
<button type="button" style="font-size:15px; width:100px;">Examinar</button>
<input type="text" id="country" style="background-color:#c5bbbb; width:300px; font-size:15px;" readonly>
<label style="font-size:15px;">Imagen 1</label>
<br></br>
<button type="button" style="font-size:15px; width:100px;">Examinar</button>
<input type="text" id="country" style="background-color:#c5bbbb; width:300px; font-size:15px;" readonly>
<label style="font-size:15px;">Imagen 2</label>
<br></br>
<button type="button" style="font-size:15px; width:100px;">Examinar</button>
<input type="text" id="country" style="background-color:#c5bbbb; width:300px; font-size:15px;" readonly>
<label style="font-size:15px;">Imagen 3</label>
<br></br>
   </div>



</div> 

<div style="margin-left:850px; margin-top:-180px;">
<button type="button" onclick="alerta()" class="btn btn-success" style="width:130px; font-size:15px; margin-left:-30px;">Editar</button>
<a href="PaginaInicio.php" type="button" class="btn btn-danger" style="width:100px; font-size:15px; margin-left:30px;">Cancelar</a>
</div>
        
</div>
</div>
<script src="EditarProducto.js"></script>


</body>
</html>
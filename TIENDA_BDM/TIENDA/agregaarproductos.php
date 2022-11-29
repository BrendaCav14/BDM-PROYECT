<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo  "<title>AGREGAR PRODUCTO</title>"?>

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


          <form method="post" enctype="multipart/form-data" id="formProd" name="formProd" style="background-color:white; width:1100px; height:800px; margin-left:5px;">
        <br>
        <h1 style=" color:#D07118; font-weight: bolder; font-size:30px; margin-left:430px;">Agregar un Producto</h1>
       
        <hr style="border: none; height: 1px; background-color:black">
       
       <br>
       <div class="InfoProducto" style=" margin-left:200px;">
       <div style="margin-top:30px;">
       <label for="producto" class="producto" style="font-size:20px; margin-left:-90px; font-weight: bold; font-family:'Trirong', sans-serif;">Nombre:</label>
       <input type="text" id="producto" name="producto" class="form-control" style="width:400px; height:30px; font-size:20px; margin-top:-30px;" placeholder="Nombre del Producto" autocomplete="off">
       </div>   
       <div style="margin-top:-60px;">
          <label for="categoria" class="categoria" style="margin-left:500px; font-size:20px; font-weight: bold; font-family:'Trirong', sans-serif;">Categoria:</label>
          <select name="categoria" id="categoria" class="cat" style="font-size:20px; width:250px;">
          <?php 
          require("./BACKEND/Connection.php");

          $consulta = $pdo ->prepare("CALL SP_Categoria('K', null, null, null, null);");
          $consulta->execute();
          $resultado = $consulta->fetchAll();

          
          foreach($resultado as $data){
            echo '<option value="'.$data["ID_Cat"].'">'.$data["nombre_Cat"].'</option>';

         }
          
          ?>
          </select>
        </div>

        <div style="margin-top:5px;">
          <input type="hidden" id="vendedor" name="vendedor" class="form-control" style="font-size:20px; width:200px; height:30px; margin-left:400px; margin-top:-30px;" value="<?php echo $_GET['usu'] ?>" >

        </div>

<div style="margin-top:30px;">
       <label for="descripcion" class="descripcion" style=" margin-left:-120px; font-size:20px; font-weight: bold; font-family:'Trirong', sans-serif;">Descripcion:</label>
       <input type="text" id="descripcion" name="descripcion" class="form-control" style="height:30px; font-size:20px; width:800px; margin-top:-30px;" placeholder="Descripcion corta sobre el producto" autocomplete="off"><br></br>
       </div>
<div style="margin-left=-400px;  margin-top:-10px; font-size:20px;">
<label for="genero" class="genero" style="font-weight: bold; margin-left:40px; font-family:'Trirong', sans-serif;">Tipo de venta</label>
  <br>
<input type="radio" id="venderX" name="venta" value="Vender" style="margin-left:10px;" checked>
<label for="HombreX">Vender</label>

<input type="radio" id="cotizarX" name="venta" value="Cotizar" style="margin-left:20px;">
<label for="MujerX">Cotizar</label>
   
</div>
<div  style="margin-left:350px; margin-top:-70px;">
       <label for="precio" class="precio" style="font-size:20px; margin-left:70px; font-weight: bold; font-family:'Trirong', sans-serif;">Precio: $</label>
       <input type="text" id="precioprod" name="precioprod" class="form-control" style="width:150px; height:30px; font-size:20px; margin-left:155px; margin-top:-35px;" onkeypress="return onlyNumberKey(event)" autocomplete="off"><br></br>
       </div>  
</div>

<div  style="margin-left:405px; margin-top:-20px;">     
       <label for="cantidad" class="cantidad" style="font-size:20px; margin-left:200px; font-weight: bold; font-family:'Trirong', sans-serif;">Cantidad:</label>
       <input type="number" id="cant" name="cant" class="form-control" style="width:80px; height:30px; font-size:20px; margin-top:-30px; margin-left:300px;" placeholder="0" autocomplete="off"><br></br>
</div>
          <br></br> 
        </div>

    <div style="margin-top:-480px; margin-left:-200px;">
    <label for="imagen" class="imagen" style="margin-top:-500px; margin-left:250px; font-size:20px; font-weight: bold; font-family:'Trirong', sans-serif;">Ingresar Imagenes:   </label>

<img src="PRODUCTO/prod.jpg"  alt="avatar" style="width:200px;height:200px;background-color: black;border-color:black;border:5px;"><br></br>
 

<div style="margin-left:350px; margin-top:50px;">

<input type="submit" id="Agregaprod" name="Agregaprod" class="btn btn-success" style="width:200px; font-size:15px; margin-left:-60px;" value="Agregar Producto">
<a href="PaginaInicio.php" type="button" class="btn btn-danger" style="width:100px; font-size:15px; margin-left:30px;">Cancelar</a>

</div>


</div>

 <div style="margin-left:450px; margin-top:-280px;">
 <label style="font-size:15px;">Imagen 1</label>
 <input type="file" class="form-control-file" style="font-size:15px;" name="foto" id="foto" accept=".png, .jpg, .jpeg">

<br>
<label style="font-size:15px;">Imagen 2</label>
<input type="file" class="form-control-file" style="font-size:15px;" name="foto2" id="foto2" accept=".png, .jpg, .jpeg">

<br>
<label style="font-size:15px;">Imagen 3</label>
<input type="file" class="form-control-file" style="font-size:15px;" name="foto3" id="foto3" accept=".png, .jpg, .jpeg">

<br>

<label style="font-size:15px;">VIDEO</label>
<input type="file" class="form-control-file" style="font-size:15px;" name="video" id="video" accept=".mp4, .avi, .mov">

   </div>


<br></br>
<hr style="border: none; height: 1px; background-color:black">
</form>  


</div>
</div>
<script src="agregarproductos.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php
// 

    if(isset($_POST['Agregaprod'])){

require("./BACKEND/Connection.php");

    $nombreprod = $_POST['producto'];
    $desc = $_POST['descripcion'];
    $ventaX = $_POST['venta'];
    $cant = $_POST['cant'];
    $precio = $_POST['precioprod'];
    $cat = $_POST['categoria'];
    $vendedor = $_POST['vendedor'];

        $tipoArchivo=$_FILES['foto']['type'];
        $nombreArchivo=$_FILES['foto']['name'];
        $tamArchivo=$_FILES['foto']['size'];
        $imagenSubida=fopen($_FILES['foto']['tmp_name'],'r');
        $binarioImagen=fread($imagenSubida,$tamArchivo);

        $tipoArchivo2=$_FILES['foto2']['type'];
        $nombreArchivo2=$_FILES['foto2']['name'];
        $tamArchivo2=$_FILES['foto2']['size'];
        $imagenSubida2=fopen($_FILES['foto2']['tmp_name'],'r');
        $binarioImagen2=fread($imagenSubida2,$tamArchivo2);

        $tipoArchivo3=$_FILES['foto3']['type'];
        $nombreArchivo3=$_FILES['foto3']['name'];
        $tamArchivo3=$_FILES['foto3']['size'];
        $imagenSubida3=fopen($_FILES['foto3']['tmp_name'],'r');
        $binarioImagen3=fread($imagenSubida3,$tamArchivo3);

        $tipoVideo=$_FILES['video']['type'];
        $nombreVideo=$_FILES['video']['name'];
        $tamVideo=$_FILES['video']['size'];
        $VideoSub=fopen($_FILES['video']['tmp_name'],'r');
        $binarioVideo=fread($VideoSub,$tamVideo);

        if(!empty($_FILES) && !empty($imagenSubida) && !empty($imagenSubida2) && !empty($imagenSubida3)){

        if(!empty($nombreprod) && !empty($desc) && !empty($ventaX) && !empty($cant) && !empty($precio) && !empty($cat) && !empty($vendedor) && !empty($_FILES) ){



        $sql = "CALL SP_Producto('I',null,:nom, :desc,:img, :rut, :tipo,:img2, :rut2, :tipo2,:img3, :rut3, :tipo3,:video, :rutaV, :tipoV,:venta, :cant, :precio, :cat, :vend);";
        

$query=  $pdo->prepare($sql);                      
$query->bindParam(":nom",$nombreprod);
$query->bindParam(":desc",$desc);

$query->bindParam(":img",$binarioImagen);
$query->bindParam(":rut",$nombreArchivo);
$query->bindParam(":tipo",$tipoArchivo);

$query->bindParam(":img2",$binarioImagen2);
$query->bindParam(":rut2",$nombreArchivo2);
$query->bindParam(":tipo2",$tipoArchivo2);

$query->bindParam(":img3",$binarioImagen3);
$query->bindParam(":rut3",$nombreArchivo3);
$query->bindParam(":tipo3",$tipoArchivo3);

$query->bindParam(":video",$binarioVideo);
$query->bindParam(":rutaV",$nombreVideo);
$query->bindParam(":tipoV",$tipoVideo);


$query->bindParam(":venta",$ventaX);
$query->bindParam(":cant",$cant);
$query->bindParam(":precio",$precio);
$query->bindParam(":cat",$cat);
$query->bindParam(":vend",$vendedor);

$resultado = $query->execute();

if($resultado){

      $pdo = null;
      echo "<script> 
      Swal.fire(
      'Producto Agregado!',
      'Bien hecho.',
      'success'
       ) 
  </script>";
      }
      else{
        echo "<script> alert('ERROR');</script>";
      }

  }
  else{
      echo "<script>  Swal.fire({
        icon: 'error',
        title: 'Campos Vacios',
        text: 'Porfavor llenar todos los campos',
        timer: 5000 // es ms (mili-segundos)
      }) </script>";


  }
        }

  else{
    echo "<script>  Swal.fire({
      icon: 'error',
      title: 'INGRESE FOTOS',
      text: 'Porfavor llene todos los campos',
      timer: 5000 // es ms (mili-segundos)
    }) </script>";

  }



}


?>



</body>
</html>
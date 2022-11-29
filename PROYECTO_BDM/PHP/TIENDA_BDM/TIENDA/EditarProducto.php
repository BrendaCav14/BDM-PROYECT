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

   

          <div style="background-color:white; width:1100px; height: 600px; margin-left:5px;">
        <br></br>
        <h1 style=" color:#D07118; font-weight: bolder; font-size:30px; margin-left:450px;">Editar Producto</h1>
 
       <br></br>
       <form method="post" enctype="multipart/form-data" id="formProd" name="formProd" >
       <div class="InfoProducto" style=" margin-left:100px;">

       <div id="prod" name="prod" style="margin-top:-50px;">

       <?php 
         
         include('./BACKEND/Connection.php');
         $id = $_GET["id"];
         
         $stmt= $pdo->prepare("CALL SP_Producto('X', :id,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null);");

         $stmt->bindParam(":id", $id,PDO::PARAM_INT);
         $stmt->execute();
         $resultado = $stmt->fetch(PDO::FETCH_ASSOC); 
       
     ?>


       <br></br>

<input type="hidden" name="id" id="id" value="<?php echo $resultado["ID_Producto"];  ?>"> 
<input type="hidden" name="vend" id="vend" value="<?php echo $resultado["FK_Vendedor"];  ?>"> 
<br></br>
<label class="producto" style="font-size:20px;font-weight: bold; font-family:'Trirong', sans-serif; margin-left:-20px;">Producto</label>
<input type='text' id='producto' name='producto' class='form-control' style='width:400px; height:30px; font-size:20px; margin-top:-30px; margin-left:100px;' placeholder="Nombre del Producto" autocomplete='off' value="<?php echo $resultado["nombre"];  ?>">
 
       </div>
       <br>
       <label for="descripcion" class="descripcion" style="font-size:20px; font-weight: bold; font-family:'Trirong', sans-serif;  margin-left:-50px;">Descripcion:</label>
       <input type="text" id="desc" name="desc" class="form-control" style="width:500px; height:30px; font-size:20px; margin-top:-30px; margin-left:100px;" placeholder="Descripcion corta" autocomplete="off" value="<?php echo $resultado["descripcion"];  ?>">
       <br>
     

          <div style="margin-left:800px; margin-top:-60px;">
          <label for="venta" class="venta" style="font-size:20px; margin-left:-130px; font-weight: bold; font-family:'Trirong', sans-serif;">Tipo de Venta:</label>
          <input type="text" id="venta" name="venta" class="form-control" style="width:150px; height:30px; font-size:20px; margin-left:10px; margin-top:-35px;" autocomplete="off" value="<?php echo $resultado["venta"];  ?>"><br></br>


       <label for="precio" class="precio" style="font-size:20px; margin-left:-70px; font-weight: bold; font-family:'Trirong', sans-serif;">Precio: $</label>
       <input type="text" id="precioprod" name="precioprod" class="form-control" style="width:150px; height:30px; font-size:20px; margin-left:10px; margin-top:-35px;" onkeypress="return onlyNumberKey(event)" autocomplete="off" value="<?php echo $resultado["precio"];  ?>"><br></br>
       
       <label for="cantidad" class="cantidad" style="font-size:20px; margin-left:-70px; font-weight: bold; font-family:'Trirong', sans-serif;">Cantidad:</label>
       <input type="number" id="cant" name="cant" class="form-control" style="width:80px; height:30px; font-size:20px; margin-top:-35px; margin-left:20px;" placeholder="1" onkeypress="return onlyNumberKey(event)" autocomplete="off" value="<?php echo $resultado["cantidad"];  ?>"><br></br>

       <label for="categoria" class="categoria" style="margin-left:-300px; font-size:20px; font-weight: bold; font-family:'Trirong', sans-serif;">Categoria:</label>
       
       <select name="categoria" id="categoria" class="perfiles" style="font-size:20px; width:300px; margin-top:-800px; margin-left:30px;">
       <option value="<?php echo $resultado["FK_Categoria"];  ?>" selected><?php echo $resultado["nombre_Cat"];  ?></option>;
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



    </div>
      
 <div style="margin-left:50px; margin-top:-150px;">
 <label style="font-size:15px;">Imagen 1</label>
 <input type="file" class="form-control-file" name="foto1" id="foto1" accept=".png, .jpg, .jpeg" style="margin-top:20px; width:400px; font-size:16px; text-overflow: ellipsis; line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 1; ">

<br>
<label style="font-size:15px;">Imagen 2</label>
<input type="file" class="form-control-file"  name="foto2" id="foto2" accept=".png, .jpg, .jpeg" style="margin-top:20px; width:400px; font-size:16px; text-overflow: ellipsis; line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 1; ">

<br>
<label style="font-size:15px;">Imagen 3</label>
<input type="file" class="form-control-file"  name="foto3" id="foto3" accept=".png, .jpg, .jpeg" style="margin-top:20px; width:400px; font-size:16px; text-overflow: ellipsis; line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 1; ">

<br>

<label style="font-size:15px;">VIDEO</label>
<input type="file" class="form-control-file"  name="video" id="video" accept=".mp4, .avi, .mov" style="margin-top:20px; width:400px; font-size:16px; text-overflow: ellipsis; line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 1; ">

   </div>



</div> 

<div style="margin-left:850px; margin-top:-100px;">
<input type="submit" name="editaprod" id="editaprod" class="btn btn-success" style="width:130px; font-size:15px; margin-left:-30px;" value="Editar">
<a href="MisProductos.php" type="button" class="btn btn-danger" style="width:100px; font-size:15px; margin-left:30px;">Regresar</a>
</div>
        
</div>
</div>


</form>
        </div>
        </div>
        
<script src="EditarProducto.js"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php  
  if(isset($_POST['editaprod'])){
    

    $id = $_POST['id'];
    $nombreprod = $_POST['producto'];
    $desc = $_POST['desc'];
    $ventaX = $_POST['venta'];// pendiente
    $cant = $_POST['cant'];
    $precio = $_POST['precioprod'];
    $cat = $_POST['categoria'];
    $vendedor = $_POST['vend'];

        $tipoArchivo=$_FILES['foto1']['type'];
        $nombreArchivo=$_FILES['foto1']['name'];
        $tamArchivo=$_FILES['foto1']['size'];
        $imagenSubida=fopen($_FILES['foto1']['tmp_name'],'r');
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
         
        //  print_r($_POST);
       
          require("./BACKEND/Connection.php");
        $sql = "CALL SP_Producto('U', :id,:nom, :d,
        :img,  :rut,   :tipo,
        :img2, :rut2, :tipo2,
        :img3, :rut3, :tipo3,
        :video, :rutaV, :tipoV,
        :venta, :cant, :precio, :cat, :vend);";

$query=  $pdo->prepare($sql); 

$query->bindParam(":id",$id);                     
$query->bindParam(":nom",$nombreprod);
$query->bindParam(":d",$desc);

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



$query->execute();
$resultado = $query->execute(); 

if($resultado){
    echo "
    <script> 
    var nom = document.getElementById('vend').value; 
    Swal.fire(
    'Producto Actualizado!',
    'Se realizaron los cambios necesarios',
    'success')
location.href='PaginaInicio.php?usu='+ nom;
</script>";
}
else{
    echo "<script>  Swal.fire({
        icon: 'error',
        title: 'ERROR BD',
        text: 'Porfavor vuelve a intentar',
        timer: 5000 // es ms (mili-segundos)
      }) </script>";


}
  }
  else{
    echo "<script>  Swal.fire({
      icon: 'error',
      title: 'CAMPOS VACIOS',
      text: 'Porfavor llene todos los campos',
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

<script src="carrito.js"></script>

</body>
</html>
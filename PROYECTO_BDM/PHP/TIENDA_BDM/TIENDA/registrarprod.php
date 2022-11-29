
<?php
// 

    if(isset($_POST['Agregaprod'])){

require("./BACKEND/Connection.php");

    $nombreprod = $_POST['producto'];
    $desc = $_POST['descripcion'];
    $ventaX = $_POST['venta'];
    $cant = $_POST['cant'];
    $precio = $_POST['precio'];
    $cat = $_POST['categoria'];
    $vendedor = $_POST['vendedor'];

        // $tipoArchivo=$_FILES['foto']['type'];
        // $nombreArchivo=$_FILES['foto']['name'];
        // $tamArchivo=$_FILES['foto']['size'];
        // $imagenSubida=fopen($_FILES['foto']['tmp_name'],'r');
        // $binarioImagen=fread($imagenSubida,$tamArchivo);

        // $tipoArchivo2=$_FILES['foto2']['type'];
        // $nombreArchivo2=$_FILES['foto2']['name'];
        // $tamArchivo2=$_FILES['foto2']['size'];
        // $imagenSubida2=fopen($_FILES['foto2']['tmp_name'],'r');
        // $binarioImagen2=fread($imagenSubida2,$tamArchivo2);

        // $tipoArchivo3=$_FILES['foto3']['type'];
        // $nombreArchivo3=$_FILES['foto3']['name'];
        // $tamArchivo3=$_FILES['foto3']['size'];
        // $imagenSubida3=fopen($_FILES['foto3']['tmp_name'],'r');
        // $binarioImagen3=fread($imagenSubida3,$tamArchivo3);

        // $tipoVideo=$_FILES['video']['type'];
        // $nombreVideo=$_FILES['video']['name'];
        // $tamVideo=$_FILES['video']['size'];
        // $VideoSub=fopen($_FILES['video']['tmp_name'],'r');
        // $binarioVideo=fread($VideoSub,$tamVideo);

        print_r($_POST);
        // print_r($_FILES);

        $sth = $pdo->prepare("SELECT nombre FROM Producto WHERE nombre = :nom");
        $sth->bindParam(':nom',$nombreprod);
        $sth->execute();
        
        if ($sth->rowCount() > 0) {
          echo "<script> alert('YA Esta Insertado') </script>";// resultado existente - No insertar
        } 
        
        else {
        // $sql = "CALL SP_Producto('I',null, :nom, :desc, :img1, :img2, :img3, :video, :ruta, :tipo, :venta, :cant, :precio, :cat, :vend)";
        $sql ="insert ignore into Producto(nombre,descripcion,
        imagen1,ruta_imagen1,tipo_imagen1,
        imagen2,ruta_imagen2,tipo_imagen2,
        imagen3,ruta_imagen3,tipo_imagen3,
        video,ruta_video,tipo_video,
        venta, cantidad, precio, FK_Categoria,FK_Vendedor) 
        values(:nom, :desc,
         null,null,null,
         null,null,null,
         null,null,null,
         null,null,null,
         :venta, :cant, :precio, :cat, :vend);";

$query=  $pdo->prepare($sql);                      
$query->bindParam(":nom",$nombreprod);
$query->bindParam(":desc",$desc);
// $query->bindParam(":img1",$binarioImagen,PDO::PARAM_STR,15);
// $query->bindParam(":img2",$binarioImagen2,PDO::PARAM_STR,15);
// $query->bindParam(":img3",$binarioImagen3,PDO::PARAM_STR,15);
// $query->bindParam(":video",$binarioVideo,PDO::PARAM_STR,15);
// $query->bindParam(":ruta",$nombreVideo,PDO::PARAM_STR,15);
// $query->bindParam(":tipo",$tipoVideo,PDO::PARAM_STR,15);

$query->bindParam(":venta",$ventaX);
$query->bindParam(":cant",$cant);
$query->bindParam(":precio",$precio);
$query->bindParam(":cat",$cat);
$query->bindParam(":vend",$vendedor);

$query->execute();
$resultado = $query->execute(); // No hay resultados - insertar registro
       if($resultado)
    {
      $pdo = null;
        echo "ok";
    
    }
    else{
      echo "error";
    } 
  }
        
        

        // if(!empty($nombreprod) && !empty($desc) && !empty($vendedor)){

//   }

    }


?>

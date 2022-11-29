<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo  "<title>MIS LISTAS</title>"?>

    <link rel="stylesheet" href="Cuerpo.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    
    <?php include('bootstrap.php') ?>

<script>

function Eliminar(id){
    Swal.fire({
        title: '¿Esta seguro que quiere eliminar?',
        text: "No podra revertirlo",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, eliminalo!',
        cancelButtonText:  'NO'

    })
    .then((result) =>{

        if(result.isConfirmed){
            fetch("mislistprod-eliminar.php", {
                 method: "POST",
                 body: id
            })

            .then(response => response.text()).then(response => {
               
                if(response == "ok"){
               var nom = document.getElementById("usuarioID").value; 
                console.log(response);
        
                Swal.fire(
                    'Eliminado!',
                    'El producto a sido eliminada de la lista.',
                    'success'
                )

                location.href="PaginaInicio.php?usu="+ nom;
            }
            
        })
            
        }
    })

}

</script>


    
</head>
<body>

<div class="container">
  
    <div class="main-body">

    <?php include('navbar.php') ?>


             
          <div style="background-color:white; width:1100px; height: 1000px; margin-left:5px; padding-top:30px; padding-left:30px; padding-right:30px; padding-bottom:30px;">
          
          <?php 
         
         include('./BACKEND/Connection.php');
         $id = $_GET["lista"];
         
         $stmt= $pdo->prepare("CALL SP_Lista('M', :id,null,null,null,null,null); ");

         $stmt->bindParam(":id", $id);
         $stmt->execute();
         $resultado = $stmt->fetch(PDO::FETCH_ASSOC); 
       
     ?>


<div style="text-align:center; margin-left:-950px;">
          <h1 style=" color:#D07118; font-weight: bolder; font-size:40px; margin-left:400px;"><?php echo $resultado['nombre'] ?></h1>
          <h4 style=" color: gray; font-size:20px; margin-left:500px;">"<?php echo $resultado['descripcion'] ?>"</h4>
          <input type="hidden" id="idlist" name="idlist" value="<?php echo $resultado['ID_Lista'] ?>">
          <input type="hidden" id="usuarioID" name="usuarioID" value="<?php echo $_GET['usu'] ?>">
          
</div>
<hr style='border: none; height: 1px; background-color:black'>
 <br></br>

  <!-- CARDS -->         
  <div class="container">
  <div class="row" style="background-color: #c6f6c6; border-radius: 5% ;  height: 800px; display: block; overflow-y: auto;  overflow-x: hidden;">

  <div id ="listaprod" name="listaprod">

  <?php

 $id = $_GET['lista'];

  include('./BACKEND/Connection.php');

 $stmt= $pdo->prepare("CALL SP_ListaProd('M',null, :id,null);; ");

 $stmt->bindParam(":id", $id);
 $stmt->execute();
 $res = $stmt->fetchAll(PDO::FETCH_ASSOC); 
if($res){
foreach($res as $data){
    
  echo "
  <form method='post' action='' id='misprod' >
  <div class='col-sm-24 col-md-9'>
  <div class='custom-column' style='background-color:#b7acac; border-radius: 10%; border:3px; border-color:black; border-width:thick;  height:450px; width:900px; width:900px; margin-top:10px; margin-left:60px;'>
  <input type='hidden' name='id_prod' id='id_prod' value='".$data['ID_ListaProd']."'> 
    <div class='custom-column-content' style='margin-left:50px; background-color:#b7acac; border-radius: 10% ;'>
    <br>
    <img src='data:image/jpeg;base64,".base64_encode($data['imagen1'])." ' class='card-img-top' alt='Imagen1' style=' border-radius: 10% ; width: auto; max-width:250px; height:150px; max-height:150px;'>
<br></br>
    <h6 class='card-title' id='nomprod' style='font-size:25px; font-family: Times New Roman, Times, serif; font-weight:bold; max-width:400px; max-lenght:400px; text-overflow: ellipsis; line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 1; '>".$data['Producto']."</h6>
    <h3>Descripcion</h3>
    <h4 class='card-title' id='desc' style=' max-width:800px; max-lenght:800px; text-overflow: ellipsis; line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 1; '>".$data['descripcion']."</h4>
    
    <h4 class='card-text' id='catprod' style='font-family: Arial, Helvetica, sans-serif; font-style: italic;'>Categoria: ".$data['Categoria']."</h4>
    <h4 class='card-text' id='cantprod' style='font-size:18px; margin-top:10px; font-family: Arial, Helvetica, sans-serif;'>Disponibles: ".$data['cantidad']."</h4>
    <h4 class='card-text' id='vendedorprod' style='font-family: Arial, Helvetica, sans-serif; margin-left:200px;'>Vendedor: ".$data['Vendedor']."</h4>
    <h4 class='card-text' id='ventaprod' style='font-family: Arial, Helvetica, sans-serif; margin-left:200px; font-weight:bold;'>Tipo: ".$data['Venta']."</h4>
    <h6 style='font-size:25px' id='precioprod' >Precio: $".$data['Precio']."</h6>
    

<div style='margin-left:500px; margin-top:-300px; color:white; font-size:30px; border-radius: 10% ; height:100px; width:200px; background-color:#b7acac;'>

<br>

<input type='button' id='borra' id='borra' class='btn btn-primary btn-danger' style='font-size:15px; width:150px;' onclick=Eliminar('".$data['ID_ListaProd']."') value='Eliminar'>

<a href='Producto.php?id=".$data['NumP']."&usu=".$_GET['usu']." ' type='button' class='btn btn-primary btn-primary' style='color:white; margin-left:100px; margin-top:200px; width:200px; font-size:15px' value='' > Ver Producto </a>
      
</div>

    </div>

  </div>
</div>
</form>";
   

}
}
else{
  echo "    <h2 class='card-text' id='ventaprod' style='font-family: Arial, Helvetica, sans-serif; margin-left:420px; margin-top:300px; font-weight:bold;'>No tiene productos.</h2>";
}

echo json_encode($_POST);


?>


</div>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>

function EliminarCarProd(id){
    Swal.fire({
        title: '¿Esta seguro que quiere eliminar?',
        text: "No podra revertirlo",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, eliminalo!',
        cancelButtonText:  'NO'

    })
    .then((result) =>{

        if(result.isConfirmed){
            fetch("carProd-eliminar.php", {
                 method: "POST",
                 body: id
            })

            .then(response => response.text()).then(response => {
                if(response == "ok"){
                    
                console.log(response)

                Swal.fire(
                    'Eliminado!',
                    'El producto a sido eliminado del carrito.',
                    'success'
                )

                document.location.reload(true);
            }
            else{
              Swal.fire(
                    'Error!',
                    'La categoria a sido eliminada.',
                    'success'
                )

            }
            
        })
            
        }
    })

}


</script>

<!-- <script src="carrito.js"></script> -->

</div>

 
</div>
 


</body>
</hmtl>
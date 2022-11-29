

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo  "<title>INICIO SHOPPING</title>"?>
    <link rel="stylesheet" href="Cuerpo.css">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
    
    <?php include('bootstrap.php') ?>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
   
    
    
    <script>
 function BuscarProducto() {

jQuery.ajax({
url: "ajax-producto.php",
data:'buscador='+$("#buscador").val(),
type: "POST",
success:function(data){
  $("#buscaprod").html(data);
},
error:function (){}
});
}


function getval(sel)
{ var cat = sel.value;
  jQuery.ajax({
url: "ajax-catproducto.php",
data:'getProducts='+$("#getProducts").val(),
type: "POST",
success:function(data){
  $("#buscaprod").html(data);
},
error:function (){}
});
}



function selectOnlyThis(id) {

    var cat = id.value;
  jQuery.ajax({
url: "ajax-rangopreciostodos.php",
data:'ran='+$("#ran").val(),
type: "POST",
success:function(data){
  $("#buscaprod").html(data);
},
error:function (){}
});

}

function selectOnlyThis1(id) {

var cat = id.value;
jQuery.ajax({
url: "ajax-rangoprecios.php",
data:'rango='+$("#rango").val(),
type: "POST",
success:function(data){
$("#buscaprod").html(data);
},
error:function (){}
});

}

function selectOnlyThis2(id) {

var cat = id.value;
jQuery.ajax({
url: "ajax-rangoprecios2.php",
data:'rango2='+$("#rango2").val(),
type: "POST",
success:function(data){
$("#buscaprod").html(data);
},
error:function (){}
});

}

function selectOnlyThis3(id) {

var cat = id.value;
jQuery.ajax({
url: "ajax-rangoprecios3.php",
data:'rango3='+$("#rango3").val(),
type: "POST",
success:function(data){
$("#buscaprod").html(data);
},
error:function (){}
});

}

function selectOnlyThis4(id) {

var cat = id.value;
jQuery.ajax({
url: "ajax-rangoprecios4.php",
data:'rango4='+$("#rango4").val(),
type: "POST",
success:function(data){
$("#buscaprod").html(data);
},
error:function (){}
});

}

function selectOnlyThis5(id) {

var cat = id.value;
jQuery.ajax({
url: "ajax-rangoprecios5.php",
data:'rango5='+$("#rango5").val(),
type: "POST",
success:function(data){
$("#buscaprod").html(data);
},
error:function (){}
});

}


</script>



    </head>
    <body>

    <div class="container">
<div class="main-body">

    <?php include('navbar.php') ?>
  
<div style="text-align:center; width:290px; height:1200px; background-color:white; margin-left:-190px; margin-top:-10px; padding-top:30px; padding-left:30px; padding-rigth:30px;">

<form method="post" action="PaginaInicio.php" style="margin-left: 300px; margin-top:10px;">
    
    <h2 style="margin-left:-400px;">Buscar productos</h2>
    <input class="form-control mr-sm-2" for="search" name="buscador" id="buscador" type="text" placeholder="nombre,categoria..." style="background-color: #d3ffff; margin-left:-300px; width: 250px; font-size:20px; height:45px; color:blue; " onkeyup="BuscarProducto()" autocomplete="off">
    
    
    <label for="categoria" class="categoria" style="margin-left:-500px; margin-top:20px; font-size:20px; font-weight: bold; font-family:'Trirong', sans-serif;">Categoria:</label>

    <div style="margin-top:10px;">
    <hr style="border: none; height: 3px; background-color:black">   
          <select name="getProducts" id="getProducts" class="cat" style="font-size:20px; width:250px; margin-top:-100px; margin-left:-380px; " onchange="getval(this)">
          <option  name="nada" id="nada" value="nada" selected>Elije una Categoria...</option>
          <?php 
          require("./BACKEND/Connection.php");

          $consulta = $pdo ->prepare("CALL SP_Categoria('K', null, null, null, null);");
          $consulta->execute();
          $resultado = $consulta->fetchAll();

          
          foreach($resultado as $data){
            echo '<option value="'.$data["nombre_Cat"].'">'.$data["nombre_Cat"].'</option>';

         }
          
          ?>
          </select>
        </div>


        <div class="container" style="margin-left:-500px; margin-top:20px; width:600px;">
        <h2 style="font-size:25px;">Rango de Precios</h2>

    <div class="filter-panel">
        <br>
        <div>
        <input style="width:20px; height:20px; margin-left:-50px;" type="checkbox" class="price_range" name="ran" id="ran" value="" onclick="selectOnlyThis(id)" checked> 
        <label style="font-size:20px;">Todos</label>
        </div><br>
        <div>
        <input style="width:20px; height:20px; margin-left:-50px;" type="checkbox" class="price_range" name="rango" id="rango" value="0" onclick="selectOnlyThis1(id)"> 
        <label style="font-size:20px;">$0 a $500</label>
        </div><br>
        <div>
        <input style="width:20px; height:20px;" type="checkbox" class="price_range" name="rango2" id="rango2" value="500" onclick="selectOnlyThis2(id)">
        <label style="font-size:20px;">$500 a $1,000</label>
        </div><br>
        <div>
        <input  style="width:20px; height:20px;" type="checkbox" class="price_range" name="rango3" id="rango3" value="1000" onclick="selectOnlyThis3(id)">
        <label style="font-size:20px;">$1,000 a $2,000</label> 
        </div><br>
        <div>
        <input style="width:20px; height:20px;" type="checkbox" class="price_range" name="rango4" id="rango4" value="1500" onclick="selectOnlyThis4(id)">
        <label style="font-size:20px;">$2,000 a $5,000</label>
        </div><br>
        <div>
        <input  style="width:20px; height:20px;" type="checkbox" class="price_range" name="rango5" id="rango5" value="2000" onclick="selectOnlyThis5(id)">
        <label style="font-size:20px;">$5,000 a $10,000</label> 
        </div><br>
    
     
    </div>

</div>

</form>
<br></br>
</div>
   
<div style="background-color:white; width:905px; height: 1200px; margin-left:102px; margin-top:-1200px; padding-top:30px;">


<h1 style="font-family: Trirong, sans-serif; font-size:30px; margin-left:200px; font-weight: bold;  color:#8d0909;">Encuentra las mejores ofertas aqui en</h1> 
<h1 style="font-family: Sofia, sans-serif; font-size:40px;  color:#8d0909; margin-left:400px;">Shopping ♥</h1>



<div class="container" style="margin-top:10px; width:900px; height:200px; max-height:200px;">


<h1 style="font-size:40px;  color:#8d0909; margin-top:50px; margin-left:180px; font-weight: bold; font-family: Trirong, sans-serif;">LO MAS VENDIDO EN EL 2022 !</h1>
<br></br>
<div style="display: block; height: 500px; overflow-y: auto; overflow-x: hidden; background-color:gray;">
<!-- CARDS -->         
 <div class="container">
  <div class="row">
  <form method="post">
<div id="buscaprod">
<?php

require("./BACKEND/Connection.php");

    
    $consulta= $pdo->prepare("CALL SP_Producto('S',null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null);");
    $consulta->execute();
    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    
    foreach($resultado as $row){

      if($row['cantidad'] <= 0){
    
    echo "
          <div class='col-sm-6 col-md-3 border' style=' border-radius: 5% ;border-color:black; border: 5px solid transparent; padding-left:3px; height:260px; background-color:#E7F3FF;'>
          <div class='custom-column'>
            
            <div class='custom-column-content' style='text-align:center; '>
            <br>
            <img src='data:image/jpeg;base64,".base64_encode($row['imagen1'])." ' class='card-img-top' alt='Imagen1' style=' border-radius: 10% ; width: auto; max-width:80px; height:80px; max-height:100px;'>
        <h5 class='card-title' style='font-size:20px; max-lenght:100px; text-overflow: ellipsis; line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2;'>   ".$row['nombre']."  </h5>
        <p class='card-text' style='color:red; font-size:15px;'>Disponibles: ".$row['cantidad']."</p>
        <p style='font-size:15px'> Precio: $".$row['precio']." </p>
            
              </div>
    
            <div class='custom-column-footer' style='text-align:center;'>
            <a href='Producto.php?id=".$row['ID_Producto']."&usu=".$_GET['usu']." ' class='btn btn-primary btn-lg'>Ver Producto</a>
            </div>
    
          </div>
        </div>";
      }
      else{

        echo "
        <div class='col-sm-6 col-md-3 border' style=' border-radius: 5% ;border-color:black; border: 5px solid transparent; padding-left:3px; height:260px; background-color:#E7F3FF;'>
        <div class='custom-column'>
          
          <div class='custom-column-content' style='text-align:center; '>
          <br>
          <img src='data:image/jpeg;base64,".base64_encode($row['imagen1'])." ' class='card-img-top' alt='Imagen1' style=' border-radius: 10% ; width: auto; max-width:80px; height:80px; max-height:100px;'>
      <h5 class='card-title' style='font-size:20px; max-lenght:100px; text-overflow: ellipsis; line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2;'>   ".$row['nombre']."  </h5>
      <p class='card-text' style='color:green; font-size:15px;'>Disponibles: ".$row['cantidad']."</p>
      <p style='font-size:15px'> Precio: $".$row['precio']." </p>
          
            </div>
  
          <div class='custom-column-footer' style='text-align:center;'>
          <a href='Producto.php?id=".$row['ID_Producto']."&usu=".$_GET['usu']." ' class='btn btn-primary btn-lg'>Ver Producto</a>
          </div>
  
        </div>
      </div>";

      }
    
    }
    
    ?>



</div>
</form>
  

  </div>
</div>
</div>


<div style="text-align:center; width:290px; height:1200px; background-color:white; margin-left:890px; margin-top:-760px; padding-top:30px; padding-left:30px; padding-rigth:30px;">


    
    <h2>Buscar usuarios</h2>
<div class="container" style="margin-top:10px; margin-left:-23px; width:280px; height:500px; max-height:500px; background-color:#facbcb; border-radius:8%;">
<form method="post" action="PaginaInicio.php">

    <div style="display: block; height: 500px; overflow-y: auto; overflow-x: hidden;">

<div id="buscausuario">
<?php

include('./BACKEND/Connection.php');
      
        
$row= $pdo->prepare("CALL SP_Usuario('S',null,null,null,null,null,null,null,null,null,null,null,null,null,null,null);");

$row->execute();
$res = $row->fetchAll(PDO::FETCH_ASSOC); //User data




foreach($res as $usu){

echo "
<div style='margin-left:10px; margin-top:20px; color:#280409; background-color: #cca6dc; border-radius:5%; height:150px;'>
<h3 style='margin-top:-5px; font-weight: bold; font-style: italic;' >".$usu['ID_usuario']."</h3>
<h4>".$usu['Nombre']."</h4>
<h5 style='font-weight: bold;'>".$usu['Rol']."</h5>
<h5>Cuenta:  ".$usu['Cuenta']."</h5>
<a href='usuario.php?id=".$usu['ID_usuario']."&usu=".$_GET['usu']."' type='button' class='btn btn-primary btn-primary' style='color:white; width:100px; font-size:15px' value='' > Buscar </a>
</div>

";

}


?>

</div>
</div>
  </div>
    
   
</form>
<br></br>


</div>


<div style="width:1550px; height:150px; margin-top:400px; margin-left:-370px; background-color:white;">




<?php include('Footer.php') ?>
</div>
         

</div>


</div>
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
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<?php

if(isset($_POST['metodopago'])){
$Total = $_POST['total'];
$Comprador = $_POST['comprador'];

// if(empty($comentario)){

// echo "<script>  Swal.fire({
//   icon: 'error',
//   title: 'Campos Vacios',
//   text: 'Porfavor escriba un comentario en cada producto que desee comprar.',
//   timer: 5000 // es ms (mili-segundos)
// }) </script>";

// }
// else{

require("./BACKEND/Connection.php");

  $sql = "CALL SP_Venta('I', null, null, :t, :c);";

$query=  $pdo->prepare($sql);                      
$query->bindParam(":t",$Total);
$query->bindParam(":c",$Comprador);

$venta = $query->execute(); 
$pdo = null;


// try {
require("./BACKEND/Connection.php");
// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
      

      // $sql = "CALL SP_VentaDet('I',null,null,null, :cant, :cali, :com, :precio, :imp, :p, :comp, :vend);";

      $sql = "INSERT INTO venta_Detalle(fecha,cantidad,precioVenta,importe,FK_Producto,FK_Comprador,FK_Vendedor)
      SELECT now(),A.cantidad,P.precio,CalculaSubtotal(P.precio,A.Cantidad)'importe',A.FK_Producto,A.FK_Comprador,P.FK_Vendedor
      FROM Carrito_Detalle A
      JOIN Producto P
      ON P.ID_Producto = A.FK_Producto
      WHERE FK_Comprador = :com;";
      
      $row = $pdo->prepare($sql); 
      $row->bindParam(":com",$Comprador);

      $venta_detalle = $row->execute(); 
      $pdo = null;


      require("./BACKEND/Connection.php");
      $row = $pdo->prepare("DELETE FROM Carrito_Detalle WHERE FK_Comprador= :com;"); 
      $row->bindParam(":com",$Comprador);

      $delete = $row->execute();


if($venta && $venta_detalle){

echo "<script> 
Swal.fire(
'Venta Realizada con exito!',
'Su pedido a sido realizado.',
'success'
 ) 
</script>";



}
else{
echo "<script>  Swal.fire({
  icon: 'error',
  title: 'ERROR',
  text: 'Porfavor vuelve a intentar',
  timer: 5000 // es ms (mili-segundos)
}) </script>";

}

}


// }



?>

    </body>
</html>
<?php

  include('./BACKEND/Connection.php');
          $id = $_GET["usu"];

          // $rol = $_GET["rol"];
          
          $stmt= $pdo->prepare("CALL SP_Usuario('X', :id,null,null,null,null,null,null,null,null,null,null,null,null,null, null); ");

          $stmt->bindParam(":id", $id);
          $stmt->execute();
          $data = $stmt->fetch(PDO::FETCH_ASSOC); //User data

?>
<div style="margin-left:-73px;">
<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions" style="margin-left:-120px; width:150px; height:85px; text-align:center; background-color:#E88EBA">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
</svg>
</button>
</div>
<div class="offcanvas offcanvas-start"  data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel" >
  <div class="offcanvas-header" style="margin-top:-50px;">

  <?php echo "<img src='data:image/jpeg;base64," . base64_encode($data['Foto']) . "' alt='usuariofoto'  class='rounded-circle' style='max-width:100px; max-height:100px; width='100'; height='100';'>" ?>

  
  <div style="margin-left:200px; margin-top:0px;">
     <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>

  <br></br>
  <div style="margin-left:-300px; margin-top:30px; font-size:15px;">
  <h1 class="offcanvas-title" id="offcanvasWithBothOptionsLabel"><?php echo $data["ID_usuario"] ?>  </h1>
  <br>
  <h4 style="font-size:15pz;">     <?php echo $data["Rol"] ?>     </h4>
    </div>
   
    <br></br>
    <br></br>
    <div style="margin-top:200px; margin-left:-200px;">
    <h4 style="">  <?php echo $data["Nombre"] ?>     </h4>
    <br>
    <h5 style="">  <?php echo $data["email"] ?>     </h5>
   
    </div>
  </div>
  <hr>

  <?php  
    
    if($data["Rol"] == "Administrador"){
    
      echo " <div class='offcanvas-body'>
    
      <div class='card mt-3'>
                    <ul class='list-group list-group-flush'>
                      <li class='list-group-item d-flex justify-content-between align-items-center flex-wrap'>
                      <a type='button' href='PaginaInicio.php?usu=".$data["ID_usuario"]."' class='btn btn-light' style='width:100%; text-align:center; font-size:20px; color:#7B1842;'>
                      <svg xmlns='http://www.w3.org/2000/svg' width'16' height='16' fill='currentColor' class='bi bi-house-door-fill' viewBox='0 0 16 16' style='color:black;'>
      <path d='M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z'/>
    </svg>
                      Inicio
                    </a>
    
                      </li>
    <hr>
                      <li class='list-group-item d-flex justify-content-between align-items-center flex-wrap'>
                      <a type='button' href='PerfilUsuario.php?usu=".$data["ID_usuario"]."' class='btn btn-light' style='width:400px; text-align:center; font-size:20px; color:#7B1842;'> 
                      <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-person-fill' viewBox='0 0 16 16' style='color:blue;'>
      <path d='M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z'/>
    </svg>
                      Perfil
                      </a>
                      </li>
    
                      <li class='list-group-item d-flex justify-content-between align-items-center flex-wrap'>
                      <a type='button' href='MisListas.php?usu=".$data["ID_usuario"]."' class='btn btn-light' style='width:400px; text-align:center; font-size:20px; color:#7B1842;'> 
                      <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-bookmark-heart-fill' viewBox='0 0 16 16' style='color:red;'>
                      <path d='M2 15.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v13.5zM8 4.41c1.387-1.425 4.854 1.07 0 4.277C3.146 5.48 6.613 2.986 8 4.412z'/>
                      </svg>
                      Mis Listas
                      </a>
                      </li>
                  
                    </ul>
                  </div>
    
      </div>";
        
    
    }
    else if($data["Rol"] == "Vendedor"){
    
      echo " <div class='offcanvas-body'>
    
      <div class='card mt-3'>
                    <ul class='list-group list-group-flush'>
                      <li class='list-group-item d-flex justify-content-between align-items-center flex-wrap'>
                      <a type='button' href='PaginaInicio.php?usu=".$data["ID_usuario"]."' class='btn btn-light' style='width:100%; text-align:center; font-size:20px; color:#7B1842;'>
                      <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-house-door-fill' viewBox='0 0 16 16' style='color:black;'>
      <path d='M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z'/>
    </svg>
                      Inicio
                    </a>
    
                      </li>
    <hr>
                      <li class='list-group-item d-flex justify-content-between align-items-center flex-wrap'>
                      <a type='button' href='PerfilUsuario.php?usu=".$data["ID_usuario"]."' class='btn btn-light' style='width:400px; text-align:center; font-size:20px; color:#7B1842;'> 
                      <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-person-fill' viewBox='0 0 16 16' style='color:blue;'>
      <path d='M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z'/>
    </svg>
                      Perfil
                      </a>
                      </li>
    
                      <li class='list-group-item d-flex justify-content-between align-items-center flex-wrap'>
                      <a type='button' href='MisListas.php?usu=".$data["ID_usuario"]."' class='btn btn-light' style='width:400px; text-align:center; font-size:20px; color:#7B1842;'> 
                      <svg xmlns='http://www.w3.org/2000/sv' width='16' height='16' fill='currentColor' class='bi bi-bookmark-heart-fill' viewBox='0 0 16 16' style='color:red;'>
                      <path d='M2 15.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v13.5zM8 4.41c1.387-1.425 4.854 1.07 0 4.277C3.146 5.48 6.613 2.986 8 4.412z'/>
                      </svg>
                      Mis Listas
                      </a>
                      </li>
    
                      <li class='list-group-item d-flex justify-content-between align-items-center flex-wrap'>
                      <a type='button'  href='MisProductos.php?usu=".$data["ID_usuario"]."' class='btn btn-light' style='width:400px; text-align:center; font-size:20px; color:#7B1842;'> 
                      <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-basket-fill' viewBox='0 0 16 16' style='color:green;'>
                      <path d='M5.071 1.243a.5.5 0 0 1 .858.514L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 6h1.717L5.07 1.243zM3.5 10.5a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3z'/>
                      </svg>
                      Mis Productos
                      </a>
                      </li>
                     
                  
                    </ul>
                  </div>
    
      </div>";
        
    
    }
    else if($data["Rol"] == "Comprador"){
    
      echo " <div class='offcanvas-body'>
    
  <div class='card mt-3'>
                <ul class='list-group list-group-flush'>
                  <li class='list-group-item d-flex justify-content-between align-items-center flex-wrap'>
                  <a type='button' href='PaginaInicio.php?usu=".$data["ID_usuario"]."' class='btn btn-light' style='width:100%; text-align:center; font-size:20px; color:#7B1842;'>
                  <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-house-door-fill' viewBox='0 0 16 16' style='color:black;'>
  <path d='M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z'/>
</svg>
                  Inicio
                </a>

                  </li>
<hr>
<li class='list-group-item d-flex justify-content-between align-items-center flex-wrap'>
<a type='button' href='PerfilUsuario.php?usu=".$data["ID_usuario"]."' class='btn btn-light' style='width:400px; text-align:center; font-size:20px; color:#7B1842;'> 
<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-person-fill' viewBox='0 0 16 16' style='color:blue;'>
<path d='M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z'/>
</svg>
Perfil
</a>
</li>

<li class='list-group-item d-flex justify-content-between align-items-center flex-wrap'>
<a type='button' href='MisListas.php?usu=".$data["ID_usuario"]."' class='btn btn-light' style='width:400px; text-align:center; font-size:20px; color:#7B1842;'> 
<svg xmlns='http://www.w3.org/2000/sv' width='16' height='16' fill='currentColor' class='bi bi-bookmark-heart-fill' viewBox='0 0 16 16' style='color:red;'>
<path d='M2 15.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v13.5zM8 4.41c1.387-1.425 4.854 1.07 0 4.277C3.146 5.48 6.613 2.986 8 4.412z'/>
</svg>
Mis Listas
</a>
</li>

                 
<li class='list-group-item d-flex justify-content-between align-items-center flex-wrap'>
<a type='button' href='ConsultaPedidos.php?usu=".$data["ID_usuario"]."' class='btn btn-light' style='width:400px; text-align:center; font-size:20px; color:#7B1842;'> 
<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-box-seam-fill' viewBox='0 0 16 16' style='color:#c2830d;'>
<path fill-rule='evenodd' d='M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003 6.97 2.789ZM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461L10.404 2Z'/>
</svg>
Pedidos
</a>
</li>
              
                </ul>
              </div>

  </div>";
    
    
    } 
    ?>



</div>

<script>
 function BuscarUsuario() {

jQuery.ajax({
url: 'ajax-usuariobuscar.php',
data:'buscarusuario='+$("#buscarusuario").val(),
type: "POST",
success:function(data){
  $("#modelslist").html(data);
},
error:function (){}
});
}


</script>
<!-- NAVEGADOR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-top:-85px; margin-left:-50px; width:1350px;">
            <ol >
            <a class="navbar-brand" href="PaginaInicio.php?usu=<?php echo $data["ID_usuario"] ?>" style="color:white; font-family: Sofia, sans-serif; font-size:40px;" >Shopping ♥</a>
            
        
            <form class="form-inline" style="margin-left: 300px; margin-top:10px;">
    
    <input class="form-control mr-sm-2" type="search" name="buscarusuario" id="buscarusuario" placeholder="Buscador" aria-label="Search" style="margin-left:50px; width: 350px;font-size:20px; height:40px;">
    
    <input class="btn btn-outline-success my-2 my-sm-0" type="submit" style="color:#E7F3FF;font-size:15px;" value="Buscar"></input>
  </form>
  <datalist id="modelslist">


</datalist>



  <div style="color: white; margin-top:-30px;">
        <button class="btn btn-secondary dropdown-toggle" style="font-size:13px; margin-left:-10px;" href="#" id="navbarDropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          MENU
        </button>

        <?php  
    
    if($data["Rol"] == "Administrador"){
    
    echo "  <div class='dropdown-menu' aria-labelledby='navbarDropdown' style='margin-left:250px; font-size:15px;'>
            <a class='dropdown-item' href='Listas.php?usu=".$data["ID_usuario"]."'>Crear Lista</a>
            <a class='dropdown-item' href='AutorizarProd.php?usu=".$data["ID_usuario"]."'>Autorizar Productos</a>
            </div>";
    
    }
    else if($data["Rol"] == "Vendedor"){
    
        echo "<div class='dropdown-menu' aria-labelledby='navbarDropdown' style='margin-left:250px; font-size:15px;'>
          <a class='dropdown-item' href='categorias.php?usu=".$data["ID_usuario"]."'>Crear Categoria</a>
          <a class='dropdown-item' href='Listas.php?usu=".$data["ID_usuario"]."'>Crear Lista</a>
          <a class='dropdown-item' href='agregaarproductos.php?usu=".$data["ID_usuario"]."'>Agregar un Producto</a>
          <a class='dropdown-item' href='CotizarProducto.php?usu=".$data["ID_usuario"]."'>Cotizar Productos</a>

          <div class='dropdown-divider'></div>
          <a class='dropdown-item' href='ConsultaVentas.php?usu=".$data["ID_usuario"]."'>Consultar Ventas</a>
         
        </div>" ;
    
    }
    else if($data["Rol"] == "Comprador"){
    
      echo " <div class='dropdown-menu' aria-labelledby='navbarDropdown' style='margin-left:250px; font-size:15px;'>
             <a class='dropdown-item' href='Listas.php?usu=".$data["ID_usuario"]."'>Crear Lista</a>
             <div class='dropdown-divider'></div>
             <a class='dropdown-item' href='ConsultaPedidos.php?usu=".$data["ID_usuario"]."'>Consultar Pedidos</a>
             </div>";
    
    
    } 
    ?>
 
 </div>
 
<?php 
 if($data["Rol"] == "Comprador"){

echo "<button type='button' name='productos' id='productos' class='btn btn-primary' data-toggle='modal' data-target='#exampleModalCenter' style='margin-top:-50px; margin-left:550px; background-color:#D07118'>
     
    <svg xmlns='http://www.w3.org/2000/svg' width='25' height='25' fill='currentColor' class='bi bi-cart-plus-fill' viewBox='0 0 16 16' 
    style=' margin-top:3px; color:white;'>
    <path d='M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z'/>
  </svg>
    
    Carrito de Compras

</button>";
 }
?>
 
<!-- Modal -->
<div  class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" >
    <div class="modal-content" style="width:900px; margin-left:-200px;">
      <div class="modal-header" style="width:900px; height:500px;">
        <h4 class="modal-title" style="font-weight: bold; margin-left:300px; font-size:25px;">CARRITO DE COMPRAS</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="font-size:50px;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <?php

include('./BACKEND/Connection.php');
        $id = $data["ID_usuario"];
        
        $stmt= $pdo->prepare("CALL SP_Carrito('X',null,null,null, :id); ");

        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC); //User data

?>
        <form method="post" name="formulario" id="formulario">

<h3 style="margin-top:-450px; margin-left:700px;"><?php echo $resultado["fecha"] ?>  </h3>
  
<div class="col-25">
<div class="container">

<h4 style="font-size:20px; font-weight: bold; " >PRODUCTOS 
<span class="price" style="color:black; margin-top:-20px; margin-left:350px;">

<i class="fa fa-shopping-cart" style="margin-left:300px; font-size:25px;"></i> 
</span></h4>

<br></br>
<div style="margin-top:20px;">
<h4 style="margin-left:510px; margin-top:20px;">CANTIDAD------UNIDAD--------SUBTOTAL</h4>
</div>
<br></br>
<br></br>
<br></br>
<div style="margin-top:-50px; height: 200px; display: block; overflow-y: auto;  overflow-x: hidden;"> 


<div id="carrito">
<?php

$id = $data["ID_usuario"];
include('./BACKEND/Connection.php');

$stmt= $pdo->prepare("CALL SP_CarritoDet('X',null,null,null,null,null,null,null,:id);");

$stmt->bindParam(":id", $id);
$stmt->execute();
$res = $stmt->fetchAll(PDO::FETCH_ASSOC); //User data

foreach($res as $prod){

  echo "
  <input type='button' name='borraProdCar' id='borraProdCar'   onclick=EliminarCarProd(".$prod['ID_CarritoDetalle'].")  style='margin-left:50px; background-color: #770000;' class='btn btn-danger' value='X'>
  <h4 class='product' style='margin-top:-20px; margin-left:90px; max-width:300px; max-lenght:300px; text-overflow: ellipsis; line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 1;'>
 ".$prod['nombre']."</h4> 
  <div style='margin-left:500px; margin-top:-10px;'>
  <span class='price' style='font-size:15px; margin-left: 60px;'>".$prod['cantidad']."</span>
  <span class='price' style='margin-left:50px;'>$".$prod['precio']."</span>
  <span class='price' style='margin-left:50px;'>$".$prod['subtotal']."</span>
  <input type='hidden' class='price' style='font-size:15px;' value='".$prod['ID_CarritoDetalle']."'></input>
  </div>
<br>
<hr style='border: none; height: 1px; background-color:black'>";


}

?>


</div>

   
</div>
<br></br>
<hr style="border: none; height: 1px; background-color:black">
<h4 style="font-size:20px; font-weight: bold; " >TOTAL </h4>
<input type='hidden' name='comprador' id='comprador' value='<?php echo $prod['FK_Comprador'] ?>'>
<input type='hidden' name='total' id='total' value='<?php echo $prod['total']?>'>

<?php if($resultado["total"] !=  0){

echo "<h4 style='font-size:20px; font-weight: bold; margin-left:700px;'>$ ".$resultado["total"]."</h4>";
}
else
{
  echo "<h4 style='font-size:20px; font-weight: bold; margin-left:700px;' >$ 0.00</h4>";
}
?>


  </div>
  </div>
      
      
      
      </div>
      <div class="modal-footer">

        <a href="MetodoPago.php?usu=<?php echo $data['ID_usuario'] ?>" type="button" name="metodopago" id="metodopago" class="btn btn-success" style="font-size:medium;" value="">Realizar Compra</a>

        <button type="button" class="btn btn-danger" data-dismiss="modal" style="font-size:medium;">Cerrar</button>
        </div>
    </div>
  </div>
</div>
</form>


<div style="margin-top:-40px; margin-left:1100px;">
            <h6 class="tucuenta" style="color:white; margin-left:0px;">Usuario: <?php echo $data["ID_usuario"] ?></h6>
            <h4 class="tucuenta" style="color:white; margin-left:0px;">Hola,<?php echo $data["nombre"] ?></h4>
            <div style="margin-left:100px; margin-top:-30px;">
          
            <?php echo "<img src='data:image/jpeg;base64," . base64_encode($data['Foto']) . "' alt='usuariofoto'  class='rounded-circle' style='max-width:50px; max-height:50px; width='50'; height='50';'>" ?>


            <!-- <img src="IMG/Imagen2.jpg" alt="Avatar" class="avatar"> -->
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="margin-left:1200px; font-size:15px;">
    <a class="dropdown-item" href="EditarPerfil.php" >Editar Perfil</a>
    <a type="button" class="dropdown-item"  onclick="Eliminar(<?php echo $data['ID_usuario'] ?>)" value="Eliminar Perfil"></a>
    <a class="dropdown-item" href="logout.php" >Cerrar Sesion</a>
</div>
</div>
  </div> 
            </ol>
          </nav>

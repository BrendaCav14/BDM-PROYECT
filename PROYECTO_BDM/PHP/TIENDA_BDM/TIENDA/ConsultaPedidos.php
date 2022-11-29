<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo  "<title>CONSULTAR PEDIDOS</title>"?>

    <link rel="stylesheet" href="Cuerpo.css">
    <link rel="stylesheet" href="ConsultaPedidos.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
   
    <?php include('bootstrap.php') ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
   

<script>

function BuscarPedidos() {

event.preventDefault();
            var exist = true;
            var exist2 = false;
            var cat=$('#Categoria').val();
            var fecha_inicio=$('#date').val(); 
            var fecha_fin=$('#date2').val(); 
            var comp=$('#comp').val();
            console.log(cat);
            console.log(fecha_inicio);
            console.log(fecha_fin);
            console.log(comp);
//envio a tablaj.php
jQuery.ajax({

            type:"POST",
            url:"ajax-consultarPedidos.php",
            data:'Categoria=' + cat +'&date='+ fecha_inicio +'&date2='+ fecha_fin +'&comp='+ comp,
                    success:function(data){
                      $("#resultado").html(data);
                     } 
  
        });

};
</script>



</head>
<body>

<div class="container">
<div class="main-body">

    <?php include('navbar.php') ?>

          <div style="background-color:white; width:1490px; height:900px; margin-left:-190px;">
        <br></br>
        <h1 style=" color:#D07118; font-weight: bolder; font-size:30px; margin-left:600px;">Pedidos Realizados</h1>
 
       <br></br>

       <br></br>
      
       <form method="POST" action="ConsultaPedidos.php?usu=<?php echo $data['ID_usuario']?>">
       <input type="hidden" id="comp" name="comp" value="<?php echo $data['ID_usuario']?>" > 
      <div class="InfoProducto" style=" margin-left:200px; margin-top:-100px;">
       <label for="producto" class="producto" style="font-size:20px; margin-top:-250px; ">Filtros de busqueda:</label>
       <select name="Categoria" id="Categoria" class="cat" style="font-size:20px; width:250px; margin-top:150px; margin-left:500px; ">
       <option value="nada">Elije una Categoria...</option>
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
      
       <br></br>
       <div style="margin-left:100px; margin-top:-20px;">
       <label for="producto" class="producto" style="font-size:20px;">Inicio:</label>
       <input type="date" id="date" name="date" value="2022-10-20" min="1990-01-01" max="2022-11-31"  style="font-size:20px;  width:200px;">
        </div>
       <br></br>
       <div style="margin-left:400px; margin-top:-68px;">
       <label for="producto" class="fin" style="font-size:20px;">Fin:</label>
       <input type="date" id="date2" name="date2" value="2022-11-24" min="1990-01-01" max="2022-11-31"  style="font-size:20px; width:200px;">
        </div>

       <input type="submit" id-="buscaPedidos" name="buscaPedidos" class="btn btn-success" style="width:130px; font-size:15px; margin-left:650px; margin-top:0px;" value="Buscar" 
       onclick="BuscarPedidos(this)">
       <br></br>
      
<?php
require("./BACKEND/Connection.php");
$com = $_GET['usu'];
$consulta= $pdo->prepare("CALL SP_MetodoPago('X',null,null,null,null,null,null,:com);");
$consulta->bindParam(":com", $com);
$consulta->execute();
$resultado = $consulta->fetch(PDO::FETCH_ASSOC);

if($resultado){
echo " 
<div style='width:430px; text-align:center; height:220px; background-color:#da9c9c; border-radius:5%; margin-left:850px; border:none; margin-top:-200px;'>
       <br>
       <h1 style='text-decoration: underline;'>Metodo de Pago</h1>
<br>
<h2>".$resultado['Nombre']."</h2>
<br></br>
<h4 style='margin-left:-80px;'>Numero de Tarjeta: ".$resultado['NumTarjeta']."</h4>
<br>
<h4 style='margin-left:150px;'>Fecha de Expiracion: ".$resultado['MesExp']." / ".$resultado['AñoExp']."</h4>
<h4 style='margin-left:150px;'>CVC:  ***</h4> 

</div>";

}
?>
      
       <br></br>
</form>

</div> 

<div class="consulta1" style="margin-left:100px; margin-top:10px; font-size:25px;">
 <label >CONSULTA DETALLADA</label>
       <br>
</div>


<div class="col-lg-11">
    <table class="table table-hover table-responsive" style="margin-left:10px; margin-top:20px; " >
      <thead class="thead-dark" style="font-size:13px;">
        <tr>
          
    <th style="width:220px;">Fecha</th>
    <th style="width:220px;">Hora</th>
    <th style="width:300px;">Categoria</th>
    <th style="width:1300px;">Producto</th>
    <th style="width:150px;">Calificacion</th>
    <th style="width:200px;">Precio</th>
    <th style="width:200px;">Subtotal</th>
    <th style="width:100px;">Existencia</th>
        </tr>
      </thead>
      <tbody id="resultado" style="font-size:13px; display: block; height:300px; overflow-y: auto;  overflow-x: hidden;">
<?php

require("./BACKEND/Connection.php");
$com = $_GET['usu'];
$consulta= $pdo->prepare("CALL SP_VentaDet('F',null,null,null,null,null,null,null,null,null,:com,null);");
$consulta->bindParam(":com", $com);
$consulta->execute();
$res = $consulta->fetchAll(PDO::FETCH_ASSOC);


foreach($res as $row){
  if($row['promedio'] == 5){
    echo "      <tr>
    <td style='width:220px;'>".$row['Fecha']."</td>
    <td style='width:150px;'>".$row['Hora']."</td>
    <td style='width:200px;'>".$row['Categoria']."</td>
    <td style='width:550px; max-lenght:100px; text-overflow: ellipsis; line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2;'>".$row['Producto']."</td>
    <td style='width:100px; color:yellow; font-size:20px;'>★★★★★</td>
    <td style='width:200px;'>".$row['Precio']."</td>
    <td style='width:200px;'>".$row['Subtotal']."</td>
    <td style='width:100px;'>".$row['Cantidad']."</td>

    </tr>";
}
if($row['promedio'] == 4){
  echo "      <tr>
  <td style='width:220px;'>".$row['Fecha']."</td>
  <td style='width:150px;'>".$row['Hora']."</td>
  <td style='width:200px;'>".$row['Categoria']."</td>
  <td style='width:550px; max-lenght:100px; text-overflow: ellipsis; line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2;'>".$row['Producto']."</td>
  <td style='width:100px; color:yellow; font-size:20px;'>★★★★</td>
  <td style='width:200px;'>".$row['Precio']."</td>
  <td style='width:200px;'>".$row['Subtotal']."</td>
  <td style='width:100px;'>".$row['Cantidad']."</td>

  </tr>";
  }
if($row['promedio'] == 3){
  echo "      <tr>
    <td style='width:220px;'>".$row['Fecha']."</td>
    <td style='width:150px;'>".$row['Hora']."</td>
    <td style='width:200px;'>".$row['Categoria']."</td>
    <td style='width:550px; max-lenght:100px; text-overflow: ellipsis; line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2;'>".$row['Producto']."</td>
    <td style='width:100px; color:yellow; font-size:20px;'>★★★</td>
    <td style='width:200px;'>".$row['Precio']."</td>
    <td style='width:200px;'>".$row['Subtotal']."</td>
    <td style='width:100px;'>".$row['Cantidad']."</td>

    </tr>";
    }
if($row['promedio'] == 2){
  echo "      <tr>
    <td style='width:220px;'>".$row['Fecha']."</td>
    <td style='width:150px;'>".$row['Hora']."</td>
    <td style='width:200px;'>".$row['Categoria']."</td>
    <td style='width:550px; max-lenght:100px; text-overflow: ellipsis; line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2;'>".$row['Producto']."</td>
    <td style='width:100px; color:yellow; font-size:20px;'>★★</td>
    <td style='width:200px;'>".$row['Precio']."</td>
    <td style='width:200px;'>".$row['Subtotal']."</td>
    <td style='width:100px;'>".$row['Cantidad']."</td>

    </tr>";
      }
if($row['promedio'] == 1){
  echo "      <tr>
  <td style='width:220px;'>".$row['Fecha']."</td>
  <td style='width:150px;'>".$row['Hora']."</td>
  <td style='width:200px;'>".$row['Categoria']."</td>
  <td style='width:550px; max-lenght:100px; text-overflow: ellipsis; line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2;'>".$row['Producto']."</td>
  <td style='width:100px; color:yellow; font-size:20px;'>★</td>
  <td style='width:200px;'>".$row['Precio']."</td>
  <td style='width:200px;'>".$row['Subtotal']."</td>
  <td style='width:100px;'>".$row['Cantidad']."</td>

  </tr>";
        }
}
?>

      </tbody>


    </table>

</div>


<div style="margin-left:850px; margin-top:100px;">
<a href="PaginaInicio.php?usu=<?php echo $data['ID_usuario']?>" type="button" class="btn btn-danger" style="width:100px; font-size:15px; margin-left:400px; margin-top:20px;">Regresar</a>
</div>
        
</div>
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
                    'error.',
                    'success'
                )

            }
            
        })
            
        }
    })

}


</script>


<!-- <script src="carrito.js"></script> -->
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo  "<title>MIS PRODUCTOS</title>"?>

    <link rel="stylesheet" href="Cuerpo.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">

    <?php include('bootstrap.php') ?>
    
</head>
<body>

<div class="container">
  
    <div class="main-body">

    <?php include('navbar.php') ?>

          <div style="background-color:white; width:1100px; height: 1000px; margin-left:5px; padding-top:30px; padding-left:30px; padding-right:30px; padding-bottom:30px;">
          <h1 style=" color:#D07118; font-weight: bolder; font-size:30px; margin-left:350px;">Mis Productos Agregados</h1>

 <br></br>


  <!-- CARDS -->         
  <div class="container">
  <div class="row" style="background-color:#5a55b9; border-radius: 5% ;  height: 800px; display: block; overflow-y: auto;  overflow-x: hidden;">


<div id ="prod" name="prod">


</div>

 
    </div>
</div>
  


</div>

<script src="misproductos.js"></script>
<!-- <script src="carrito.js"></script> -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
MostrarProductos();

function MostrarProductos(){
    fetch("mostrar-producto.php",{
        method: "POST"
    }).then(response => response.text()).then(response => {

        prod.innerHTML = response;
       
    })

}


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
            fetch("prod-eliminar.php", {
                 method: "POST",
                 body: id
            })
  
            .then(response => response.text()).then(response => {
                if(response == "ok"){
                    
                console.log(response);
                MostrarProductos();
  
                Swal.fire(
                    'Eliminado!',
                    'El producto a sido eliminado.',
                    'success'
                )
            }
            
        })
            
        }
    })
  
  }
  

</script>

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

</body>
</html>
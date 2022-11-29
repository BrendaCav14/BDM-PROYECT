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
    
</head>
<body>

<div class="container">
  
    <div class="main-body">

    <?php include('navbar.php') ?>


             
          <div style="background-color:white; width:1100px; height: 1000px; margin-left:5px; padding-top:30px; padding-left:30px; padding-right:30px; padding-bottom:30px;">
          
          <h1 style=" color:#D07118; font-weight: bolder; font-size:30px; margin-left:450px;">MIS LISTAS</h1>

 <br></br>

  <!-- CARDS -->         
  <div class="container">
  <div class="row" style="background-color: #b955b9; border-radius: 5% ;  height: 800px; display: block; overflow-y: auto;  overflow-x: hidden;">

  <div id ="lista" name="lista">


</div>


<script>
function EliminarLista(id){
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
            fetch("mislistas-eliminar.php", {
                 method: "POST",
                 body: id
            })

            .then(response => response.text()).then(response => {
                if(response == "ok"){
                    
                console.log(response);
                MostrarListas();

                Swal.fire(
                    'Lista Eliminada!',
                    'La wishlist a sido eliminada.',
                    'success'
                )
            }
            else{
                
            }
            
        })
            
        }
    })

}
</script>




<script src="mislistas.js"></script>
<script src="carrito.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</div>

</div>
        


</body>
</hmtl>
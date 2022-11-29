<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo  "<title>CREAR LISTAS</title>"?>

    <link rel="stylesheet" href="Cuerpo.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">

    <?php include('bootstrap.php') ?>
</head>
<body>

<div class="container">
<div class="main-body">

    <?php include('navbar.php') ?>



          <form method="post" enctype="multipart/form-data" id="formLista" name="formLista" style="background-color:white; width:1100px; height:600px; margin-left:5px;">
        <br>
        <h1 style=" color:#D07118; font-weight: bolder; font-size:30px; margin-left:430px;">Crear una Lista</h1>
       
       
       <br>
       <hr style="border: none; height: 1px; background-color:black">
       <br></br> 
       <input type="hidden" id="usuario" name="usuario" style="width:80px; font-size:20px; margin-left:30px;" autocomplete="off" value="<?php echo $data['ID_usuario']?>">

       <div class="InfoProducto" style=" margin-left:200px;">
       <div style="margin-top:-30px;">
       <label for="lista" class="lista" style="font-size:20px; margin-left:-90px; font-weight: bold; font-family:'Trirong', sans-serif;">Nombre:</label>
       <input type="text" id="lista" name="lista" class="form-control" style="width:400px; font-size:20px; margin-top:-30px;" placeholder="Nombre de la lista" autocomplete="off">
       </div>   
       <div style="margin-top:10px;">
       <label for="desc" class="desc" style="font-size:20px; margin-left:-120px; font-weight: bold; font-family:'Trirong', sans-serif;">Descripcion:</label>
       <input type="text" id="descripcion" name="descripcion" class="form-control" style="width:850px; font-size:20px; margin-top:-30px;" placeholder="Descripcion corta..." autocomplete="off">
      
    </div> 
       <br>
<label for="opcion" class="opcion" style="font-size:15px; font-weight: bold; font-family:'Trirong', sans-serif;">Elija una opcion para su lista</label>
<h5>Si desea que su lista Privada,sera una lista de compras personal</h5>
<h5>Si desea que su lista Publica,sera una wishlist que alguien mas pueda ver en su perfil</h5>

          <select name="select" id="select" class="opciones" style="font-size:15px; width:150px;">
          <option value="Publica" >Publica</option>
          <option value="Privada" >Privada</option>
          </select><br></br>
<br>
<img src="PRODUCTO/prod.jpg" alt="avatar" style="margin-left:-150px; width:200px;height:200px;background-color: black;border-color:black;border:5px;"><br></br>


 <div style="margin-left:50px; margin-top:-180px;">
 <label style="font-size:20px;">Imagen</label>
 <input type="file" class="form-control-file" style="font-size:15px;" name="foto" id="foto" accept=".png, .jpg, .jpeg">

   </div>



</div> 

<div style="margin-left:850px; margin-top:50px;">
<input type="submit" name="listas" id="listas" class="btn btn-success" style="width:200px; font-size:15px; margin-left:-200px;" value="Agregar Lista"></input>
<a type="button" href="PaginaInicio.php" class="btn btn-danger" style="width:100px; font-size:15px; margin-left:30px;">Cancelar</a>
</div>
<br></br>
<hr style="border: none; height: 1px; background-color:black">
</form>
   
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

if(isset($_POST['listas'])){

    require("./BACKEND/Connection.php");
    
        $nombrelista = $_POST['lista'];
        $desc = $_POST['descripcion'];
        $estado = $_POST['select'];
        $usuario = $_POST['usuario'];
    
            $tipoArchivo=$_FILES['foto']['type'];
            $nombreArchivo=$_FILES['foto']['name'];
            $tamArchivo=$_FILES['foto']['size'];
            $imagenSubida=fopen($_FILES['foto']['tmp_name'],'r');
            $binarioImagen=fread($imagenSubida,$tamArchivo);
    
           
            if(empty($nombrelista) && empty($desc) && empty($estado) && empty($usuario) && empty($_FILES) ){
    
            echo "<script> 
                Swal.fire({
                icon: 'error',
                title: 'Campos vacios!',
                text: 'Porfavor llena todos los campos',
                timer: 5000 // es ms (mili-segundos)
              })
              return false;
              </script>";
           

            }
            
            
        else{

            // print_r($_POST);
            // print_r($_FILES);
    
            $sql = "CALL SP_Lista('I',null,:nom, :desc, :img, :es, :usu);";
    
    $query=  $pdo->prepare($sql);                      
    $query->bindParam(":nom",$nombrelista);
    $query->bindParam(":desc",$desc);
    
    $query->bindParam(":img",$binarioImagen);
    $query->bindParam(":es",$estado);

    $query->bindParam(":usu",$usuario);
    
   
    $resultado = $query->execute(); // No hay resultados - insertar registro
        if($resultado)
        {
          $pdo = null;
          echo "<script> 
          Swal.fire(
          'Lista Agregada!',
          'Bien hecho.',
          'success'
           ) 
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
    
    
    }


?>



</body>
</html>
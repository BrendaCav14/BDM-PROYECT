<?php

require("./BACKEND/Connection.php");
// $servidor = "localhost";
// $sqldbname = "tienda";
// $user = "root";
// $pass = "";

// $con=mysqli_connect($servidor,$user,$pass,$sqldbname);

//     if (mysqli_connect_errno()) {
// echo "Failed to connect to MySQL: " . mysqli_connect_error();
//     }else{
         // echo "connection successfull!";
//     }


$consulta= $pdo->prepare("CALL SP_Categoria('S',null,null,null);");
$consulta->execute();
$resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);


// $resultado = mysqli_query($con,$consulta);

// $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

        //    <button type='button' class='btn btn-success' style='margin-top:10px; font-size:13px;' onclick=Editar(".$data['nombre_Cat'].")>Editar Datos</button>
        //    <button type='button' class='btn btn-danger'  style='margin-top:10px; font-size:13px;' onclick=Eliminar(".$data['nombre_Cat'].")>Eliminar</button>
        //    <td>".$data['descripcion']."</td>
        //    <td>".$data['FK_vendedor']."</td>

foreach($resultado as $data){
    echo "<tr>
           
           <td>".$data['nombre_Cat']."</td>
           <td>".$data['descripcion']."</td>
           <td>".$data['FK_vendedor']."</td>
      
        <td>
        <button type='button' class='btn btn-success' style='margin-top:10px; font-size:13px;' onclick=Editar(".$data['nombre_Cat'].",".$data['descripcion'].",".$data['FK_vendedor'].")>Editar Datos</button>
        <button type='button' class='btn btn-danger'  style='margin-top:10px; font-size:13px;' onclick=Eliminar(".$data['nombre_Cat'].")>Eliminar</button>

        </td>

    </tr>";
   

}

// mysqli_close($con);

?>
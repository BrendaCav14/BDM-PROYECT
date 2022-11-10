<?php

require("./BACKEND/Connection.php");


$consulta= $pdo->prepare("CALL SP_Categoria('S',null,null,null);");
$consulta->execute();
$resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);


foreach($resultado as $data){
    echo "<tr>
           
           <td>".$data['nombre_Cat']."</td>
           <td>".$data['descripcion']."</td>
           <td>".$data['FK_vendedor']."</td>
      
        <td>
     
        <button type='button' id='editar' name'editar' class='btn btn-success' style='margin-top:10px; font-size:13px;' onclick=EditarCat('".$data['nombre_Cat']."') >Editar Datos</button>
        <button type='button' class='btn btn-danger'  style='margin-top:10px; font-size:13px;' onclick=EliminarCat('".$data['nombre_Cat']."')>Eliminar</button>

        </td>

    </tr>
    
    
    ";
   

}



?>
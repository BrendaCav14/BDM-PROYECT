<?php

require("./BACKEND/Connection.php");


$consulta= $pdo->prepare("CALL SP_Categoria('S',null,null,null,null);");
$consulta->execute();
$resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);


foreach($resultado as $data){
    echo "<tr>
           <label hidden>".$data['ID_Cat']."</label>
           <td>".$data['nombre_Cat']."</td>
           <td>".$data['descripcion']."</td>
           <td>".$data['FK_vendedor']."</td>
      
        <td>
    
        <input type='button' id='editar' name'editar' class='btn btn-success' style='margin-top:10px; font-size:13px;' onclick=Editar('".$data['ID_Cat']."') value='Editar Datos'></input>
        <input type='button' class='btn btn-danger'  style='margin-top:10px; font-size:13px;' onclick=Eliminar('".$data['ID_Cat']."') value='Eliminar'></input>

        </td>

    </tr>
    
    
    ";
   

}



?>
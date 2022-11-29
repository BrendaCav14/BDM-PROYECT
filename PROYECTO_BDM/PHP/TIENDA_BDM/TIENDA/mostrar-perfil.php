<?php

session_start();
  include('./BACKEND/Connection.php');
          $id = $_SESSION["ID_usuario"];
          
          $stmt= $pdo->prepare("CALL SP_Usuario('X', :id,null,null,null,null,null,null,null,null,null,null,null,null,null, null); ");

          $stmt->bindParam(":id", $id);
          $stmt->execute();
          $data = $stmt->fetch(PDO::FETCH_ASSOC); //User data

    echo "<label for='usuario' class='formulario__label' style='margin-top:-200px; font-size: 20px;'>Usuario: ".$data['ID_usuario']."</label>
    <input type='hidden' id='usuario' name='usuario' class='form-control' style='font-size: 20px; width:130px; margin-left:100px; margin-top:-30px; height:30px;' autocomplete='off'  value=".$data['ID_usuario'].">
            
              <div style='margin-top:-20px; margin-left:300px; font-size:20px;''>
    <label for='fecha' style='margin-top:20px;'>Fecha de Ingreso:</label>
    <input type='text' id='ingreso' name='ingreso' class='form-control' style='font-size: 20px; width:130px; margin-left:165px; margin-top:-35px; height:30px;'' autocomplete='off'  value=".$data['FI'].">
       </div>
       <div style='margin-top: -50px;''>
    <label for='combo' class='combo' id='combo-cuenta'  style='font-size:20px; margin-top:30px; margin-left:10px;'>Cuenta:</label>
    <input type='text' id='cuenta' name='cuenta' class='form-control' style='font-size: 20px; width:130px; margin-left:100px; margin-top:-30px; height:30px;' autocomplete='off'  value=".$data['Cuenta'].">
    
    </div>
    <br>
    <div class='form_grupo' id='grupo_Apat'>
    <label class='form_label'>Nombre:</label>
    <input type='text' id='nombre' name='nombre' class='form-control' style='font-size: 20px; width:200px; height:30px;' autocomplete='off' value=".$data['nombre'].">
    
    </div>
    
    <div class='form_grupo' id='grupo_Amat' style='margin-top:20px; font-size: 20px;'>
    <label class='form_label'>Apellido Paterno:</label>
    <input type='text' id='appat' name='appat' class='form-control' style='font-size: 20px; width:200px; height:30px;' autocomplete='off' value=".$data['ApPat'].">
    
    </div>
    
    </div>
    <br></br>
    <div style='margin-left:350px; margin-top:-192px; font-size: 20px;'>
    
      <div class='form_grupo' id='grupo_Apat'>
      <label class='form_label'>Segundo Nombre:</label>
      <input type='text' id='nombre2' name='nombre2' class='form-control' style='font-size: 20px; width:200px; height:30px;' autocomplete='off' value=".$data['nombre2'].">
    
      </div>
      
      <div class='form_grupo' id='grupo_Amat' style='margin-top:20px; font-size: 20px;'>
      <label class='form_label'>Apellido Materno:</label>
      <input type='text' id='apmat' name='apmat' class='form-control' style='font-size: 20px; width:200px; height:30px;' autocomplete='off' value=".$data['ApMat'].">
    
      </div>
    
    </div>
    
    <br>
      <div   style='margin-top:-10px; margin-left:30px; font-size:20px;'>
      <label for='email' class='form_label'>Email:</label>
      <input type='text' id='email' name='email' class='form-control' style='font-size: 20px; width:400px; height:30px;' autocomplete='off' value=".$data['email'].">
    
      </div>
    
      <div class='form_grupo' id='grupo_contra' style='margin-top:10px; margin-left:30px; font-size:20px;'>
      <label for='contra' class='form_label'>Contraseña:</label>
      <input type='password' id='contra' name='contra' class='form-control' style='font-size: 20px; width:200px; height:30px;' autocomplete='off' value=".$data['contraseña'].">
    
      </div>
      <div style='margin-top:-30px; margin-left:300px; font-size:20px;'>
      <label for='fn'>Fecha de Nacimiento:</label>
      <input type='text' id='fn' name='fn' class='form-control' style='font-size: 20px; width:180px; height:30px; margin-left:210px; margin-top:-30px;' autocomplete='off'  value=".$data['FN'].">
      
       </div>
    <br>
    <div style='margin-left:-50px; margin-top:200px; font-size:20px;'>
    
    <br>
    <div style='margin-left:200px; margin-top:-250px; font-size:20px;'>
    <label for='combo' class='combo' style='font-size:20px;'>Rol:</label>
    <input type='text' id='roles' name='roles' class='form-control' style='font-size: 20px; width:150px; height:30px;' autocomplete='off' value=".$data['Rol'].">
    
    </div>
    
    <div style='margin-left:400px; margin-top:-65px; font-size:20px;'>
    <label for='combo' class='combo' style='font-size:20px;'>Genero:</label>
    <input type='text' id='gen' name='gen' class='form-control' style='font-size: 20px; width:150px; height:30px;' autocomplete='off' value=".$data['Genero'].">
    
    </div>
    
    </div>
    
    
    
    </div>
    
    <br>
    </br>
    <div style='margin-top:-180px; margin-left:100px;'>
                      <label for='imagen' class='imagen' style='margin-left:20px; margin-top:20px; font-size:20px;'>Imagen:   </label>
                     
    <img src='data:image/jpeg;base64,".base64_encode($data['Foto'])." ' name='avatar' id='avatar' alt='avatar' width='150' height='150'  style='margin-left:100px; width:150px; height:150px; background-color: black; border: 1px solid transparent; padding:3px; border-image:10 stretch; border-radius: 10%;'>
    
                      <input type='file' class='form-control-file' style='margin-left:-200px; margin-top:20px; width:500px; font-size:16px; text-overflow: ellipsis; line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 1; ' 
                      name='foto' id='upload' accept='.png, .jpg, .jpeg' onchange='readURL(this);'>
                      
    </div>
      
    </div>
    <input type='submit' id='editar' name='editar' class='btn btn-primary btn-block' style='margin-left:700px; margin-top:-200px; width:200px; font-size:15px;' value='Guardar Cambios'></input>
    <br>
    <a href='PaginaInicio.php' type='button' class='btn btn-danger' style='width:120px; font-size:15px; margin-left:800px; margin-top:80px;'>Regresar</a>
    
    
    
    ";


?>
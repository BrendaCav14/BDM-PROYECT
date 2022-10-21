<?php

header("Access-Control-Allow-Origin: http://localhost:5500");
header("Access-Control-Allow-Credentials: true");

include_once "./BACKEND/Connection.php";
session_start();

if($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['crud_req'] == "Registrarse"){

    signup($conn);
 
 }

if($_SERVER['REQUEST_METHOD'] == "POST" && !isset($_POST['crud_req']) ){

    logout($conn);
 
}

if($_SERVER['REQUEST_METHOD'] == "PATCH"){

    update($conn);
 
}

if($_SERVER['REQUEST_METHOD'] == "DELETE"){

    delete($conn);
 
}

if($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['crud_req'] == "Entrar"){

    login($conn);
 
 }


function signup($conn){

    if(isset($_POST['Registrarse'])){
        $name = $_POST['nombre'];
        $name2 = $_POST['nombre2'];
        $ApPat = $_POST['apat'];
        $ApMat = $_POST['amat'];
        $email = $_POST['email'];
        $user = $_POST['usuario'];
        $pwd = $_POST['contra'];

        if(empty($UserName) || empty($pswrd) || empty($Email) || empty($FName) || empty($SName) || empty($ApPat) || empty($ApMat))
    {
        http_response_code(400);
        echo "Todos los campos deben ser llenados";
        exit();
    }

    if(! filter_var($Email, FILTER_VALIDATE_EMAIL))
    {
        http_response_code(400);
        echo "Correo Electronico Invalido";
        exit();
    }
        
        $sql = "insert into usuario(nombre,nombre2,ApPat,ApMat,email,usuario,contraseña) values('$name','$name2','$ApPat','$ApMat','$email','$user','$pwd')";
        
        $result = mysqli_query($con,$sql);
        
        if($result)
        {
          echo "Usuario agregado correctamente!";
        }
        
        else{
          die(mysqli_error($con));
        }
        
        }

}


function login($conn){

    $UserName = $_POST['user_name'];
    $pwd = $_POST['user_password'];

    if(empty($UserName) || empty($pwd))
    {
        sendReply(400,"Todos los campos deben ser llenados");
    }
    
    $sql = "select contraseña from usuario where usuario=?;";

    $stmt = $conn->stmt_init();
    if(!$stmt->prepare($sql))
        sendReply(400,"Algo salio mal,Intenta nuevamente");
    $stmt->bind_param('s', $UserName);
    $stmt->execute();
    $result = $stmt->get_result();
 
    if(mysqli_num_rows($result) > 0)
    {
        //----........
        $data = $result->fetch_assoc();
        $isValid = password_verify($pwd,$data['contraseña']);
       
        if(!$isValid)
            sendReply(400,"QUE PASAAAAAAAAA??");

        $_SESSION['user'] = $UserName;
        sendReply(200,"BIEVENIDO A SU CUENTA  ".$_SESSION['user']);
       
    }
    else{
        sendReply(400,"usuario y contraseña invalidos");
    }
}

function logout($conn){

    if (!isset($_COOKIE['user'])) {
        echo "You are not logged in!!!";
    }
    unset($_SESSION['user']);
    session_destroy();
    sendReply(200,"Cerraste Sesion");
}


function update($conn){}

function delete($conn){}


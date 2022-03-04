<?php
session_start();
//conect
include 'conexao_db.php';

//SELECT 
$cmd  = $pdo->prepare("SELECT * FROM user_nlhost");
$cmd->execute();

while ($result = $cmd->fetch()) {
    $nomeDb = $result['nome'];
    $emailDb = $result['email'];
    $senhaDb = $result['senha'];
}
if(isset($_POST['email'])){

    //var config
    $password = addslashes($_POST['password']);
    $email = addslashes($_POST['email']);

    if($emailDb == $email && $senhaDb == password_verify($password, $senhaDb)){
        $_SESSION['email'] = $email;
        echo"Logged";
    }else{
        echo"Invalid data";
    }
}

?>
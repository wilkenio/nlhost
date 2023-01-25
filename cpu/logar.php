<?php
session_start();
//conect
include 'conexao_db.php';

if(isset($_POST['email'])){
  //valores do inpunt
  $password = addslashes($_POST['password']);
  $email = addslashes($_POST['email']);

  //SELECT PARA PEGAR AS SENHAS DO DB
  $sql = "SELECT * FROM user_nlhost WHERE email='$email'";
  $result = $conn->query($sql) or die ($conn->error);

  $total = $result->fetch_assoc();
  if(!$total == null){
    //echo $total['senha'];
    if(password_verify($password, $total['senha'])){
      $_SESSION['email'] = $email;
      $_SESSION['id'] = $total['id'];
      echo "Logged";

    }else{
      echo"Invalid data";
    }
  }else{
    echo"Invalid data";
  }


 

  //DESCRIPTOGRAFANDO E VERIFICANDO SE A SENHA ESTAR CERTA
/*if($senhaDb == password_verify($password, $senhaDb)){


  //SELECT VERIFICANDO SE O EMAIL ESTAR CERTO
  $sql = "SELECT * FROM user_nlhost WHERE email='$email' ";
  $result = $conn->query($sql) or die ("falha na execuçao sql");
  $quantidade= $result->num_rows;

  if($quantidade == 1){
   
    $_SESSION['email'] = $email;
   // $_SESSION['id'] = $id;
    echo "Logged";
  }else{
    echo"Invalid data";
  }
  }else{
    echo"Invalid data";
  } 
}*/
}

?>
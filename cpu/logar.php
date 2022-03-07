<?php
session_start();
//conect
include 'conexao_db.php';

//SELECT 
$sql = "SELECT * FROM user_nlhost";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $emailDb = $row["email"];
    $senhaDb = $row["senha"];
  }
} else {
  echo "0 results";
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
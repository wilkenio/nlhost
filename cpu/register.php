<?php
session_start();

include 'conexao_db.php';

//var config

//$dateregister = date('d/m/Y');

if (isset($_POST['name'])) {

     $name = addslashes($_POST['name']);
     $phone = addslashes($_POST['phone']);
     $email = addslashes($_POST['email']);
     $country = addslashes($_POST['country']);
     $city = addslashes($_POST['city']);
     $password = addslashes($_POST['passwordUser']);

     //CRIPTOGRAFIA (password)
     $senha = password_hash($password, PASSWORD_DEFAULT);
     
     //verificando se os campos estão preenchidos
     if (!empty($name) and !empty($phone) and !empty($email) and !empty($country) and !empty($city) and !empty($password)) {
         
          //SELECT 
          $cmd  = $pdo->prepare("SELECT * FROM user_nlhost");
          $cmd->execute();

          while ($result = $cmd->fetch()) {
               $nomeDb = $result['nome'];
               $emailDb = $result['email'];
          }

          //verificando erros de igualdade nos dados
          if ($name == $nomeDb) {
               echo ("Name already registered");
          } elseif ($email == $emailDb) {
               echo ("E-mail already registered");
          } else {
               $_SESSION['email'] = $email;
               echo ("cadastrado");
                $pdo->query("INSERT INTO user_nlhost (nome, email, senha, phone, country, city, registrationdate) VALUES ('$name', '$email', '$senha','$phone','$country', '$city','$dateregister') ");
              
          }  
     }else{echo"Some field is empty";}
}



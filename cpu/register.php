<?php
session_start();

include 'conexao_db.php';

//var config

$dateregister = date('d/m/Y');

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
      
      $sql = "SELECT * FROM user_nlhost WHERE email='$email'";
      $result = $conn->query($sql) or die ("falha na execuçao sql");
      $quantidade= $result->num_rows;

      if($quantidade > 0){
        echo "E-mail already registered";
      }else{
        
      
        $sql ="INSERT INTO user_nlhost (nome, email, senha, phone, country, city, registrationdate, nomeProduto,valorProduto,descricaoProduto) VALUES ('$name', '$email', '$senha','$phone','$country', '$city','$dateregister', '','','' ) ";
        if ($conn->query($sql) === TRUE) {
          $_SESSION['email'] = $email;
          $sql = "SELECT * FROM user_nlhost WHERE email='$email'";
          $result = $conn->query($sql) or die ($conn->error);
          $total = $result->fetch_assoc();
          $_SESSION['id'] = $total['id'];

          echo "cadastrado";
         
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();   
      }
          } 
     }else{echo"Some field is empty";}




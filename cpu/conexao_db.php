<?php 

//config database
$localhost = "localhost";
$user = "root";
$pass = "lojavirtual!1";
$banco = "nlhost_db";

try{
//conect database (PDO)
$pdo = new PDO("mysql:dbname=".$banco."; host=".$localhost, $user, $pass);
//$pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch( PDOException $e){
    echo"erro com o db". $e->getMessage();
}catch( Exception $e){
    echo"erro generico". $e->getMessage();
}


?>
<?php 
session_start();
//conect
include 'conexao_db.php';

if(isset($_POST['nomeProduto'])){
    $nomeProduto = addslashes($_POST['nomeProduto']);
    $valorProduto = addslashes($_POST['valorProduto']);
    $descricaoProduto = addslashes($_POST['descricaoProduto']);

    $id = $_SESSION['id'] ;


$sql = "UPDATE user_nlhost SET nomeProduto='$nomeProduto', valorProduto='$valorProduto', descricaoProduto='$descricaoProduto' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
  echo "successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
}
?>
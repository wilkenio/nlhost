<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/carrinho.css">
	<title>Cart</title>
</head>

<body>
<?php 

if(!isset($_SESSION['email'])){
    header('Location:cadastro.php');
}
?>
  <?php include 'menu.php'; include 'cpu/conexao_db.php';
  
  $id = $_SESSION['id'];
  $sql = "SELECT * FROM user_nlhost WHERE id='$id'";
  $result = $conn->query($sql) or die ($conn->error);

  ?>
    <!--capaprincipal-->
    <section id="inicio">
        <div id="textos">
            <h1>  <br> <span>Cart</span></h1>
        </div>
    </section>

<section id="carrinho">
    <div id="produto">
        <?php while($dado = $result->fetch_array()) { ?>
        <div id="nomeproduto"><?php echo $dado['nomeProduto']; ?></div>
        <div id="valor">Quantidade:<input value="1" id="qtdinpunt" oninput="total()"   type="number"></div>
        <div id="descricao"><?php echo $dado['descricaoProduto']; ?></div>

    </div>
    <div  id="produto">
        <div id="to"><h2>Total: €<span id="total"> <?php $valorProduto = $dado['valorProduto']; echo"<script>var valorProduto = $valorProduto</script> " ?></span></h2></div>   
        <button id="end">Finalize purchase</button>
    </div>
    <?php } ?>
</section>

<script> 
    function total(){
        var qtd = document.querySelector("#qtdinpunt").value
        var total = valorProduto *qtd
        document.querySelector("#total").innerHTML= " "+total
    }
//funcao pra contar total
total();

</script>
<!--js (opcional)--->
<script src="js/js_1.js"></script>
 <!--jquery-->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
   <!--icones (fontawesome)-->
   <script src="https://kit.fontawesome.com/210182064c.js" crossorigin="anonymous"></script>
</body>

</html>
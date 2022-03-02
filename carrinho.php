<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/carrinho.css">
	<title>Carrinho</title>
</head>

<body>
	 <!--barranav-->
     <?php include 'menu.php'; ?>

    <!--capaprincipal-->
    <section id="inicio">
        <div id="textos">
            <h1>  <br> <span>Carrinho</span></h1>
        </div>
    </section>

<section id="carrinho">
    <div id="produto">
        <div id="nomeproduto"></div>
        <div id="valor"></div>
        <div id="descricao"></div>
      
    </div>
    <div  id="produto"><h2>Total: $<span id="total"></span></h2></div>
</section>

<script> 
    var nomeProduto = window.localStorage.getItem("nomeProduto")
    var valorProduto = window.localStorage.getItem("valorProduto")
    var descricao = window.localStorage.getItem("descricao")
if(!nomeProduto == "" || null){
	document.querySelector("#nomeproduto").innerHTML= nomeProduto /*`<div id="qtd">Quantidade: <input value="1"  type="number"></div>`*/
    document.querySelector("#descricao").innerHTML= descricao
    document.querySelector("#valor").innerHTML= `<div id="qtd">Quantidade: <input value="1" id="qtdinpunt" oninput="total()"   type="number"></div>`/* + "Valor unitário"+ "R$: " +"<b>" + valorProduto +"</b>"*/
}else{
    document.querySelector("#nomeproduto").innerHTML= "Você não adicionou nenhum produto ao carrinho :/"
}
    function total(){
        var qtd = document.querySelector("#qtdinpunt").value
        var total = valorProduto *qtd
        document.querySelector("#total").innerHTML= " "+total
    }
//funcao pra contar total
total();

</script>
 <!--jquery-->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
   <!--icones (fontawesome)-->
   <script src="https://kit.fontawesome.com/210182064c.js" crossorigin="anonymous"></script>
</body>

</html>
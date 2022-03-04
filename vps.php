<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/planos.css">
    <title>Vps</title>
    <!--jquery-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
  
</head>

<body>
    <!--barranav-->
     <?php include 'menu.php'; ?>

    <!--capaprincipal-->
    <section id="inicio">
        <div id="textos">
            <h1>Quality  <br> <span>vps</span></h1>
        </div>
    </section>

    <section id="planos"></section>
   <section id="carrinho">
       <div id="carrinho-1"></div>
       <div id="carrinho-2"></div>
       <div id="carrinho-3"></div>
   </section>
   <style>
    #inicio{
        background-image: url("img/vps fundo.png");
        background-position-y:100%;
    }
</style>
     <!-- JavaScript (Opcional) -->
     <script src="js/js_1.js"></script>
     <script src="js/config/vps.js"></script>
    <!--icones (fontawesome)-->
    <script src="https://kit.fontawesome.com/210182064c.js" crossorigin="anonymous"></script>
</body>
</html>
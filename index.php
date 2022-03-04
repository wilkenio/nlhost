<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/index.css">

    <!-- Bootstrap CSS --
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->

    <title>Home</title>
  </head>
  <body>
    <!--barranav-->
<?php include 'menu.php'; ?>

    <!--capaprincipal-->
    <section id="inicio">
        <div id="textos">
            <h1>Hosting for <br> <span>Games</span></h1>
            <h2>Start your project with game - optimized servers and resources</h2>
        </div>
    </section>

 <!--Cards-->
 <section id="cards">
     <div class="card" id="card-1"><img src="img/vps.png" alt=""><h3>Vps</h3><a href="vps.php"><button>See plans</button></a></div>
     <div class="card" id="card-2"><img src="img/fiveM.png" alt=""><h3>FiveM</h3><a href="fivem.php"><button>See plans</button></a></div>
     <div class="card" id="card-3"><img src="img/rust.png" alt=""><h3>Rust</h3><a href="rust.php"><button>See plans</button></a></div>
     <div class="card" id="card-4"><img src="img/minecraft.png" alt=""><h3>Minecraft</h3><a href="minecraft.php"><button>See plans</button></a></div>
 </section>

<!--Planos--
<section id="planos">
    <div class="plano" id="plano-1"><img src="img/vps.png" alt=""><h1><span> Vps Gamer</span></h1><h4>A partir de</h4><h1>R$100/mês</h1><a href="plano-1.php"><button>Ver planos</button></a></div>
    <div class="plano" id="plano-1"><img src="img/vps.png" alt=""><h1><span> Vps Gamer</span></h1><h4>A partir de</h4><h1>R$100/mês</h1><button>Ver planos</button></a></div>
    <div class="plano" id="plano-1"><img src="img/vps.png" alt=""><h1><span> Vps Gamer</span></h1><h4>A partir de</h4><h1>R$100/mês</h1><button>Ver planos</button></a></div>
</section>-->

<!--qualidade-->
<section id="qualidade">
    <h1>Benchmark</h1>
    <div class="qualidades" id="qualidade-1"><img src="img/grafico-1.png" alt=""><img src="img/grafico-2.png" alt=""></div>
    <div class="qualidades" id="qualidade-2"><h3>Nossos servidores atualizados com CPUs de linha ZEN3 da plataforma AMD oferecem um ótimo desempenho de singlecore, extremamente importante para games. Contando com processadores AMD Ryzen 7 5800X, nossos servidores são capazes de registrar uma pontuação de até 7380 por único núcleo no Geekbench4. Outro fator importante é que não fazemos overselling, assim você sempre terá o máximo desempenho do hardware.</h3></div>
</section>
<!--section 3-->
<section id="textos-complementares">
    <div id="textos-1"><h1>Processador projetado para jogos</h1> <h6>Todos os nossos servidores são projetados para jogos. O hardware é projetado para extrair o melhor desempenho de servidores de jogos em geral.
        Confiando nos processadores AMD Ryzen baseados na arquitetura ZEN3, nós somos capazes de oferecer os melhores desempenhos para games, a maioria deles precisa de alto poder de singlecore.
        A arquitetura ZEN3 foi projetada para tarefas de gerenciamento como manipulação de imagens e vídeos, ideal para serviços de streaming e servidores de jogos.</h6></div>
    <div id="textos-2"><img src="img/processador.png" alt=""></div>
</section>
<!--footer-->
<footer>
    <div id="footer-logo"><img src="img/logo.png" alt=""></div> <h6> Copyright ©2022 - NL hospedagens</h6>
  
</footer>
    <!--jquery-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
     <!--icones (fontawesome)-->
     <script src="https://kit.fontawesome.com/210182064c.js" crossorigin="anonymous"></script>
    <!-- JavaScript (Opcional) -->
    <script src="js/js_1.js"></script>
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
 <!--barranav-->
 <nav>
        <i onclick="menu_mobile()" id="icon-burgue" class="fas fa-align-left"></i>
        <ul class="ul">
            <div onclick="menu_mobile_stop()" id="icon-x">X</div>
            <img class="logo" src="img/logo.png" alt="">

            <a href="index.php">
                <li onclick="fecha()">Ínicio</li>
            </a>
            <a  href="index.php?#cards">
                <li onclick="fecha()">Serviços</li>
            </a>
            <a href="index.php?#planos">
                <li onclick="fecha()">Planos</li>
            </a>
            <a href="index.php?#qualidade">
                <li onclick="fecha()">Skills</li>
            </a>
            
            <a href="cadastro.php">
                <li id="cadastre-se" onclick="fecha()">Cadastre-se</li>
            </a>
            <a href="login.php">
                <li id="login" onclick="fecha()">Login</li>
            </a>
            <a href="carrinho.php">
                <li onclick="fecha()"><i class="fa fa-shopping-cart"></i><div id="car-count">1</div></li>
            </a>
        </ul>
        </ul>
    </nav>
<script>
      var nomeProduto = window.localStorage.getItem("nomeProduto")
    if(!nomeProduto == "" || null){
        document.querySelector("#car-count").style.display="block"
    }
</script>
    <style>
        /***FONTS PERSONALIZADAS***/
@font-face {
    font-family: R01;
    src: url(fonts/roboto/Roboto-01.ttf);
}
@font-face {
    font-family: M01;
    src: url(fonts/mont/static/Montserrat-Light.ttf);
}

@font-face {
    font-family: op;
    src: url(fonts/opensans/static/OpenSans/OpenSans-Light.ttf);
}

@font-face {
    font-family: R03;
    src: url(fonts/roboto/Roboto-03.ttf);
}
@font-face {
    font-family: R05;
    src: url(fonts/roboto/Roboto-05.ttf);
}

@font-face {
    font-family: RUS;
    src: url(fonts/RussoOne-Regular.ttf);
}

@font-face {
    font-family: RLW;
    src: url(fonts/releway/static/Raleway-Thin.ttf);
}

/*MENU**/
ul{ 
    background-color: rgba(114, 83, 185, 0);
    list-style: none;
    display: flex;
    flex-direction:row;
    transition: 0.7s;
    /*box-shadow: 2px 2px 2px rgba(250, 250, 250, 0.26);*/
    position: fixed;
    top: 0;
    z-index: 9;
}

li{
    font-family:R05;
    padding: 5px;
    margin-left: 70px;
    margin-top: 40px;
    color: rgb(255, 255, 255);
    transition: 0.5s;
    font-size: 1.3vw;
}

li:hover{
    color: #FFBD59;
}
/*coloco os 2 icones com o display none. o ||| e X*/
#icon-burgue{
    display: none;
}
#icon-x{
    display: none;
    font-family: R05;
}
.logo{
    width: 4%;
    height: 4%;
    margin: 2.2%;
    border-radius: 50px;
    border: 2px white solid;
}
#cadastre-se{
    border-bottom: solid #FFBD59 2px;
}
#login{
    background-color: #FFBD59;
    border: 2px solid #FFBD59;
    border-radius: 15px;
    padding-left: 20px;
    padding-right: 20px;
}
#login:hover{
    background-color: #ffbd5900;
    border: 2px solid #FFBD59;
}
#car-count{
    background-color: red;
    text-align: center;
    padding: 5px;
    margin-top: -2%;
    margin-left: 2%;
    border-radius: 50px;
    display: none;
}
@media screen and (max-width:800px) {
    nav{
        background-color: rgba(57, 26, 107, 0.027);
        height: 55px;
        position: absolute;
        background-color: #300a6100;
        width: 100%;
    }
    /*modifico o ul e outros para se adequar ao mobile*/
    ul{
        /*background-color: rgb(57, 26, 107);*/
        background:#1A063A;
        height: 100%;
        position: fixed;
        width: 100%;
        flex-direction:column;
        text-align: center;
        justify-content:flex-start;
        transition: 1s;
        right:100%;
        overflow: scroll;
    }

    li{
        padding: 5%;
        font-size: 19px;
        margin-left: 0;
        margin-top: 0;
    }
    #icon-burgue{
        display: block;
        color: white;
        font-size: 30px;
        padding: 11px;
    }
    #icon-x{
        color: white;
        font-size: 30px;
        padding: 0;
        z-index: 9;
        margin-left: 1%;
        margin-top: 4%;
    }
    .logo{
        width: 40%;
        height: auto;
        margin-left: 30%;
        border-radius: 100px;
        margin-bottom: 20%;
    }
    #cadastre-se{
        border-bottom: none;
    }
    #login{
        padding: 5px;
    }
    #car-count{
        width: 7%;
        margin-left: 46%;
        margin-top: 3%;
    }
}
    </style>
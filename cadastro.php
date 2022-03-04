<?php 
 session_start();
 
if(isset($_SESSION['email'])){
    header('location:carrinho.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/cadastro.css">
    <title>Login</title>
</head>

<body>
    <div id="alerta"></div>

    <section id="container">
        <div id="container-1">
            <div id="img"><img src="img/imgcadastro.png" alt=""></div>
        </div>

        <div id="container-2">
            <form  >
                <img src="img/logo.png" alt="">
                <!-- <h1>Login</h1>--->
                <div class="mb-3">
                    <input type="name" required name="name" placeholder="Write your full name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <input type="number" required name="phone" placeholder="Write your phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <input type="email" required name="email" placeholder="Write your email" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <input type="text" required name="country" placeholder="Write your country" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <input type="name" required name="city" placeholder="Write your city or province" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <input type="password" required name="passwordUser" placeholder="Write your password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                 <input class="btn btn-primary" type="submit" onclick="cadastrar(); return false;">            
                <div id="emailHelp" class="form-text">Do you have an account <a href="login.php">Login</a></div>
            </form>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.3.1.js" ></script>
    <!--<script src="https://code.jquery.com/jquery-3.5.1.js"></script>-->
<script>
    function cadastrar(){

         var namee = document.getElementsByName("name")[0].value;
         var phonee = document.getElementsByName("phone")[0].value;
         var emaill = document.getElementsByName("email")[0].value;
         var countryy = document.getElementsByName("country")[0].value;
         var cityy = document.getElementsByName("city")[0].value;
         var passwordUserr = document.getElementsByName("passwordUser")[0].value;

     $.ajax({
         type: "POST",
         url: "cpu/register.php",
     data: { name: namee, phone:phonee, email:emaill, country:countryy, city:cityy, passwordUser:passwordUserr},
         dataType: "text",
         success: function (response) {

            //EXIBINDO MENSAGENS DE ERRO
             if(response.match("Name already registered")){
                var alert = document.querySelector('#alerta'); alert.style.display='block'; alert.innerHTML=response; 
                setTimeout(function(){
                    alert.style.display='none';
                },8000);
             }else if(response.match("E-mail already registered")){
                var alert = document.querySelector('#alerta'); alert.style.display='block'; alert.innerHTML=response; 
                setTimeout(function(){
                    alert.style.display='none';
                },8000);
             }else if(response.match("cadastrado")){
                window.location.href = "carrinho.php";
             }else if(response.match("Some field is empty")){
                var alert = document.querySelector('#alerta'); alert.style.display='block'; alert.innerHTML=response; 
                setTimeout(function(){
                    alert.style.display='none';
                },8000);
             }
         }
         
     });
    }
</script>
</body>

</html>
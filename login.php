<?php session_start(); ?>
<?php 
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
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>

<body>
<div id="alerta"></div>
  <div id="container">
        <form >
            <img src="img/logo.png" alt="">
           <!-- <h1>Login</h1>--->
            <div class="mb-3">
                <input name="email" type="email" placeholder="Write your email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <input name="password" type="password" placeholder="Write your password" class="form-control" id="exampleInputPassword1">
            </div>
            <inpunt onclick="logar(); return false;" name="logar" type="submit" class="btn btn-primary">Submit</inpunt>
            <div id="emailHelp" class="form-text">you not be connected?  <a href="cadastro.php">record</a></div>
        </form>
        </div>
            <!---jquery-->
    <script src="https://code.jquery.com/jquery-3.3.1.js" ></script>
        <script>
    function logar(){

         var emaill = document.getElementsByName("email")[0].value;
         var passwordd = document.getElementsByName("password")[0].value;

     $.ajax({
         type: "POST",
         url: "cpu/logar.php",
     data: { email: emaill, password:passwordd},
         dataType: "text",
         success: function (response) {
            //EXIBINDO MENSAGENS DE ERRO
             if(response.match("Logged")){
                window.location.href = "carrinho.php";
             }else if(response.match("Invalid data")){
                var alert = document.querySelector('#alerta'); alert.style.display='block'; alert.innerHTML=response; 
                setTimeout(function(){
                    alert.style.display='none';
                },3000);
             }
         }
         
     });
    }
</script>
</body>

</html>
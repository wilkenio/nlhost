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
    <section id="container">
        <div id="container-1">
            <div id="img"><img src="img/imgcadastro.png" alt=""></div>
        </div>
        <div id="container-2">
            <form>
                <img src="img/logo.png" alt="">
                <!-- <h1>Login</h1>--->
                <div class="mb-3">
                    <input type="email" placeholder="Digite seu nome completo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <input type="number" placeholder="Digite seu telefone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <input type="email" placeholder="Digite seu email" class="form-control" id="exampleInputPassword1">
                </div>
               
                <select class="form-select" aria-label="Default select example">
                    <option selected>Selecione se estado:</option>
                    <option value="1">De outro país</option>
                    <option value="1">AC</option>
                    <option value="2">AL</option>
                    <option value="3">AP</option>
                    <option value="3">AM</option>
                    <option value="3">BA</option>
                    <option value="3">CE</option>
                    <option value="3">DF</option>
                    <option value="3">ES</option>
                    <option value="3">GO</option>
                    <option value="3">MA</option>
                    <option value="3">MT</option>
                    <option value="3">MS</option>
                    <option value="3">MG</option>
                    <option value="3">PA</option>
                    <option value="3">PB</option>
                    <option value="3">PR</option>
                    <option value="3">PE</option>
                    <option value="3">PI</option>
                    <option value="3">Rj</option>
                    <option value="3">RN</option>
                    <option value="3">RS</option>
                    <option value="3">RO</option>
                    <option value="3">RR</option>
                    <option value="3">SC</option>
                    <option value="3">SP</option>
                    <option value="3">SE</option>
                    <option value="3">TO</option>
                </select>
                <div class="mb-3">
                    <input type="name" placeholder="Digite sua Cidade"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <input type="password" placeholder="Digite sua senha" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
                <div id="emailHelp" class="form-text">Já possuí conta? <a href="login.php">Login</a></div>
            </form>
        </div>
    </section>
</body>

</html>
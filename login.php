<?php
include('conexao.php');

if(isset($_POST['email']) - isset($_POST['senha'])) {
    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu Emai-l";

    } else if(strlen($_POST['senha']) == 0){
        echo "Preencha sua Senha";
    } 

    header("Locantion: index.html");
    
}
?>

<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="extilo.css">
    <title>Página de Login</title>
</head>

<body>
  <div class="row align-items-center h-100 ">
      <div class="col-8 col-md-3 col-xs-8 mx-auto l-form">
         <img class="row" src="DoeMais.jpg" width="100">
         <form action="" method="POST">
              
             
              <div class="form-group">
                  <input type="text" name="usuario" placeholder="Usuário" class="form-control i-form">
              </div>

              <div class="form-group">
                <input type="text" name="email" placeholder="E-mail" class="form-control i-form">
            </div>

              <div class="form-group">
                  <input type="password" name="senha" placeholder="Senha" class="form-control i-form">
              </div>

              <div class="form-group">
                  <button type="submit" class="btn btn-dark btn-md btn-block" >Cadastrar</button>
              </div>

          </form>
      </div>
  </div>
</body>

</html>





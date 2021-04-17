<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <link rel="stylesheet" href="../../../../public/css/login.css">

</head>

<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
          <!-- Tabs Titles -->
          <h2 class="active"> Login </h2>
          <?php
          if(isset($_SESSION['nao_autenticado'])):
          ?>

          <h4 class="erro">Usuário ou senha inválidos.</h4>

          <?php
          endif;
          unset($_SESSION['nao_autenticado']);
          ?>
      
          <!-- Login Form -->
          <form action="/app/controllers/login.php" method="POST">
            <input type="text" id="login" class="fadeIn.second" name="login" placeholder="Usuário">
            <input type="password" id="password" class="fadeIn.third" name="senha" placeholder="Senha" maxlength="8">
            <input type="submit" class="fadeIn.fourth" value="Entrar">
          </form>
      
          <!-- Register -->
          <div id="formFooter">
            <a class="underlineHover" href="/app/views/templates/auth/cadastro.php">Ainda não tem uma conta? Cadastre-se!</a>
          </div>
      
        </div>
      </div>
</body>

</html>
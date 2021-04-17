<?php
session_start();
?>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>

    <link rel="stylesheet" href="../../../../public/css/login.css">

</head>

<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">''
          <!-- Tabs Titles -->
          <h2 class="active"> Cadastro </h2>

          <?php
          if(isset($_SESSION['status_cadastro'])):
          ?>
          <p class="sucesso">Cadastro efetuado com sucesso! Faça login informando o seu usuário e senha <a href="/app/views/templates/html/index.php"> aqui</a>.</p>
          <?php
          endif;
          unset($_SESSION['status_cadastro']);
          ?>
          <?php
          if (isset($_SESSION['usuario_existe'])): 
          ?>
          <p class="erro">O usuário escolhido já existe. Informe um novo e tente novamente.</p>
          <?php
          endif;
          unset($_SESSION['usuario_existe']);
          ?>
          <!-- Register Form -->
          <form action="/app/controllers/cadastrar.php" method="POST">
            <input type="text" id="nome" class="fadeIn.second" name="nome" placeholder="Nome">
            <input type="text" id="login" class="fadeIn.third" name="login" placeholder="Usuário">
            <input type="text" id="telefone" class="fadeIn.fourth" name="telefone" placeholder="Telefone" maxlength="11">
            <input type="password" id="senha" class="fadeIn.fifth" name="senha" placeholder="Senha" maxlength="8">
            <input type="submit" class="fadeIn.sixth" value="Cadastrar">
          </form>
      
          <!-- Login -->
          <div id="formFooter">
            <a class="underlineHover" href="/app/views/templates/html/index.php">Já tem uma conta? Faça login aqui!</a>
          </div>
      
        </div>
      </div>
</body>

</html>
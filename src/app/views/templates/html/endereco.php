
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../../public/css/style.css">
    <link rel="stylesheet" href="../../../../public/css/login.css">
    <title>Projeto</title>
</head>
<body style="background-color: #27b422">
    <!--  BACKGROUND  -->
    <div class="wrapper fadeInDown">
        <div id="formContent">
        	<section>
                <form method="POST" action="/endereco/cadastrar">
                <input type="text" name="logradouro" id="login" placeholder="Logradouro">
                <input type="text" name="numero" id="login" placeholder="Número">
                <input type="text" name="complemento" id="login" placeholder="Complemento">
                <input type="text" name="bairro" id="login" placeholder="Bairro">
                <input type="text" name="cidade" id="login" placeholder="Cidade">
                <input type="submit" value="Confirmar">
                </form>
            </section>
        </div>
    </div>

</body>
</html>

<?php
session_start();
include('../../../helpers/verifica_login.php');
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../../public/css/style.css">
    <title>Projeto</title>
</head>
<body>
    <!--  BACKGROUND  -->
	<div class="background" action="/usuario/painel">
		
		<!-- CART -->
		<button class="cart"><img src="https://img.icons8.com/pastel-glyph/64/ffffff/shopping-cart--v1.png"/></button>
		
		<!-- TITLE -->
		<div class="title">
			<h1> ARAMARKET </h1>
		</div>	<!-- TITLE END -->

		<!-- SEARCH BAR -->
		<form>
			<div class="search-box">
			    <img src="https://image.flaticon.com/icons/png/128/2811/2811790.png"/>
				<input placeholder="Procure algo para adicionar ao carrinho..." />
			</div>

		</form><!-- SEARCH BAR END-->

		<!-- CONTENT -->
		<div class="content">


			<h1 align="center">Categorias</h1>

			<div class="categoria" style="background-image: url(../img/bebidas.jpg); background-size: 200%; background-repeat: no-repeat;" onclick="document.getElementById('bebidas').style.display='block'">
				<p>Bebidas</p>
			</div>
			
			<div class="categoria" style="background-image: url(../img/hortifruti.jpg); background-size: 200%; background-repeat: no-repeat;">
				<p>Hortifruti</p>
			</div>
			
			<div class="categoria" style="background-image: url(../img/carnes.jpg); background-size: 200%; background-repeat: no-repeat;">
				<p>Carnes</p>
			</div>
			
			<div class="categoria" style="background-image: url(../img/higiene.jpg); background-size: 150%; background-repeat: no-repeat;">
				<p>Higiene</p>
			</div>

			
		</div><!-- CONTENT END -->
	</div> <!-- BACKGROUND END -->

	<!-- MODAL BEBIDAS -->
	<div id="bebidas" class="modal">
	    <div class="modal-content">
	      <div style="height: 500px; margin-top: 5%;" class="container">
	        <span onclick="document.getElementById('bebidas').style.display='none'" class="w3-button w3-display-topright">&times;</span>
	        <p>LISTA DE PRODUTOS DA CATEGORIA</p>
	      </div>
	    </div>
	 </div> <!-- MODAL BEBIDAS END-->
	
	

	<div class="footer">
		<div style="margin: auto"><img src="https://img.icons8.com/metro/26/ffffff/home.png"/></div>
	</div>
<!--
    
    <input type="text" class="search" placeholder="Search"/>
    <div class="filters">
        <span>Filtrar: </span>
        <p class="OrderByPrice">Preço</p>
        <p class="OrderByName">Nome</p>
    </div>

    <ul id="_list-products"></ul>

    <div class="show">
        Mostrar mais
    </div>


    <div class="modal">
        <div class="minicart">
            <ul class="_minicart-items"></ul>
            <div class="footer">
                <span>total:</span>
                <button class="btn">
                    <a href=""> ENVIAR LISTA</a>
                </button>
            </div>
        </div>
    </div>
-->

    <script src="../js/index.js"></script>
    <script src="../service/data.json"></script>
    <h2><a action="/logout">Sair</a></h2>
</body>
</html>

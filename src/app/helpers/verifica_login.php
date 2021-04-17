<?php
if(!$_SESSION['login']){
	header('Location: ../views/templates/html/index.php');
	exit();
}
?>
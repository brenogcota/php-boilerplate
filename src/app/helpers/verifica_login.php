<?php
if(!$_SESSION['login']){
	header('Location: /login');
	exit();
} else {
	echo $_SESSION['login'];
}
?>
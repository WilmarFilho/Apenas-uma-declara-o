<?php 

if($_POST['data'] == '2022-05-06') {

	session_start();

	$_SESSION['logado'] = 'sim';

	header('location: http://localhost/love/historia.php');
}

else {
	header('location: http://localhost/love?erro=Ops, data errada');
}

?>
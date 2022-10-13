<?php 
	
	session_start();

	if(!$_SESSION['logado'] == 'sim') {
		header('location: http://localhost/love?erro=Acerte nossa data primeiro');
	}

?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Apenas uma declaração</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
</head>
<body>
	<div id='main' class="text-center row container"> 
		
		<div id='login' class="row justify-content-center col-md-10 col-11">
			
			<h2 class="col-md-10 col-12 text-white titulo">Fiz este site pra lembrarmos das nossas historias !</h2>
			
			<div class="card col-md-10 col-12 p-2 text-center mt-4">
				teste
			</div>

		</div>


	</div>
</body>
</html>
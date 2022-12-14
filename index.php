<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Apenas uma declaração</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

	<script>
		
		$(document).ready(() => {
			$('#login').fadeIn(2000)
		}) 

	</script>

</head>
<body>
	<div id='main' class="text-center row container"> 
		
		<div id='login' class="row justify-content-center col-md-10 col-11">
			
			<h2 class="col-md-10 col-12 text-white titulo">Oii minha plincesa</h2>
			
			<div class="card col-md-10 col-12 p-2 text-center mt-4">
				<form method="POST" action="login.php">
					
					<label class="label-login">Coloque uma data importante pra nós :</label>
					<input class="form-control input-login" type="date" name="data" placeholder="Digite nossa data">
					<?php if(isset($_GET['erro'])) { ?>
						<p class="label-erro mt-2 text-white" style="font-size: 0.6em;"><?= $_GET['erro'] ?></p> 
					<?php  } ?>
					<button class="btn btn-outline-danger btn-block mt-2" type="submit">Entrar</button>

				</form>
			</div>

		</div>

	</div>
</body>
</html>
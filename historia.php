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

	<script>
		
		$(document).ready(() => {
			$('#album').fadeIn(2000)
		}) 

	</script>

</head>
<body>
	<div id='main' class="text-center row container "> 
		
		<div id='album' class="row justify-content-center col-md-6 col-xl-3 col-sm-11 col-11 p-4">
			
			<h2 class="col-12 text-white titulo text-center" style="font-size:1.2em;">Fiz este site pra lembrarmos das nossas historias !</h2>
			
			<div id="carousel" class="carousel slide text-white col-12 mt-2" data-ride="carousel" data-interval="0">
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			    	
				    	<div class="row justify-content-center">
				    		<img class="col-6 img-fluid fotos" src="assets/dia1/1.jpeg" >
				    		<img class="col-6 img-fluid fotos" src="assets/dia1/2.jpeg">
				    		<img class="col-6 mt-2 img-fluid fotos"src="assets/dia1/3.jpeg">
				    	</div>

				      	<h4 class="data">19/03/2022</h4>

				     	<p class="label-foto mt-2">Começando pelas nossas primeiras fotinhas neném, estavamos começando a se conhecer e só existe essas fotos por pura insistencia minha ein kkkk, aqui já estava começando a enxergar a pessoa importante que tu seria pra mim.</p>

				</div>
			   
			    <div class="carousel-item">
			      	
			      	<div class="row justify-content-center">
			    		<img class="col-6 img-fluid fotos" src="assets/dia2/1.jpeg" class="img-fluid fotos">
			    		<img class="col-6 img-fluid fotos" src="assets/dia2/2.jpeg" class="img-fluid fotos">
			    		<video controls class="col-6 mt-2  img-fluid fotos" src="assets/dia2/3.mp4" class="img-fluid"> </video>
			    	</div>
			      	
			      	<h4 class="data">06/05/2022</h4>

			     	<p class="label-foto mt-2">Me lembro de estarmos tento uma noite incrivel nesse dia e ai não consegui esperar ate o final de semana e já logo te pedi em namoro, não tenho palavras pra descrever a minha felicidade nesse dia</p>

			    </div>
			    <div class="carousel-item">
			      	<div class="row justify-content-center">
			    		<img class="col-6 img-fluid fotos" src="assets/dia3/1.jpeg" class="img-fluid">
			    		<img class="col-6 img-fluid fotos" src="assets/dia3/2.jpeg" class="img-fluid">
			    		<img class="col-6 img-fluid fotos mt-2"src="assets/dia3/3.jpeg" class="img-fluid">
			    	</div>
			      	
			    	<h4 class="data">12/06/2022</h4>

			     	<p class="label-foto mt-2">Nosso primeiro diazinho dos namorados com direito a jantar a luz de velas ein vida, me esforçei ao máximo nesse dia pq sabia que tu merecia isso e muito mais</p>
			    </div>
			    <div class="carousel-item">
			      	<div class="row justify-content-center">
			    		<img class="col-6 img-fluid fotos" src="assets/dia4/1.jpeg" class="img-fluid">
			    		<img class="col-6 img-fluid fotos" src="assets/dia4/2.jpeg" class="img-fluid">
			    		<img class="col-6 img-fluid fotos mt-2"src="assets/dia4/3.jpeg" class="img-fluid">
			    	</div>

			      	<h4 class="data">10/07/2022</h4>

			     	<p class="label-foto">Pra lembrar das nossas noites juntinhos aqui em casa, e também nesse dia te falei que tu era meu porto seguro pra descansar no final do dia, e enfim tu é até hoje e espero continuar sendo meu bem </p>
			    </div>
			 
			    <div class="carousel-item">
			      	<div class="row justify-content-center">
			    		<img class="col-6 img-fluid fotos" src="assets/dia6/1.jpeg" class="img-fluid">
			    		<img class="col-6 img-fluid fotos" src="assets/dia6/2.jpeg" class="img-fluid">
			    		<img class="col-6 img-fluid fotos mt-2"src="assets/dia6/3.jpeg" class="img-fluid">
			    	</div>

			    	<h4 class="data">14/08/2022</h4>
			      
			     	<p class="label-foto mt-2">Já começar falando que estavamos plenos nesse dia ein, enfim eu curti pra caraio esse dia contigo amor, eu nem queria saber de nada ao redor só tava ali me importando em tá contigo</p>
			    </div>
			    <div class="carousel-item">
			      	<div class="row justify-content-center mt-5">
			    		
			    		<img class="col-9 img-fluid fotos" src="assets/dia7/2.jpeg" class="img-fluid">
			    	</div>
			      	<h4 class="data">02/09/2022</h4>
			     	<p class="label-foto mt-5">Enfim amor, Eu te amo muito e espero continuar colocando nossas memorias aqui </p>
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>

		</div>


	</div>

			<!-- Optional JavaScript -->
   			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   			<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
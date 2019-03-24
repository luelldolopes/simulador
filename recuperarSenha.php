<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Simulador - Recuperar Senha</title>
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/signin.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<div class="form-signin" style="background: #3266aa;">
				<h2 class="text-center">Esqueci a Senha</h2>
				<?php
					if(isset($_SESSION['msg'])){
						echo $_SESSION['msg'];
						unset($_SESSION['msg']);
					}
					if(isset($_SESSION['msgcad'])){
						echo $_SESSION['msgcad'];
						unset($_SESSION['msgcad']);
					}
				?>
				<form method="POST" action="recupera.php">
					<!--<label>Usuário</label>-->
					<input type="email" name="email" placeholder="Digite o seu email" class="form-control"><br>
											
					<input type="submit" name="btnRecuperar" value="Recuperar" class="btn btn-success btn-block">
					
					<div class="row text-center" style="margin-top: 20px;"> 
						Lembrou? <a href="login.php">Clique aqui</a> para logar
					</div>
					<!-- <div class="row text-center" style="margin-top: 20px;"> 
						<a href="<?php echo $loginUrl; ?>">
							<button type="button" class="btn btn-primary">Facebook</button>
						</a>
					</div> -->
					
					
					
				</form>
			</div>
		</div>			
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
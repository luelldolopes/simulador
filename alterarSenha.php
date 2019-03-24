<?php
session_start();
ob_start();
include_once("conexao.php");


  $user = mysqli_real_escape_string($conn, $_GET['utilizador']);
  $hash = mysqli_real_escape_string($conn, $_GET['confirmacao']);

  $q = mysqli_query($conn, "SELECT * FROM recuperacao WHERE utilizador = '$user' AND confirmacao = '$hash' LIMIT 1");
 
  if( mysqli_num_rows($q) == 1 ){
    // os dados estão corretos: eliminar o pedido e permitir alterar a password
    
 
    //echo 'Sucesso! (Mostrar formulário de alteração de password aqui)';  

    $btnAlterarSenha = filter_input(INPUT_POST, 'btnAlterarSenha', FILTER_SANITIZE_STRING);
if($btnAlterarSenha){

	$dados_rc = filter_input_array(INPUT_POST, FILTER_DEFAULT);
	
	$erro = false;
	
	$dados_st = array_map('strip_tags', $dados_rc);
	$dados = array_map('trim', $dados_st);
	
	if(in_array('',$dados)){
		$erro = true;
		$_SESSION['msg'] = "<div class='alert alert-danger'>Necessário preencher uma senha!</div>";
	}elseif((strlen($dados['senha'])) < 6){
		$erro = true;
		$_SESSION['msg'] = "<div class='alert alert-danger'>A senha deve ter no minímo 6 caracteres!</div>";
	}elseif(stristr($dados['senha'], "'")) {
		$erro = true;
		$_SESSION['msg'] = "<div class='alert alert-danger'>Caracter ( ' ) utilizado na senha é inválido!</div>";
	
	};
	
	
	//var_dump($dados);
	if(!$erro){
		//var_dump($dados);
		$dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);
		
		$result_usuario = "UPDATE usuarios SET senha=('".
						
						$dados['senha']."') where email=('".$_GET['utilizador']."');";
		$resultado_usario = mysqli_query($conn, $result_usuario);
		if(mysqli_affected_rows($conn)){
			$_SESSION['msgcad'] = "<div class='alert alert-success'>Senha alterada com sucesso!</div>";
			mysqli_query($conn, "DELETE FROM recuperacao WHERE utilizador = '$user' AND confirmacao = '$hash'");
			header("Location: login.php");
		}else{
			$_SESSION['msg'] = "<div class='alert alert-danger'>Erro ao alterar senha!</div>";
		}
	}
	
}

    ?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Simulador - Alterar Senha</title>
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/signin.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<div class="form-signin" style="background: #3266aa;">
				<h2 class="text-center">Alterar Senha</h2>

				<form method="POST" action="">
									
					
					<!--<label>Senha</label>-->
					<input type="password" name="senha" placeholder="Digite uma senha nova" class="form-control"><br>
					
					
					<input type="submit" name="btnAlterarSenha" value="Alterar" class="btn btn-success btn-block">
										
				</form>
			</div>
		</div>			
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>

<?php
  } else {
 
  	$_SESSION['msg'] = "<div class='alert alert-danger'>Não foi possível alterar a senha</div>";
		header("Location: login.php");    
 
  };
 
?>


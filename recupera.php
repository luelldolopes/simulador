<?php
session_start();
include_once("conexao.php");
$btnRecuperar = filter_input(INPUT_POST, 'btnRecuperar', FILTER_SANITIZE_STRING);
if($btnRecuperar){
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
	
	//echo "$usuario - $senha";
	if(!empty($email)){
		//Gerar a senha criptografa
		//echo password_hash($senha, PASSWORD_DEFAULT);
		//Pesquisar o usuário no BD
		$result_email = "SELECT id, nome, email, senha FROM usuarios WHERE email='$email' LIMIT 1";
		$resultado_email = mysqli_query($conn, $result_email);

			
			if( mysqli_num_rows($resultado_email) == 1 ){
			      // o utilizador existe, vamos gerar um link único e enviá-lo para o e-mail
			 
			      // gerar a chave
			      // exemplo adaptado de http://snipplr.com/view/20236/
      			$chave = sha1(uniqid( mt_rand(), true));
 
			      // guardar este par de valores na tabela para confirmar mais tarde
			      $conf = mysqli_query($conn, "INSERT INTO recuperacao VALUES ('$email', '$chave')");
				  //echo "INSERT INTO recuperacao VALUES ('$email', '$chave')";
 
			      if(mysqli_affected_rows($conn) == 1 ){
			 
			        $link = "http://localhost/simulador/alterarSenha.php?utilizador=$email&confirmacao=$chave";
			        include_once("email.php");
			 
				   //      if( mail($email, 'Recuperação de senha', 'Olá '.$email.', visite este link '.$link) ){

				   //      	$_SESSION['msg'] = "<div class='alert alert-success'>Foi enviado um e-mail para o seu endereço</div>";
							// header("Location: recuperarSenha.php");		
				          				 
				   //      } else {
				   //      	$_SESSION['msg'] = "<div class='alert alert-danger'>Houve um erro ao enviar o email</div>";
							// //header("Location: recuperarSenha.php");			          
				   //      }
				 
					// Apenas para testar o link, no caso do e-mail falhar
					//echo '<p>Link: '.$link.' (apresentado apenas para testes; nunca expor a público!)</p>';
			 
			      } else {
			      	$_SESSION['msg'] = "<div class='alert alert-danger'>Não foi possível gerar o endereço único</div>";
					header("Location: recuperarSenha.php");			        
			    	}

		    } else {
			  $_SESSION['msg'] = "<div class='alert alert-danger'>Email não cadastrado!</div>";
				header("Location: recuperarSenha.php");
			}
	} else {
	    $_SESSION['msg'] = "<div class='alert alert-danger'>Digite o email</div>";
		header("Location: recuperarSenha.php");
	};

}else{

};

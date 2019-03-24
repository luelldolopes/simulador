<?php
#
# Exemplo de envio de e-mail SMTP PHPMailer - www.secnet.com.br
#
# Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

# Inicia a classe PHPMailer
$mail = new PHPMailer();

# Define os dados do servidor e tipo de conexão
$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "smtp.gmail.com"; # Endereço do servidor SMTP
$mail->Port = 587; // Porta TCP para a conexão
$mail->SMTPAutoTLS = true; // Utiliza TLS Automaticamente se disponível
$mail->SMTPAuth = true; # Usar autenticação SMTP - Sim
$mail->Username = 'simuladordetran@gmail.com'; # Usuário de e-mail
$mail->Password = 'ebg72oui'; // # Senha do usuário de e-mail

# Define o remetente (você)
$mail->From = "simuladordetran@gmail.com"; # Seu e-mail
$mail->FromName = "Simulador Detran"; // Seu nome

# Define os destinatário(s)
$mail->AddAddress($email, 'Cliente'); # Os campos podem ser substituidos por variáveis
#$mail->AddAddress('webmaster@nomedoseudominio.com'); # Caso queira receber uma copia
#$mail->AddCC('ciclano@site.net', 'Ciclano'); # Copia
#$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); # Cópia Oculta

# Define os dados técnicos da Mensagem
$mail->IsHTML(true); # Define que o e-mail será enviado como HTML
#$mail->CharSet = 'iso-8859-1'; # Charset da mensagem (opcional)

# Define a mensagem (Texto e Assunto)
$mail->Subject = "Redefinir Senha"; # Assunto da mensagem
$mail->Body = $link;
$mail->AltBody = "\r\n ";

# Define os anexos (opcional)
#$mail->AddAttachment("c:/temp/documento.pdf", "documento.pdf"); # Insere um anexo

# Envia o e-mail
$enviado = $mail->Send();

# Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();

# Exibe uma mensagem de resultado (opcional)
if ($enviado) {
	$_SESSION['msg'] = "<div class='alert alert-success'>Foi enviado um e-mail para o seu endereço</div>";
	header("Location: login.php");
} else {
	$_SESSION['msg'] = "<div class='alert alert-danger'>Houve um erro ao enviar o email</div>";
	header("Location: login.php");
}
?>
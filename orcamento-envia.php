<?php

header("Content-Type: text/html; charset=utf8",true);
include_once("inc/config.php");

$destinatarios	= "milleniumvidracaria@gmail.com";

$destinatario 	= utf8_decode("VM Vidros");
$usuario 		= "damasio.rafael@outlook.com";
$senha 			= "Danzinho.131285";

/*abaixo as veriaveis principais, que devem conter em seu formulario*/
$nome 			= protecao(utf8_decode($_REQUEST['nome']));
$telefone		= protecao(utf8_decode($_REQUEST['telefone']));
$email 			= protecao(utf8_decode($_REQUEST['email']));
$opcao		    = protecao(utf8_decode($_REQUEST['opcao']));
$mensagem		= protecao(utf8_decode($_REQUEST['mensagem']));

/*********************************** A PARTIR DAQUI NAO ALTERAR ************************************/
include_once("inc/phpmailer/class.phpmailer.php");
include_once("inc/phpmailer/class.smtp.php");

$To = $destinatarios;
$Subject = utf8_decode("VM Vidros - Orçamento");
$bodyMensagem = "";
$bodyMensagem .= "<strong>Nome:</strong> ".$nome." <br />";
if($telefone != ""){
    $bodyMensagem .= "<strong>Telefone:</strong> ".$telefone." <br />";
}
$bodyMensagem .= "<strong>E-mail:</strong> $email <br />";
if($opcao != ""){
    $bodyMensagem .= "<strong>Assunto:</strong> ".$opcao." <br />";
}
$bodyMensagem .= "<strong>Mensagem:</strong> ".$mensagem." <br />";
$Message = $bodyMensagem;

$Host = "smtp-mail.outlook.com";
$Username = $usuario;
$Password = $senha;
$Port = "587";

$mail = new PHPMailer();
$body = $Message;
$mail->IsSmtp();
//$mail->IsHtml(); // telling the class to use HTML
$mail->Host = $Host; // SMTP server
//$mail->SMTPDebug = 1; // enables SMTP debug information (for testing)
// 1 = errors and messages
// 2 = messages only
$mail->SMTPAuth = true; // enable SMTP authentication
$mail->SMTPSecure = "tls";	// SSL REQUERIDO pelo GMail
$mail->Port = $Port; // set the SMTP port for the service server
$mail->Username = $Username; // account username
$mail->Password = $Password; // account password

$mail->SetFrom("noreply@vmvidros.com.br", $destinatario);
$mail->Subject = $Subject;
$mail->MsgHTML($body);
$mail->AddAddress("contato@vmvidros.com.br");
$mail->AddBcc('damasio.rafael@gmail.com', 'Rafael Damasio'); // Cópia Oculta

if(!$mail->Send()) {
    echo 'Erro ao enviar e-mail: '. print($mail->ErrorInfo);
} else {
    echo '<script type="text/javascript">alert("Mensagem enviada com sucesso!"); history.back();</script>';
}
?>
<?php

session_start();

//EMAIL 

$email_nome = $_POST['nome'];
$email_celular = $_POST['celular'];
$email_email = $_POST['email'];
$email_mensagem = $_POST['mensagem'];

$nome = "Bruna Andrade Arquitetura";
$email = "arquiteta@brunaanadrade.com.br";
$assunto = "Contato Bruna Andrade Arquitetura - $email_nome";
$msg = "Olá Bruna! <br><br>

Você recebeu uma nova mensagem:<br><br>

-------------------------------------------------------<br>
Nome: $email_nome <br>
Celular: $email_celular <br>
E-mail: $email_email <br>
Mensagem: $email_mensagem <br>
-------------------------------------------------------<br><br>
	
Obs.: Funcionalidade desenvolvida por Heitor Scalabrini.<br><br>

E-mail enviado automaticamente atraves do site brunaanadrade.com.br <br><br>

Atenciosamente,

</br></br>

Bruna Andrade Arquitetura

</br></br>";

//VERIFICANDO MENSAGEM:
ECHO $msg;

if (PATH_SEPARATOR ==":") { $quebra = "\r\n"; } 
else { $quebra = "\n"; }	
$headers = "MIME-Version: 1.1".$quebra;	
$headers .= "Content-type: text/plain; charset=iso-8859-1".$quebra;	
$headers .= "From: envioautomatico@brunaandrade.com.br".$quebra; 
//E-mail do remetente	
$headers .= "Return-Path: envioautomatico@brunaandrade.com.br".$quebra; 
				   
// Chame o arquivo com as Classes do PHPMailer
require_once('phpmailer/class.phpmailer.php');
	
// InstÃ¢ncia a classe PHPMailer
$mail = new PHPMailer();
	
// Configuração dos dados do servidor e tipo de conexão (Estes dados você obtem com seu host)
$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "mail.brunaandrade.com.br"; // Endereço do servidor SMTP
$mail->Port = 587;
$mail->CharSet = 'UT-8';
$mail->SMTPAuth = true; // Autenticação (True: Se o email será autenticado | False: se o Email não será autenticado)
$mail->Username = 'envioautomatico@brunaandrade.com.br'; // Usuário do servidor SMTP
$mail->Password = 'envioautomatico@99'; // A Senha do email indicado acima
// Remetente (Identificação que será mostrada para quem receber o email)
$mail->From = "envioautomatico@brunaandrade.com.br";
$mail->FromName = "Contato Bruna Andrade Arquitetura - $email_nome";
	
// Destinatário
$mail->AddAddress($email, $nome);

// Opcional (Se quiser enviar cópia do email)
$mail->AddBCC('arquiteta@brunaandrade.com.br', 'Copia Oculta');
$mail->AddBCC('brunabett@hotmail.com', 'Copia Oculta');
$mail->AddBCC('scalabrinih@gmail.com', 'Copia Oculta');

// Define tipo de Mensagem que vai ser enviado
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML

// Assunto e Mensagem do email
$mail->Subject  = $assunto; // Assunto da mensagem
$mail->Body = $msg;	
//$mail->AddAttachment($_SERVER['DOCUMENT_ROOT']. '/upload/123.pdf');
	
// Envia a Mensagem
$enviado = $mail->Send();

// Verifica se o email foi enviado
if($enviado)
{
	echo "E-mail enviado com sucesso!";
    setcookie("msg", "E-mail enviado com sucesso!", time() + 3600, "/");
    header('Location: ./#contato');
    return 0;

}
else
{
	echo "Houve um erro ao enviar o email! " .$mail->ErrorInfo;
    setcookie("msgerro", "Ocorreu um erro ao enviar o e-mail.", time() + 3600, "/");
    header('Location: ./#contato');
    return 0;
}

?>
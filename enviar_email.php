<?php
/**
 * Envio do formulário de contato - Bruna Andrade Arquitetura e Design
 *
 * Recebe POST de index.html (via AJAX, responde JSON; sem JavaScript, redireciona
 * de volta para index.html?enviado=1#contato ou ?erro=1#contato).
 */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/phpmailer/Exception.php';
require __DIR__ . '/phpmailer/PHPMailer.php';
require __DIR__ . '/phpmailer/SMTP.php';

session_start();

$ajax = isset($_SERVER['HTTP_X_REQUESTED_WITH'])
    && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';

function responder($ok, $mensagem, $status = 200)
{
    global $ajax;

    if ($ajax) {
        http_response_code($status);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode(['ok' => $ok, 'message' => $mensagem]);
    } else {
        header('Location: ./?' . ($ok ? 'enviado=1' : 'erro=1') . '#contato');
    }
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    responder(false, 'Método não permitido.', 405);
}

// Honeypot: robôs preenchem o campo oculto "website"
if (!empty($_POST['website'])) {
    responder(true, 'Mensagem enviada com sucesso! Em breve entrarei em contato.');
}

// Limite simples: uma mensagem a cada 30 segundos por sessão
if (isset($_SESSION['ba_ultimo_envio']) && time() - $_SESSION['ba_ultimo_envio'] < 30) {
    responder(false, 'Aguarde alguns segundos antes de enviar outra mensagem.', 429);
}

function campo($nome, $max)
{
    $valor = isset($_POST[$nome]) ? trim((string) $_POST[$nome]) : '';
    return mb_substr($valor, 0, $max, 'UTF-8');
}

$nome     = campo('nome', 100);
$celular  = campo('celular', 20);
$email    = campo('email', 150);
$mensagem = campo('mensagem', 5000);

// Sem quebras de linha em campos que vão para cabeçalhos
$nome = preg_replace('/[\r\n]+/', ' ', $nome);

if ($nome === '' || $celular === '' || $mensagem === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    responder(false, 'Por favor, preencha todos os campos corretamente.', 422);
}

// Configuração (destinatário, SMTP): copie config_email.exemplo.php para config_email.php
define('BA_EMAIL', true);
if (!is_file(__DIR__ . '/config_email.php')) {
    error_log('enviar_email.php: config_email.php não encontrado');
    responder(false, 'Não foi possível enviar a mensagem agora. Tente pelo WhatsApp (12) 98142-8757.', 500);
}
$config = require __DIR__ . '/config_email.php';

date_default_timezone_set('America/Sao_Paulo');

$h = function ($texto) {
    return nl2br(htmlspecialchars($texto, ENT_QUOTES, 'UTF-8'));
};

$corpo = '
<div style="font-family: Arial, sans-serif; color: #3a332e; max-width: 600px;">
    <h2 style="font-weight: normal; color: #3a332e; border-bottom: 2px solid #a8876a; padding-bottom: 8px;">
        Nova mensagem pelo site
    </h2>
    <p><strong>Nome:</strong> ' . $h($nome) . '</p>
    <p><strong>Celular:</strong> ' . $h($celular) . '</p>
    <p><strong>E-mail:</strong> ' . $h($email) . '</p>
    <p><strong>Mensagem:</strong><br>' . $h($mensagem) . '</p>
    <hr style="border: 0; border-top: 1px solid #ebe3d7;">
    <p style="font-size: 12px; color: #8f857c;">
        Enviado automaticamente pelo site brunaarq.com.br em ' . date('d/m/Y H:i') . '.<br>
        Para responder, basta clicar em "Responder": a resposta vai direto para o e-mail do cliente.
    </p>
</div>';

$texto = "Nova mensagem pelo site\n\n"
    . "Nome: $nome\n"
    . "Celular: $celular\n"
    . "E-mail: $email\n\n"
    . "Mensagem:\n$mensagem\n";

$mail = new PHPMailer(true);

try {
    if (!empty($config['smtp_host'])) {
        $mail->isSMTP();
        $mail->Host       = $config['smtp_host'];
        $mail->Port       = (int) $config['smtp_porta'];
        $mail->SMTPAuth   = true;
        $mail->Username   = $config['smtp_usuario'];
        $mail->Password   = $config['smtp_senha'];
        $mail->SMTPSecure = $config['smtp_seguro'];
        $mail->SMTPAutoTLS = $config['smtp_seguro'] !== '';
    } else {
        $mail->isMail();
    }

    $mail->CharSet = PHPMailer::CHARSET_UTF8;
    $mail->setFrom($config['remetente_email'], $config['remetente_nome']);
    $mail->addAddress($config['destino_email'], $config['destino_nome']);
    $mail->addReplyTo($email, $nome);
    foreach ($config['bcc'] as $bcc) {
        $mail->addBCC($bcc);
    }

    $mail->isHTML(true);
    $mail->Subject = 'Contato pelo site - ' . $nome;
    $mail->Body    = $corpo;
    $mail->AltBody = $texto;

    $mail->send();
} catch (Exception $e) {
    error_log('enviar_email.php: ' . $mail->ErrorInfo);
    responder(false, 'Não foi possível enviar a mensagem agora. Tente pelo WhatsApp (12) 98142-8757.', 500);
}

$_SESSION['ba_ultimo_envio'] = time();
responder(true, 'Mensagem enviada com sucesso! Em breve entrarei em contato.');

<?php
/**
 * Configuração de envio do formulário de contato.
 * Este arquivo contém senha.
 * Modelo sem senha: config_email.exemplo.php
 *
 * O site envia pela conta envioautomatico@brunaarq.com.br (hospedagem do site)
 * e entrega no Gmail da Bruna.
 */

if (!defined('BA_EMAIL')) {
    http_response_code(403);
    exit;
}

return [
    // Quem recebe as mensagens do site
    'destino_email' => 'arquitetabrunandrade@gmail.com',
    'destino_nome'  => 'Bruna Andrade Arquitetura',

    // Cópias ocultas (opcional), ex.: ['outro@email.com']
    'bcc' => [],

    // Remetente: conta do próprio domínio do site
    'remetente_email' => 'envioautomatico@brunaarq.com.br',
    'remetente_nome'  => 'Site Bruna Andrade Arquitetura',

    // SMTP da hospedagem (mesma configuração do site anterior, domínio novo)
    'smtp_host'   => 'mail.brunaarq.com.br',
    'smtp_porta'  => 587,
    'smtp_seguro' => 'tls',
    'smtp_usuario'=> 'envioautomatico@brunaarq.com.br',
    'smtp_senha'  => 'envioautomatico@99',
];

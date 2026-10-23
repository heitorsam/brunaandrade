<?php
/**
 * Modelo de configuração. Copie para config_email.php e preencha a senha.
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

    // SMTP da hospedagem (confira os dados no painel da hospedagem).
    // Deixe 'smtp_host' vazio para usar a função mail() do PHP.
    'smtp_host'   => 'brunaarq.com.br',
    'smtp_porta'  => 465,
    'smtp_seguro' => 'ssl',   // 'tls' (porta 587), 'ssl' (porta 465) ou '' (sem criptografia)
    'smtp_usuario'=> 'envioautomatico@brunaarq.com.br',
    'smtp_senha'  => 'SENHA_AQUI',
];

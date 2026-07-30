<?php
/**
 * TechRocket - Processador de Leads & Integração n8n Webhook
 */

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = trim($_POST['nome'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $whatsapp = trim($_POST['whatsapp'] ?? '');
    $servico = trim($_POST['servico'] ?? 'nao_especificado');
    $projeto = trim($_POST['origem'] ?? 'tech_rocket_institucional');

    // Higienizar número de WhatsApp (remover caracteres não numéricos e prefixar DDI 55)
    $clean_whatsapp = preg_replace('/[^0-9]/', '', $whatsapp);
    if (!empty($clean_whatsapp) && !preg_match('/^55/', $clean_whatsapp)) {
        $clean_whatsapp = '55' . $clean_whatsapp;
    }

    // Lógica de Direcionamento de Webhook & Redirecionamento
    $webhook_url = "";
    $redirect_url = "obrigado.html?from=" . urlencode($projeto);

    switch ($projeto) {
        case 'ebook-maternidade':
            $nome_enc = urlencode($nome);
            $email_enc = urlencode($email);
            $redirect_url = "https://pay.hotmart.com/F104029048E?name={$nome_enc}&email={$email_enc}";
            $webhook_url = "https://editor.somos.tec.br/webhook-test/tech-rocket";
            break;

        case 'tech_rocket_institucional':
            $redirect_url = "obrigado.html?from=tech_rocket";
            $webhook_url = "https://editor.somos.tec.br/webhook-test/tech-rocket";
            break;

        case 'daven_iori':
            $redirect_url = "obrigado.html?from=daven_iori";
            $webhook_url = "https://hook.somos.tec.br/webhook/tech-rocket";
            break;

        default:
            $redirect_url = "obrigado.html";
            break;
    }

    // Payload estruturado para disparo n8n / CRM
    $payload = [
        'nome' => $nome,
        'email' => $email,
        'whatsapp' => $clean_whatsapp,
        'servico' => $servico,
        'projeto' => $projeto,
        'data_envio' => date('Y-m-d H:i:s'),
        'origem_url' => $_SERVER['HTTP_REFERER'] ?? 'https://techrocket.site/'
    ];

    // Disparo Assíncrono do Webhook (via cURL)
    if (!empty($webhook_url)) {
        $ch = curl_init($webhook_url);
        $json_payload = json_encode($payload);

        curl_setopt($ch, CURLOPT_POSTFIELDS, $json_payload);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 4); // Timeout curto de 4s para resposta rápida do formulário

        curl_exec($ch);
        curl_close($ch);
    }

    // Redirecionamento Final do Usuário
    header("Location: " . $redirect_url);
    exit();
} else {
    // Se acessado diretamente via GET, redireciona para a página principal
    header("Location: index.html");
    exit();
}

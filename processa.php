<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = urlencode($_POST['nome']);
    $email = urlencode($_POST['email']);
    $whatsapp = $_POST['whatsapp'];
    $projeto = $_POST['origem'] ?? 'desconhecido';


    // Lógica de Direcionamento e Tags
    switch ($projeto) {
        case 'ebook-maternidade':
            $checkout_url = "https://pay.hotmart.com/F104029048E?name=$nome&email=$email";
            // Aqui você dispararia a tag para o funil de maternidade
            break;

        case 'tech_rocket_institucional':
            $checkout_url = "obrigado.php?from=tech_rocket";
            $webhook_url = "https://editor.somos.tec.br/webhook-test/teste";
            break;

        case 'daven_iori':
            $checkout_url = "obrigado.php?from=daven_iori";
            $webhook_url = "https://editor.somos.tec.br/webhook-test/teste";
            break;

        default:
            $checkout_url = "404.php";
            break;
    }

    // Opcional: Logar os dados para o seu sistema de automação (n8n/Webhooks)
    $data = [
        'nome' => $nome,
        'email' => $email,
        'whatsapp' => '55' . $whatsapp,
        'projeto' => $projeto // Agora você tem o nome exato do projeto aqui!
    ];


    // DISPARO DO WEBHOOK (via cURL)
    if (!empty($webhook_url)) {
        $ch = curl_init($webhook_url);
        $payload = json_encode($data);

        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5); // Timeout curto para não atrasar o redirect

        curl_exec($ch);
        curl_close($ch);
    }

    header("Location: $checkout_url");
    exit();
}

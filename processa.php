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
            $webhook_url = "https://editor.somos.tec.br/webhook-test/tech-rocket";
            break;

        case 'daven_iori':
            // 1. Configurações da API do Baserow
            $baserow_token = "gMzcuJCODtOWV3HHbRjGbIaLZjIbM9Pi";
            $table_id = "814396"; // ID da tabela Leads VIP

            // 2. Filtro de busca (Busca por email OU whatsapp)
            // Usamos o filtro 'filter__field_xxx__contains' conforme a documentação do Baserow
            $query_url = "https://api.baserow.io/api/database/rows/table/{$table_id}/?user_field_names=true&filter__email__equal=" . urlencode($email) . "&filter__phone__equal=" . urlencode($whatsapp) . "&filter_type=OR";

            $ch = curl_init($query_url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                "Authorization: Token $baserow_token"
            ]);

            $response = curl_exec($ch);
            $data = json_decode($response, true);
            curl_close($ch);

            // 3. Lógica de Redirecionamento
            if (!empty($data['results'])) {
                // Se achou registros, o lead já existe -> Direto para a Loja
                // header("Location: https://daveniori.lojavirtualnuvem.com.br");
                // $webhook_url = "https://hook.somos.tec.br/webhook/tech-rocket";

                echo $data['results'] . ' registros encontrados. Lead já existe. \n' . $query_url;
            } else {
                // Se não achou, envia para o n8n e depois para a página de obrigado
                // Aqui você mantém a sua chamada cURL atual para o Webhook do n8n
                // $checkout_url = "obrigado.php?from=daven_iori";
                // $webhook_url = "https://hook.somos.tec.br/webhook/tech-rocket";
                echo $data['results'] . ' registros encontrados. Novo lead criado. \n' . $query_url;

                // }
            }
            break;


        // case 'daven_iori':
        //     $checkout_url = "obrigado.php?from=daven_iori";
        //     $webhook_url = "https://hook.somos.tec.br/webhook/tech-rocket";
        //     break;

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

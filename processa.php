<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = urlencode($_POST['nome']);
    $email = urldecode($_POST['email']);
    $whatsapp = $_POST['whatsapp'];
    $projeto = $_POST['origem'] ?? 'desconhecido';

    // Função Mestra para enviar dados para o n8n ou Baserow sem erros de caracteres
    function enviarDadosJson($url, $dados, $token = "gMzcuJCODtOWV3HHbRjGbIaLZjIbM9Pi")
    {
        $ch = curl_init($url);

        // Transforma o array do PHP em um JSON real (mantendo o @, acentos, etc.)
        $payload = json_encode($dados);

        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Headers importantes: avisamos que estamos mandando JSON
        $headers = ['Content-Type: application/json'];
        if ($token) {
            $headers[] = "Authorization: Token $token";
        }

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }


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
            $token = "gMzcuJCODtOWV3HHbRjGbIaLZjIbM9Pi";
            $table_id = "814396"; // ID da tabela Leads VIP

            $baserow_url = "https://api.baserow.io/api/database/rows/table/{$table_id}";



            $busca_url = $baserow_url . "&filter__Email__equal=" . urlencode($email);
            $check = enviarDadosJson($busca_url, [], $token); // GET simulado
            $res = json_decode($check, true);


            if (!empty($res['results'])) {
                // Se achou, vai direto para a loja da Daven & Iori
                // header("Location: https://daveniori.com.br/");
                echo "Já cadastrado. Redirecionar para a loja da Daven & Iori." . $check;
            } else {
                // Se não achou, salva no Baserow e depois manda pro n8n
                // $dados = [
                //     "Nome" => $nome,
                //     "Email" => $email,
                //     "WhatsApp" => $whatsapp,
                //     "Origem" => "Site Daven"
                // ];
                // enviarDadosJson($baserow_url, $dados, $token);

                // // Envia para o Webhook do n8n para disparar o áudio da Taoni
                // enviarDadosJson("https://n8n.techrocket.site/webhook/vossa-url", $dados);

                // header("Location: /obrigado");

                echo "Novo cadastro. " . $check;
            }
            exit();
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

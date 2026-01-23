<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = urlencode($_POST['nome']);
    $email = urlencode($_POST['email']);
    $whatsapp = $_POST['whatsapp'];

    // Captura o nome do projeto vindo do campo oculto
    $projeto = $_POST['projeto_origem'] ?? 'desconhecido';

    // Lógica de Direcionamento e Tags
    switch ($projeto) {
        case 'ebook_maternidade':
            $checkout_url = "https://pay.hotmart.com/F104029048E?name=$nome&email=$email";
            // Aqui você dispararia a tag para o funil de maternidade
            break;

        // case 'tech_rocket_institucional':
        //     // Redireciona para uma página de "Obrigado" ou WhatsApp da Tec Rocket
        //     $checkout_url = "obrigado.php?projeto=techrocket";
        //     break;

        // case 'bratz_style':
        //     $checkout_url = "https://checkout.exemplo.com/bratz?name=$nome";
        //     break;

        default:
            $checkout_url = "obrigado.php";
            break;
    }

    // Opcional: Logar os dados para o seu sistema de automação (n8n/Webhooks)
    $data = [
        'nome' => $_POST['nome'],
        'email' => $_POST['email'],
        'whatsapp' => $whatsapp,
        'dominio' => $_SERVER['HTTP_HOST'],
        'projeto' => $projeto // Agora você tem o nome exato do projeto aqui!
    ];

    header("Location: $checkout_url");
    exit();
}

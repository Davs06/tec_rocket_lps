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
            $checkout_url = "https://wa.link/90wrhg";
            break;

        default:
            $checkout_url = "404.php";
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

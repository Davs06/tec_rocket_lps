<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = urlencode($_POST['nome']);
    $email = urlencode($_POST['email']);

    $data = [
        'nome' => $_POST['nome'],
        'email' => $_POST['email'],
        'whatsapp' => $_POST['whatsapp'],
        'dominio' => $_SERVER['HTTP_HOST']
    ];

    // Redireciona direto para o checkout da Hotmart com os dados preenchidos
    // Substitua pelo seu link de checkout real
    $checkout_url = "https://pay.hotmart.com/F104029048E?name=$nome&email=$email";

    header("Location: $checkout_url");
    exit();
}

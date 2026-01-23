<?php
include('index.php');
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = urlencode($_POST['nome']);
    $email = urlencode($_POST['email']);

    $data = [
        'nome' => $_POST['nome'],
        'email' => $_POST['email'],
        'whatsapp' => $_POST['whatsapp'],
        'dominio' => $_SERVER['HTTP_HOST'],
        'pagina' => $projeto
    ];

    // Redireciona direto para o checkout da Hotmart com os dados preenchidos
    // Substitua pelo seu link de checkout real

    if ($_SERVER['HTTP_HOST'] == 'techrocket.site' && $uri == 'produtos/ebook-maternidade') {
        $checkout_url = "https://pay.hotmart.com/F104029048E?name=$nome&email=$email";
    } else {
        // Outros domínios podem ter URLs de checkout diferentes
        $checkout_url = "";
    }
    $checkout_url = "https://pay.hotmart.com/F104029048E?name=$nome&email=$email";

    header("Location: $checkout_url");
    exit();
}

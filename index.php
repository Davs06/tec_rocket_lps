<?php
$dominio = $_SERVER['HTTP_HOST'];
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Lógica de Seleção por Domínio ou Caminho
if ($dominio == 'bratzstyle.com.br' || $dominio == 'bratz.techrocket.site') {
    $projeto = 'bratz_style';
} elseif ($dominio == 'daveniori.com.br' || $dominio == 'loja.techrocket.site') {
    $projeto = 'daven_iori';
} elseif ($uri == '/produtos/ebook-maternidade') {
    $projeto = 'matermidade_lucro';
} elseif ($dominio == 'techrocket.site' && $uri == '/') {
    $projeto = 'tech_rocket_institucional';
} else {
    // Se não encontrar a rota, carrega a sua 404 personalizada
    include('404.php');
    exit;
}

include("temas/{$projeto}.php");

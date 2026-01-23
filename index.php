<?php
$dominio = $_SERVER['HTTP_HOST'];
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($dominio == 'bratzstyle.com.br' || $dominio == 'bratz.techrocket.site') {
    $projeto = 'bratz_style';
    $cor_rastro = '#E5358E'; // Rosa Vibrante
} elseif ($dominio == 'daveniori.com.br' || $dominio == 'loja.techrocket.site') {
    $projeto = 'daven_iori';
    $cor_rastro = '#C5A059'; // Ouro/Dourado Elegante
} elseif ($uri == '/produtos/ebook-maternidade') {
    $projeto = 'maternidade_lucro';
    $cor_rastro = '#f43f5e'; // Rose/Rosa Suave
} elseif ($dominio == 'techrocket.site' && $uri == '/') {
    $projeto = 'tech_rocket_institucional';
    $cor_rastro = '#818cf8'; // Indigo (Tecnologia)
} else {
    include('404.php');
    exit;
}

include("temas/{$projeto}.php");

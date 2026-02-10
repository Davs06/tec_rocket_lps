<?php
// Array de Professores
$professores = [
    [
        "nome" => "Pedro Henrrrique Braga",
        "cargo" => "Professor",
        "graduacao" => "1º Dan",
        "bio" => "Professor em fundamentos e treinamento de karate - Atleta de alto rendimento.",
        "foto" => "assets/img/material-m-braga/ph.jpeg",
        "insta" => "pedronz_090",
        "classe_tag" => "tag-red"
    ],
    [
        "nome" => "Giovanna Machado",
        "cargo" => "Professor",
        "graduacao" => "1º Dan",
        "bio" => "Professora em fundamentos e treinamento de karate e treinos funcionais - Atleta de alto rendimento.",
        "foto" => "assets/img/material-m-braga/giovanna.jpeg",
        "insta" => "giovannamvalente",
        "classe_tag" => "tag-red"
    ],
    [
        "nome" => "Jessica Budai",
        "cargo" => "Professor",
        "graduacao" => "1º Dan",
        "bio" => "Professora em fundamentos e treinamento para iniciantes (karate) - Arbitra JKS - Atleta de alto rendimento.",
        "foto" => "assets/img/material-m-braga/budai-1.jpeg",
        "insta" => "jessica_s_budai",
        "classe_tag" => "tag-red"
    ],
    [
        "nome" => "Murilo",
        "cargo" => "Professor",
        "graduacao" => "1º Dan",
        "bio" => "Professor em fundamentos e treinamento de karate.",
        "foto" => "assets/img/material-m-braga/murilo.jpeg",
        "insta" => "",
        "classe_tag" => "tag-red"
    ],
    [
        "nome" => "Djalma Carvalho",
        "cargo" => "Instrutor",
        "graduacao" => "Faixa Marrom (1º Kyu)",
        "bio" => "Instrutor em fundamentos e treinamento para iniciantes (karate).",
        "foto" => "assets/img/material-m-braga/djalma.jpeg",
        "insta" => "djalma_karateca",
        "classe_tag" => "tag-red"
    ],
    // Adicione novos professores aqui...

];

$unidades = [
    [
        "nome" => "Unidade Sede",
        "endereco" => "Rua Borges Ladário, 68",
        "bairro" => "Tucuruvi, São Paulo - SP",
        "referencia" => "(Próximo à Estação Parada Inglesa)",
        "link_maps" => "https://maps.google.com/?q=Rua+Borges+Ladário+68+Tucuruvi",
        "is_sede" => true, // Ativa o dourado e o botão de âncora
        "horarios" => "" // Fica vazio pois usa o link interno
    ],
    [
        "nome" => "Filial - JP Oriental",
        "endereco" => "Av. Júlio Buono, 2028",
        "bairro" => "Vila Gustavo, São Paulo - SP",
        "referencia" => "(Dentro do Centro de Treinamento JP)",
        "link_maps" => "https://maps.google.com/?q=Avenida+Júlio+Buono+2028+Vila+Gustavo",
        "is_sede" => false,
        "horarios" => "Segunda, Quarta e Sexta:<br>18h15 às 19h15"
    ],
    [
        "nome" => "Projeto Social ZL - São Miguel Paulista",
        "endereco" => "Rua Arlindo Colaço, 85",
        "bairro" => "São Miguel Paulista, São Paulo - SP",
        "referencia" => "(Dentro da Primeira Igreja Batista de São Miguel Paulista)",
        "link_maps" => "https://maps.google.com/?q=Rua+Arlindo+Colaço+85+São+Miguel+Paulista",
        "is_sede" => false,
        "horarios" => "Sexta: 18h30 às 19h30 e 19h40 às 20h45 <br> Sábado: 7h às 8h30"
    ],
    // ... próximas unidades
];
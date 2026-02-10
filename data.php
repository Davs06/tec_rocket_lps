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
        "bio" => "Professora em fundamentos e treinamento de karate - Arbitra (JKS) - Atleta de alto rendimento.",
        "foto" => "assets/img/material-m-braga/budai-1.jpeg",
        "insta" => "jessica_s_budai",
        "classe_tag" => "tag-red"
    ],
    [
        "nome" => "Josias Nery junior",
        "cargo" => "Professor",
        "graduacao" => "3º Dan",
        "bio" => "Professor em fundamentos e treinamento de karate.",
        "foto" => "assets/img/material-m-braga/josias.jpeg",
        "insta" => "",
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
        "nome" => "Projeto Social ZN - Vila Sabrina",
        "endereco" => "Av prof Castro Júnior, 324",
        "bairro" => "Vila Sabrina, São Paulo - SP",
        "referencia" => "(Em frente do ponto da esfiha)",
        "link_maps" => "https://maps.google.com/?q=Avenida+Prof+Castro+Júnior+324+Vila+Sabrina",
        "is_sede" => false,
        "horarios" => "Segunda, Quarta e Sexta:<br> 9h, 15h e 20h"
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
    [
        "nome" => "Filial - Santana Parnaiba",
        "endereco" => "Rua Rio de Janeiro, 201",
        "bairro" => "Chácara do Solar I (Fazendinha), Santana de Parnaiba - SP",
        "referencia" => "(Academia Alex fitines)",
        "link_maps" => "https://www.google.com/maps/place/R.+Rio+de+Janeiro,+201+-+Ch%C3%A1cara+do+Solar+I+(Fazendinha),+Santana+de+Parna%C3%ADba+-+SP,+06530-020/@-23.4083489,-46.8869091,3a,75y,78.32h,74.73t/data=!3m7!1e1!3m5!1sSp9vLkN53qPp1yDPbMM92Q!2e0!6shttps:%2F%2Fstreetviewpixels-pa.googleapis.com%2Fv1%2Fthumbnail%3Fcb_client%3Dmaps_sv.tactile%26w%3D900%26h%3D600%26pitch%3D15.272108086836838%26panoid%3DSp9vLkN53qPp1yDPbMM92Q%26yaw%3D78.31679221880506!7i16384!8i8192!4m5!3m4!1s0x94cf1c8a354bba5f:0xebf83ac953783c81!8m2!3d-23.4080847!4d-46.8872996?entry=ttu&g_ep=EgoyMDI2MDIwNC4wIKXMDSoASAFQAw%3D%3D",
        "is_sede" => false,
        "horarios" => "Segunda, Quarta e Sexta:<br>18h15 às 19h15"
    ],
    // ... próximas unidades
];
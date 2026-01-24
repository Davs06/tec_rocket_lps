<?php
$from = $_GET['from'] ?? 'default';

// Configurações visuais e de conteúdo
$configuracoes = [
    'tech_rocket' => [
        'titulo' => 'Solicitação Recebida!',
        'subtitulo' => 'Em breve um de nossos especialistas entrará em contato.',
        'css' => 'assets/css/techrocket.css',
        'cor_rastro' => '#818cf8',
        'classe_bg' => 'bg-[#0f172a]', // Fundo escuro tech
        'card_bg' => 'bg-[#1e293b]',
        'btn_class' => 'bg-indigo-600 hover:bg-indigo-700',
        'link_btn' => 'https://wa.link/90wrhg', // Link do WhatsApp da Tech Rocket
        'text_btn' => 'WhatsApp Tech Rocket'
    ],
    'daven_iori' => [
        'titulo' => 'Obrigado pela sua Escolha!',
        'subtitulo' => 'Sua jornada com a Daven & Iori começou. Verifique seu e-mail.',
        'css' => 'assets/css/daven_iori.css', // O CSS específico da loja
        'cor_rastro' => '#C5A059', // Dourado
        'classe_bg' => 'bg-[#4A0E4A]', // Fundo deep purple 
        'card_bg' => 'bg-[#1A2238]',
        'btn_class' => 'bg-[#C5A059] text-white hover:bg-[#a88a4d]',
        'link_btn' => 'https://daveniori.lojavirtualnuvem.com.br', // Link para a loja Daven & Iori
        'text_btn' => 'Visitar Loja Daven & Iori'
    ],
    // 'maternidade' => [
    //     'titulo' => 'Parabéns, Mãezona!',
    //     'subtitulo' => 'O guia está a caminho. Ouça o recado da Taoni abaixo:',
    //     'css' => 'assets/css/techrocket.css', // Usa a base tech, mas com cores suaves
    //     'cor_rastro' => '#fb7185',
    //     'classe_bg' => 'bg-[#fff5f6]',
    //     'btn_class' => 'bg-rose-500 hover:bg-rose-600'
    // ]
];

// Se não encontrar a origem, usa o padrão da Tec Rocket
$projeto = $configuracoes[$from] ?? $configuracoes['tech_rocket'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $projeto['titulo']; ?> | Sucesso</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="<?php echo $projeto['css']; ?>?v=<?php echo time(); ?>">

    <style>
        :root {
            --follower-color: <?php echo $projeto['cor_rastro'];
                                ?>;
        }

        /* Ajuste fino para garantir que o gradiente da Daven seja diferente do Tech */
        <?php if ($from == 'daven_iori'): ?>.gradient-text {
            background: linear-gradient(to right, #C5A059, #8E6D31);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        <?php endif;
        ?>
    </style>
</head>

<body class="<?php echo $projeto['classe_bg']; ?> transition-colors duration-700">
    <div id="mouse-follower"></div>

    <div class="max-w-2xl mx-auto min-h-screen flex items-center justify-center p-6">
        <div class="rocket-card p-12 rounded-3xl text-center shadow-2xl border border-white/10 <?php echo $projeto['card_bg']; ?>"
            data-aos="zoom-in">
            <h1 class="text-4xl font-black mb-4 gradient-text">
                <?php echo $projeto['titulo']; ?>
            </h1>
            <p class="text-slate-500 mb-10 text-lg">
                <?php echo $projeto['subtitulo']; ?>
            </p>

            <a href="<?php echo $projeto['link_btn']; ?>"
                class="<?php echo $projeto['btn_class']; ?> px-10 py-4 rounded-full font-bold transition-all transform hover:scale-105">
                <?php echo $projeto['text_btn']; ?>
            </a>
        </div>
    </div>

</body>

</html>
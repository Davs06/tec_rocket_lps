<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Órbita Não Encontrada | TechRocket</title>
    <meta name="robots" content="noindex, follow">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="/assets/css/tech_rocket.css">

    <style>
        .error-wrapper {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 1.5rem;
            position: relative;
            z-index: 1;
        }

        .error-card {
            max-width: 680px;
            width: 100%;
            padding: 3.5rem 2.5rem;
            text-align: center;
        }

        .error-code {
            font-family: var(--font-heading);
            font-size: 7rem;
            font-weight: 900;
            line-height: 1;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 0.5rem;
            letter-spacing: -2px;
            animation: float404 3s ease-in-out infinite alternate;
        }

        @keyframes float404 {
            0% { transform: translateY(0); }
            100% { transform: translateY(-12px); }
        }

        .error-title {
            font-family: var(--font-heading);
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: #fff;
        }

        .error-desc {
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.6;
            margin-bottom: 2.5rem;
            max-width: 520px;
            margin-left: auto;
            margin-right: auto;
        }

        .error-nav-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.25rem;
            margin-bottom: 2.5rem;
        }

        .error-nav-card {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid var(--border-light);
            border-radius: var(--radius-sm);
            padding: 1.25rem 1rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.65rem;
            transition: var(--transition-fast);
        }

        .error-nav-card:hover {
            border-color: var(--accent-cyan);
            background: rgba(0, 242, 254, 0.08);
            transform: translateY(-4px);
        }

        .error-nav-icon {
            font-size: 1.6rem;
        }

        .error-nav-label {
            font-family: var(--font-heading);
            font-weight: 700;
            font-size: 0.9rem;
            color: #fff;
        }

        @media (max-width: 640px) {
            .error-nav-grid {
                grid-template-columns: 1fr;
            }
            .error-code {
                font-size: 5rem;
            }
            .error-card {
                padding: 2rem 1.5rem;
            }
        }
    </style>
</head>
<body>

    <!-- Ambient Space Background Canvas & Glows -->
    <div class="bg-glow-container">
        <canvas id="space-stars-canvas"></canvas>
        <div class="glow-orb orb-1"></div>
        <div class="glow-orb orb-2"></div>
        <div class="glow-orb orb-3"></div>
        <div class="grid-overlay"></div>
    </div>

    <div class="error-wrapper">
        <div class="glass-card error-card">
            <div class="error-code">404</div>
            <h1 class="error-title">Ops! Você Saiu da Órbita.</h1>
            <p class="error-desc">
                A página que você está procurando foi movida para outra dimensão ou nunca existiu no ecossistema da TechRocket.
            </p>

            <div class="error-nav-grid">
                <a href="https://techrocket.site" class="error-nav-card">
                    <i class="fa-solid fa-rocket error-nav-icon text-cyan"></i>
                    <span class="error-nav-label">TechRocket</span>
                </a>
                <a href="https://daveniori.com.br" class="error-nav-card">
                    <i class="fa-solid fa-bag-shopping error-nav-icon text-purple"></i>
                    <span class="error-nav-label">Daven & Iori</span>
                </a>
                <a href="https://maternidade.techrocket.site" class="error-nav-card">
                    <i class="fa-solid fa-graduation-cap error-nav-icon text-green"></i>
                    <span class="error-nav-label">Maternidade</span>
                </a>
            </div>

            <button onclick="window.history.back()" class="btn btn-secondary btn-sm">
                <i class="fa-solid fa-arrow-left"></i>
                <span>Voltar à Página Anterior</span>
            </button>
        </div>
    </div>

    <!-- Script Customizado -->
    <script src="/assets/js/tech_rocket.js"></script>
</body>
</html>

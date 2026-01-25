<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Órbita Não Encontrada | Tec Rocket</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/assets/css/techrocket.css">
    <link rel="stylesheet" href="/assets/css/mouse-follower.css">

    <style>
        :root {
            --follower-color: #818cf8;
        }

        .glitch {
            font-size: 8rem;
            font-weight: 900;
            line-height: 1;
            position: relative;
            color: #818cf8;
        }

        .rocket-float {
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }
        }
    </style>
</head>

<body class="bg-[#0f172a] text-white flex items-center justify-center min-h-screen overflow-hidden">

    <div id="mouse-follower"></div>

    <div class="max-w-4xl w-full text-center px-6 relative z-10">
        <div class="rocket-float text-8xl mb-4">🚀</div>

        <h1 class="glitch uppercase tracking-tighter">404</h1>
        <h2 class="text-2xl md:text-3xl font-bold mb-6 gradient-text">Ops! Você saiu da órbita.</h2>
        <p class="text-slate-400 max-w-lg mx-auto mb-10">
            A página que você está procurando foi movida para outra dimensão ou nunca existiu.
            Para onde deseja retornar agora, mestre?
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <a href="https://techrocket.site"
                class="p-4 rounded-2xl bg-white/5 border border-white/10 hover:bg-indigo-600/20 transition-all group">
                <span class="block text-2xl mb-2">⚡</span>
                <span class="font-bold text-indigo-400 group-hover:text-white">Tech Rocket</span>
            </a>
            <a href="https://daveniori.com.br"
                class="p-4 rounded-2xl bg-white/5 border border-white/10 hover:bg-yellow-600/20 transition-all group">
                <span class="block text-2xl mb-2">✨</span>
                <span class="font-bold text-yellow-400 group-hover:text-white">Daven & Iori</span>
            </a>
            <a href="https://techrocket.site/produtos/ebook-maternidade"
                class="p-4 rounded-2xl bg-white/5 border border-white/10 hover:bg-rose-600/20 transition-all group">
                <span class="block text-2xl mb-2">🤱</span>
                <span class="font-bold text-rose-400 group-hover:text-white">Maternidade & Lucro</span>
            </a>
        </div>

        <div class="mt-12">
            <button onclick="window.history.back()"
                class="text-sm text-slate-500 hover:text-white underline underline-offset-4">
                Voltar à página anterior
            </button>
        </div>
    </div>

    <script>
        const follower = document.getElementById('mouse-follower');
        document.addEventListener('mousemove', (e) => {
            follower.style.left = e.clientX + 'px';
            follower.style.top = e.clientY + 'px';
        });
    </script>
</body>

</html>
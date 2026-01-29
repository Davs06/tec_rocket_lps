<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Rocket - Soluções em Tecnologia e Automação</title>
    <meta name="description"
        content="Impulsionando negócios com tecnologia e automação. Desenvolvemos Landing Pages, Chatbots com IA e integrações personalizadas.">

    <link rel="icon" type="image/png" href="/assets/img/favicon-techRocket/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/assets/img/favicon-techRocket/favicon.svg" />
    <link rel="shortcut icon" href="/assets/img/favicon-techRocket/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/favicon-techRocket/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="Tech Rocket" />
    <link rel="manifest" href="/assets/img/favicon-techRocket/site.webmanifest" />

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" href="/assets/css/techrocket.css">
    <link rel="stylesheet" href="/assets/css/techrocket.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="/assets/css/mouse_follower.css">

    <style>
        :root {
            /* Usamos aspas simples para garantir que o CSS entenda como string se necessário */
            --follower-color: <?php echo $cor_rastro;
                                ?>;

        }
    </style>
</head>



<body class="font-sans">



    <nav class="p-6 flex justify-between items-center max-w-10xl mx-auto">
        <div class="flex items-center gap-2">
            <img src="/assets/img/tech_rocket/logotec_rocket.png" alt="Tec Rocket Logo" class="h-12">
            <span class="text-2xl font-bold tracking-tighter">TECH <span class="text-indigo-400">ROCKET</span></span>
        </div>
        <div class="hidden md:flex gap-8 text-sm font-medium uppercase tracking-widest">
            <a href="#produtos" class="hover:text-indigo-400">Produtos</a>
            <a href="#servicos" class="hover:text-indigo-400">Serviços</a>
            <a href="#parceiros" class="hover:text-indigo-400">Parceiros</a>
            <a href="#contato" class="bg-indigo-600 px-4 py-2 rounded-full">Orçamento</a>
        </div>
    </nav>

    <header class="py-20 px-6 text-center max-w-10xl mx-auto hero-section" data-aos="zoom-in">
        <h1 class="text-5xl md:text-7xl font-black mb-6 leading-tight">
            Impulsionando Negócios com <span class="gradient-text">Tecnologia e Automação</span>.
        </h1>
        <p class="text-lg text-slate-400 mb-10">
            Criamos ecossistemas digitais inteligentes, desde Landing Pages de alta conversão até Chatbots
            personalizados integrados com IA.
        </p>
        <div class="flex flex-col md:flex-row justify-center gap-4">
            <a href="#contato"
                class="bg-indigo-600 hover:bg-indigo-700 px-10 py-4 rounded-full font-bold text-lg transition shadow-lg shadow-indigo-500/20">
                Iniciar um Projeto
            </a>
            <a href="#produtos"
                class="border border-slate-700 hover:bg-slate-800 px-10 py-4 rounded-full font-bold text-lg transition">
                Ver Nossos Produtos
            </a>
        </div>
    </header>

    <section id="produtos" class="py-20 px-6 max-w-7xl mx-auto">
        <h2 class="text-3xl font-bold mb-12 text-center">Nossos <span class="text-indigo-400">Projetos & Produtos</span>
        </h2>

        <div class="grid md:grid-cols-2 gap-8">

            <div class="rocket-card p-8 rounded-3xl flex flex-col gap-6" data-aos="fade-right">
                <img src="/assets/img/Maternidade-e-Lucro.png" alt="Ebook Maternidade e Lucro"
                    class="w-full h-48 object-cover rounded-2xl shadow-lg">
                <div>
                    <h3 class="text-2xl font-bold mb-2">Maternidade & Lucro</h3>
                    <span class="text-xs font-mono bg-indigo-500/20 text-indigo-300 px-2 py-1 rounded">E-book</span>
                </div>
                <p class="text-slate-400 mb-6 text-sm">Um guia estratégico focado em mães que buscam independência
                    financeira através do digital.</p>
                <a href="https://maternidade.techrocket.site" class="text-indigo-400 font-bold hover:underline">Ver
                    Projeto
                    →</a>

            </div>

            <div class="rocket-card p-8 rounded-3xl flex flex-col gap-6" data-aos="fade-left">
                <img src="/assets/img/tech_rocket/DeI_mock.png" alt="Daven & Iori"
                    class="w-full h-48 object-cover rounded-2xl shadow-lg ">
                <div>
                    <h3 class="text-2xl font-bold mb-2">Daven & Iori</h3>
                    <span class="text-xs font-mono bg-indigo-500/20 text-indigo-300 px-2 py-1 rounded">E-commerce</span>
                </div>

                <p class="text-slate-400 mb-6 text-sm">Marca autoral de moda e lifestyle. Um projeto que une design
                    exclusivo e presença digital estratégica.</p>
                <a href="https://daveniori.com.br" target="_blank"
                    class="text-indigo-400 font-bold hover:underline">Acessar Loja →</a>

            </div>

        </div>
    </section>

    <section id="servicos" class="py-20 bg-slate-900/50">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl font-bold mb-12 text-center">Como Podemos <span class="text-indigo-400">Ajudar</span>
            </h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="rocket-card p-8 rounded-3xl" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-4xl mb-4">🚀</div>
                    <h3 class="text-xl font-bold mb-3">Landing Pages & Sites</h3>
                    <p class="text-slate-400 text-sm">Desenvolvimento focado em performance e conversão, utilizando as
                        melhores práticas de UX/UI.</p>
                </div>
                <div class="rocket-card p-8 rounded-3xl" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-4xl mb-4">🤖</div>
                    <h3 class="text-xl font-bold mb-3">Chatbots & IA</h3>
                    <p class="text-slate-400 text-sm">Automações inteligentes no WhatsApp e Web para escalar o seu
                        atendimento e vendas.</p>
                </div>
                <div class="rocket-card p-8 rounded-3xl" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-4xl mb-4">⚙️</div>
                    <h3 class="text-xl font-bold mb-3">Automações (n8n)</h3>
                    <p class="text-slate-400 text-sm">Conectamos as suas ferramentas favoritas para que a tecnologia
                        trabalhe por si.</p>
                </div>
                <div class="rocket-card p-8 rounded-3xl" data-aos="fade-up" data-aos-delay="400">
                    <div class="text-4xl mb-4">🛍️</div>
                    <h3 class="text-xl font-bold mb-3">E-commerce (Nuvemshop)</h3>
                    <p class="text-slate-400 text-sm">Criação de lojas virtuais completas na Nuvemshop, configuradas
                        para vender desde o primeiro dia.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="parceiros" class="py-20 px-6 text-center max-w-7xl mx-auto">
        <h2 class="text-2xl font-bold mb-4 text-slate-500 uppercase tracking-widest">Nossos Parceiros</h2>
        <div class="grid md:grid-cols-2 gap-12 max-w-4xl mx-auto">

            <div class="partner-item" data-aos="fade-up">
                <a href="https://somos.tec.br" target="_blank" class="partner-link mb-4 block">
                    <img src="/assets/img/tech_rocket/somos_tec.png" alt="Logo SomosTec Br"
                        class="h-16 mx-auto partner-logo">
                </a>
                <h3 class="text-xl font-bold text-indigo-400 mb-2">SomosTec BR</h3>
                <p class="text-slate-400 text-sm leading-relaxed">
                    Na SomosTecBR, criamos sistemas, estratégias e ferramentas digitais para ajudar sua empresa a
                    prosperar de verdade.
                </p>
            </div>

            <div class="partner-item" data-aos="fade-up" data-aos-delay="200">
                <a href="https://integrastation.com.br" target="_blank" class="partner-link mb-4 block">
                    <img src="/assets/img/tech_rocket/integrastatiom-removebg.png" alt="Logo Integra Station"
                        class="h-16 mx-auto partner-logo">
                </a>
                <p class="text-slate-400 text-sm leading-relaxed">
                    Pare de perder oportunidades. Com a INTEGRA Station, você constrói a estrutura digital de autoridade
                    que seu negócio precisa para capturar leads qualificados, nutrir relacionamentos e escalar suas
                    vendas de forma previsível e automatizada.
                </p>
            </div>

        </div>
    </section>

    <section id="contato" class="py-20 px-6 max-w-4xl mx-auto text-center" data-aos="fade-up">
        <h2 class="text-4xl font-bold mb-4">Pronto para Começar?</h2>
        <p class="text-slate-400 mb-10">Solicite um orçamento personalizado para o seu negócio.</p>

        <form action="/processa.php" method="POST" class="rocket-card p-8 md:p-12 rounded-3xl text-left">
            <input type="hidden" name="origem" value="tech_rocket_institucional">
            <div class="grid md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label class="block text-sm font-medium mb-2 text-slate-400">Nome</label>
                    <input type="text" name="nome" required
                        class="w-full bg-slate-800 border border-slate-700 rounded-xl p-4 focus:border-indigo-500 outline-none">
                </div>
                <div>
                    <label class="block text-sm font-medium mb-2 text-slate-400">E-mail</label>
                    <input type="email" name="email" required
                        class="w-full bg-slate-800 border border-slate-700 rounded-xl p-4 focus:border-indigo-500 outline-none">
                </div>
            </div>
            <div class="mb-6">
                <label class="block text-sm font-medium mb-2 text-slate-400">WhatsApp</label>
                <input type="text" name="whatsapp" required
                    class="w-full bg-slate-800 border border-slate-700 rounded-xl p-4 focus:border-indigo-500 outline-none">
            </div>
            <button type="submit"
                class="w-full bg-indigo-600 hover:bg-indigo-700 py-4 rounded-xl font-bold text-lg transition">
                Enviar Solicitação
            </button>
        </form>
    </section>

    <footer class="py-10 border-t border-slate-800 text-center text-slate-500 text-sm">
        <p>&copy; <?php echo date("Y"); ?> Impulsionando o futuro hoje.</p>
    </footer>

    <div id="mouse-follower"></div>


    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        const follower = document.getElementById('mouse-follower');

        // Seguir o mouse
        window.addEventListener('mousemove', (e) => {
            follower.style.left = e.clientX + 'px';
            follower.style.top = e.clientY + 'px';
        });

        // Efeito de Interação: Aumentar ao passar em links/botões
        const interactables = document.querySelectorAll('a, button, input, .card-produto');
        interactables.forEach(el => {
            el.addEventListener('mouseenter', () => {
                follower.style.transform = 'translate(-50%, -50%) scale(3)';
                follower.style.opacity = '0.3';
            });
            el.addEventListener('mouseleave', () => {
                follower.style.transform = 'translate(-50%, -50%) scale(1)';
                follower.style.opacity = '0.6';
            });
        });
    </script>
    <script>
        AOS.init({
            duration: 1000,
            once: false
        });
    </script>
</body>

</html>
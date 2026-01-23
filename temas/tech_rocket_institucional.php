<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tec Rocket - Soluções em Tecnologia e Automação</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" href="/assets/css/techrocket.css">
    <link rel="stylesheet" href="assets/css/mouse_follower.css">
</head>

<body class="font-sans">

    <div id="mouse-follower"></div>
    <style>
        :root {
            --follower-color: <?php echo $cor_rastro;
                                ?>;
        }
    </style>

    <nav class="p-6 flex justify-between items-center max-w-7xl mx-auto">
        <div class="flex items-center gap-2">
            <img src="/assets/img/tech_rocket/logotec_rockett.png" alt="Tec Rocket Logo" class="h-12">
            <span class="text-2xl font-bold tracking-tighter">TEC <span class="text-indigo-400">ROCKET</span></span>
        </div>
        <div class="hidden md:flex gap-8 text-sm font-medium uppercase tracking-widest">
            <a href="#produtos" class="hover:text-indigo-400">Produtos</a>
            <a href="#servicos" class="hover:text-indigo-400">Serviços</a>
            <a href="#parceiros" class="hover:text-indigo-400">Parceiros</a>
            <a href="#contato" class="bg-indigo-600 px-4 py-2 rounded-full">Orçamento</a>
        </div>
    </nav>

    <header class="py-20 px-6 text-center max-w-4xl mx-auto hero-section" data-aos="zoom-in">
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
        <h2 class="text-3xl font-bold mb-12 text-center">Nossos <span class="text-indigo-400">Produtos</span></h2>
        <div class="grid md:grid-cols-1 gap-8 max-w-2xl mx-auto">
            <div class="rocket-card p-8 rounded-3xl flex flex-col md:flex-row gap-8 items-center" data-aos="fade-up">
                <img src="/assets/img/Maternidade-e-Lucro.png" alt="Ebook Maternidade e Lucro"
                    class="w-48 shadow-2xl rounded-lg">
                <div>
                    <h3 class="text-2xl font-bold mb-2">E-book Maternidade & Lucro</h3>
                    <p class="text-slate-400 mb-6">Um guia prático para mães que desejam empreender com o apoio da
                        tecnologia e automação.</p>
                    <a href="/produtos/ebook-maternidade" class="text-indigo-400 font-bold hover:underline">Ver detalhes
                        do produto →</a>
                </div>
            </div>
        </div>
    </section>

    <section id="servicos" class="py-20 bg-slate-900/50">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl font-bold mb-12 text-center">Como Podemos <span class="text-indigo-400">Ajudar</span>
            </h2>
            <div class="grid md:grid-cols-3 gap-8">
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
                    <h3 class="text-xl font-bold mb-3">Integrações (n8n)</h3>
                    <p class="text-slate-400 text-sm">Conectamos as suas ferramentas favoritas para que a tecnologia
                        trabalhe por si.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="parceiros" class="py-20 px-6 text-center max-w-7xl mx-auto">
        <h2 class="text-2xl font-bold mb-12 text-slate-500 uppercase tracking-widest">Nossos Parceiros de Ecossistema
        </h2>
        <div
            class="flex flex-wrap justify-center gap-12 grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition duration-500">
            <div class="text-2xl font-bold">SomosTec Br</div>
            <div class="text-2xl font-bold">Integra Station</div>
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
        <p>&copy; 2026 Tec Rocket. Impulsionando o futuro hoje.</p>
    </footer>




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
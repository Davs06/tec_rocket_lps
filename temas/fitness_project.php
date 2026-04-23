<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page de Alta Conversão - Modelo Fitness</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .bg-fitness {
            background-color: #0a0a0a;
        }

        .text-accent {
            color: #ccff00;
        }

        /* Verde limão/neon estilo fitness */
        .bg-accent {
            background-color: #ccff00;
        }
    </style>
</head>

<body class="bg-fitness text-white font-sans">

    <section class="py-16 px-4 max-w-5xl mx-auto text-center">
        <h1 class="text-4xl md:text-6xl font-black uppercase italic leading-tight mb-6">
            TRANSFORME SEU CORPO EM <span class="text-accent">90 DIAS</span> COM O MÉTODO X
        </h1>
        <p class="text-gray-400 text-lg mb-8 max-w-2xl mx-auto">
            Chega de treinos genéricos. Tenha um acompanhamento de elite desenhado para sua genética e rotina.
        </p>

        <div
            class="relative aspect-video bg-gray-800 rounded-xl shadow-2xl border-2 border-gray-700 overflow-hidden mb-10">
            <div class="absolute inset-0 flex items-center justify-center">
                <i
                    class="fa-solid fa-play text-6xl text-accent opacity-80 cursor-pointer hover:scale-110 transition"></i>
            </div>
            <img src="https://via.placeholder.com/1280x720/1a1a1a/666666?text=VIDEO+DE+VENDAS+(VSL)"
                class="w-full h-full object-cover">
        </div>

        <a href="#planos"
            class="inline-block bg-accent text-black font-bold py-5 px-10 rounded-full text-xl uppercase tracking-widest hover:scale-105 transition-transform shadow-[0_0_20px_rgba(204,255,0,0.4)]">
            Quero começar agora!
        </a>
    </section>

    <section class="py-20 bg-zinc-900">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-12 uppercase italic">Resultados Reais de Alunos</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-black p-2 rounded-lg border border-zinc-800">
                    <img src="https://via.placeholder.com/400x500/111/fff?text=Antes+e+Depois+1" class="rounded mb-4">
                    <p class="italic text-gray-400">"Perdi 12kg e recuperei minha autoestima em 3 meses."</p>
                </div>
                <div class="bg-black p-2 rounded-lg border border-zinc-800">
                    <img src="https://via.placeholder.com/400x500/111/fff?text=Antes+e+Depois+2" class="rounded mb-4">
                    <p class="italic text-gray-400">"O melhor investimento que fiz na minha saúde."</p>
                </div>
                <div class="bg-black p-2 rounded-lg border border-zinc-800">
                    <img src="https://via.placeholder.com/400x500/111/fff?text=Antes+e+Depois+3" class="rounded mb-4">
                    <p class="italic text-gray-400">"Definição muscular que eu nunca achei possível."</p>
                </div>
            </div>
        </div>
    </section>

    <section id="planos" class="py-20 px-4 max-w-6xl mx-auto text-center">
        <h2 class="text-4xl font-black mb-16 uppercase italic">Escolha o seu plano</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-zinc-900 border border-zinc-800 p-8 rounded-2xl">
                <h3 class="text-xl font-bold mb-4">MENSAL</h3>
                <div class="text-4xl font-black mb-6 italic text-accent">R$ 147<span
                        class="text-sm font-normal text-white">/mês</span></div>
                <ul class="text-left text-gray-400 space-y-3 mb-8">
                    <li><i class="fa-solid fa-check text-accent mr-2"></i> Treino Individualizado</li>
                    <li><i class="fa-solid fa-check text-accent mr-2"></i> Suporte via App</li>
                </ul>
                <button
                    class="w-full py-3 border border-accent text-accent font-bold rounded-lg hover:bg-accent hover:text-black transition">ASSINAR
                    AGORA</button>
            </div>

            <div class="bg-zinc-800 border-2 border-accent p-8 rounded-2xl transform scale-105 shadow-xl relative">
                <span
                    class="absolute -top-4 left-1/2 -translate-x-1/2 bg-accent text-black text-xs font-black px-4 py-1 rounded-full uppercase">Mais
                    Vendido</span>
                <h3 class="text-xl font-bold mb-4">TRIMESTRAL</h3>
                <div class="text-4xl font-black mb-6 italic text-accent">R$ 347<span
                        class="text-sm font-normal text-white">/total</span></div>
                <ul class="text-left text-gray-300 space-y-3 mb-8">
                    <li><i class="fa-solid fa-check text-accent mr-2"></i> Treino Individualizado</li>
                    <li><i class="fa-solid fa-check text-accent mr-2"></i> Guia Alimentar</li>
                    <li><i class="fa-solid fa-check text-accent mr-2"></i> Suporte Prioritário</li>
                </ul>
                <button class="w-full py-4 bg-accent text-black font-black rounded-lg hover:scale-105 transition">QUERO
                    ESSE!</button>
            </div>

            <div class="bg-zinc-900 border border-zinc-800 p-8 rounded-2xl text-gray-500">
                <h3 class="text-xl font-bold mb-4">SEMESTRAL</h3>
                <div class="text-4xl font-black mb-6 italic text-accent">R$ 597<span
                        class="text-sm font-normal text-white">/total</span></div>
                <ul class="text-left space-y-3 mb-8">
                    <li><i class="fa-solid fa-check text-accent mr-2"></i> Tudo do Trimestral</li>
                    <li><i class="fa-solid fa-check text-accent mr-2"></i> Avaliação Mensal</li>
                </ul>
                <button
                    class="w-full py-3 border border-zinc-700 font-bold rounded-lg hover:border-accent hover:text-accent transition">ASSINAR
                    AGORA</button>
            </div>
        </div>
    </section>

    <section class="py-20 bg-zinc-900">
        <div class="max-w-3xl mx-auto px-4">
            <h2 class="text-3xl font-bold mb-10 text-center uppercase italic">Dúvidas Frequentes</h2>
            <div class="space-y-4">
                <details class="bg-black p-4 rounded-lg border border-zinc-800 cursor-pointer group">
                    <summary class="font-bold list-none flex justify-between items-center">
                        Para quem é esse método?
                        <i class="fa-solid fa-chevron-down group-open:rotate-180 transition"></i>
                    </summary>
                    <p class="mt-4 text-gray-400">Para qualquer pessoa que deseja sair do sedentarismo ou otimizar
                        ganhos de massa muscular com acompanhamento profissional.</p>
                </details>
                <details class="bg-black p-4 rounded-lg border border-zinc-800 cursor-pointer group">
                    <summary class="font-bold list-none flex justify-between items-center">
                        Preciso treinar em academia?
                        <i class="fa-solid fa-chevron-down group-open:rotate-180 transition"></i>
                    </summary>
                    <p class="mt-4 text-gray-400">Não! Adaptamos seu treino para casa, parque ou academia, conforme sua
                        disponibilidade.</p>
                </details>
            </div>
        </div>
    </section>

    <a href="https://wa.me/SEUNUMERO"
        class="fixed bottom-6 right-6 bg-green-500 w-16 h-16 rounded-full flex items-center justify-center text-3xl shadow-lg hover:scale-110 transition z-50">
        <i class="fa-brands fa-whatsapp"></i>
    </a>

</body>

</html>
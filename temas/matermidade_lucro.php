<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maternidade & Lucro | Guia Prático para Mães</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #fff5f5 0%, #fed7d7 100%);
        }
    </style>
</head>

<body class="bg-white text-gray-800">

    <header class="gradient-bg border-b border-rose-100">
        <div class="max-w-6xl mx-auto px-6 py-16 md:flex items-center gap-12">
            <div class="md:w-1/2 text-center md:text-left">
                <span class="text-rose-500 font-bold tracking-widest uppercase text-sm">Por: Tec Rocket
                </span>
                <h1 class="mt-4 text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight">
                    Maternidade & Lucro: <br>
                    <span class="text-rose-500 text-3xl md:text-4xl">Ganhe Dinheiro Online perto do seu
                        bebê.</span>
                </h1>
                <p class="mt-6 text-lg text-gray-600 italic">
                    "Transforme seu tempo livre em oportunidades de lucro sem se afastar do seu filho."
                </p>
                <div class="mt-10">
                    <a href="#comprar"
                        class="bg-rose-500 hover:bg-rose-600 text-white font-bold py-4 px-8 rounded-full text-lg transition shadow-xl inline-block">
                        Quero Garantir Meu Acesso
                    </a>
                </div>
            </div>

            <div class="md:w-1/2 mt-12 md:mt-0">
                <img src="/assets/img/mamae-crianca.png" alt="Mãe empreendedora com bebê"
                    class="rounded-2xl shadow-2xl w-full object-cover h-80 md:h-[450px]">
            </div>
        </div>
    </header>

    <section class="py-12 bg-white">
        <div class="max-w-5xl mx-auto px-6 text-center">
            <p class="text-gray-500 uppercase tracking-widest text-xs font-bold mb-4">O que você vai receber
            </p>

            <div class="flex justify-center mb-8">
                <img src="/assets/img/Maternidade-e-Lucro.png" alt="Mockup do E-book Maternidade & Lucro"
                    class="w-64 md:w-96 drop-shadow-2xl">
            </div>

            <h2 class="text-2xl font-bold">Guia Prático para Mães Empreendedoras Digitais </h2>
        </div>
    </section>

    <section class="py-20 bg-rose-50/30">
        <div class="max-w-5xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-12">Opções Flexíveis e Lucrativas </h2>
            <div class="grid md:grid-cols-4 gap-8 text-left">

                <div class="p-6 border border-rose-50 rounded-xl bg-rose-50/30">
                    <div class="text-3xl mb-4">💡</div>
                    <h3 class="font-bold mb-2">Mentalidade</h3>
                    <p class="text-sm text-gray-500">Como identificar suas paixões e quebrar mitos sobre o
                        trabalho em casa. </p>
                </div>
                <div class="p-6 border border-rose-50 rounded-xl bg-rose-50/30">
                    <div class="text-3xl mb-4">🤝</div>
                    <h3 class="font-bold mb-2">Afiliados</h3>
                    <p class="text-sm text-gray-500">Recomende produtos que você já usa e confia para ganhar
                        comissões. </p>
                </div>
                <div class="p-6 border border-rose-50 rounded-xl bg-rose-50/30">
                    <div class="text-3xl mb-4">💻</div>
                    <h3 class="font-bold mb-2">Freelance</h3>
                    <p class="text-sm text-gray-500">Venda suas habilidades como assistente virtual,
                        redatora ou designer. </p>
                </div>
                <div class="p-6 border border-rose-50 rounded-xl bg-rose-50/30">
                    <div class="text-3xl mb-4">🤖</div>
                    <h3 class="font-bold mb-2">Automação</h3>
                    <p class="text-sm text-gray-500">Use a tecnologia para colocar suas tarefas repetitivas
                        no "piloto automático". </p>
                </div>

            </div>
        </div>
    </section>

    <section id="comprar" class="py-20 bg-gray-900 text-white overflow-hidden relative">
        <div class="max-w-3xl mx-auto px-6 text-center relative z-10">
            <h2 class="text-3xl md:text-4xl font-bold mb-6 italic">"Seu potencial é ilimitado! "</h2>
            <p class="text-rose-200 mb-10">Comece hoje a construir sua liberdade financeira perto de quem
                você ama.</p>

            <form action="processa.php" method="POST"
                class="bg-white p-8 rounded-2xl text-gray-900 shadow-2xl text-left">
                <div class="grid md:grid-cols-2 gap-4 mb-4">
                    <input type="text" name="nome" placeholder="Seu Nome" required
                        class="border p-4 rounded-lg outline-rose-500">
                    <input type="email" name="email" placeholder="Seu E-mail" required
                        class="border p-4 rounded-lg outline-rose-500">
                </div>
                <input type="text" name="whatsapp" placeholder="Seu WhatsApp (com DDD)" required
                    class="w-full border p-4 rounded-lg mb-6 outline-rose-500">

                <button type="submit"
                    class="w-full bg-green-500 hover:bg-green-600 text-white font-extrabold py-5 rounded-lg text-lg transition uppercase shadow-lg">
                    Quero Garantir Meu Acesso Agora
                </button>
            </form>
        </div>
    </section>

    <footer class="py-10 text-center text-gray-400 text-sm">
        &copy; <?php echo date("Y"); ?> Maternidade & Lucro | Por Tec Rocket
    </footer>

</body>

</html>
<!DOCTYPE html>
<html lang="pt-br" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instituto M. Braga - Karate Shotokan</title>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'dojo-red': '#cc0000',
                        'dojo-gold': '#d4af37',
                        'dojo-black': '#0b0b0b',
                        'dojo-card': '#141414',
                        'off-white': '#f9f9f9',
                        'preto-puro': '#000000',
                    },
                    fontFamily: {
                        montserrat: ['Montserrat', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <link rel="stylesheet" href="/assets/css/karate.css">
    <link rel="stylesheet" href="/assets/css/karate.css?v=<?php echo time(); ?>">


    <link rel="icon" type="image/png" href="/assets/img/material-m-braga/favicon-karate/favicon-96x96.png"
        sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/assets/img/material-m-braga/favicon-karate/favicon.svg" />
    <link rel="shortcut icon" href="/assets/img/material-m-braga/favicon-karate/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180"
        href="/assets/img/material-m-braga/favicon-karate/apple-touch-icon.png" />


    <meta property="og:title" content="Instituto M. Braga - Karate Shotokan">
    <meta name="description"
        content="Instituto M. Braga Karate Shotokan no Tucuruvi. Treine com o Sensei Marcelo Braga. Disciplina e tradição JKS.">
</head>

<body class="font-montserrat bg-off-white text-dojo-black leading-relaxed">

    <header
        class="hero-bg h-screen flex items-center justify-center text-center border-b-4 border-dojo-red px-4 relative">
        <div class="relative z-10">
            <img src="/assets/img/material-m-braga/logo-rmbg.png" alt="Instituto M. Braga"
                class="max-w-[280px] mx-auto mb-8">
            <h1 class="text-4xl md:text-6xl lg:text-7xl font-black uppercase tracking-tighter text-white">
                INSTITUTO <span class="text-dojo-red">M. BRAGA</span>
            </h1>
            <p class="text-lg tracking-[3px] mt-4 text-off-white uppercase">KARATE SHOTOKAN | JKS SÃO PAULO</p>
            <a href="https://wa.me/5511940620222" target="_blank"
                class="mt-10 inline-block bg-dojo-red text-white py-5 px-10 rounded font-bold uppercase transition-all hover:bg-white hover:text-dojo-red hover:-translate-y-1">
                Agendar Aula Experimental
            </a>
        </div>
    </header>

    <div
        class="bg-dojo-red text-white py-8 text-center text-xl md:text-3xl font-black italic uppercase shadow-2xl relative z-20">
        "NÃO NEGOCIE COM A PREGUIÇA!"
    </div>

    <section id="sobre" class="max-w-[1100px] mx-auto py-20 px-4">
        <h2 class="text-4xl font-black text-center uppercase mb-10">O <span class="text-dojo-red">DOJO</span></h2>
        <div class="max-w-3xl mx-auto text-center text-gray-600 mb-12">
            <p>Sob a liderança do Sensei Marcelo Braga, o Instituto M. Braga dedica-se ao ensino do Karate-do como
                ferramenta de formação de caráter, disciplina e excelência física. Nossa metodologia foca na tradição
                Shotokan com reconhecimento internacional.</p>
        </div>

        <div class="flex flex-wrap justify-center items-center gap-12 bg-white p-10 rounded-lg shadow-sm">
            <img src="/assets/img/material-m-braga/jks.jpeg" alt="JKS São Paulo" class="fed-img h-16 md:h-20">
            <img src="/assets/img/material-m-braga/fpk.jpeg" alt="FPK" class="fed-img h-16 md:h-20">
            <img src="/assets/img/material-m-braga/cbk.png" alt="CBK" class="fed-img h-16 md:h-20">
        </div>
    </section>

    <section id="horarios" class="bg-dojo-black py-20 px-4">
        <div class="max-w-[1100px] mx-auto">
            <h2 class="text-4xl font-black text-center uppercase text-white mb-10">NOSSOS <span
                    class="text-dojo-red">HORÁRIOS</span></h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div
                    class="bg-dojo-card p-10 border-t-4 border-dojo-red rounded-b-lg hover:scale-105 hover:border-dojo-gold transition-all duration-300">
                    <h3 class="text-dojo-gold uppercase font-bold text-lg mb-5">Segunda, Quarta e Sexta</h3>
                    <div class="text-white text-xl font-bold">
                        <p>17h00 às 18h15</p>
                        <p>18h20 às 19h45</p>
                    </div>
                </div>
                <div
                    class="bg-dojo-card p-10 border-t-4 border-dojo-red rounded-b-lg hover:scale-105 hover:border-dojo-gold transition-all duration-300">
                    <h3 class="text-dojo-gold uppercase font-bold text-lg mb-5">Terça e Quinta</h3>
                    <div class="text-white text-xl font-bold">
                        <p>08h00 às 09h00</p>
                        <p>09h00 às 10h15</p>
                    </div>
                </div>
                <div
                    class="bg-dojo-card p-10 border-t-4 border-dojo-red rounded-b-lg hover:scale-105 hover:border-dojo-gold transition-all duration-300">
                    <h3 class="text-dojo-gold uppercase font-bold text-lg mb-5">Sábado</h3>
                    <div class="text-white text-xl font-bold">
                        <p>09h00 às 11h00</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="localizacao" class="max-w-[1100px] mx-auto py-20 px-4">
        <h2 class="text-4xl font-black text-center uppercase mb-10 text-dojo-black">NOSSA <span
                class="text-dojo-red">LOCALIZAÇÃO</span></h2>
        <div class="flex flex-col lg:flex-row gap-8 bg-white p-5 rounded-lg shadow-md border border-gray-200">
            <div class="lg:flex-[2] rounded overflow-hidden border-2 border-dojo-red">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.814324151213!2d-46.605944523773194!3d-23.48536525791784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef7c085186943%3A0xb592aa3008c9f115!2sInstituto%20M.%20Braga%20Karate!5e0!3m2!1spt-BR!2sbr!4v1706220000000!5m2!1spt-BR!2sbr"
                    width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="lg:flex-1 flex flex-col justify-center text-center lg:text-left">
                <p class="text-dojo-black mb-4">
                    <strong class="text-lg">R. Borges Ladário, 68</strong><br>
                    Tucuruvi, São Paulo - SP<br>
                    <small class="text-gray-500">(Próximo à estação Metrô Parada Inglesa)</small>
                </p>
                <a href="https://maps.google.com/?q=Rua+Borges+Ladário+68+Tucuruvi" target="_blank"
                    class="inline-block border-b-2 border-dojo-red text-dojo-red font-black uppercase text-sm hover:text-dojo-black hover:border-dojo-black transition-all w-fit mx-auto lg:mx-0">
                    Ver no Google Maps
                </a>
            </div>
        </div>
    </section>

    <section id="unidades" class="max-w-[1100px] mx-auto pb-20 px-4">
        <h2 class="text-4xl font-black text-center uppercase mb-10">ONDE <span class="text-dojo-red">TREINAR</span></h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

            <div
                class="bg-white rounded-lg shadow-lg overflow-hidden border-2 border-dojo-gold hover:-translate-y-2 transition-all">
                <div class="bg-dojo-gold p-4 text-center">
                    <h3 class="text-white font-black text-lg">UNIDADE SEDE</h3>
                </div>
                <div class="p-8">
                    <p class="mb-5 leading-tight">
                        <i class="fas fa-map-marker-alt text-dojo-red mr-2"></i>
                        <strong>Rua Borges Ladário, 68</strong><br>
                        <span class="text-gray-600">Tucuruvi, São Paulo - SP</span><br>
                        <small class="text-gray-400">(Próximo à Estação Parada Inglesa)</small>
                    </p>
                    <div class="mb-5">
                        <h5 class="text-xs font-black uppercase tracking-widest mb-2">Horários:</h5>
                        <a href="#horarios"
                            class="inline-flex items-center gap-2 bg-red-50 text-dojo-red px-4 py-2 rounded font-bold text-sm border border-red-100 hover:bg-dojo-red hover:text-white transition-all">
                            <span>Nossos horários acima ⤴️</span>
                        </a>
                    </div>
                    <a href="https://maps.google.com/?q=Rua+Borges+Ladário+68+Tucuruvi" target="_blank"
                        class="block text-center border-2 border-dojo-black py-2 rounded font-black text-sm uppercase hover:bg-dojo-black hover:text-white transition-all">
                        Ver no Mapa
                    </a>
                </div>
            </div>

            <div
                class="bg-white rounded-lg shadow-lg overflow-hidden border-2 border-dojo-red hover:-translate-y-2 transition-all">
                <div class="bg-dojo-red p-4 text-center">
                    <h3 class="text-white font-black text-lg">FILIAL - JP ORIENTAL</h3>
                </div>
                <div class="p-8">
                    <p class="mb-5 leading-tight">
                        <i class="fas fa-map-marker-alt text-dojo-red mr-2"></i>
                        <strong>Av. Júlio Buono, 2028</strong><br>
                        <span class="text-gray-600">Vila Gustavo, São Paulo - SP</span><br>
                        <small class="text-gray-400">(Dentro do Centro de Treinamento JP)</small>
                    </p>
                    <div class="mb-5">
                        <h5 class="text-xs font-black uppercase tracking-widest mb-2">Horários do Karatê:</h5>
                        <p class="font-bold text-sm">Segunda, Quarta e Sexta:<br><span class="font-normal">18h15 às
                                19h15</span></p>
                    </div>
                    <a href="https://maps.google.com/?q=Avenida+Júlio+Buono+2028+Vila+Gustavo" target="_blank"
                        class="block text-center border-2 border-dojo-black py-2 rounded font-black text-sm uppercase hover:bg-dojo-black hover:text-white transition-all">
                        Ver no Mapa
                    </a>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-preto-puro py-16 px-4 text-center border-t border-gray-800">
        <div class="mb-8">
            <img src="/assets/img/material-m-braga/logo-footer.jpeg" alt="Instituto M. Braga"
                class="max-w-[180px] mx-auto rounded opacity-90 hover:opacity-100 hover:scale-105 transition-all">
        </div>

        <div class="text-gray-400 mb-8 space-y-2">
            <p><strong>📍 Localização:</strong> Rua Borges Ladário, 68</p>
            <p>Parada Inglêsa - São Paulo/SP</p>
            <p><strong>📞 Contato:</strong> (11) 94062-0222</p>
        </div>

        <div class="mb-8">
            <a href="https://www.instagram.com/institutombraga" target="_blank"
                class="inline-flex items-center gap-3 text-white font-bold border border-gray-700 px-6 py-3 rounded-full hover:bg-dojo-red hover:border-dojo-red transition-all">
                <i class="fab fa-instagram text-dojo-red text-xl"></i> @institutombraga
            </a>
        </div>

        <p class="text-xs text-gray-600 tracking-widest uppercase">
            © 2026 Instituto M. Braga Karate. Todos os direitos reservados. | Por Tech Rocket.
        </p>
    </footer>

</body>

</html>
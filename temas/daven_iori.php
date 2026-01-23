<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daven & Iori - A Nova Coleção</title>
    <link rel="icon" href="assets/img/favicon.ico" />
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png" />
    <link rel="stylesheet" href="/assets/css/mouse_follower.css">
    <link rel="manifest" href="/site.webmanifest">

    <link rel="stylesheet" href="assets/css/lp.css">

    <style>
        :root {
            /* Usamos aspas simples para garantir que o CSS entenda como string se necessário */
            --follower-color: <?php echo $cor_rastro;
                                ?>;

        }
    </style>
</head>


<body>

    <header class="header">
        <img src="assets/img/logo-DeI.png" alt="Logo Daven & Iori" class="logo">
        <a href="https://daveniori.lojavirtualnuvem.com.br" class="store-button">Visitar a Loja</a>
    </header>

    <main>
        <section class="hero reveal">
            <h1>Elegância em Cores</h1>
            <p>Descubra a nova coleção. Fluidez, sofisticação e os tons vibrantes da estação, curados para a mulher
                moderna.</p>
            <br>
            <a href="#cta-signup" class="store-button"
                style="background-color: transparent; color: var(--navy-blue); border: 2px solid var(--navy-blue);">Garantir
                Acesso Antecipado</a>
        </section>

        <section class="about reveal">
            <h2 class="title">A Essência da Coleção</h2>
            <p>Nossa nova temporada celebra a feminilidade com uma paleta de cores refrescante e tecidos que abraçam o
                movimento. Do tom menta suave ao azul vibrante, cada peça é desenhada com detalhes que fazem a
                diferença, como babados delicados e cortes impecáveis. Perfeito para iluminar o seu dia a dia com
                sofisticação.</p>
        </section>

        <div class="bow-separator reveal">
            <svg viewBox="0 0 120 40" xmlns="http://www.w3.org/2000/svg">
                <path d="M58 20 C58 18 62 18 62 20 C62 22 58 22 58 20 Z" fill="var(--gold)" fill-opacity="0.1" />

                <path d="M0 20 C15 20 25 20 40 20" stroke-opacity="0" />
                <path d="M58 20 C45 5 20 5 20 20 C20 35 45 30 58 21" />

                <path d="M62 20 C75 5 100 5 100 20 C100 35 75 30 62 21" />

                <path d="M59 22 C55 35 45 45 35 40" />
                <path d="M61 22 C65 35 75 45 85 40" />
            </svg>
        </div>

        <section class="sneak-peek">
            <h2 class="title reveal">Destaques da Temporada</h2>

            <div class="carousel-container reveal">
                <button class="carousel-button prev" style="left: 10px;">
                    <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 1L2 10L11 19" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>

                <div class="carousel-track">

                    <div class="carousel-slide active-slide">
                        <img src="assets/img/roupas/bata-gravata-2.png" alt="Blusa de babados cor menta">
                        <h3>Leveza Menta</h3>
                        <p>Blusa fluida com gola laço e detalhes em babados.</p>
                    </div>

                    <div class="carousel-slide">
                        <img src="assets/img/roupas/conjunto-colete-1.png" alt="Conjunto de alfaiataria azul">
                        <h3>Alfaiataria Moderna</h3>
                        <p>Conjunto em tom azul céu com corte estruturado.</p>
                    </div>

                    <div class="carousel-slide">
                        <img src="./assets/img/roupas/bata-lapela-1.webp" alt="Blusa amarela fluida">
                        <h3>Vibração Solar</h3>
                        <p>Tons quentes para iluminar sua produção.</p>
                    </div>

                </div>

                <button class="carousel-button next" style="right: 10px;">
                    <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L10 10L1 19" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
        </section>

        <section class="cta reveal" id="cta-signup">
            <h2 class="title">Entre para a Lista VIP</h2>
            <p>Seja a primeira a saber quando a coleção completa estiver disponível e receba um presente exclusivo de
                lançamento.</p>
            <form class="signup-form" action="">
                <input type="email" placeholder="Indisponivel no momento..." disabled>
                <button type="submit" disabled>Em breve</button>
            </form>
        </section>
    </main>

    <footer class="footer reveal">
        <div class="social-links">
            <a href="https://www.instagram.com/daveniori.co/" target="_blank" title="Instagram">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                </svg>
            </a>
            <a href="https://www.facebook.com/profile.php?id=61581374990637" target="_blank" title="Facebook">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                </svg>
            </a>
            <a href="#" target="_blank" title="WhatsApp">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path
                        d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                    </path>
                </svg>
            </a>
        </div>
        <p>&copy; <?php echo date("Y"); ?> Daven & Iori. Todos os direitos reservados.</p>
    </footer>



    <div id="mouse-follower"></div>

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
        function reveal() {
            var reveals = document.querySelectorAll(".reveal");

            for (var i = 0; i < reveals.length; i++) {
                var windowHeight = window.innerHeight;
                var elementTop = reveals[i].getBoundingClientRect().top;
                var elementVisible = 200;

                // Se o elemento estiver visível na tela
                if (elementTop < windowHeight - elementVisible) {
                    reveals[i].classList.add("active");
                }
                // NOVO: Se o elemento sair da tela (para baixo), remove a classe para animar de novo
                else {
                    reveals[i].classList.remove("active");
                }
            }
        }

        window.addEventListener("scroll", reveal);
        // Chama uma vez no carregamento para garantir que o topo já apareça
        reveal();

        document.addEventListener('DOMContentLoaded', () => {
            const track = document.querySelector('.carousel-track');
            const slides = Array.from(document.querySelectorAll('.carousel-slide'));
            const nextButton = document.querySelector('.carousel-button.next');
            const prevButton = document.querySelector('.carousel-button.prev');

            let currentIndex = 0; // Começa no primeiro slide

            // Função para mover o carrossel
            const updateCarousel = (index) => {
                // Remove a classe ativa de todos e adiciona no atual
                slides.forEach(slide => slide.classList.remove('active-slide'));
                slides[index].classList.add('active-slide');

                // Lógica de centralização para slides de 60%
                // 20% é a margem esquerda para centralizar um item de 60% (100 - 60) / 2
                // Subtraímos (index * 60) para mover a trilha para a esquerda
                const slideWidth = 60;
                const centerOffset = 20;
                const targetPos = centerOffset - (index * slideWidth);

                track.style.transform = `translateX(${targetPos}%)`;
            };

            // Evento Próximo
            nextButton.addEventListener('click', () => {
                if (currentIndex < slides.length - 1) {
                    currentIndex++;
                } else {
                    currentIndex = 0; // Loop infinito (volta para o primeiro)
                }
                updateCarousel(currentIndex);
            });

            // Evento Anterior
            prevButton.addEventListener('click', () => {
                if (currentIndex > 0) {
                    currentIndex--;
                } else {
                    currentIndex = slides.length - 1; // Loop infinito (vai para o último)
                }
                updateCarousel(currentIndex);
            });

            // Inicializa na posição correta
            updateCarousel(currentIndex);
        });
    </script>

</body>

</html>
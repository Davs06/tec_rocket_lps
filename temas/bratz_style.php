<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bratz Style - Sua Loja de Moda e Beleza</title>

    <link rel="stylesheet" href="/assets/css/style_bratz.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;700&family=Playfair+Display:wght@700;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="assets/css/mouse_follower.css">
</head>

<style>
    :root {
        --follower-color: "<?php echo $cor_rastro;
                            ?>";

    }
</style>

<body>

    <header class="hero">
        <div class="container">
            <div class="logo">Bratz Style</div>
            <h1>Moda feminina</h1>
            <p>Roupas e produtos de beleza e cosmeticos para você montar o look perfeito e se sentir uma diva.</p>
            <a href="https://www.instagram.com/bbratzstyle" target="_blank" class="btn-principal">Ver Coleção no
                Instagram</a>
        </div>
    </header>

    <main>
        <section class="produtos">
            <div class="container">
                <h3 data-aos="fade-up">Confira alguns dos</h3>
                <h2 data-aos="fade-up">Nossos Produtos ✨</h2>
                <div class="grid-produtos">
                    <div class="card-produto" data-aos="fade-up" data-aos-delay="100">
                        <div class="swiper swiper-card1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="./assets/img/roupas/look_1.png" alt="Roupas estilosas - Imagem 1">
                                </div>
                                <div class="swiper-slide">
                                    <img src="./assets/img/roupas/look_2.png" alt="Roupas estilosas - Imagem 2">
                                </div>
                                <div class="swiper-slide">
                                    <img src="./assets/img/roupas/look_3.png" alt="Roupas estilosas - Imagem 3">
                                </div>
                            </div>
                        </div>
                        <h3>Looks Y2K</h3>
                        <p>Tops, calças de cintura baixa e acessórios que voltaram com tudo!</p>
                    </div>

                    <div class="card-produto" data-aos="fade-up" data-aos-delay="200">
                        <div class="swiper swiper-card2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="./assets/img/produtos/produto_1.png" alt="Produtos de beleza - Imagem 1">
                                </div>
                                <div class="swiper-slide">
                                    <img src="./assets/img/produtos/produto_2.png" alt="Produtos de beleza - Imagem 2">
                                </div>

                            </div>
                        </div>
                        <h3>Beauty Zone</h3>
                        <p>Gloss, brilhos e tudo que você precisa para uma make icônica.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="parceria">
            <div class="container">
                <div class="parceria-conteudo">
                    <div class="parceria-texto" data-aos="fade-right">
                        <h2>Look Completo? Só com Unhas de Diva!</h2>
                        <p>
                            Seu estilo merece unhas perfeitas para combinar. Por isso, fechamos uma parceria exclusiva
                            com a <strong>Maju Nails</strong>, especialista em nail design.
                        </p>
                        <p>Clique no botão e transforme suas unhas em verdadeiras obras de arte!</p>
                        <a href="https://www.instagram.com/maju.designs_/" target="_blank"
                            class="btn-secundario">Conhecer Maju
                            Nails</a>
                    </div>
                    <div class="parceria-imagem" data-aos="fade-left">
                        <img src="./assets/img/maju_nails_2.png" alt="Design de Unhas por Maju Nails">
                    </div>
                </div>
            </div>
        </section>

        <section class="cta" data-aos="zoom-in">
            <div class="container">
                <h2>Gostou? Chame a gente no Insta!</h2>
                <p>Tire suas dúvidas e faça seu pedido diretamente pelo nosso Instagram.</p>
                <a href="https://www.instagram.com/bbratzstyle" target="_blank" class="btn-principal">@bbratzstyle</a>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Bratz Style. Todos os direitos reservados.</p>
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

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script>
        const swiper1 = new Swiper('.swiper-card1', {
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            }
        });

        const swiper2 = new Swiper('.swiper-card2', {
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            }
        });
    </script>

    <script>
        AOS.init({
            duration: 1000,

        });
    </script>

</body>

</html>
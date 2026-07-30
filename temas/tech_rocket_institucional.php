<?php header('Content-Type: text/html; charset=utf-8'); ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechRocket | Automações, Agentes de IA, Apps e Sites de Alta Performance</title>
    <meta name="description"
        content="Impulsionando negócios com tecnologia e automação. Desenvolvemos Landing Pages, Chatbots com IA, Automações n8n, E-commerce e Apps sob medida.">
    <link rel="canonical" href="https://techrocket.com.br/">

    <!-- Open Graph / Meta -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://techrocket.com.br/">
    <meta property="og:title" content="TechRocket - Soluções em Tecnologia e Automação">
    <meta property="og:description"
        content="Impulsionando negócios com tecnologia e automação. Desenvolvemos Landing Pages, Chatbots com IA e integrações personalizadas.">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="/assets/css/tech_rocket.css">
</head>

<body>

    <!-- Ambient Background Glows, Starry Space Canvas & Grid -->
    <div class="bg-glow-container">
        <canvas id="space-stars-canvas"></canvas>
        <div class="glow-orb orb-1"></div>
        <div class="glow-orb orb-2"></div>
        <div class="glow-orb orb-3"></div>
        <div class="grid-overlay"></div>
    </div>

    <!-- Header / Navbar -->
    <header class="navbar-header" id="header">
        <div class="container navbar-container">
            <a href="#" class="logo">
                <img src="/assets/img/tech_rocket/logotec_rocket.png" alt="TechRocket Logo" class="logo-img">
                <span class="logo-text">TECH <span class="gradient-text">ROCKET</span></span>
            </a>

            <nav class="nav-menu" id="nav-menu">
                <ul class="nav-list">
                    <li><a href="#produtos" class="nav-link">Produtos</a></li>
                    <li><a href="#servicos" class="nav-link">Soluções</a></li>
                    <li><a href="#agentes-ia" class="nav-link">Agentes IA</a></li>
                    <li><a href="#calculadora" class="nav-link">Calculadora ROI</a></li>
                    <li><a href="#parceiros" class="nav-link">Parceiro</a></li>
                    <li><a href="#faq" class="nav-link">FAQ</a></li>
                </ul>
            </nav>

            <div class="nav-actions">
                <div class="status-badge hide-mobile">
                    <span class="status-dot"></span>
                    <span>Projetos Abertos</span>
                </div>
                <a href="#contato" class="btn btn-primary btn-glow nav-btn-compact">
                    <span class="btn-text-desktop">Solicitar Orçamento</span>
                    <span class="btn-text-mobile">Orçamento</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
                <button class="mobile-toggle" id="mobile-toggle" aria-label="Abrir Menu">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
        </div>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="hero-section" id="hero">
            <div class="container hero-grid">
                <!-- Left Hero Content -->
                <div class="hero-content">
                    <div class="badge-pill">
                        <span class="badge-icon">✨</span>
                        <span>Ecossistemas Digitais & IA de Última Geração</span>
                    </div>

                    <h1 class="hero-title">
                        Decole seu Negócio com <span class="gradient-text">Automação</span>, <span
                            class="gradient-text-alt">Agentes de IA</span> e Softwares Modernos
                    </h1>

                    <p class="hero-subtitle">
                        Transformamos rotinas manuais em máquinas autônomas de alta performance. Desenvolvemos agentes
                        inteligentes, fluxos automatizados em n8n, aplicativos e sites acelerados para multiplicar seu
                        faturamento.
                    </p>

                    <div class="hero-cta-group">
                        <a href="#contato" class="btn btn-lg btn-primary btn-glow">
                            <i class="fa-solid fa-rocket"></i>
                            <span>Solicitar Orçamento</span>
                        </a>
                        <a href="#agentes-ia" class="btn btn-lg btn-secondary">
                            <i class="fa-solid fa-robot"></i>
                            <span>Testar Agente ao Vivo</span>
                        </a>
                    </div>

                    <!-- Trust Stats Bar -->
                    <div class="hero-stats">
                        <div class="stat-item">
                            <span class="stat-number" data-target="98">%</span>
                            <span class="stat-label">Redução de Custos Op.</span>
                        </div>
                        <div class="stat-divider"></div>
                        <div class="stat-item">
                            <span class="stat-number" data-target="24">/7</span>
                            <span class="stat-label">Atendimento Autônomo</span>
                        </div>
                        <div class="stat-divider"></div>
                        <div class="stat-item">
                            <span class="stat-number" data-target="350">+</span>
                            <span class="stat-label">Fluxos Integrados</span>
                        </div>
                    </div>
                </div>

                <!-- Right Hero Visual: Interactive section1_tech_rocket.png -->
                <div class="hero-visual">
                    <div class="glass-card hero-interactive-card" id="hero-interactive-card">
                        <div class="card-header-dots">
                            <span class="dot dot-red"></span>
                            <span class="dot dot-yellow"></span>
                            <span class="dot dot-green"></span>
                            <span class="card-title-text">TechRocket Interactive Platform Showcase</span>
                        </div>

                        <div class="interactive-image-viewport">
                            <!-- Original Section 1 Image -->
                            <img src="/assets/img/tech_rocket/section1_tech_rocket.png"
                                alt="TechRocket Plataforma Interativa" class="hero-interactive-img"
                                id="hero-interactive-img">

                            <!-- Interactive Mouse Spotlight Glow -->
                            <div class="mouse-spotlight" id="mouse-spotlight"></div>

                            <!-- Animated Laser Scan Line -->
                            <div class="scan-line-overlay"></div>

                            <!-- Interactive Node Hotspots -->
                            <div class="interactive-hotspot hotspot-1" style="top: 25%; left: 30%;">
                                <span class="hotspot-pulse pulse-cyan"></span>
                                <div class="hotspot-tooltip">
                                    <i class="fa-solid fa-robot text-cyan"></i>
                                    <div>
                                        <strong>Agente IA de Vendas</strong>
                                        <p>Atendimento autônomo 24/7 no WhatsApp</p>
                                    </div>
                                </div>
                            </div>

                            <div class="interactive-hotspot hotspot-2" style="top: 55%; left: 65%;">
                                <span class="hotspot-pulse pulse-purple"></span>
                                <div class="hotspot-tooltip">
                                    <i class="fa-solid fa-diagram-project text-purple"></i>
                                    <div>
                                        <strong>Automação n8n</strong>
                                        <p>Integração de CRMs e ERPs sem falhas</p>
                                    </div>
                                </div>
                            </div>

                            <div class="interactive-hotspot hotspot-3" style="top: 75%; left: 35%;">
                                <span class="hotspot-pulse pulse-green"></span>
                                <div class="hotspot-tooltip">
                                    <i class="fa-solid fa-database text-green"></i>
                                    <div>
                                        <strong>Banco de Dados & APIs</strong>
                                        <p>Sincronização em tempo real</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Floating Badges -->
                            <div class="floating-badge badge-top-right">
                                <div class="badge-icon-box cyan">
                                    <i class="fa-solid fa-wand-magic-sparkles"></i>
                                </div>
                                <div class="badge-info">
                                    <span class="badge-title">Plataforma Interativa</span>
                                    <span class="badge-sub">Mova o cursor para explorar</span>
                                </div>
                            </div>

                            <div class="floating-badge badge-bottom-left">
                                <div class="badge-icon-box purple">
                                    <i class="fa-solid fa-bolt"></i>
                                </div>
                                <div class="badge-info">
                                    <span class="badge-title">Softwares & Automações</span>
                                    <span class="badge-sub">Alta Performance Garantida</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Produtos / Ecossistema TechRocket -->
        <section class="produtos-section section-padding" id="produtos">
            <div class="container">
                <div class="section-header text-center">
                    <span class="section-tag"><i class="fa-solid fa-layer-group"></i> Nossos Produtos & Marcas</span>
                    <h2 class="section-title">Ecossistema <span class="gradient-text">TechRocket</span></h2>
                    <p class="section-subtitle">Conheça os projetos e marcas desenvolvidas com o ecossistema de
                        tecnologia da TechRocket.</p>
                </div>

                <div class="produtos-grid">
                    <!-- Produto 1: Maternidade de Lucro -->
                    <div class="glass-card produto-card">
                        <div class="produto-img-box">
                            <img src="/assets/img/Maternidade-e-Lucro.png" alt="Maternidade de Lucro"
                                class="produto-img">
                        </div>
                        <div class="produto-content">
                            <div class="produto-tag purple">Plataforma Educacional</div>
                            <h3 class="produto-title">Maternidade de Lucro</h3>
                            <p class="produto-desc">
                                Projeto dedicado a empoderar mulheres e mães a conquistarem sua independência financeira
                                através do mercado digital e negócios escaláveis.
                            </p>
                            <div class="produto-features">
                                <span><i class="fa-solid fa-circle-check text-purple"></i> Funil de vendas digital
                                    otimizado</span>
                                <span><i class="fa-solid fa-circle-check text-purple"></i> Plataforma de alta
                                    conversão</span>
                            </div>
                            <a href="https://maternidade.techrocket.com.br" target="_blank" rel="noopener noreferrer"
                                class="btn btn-secondary btn-sm btn-block">
                                <span>Ver Projeto</span>
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Produto 2: Daven & Iori -->
                    <div class="glass-card produto-card">
                        <div class="produto-img-box">
                            <img src="/assets/img/tech_rocket/DeI_mock.png" alt="Daven & Iori E-commerce"
                                class="produto-img">
                        </div>
                        <div class="produto-content">
                            <div class="produto-tag cyan">E-commerce & Moda</div>
                            <h3 class="produto-title">Daven & Iori</h3>
                            <p class="produto-desc">
                                Marca autoral de moda e lifestyle. Um projeto que une design exclusivo, sofisticação e
                                presença digital estratégica integrada à Nuvemshop.
                            </p>
                            <div class="produto-features">
                                <span><i class="fa-solid fa-circle-check text-cyan"></i> Loja virtual de alta
                                    velocidade</span>
                                <span><i class="fa-solid fa-circle-check text-cyan"></i> Experiência de compra fluida no
                                    mobile</span>
                            </div>
                            <a href="https://daveniori.com.br" target="_blank" rel="noopener noreferrer"
                                class="btn btn-secondary btn-sm btn-block">
                                <span>Acessar Loja</span>
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section class="services-section section-padding" id="servicos">
            <div class="container">
                <div class="section-header text-center">
                    <span class="section-tag">Nossos Superpoderes</span>
                    <h2 class="section-title">Soluções de Alto Impacto para a sua Empresa</h2>
                    <p class="section-subtitle">Combinamos inteligência artificial avançada, automação de dados e
                        engenharia de software de ponta para impulsionar seu crescimento.</p>
                </div>

                <div class="services-grid">
                    <!-- Service 1 -->
                    <div class="glass-card service-card">
                        <div class="service-icon-wrapper purple-gradient">
                            <i class="fa-solid fa-robot"></i>
                        </div>
                        <h3 class="service-title">Agentes de IA & Chatbots</h3>
                        <p class="service-description">
                            Desenvolvemos agentes inteligentes capazes de realizar suporte, vendas, qualificações e
                            atendimento 24/7 via WhatsApp e Web sem erros.
                        </p>
                        <ul class="service-features">
                            <li><i class="fa-solid fa-check"></i> Integração com WhatsApp Business API</li>
                            <li><i class="fa-solid fa-check"></i> Arquitetura RAG & LLMs (OpenAI, Claude)</li>
                            <li><i class="fa-solid fa-check"></i> Respostas precisas treinadas com seus dados</li>
                        </ul>
                    </div>

                    <!-- Service 2 -->
                    <div class="glass-card service-card">
                        <div class="service-icon-wrapper cyan-gradient">
                            <i class="fa-solid fa-diagram-project"></i>
                        </div>
                        <h3 class="service-title">Automação de Processos (n8n)</h3>
                        <p class="service-description">
                            Conectamos seus sistemas e eliminamos tarefas repetitivas. Automatize planilhas, notas
                            fiscais, ERPs, CRMs e fluxos operacionais sem falhas.
                        </p>
                        <ul class="service-features">
                            <li><i class="fa-solid fa-check"></i> Workflows customizados em n8n</li>
                            <li><i class="fa-solid fa-check"></i> Sincronização em tempo real de bancos de dados</li>
                            <li><i class="fa-solid fa-check"></i> Notificações inteligentes e alertas operacionais</li>
                        </ul>
                    </div>

                    <!-- Service 3 -->
                    <div class="glass-card service-card">
                        <div class="service-icon-wrapper blue-gradient">
                            <i class="fa-solid fa-mobile-screen-button"></i>
                        </div>
                        <h3 class="service-title">Desenvolvimento de Apps & SaaS</h3>
                        <p class="service-description">
                            Criamos aplicativos web e mobile sob medida, com foco em usabilidade impecável, alta
                            velocidade e arquitetura escalável pronta para milhares de usuários.
                        </p>
                        <ul class="service-features">
                            <li><i class="fa-solid fa-check"></i> Apps Nativos & PWA (React / Node / Python)</li>
                            <li><i class="fa-solid fa-check"></i> Dashboards e Painéis Administrativos</li>
                            <li><i class="fa-solid fa-check"></i> Segurança reforçada e APIs REST/GraphQL</li>
                        </ul>
                    </div>

                    <!-- Service 4 -->
                    <div class="glass-card service-card">
                        <div class="service-icon-wrapper orange-gradient">
                            <i class="fa-solid fa-wand-magic-sparkles"></i>
                        </div>
                        <h3 class="service-title">Sites, Landing Pages & E-commerce</h3>
                        <p class="service-description">
                            Páginas de alta conversão e lojas virtuais na Nuvemshop projetadas para encantar visitantes
                            e transformá-los em clientes com velocidade extrema.
                        </p>
                        <ul class="service-features">
                            <li><i class="fa-solid fa-check"></i> Carregamento instantâneo e SEO Avançado</li>
                            <li><i class="fa-solid fa-check"></i> Configuração completa de Nuvemshop</li>
                            <li><i class="fa-solid fa-check"></i> Design 100% responsivo e moderno</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Interactive AI Agent Playground -->
        <section class="agent-playground-section section-padding" id="agentes-ia">
            <div class="container">
                <div class="glass-card playground-wrapper">
                    <div class="playground-info">
                        <span class="section-tag"><i class="fa-solid fa-robot"></i> Experimente Agora</span>
                        <h2 class="playground-title">Veja um Agente TechRocket em Ação</h2>
                        <p class="playground-desc">
                            Interaja com nosso simulador de Agente IA em tempo real. Veja como ele responde
                            instantaneamente, qualifica potenciais clientes e fornece informações precisas 24h por dia.
                        </p>

                        <div class="quick-questions">
                            <p class="quick-title">Sugestões de perguntas para testar:</p>
                            <button class="chip-btn"
                                data-question="Como o chatbot de IA pode atender meus clientes no WhatsApp?">
                                💬 Como a IA atende no WhatsApp?
                            </button>
                            <button class="chip-btn"
                                data-question="Qual é o prazo médio para criar uma automação em n8n?">
                                ⚡ Qual o prazo de entrega?
                            </button>
                            <button class="chip-btn"
                                data-question="Vocês integram a loja Nuvemshop com automações em n8n?">
                                🛍️ Como funciona com a Nuvemshop?
                            </button>
                        </div>
                    </div>

                    <!-- Chat UI Widget -->
                    <div class="chat-widget-box">
                        <div class="chat-header">
                            <div class="agent-avatar">
                                <i class="fa-solid fa-rocket"></i>
                            </div>
                            <div class="agent-details">
                                <h4>RocketBot AI</h4>
                                <span class="agent-status"><span class="status-dot green"></span> Atendendo 24/7</span>
                            </div>
                        </div>

                        <div class="chat-messages" id="chat-messages">
                            <div class="message msg-agent">
                                <div class="msg-content">
                                    🚀 Olá! Sou o assistente de IA da <strong>TechRocket</strong>. Como posso
                                    impulsionar o seu negócio com tecnologia e automação hoje?
                                </div>
                                <span class="msg-time">Agora</span>
                            </div>
                        </div>

                        <form class="chat-input-area" id="chat-form">
                            <input type="text" id="chat-input" placeholder="Escreva sua mensagem aqui..."
                                autocomplete="off">
                            <button type="submit" class="chat-send-btn" aria-label="Enviar Mensagem">
                                <i class="fa-solid fa-paper-plane"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- ROI Calculator Section -->
        <section class="calculator-section section-padding" id="calculadora">
            <div class="container">
                <div class="section-header text-center">
                    <span class="section-tag"><i class="fa-solid fa-calculator"></i> Simulação de Economia</span>
                    <h2 class="section-title">Quanto sua Empresa Pode Economizar com a TechRocket?</h2>
                    <p class="section-subtitle">Ajuste os valores abaixo e calcule em tempo real o retorno sobre
                        investimento (ROI) de automatizar seus processos operacionais.</p>
                </div>

                <div class="calculator-card glass-card">
                    <div class="calculator-controls">
                        <div class="control-group">
                            <div class="control-header">
                                <label for="team-size">Tamanho da Equipe Operacional:</label>
                                <span class="control-value" id="val-team-size">5 pessoas</span>
                            </div>
                            <input type="range" id="team-size" min="1" max="50" value="5" class="custom-range">
                        </div>

                        <div class="control-group">
                            <div class="control-header">
                                <label for="hours-spent">Horas manuais/repetitivas por semana por pessoa:</label>
                                <span class="control-value" id="val-hours-spent">12 horas</span>
                            </div>
                            <input type="range" id="hours-spent" min="2" max="30" value="12" class="custom-range">
                        </div>

                        <div class="control-group">
                            <div class="control-header">
                                <label for="hourly-cost">Custo médio por hora trabalhada (R$):</label>
                                <span class="control-value" id="val-hourly-cost">R$ 45/h</span>
                            </div>
                            <input type="range" id="hourly-cost" min="20" max="150" value="45" step="5"
                                class="custom-range">
                        </div>
                    </div>

                    <div class="calculator-results">
                        <div class="result-box primary">
                            <span class="result-title">Economia Anual Estimada</span>
                            <div class="result-amount gradient-text" id="res-annual-savings">R$ 112.320</div>
                            <span class="result-sub">Retorno financeiro direto reinvestível na sua empresa.</span>
                        </div>

                        <div class="results-mini-grid">
                            <div class="mini-result-box">
                                <i class="fa-solid fa-clock"></i>
                                <div class="mini-val" id="res-hours-saved">2.496 h</div>
                                <div class="mini-lbl">Horas salvas por ano</div>
                            </div>
                            <div class="mini-result-box">
                                <i class="fa-solid fa-chart-line"></i>
                                <div class="mini-val" id="res-efficiency">+ 80%</div>
                                <div class="mini-lbl">Ganho de eficiência</div>
                            </div>
                        </div>

                        <a href="#contato" class="btn btn-primary btn-block btn-glow">
                            <span>Quero Economizar Agora</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Partners Section -->
        <section class="parceiros-section section-padding" id="parceiros">
            <div class="container">
                <div class="section-header text-center">
                    <span class="section-tag"><i class="fa-solid fa-handshake"></i> Aliança Estratégica</span>
                    <h2 class="section-title">Nosso <span class="gradient-text">Parceiro</span> Oficial</h2>
                    <p class="section-subtitle">Trabalhamos ao lado da SomosTec BR para entregar soluções digitais de
                        alto nível.</p>
                </div>

                <div class="parceiro-single-box">
                    <div class="glass-card parceiro-card single-partner">
                        <div class="parceiro-logo-box">
                            <img src="/assets/img/tech_rocket/somos_tec.png" alt="SomosTec BR Logo"
                                class="parceiro-logo-img">
                        </div>
                        <div class="parceiro-info-box">
                            <h3 class="parceiro-title">SomosTec BR</h3>
                            <p class="parceiro-desc">
                                Na SomosTecBR, criamos sistemas, estratégias e ferramentas digitais para ajudar sua
                                empresa a prosperar de verdade no ambiente competitivo atual.
                            </p>
                            <a href="https://somos.tec.br" target="_blank" rel="noopener noreferrer"
                                class="btn btn-secondary btn-sm">
                                <span>Visitar somos.tec.br</span>
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="faq-section section-padding" id="faq">
            <div class="container">
                <div class="section-header text-center">
                    <span class="section-tag">Tire Suas Dúvidas</span>
                    <h2 class="section-title">Perguntas Frequentes</h2>
                </div>

                <div class="faq-container">
                    <div class="faq-item glass-card">
                        <button class="faq-question">
                            <span>Quais serviços a TechRocket oferece?</span>
                            <i class="fa-solid fa-chevron-down faq-icon"></i>
                        </button>
                        <div class="faq-answer">
                            <p>Desenvolvemos <strong>Landing Pages de alta conversão</strong>, <strong>Chatbots com
                                    IA</strong> para WhatsApp e Web, <strong>Automações no n8n</strong> integrando
                                sistemas e <strong>Lojas virtuais na Nuvemshop</strong>.</p>
                        </div>
                    </div>

                    <div class="faq-item glass-card">
                        <button class="faq-question">
                            <span>Quanto tempo leva para implementar uma automação ou Agente de IA?</span>
                            <i class="fa-solid fa-chevron-down faq-icon"></i>
                        </button>
                        <div class="faq-answer">
                            <p>Projetos de automação pontuais e agentes de IA iniciam testes operacionais em até
                                <strong>7 a 14 dias úteis</strong>.
                            </p>
                        </div>
                    </div>

                    <div class="faq-item glass-card">
                        <button class="faq-question">
                            <span>Como funciona a solicitação de orçamento?</span>
                            <i class="fa-solid fa-chevron-down faq-icon"></i>
                        </button>
                        <div class="faq-answer">
                            <p>Preencha o formulário abaixo ou fale conosco diretamente no WhatsApp. Alinhamos os
                                objetivos da sua empresa e enviamos uma proposta transparente com prazos e estimativa
                                clara de ROI.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="contact-section section-padding" id="contato">
            <div class="container">
                <div class="glass-card contact-wrapper">
                    <div class="contact-info">
                        <span class="section-tag">Próximo Passo</span>
                        <h2 class="contact-title">Pronto para Começar?</h2>
                        <p class="contact-desc">
                            Solicite um orçamento personalizado para o seu negócio e descubra como a tecnologia e a
                            automação podem acelerar seus resultados.
                        </p>

                        <div class="contact-highlights">
                            <div class="highlight-item">
                                <i class="fa-solid fa-circle-check text-cyan"></i>
                                <span>Diagnóstico focado nas suas metas e sem compromisso</span>
                            </div>
                            <div class="highlight-item">
                                <i class="fa-solid fa-circle-check text-cyan"></i>
                                <span>Proposta com estimativa clara de ROI e Prazos</span>
                            </div>
                        </div>

                        <div class="direct-channels">
                            <a href="https://wa.me/5511999999999?text=Ol%C3%A1!%20Gostaria%20de%20solicitar%20um%20or%C3%A7amento%20com%20a%20TechRocket"
                                target="_blank" rel="noopener noreferrer" class="whatsapp-direct">
                                <i class="fa-brands fa-whatsapp"></i>
                                <span>Falar diretamente via WhatsApp</span>
                            </a>
                        </div>
                    </div>

                    <!-- Form (matches processa.php) -->
                    <form action="/processa.php" method="POST" class="contact-form" id="lead-form">
                        <input type="hidden" name="origem" value="tech_rocket_institucional">
                        <h3 class="form-title">Solicitar Orçamento</h3>

                        <div class="form-group">
                            <label for="form-name">Seu Nome *</label>
                            <input type="text" id="form-name" name="nome" required placeholder="Ex: Carlos Silva">
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="form-email">E-mail *</label>
                                <input type="email" id="form-email" name="email" required
                                    placeholder="carlos@suaempresa.com">
                            </div>
                            <div class="form-group">
                                <label for="form-phone">WhatsApp *</label>
                                <input type="tel" id="form-phone" name="whatsapp" required
                                    placeholder="(11) 99999-9999">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="form-service">Principal Interesse *</label>
                            <select id="form-service" name="servico" required>
                                <option value="" disabled selected>Selecione o serviço</option>
                                <option value="agentes-ia">Agentes de IA & Chatbots</option>
                                <option value="automacao">Automação de Processos (n8n / APIs)</option>
                                <option value="apps">Desenvolvimento de App / Web SaaS</option>
                                <option value="site">Landing Pages, Sites & Nuvemshop</option>
                                <option value="combo">Combo Completo</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block btn-lg btn-glow">
                            <span>Enviar Solicitação</span>
                            <i class="fa-solid fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="site-footer">
        <div class="container footer-container">
            <div class="footer-brand">
                <a href="#" class="logo">
                    <img src="/assets/img/tech_rocket/logotec_rocket.png" alt="TechRocket Logo" class="logo-img">
                    <span class="logo-text">Tech<span class="gradient-text">Rocket</span></span>
                </a>
                <p class="footer-tagline">
                    Impulsionando o futuro hoje com IA, Automação e Engenharia de Software.
                </p>
            </div>

            <div class="footer-links">
                <h4>Navegação</h4>
                <ul>
                    <li><a href="#produtos">Produtos</a></li>
                    <li><a href="#servicos">Soluções</a></li>
                    <li><a href="#parceiros">Parceiro</a></li>
                    <li><a href="#contato">Orçamento</a></li>
                </ul>
            </div>

            <div class="footer-links">
                <h4>Ecossistema</h4>
                <ul>
                    <li><a href="https://maternidade.techrocket.com.br" target="_blank">Maternidade de Lucro</a></li>
                    <li><a href="https://daveniori.com.br" target="_blank">Daven & Iori</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container footer-bottom-flex">
                <p>&copy; 2026 TechRocket. Impulsionando o futuro hoje.</p>
                <div class="footer-status">
                    <span class="status-dot green"></span>
                    <span>Sistemas 100% Operacionais</span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Toast Container -->
    <div id="toast-container" class="toast-container"></div>

    <!-- Script Customizado -->
    <script src="/assets/js/tech_rocket.js"></script>
</body>

</html>
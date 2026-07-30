/**
 * TechRocket - Main JavaScript Controller (GitHub Multi-Tenant Asset)
 * Interactive Platform Showcase (section1_tech_rocket.png), Starry Space Background, ROI Calculator, Chatbot & Form logic.
 */

document.addEventListener('DOMContentLoaded', () => {
    initStarrySpace();
    initInteractiveHeroImage();
    initNavbar();
    initCounters();
    initRoiCalculator();
    initChatPlayground();
    initFaqAccordion();
    initContactForm();
});

/* ==========================================================================
   1. Starry Cosmic Space Canvas Engine (Stars & Shooting Stars)
   ========================================================================== */
function initStarrySpace() {
    const canvas = document.getElementById('space-stars-canvas');
    if (!canvas) return;

    const ctx = canvas.getContext('2d');
    let width = (canvas.width = window.innerWidth);
    let height = (canvas.height = window.innerHeight);

    window.addEventListener('resize', () => {
        width = canvas.width = window.innerWidth;
        height = canvas.height = window.innerHeight;
        createStars();
    });

    let mouseX = width / 2;
    let mouseY = height / 2;
    window.addEventListener('mousemove', (e) => {
        mouseX = e.clientX;
        mouseY = e.clientY;
    });

    const starColors = ['#ffffff', '#00f2fe', '#d8b4fe', '#ffb703', '#ffffff'];
    const starCount = Math.floor((width * height) / 4500);
    let stars = [];
    let shootingStars = [];

    function createStars() {
        stars = [];
        for (let i = 0; i < starCount; i++) {
            stars.push({
                x: Math.random() * width,
                y: Math.random() * height,
                radius: Math.random() * 1.6 + 0.4,
                color: starColors[Math.floor(Math.random() * starColors.length)],
                alpha: Math.random() * 0.8 + 0.2,
                twinkleSpeed: Math.random() * 0.03 + 0.005,
                twinkleAngle: Math.random() * Math.PI * 2,
                layer: Math.floor(Math.random() * 3) + 1
            });
        }
    }

    function createShootingStar() {
        const startX = Math.random() * width;
        const startY = Math.random() * (height * 0.5);
        const length = Math.random() * 80 + 60;
        const angle = (Math.random() * 20 + 35) * (Math.PI / 180);
        const speed = Math.random() * 8 + 10;

        shootingStars.push({
            x: startX,
            y: startY,
            dx: Math.cos(angle) * speed,
            dy: Math.sin(angle) * speed,
            length: length,
            life: 1,
            decay: Math.random() * 0.02 + 0.015,
            color: Math.random() > 0.5 ? '#00f2fe' : '#ffffff'
        });
    }

    createStars();

    // Spawn shooting star randomly every 3.5 seconds
    setInterval(() => {
        if (Math.random() > 0.3 && shootingStars.length < 2) {
            createShootingStar();
        }
    }, 3500);

    function animate() {
        ctx.clearRect(0, 0, width, height);

        // Draw Parallax Twinkling Stars
        stars.forEach(star => {
            star.twinkleAngle += star.twinkleSpeed;
            const twinkleAlpha = star.alpha + Math.sin(star.twinkleAngle) * 0.3;
            const currentAlpha = Math.max(0.1, Math.min(1, twinkleAlpha));

            // Parallax shift based on mouse position & layer
            const offsetX = (mouseX - width / 2) * 0.008 * star.layer;
            const offsetY = (mouseY - height / 2) * 0.008 * star.layer;

            const drawX = star.x + offsetX;
            const drawY = star.y + offsetY;

            ctx.beginPath();
            ctx.arc(drawX, drawY, star.radius, 0, Math.PI * 2);
            ctx.fillStyle = star.color;
            ctx.globalAlpha = currentAlpha;
            ctx.fill();

            // Glow around larger stars
            if (star.radius > 1.2) {
                ctx.beginPath();
                ctx.arc(drawX, drawY, star.radius * 2.5, 0, Math.PI * 2);
                ctx.fillStyle = star.color;
                ctx.globalAlpha = currentAlpha * 0.25;
                ctx.fill();
            }
        });

        // Draw Shooting Stars
        shootingStars.forEach((sStar, index) => {
            sStar.x += sStar.dx;
            sStar.y += sStar.dy;
            sStar.life -= sStar.decay;

            if (sStar.life <= 0) {
                shootingStars.splice(index, 1);
                return;
            }

            const tailX = sStar.x - (sStar.dx / 10) * sStar.length;
            const tailY = sStar.y - (sStar.dy / 10) * sStar.length;

            const grad = ctx.createLinearGradient(sStar.x, sStar.y, tailX, tailY);
            grad.addColorStop(0, sStar.color);
            grad.addColorStop(1, 'transparent');

            ctx.beginPath();
            ctx.moveTo(sStar.x, sStar.y);
            ctx.lineTo(tailX, tailY);
            ctx.strokeStyle = grad;
            ctx.lineWidth = 2;
            ctx.globalAlpha = sStar.life;
            ctx.stroke();
        });

        ctx.globalAlpha = 1;
        requestAnimationFrame(animate);
    }

    animate();
}

/* ==========================================================================
   2. Interactive Platform Image (section1_tech_rocket.png) with 3D Tilt & Spotlight
   ========================================================================== */
function initInteractiveHeroImage() {
    const card = document.getElementById('hero-interactive-card');
    const viewport = document.querySelector('.interactive-image-viewport');
    const spotlight = document.getElementById('mouse-spotlight');
    const img = document.getElementById('hero-interactive-img');

    if (!card || !viewport || !spotlight) return;

    viewport.addEventListener('mousemove', (e) => {
        const rect = viewport.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;

        // Move Spotlight Radial Light
        spotlight.style.left = `${x}px`;
        spotlight.style.top = `${y}px`;
        spotlight.style.opacity = '1';

        // Calculate 3D Tilt Angles (-10deg to +10deg)
        const centerX = rect.width / 2;
        const centerY = rect.height / 2;
        const rotateX = ((y - centerY) / centerY) * -10;
        const rotateY = ((x - centerX) / centerX) * 10;

        card.style.transform = `perspective(1000px) rotateX(${rotateX.toFixed(2)}deg) rotateY(${rotateY.toFixed(2)}deg) scale3d(1.02, 1.02, 1.02)`;
        if (img) {
            img.style.transform = `scale(1.04) translate(${(x - centerX) * 0.02}px, ${(y - centerY) * 0.02}px)`;
        }
    });

    viewport.addEventListener('mouseleave', () => {
        card.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1)';
        spotlight.style.opacity = '0';
        if (img) {
            img.style.transform = 'scale(1) translate(0px, 0px)';
        }
    });
}

/* ==========================================================================
   3. Navbar & Mobile Navigation
   ========================================================================== */
function initNavbar() {
    const header = document.getElementById('header');
    const mobileToggle = document.getElementById('mobile-toggle');
    const navMenu = document.getElementById('nav-menu');
    const navLinks = document.querySelectorAll('.nav-link');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 40) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });

    if (mobileToggle && navMenu) {
        mobileToggle.addEventListener('click', () => {
            navMenu.classList.toggle('active');
            const icon = mobileToggle.querySelector('i');
            if (navMenu.classList.contains('active')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-xmark');
            } else {
                icon.classList.remove('fa-xmark');
                icon.classList.add('fa-bars');
            }
        });

        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('active');
                const icon = mobileToggle.querySelector('i');
                if (icon) {
                    icon.classList.remove('fa-xmark');
                    icon.classList.add('fa-bars');
                }
            });
        });
    }
}

/* ==========================================================================
   4. Counter Numbers Animation
   ========================================================================== */
function initCounters() {
    const statNumbers = document.querySelectorAll('.stat-number');
    let animated = false;

    function startCounting() {
        statNumbers.forEach(stat => {
            const target = parseInt(stat.getAttribute('data-target'));
            const suffix = stat.textContent.replace(/[0-9]/g, '');
            let count = 0;
            const speed = target / 40;

            const updateCount = () => {
                count += speed;
                if (count < target) {
                    stat.textContent = Math.ceil(count) + suffix;
                    requestAnimationFrame(updateCount);
                } else {
                    stat.textContent = target + suffix;
                }
            };
            updateCount();
        });
    }

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !animated) {
                animated = true;
                startCounting();
            }
        });
    }, { threshold: 0.5 });

    const heroStats = document.querySelector('.hero-stats');
    if (heroStats) {
        observer.observe(heroStats);
    }
}

/* ==========================================================================
   5. ROI Calculator
   ========================================================================== */
function initRoiCalculator() {
    const inputTeam = document.getElementById('team-size');
    const inputHours = document.getElementById('hours-spent');
    const inputCost = document.getElementById('hourly-cost');

    const labelTeam = document.getElementById('val-team-size');
    const labelHours = document.getElementById('val-hours-spent');
    const labelCost = document.getElementById('val-hourly-cost');

    const resAnnualSavings = document.getElementById('res-annual-savings');
    const resHoursSaved = document.getElementById('res-hours-saved');

    if (!inputTeam || !inputHours || !inputCost) return;

    function calculateROI() {
        const teamSize = parseInt(inputTeam.value);
        const hoursPerWeek = parseInt(inputHours.value);
        const hourlyCost = parseInt(inputCost.value);

        labelTeam.textContent = `${teamSize} ${teamSize === 1 ? 'pessoa' : 'pessoas'}`;
        labelHours.textContent = `${hoursPerWeek} horas`;
        labelCost.textContent = `R$ ${hourlyCost}/h`;

        const totalHoursPerYear = teamSize * hoursPerWeek * 52;
        const hoursSaved = Math.round(totalHoursPerYear * 0.80);
        const annualSavingsBRL = hoursSaved * hourlyCost;

        const formattedSavings = new Intl.NumberFormat('pt-BR', {
            style: 'currency',
            currency: 'BRL',
            maximumFractionDigits: 0
        }).format(annualSavingsBRL);

        const formattedHours = new Intl.NumberFormat('pt-BR').format(hoursSaved);

        resAnnualSavings.textContent = formattedSavings;
        resHoursSaved.textContent = `${formattedHours} h`;
    }

    [inputTeam, inputHours, inputCost].forEach(input => {
        input.addEventListener('input', calculateROI);
    });

    calculateROI();
}

/* ==========================================================================
   6. Interactive AI Chatbot Simulator
   ========================================================================== */
function initChatPlayground() {
    const chatForm = document.getElementById('chat-form');
    const chatInput = document.getElementById('chat-input');
    const chatMessages = document.getElementById('chat-messages');
    const chipBtns = document.querySelectorAll('.chip-btn');

    if (!chatForm || !chatInput || !chatMessages) return;

    const botKnowledge = [
        {
            keywords: ['whatsapp', 'atendimento', 'vendas', 'ia'],
            response: '🚀 Nossos Chatbots com IA para WhatsApp atendem simultaneamente milhares de clientes 24/7, realizam qualificações estratégicas e agendam reuniões com integração direta no seu CRM.'
        },
        {
            keywords: ['prazo', 'tempo', 'demora', 'entrega'],
            response: '⚡ Criamos e homologamos automações em n8n e Chatbots com IA em apenas **7 a 14 dias úteis**.'
        },
        {
            keywords: ['nuvemshop', 'ecommerce', 'e-commerce', 'loja'],
            response: '🛍️ Desenvolvemos e configuramos lojas virtuais completas na Nuvemshop (como o case Daven & Iori), otimizando fretes, meios de pagamento e integração de pedidos.'
        },
        {
            keywords: ['preço', 'valor', 'orçamento', 'custo'],
            response: '💡 Cada projeto é personalizado para a sua operação. Preencha a seção de Orçamento abaixo para receber uma estimativa detalhada com análise de ROI.'
        }
    ];

    const defaultResponse = '🤖 Com a TechRocket, combinamos Inteligência Artificial, automação de dados e desenvolvimento moderno para acelerar seu crescimento. Gostaria de solicitar um orçamento personalizado?';

    function addMessage(text, sender = 'agent') {
        const msgDiv = document.createElement('div');
        msgDiv.className = `message msg-${sender}`;

        const timeStr = new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });

        msgDiv.innerHTML = `
            <div class="msg-content">${text}</div>
            <span class="msg-time">${timeStr}</span>
        `;

        chatMessages.appendChild(msgDiv);
        chatMessages.scrollTop = chatMessages.scrollHeight;
    }

    function handleUserSubmit(userQuestion) {
        if (!userQuestion.trim()) return;

        addMessage(userQuestion, 'user');
        chatInput.value = '';

        const lowerQ = userQuestion.toLowerCase();
        let matchedAns = defaultResponse;

        for (const item of botKnowledge) {
            if (item.keywords.some(kw => lowerQ.includes(kw))) {
                matchedAns = item.response;
                break;
            }
        }

        setTimeout(() => {
            addMessage(matchedAns, 'agent');
        }, 900);
    }

    chatForm.addEventListener('submit', (e) => {
        e.preventDefault();
        handleUserSubmit(chatInput.value);
    });

    chipBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const question = btn.getAttribute('data-question');
            handleUserSubmit(question);
        });
    });
}

/* ==========================================================================
   7. FAQ Accordion
   ========================================================================== */
function initFaqAccordion() {
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
        const questionBtn = item.querySelector('.faq-question');
        questionBtn.addEventListener('click', () => {
            const isOpen = item.classList.contains('active');
            faqItems.forEach(i => i.classList.remove('active'));
            if (!isOpen) item.classList.add('active');
        });
    });
}

/* ==========================================================================
   8. Contact Form & Toast Notifications
   ========================================================================== */
function initContactForm() {
    const form = document.getElementById('lead-form');
    if (!form) return;

    form.addEventListener('submit', (e) => {
        e.preventDefault();

        const name = document.getElementById('form-name').value;
        showToast(`🚀 Obrigado, ${name}! Recebemos sua solicitação de orçamento. Entraremos em contato em breve.`);
        form.reset();
    });
}

function showToast(message) {
    const container = document.getElementById('toast-container');
    if (!container) return;

    const toast = document.createElement('div');
    toast.className = 'toast';
    toast.innerHTML = `
        <i class="fa-solid fa-circle-check" style="color: var(--accent-cyan); font-size: 1.2rem;"></i>
        <span>${message}</span>
    `;

    container.appendChild(toast);

    setTimeout(() => {
        toast.style.opacity = '0';
        toast.style.transform = 'translateX(50px)';
        toast.style.transition = 'all 0.3s ease';
        setTimeout(() => toast.remove(), 300);
    }, 4500);
}

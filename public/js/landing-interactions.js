/**
 * LANDING INTERACTIONS - JavaScript
 * Librería Digital Espiritual
 * Interacciones y animaciones para la landing page
 */

// ===== VARIABLES GLOBALES =====
let lastScrollTop = 0;
const navbar = document.getElementById('navbar');
const mobileMenuToggle = document.getElementById('mobileMenuToggle');
const mobileMenu = document.getElementById('mobileMenu');
const scrollToTopBtn = document.getElementById('scrollToTop');

// ===== INICIALIZACIÓN =====
document.addEventListener('DOMContentLoaded', function() {
    initNavbar();
    initMobileMenu();
    initScrollToTop();
    initCounterAnimation();
    initCategoryFilter();
    initSmoothScroll();
    initScrollAnimations();
});

// ===== NAVBAR SCROLL EFFECT =====
function initNavbar() {
    window.addEventListener('scroll', function() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        // Añadir clase 'scrolled' cuando se hace scroll
        if (scrollTop > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
        
        lastScrollTop = scrollTop;
    });
}

// ===== MENÚ MÓVIL =====
function initMobileMenu() {
    // Toggle del menú móvil
    mobileMenuToggle.addEventListener('click', function(e) {
        e.stopPropagation();
        mobileMenu.classList.toggle('active');
        this.classList.toggle('active');
        
        // Animar las barras del botón hamburguesa
        const spans = this.querySelectorAll('span');
        if (this.classList.contains('active')) {
            spans[0].style.transform = 'rotate(45deg) translateY(8px)';
            spans[1].style.opacity = '0';
            spans[2].style.transform = 'rotate(-45deg) translateY(-8px)';
        } else {
            spans.forEach(span => {
                span.style.transform = '';
                span.style.opacity = '';
            });
        }
    });
    
    // Cerrar menú al hacer click en un enlace
    const mobileLinks = document.querySelectorAll('.mobile-link');
    mobileLinks.forEach(link => {
        link.addEventListener('click', function() {
            mobileMenu.classList.remove('active');
            mobileMenuToggle.classList.remove('active');
            const spans = mobileMenuToggle.querySelectorAll('span');
            spans.forEach(span => {
                span.style.transform = '';
                span.style.opacity = '';
            });
        });
    });
    
    // Cerrar menú al hacer click fuera
    document.addEventListener('click', function(e) {
        if (!mobileMenu.contains(e.target) && !mobileMenuToggle.contains(e.target)) {
            mobileMenu.classList.remove('active');
            mobileMenuToggle.classList.remove('active');
            const spans = mobileMenuToggle.querySelectorAll('span');
            spans.forEach(span => {
                span.style.transform = '';
                span.style.opacity = '';
            });
        }
    });
}

// ===== BOTÓN SCROLL TO TOP =====
function initScrollToTop() {
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
            scrollToTopBtn.classList.add('visible');
        } else {
            scrollToTopBtn.classList.remove('visible');
        }
    });
    
    scrollToTopBtn.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}

// ===== ANIMACIÓN DE CONTADORES =====
function initCounterAnimation() {
    const counters = document.querySelectorAll('.stat-number');
    let animated = false;
    
    const animateCounters = () => {
        counters.forEach(counter => {
            const target = parseInt(counter.getAttribute('data-target'));
            const duration = 2000; // 2 segundos
            const increment = target / (duration / 16); // 60fps
            let current = 0;
            
            const updateCounter = () => {
                current += increment;
                if (current < target) {
                    counter.textContent = Math.floor(current);
                    requestAnimationFrame(updateCounter);
                } else {
                    counter.textContent = target;
                }
            };
            
            updateCounter();
        });
    };
    
    // Observador para iniciar la animación cuando los contadores sean visibles
    const observerOptions = {
        threshold: 0.5
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !animated) {
                animated = true;
                animateCounters();
            }
        });
    }, observerOptions);
    
    const statsSection = document.querySelector('.hero-stats');
    if (statsSection) {
        observer.observe(statsSection);
    }
}

// ===== FILTRO DE CATEGORÍAS DE LIBROS =====
function initCategoryFilter() {
    const categoryBtns = document.querySelectorAll('.category-btn');
    const bookItems = document.querySelectorAll('.book-item');
    
    categoryBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            // Remover clase active de todos los botones
            categoryBtns.forEach(b => b.classList.remove('active'));
            // Añadir clase active al botón clickeado
            this.classList.add('active');
            
            const category = this.getAttribute('data-category');
            
            // Filtrar libros
            bookItems.forEach(item => {
                const itemCategory = item.getAttribute('data-category');
                
                if (category === 'all' || itemCategory === category) {
                    item.style.display = 'block';
                    // Añadir animación de entrada
                    item.style.animation = 'fadeInUp 0.5s ease';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
}

// ===== SCROLL SUAVE =====
function initSmoothScroll() {
    const links = document.querySelectorAll('a[href^="#"]');
    
    links.forEach(link => {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            
            // Ignorar enlaces sin destino específico
            if (href === '#') return;
            
            e.preventDefault();
            
            const targetId = href.substring(1);
            const targetElement = document.getElementById(targetId);
            
            if (targetElement) {
                const navbarHeight = navbar.offsetHeight;
                const targetPosition = targetElement.offsetTop - navbarHeight;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
}

// ===== ANIMACIONES AL HACER SCROLL =====
function initScrollAnimations() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-in');
            }
        });
    }, observerOptions);
    
    // Observar elementos que queremos animar
    const animatedElements = document.querySelectorAll(`
        .benefit-card,
        .book-item,
        .testimonial-card,
        .section-header
    `);
    
    animatedElements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });
    
    // Añadir clase cuando el elemento es visible
    const style = document.createElement('style');
    style.textContent = `
        .animate-in {
            opacity: 1 !important;
            transform: translateY(0) !important;
        }
    `;
    document.head.appendChild(style);
}

// ===== PARALLAX EFFECT EN HERO =====
window.addEventListener('scroll', function() {
    const hero = document.querySelector('.hero');
    if (hero) {
        const scrolled = window.pageYOffset;
        const heroContent = hero.querySelector('.hero-content');
        const floatingElements = hero.querySelectorAll('.floating-book');
        
        // Efecto parallax en el contenido
        if (heroContent) {
            heroContent.style.transform = `translateY(${scrolled * 0.3}px)`;
            heroContent.style.opacity = 1 - (scrolled / 700);
        }
        
        // Movimiento de elementos flotantes
        floatingElements.forEach((element, index) => {
            const speed = 0.5 + (index * 0.2);
            element.style.transform = `translateY(${scrolled * speed}px) rotate(${scrolled * 0.05}deg)`;
        });
    }
});

// ===== ANIMACIÓN DE ENTRADA DE BENEFICIOS =====
function animateBenefitsOnScroll() {
    const benefits = document.querySelectorAll('.benefit-card');
    
    benefits.forEach((benefit, index) => {
        benefit.style.animationDelay = `${index * 0.1}s`;
    });
}

// Llamar la función cuando el DOM esté listo
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', animateBenefitsOnScroll);
} else {
    animateBenefitsOnScroll();
}

// ===== EFECTO HOVER EN TARJETAS DE LIBRO =====
document.addEventListener('DOMContentLoaded', function() {
    const bookItems = document.querySelectorAll('.book-item');
    
    bookItems.forEach(item => {
        item.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px) scale(1.02)';
        });
        
        item.addEventListener('mouseleave', function() {
            this.style.transform = '';
        });
    });
});

// ===== BOTONES DE VISTA PREVIA =====
document.addEventListener('DOMContentLoaded', function() {
    const previewBtns = document.querySelectorAll('.btn-preview');
    
    previewBtns.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            // Aquí puedes añadir lógica para mostrar un modal de vista previa
            console.log('Vista previa del libro');
            
            // Efecto visual de feedback
            this.style.transform = 'scale(0.95)';
            setTimeout(() => {
                this.style.transform = '';
            }, 200);
        });
    });
});

// ===== ANIMACIÓN DE TESTIMONIOS =====
function initTestimonialsSlider() {
    const testimonials = document.querySelectorAll('.testimonial-card');
    
    testimonials.forEach((testimonial, index) => {
        // Añadir delay escalonado para la animación
        testimonial.style.animationDelay = `${index * 0.2}s`;
        
        // Efecto de hover mejorado
        testimonial.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px) scale(1.02)';
        });
        
        testimonial.addEventListener('mouseleave', function() {
            this.style.transform = '';
        });
    });
}

// Inicializar testimonios cuando el DOM esté listo
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initTestimonialsSlider);
} else {
    initTestimonialsSlider();
}

// ===== EFECTO DE TYPING EN TÍTULO (OPCIONAL) =====
function typewriterEffect() {
    const titleElement = document.querySelector('.hero-title');
    if (!titleElement) return;
    
    const originalText = titleElement.innerHTML;
    const gradientText = titleElement.querySelector('.gradient-text');
    const gradientContent = gradientText ? gradientText.innerHTML : '';
    
    // Guardar el contenido original
    const fullText = titleElement.textContent;
    
    // Esta función está disponible pero comentada por defecto
    // Descomenta para activar el efecto de typing
    /*
    titleElement.textContent = '';
    let i = 0;
    
    function typeWriter() {
        if (i < fullText.length) {
            titleElement.textContent += fullText.charAt(i);
            i++;
            setTimeout(typeWriter, 50);
        } else {
            // Restaurar el HTML original con el gradient
            titleElement.innerHTML = originalText;
        }
    }
    
    typeWriter();
    */
}

// ===== LAZY LOADING DE IMÁGENES =====
function initLazyLoading() {
    const images = document.querySelectorAll('img[data-src]');
    
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.removeAttribute('data-src');
                observer.unobserve(img);
            }
        });
    });
    
    images.forEach(img => imageObserver.observe(img));
}

// Inicializar lazy loading
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initLazyLoading);
} else {
    initLazyLoading();
}

// ===== DETECTOR DE SCROLL PARA NAVBAR ACTIVO =====
function updateActiveNavLink() {
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link');
    
    window.addEventListener('scroll', () => {
        let current = '';
        const scrollPosition = window.pageYOffset;
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop - 100;
            const sectionHeight = section.offsetHeight;
            
            if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                current = section.getAttribute('id');
            }
        });
        
        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === `#${current}`) {
                link.classList.add('active');
            }
        });
    });
}

// Inicializar
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', updateActiveNavLink);
} else {
    updateActiveNavLink();
}

// ===== EFECTO DE PARTÍCULAS EN BACKGROUND (OPCIONAL) =====
function createParticles() {
    const hero = document.querySelector('.hero-background');
    if (!hero) return;
    
    // Esta función crea partículas animadas en el fondo
    // Comentada por defecto para mejor rendimiento
    /*
    for (let i = 0; i < 20; i++) {
        const particle = document.createElement('div');
        particle.className = 'particle';
        particle.style.cssText = `
            position: absolute;
            width: 4px;
            height: 4px;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            top: ${Math.random() * 100}%;
            left: ${Math.random() * 100}%;
            animation: float ${10 + Math.random() * 10}s infinite ease-in-out;
        `;
        hero.appendChild(particle);
    }
    */
}

// ===== MANEJO DE FORMULARIOS (SI SE AGREGAN) =====
function initFormHandling() {
    const forms = document.querySelectorAll('form');
    
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            // Aquí puedes añadir validación personalizada
            const inputs = this.querySelectorAll('input[required], textarea[required]');
            let isValid = true;
            
            inputs.forEach(input => {
                if (!input.value.trim()) {
                    isValid = false;
                    input.classList.add('error');
                } else {
                    input.classList.remove('error');
                }
            });
            
            if (!isValid) {
                e.preventDefault();
                console.log('Por favor complete todos los campos requeridos');
            }
        });
    });
}

// ===== PERFORMANCE MONITORING =====
window.addEventListener('load', function() {
    // Registrar tiempo de carga
    const loadTime = window.performance.timing.domContentLoadedEventEnd - 
                    window.performance.timing.navigationStart;
    console.log(`Página cargada en ${loadTime}ms`);
});

// ===== ACCESIBILIDAD - NAVEGACIÓN POR TECLADO =====
document.addEventListener('keydown', function(e) {
    // ESC para cerrar menú móvil
    if (e.key === 'Escape' && mobileMenu.classList.contains('active')) {
        mobileMenu.classList.remove('active');
        mobileMenuToggle.classList.remove('active');
    }
    
    // Tab trapping en menú móvil cuando está abierto
    if (e.key === 'Tab' && mobileMenu.classList.contains('active')) {
        const focusableElements = mobileMenu.querySelectorAll(
            'a, button, input, select, textarea, [tabindex]:not([tabindex="-1"])'
        );
        const firstElement = focusableElements[0];
        const lastElement = focusableElements[focusableElements.length - 1];
        
        if (e.shiftKey && document.activeElement === firstElement) {
            e.preventDefault();
            lastElement.focus();
        } else if (!e.shiftKey && document.activeElement === lastElement) {
            e.preventDefault();
            firstElement.focus();
        }
    }
});

// ===== MOSTRAR NOTIFICACIÓN TOAST (OPCIONAL) =====
function showToast(message, type = 'info') {
    const toast = document.createElement('div');
    toast.className = `toast toast-${type}`;
    toast.textContent = message;
    toast.style.cssText = `
        position: fixed;
        bottom: 30px;
        right: 30px;
        padding: 1rem 1.5rem;
        background: var(--primary-color);
        color: white;
        border-radius: 8px;
        box-shadow: var(--shadow-xl);
        z-index: 9999;
        animation: slideInRight 0.3s ease;
    `;
    
    document.body.appendChild(toast);
    
    setTimeout(() => {
        toast.style.animation = 'slideOutRight 0.3s ease';
        setTimeout(() => toast.remove(), 300);
    }, 3000);
}

// ===== UTILIDADES =====
// Función para detectar si un elemento está visible
function isElementInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

// Función para hacer throttle de eventos
function throttle(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Aplicar throttle al evento de scroll para mejor rendimiento
window.addEventListener('scroll', throttle(function() {
    // Código que se ejecuta en el scroll
}, 100));

// ===== EXPORTAR FUNCIONES PÚBLICAS (SI ES NECESARIO) =====
window.LandingPage = {
    showToast,
    isElementInViewport,
    throttle
};

console.log('✨ Landing Page Loaded Successfully!');

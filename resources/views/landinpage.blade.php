<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descubre libros que transformarán tu vida espiritual. Biblioteca digital con los mejores títulos de superación personal y crecimiento espiritual.">
    <title>Luz del Saber - Transforma tu Vida con Cada Página</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- CSS Personalizado -->
    <link rel="stylesheet" href="{{ asset('css/spiritual-landing.css') }}">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar" id="navbar">
        <div class="container">
            <div class="nav-content">
                <div class="logo">
                    <i class="fas fa-book-open-reader"></i>
                    <span>Luz del Saber</span>
                </div>
                <div class="nav-links">
                    <a href="#inicio" class="nav-link">Inicio</a>
                    <a href="#biblioteca" class="nav-link">Biblioteca</a>
                    <a href="#beneficios" class="nav-link">Beneficios</a>
                    <a href="#testimonios" class="nav-link">Testimonios</a>
                    <a href="#contacto" class="nav-link">Contacto</a>
                </div>
                <div class="nav-buttons">
                    <a href="{{ route('login') }}" class="btn-login">
                        <i class="fas fa-sign-in-alt"></i> Acceder
                    </a>
                    <a href="{{ route('register') }}" class="btn-register">
                        <i class="fas fa-user-plus"></i> Registrarse Ahora
                    </a>
                </div>
                <button class="mobile-menu-toggle" id="mobileMenuToggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div class="mobile-menu" id="mobileMenu">
        <div class="mobile-menu-content">
            <a href="#inicio" class="mobile-link">Inicio</a>
            <a href="#biblioteca" class="mobile-link">Biblioteca</a>
            <a href="#beneficios" class="mobile-link">Beneficios</a>
            <a href="#testimonios" class="mobile-link">Testimonios</a>
            <a href="#contacto" class="mobile-link">Contacto</a>
            <div class="mobile-buttons">
                <a href="{{ route('login') }}" class="btn-login-mobile">Acceder</a>
                <a href="{{ route('register') }}" class="btn-register-mobile">Registrarse Ahora</a>
            </div>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="hero" id="inicio">
        <div class="hero-background">
            <div class="hero-overlay"></div>
            <div class="floating-elements">
                <div class="floating-book floating-1"></div>
                <div class="floating-book floating-2"></div>
                <div class="floating-book floating-3"></div>
            </div>
        </div>
        <div class="container">
            <div class="hero-content">
                <div class="hero-badge">
                    <i class="fas fa-star"></i>
                    <span>Tu camino hacia la transformación comienza aquí</span>
                </div>
                <h1 class="hero-title">
                    Transforma tu Vida con el Poder de la
                    <span class="gradient-text">Lectura Espiritual</span>
                </h1>
                <p class="hero-subtitle">
                    Accede a una biblioteca digital exclusiva con los mejores libros de superación personal, 
                    crecimiento espiritual y fe. Lee online o recibe ejemplares físicos en Nicaragua.
                </p>
                <div class="hero-cta">
                    <a href="{{ route('register') }}" class="btn-primary">
                        <span>Comienza Tu Transformación</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    <a href="#biblioteca" class="btn-secondary">
                        <i class="fas fa-book"></i>
                        <span>Explorar Biblioteca</span>
                    </a>
                </div>
                <div class="hero-stats">
                    <div class="stat-item">
                        <div class="stat-number" data-target="500">0</div>
                        <div class="stat-label">Libros Digitales</div>
                    </div>
                    <div class="stat-divider"></div>
                    <div class="stat-item">
                        <div class="stat-number" data-target="1200">0</div>
                        <div class="stat-label">Lectores Activos</div>
                    </div>
                    <div class="stat-divider"></div>
                    <div class="stat-item">
                        <div class="stat-number" data-target="98">0</div>
                        <div class="stat-label">% Satisfacción</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-scroll">
            <a href="#biblioteca" class="scroll-indicator">
                <span>Descubre más</span>
                <i class="fas fa-chevron-down"></i>
            </a>
        </div>
    </section>

    <!-- Beneficios Section -->
    <section class="benefits" id="beneficios">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">¿Por qué elegirnos?</span>
                <h2 class="section-title">Beneficios que Iluminarán tu Camino</h2>
                <p class="section-subtitle">
                    Más que una librería, somos tu compañero en el viaje hacia el crecimiento espiritual
                </p>
            </div>
            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-tablet-screen-button"></i>
                    </div>
                    <h3>Lectura Digital Inmediata</h3>
                    <p>Accede a tus libros en formato ePub desde cualquier dispositivo. Lee donde quieras, cuando quieras.</p>
                    <ul class="benefit-features">
                        <li><i class="fas fa-check"></i> Compatible con todos los dispositivos</li>
                        <li><i class="fas fa-check"></i> Sincronización automática</li>
                        <li><i class="fas fa-check"></i> Modo lectura nocturna</li>
                    </ul>
                </div>
                <div class="benefit-card featured">
                    <div class="featured-badge">
                        <i class="fas fa-crown"></i> Popular
                    </div>
                    <div class="benefit-icon">
                        <i class="fas fa-book-bible"></i>
                    </div>
                    <h3>Contenido Curado con Propósito</h3>
                    <p>Cada libro es seleccionado cuidadosamente para nutrir tu espíritu y fortalecer tu fe.</p>
                    <ul class="benefit-features">
                        <li><i class="fas fa-check"></i> Contenido verificado y edificante</li>
                        <li><i class="fas fa-check"></i> Categorías especializadas</li>
                        <li><i class="fas fa-check"></i> Recomendaciones personalizadas</li>
                    </ul>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-truck-fast"></i>
                    </div>
                    <h3>Envíos a Nicaragua</h3>
                    <p>¿Prefieres el formato físico? Recibe tus libros en la puerta de tu casa.</p>
                    <ul class="benefit-features">
                        <li><i class="fas fa-check"></i> Envíos rápidos y seguros</li>
                        <li><i class="fas fa-check"></i> Empaque especial protector</li>
                        <li><i class="fas fa-check"></i> Rastreo de pedido en tiempo real</li>
                    </ul>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Comunidad de Lectores</h3>
                    <p>Únete a una comunidad de personas comprometidas con su crecimiento espiritual.</p>
                    <ul class="benefit-features">
                        <li><i class="fas fa-check"></i> Grupos de lectura guiada</li>
                        <li><i class="fas fa-check"></i> Foros de discusión</li>
                        <li><i class="fas fa-check"></i> Eventos virtuales mensuales</li>
                    </ul>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-infinity"></i>
                    </div>
                    <h3>Acceso Ilimitado</h3>
                    <p>Sin límites de descargas. Tu biblioteca crece contigo.</p>
                    <ul class="benefit-features">
                        <li><i class="fas fa-check"></i> Descarga ilimitada de libros</li>
                        <li><i class="fas fa-check"></i> Biblioteca personal en la nube</li>
                        <li><i class="fas fa-check"></i> Notas y marcadores sincronizados</li>
                    </ul>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>Soporte Dedicado</h3>
                    <p>Estamos aquí para ayudarte en cada paso de tu experiencia.</p>
                    <ul class="benefit-features">
                        <li><i class="fas fa-check"></i> Atención personalizada</li>
                        <li><i class="fas fa-check"></i> Respuesta en 24 horas</li>
                        <li><i class="fas fa-check"></i> Guías de uso detalladas</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Biblioteca Preview -->
    <section class="library-preview" id="biblioteca">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Nuestra Colección</span>
                <h2 class="section-title">Libros que Transforman Vidas</h2>
                <p class="section-subtitle">
                    Explora nuestra cuidadosa selección de títulos que inspirarán tu crecimiento
                </p>
            </div>
            <div class="library-categories">
                <button class="category-btn active" data-category="all">
                    <i class="fas fa-border-all"></i> Todos
                </button>
                <button class="category-btn" data-category="faith">
                    <i class="fas fa-hands-praying"></i> Fe y Espiritualidad
                </button>
                <button class="category-btn" data-category="growth">
                    <i class="fas fa-seedling"></i> Superación Personal
                </button>
                <button class="category-btn" data-category="family">
                    <i class="fas fa-house-heart"></i> Familia y Relaciones
                </button>
                <button class="category-btn" data-category="leadership">
                    <i class="fas fa-users-gear"></i> Liderazgo Cristiano
                </button>
            </div>
            <div class="books-showcase">
                <div class="book-item" data-category="faith">
                    <div class="book-cover">
                        <div class="book-placeholder">
                            <i class="fas fa-book-bible"></i>
                        </div>
                        <div class="book-overlay">
                            <button class="btn-preview">Vista Previa</button>
                        </div>
                    </div>
                    <div class="book-info">
                        <span class="book-category">Fe y Espiritualidad</span>
                        <h4>El Poder de la Oración</h4>
                        <p class="book-author">Por Pastor Juan Martínez</p>
                        <div class="book-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span>(4.9)</span>
                        </div>
                        <div class="book-price">
                            <span class="price-digital">$9.99 Digital</span>
                            <span class="price-physical">$19.99 Físico</span>
                        </div>
                    </div>
                </div>
                <div class="book-item" data-category="growth">
                    <div class="book-cover">
                        <div class="book-placeholder growth">
                            <i class="fas fa-seedling"></i>
                        </div>
                        <div class="book-overlay">
                            <button class="btn-preview">Vista Previa</button>
                        </div>
                    </div>
                    <div class="book-info">
                        <span class="book-category">Superación Personal</span>
                        <h4>Renueva Tu Mente</h4>
                        <p class="book-author">Por Dra. María González</p>
                        <div class="book-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span>(4.7)</span>
                        </div>
                        <div class="book-price">
                            <span class="price-digital">$8.99 Digital</span>
                            <span class="price-physical">$17.99 Físico</span>
                        </div>
                    </div>
                </div>
                <div class="book-item" data-category="family">
                    <div class="book-cover">
                        <div class="book-placeholder family">
                            <i class="fas fa-house-heart"></i>
                        </div>
                        <div class="book-overlay">
                            <button class="btn-preview">Vista Previa</button>
                        </div>
                    </div>
                    <div class="book-info">
                        <span class="book-category">Familia y Relaciones</span>
                        <h4>Construyendo un Hogar Sólido</h4>
                        <p class="book-author">Por Rev. Carlos Mendoza</p>
                        <div class="book-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span>(5.0)</span>
                        </div>
                        <div class="book-price">
                            <span class="price-digital">$10.99 Digital</span>
                            <span class="price-physical">$21.99 Físico</span>
                        </div>
                    </div>
                </div>
                <div class="book-item" data-category="leadership">
                    <div class="book-cover">
                        <div class="book-placeholder leadership">
                            <i class="fas fa-users-gear"></i>
                        </div>
                        <div class="book-overlay">
                            <button class="btn-preview">Vista Previa</button>
                        </div>
                    </div>
                    <div class="book-info">
                        <span class="book-category">Liderazgo Cristiano</span>
                        <h4>Líderes con Propósito</h4>
                        <p class="book-author">Por Pastor Roberto Silva</p>
                        <div class="book-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span>(4.8)</span>
                        </div>
                        <div class="book-price">
                            <span class="price-digital">$11.99 Digital</span>
                            <span class="price-physical">$22.99 Físico</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="library-cta">
                <a href="{{ route('register') }}" class="btn-primary">
                    <span>Ver Biblioteca Completa</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonios -->
    <section class="testimonials" id="testimonios">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Historias Reales</span>
                <h2 class="section-title">Vidas Transformadas</h2>
                <p class="section-subtitle">
                    Lee cómo nuestros libros han impactado la vida de miles de personas
                </p>
            </div>
            <div class="testimonials-slider">
                <div class="testimonial-card">
                    <div class="testimonial-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-text">
                        "Esta plataforma cambió mi vida. Los libros que encontré aquí me ayudaron a superar momentos difíciles 
                        y fortalecieron mi fe. La lectura digital es súper conveniente y el servicio al cliente es excepcional."
                    </p>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="author-info">
                            <h4>Ana Rodríguez</h4>
                            <span>Managua, Nicaragua</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-text">
                        "Como pastor, siempre estoy buscando recursos de calidad para mi congregación. Luz del Saber me ha 
                        proporcionado acceso a una biblioteca increíble. Los envíos físicos llegaron en perfectas condiciones."
                    </p>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="author-info">
                            <h4>Pastor José Morales</h4>
                            <span>León, Nicaragua</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-text">
                        "Increíble colección de libros. He leído más de 20 títulos este año y cada uno ha aportado algo valioso 
                        a mi crecimiento personal. ¡Totalmente recomendado!"
                    </p>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="author-info">
                            <h4>Carmen López</h4>
                            <span>Granada, Nicaragua</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Final -->
    <section class="final-cta">
        <div class="cta-background"></div>
        <div class="container">
            <div class="cta-content">
                <h2>¿Listo para Comenzar tu Transformación?</h2>
                <p>Únete a miles de lectores que ya están cambiando sus vidas</p>
                <div class="cta-buttons">
                    <a href="{{ route('register') }}" class="btn-primary large">
                        <span>Crear Cuenta Gratis</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    <div class="cta-guarantee">
                        <i class="fas fa-shield-check"></i>
                        <span>Garantía de satisfacción del 100%</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer" id="contacto">
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <div class="footer-logo">
                        <i class="fas fa-book-open-reader"></i>
                        <span>Luz del Saber</span>
                    </div>
                    <p class="footer-description">
                        Tu biblioteca digital para el crecimiento espiritual y la superación personal.
                        Transformando vidas, una página a la vez.
                    </p>
                    <div class="footer-social">
                        <a href="#" class="social-link"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="footer-column">
                    <h4>Enlaces Rápidos</h4>
                    <ul class="footer-links">
                        <li><a href="#inicio">Inicio</a></li>
                        <li><a href="#biblioteca">Biblioteca</a></li>
                        <li><a href="#beneficios">Beneficios</a></li>
                        <li><a href="#testimonios">Testimonios</a></li>
                        <li><a href="{{ route('register') }}">Crear Cuenta</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h4>Soporte</h4>
                    <ul class="footer-links">
                        <li><a href="#">Preguntas Frecuentes</a></li>
                        <li><a href="#">Términos y Condiciones</a></li>
                        <li><a href="#">Política de Privacidad</a></li>
                        <li><a href="#">Política de Envíos</a></li>
                        <li><a href="#">Contacto</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h4>Contacto</h4>
                    <ul class="footer-contact">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Nicaragua</span>
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <span>info@luzdelsaber.com</span>
                        </li>
                        <li>
                            <i class="fas fa-phone"></i>
                            <span>+505 xxxx-xxxx</span>
                        </li>
                        <li>
                            <i class="fas fa-clock"></i>
                            <span>Lun - Sáb: 8:00 AM - 6:00 PM</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2026 Luz del Saber. Todos los derechos reservados.</p>
                <div class="footer-payment">
                    <i class="fab fa-cc-visa"></i>
                    <i class="fab fa-cc-mastercard"></i>
                    <i class="fab fa-cc-paypal"></i>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button -->
    <button class="scroll-to-top" id="scrollToTop">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- JavaScript -->
    <script src="{{ asset('js/landing-interactions.js') }}"></script>
</body>
</html>

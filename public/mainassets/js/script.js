document.addEventListener('DOMContentLoaded', function() {
    // Menu Toggle pour le mode responsive
    const menuToggle = document.querySelector('.menu-toggle');
    const navLinks = document.querySelector('.nav-links');

    if (menuToggle) {
        menuToggle.addEventListener('click', function() {
            navLinks.classList.toggle('active');
        });
    }

    // Close menu when clicking outside
    document.addEventListener('click', function(event) {
        if (!event.target.closest('.navbar') && navLinks.classList.contains('active')) {
            navLinks.classList.remove('active');
        }
    });

    // Navigation active state
    const navItems = document.querySelectorAll('.nav-links a');
    navItems.forEach(item => {
        item.addEventListener('click', function() {
            navItems.forEach(i => i.classList.remove('active'));
            this.classList.add('active');
        });
    });

    // Plan Tabs
    const planTabs = document.querySelectorAll('.plan-tab');
    planTabs.forEach(tab => {
        tab.addEventListener('click', function() {
            planTabs.forEach(t => t.classList.remove('active'));
            this.classList.add('active');
            
            // Ici, on pourrait ajouter une logique pour afficher le contenu correspondant
            // à l'onglet sélectionné dans un cas réel
        });
    });

    // Testimonial Carousel
    const testimonialSlides = document.querySelectorAll('.testimonial-slide');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');
    let currentSlide = 0;

    // Si on avait plusieurs témoignages, on pourrait les faire défiler
    if (prevBtn && nextBtn && testimonialSlides.length > 1) {
        function showSlide(index) {
            testimonialSlides.forEach(slide => slide.style.display = 'none');
            testimonialSlides[index].style.display = 'block';
        }

        nextBtn.addEventListener('click', function() {
            currentSlide = (currentSlide + 1) % testimonialSlides.length;
            showSlide(currentSlide);
        });

        prevBtn.addEventListener('click', function() {
            currentSlide = (currentSlide - 1 + testimonialSlides.length) % testimonialSlides.length;
            showSlide(currentSlide);
        });

        // Afficher le premier slide au chargement
        showSlide(currentSlide);
    }

    // Form Validation
    const appointmentForm = document.getElementById('appointment-form');
    if (appointmentForm) {
        appointmentForm.addEventListener('submit', function(event) {
            event.preventDefault();
            
            // Récupération des valeurs du formulaire
            const name = document.getElementById('name').value;
            const phone = document.getElementById('phone').value;
            const email = document.getElementById('email').value;
            const appointmentType = document.getElementById('appointment-type').value;
            const message = document.getElementById('message').value;
            
            // Validation simple
            if (!name || !phone || !email || !appointmentType) {
                alert('Veuillez remplir tous les champs obligatoires.');
                return;
            }
            
            // Validation de l'email avec une regex simple
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert('Veuillez entrer une adresse email valide.');
                return;
            }
            
            // Validation du numéro de téléphone (simple)
            const phoneRegex = /^[0-9\-\+\s\(\)]{6,20}$/;
            if (!phoneRegex.test(phone)) {
                alert('Veuillez entrer un numéro de téléphone valide.');
                return;
            }
            
            // Si tout est valide, on pourrait envoyer les données à un serveur
            // Dans ce cas, on simule juste une réponse réussie
            alert('Votre demande de rendez-vous a été envoyée avec succès. Nous vous contacterons bientôt.');
            appointmentForm.reset();
        });
    }

    // Smooth Scrolling pour les ancres
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 100,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Animation au défilement (simple)
    window.addEventListener('scroll', function() {
        // Effet de parallaxe pour l'en-tête
        const scrollPosition = window.scrollY;
        const heroSection = document.querySelector('.hero');
        
        if (heroSection) {
            heroSection.style.backgroundPositionY = scrollPosition * 0.5 + 'px';
        }
        
        // Animation des cartes de service
        const serviceCards = document.querySelectorAll('.service-card');
        serviceCards.forEach(card => {
            if (isElementInViewport(card) && !card.classList.contains('animated')) {
                card.classList.add('animated');
                card.style.animation = 'fadeInUp 0.8s ease forwards';
            }
        });
    });

    // Helper function to check if element is in viewport
    function isElementInViewport(el) {
        const rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    // Ajout d'un style pour l'animation
    const styleEl = document.createElement('style');
    styleEl.textContent = `
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    `;
    document.head.appendChild(styleEl);
});
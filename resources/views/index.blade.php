<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinique Médicale Annaba</title>
    <link rel="stylesheet" href="{{ asset('mainassets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Barre supérieure -->
    <div class="top-bar">
        <div class="container">
            <div class="top-bar-contact">
                <div>
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Annaba, Algérie 23000</span>
                </div>
                <div>
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:cliniqueannaba@gmail.com">cliniqueannaba@gmail.com</a>
                </div>
            </div>
            <div>
                <a href="https://wa.me/+213658934340" class="whatsapp-link">
                    <i class="fab fa-whatsapp"></i>
                    Contactez-nous sur WhatsApp
                </a>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="container">
            <div class="logo">
                <i class="fas fa-clinic-medical"></i>
                <span>Clinique Annaba</span>
            </div>
            <div class="nav-links">
                <a href="#" class="active">Accueil</a>
                <a href="#">À propos</a>
                <a href="#">Services</a>
                <a href="#">Médecins</a>
                <a href="#">Départements</a>
                <a href="#" class="phone-number">
                    <i class="fas fa-phone"></i>
                    +213 658 93 43 40
                </a>
                <a href="#" class="btn appointment-btn">Prendre rendez-vous</a>
            </div>
            <div class="menu-toggle">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <span class="welcome-text">Bienvenue à la Clinique Annaba</span>
                    <h1>Votre santé, notre priorité</h1>
                    <p>Bienvenue à la Clinique Annaba, où votre bien-être est notre engagement. Notre équipe dévouée met tout en œuvre pour vous offrir des soins de qualité, dans un environnement chaleureux et professionnel. Votre santé est notre priorité absolue.</p>
                    <a href="#" class="btn discover-btn">Découvrir plus</a>
                </div>
                <div class="hero-image">
                    <img src="{{ asset('mainassets/images/doctor.jpg') }}" alt="Docteur">
                    <div class="stats-box">
                        <div class="stats-item">
                            <i class="fas fa-user-md"></i>
                            <div>
                                <p>Plus de 10 000</p>
                                <p>Patients soignés</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Doctors Section -->
    <section class="doctors">
        <div class="container">
            <h2>Nos médecins experts à votre service</h2>
            <p>Rencontrez notre équipe de professionnels qualifiés, dédiés à votre bien-être.</p>
            <div class="specialists-grid">
                <div class="specialist-card">
                    <img src="{{ asset('mainassets/images/doctor5.jpg') }}" alt="Dr. Amin Benali">
                    <div class="specialist-info">
                        <h3>Dr. Amin Benali</h3>
                        <p>Dermatologue</p>
                    </div>
                </div>
                <div class="specialist-card">
                    <img src="{{ asset('mainassets/images/doctor1.jpg') }}" alt="Dr. Sofia Bensalem">
                    <div class="specialist-info">
                        <h3>Dr. Sofia Bensalem</h3>
                        <p>Pédiatre</p>
                    </div>
                </div>
                <div class="specialist-card">
                    <img src="{{ asset('mainassets/images/doctor2.jpg') }}" alt="Dr. Karim Haddad">
                    <div class="specialist-info">
                        <h3>Dr. Karim Haddad</h3>
                        <p>Cardiologue</p>
                    </div>
                </div>
                <div class="specialist-card">
                    <img src="{{ asset('mainassets/images/doctor3.jpg') }}" alt="Dr. Nadia Cherif">
                    <div class="specialist-info">
                        <h3>Dr. Nadia Cherif</h3>
                        <p>Neurologue</p>
                    </div>
                </div>
            </div>
            <div class="see-more">
                <a href="#" class="btn-see-more">Voir plus</a>
            </div>
        </div>
    </section>


    <!-- Services Section -->
    <section class="services">
        <div class="container">
            <div class="section-header">
                <h2>SERVICES & SOINS</h2>
                <h3>Plus de 40 spécialités et services de santé</h3>
                <a href="#" class="btn services-btn">Voir tous les services</a>
            </div>
            
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon mental-health">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h3>Santé mentale</h3>
                    <p>Des soins spécialisés pour votre bien-être mental et émotionnel.</p>
                    <a href="#" class="arrow-link">
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                
                <div class="service-card">
                    <div class="service-icon eye-health">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Ophtalmologie</h3>
                    <p>Diagnostic et traitement des maladies oculaires.</p>
                    <a href="#" class="arrow-link">
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                
                <div class="service-card">
                    <div class="service-icon vaccination">
                        <i class="fas fa-syringe"></i>
                    </div>
                    <h3>Vaccination</h3>
                    <p>Protégez-vous et vos proches avec nos services de vaccination.</p>
                    <a href="#" class="arrow-link">
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                
                <div class="service-card">
                    <div class="service-icon cardiology">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <h3>Cardiologie</h3>
                    <p>Des soins cardiaques de pointe pour votre santé.</p>
                    <a href="#" class="arrow-link">
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="why-choose-us">
        <div class="container">
            <div class="choose-us-content">
                <div class="choose-us-image">
                    <img src="{{ asset('mainassets/images/clinique.jpg') }}" alt="Docteur">
                </div>
                <div class="choose-us-text">
                    <h2>Pourquoi nous choisir ?</h2>
                    <p>À la Clinique Annaba, nous nous engageons à vous offrir des soins de qualité, alliant expertise médicale et attention personnalisée. Grâce à notre approche centrée sur le patient et à l'utilisation des dernières technologies, nous garantissons des services sûrs, accessibles et transparents, pour votre bien-être et votre tranquillité d'esprit.</p>
                    <br>
                    <ul class="benefits-list">
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span>Sécurité et qualité assurées à 100 %.</span>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span>Approche centrée sur chaque patient.</span>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span>Technologie de pointe pour mieux soigner.</span>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span>Prix transparents, sans frais cachés.</span>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span>Soins coordonnés pour un suivi optimal.</span>
                        </li>
                    </ul>
                    <a href="#" class="btn discover-btn">Découvrir plus</a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Testimonial Section -->
    <section class="testimonial">
        <div class="container">
            <div class="testimonial-carousel">
                <div class="testimonial-slide">
                    <div class="testimonial-content">
                        <div class="testimonial-image">
                            <img src="{{ asset('mainassets/images/client.jpg') }}" alt="Client">
                        </div>
                        <div class="testimonial-text">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p>"Une clinique exceptionnelle avec un personnel attentionné et des soins de qualité."</p>
                            <div class="client-info">
                                <p class="client-name">Fatima Zohra</p>
                                <p class="client-role">Patiente</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                <div class="carousel-nav">
                    <button class="prev-btn"><i class="fas fa-chevron-left"></i></button>
                    <button class="next-btn"><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Contact Form Section -->
    <section class="contact-form">
        <div class="container">
            <div class="form-container">
                <h2>Prenez rendez-vous dès aujourd'hui</h2>
                <p>Contactez-nous pour planifier votre consultation ou pour toute question.</p>
                
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <span>+213 658 93 43 40</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>cliniqueannaba@gmail.com</span>
                    </div>
                </div>
                
                <form id="appointment-form">
                    <div class="form-group">
                        <input type="text" id="name" placeholder="Nom" required>
                    </div>
                    <div class="form-group">
                        <input type="tel" id="phone" placeholder="Téléphone" required>
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <select id="appointment-type" required>
                            <option value="" disabled selected>Type de rendez-vous</option>
                            <option value="checkup">Consultation générale</option>
                            <option value="emergency">Urgence</option>
                            <option value="consultation">Consultation spécialisée</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea id="message" placeholder="Message" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn submit-btn">Envoyer</button>
                </form>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <i class="fas fa-clinic-medical"></i>
                    <span>Clinique Annaba</span>
                </div>
                <div class="footer-links">
                    <div class="footer-column">
                        <h3>Entreprise</h3>
                        <ul>
                            <li><a href="#">À propos</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Équipe médicale</a></li>
                            <li><a href="#">Carrières</a></li>
                        </ul>
                    </div>
                    <div class="footer-column">
                        <h3>Support</h3>
                        <ul>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Contactez-nous</a></li>
                            <li><a href="#">Politique de confidentialité</a></li>
                            <li><a href="#">Conditions d'utilisation</a></li>
                        </ul>
                    </div>
                    <div class="footer-column">
                        <h3>Contact</h3>
                        <ul class="contact-list">
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Annaba, Algérie 23000</span>
                            </li>
                            <li>
                                <i class="fas fa-phone"></i>
                                <span>+213 658 93 43 40</span>
                            </li>
                            <li>
                                <i class="fas fa-envelope"></i>
                                <span>cliniqueannaba@gmail.com</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 Clinique Annaba. Tous droits réservés.</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!---Script---->
    <script src="{{ asset('mainassets/js/script.js') }}"></script>
</body>
</html>
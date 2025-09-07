@extends('layouts.master')
@section('content')


<section class="page-title" style="background-image:url({{ asset('assets/images/background/8.jpg') }});">
    <div class="auto-container">
        <h1>Apropos de nous</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="i{{ route('home.index') }}">Accueil </a></li>
            <li>Apropos</li>
        </ul>
    </div>
</section>


<!-- About Us -->
<section class="about-section-two alternate">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Colonne de contenu principal -->
            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <span class="title">Nous sommes Masadigitale</span>
                    <h2>2 ans d’expérience en<br> Technologie & Innovation</h2>

                    <!-- Description dynamique tirée de la base de données -->
                    <div class="text">{{ $getAbouts->description }}</div>

                    <!-- Compteurs de statistiques -->
                    <div class="fact-counter">
                        <div class="row clearfix">

                            <!-- Nombre de clients -->
                            <div class="counter-column col-lg-4 col-md-4 col-sm-12">
                                <div class="count-box">
                                    <span class="count-text" data-speed="3000" data-stop="3">0</span>
                                    <h4 class="counter-title">Clients satisfaits</h4>
                                </div>
                            </div>

                            <!-- Nombre de projets -->
                            <div class="counter-column col-lg-4 col-md-4 col-sm-12">
                                <div class="count-box">
                                    <span class="count-text" data-speed="3000" data-stop="10">0</span>
                                    <h4 class="counter-title">Applications & Projets</h4>
                                </div>
                            </div>

                            <!-- Nombre de récompenses -->
                            <div class="counter-column col-lg-4 col-md-4 col-sm-12">
                                <div class="count-box">
                                    <span class="count-text" data-speed="3000" data-stop="1">0</span>
                                    <h4 class="counter-title">Prix & Distinctions</h4>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Colonne avec les missions et visions -->
            <div class="block-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="row clearfix">

                        <!-- Bloc Mission -->
                        <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="image">
                                        <a href="about.html"><img src="{{ asset('assets/images/about/bureau.jpeg') }}" alt="Mission Masadigitale"></a>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <h4><a href="about.html">Notre Mission</a></h4>
                                    <div class="text">Aider les entreprises et institutions à optimiser leur gestion et leur communication à travers des applications mobiles, solutions de gestion et outils digitaux adaptés.</div>
                                </div>
                            </div>
                        </div>

                        <!-- Bloc Vision -->
                        <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="image">
                                        <a href="about.html"><img src="{{ asset('assets/images/about/about.jpeg') }}" alt="Vision Masadigitale"></a>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <h4><a href="about.html">Notre Vision</a></h4>
                                    <div class="text">Faire de Masadigitale un leader incontournable du digital en Afrique de l’Ouest en rendant la technologie simple, accessible et performante pour toutes les entreprises.</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- End About Us -->


<!-- Call Back Section -->
<section class="call-back-section" style="background-image: url({{ asset('assets/images/background/2.jpg') }});">
    <div class="outer-box">
        <div class="auto-container">
            <div class="row clearfix">
                
                <!-- Colonne de contenu -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h3>Vous êtes à quelques clics<br> d'une solution digitale sur mesure</h3>
                        <div class="text">
                            Masadigitale vous accompagne dans le développement d’applications mobiles, 
                            la gestion d’entreprise, de stock et la transformation digitale. 
                            Confiez-nous vos projets pour des résultats rapides et fiables.
                        </div>
                    </div>
                </div>

                <!-- Colonne du formulaire -->
                <div class="form-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="appointment-form">
                            <div class="title-box">
                                <span>Notre équipe est à votre écoute</span>
                                <h3>Demandez un rappel</h3>
                            </div>

                            <form method="post" action="{{ route('contact.store') }}">
                                @csrf <!-- Pour Laravel -->

                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Nom complet" required>
                                </div>

                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Adresse email" required>
                                </div>

                                <div class="form-group">
                                    <textarea name="message" placeholder="Décrivez vos besoins (application, gestion, digitalisation...)"></textarea>
                                </div>

                                <div class="form-group text-right">
                                    <button class="theme-btn btn-style-two" type="submit" name="submit-form">
                                        Envoyer le message
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!--End Call Back Section -->


    <!-- Integrity Section -->
<section class="integrity-section">
    <div class="outer-container clearfix">
        <!--Content Column-->
        <div class="content-column">
            <div class="inner-column">
                <div class="sec-title">
                    <span class="title">Innovation & Intégrité</span>
                    <h2>Construisons le futur numérique</h2>
                    <div class="text">
                        Chez <b>Masadigitale</b>, nous accompagnons les entreprises et institutions dans leur transformation digitale. 
                        Grâce à notre expertise, nous apportons des solutions technologiques modernes, créons de la valeur et générons des résultats mesurables.
                    </div>
                </div>

                <div class="graph-image">
                    <img src="{{ asset('assets/images/resource/graph.png') }}" alt="Statistiques de croissance numérique">
                </div>

                <div class="link-box">
                    <a href="{{ route('services.index') }}" class="theme-btn">Découvrir nos solutions</a>
                </div>
            </div>
        </div>

        <div class="image-column" style="background-image: url({{ asset('assets/images/about/directeur.jpg') }});">
            <div class="inner-column">
                <div class="image-box"><img src="{{ asset('assets/images/about/image-3.png') }}" alt=""></div>
            </div>
        </div>
    </div>
</section>
<!-- End Integrity Section -->


<!-- Faq Section -->
<section class="faq-section style-two" style="background-image: url({{ asset('assets/images/background/7.jpg') }});">
    <div class="auto-container">
        <div class="row clearfix">
            <!-- Colonne des FAQ Masadigitale -->
            <div class="accordion-column col-lg-6 col-md-12 col-sm-12">
                <div class="sec-title light">
                    <span class="title">Support & Assistance</span>
                    <h2>Questions Fréquentes</h2>
                </div>

                <!-- Accordion Box -->
                <ul class="accordion-box">
                    <!-- Question -->
                    <li class="accordion block">
                        <div class="acc-btn"><div class="icon">+</div>Quels services propose Masadigitale ?</div>
                        <div class="acc-content">
                            <div class="content">
                                <div class="text">
                                    Masadigitale propose : 
                                    <ul>
                                        <li>Développement d’applications mobiles</li>
                                        <li>Solutions de gestion d’entreprise et de stock</li>
                                        <li>Sites web professionnels</li>
                                        <li>Marketing digital & Référencement SEO</li>
                                        <li>Infogérance & Maintenance informatique</li>
                                        <li>Hébergement et cybersécurité</li>
                                        <li>Formations en outils numériques</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Question active -->
                    <li class="accordion block active-block">
                        <div class="acc-btn active"><div class="icon">+</div>À qui s’adressent vos services ?</div>
                        <div class="acc-content current">
                            <div class="content">
                                <div class="text">
                                    Nos solutions sont conçues pour les petites et moyennes entreprises, les startups, 
                                    les institutions publiques et toutes les organisations cherchant à réussir leur transformation digitale.
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Question -->
                    <li class="accordion block">
                        <div class="acc-btn"><div class="icon">+</div>Proposez-vous des applications sur mesure ?</div>
                        <div class="acc-content">
                            <div class="content">
                                <div class="text">
                                    Oui, nous développons des applications mobiles et logicielles entièrement personnalisées 
                                    pour répondre aux besoins spécifiques de chaque entreprise (gestion commerciale, suivi de stock, reporting, etc.).
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Question -->
                    <li class="accordion block">
                        <div class="acc-btn"><div class="icon">+</div>Comment contacter votre équipe technique ?</div>
                        <div class="acc-content">
                            <div class="content">
                                <div class="text">
                                    Notre support est disponible du lundi au samedi via téléphone, e-mail ou WhatsApp. 
                                    Nous nous engageons à répondre rapidement à toutes vos demandes techniques ou commerciales.
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Colonne des statistiques Masadigitale -->
            <div class="stat-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="sec-title light">
                        <span class="title">Nos Capacités Clés</span>
                        <h2>Indicateurs de Performance</h2>
                        <div class="text">
                            Depuis sa création, <b>Masadigitale</b> s’engage à offrir des solutions numériques efficaces et accessibles, 
                            en mettant la satisfaction client au cœur de ses priorités.
                        </div>
                    </div>

                    <div class="progress-bars">
                        <!-- Compétence 1 -->
                        <div class="bar-item">
                            <div class="skill-header clearfix">
                                <div class="skill-title">Développement d’Applications</div>
                            </div>
                            <div class="skill-bar">
                                <div class="bar-inner">
                                    <div class="bar progress-line" data-width="92"></div>
                                    <div class="skill-percentage">
                                        <div class="count-box">
                                            <span class="count-text" data-speed="2000" data-stop="92">0</span>%
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Compétence 2 -->
                        <div class="bar-item">
                            <div class="skill-header clearfix">
                                <div class="skill-title">Satisfaction Client</div>
                            </div>
                            <div class="skill-bar">
                                <div class="bar-inner">
                                    <div class="bar progress-line" data-width="95"></div>
                                    <div class="skill-percentage">
                                        <div class="count-box">
                                            <span class="count-text" data-speed="2000" data-stop="95">0</span>%
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Compétence 3 -->
                        <div class="bar-item">
                            <div class="skill-header clearfix">
                                <div class="skill-title">Réactivité du Support</div>
                            </div>
                            <div class="skill-bar">
                                <div class="bar-inner">
                                    <div class="bar progress-line" data-width="90"></div>
                                    <div class="skill-percentage">
                                        <div class="count-box">
                                            <span class="count-text" data-speed="2000" data-stop="90">0</span>%
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Compétence 4 -->
                        <div class="bar-item">
                            <div class="skill-header clearfix">
                                <div class="skill-title">Expertise en Marketing Digital</div>
                            </div>
                            <div class="skill-bar">
                                <div class="bar-inner">
                                    <div class="bar progress-line" data-width="88"></div>
                                    <div class="skill-percentage">
                                        <div class="count-box">
                                            <span class="count-text" data-speed="2000" data-stop="88">0</span>%
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- Faq Section -->


<!-- Why Choose Us -->
<section class="why-us-section">
    <div class="outer-box clearfix">
        <!-- Content Column -->
        <div class="content-column">
           <div class="inner-column">
                <div class="sec-title">
                    <span class="title">Pourquoi choisir Masadigitale ?</span>
                    <h2>Nous transformons vos idées<br>en solutions numériques concrètes</h2>
                    <div class="text">
                        Masadigitale est une entreprise malienne spécialisée dans le développement d’applications mobiles, de logiciels de gestion d’entreprise et de solutions web modernes. 
                        Grâce à notre expertise locale et une approche orientée résultats, nous aidons les PME, les ONG et les institutions à réussir leur transformation digitale.
                    </div>
                </div>
                
                <ul class="list-style-one clearfix">
                    @if(isset($getServices) && count($getServices) > 0)
                        @foreach ($getServices as $item)
                            <li><a href="{{ route('services-detail', ['slug' => $item->slug]) }}">{{ $item->title }}</a></li>
                        @endforeach
                    @else
                        <li>Aucun service disponible pour le moment.</li>
                    @endif
                </ul>
                <div class="btn-box">
                    <a href="{{ route('services.index') }}" class="theme-btn btn-style-three">Commencer avec Masadigitale</a>
                    <a href="tel:+22366894475" class="theme-btn call-btn"><i class="icon la la-phone"></i> +223 66 89 44 75</a>
                </div>
            </div>
        </div>

        <!-- Image Column -->
        <div class="image-column" style="background-image: url({{ asset('assets/images/about/about3.jpeg') }});">
            <figure class="image-box"><img src="{{ asset('assets/images/about/about3.jpeg') }}" alt="Masadigitale"></figure>
        </div>
    </div>
</section>
<!--End Why Choose Us -->

<!-- Work Section -->
<section class="work-section style-two">
    <div class="auto-container">
        <div class="sec-title">
            <span class="title">Notre Méthodologie</span>
            <h2>Votre projet, notre engagement en 4 étapes</h2>
        </div>
        <div class="row clearfix">
            <!-- Étape 1 -->
            <div class="work-step col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <h3><span class="count">1</span> Analyse</h3>
                    <div class="text">Nous étudions vos besoins et définissons la meilleure solution digitale adaptée à votre activité.</div>
                </div>
            </div>
            <!-- Étape 2 -->
            <div class="work-step col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <h3><span class="count">2</span> Conseil</h3>
                    <div class="text">Nous proposons des recommandations stratégiques et un accompagnement personnalisé.</div>
                </div>
            </div>
            <!-- Étape 3 -->
            <div class="work-step col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <h3><span class="count">3</span> Développement</h3>
                    <div class="text">Nous concevons vos applications et solutions web avec une technologie moderne et sécurisée.</div>
                </div>
            </div>
            <!-- Étape 4 -->
            <div class="work-step col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <h3><span class="count">4</span> Résultat</h3>
                    <div class="text">Nous livrons des solutions prêtes à l’emploi et assurons un suivi pour garantir votre succès.</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Work Section -->

<!-- About Us -->
<section class="about-us">
    <div class="auto-container">
        <div class="row clearfix">
            <!-- Content Column -->
            <div class="content-column col-lg-6 col-md-12 col-sm-12">
            <div class="inner-column">
                <span class="title">À propos de Masadigitale</span>
                <h2>Notre mission : accompagner la digitalisation au Mali et en Afrique.</h2>
                <div class="text">
                    Fondée par <strong>SANGARE Tiefing</strong>, Directeur Général et expert en <em>marketing digital</em>, 
                    <em>création de contenu</em> et <em>publicité sur les réseaux sociaux</em>, Masadigitale est spécialisée dans 
                    le développement d’applications mobiles, de logiciels de gestion et de sites web modernes. <br><br>
                    
                    Nous aidons les entreprises à booster leur présence en ligne et à améliorer leur performance grâce à des solutions 
                    numériques fiables, sécurisées et évolutives. <br><br>
                    
                    En plus de Masadigitale, <strong>SANGARE Tiefing</strong> est le fondateur de 
                    <strong>Masasugu</strong> 
                    (<a href="https://masasugu.com" target="_blank">masasugu.com</a>), 
                    une plateforme de <em>vente et d’achat en ligne</em> qui facilite le commerce digital 
                    au Mali et en Afrique de l’Ouest. 
                    Ce projet illustre parfaitement notre savoir-faire en matière de e-commerce et d’innovation digitale.
                </div>
                <div class="link-box">
                    <a href="{{ route('about.index') }}" class="theme-btn btn-style-three">En savoir plus</a>
                    <a href="tel:+22366894475" class="theme-btn call-btn">
                        <i class="icon la la-phone"></i> +223 92 51 64 05
                    </a>
                </div>
            </div>
        </div>

            <!-- Video Column -->
            <div class="video-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <figure class="image"><img src="{{ asset('assets/images/resource/image-1.jpg') }}" alt="Masadigitale"></figure>
                    <div class="link-box"><a href="https://youtube.com/@masadigitale?si=IE7ggFBmOyzMRXYP" class="link" data-fancybox="gallery"><span class="icon la la-play-circle-o"></span></a></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Us -->

<!-- Testimonial Section -->
<section class="testimonial-section" style="background-image: url({{ asset('assets/images/background/3.jpg') }});">
    <div class="auto-container">
        <div class="inner-column">
            <span class="title">Témoignages</span>
            <h2>Ils nous ont fait confiance</h2>
            <div class="text">
                Nos clients nous choisissent pour notre expertise locale, notre réactivité et la qualité de nos solutions digitales adaptées au marché africain.
            </div>
        </div>

        <div class="testimonial-carousel owl-carousel owl-theme">
            
            
            <!-- Témoignage 3 -->
            <div class="testimonial-block">
                <div class="inner-box">
                    <div class="info-box">
                        <div class="thumb"><img src="{{ asset('assets/images/clients/mohamed.png') }}" alt="MOHAMED"></div>
                        <h3 class="name">Mohamed cherif SANGARE</h3>
                        <span class="designation">Directeur et Fondateur de l'entreprise EGS</span>
                    </div>
                    <div class="text">
                        Masadigitale nous accompagne sur la cybersécurité et l’hébergement de nos données. Un partenaire fiable au Mali.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Testimonial Section -->



@endsection

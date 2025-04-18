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
                    <span class="title">Nous sommes experts</span>
                    <h2>2 ans d’expérience en<br> Technologie & Innovation</h2>

                    <!-- Description dynamique tirée de la base de données -->
                    <div class="text">{{ $getAbouts->description }}</div>

                    <!-- Compteurs de statistiques -->
                    <div class="fact-counter">
                        <div class="row clearfix">

                            <!-- Nombre de consultants -->
                            <div class="counter-column col-lg-4 col-md-4 col-sm-12">
                                <div class="count-box">
                                    <span class="count-text" data-speed="3000" data-stop="350">0</span>
                                    <h4 class="counter-title">Consultants</h4>
                                </div>
                            </div>

                            <!-- Nombre de récompenses -->
                            <div class="counter-column col-lg-4 col-md-4 col-sm-12">
                                <div class="count-box">
                                    <span class="count-text" data-speed="3000" data-stop="25">0</span>
                                    <h4 class="counter-title">Prix & Distinctions</h4>
                                </div>
                            </div>

                            <!-- Projets réalisés -->
                            <div class="counter-column col-lg-4 col-md-4 col-sm-12">
                                <div class="count-box">
                                    <span class="count-text" data-speed="3000" data-stop="954">0</span>
                                    <h4 class="counter-title">Projets réalisés</h4>
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
                                        <a href="about.html"><img src="{{ asset('assets/images/resource/feature-1.jpg') }}" alt="Mission"></a>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <h4><a href="about.html">Notre Mission</a></h4>
                                    <div class="text">Offrir des solutions innovantes et accessibles pour un monde plus connecté et plus efficace.</div>
                                </div>
                            </div>
                        </div>

                        <!-- Bloc Vision -->
                        <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="image">
                                        <a href="about.html"><img src="{{ asset('assets/images/resource/feature-2.jpg') }}" alt="Vision"></a>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <h4><a href="about.html">Notre Vision</a></h4>
                                    <div class="text">Être un leader technologique en Afrique, en favorisant la transformation numérique et le développement durable.</div>
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
                        <h3>Vous êtes à<br> 10 minutes de l’aide dont vous avez besoin</h3>
                        <div class="text">
                            Profitez des opportunités simples pour identifier rapidement une valeur ajoutée à tester.
                        </div>
                    </div>
                </div>

                <!-- Colonne du formulaire -->
                <div class="form-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="appointment-form">
                            <div class="title-box">
                                <span>Nous sommes toujours disponibles</span>
                                <h3>Demander un rappel</h3>
                            </div>

                            <form method="post" action="">
                                @csrf <!-- Si tu es en Laravel, sinon retire cette ligne -->

                                <div class="form-group">
                                    <input type="text" name="username" placeholder="Nom complet" required>
                                </div>

                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Adresse email" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="subject" placeholder="Sujet">
                                </div>

                                <div class="form-group">
                                    <textarea name="message" placeholder="Message"></textarea>
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
                        Chez Massa Technologies, nous accompagnons les entreprises et institutions dans leur transformation digitale. Grâce à notre expertise, nous apportons des solutions technologiques durables, créons de la valeur et générons des résultats mesurables.
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

        <div class="image-column" style="background-image: url({{ asset("assets/images/resource/image-3.png") }});">
            <div class="inner-column">
                <div class="image-box"><img src="{{ asset('assets/images/resource/image-3.png') }}" alt=""></div>
            </div>
        </div>
    </div>
</section>
<!-- End Integrity Section -->


<!-- Faq Section -->
<section class="faq-section style-two" style="background-image: url({{ asset('assets/images/background/7.jpg') }});">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="accordion-column col-lg-6 col-md-12 col-sm-12">
                <div class="sec-title light">
                    <span class="title">Support & Assistance</span>
                    <h2>Questions Fréquentes</h2>
                </div>

                <!-- Accordion Box -->
                <ul class="accordion-box">
                    <!-- Question -->
                    <li class="accordion block">
                        <div class="acc-btn"><div class="icon">+</div>Comment Massa Technologies réduit-elle les risques numériques ?</div>
                        <div class="acc-content">
                            <div class="content">
                                <div class="text">
                                    Nous proposons des solutions robustes de cybersécurité, de sauvegarde et de gestion proactive des infrastructures pour anticiper et limiter les menaces potentielles.
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Question active -->
                    <li class="accordion block active-block">
                        <div class="acc-btn active"><div class="icon">+</div>Quels services sont déjà opérationnels ?</div>
                        <div class="acc-content current">
                            <div class="content">
                                <div class="text">
                                    Nos plateformes e-commerce, nos outils de gestion cloud et nos systèmes de support client sont déjà actifs et en évolution continue pour mieux répondre à vos besoins.
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Question -->
                    <li class="accordion block">
                        <div class="acc-btn"><div class="icon">+</div>Comment garantir une stratégie technologique cohérente ?</div>
                        <div class="acc-content">
                            <div class="content">
                                <div class="text">
                                    En collaborant avec nos experts en stratégie digitale, vous bénéficiez d’un accompagnement sur mesure, aligné sur vos objectifs métiers et votre vision à long terme.
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Question -->
                    <li class="accordion block">
                        <div class="acc-btn"><div class="icon">+</div>Quelle est notre vision de la transformation digitale ?</div>
                        <div class="acc-content">
                            <div class="content">
                                <div class="text">
                                    Notre vision repose sur l'intégrité, l’innovation et l’impact. Nous croyons en une technologie accessible, utile et porteuse de changement durable.
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Column with Stats -->
            <div class="stat-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="sec-title light">
                        <span class="title">Nos Capacités Clés</span>
                        <h2>Indicateurs de Performance</h2>
                        <div class="text">
                            Nos statistiques illustrent notre expertise et notre engagement envers l’excellence technologique et la satisfaction client.
                        </div>
                    </div>

                    <div class="progress-bars">
                        <!-- Skill -->
                        <div class="bar-item">
                            <div class="skill-header clearfix">
                                <div class="skill-title">Stratégie & Analyse</div>
                            </div>
                            <div class="skill-bar">
                                <div class="bar-inner">
                                    <div class="bar progress-line" data-width="85"></div>
                                    <div class="skill-percentage">
                                        <div class="count-box">
                                            <span class="count-text" data-speed="2000" data-stop="85">0</span>%
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Skill -->
                        <div class="bar-item">
                            <div class="skill-header clearfix">
                                <div class="skill-title">Croissance Économique Digitale</div>
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

                        <!-- Skill -->
                        <div class="bar-item">
                            <div class="skill-header clearfix">
                                <div class="skill-title">Objectifs Atteints</div>
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
                    <span class="title">Pourquoi Masatechnologie</span>
                    <h2>Découvrez pourquoi nous sommes<br>experts sur le marché</h2>
                    <div class="text">
                        Masatechnologie s'impose comme un acteur clé de l'innovation numérique au Mali. Grâce à une expertise pointue, une équipe passionnée et des solutions adaptées, nous accompagnons nos clients dans leur transformation digitale, en leur garantissant performance, sécurité et fiabilité.
                    </div>
                </div>
                <ul class="list-style-one clearfix">
                    <li><a href="{{ route('services.index') }}">Audit & Conseil IT</a></li>
                    <li><a href="{{ route('services.index') }}">Équipe Dédiée & Réactive</a></li>
                    <li><a href="{{ route('services.index') }}">Experts en Stratégie Digitale</a></li>
                    <li><a href="{{ route('services.index') }}">Solutions Réseau & Cloud</a></li>
                    <li><a href="{{ route('services.index') }}">Support Technique 24/7</a></li>
                    <li><a href="{{ route('services.index') }}">Respect des Délais & Livrables</a></li>
                </ul>
                <div class="btn-box">
                    <a href="{{ route('services.index') }}" class="theme-btn btn-style-three">Commencer avec Nous</a>
                </div>
            </div>

        </div>

        <!-- Image Column -->
        <div class="image-column" style="background-image: url({{ asset('assets/images/resource/image-2.jpg') }});">
            <figure class="image-box"><img src="{{ asset("assets/images/resource/image-2.jpg") }}" alt=""></figure>
        </div>
    </div>
</section>
<!--End Why Choose Us -->

<!-- Work Section -->
<section class="work-section style-two">
    <div class="auto-container">
        <div class="sec-title">
            <span class="title">Notre Méthodologie</span>
            <h2>Réussir ensemble en 4 étapes clés</h2>
        </div>
        <div class="row clearfix">
            <!-- Étape 1 -->
            <div class="work-step col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <h3><span class="count">1</span> <a href="{{ route('services.index') }}">Analyse</a></h3>
                    <div class="text">Nous commençons par une compréhension approfondie de vos besoins pour identifier les solutions les plus adaptées.</div>
                </div>
            </div>

            <!-- Étape 2 -->
            <div class="work-step col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <h3><span class="count">2</span> <a href="{{ route('services.index') }}">Conseil</a></h3>
                    <div class="text">Nous vous accompagnons avec des recommandations stratégiques basées sur notre expertise du digital et des technologies.</div>
                </div>
            </div>

            <!-- Étape 3 -->
            <div class="work-step col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <h3><span class="count">3</span> <a href="{{ route('services.index') }}">Stratégie</a></h3>
                    <div class="text">Nous élaborons une feuille de route claire et performante pour garantir la réussite de votre projet.</div>
                </div>
            </div>

            <!-- Étape 4 -->
            <div class="work-step col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <h3><span class="count">4</span> <a href="{{ route('services.index') }}">Résultat</a></h3>
                    <div class="text">Nous livrons des résultats concrets et mesurables, tout en assurant un suivi continu pour votre croissance.</div>
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
                    <span class="title">À propos de Masatechnologie</span>
                    <h2>Notre mission : vous offrir des conseils d'experts et un service de qualité.</h2>
                    <div class="text">
                        Depuis notre création, nous accompagnons les entreprises et particuliers dans leur transformation digitale.
                        Grâce à une approche centrée sur l’innovation et la performance, Masatechnologie s’impose comme un partenaire de confiance dans le développement de solutions technologiques sur mesure.
                    </div>
                    <div class="link-box">
                        <a href="{{ route('about.index') }}" class="theme-btn btn-style-three">En savoir plus</a>
                        <a href="tel:+22378794089" class="theme-btn call-btn"><i class="icon la la-phone"></i> +223 78 79 40 89</a>
                    </div>
                </div>

            </div>

            <!-- Video Column -->
            <div class="video-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <figure class="image"><img src="{{ asset('assets/images/resource/image-1.jpg') }}" alt=""></figure>
                    <div class="link-box"><a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" class="link" data-fancybox="gallery" data-caption=""><span class="icon la la-play-circle-o"></span></a></div>
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
            <span class="title">À propos de Masatechnologie</span>
            <h2>Notre ambition : offrir des conseils d’experts et des services technologiques de qualité.</h2>
            <div class="text">
                Masatechnologie est une entreprise innovante spécialisée dans les solutions numériques adaptées aux besoins des entreprises africaines.
                Grâce à notre expertise en développement web, e-commerce, cybersécurité et transformation digitale, nous accompagnons nos clients vers la réussite de leurs projets.
            </div>
            <div class="link-box">
                <a href="{{ route('about.index') }}" class="theme-btn btn-style-three">En savoir plus</a>
                <a href="tel:+22378794089" class="theme-btn call-btn"><i class="icon la la-phone"></i> +223 78 79 40 89</a>
            </div>
        </div>

        <div class="testimonial-carousel owl-carousel owl-theme">
            <!-- Témoignage 1 -->
            <div class="testimonial-block">
                <div class="inner-box">
                    <div class="info-box">
                        <div class="thumb"><img src="{{ asset('images/resource/client1.jpg') }}" alt="Client 1"></div>
                        <h3 class="name">Fatoumata Koné</h3>
                        <span class="designation">Fondatrice de MaliShop</span>
                    </div>
                    <div class="text">
                        Grâce à Masatechnologie, j’ai pu lancer ma boutique en ligne rapidement avec un design professionnel. Leur accompagnement a été précieux du début à la fin.
                    </div>
                </div>
            </div>

            <!-- Témoignage 2 -->
            <div class="testimonial-block">
                <div class="inner-box">
                    <div class="info-box">
                        <div class="thumb"><img src="{{ asset('images/resource/client2.jpg') }}" alt="Client 2"></div>
                        <h3 class="name">Ibrahim Traoré</h3>
                        <span class="designation">DG, SahelTech</span>
                    </div>
                    <div class="text">
                        Masatechnologie a développé pour nous une plateforme sur mesure, stable et sécurisée. Leur équipe est réactive et compétente.
                    </div>
                </div>
            </div>

            <!-- Témoignage 3 -->
            <div class="testimonial-block">
                <div class="inner-box">
                    <div class="info-box">
                        <div class="thumb"><img src="{{ asset('images/resource/client3.jpg') }}" alt="Client 3"></div>
                        <h3 class="name">Aminata Diallo</h3>
                        <span class="designation">Consultante IT</span>
                    </div>
                    <div class="text">
                        Très satisfaite de la qualité des services offerts. Masatechnologie est devenue une référence pour mes projets technologiques.
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- End Testimonial Section -->


@endsection

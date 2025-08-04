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
                                        <a href="about.html"><img src="{{ asset('assets/images/about/bureau.jpeg') }}" alt="Mission EGS"></a>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <h4><a href="about.html">Notre Mission</a></h4>
                                    <div class="text">Accompagner les PME et institutions dans leur transformation numérique grâce à des solutions innovantes, abordables et adaptées à leurs besoins.</div>
                                </div>
                            </div>
                        </div>

                        <!-- Bloc Vision -->
                        <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="image">
                                        <a href="about.html"><img src="{{ asset('assets/images/about/about.jpeg') }}" alt="Vision EGS"></a>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <h4><a href="about.html">Notre Vision</a></h4>
                                    <div class="text">Devenir un acteur incontournable du digital en Afrique de l’Ouest, en rendant la technologie accessible à toutes les entreprises.</div>
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

                            <form method="post" action="{{ route('contact.store') }}">
                                @csrf <!-- Si tu es en Laravel, sinon retire cette ligne -->

                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Nom complet" required>
                                </div>

                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Adresse email" required>
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
            <!-- Colonne des FAQ EGS -->
            <div class="accordion-column col-lg-6 col-md-12 col-sm-12">
                <div class="sec-title light">
                    <span class="title">Support & Assistance</span>
                    <h2>Questions Fréquentes</h2>
                </div>

                <!-- Accordion Box -->
                <ul class="accordion-box">
                    <!-- Question -->
                    <li class="accordion block">
                        <div class="acc-btn"><div class="icon">+</div>Quels services propose EGS ?</div>
                        <div class="acc-content">
                            <div class="content">
                                <div class="text">
                                    EGS propose des services en développement web/mobile, infogérance, hébergement, maintenance informatique, cybersécurité, et bien plus pour les PME et institutions.
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
                                    Nos solutions sont conçues pour les petites et moyennes entreprises, les institutions publiques et les organisations à la recherche d’une transformation digitale fiable et locale.
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Question -->
                    <li class="accordion block">
                        <div class="acc-btn"><div class="icon">+</div>Proposez-vous des formations ?</div>
                        <div class="acc-content">
                            <div class="content">
                                <div class="text">
                                    Oui, EGS offre des formations en outils numériques, bureautique, cybersécurité et gestion de systèmes informatiques pour renforcer les compétences internes de vos équipes.
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
                                    Notre support est disponible du lundi au samedi via téléphone, e-mail ou WhatsApp pour toute demande technique ou commerciale.
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Colonne des statistiques EGS -->
            <div class="stat-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="sec-title light">
                        <span class="title">Nos Capacités Clés</span>
                        <h2>Indicateurs de Performance</h2>
                        <div class="text">
                            Depuis sa création, EGS s’engage à offrir des solutions technologiques efficaces et accessibles, en mettant la satisfaction client au centre de ses priorités.
                        </div>
                    </div>

                    <div class="progress-bars">
                        <!-- Compétence 1 -->
                        <div class="bar-item">
                            <div class="skill-header clearfix">
                                <div class="skill-title">Déploiement de Solutions Numériques</div>
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
                                    <div class="bar progress-line" data-width="87"></div>
                                    <div class="skill-percentage">
                                        <div class="count-box">
                                            <span class="count-text" data-speed="2000" data-stop="87">0</span>%
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
                    <span class="title">Pourquoi choisir EGS ?</span>
                    <h2>Découvrez ce qui fait<br>notre force sur le marché</h2>
                    <div class="text">
                        EGS S.A.R.L est une entreprise malienne engagée dans la transformation digitale, l’infogérance, le développement d’applications et l’accompagnement technologique des entreprises. Grâce à une équipe qualifiée et des solutions personnalisées, nous contribuons efficacement à la modernisation des PME, des ONG et des institutions publiques au Mali.
                    </div>
                </div>
                <ul class="list-style-one clearfix">
                    <li><a href="{{ route('services.index') }}">Développement Web & Mobile</a></li>
                    <li><a href="{{ route('services.index') }}">Infogérance & Maintenance Informatique</a></li>
                    <li><a href="{{ route('services.index') }}">Hébergement Sécurisé (Serveurs Maliens)</a></li>
                    <li><a href="{{ route('services.index') }}">Consulting & Formation en Digitalisation</a></li>
                    <li><a href="{{ route('services.index') }}">Solutions de Cybersécurité & Sauvegarde</a></li>
                    <li><a href="{{ route('services.index') }}">Suivi de Projets & Support Personnalisé</a></li>
                </ul>
                <div class="btn-box">
                    <a href="{{ route('services.index') }}" class="theme-btn btn-style-three">Commencer avec EGS</a>
                    <a href="tel:+22398256435" class="theme-btn call-btn"><i class="icon la la-phone"></i> +223 98 25 64 35</a>
                </div>
            </div>



        </div>

        <!-- Image Column -->
        <div class="image-column" style="background-image: url({{ asset('assets/images/about/about3.jpeg') }});">
            <figure class="image-box"><img src="{{ asset('assets/images/about/about3.jpeg') }}" alt=""></figure>
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
                    <span class="title">À propos de EGS</span>
                    <h2>Notre mission : accélérer votre transformation digitale avec des solutions fiables et innovantes.</h2>
                    <div class="text">
                        EGS S.A.R.L est une entreprise malienne spécialisée dans les technologies de l'information, l’infogérance, le développement web & mobile, et la formation informatique. 
                        Nous accompagnons les entreprises, les institutions et les particuliers dans leur digitalisation, avec une approche orientée résultats, proximité et expertise locale.
                    </div>
                    <div class="link-box">
                        <a href="{{ route('about.index') }}" class="theme-btn btn-style-three">En savoir plus</a>
                        <a href="tel:+22398256435" class="theme-btn call-btn"><i class="icon la la-phone"></i> +223 98 25 64 35</a>
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
            <span class="title">À propos de EGS</span>
            <h2>Notre ambition : être votre partenaire de confiance en transformation numérique.</h2>
            <div class="text">
                EGS (Entreprise de Gestion et de Services) est une société malienne spécialisée dans le développement d’applications, l’infogérance, la formation informatique et le consulting digital.
                Nous aidons les PME, les institutions et les particuliers à réussir leur transition numérique, en leur offrant des solutions efficaces, sécurisées et accessibles.
            </div>
            <div class="link-box">
                <a href="{{ route('about.index') }}" class="theme-btn btn-style-three">En savoir plus</a>
                <a href="tel:+22398256435" class="theme-btn call-btn"><i class="icon la la-phone"></i> +223 98 25 64 35</a>
            </div>
        </div>


        <div class="testimonial-carousel owl-carousel owl-theme">
            <!-- Témoignage 1 -->
            <div class="testimonial-block">
                <div class="inner-box">
                    <div class="info-box">
                        <div class="thumb"><img src="{{ asset('images/resource/client1.jpg') }}" alt="Client 1"></div>
                        <h3 class="name">Mamadou Diarra</h3>
                        <span class="designation">Responsable IT, Groupe Malia</span>
                    </div>
                    <div class="text">
                        EGS nous a accompagné dans la mise en place de notre infrastructure informatique. Leurs solutions sont fiables et leur support très réactif.
                    </div>
                </div>
            </div>
            <!-- Témoignage 2 -->
            <div class="testimonial-block">
                <div class="inner-box">
                    <div class="info-box">
                        <div class="thumb"><img src="{{ asset('images/resource/client2.jpg') }}" alt="Client 2"></div>
                        <h3 class="name">Aïssata Coulibaly</h3>
                        <span class="designation">Fondatrice de DigiEduc</span>
                    </div>
                    <div class="text">
                        Grâce à EGS, notre plateforme éducative a été lancée en un temps record. Leur expertise en développement web et formation est impressionnante.
                    </div>
                </div>
            </div>
            <!-- Témoignage 3 -->
            <div class="testimonial-block">
                <div class="inner-box">
                    <div class="info-box">
                        <div class="thumb"><img src="{{ asset('images/resource/client3.jpg') }}" alt="Client 3"></div>
                        <h3 class="name">Sekou Bah</h3>
                        <span class="designation">Directeur Général, Koura Services</span>
                    </div>
                    <div class="text">
                        EGS a su comprendre nos besoins en digitalisation et proposer des solutions parfaitement adaptées à notre environnement.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Testimonial Section -->


@endsection

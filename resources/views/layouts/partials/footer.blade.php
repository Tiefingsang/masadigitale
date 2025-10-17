<!--Clients Section-->
<section class="clients-section">
    <div class="auto-container">
<div class="sponsors-outer">
    <!--Sponsors Carousel-->
    <ul class="sponsors-carousel owl-carousel owl-theme">
        <li class="slide-item">
            <figure class="image-box">
                <a href="#"><img src="{{ asset('assets/images/clients/egs.jpg') }}" alt="EGS"></a>
            </figure>
        </li>
        <li class="slide-item">
            <figure class="image-box">
                <a href="#"><img src="{{ asset('assets/images/clients/egs.jpg') }}" alt="EGS"></a>
            </figure>
        </li>
        <li class="slide-item">
            <figure class="image-box">
                <a href="https://masasugu.com"><img src="{{ asset('assets/images/clients/masasugu.jpeg') }}" alt="Masasugu"></a>
            </figure>
        </li>
        <li class="slide-item">
            <figure class="image-box">
                <a href="#"><img src="{{ asset('assets/images/clients/logo.png') }}" alt="Masadigitale"></a>
            </figure>
        </li>
    </ul>
</div>

<!-- Ajoute ce style dans ton fichier CSS ou dans un <style> -->
<style>
.sponsors-carousel .image-box img {
    max-height: 80px; /* Ajuste ici : 60px, 80px, 100px */
    width: auto;
    object-fit: contain;
    margin: 0 auto;
    display: block;
}
</style>

    </div>
</section>
<!--End Clients Section-->


<footer class="main-footer">
    <!-- Footer Upper -->
    <div class="footer-upper">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Colonne 1 : À propos -->
                <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                    <div class="footer-widget about-widget">
                        <div class="logo">
                            <a href="{{ route('home.index') }}"><img src="{{ asset('assets/images/foot.png') }}" width="70" alt="Masadigitale Logo" /></a>
                        </div>
                        <div class="text">
                            Masadigitale vous accompagne dans votre transformation digitale grâce à des 
                            <strong>applications mobiles</strong>, <strong>logiciels de gestion</strong>, 
                            <strong>sites web modernes</strong> et des solutions de <strong>marketing digital</strong>.  
                            Notre objectif : booster la croissance de votre entreprise.
                        </div>
                        <ul class="info-list">
                            <li><span class="la la-clock-o"></span> Lundi - Samedi : 08h30 à 17h30</li>
                            <li><span class="la la-home"></span> Bamako, Mali – Masadigitale HQ</li>
                        </ul>
                    </div>
                </div>

                <!-- Colonne 2 : Articles récents -->
                <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                    <div class="footer-widget recent-posts">
                        <h2 class="widget-title">Actualités Récentes</h2>
                        <div class="widget-content">
                            <div class="post">
                                <div class="thumb">
                                    <a href="#"><img src="{{ asset('assets/images/about/directeur.jpeg') }}" alt=""></a>
                                </div>
                                <h4><a href="#">Masadigitale lance une app de gestion pour les PME au Mali.</a></h4>
                                <span class="date">15 Août, 2025</span>
                            </div>
                            <div class="post">
                                <div class="thumb">
                                    <a href="#"><img src="{{ asset('assets/images/foot.jpeg') }}" alt=""></a>
                                </div>
                                <h4><a href="#">Comment réussir sa transformation digitale avec Masadigitale ?</a></h4>
                                <span class="date">05 Juil, 2025</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Colonne 3 : Newsletter & Réseaux -->
                <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                    <div class="footer-widget newsletter-widget">
                        <h2 class="widget-title">Restez Connecté</h2>
                        <div class="widget-content">
                            <div class="text">Abonnez-vous à notre newsletter et recevez nos nouvelles offres et innovations digitales.</div>
                            <div class="newsletter-form">
                                <form method="post" action="#">
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Votre adresse e-mail" required="">
                                        <button type="submit"><i class="la la-paper-plane"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="social-links">
                                <h4>Suivez-nous</h4>
                                <ul class="social-icon-two">
                                    <li><a href="https://facebook.com/masadigitale"><span class="la la-facebook"></span></a></li>
                                    <li><a href="https://twitter.com/masadigitale"><span class="la la-twitter"></span></a></li>
                                    <li><a href="https://instagram.com/masadigitale"><span class="la la-instagram"></span></a></li>
                                    <li><a href="https://linkedin.com/company/masadigitale"><span class="la la-linkedin"></span></a></li>
                                    <li><a href="https://youtube.com/@masadigitale"><span class="la la-youtube"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="copyright-text">
                    <p>&copy; {{ now()->year }} Masadigitale. Conçu avec ❤️ par <a href="https://masadigitale.com">l'équipe Masadigitale</a></p>
                </div>
                <div class="scroll-to-top scroll-to-target" data-target="html"><span class="la la-angle-up"></span></div>
            </div>
        </div>
    </div>
</footer>

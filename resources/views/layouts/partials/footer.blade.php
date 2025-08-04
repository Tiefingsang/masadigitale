<footer class="main-footer">
    <!-- Footer Upper -->
    <div class="footer-upper">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Colonne 1 : À propos -->
                <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                    <div class="footer-widget about-widget">
                        <div class="logo">
                            <a href="{{ route('home.index') }}"><img src="{{ asset('assets/images/footer-logo.png') }}" width="70" alt="EGS Logo" /></a>
                        </div>
                        <div class="text">
                            EGS vous accompagne dans la transformation digitale de vos activités grâce à des solutions innovantes et personnalisées. Notre équipe d’experts met à votre disposition son savoir-faire pour garantir votre succès.
                        </div>
                        <ul class="info-list">
                            <li><span class="la la-clock-o"></span> Lundi - Samedi : 08h30 à 17h30</li>
                            <li><span class="la la-home"></span> Bamako, Mali – EGS HQ</li>
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
                                    <a href="#"><img src="{{ asset('assets/images/bureau.jpeg') }}" alt=""></a>
                                </div>
                                <h4><a href="#">EGS lance une nouvelle plateforme pour les PME africaines.</a></h4>
                                <span class="date">01 Juil, 2025</span>
                            </div>
                            <div class="post">
                                <div class="thumb">
                                    <a href="#"><img src="{{ asset('assets/images/foot.jpeg') }}" alt=""></a>
                                </div>
                                <h4><a href="#">Transformation digitale : Les clés de réussite avec EGS.</a></h4>
                                <span class="date">18 Juin, 2025</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Colonne 3 : Newsletter & Réseaux -->
                <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                    <div class="footer-widget newsletter-widget">
                        <h2 class="widget-title">Restez Informé</h2>
                        <div class="widget-content">
                            <div class="text">Abonnez-vous à notre newsletter pour recevoir nos dernières offres, projets et actualités.</div>
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
                                    <li><a href="#"><span class="la la-facebook"></span></a></li>
                                    <li><a href="#"><span class="la la-twitter"></span></a></li>
                                    <li><a href="#"><span class="la la-instagram"></span></a></li>
                                    <li><a href="#"><span class="la la-linkedin"></span></a></li>
                                    <li><a href="#"><span class="la la-youtube"></span></a></li>
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
                    <p>&copy; {{ now()->year }} EGS. Conçu avec ❤️ par <a href="https://egs-mali.com">l'équipe EGS</a></p>
                </div>
                <div class="scroll-to-top scroll-to-target" data-target="html"><span class="la la-angle-up"></span></div>
            </div>
        </div>
    </div>
</footer>

@extends('layouts.master')
@section('content')

<div class="service-detail-section">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Content Side-->
            <div class="content-side order-last col-xl-9 col-lg-8 col-md-12 col-sm-12">
                <div class="service-detail">
                    <!-- Image Box -->
                    <div class="image-box"><img src="{{ $serviceFindByTitle->image }}" alt=""></div>

                    <div class="lower-content">
                        <h2>{{ $serviceFindByTitle->title }}</h2>
                        <p>{{ $serviceFindByTitle->short }}</p>
                        <p>{{ $serviceFindByTitle->description }}</p>


                        <div class="two-column">
                            <div class="row clearfix">
                                <div class="info-column col-lg-6 col-md-12 col-sm-12">
                                    <h3>Stratégie Digitale & Opérations</h3>
                                    <p>Chez Masatechnologie, nous aidons les entreprises à structurer leur présence numérique et à optimiser leurs opérations. Grâce à une combinaison de stratégie digitale, d’outils technologiques et d’analyse des données, nous accompagnons nos clients dans la modernisation de leurs processus, la gestion efficace de leurs plateformes e-commerce et l'amélioration de leur performance globale.</p>
                                </div>
                        
                                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                    <div class="image">
                                        <a href="{{ $serviceFindByTitle->image }}" class="lightbox-image">
                                            <img src="{{ $serviceFindByTitle->image }}" alt="Stratégie digitale Masatechnologie">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>

                    <div class="key-features">
                        <h3>Nos Caractéristiques Clés</h3>
                        <ul class="accordion-box style-two">
                            <!--Bloc-->
                            <li class="accordion block">
                                <div class="acc-btn">Prospection Client Digitale <div class="icon la la-plus-circle"></div></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">Nous utilisons des outils numériques avancés pour identifier et attirer efficacement des clients potentiels, en combinant data marketing et intelligence artificielle afin d’optimiser vos campagnes commerciales.</div>
                                    </div>
                                </div>
                            </li>
                    
                            <!--Bloc-->
                            <li class="accordion block active-block">
                                <div class="acc-btn active">Objectifs d’Investissement Technologique <div class="icon la la-plus-circle"></div></div>
                                <div class="acc-content current">
                                    <div class="content">
                                        <div class="text">Chez Masatechnologie, nous accompagnons les entreprises dans la définition et l’atteinte de leurs objectifs en matière de digitalisation, en proposant des solutions technologiques sur mesure à fort retour sur investissement.</div>
                                    </div>
                                </div>
                            </li>
                    
                            <!--Bloc-->
                            <li class="accordion block">
                                <div class="acc-btn">Vérification & Validation de Documents <div class="icon la la-plus-circle"></div></div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">Nous proposons des outils de validation automatisée des documents (KYC, contrats, justificatifs) grâce à des technologies d’analyse intelligente, garantissant sécurité et conformité dans vos processus numériques.</div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    
                        <!-- Onglets Infos Produits -->
                        <div class="service-info-tabs">
                            <!-- Onglets Service -->
                            <div class="service-tabs tabs-box">
                    
                                <!-- Boutons des onglets -->
                                <ul class="tab-btns tab-buttons clearfix">
                                    <li data-tab="#info-1" class="tab-btn">Avantages</li>
                                    <li data-tab="#info-2" class="tab-btn active-btn">Solutions E-commerce</li>
                                    <li data-tab="#info-3" class="tab-btn">Croissance de Masatechnologie</li>
                                </ul>
                    
                                <!-- Contenu des onglets -->
                                <div class="tabs-content">
                    
                                    <!-- Onglet -->
                                    <div class="tab" id="info-1">
                                        <div class="content">
                                            <figure class="thumb"><img src="{{ asset('assets/images/resource/thumb-2.jpg') }}" alt=""></figure>
                                            <p>Nos services permettent aux entreprises de gagner en efficacité, en visibilité et en compétitivité grâce à des solutions digitales innovantes. Nous vous aidons à automatiser vos processus et à vous connecter à vos clients de manière intelligente.</p>
                                        </div>
                                    </div>
                    
                                    <!-- Onglet Actif -->
                                    <div class="tab active-tab" id="info-2">
                                        <div class="content">
                                            <figure class="thumb"><img src="{{ asset('assets/images/resource/thumb-2.jpg') }}" alt=""></figure>
                                            <p>Notre plateforme e-commerce offre aux commerçants une interface intuitive pour créer, gérer et développer leur propre boutique en ligne. Elle inclut des outils marketing, de gestion de stock, de paiement sécurisé et de livraison intégrée.</p>
                                        </div>
                                    </div>
                    
                                    <!-- Onglet -->
                                    <div class="tab" id="info-3">
                                        <div class="content">
                                            <figure class="thumb"><img src="{{ asset('assets/images/resource/thumb-2.jpg') }}" alt=""></figure>
                                            <p>Depuis sa création, Masatechnologie ne cesse d’évoluer pour répondre aux besoins numériques du marché malien. Grâce à une équipe passionnée et à une vision axée sur l’innovation, nous accélérons la transformation digitale de nombreuses entreprises.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div><!-- Service Detail -->
            </div>

            <!--Sidebar Side-->
            <div class="sidebar-side col-xl-3 col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar services-sidebar">

                    <!-- Services Cat List -->
                    <div class="sidebar-widget categories">
                        <ul class="services--list">
                            <li><a href="{{ route('services.index') }}">Services</a></li>
                            {{-- @foreach ($getServices as $item)
                                <li class="activ"><a href="{{ route('services-detail', ['title'=>$item->title]) }}">{{ $item->title }}</a></li>
                            @endforeach --}}

                            @foreach ($getServices as $item)
                                <li class="{{ Route::currentRouteName() == 'services-detail' && request('id') == $item->id ? 'active' : '' }}">
                                    <a href="{{ route('services-detail', ['id' => $item->id]) }}">
                                        {{ $item->title }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    
                    <!-- Brochure -->
                    <div class="sidebar-widget brochure">
                        <div class="brochure-box">
                            <span>Téléchargez notre brochure</span>
                            <h4>Brochure financière 2017</h4>
                            <p>Ici.</p>
                            <a href="#" class="theme-btn btn-style-two">Télécharger</a>
                        </div>
                    </div>
                    
                </aside>
            </div>
        </div>
    </div>
</div>
<!-- End Service Detail Section -->

<!-- Call To Action -->
<section class="call-to-action style-two alternate">
    <div class="auto-container">
        <div class="outer-box clearfix">
            <div class="title-column">
                <h3>Des solutions fiables pour une croissance durable</h3>
            </div>

            <div class="btn-column">
                <div class="btn-box">
                    <a href="{{ route('contact.index') }}" class="theme-btn btn-style-one">Demander un devis</a>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection


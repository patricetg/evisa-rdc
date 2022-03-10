@extends("myViews.frontOffice.layout.frontOfficeLayout")

@section("page")
    E-visa
@endsection

@section("firstLevelLayoutBodyContent")

    <!--Start Hero-->
    <section class="hero-section minimal-portfolio" data-background="{{ asset("templateFiles/niwax/images/shape/bg-light.png") }}" id="home">
        <div class="text-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 v-center niwax" data-rellax-speed="4">
                        <div class="header-heading">
                            {{--<div class="mb30 dzname wow fadeIn" data-wow-delay=".2s">I'm Lucy Tania</div>--}}
                            <h1 class="wow fadeIn" data-wow-delay=".4s">
                                {{-- User Interface Designer --}}
                                e-Passeport
                            </h1>
                            <h4 class="mb30 wow fadeIn" data-wow-delay=".6s">
                                Le système de dématérialisation et d’automatisation de la procédure d’obtention du passeport par les congolais vivant en RDC et de la diaspora.
                            </h4>
                            <h4 class="mb30 wow fadeIn" data-wow-delay=".8s">
                                L’e-Passeport fait partie des actions prioritaires par pilier du PNN (Projet 49 : Dématérialiser les procédures d’accès aux services publics en créant entre autre la plateforme de passeports en ligne).
                            </h4>

                            {{--<p class="wow fadeIn" data-wow-delay=".8s">C'est simple, rapide, et pratique.</p>--}}
                            <div class="-content-sec  d-flex v-center wow fadeIn" data-wow-delay="1s">
                                <div class="video-intro-pp v-center">
                                    <a class="video-link play-video" href="{{ asset("myFiles/videos/e-passeport.mp4") }}"><span class="triangle-play"></span></a>
                                    {{--<a class="video-link play-video" href="https://www.youtube.com/watch?v=SZEflIVnhH8?autoplay=1&amp;rel=0"><span class="triangle-play"></span></a>--}}
                                </div>
                                <div class="title-hero-oth v-center"><p>Regarder la vidéo</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 v-center"><div class="img-hro" data-tilt data-tilt-max="4" data-tilt-speed="6000"><img src="{{ asset("myFiles/images/passeport-2.png") }}" alt="title" class="img-fluid"></div></div>
                </div>
            </div>
        </div>
    </section>
    <!--End Hero-->


{{--

    <div class="client-budges pb80 pt80">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-6 text-center v-center"><img src="images/client/envato.png" alt="logo" class="img-fluid"></div>
                <div class="col-md-3 col-6 text-center v-center"><img src="images/client/freelancer-logo.png" alt="logo" class="img-fluid"></div>
                <div class="col-md-3 col-6 text-center v-center m-mt30"><img src="images/client/google-logo.png" alt="logo" class="img-fluid"></div>
                <div class="col-md-3 col-6 text-center v-center m-mt30"><img src="images/client/upwork-logo.png" alt="logo" class="img-fluid"></div>
            </div>
        </div>
    </div>

--}}


    <!--Start Portfolio-->
    <section class="dg-portfolio-section pb80 pt80">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-8">
                    <div class="common-heading-2">
                        <span class="text-effect-2">Comment obtenir un e-Passeport ?</span>
                        {{--<p class="text-muted text-center">Il y a 05 grandes étapes</p>--}}
                        <h2 class="mb0">Les 05 étapes pour obtenir son e-passeport Congolais</h2>
                    </div>
                </div>
            </div>

            <div class="row my-5">
                <div class="col">

                    <div class="row">
                        <div class="col">
                            <h4 class="text-center">A - REMPLIR LE FORMULAIRE EN LIGNE</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="lh-2">
                                <strong>Détails sur la personne</strong> : Nom et Prénom, Date de naissance, Pays / Ville, Téléphone, Email, Etc.
                            </p>
                            <p class="lh-2">
                                <strong>Détails sur le passeport</strong> : Nationalité, Numéro du passeport, Lieu de délivrance, Date d’expiration, Etc.
                            </p>
                            {{--<p class="lh-2">
                                <strong>Détails sur le e-Visa demandé</strong> : Type de e-Visa, Durée du séjour, Nombre d’entrées, poste d'entrée / poste de sortie, Etc.
                            </p>--}}

                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset("myFiles/images/remplir-formulaire.png") }}" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row my-5">
                <div class="col">

                    <div class="row">
                        <div class="col">
                            <h4 class="text-center">B - FOURNIR LES DOCUMENTS DEMANDÉS EN LIGNE</h4>
                        </div>
                    </div>


                    <div class="row">

                        <div class="col-lg-4S col-sm-6 mt-3 mt60S wow fadeIn" data-wow-delay=".2s">
                            <div>
                                <h6 class="mb10 text-center">
                                    <span class="badge bg-primary p-3 rounded-circle">1</span>
                                    Votre photo d'identité
                                </h6>
                            </div>
                            <div class="isotope_item h-scl-">
                                <div class="item-image h-scl-base">
                                    <a href="#">
                                        <img src="{{ asset("myFiles/images/photo-passeport.png") }}" alt="portfolio" class="img-fluid"/>
                                        {{--<img src="{{ asset("templateFiles/niwax/images/portfolio/img-port1.jpg") }}" alt="portfolio" class="img-fluid"/> --}}
                                    </a>
                                </div>
                                <div class="item-info">
                                    {{--<h4>
                                        <a href="#">
                                            <span class="badge bg-primary p-3 rounded-circle">1</span>
                                        </a>
                                    </h4>
                                    <h6 class="mb10">Votre photo d'identité</h6>--}}
                                    <p>Photo d’identité: Taille 350 x 350 pixels en format JPEG ou tout autre.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4S col-sm-6 mt-3 mt60S wow fadeIn" data-wow-delay=".5s">
                            <div>
                                <h6 class="mb10 text-center">
                                    <span class="badge bg-primary p-3 rounded-circle">2</span>
                                    Votre passeport
                                </h6>
                            </div>
                            <div class="isotope_item h-scl-">
                                <div class="item-image h-scl-base">
                                    <a href="#"><img src="{{ asset("myFiles/images/passeport.png") }}" alt="portfolio" class="img-fluid"/> </a>
                                </div>
                                <div class="item-info">
                                    {{-- <h4>
                                         <a href="#">
                                             <span class="badge bg-primary p-3 rounded-circle">2</span>
                                         </a>
                                     </h4>
                                     <h6 class="mb10">Votre passeport</h6>--}}
                                    <p>
                                        Passeport: valide pour 6 mois minimum. A fournir au format PDF.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4S col-sm-6 mt-3 mt60S wow fadeIn" data-wow-delay=".8s">
                            <div class="isotope_item h-scl-">
                                <div>
                                    <h6 class="mb10 text-center">
                                        <span class="badge bg-primary p-3 rounded-circle">3</span>
                                        Votre reçu de réservation de vol
                                    </h6>
                                </div>
                                <div class="item-image h-scl-base">
                                    <a href="#"><img src="{{ asset("myFiles/images/reservation-vol.png") }}" alt="portfolio" class="img-fluid"/> </a>
                                </div>
                                <div class="item-info">
                                    {{--<h4>
                                        <a href="#">
                                            <span class="badge bg-primary p-3 rounded-circle">3</span>
                                        </a>
                                    </h4>
                                    <h6 class="mb10">Votre reçu de réservation de vol</h6>--}}
                                    <p>
                                        Une réservation de vol: ou tout autre moyen possible de transport.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4S col-sm-6 mt-3 mt60S wow fadeIn" data-wow-delay="1.1s">
                            <div>
                                <h6 class="mb10 text-center">
                                    <span class="badge bg-primary p-3 rounded-circle">4</span>
                                    Votre preuve de vaccination anti-codiv, votre Test PCR Codiv-19
                                </h6>
                            </div>
                            <div class="isotope_item h-scl-">
                                <div class="item-image h-scl-base">
                                    <a href="#"><img src="{{ asset("myFiles/images/attestation-vaccination.png") }}" alt="portfolio" class="img-fluid"/> </a>
                                </div>
                                <div class="item-info">
                                    {{--<h4>
                                        <a href="#">
                                            <span class="badge bg-primary p-3 rounded-circle">4</span>
                                        </a>
                                    </h4>
                                    <h6 class="mb10">Votre preuve de vaccination anti-codiv, votre Test PCR Codiv-19</h6>--}}
                                    <p>
                                        Test PCR Covid-19 négatif réalisé 48h au plus tard.
                                    </p>
                                </div>
                            </div>
                        </div>

                        {{--
                        <div class="col-lg-4 col-sm-6 mt60 wow fadeIn" data-wow-delay="1.4s">
                            <div class="isotope_item h-scl-">
                                <div class="item-image h-scl-base">
                                    <a href="#"><img src="{{ asset("templateFiles/niwax/images/portfolio/img-port5.jpg") }}" alt="portfolio" class="img-fluid"/> </a>
                                </div>
                                <div class="item-info">
                                    <h4><a href="#">Creative App</a></h4>
                                    <h6 class="mb10">ios, design</h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 mt60 wow fadeIn" data-wow-delay="1.7s">
                            <div class="isotope_item h-scl-">
                                <div class="item-image h-scl-base">
                                    <a href="#"><img src="{{ asset("templateFiles/niwax/images/portfolio/img-port6.jpg") }}" alt="portfolio" class="img-fluid"/> </a>
                                </div>
                                <div class="item-info">
                                    <h4><a href="#">Creative App</a></h4>
                                    <h6 class="mb10">ios, design</h6>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </div>
                            </div>
                        </div>
                        --}}

                    </div>





                </div>
            </div>


            <div class="row my-5">
                <div class="col">

                    <div class="row">
                        <div class="col">
                            <h4 class="text-center">C - PAIEMENT DES FRAIS DE e-Visa EN LIGNE</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p class="text-center">Plusieurs méthode de paiements sont disponibles.</p>
                        </div>
                    </div>
                    @include("myViews.frontOffice.include.paymentMethods")
                </div>
            </div>


        </div>
    </section>
    <!--End Portfolio-->


    <section class="dg-portfolio-section pb80 pt80">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-8">
                    <div class="common-heading-2">
                        <span class="text-effect-2">Comment payer son e-Visa en ligne ?</span>
                        <h2 class="mb0">La procédure de paiement du e-Visa</h2>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-12 col-lg-4S col-sm-6S mt60 wow fadeIn" data-wow-delay=".2s">
                    <p class="text-center">
                        Le paiement en ligne est un élément indispensable pour mettre en œuvre le e-Visa. Notre objectif est :
                    </p>
                    <ul>
                        <li class="my-2 lh-2">
                            D'intégrer les types de paiement les plus utilisés dans le monde pour rendre l’e-Visa accessible à plus de monde.
                        </li>
                        <li class="my-2 lh-2">
                            De sécuriser les transactions : certifiée PCI-DSS, système d’authentification forte (3D Secure), protocole SSL qui crypte les numéros de cartes bancaires
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row my-3">

                <div class="col-12 mb-2">
                    <h3 class="text-center">Méthodes de paiement disponibles </h3>
                </div>

                <div class="col-md-6 borderS border-primaryS roundedS my-1">
                    <h4 class="text-center">Cartes Bancaires</h4>
                    <div class="niwax-client-slider owl-carousel">
                        <div class="awardlogo"> <img src="{{ asset("templateFiles/niwax/images/client/customer-logo-1.png") }}" alt="icon"></div>
                        <div class="awardlogo"> <img src="{{ asset("templateFiles/niwax/images/client/customer-logo-2.png") }}" alt="icon"></div>
                        <div class="awardlogo"> <img src="{{ asset("templateFiles/niwax/images/client/customer-logo-3.png") }}" alt="icon"></div>
                        <div class="awardlogo"> <img src="{{ asset("templateFiles/niwax/images/client/customer-logo-4.png") }}" alt="icon"></div>
                        <div class="awardlogo"> <img src="{{ asset("templateFiles/niwax/images/client/customer-logo-5.png") }}" alt="icon"></div>
                    </div>
                </div>

                <div class="col-md-6 borderS border-primaryS roundedS  my-1">
                    <h4 class="text-center">Portefeuilles Electroniques</h4>
                    <div class="niwax-client-slider owl-carousel">
                        <div class="awardlogo"> <img src="{{ asset("templateFiles/niwax/images/client/customer-logo-1.png") }}" alt="icon"></div>
                        <div class="awardlogo"> <img src="{{ asset("templateFiles/niwax/images/client/customer-logo-2.png") }}" alt="icon"></div>
                        <div class="awardlogo"> <img src="{{ asset("templateFiles/niwax/images/client/customer-logo-3.png") }}" alt="icon"></div>
                        <div class="awardlogo"> <img src="{{ asset("templateFiles/niwax/images/client/customer-logo-4.png") }}" alt="icon"></div>
                        <div class="awardlogo"> <img src="{{ asset("templateFiles/niwax/images/client/customer-logo-5.png") }}" alt="icon"></div>
                    </div>
                </div>

                <div class="col-md-6 borderS border-primaryS roundedS  my-1">
                    <h4 class="text-center">Mobile Money</h4>
                    <div class="niwax-client-slider owl-carousel">
                        <div class="awardlogo"> <img src="{{ asset("templateFiles/niwax/images/client/customer-logo-1.png") }}" alt="icon"></div>
                        <div class="awardlogo"> <img src="{{ asset("templateFiles/niwax/images/client/customer-logo-2.png") }}" alt="icon"></div>
                        <div class="awardlogo"> <img src="{{ asset("templateFiles/niwax/images/client/customer-logo-3.png") }}" alt="icon"></div>
                        <div class="awardlogo"> <img src="{{ asset("templateFiles/niwax/images/client/customer-logo-4.png") }}" alt="icon"></div>
                        <div class="awardlogo"> <img src="{{ asset("templateFiles/niwax/images/client/customer-logo-5.png") }}" alt="icon"></div>
                    </div>
                </div>

                <div class="col-md-6 borderS border-primaryS roundedS my-1">
                    <h4 class="text-center">Cryptos</h4>
                    <div class="niwax-client-slider owl-carousel">
                        <div class="awardlogo"> <img src="{{ asset("templateFiles/niwax/images/client/customer-logo-1.png") }}" alt="icon"></div>
                        <div class="awardlogo"> <img src="{{ asset("templateFiles/niwax/images/client/customer-logo-2.png") }}" alt="icon"></div>
                        <div class="awardlogo"> <img src="{{ asset("templateFiles/niwax/images/client/customer-logo-3.png") }}" alt="icon"></div>
                        <div class="awardlogo"> <img src="{{ asset("templateFiles/niwax/images/client/customer-logo-4.png") }}" alt="icon"></div>
                        <div class="awardlogo"> <img src="{{ asset("templateFiles/niwax/images/client/customer-logo-5.png") }}" alt="icon"></div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="dg-portfolio-section pb80 pt80">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-8">
                    <div class="common-heading-2">
                        <span class="text-effect-2">Comment récupérer son e-Visa en ligne ?</span>
                        <h2 class="mb0">La récupération du e-Visa</h2>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="row wow fadeIn" data-wow-delay=".2s">
                    <div class="col-md-7 pr-4">
                        <p class="text-center h3 c-secondary h4 lh-3">
                            L'e-Visa (avec un code QR) sera envoyé à l'adresse e-mail fournie lors du processus de demande. Il doit être imprimé pour être présenté aux gardes-frontières.
                        </p>
                    </div>
                    <div class="col-md-5">
                        <img src="{{ asset("myFiles/images/e-visa-example.png") }}" alt="">
                    </div>
                </div>

               {{-- <div class="col-12 col-lg-4S col-sm-6S mt60 wow fadeIn" data-wow-delay=".2s">

                </div>--}}
                {{--<div class="col-md-4">
                    <img src="{{ asset("myFiles/images/e-visa-example.png") }}" class="img-fluid" alt="">
                </div>--}}
            </div>

        </div>
    </section>


    <section class="dg-portfolio-section pb80 pt80">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-8">
                    <div class="common-heading-2">
                        <span class="text-effect-2">Voyage et contrôle aux frontières de la RD Congo</span>
                        {{--<h2 class="mb0">Les points d'entrée éligibles avec le e-visa</h2>--}}
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-12">

                    <div class="card-group">
                        <div class="card">
                            <img src="{{ asset("myFiles/images/aeroport.png") }}" class="card-img-top" alt="...">
                        </div>
                        <div class="card">
                            <img src="{{ asset("myFiles/images/control.png") }}" class="card-img-top" alt="...">
                        </div>
                    </div>
                </div>
                <div class="col-12 my-2">
                    <p class="text-center">
                        Le voyageur sera muni de son passeport et son e-VISA imprimé pour le contrôle à l'aéroport.
                    </p>
                </div>

               {{-- <div class="col-12 col-lg-4S col-sm-6S mt60 wow fadeIn" data-wow-delay=".2s">
                    <p class="text-center">
                        L'e-Visa (avec un code QR) sera envoyé à l'adresse e-mail fournie lors du processus de demande. Il doit être imprimé pour être présenté aux gardes-frontières.
                    </p>
                </div>--}}
                {{--<div class="col-md-4">
                    <img src="{{ asset("myFiles/images/e-visa-example.png") }}" class="img-fluid" alt="">
                </div>--}}
            </div>

        </div>
    </section>



    <!--Start Portfolio-->
    <section class="portfolio-section pad-tb">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-9">
                    <div class="common-heading">
                        {{--<span>Voyage et contrôle aux frontières de la RD Congo</span>--}}
                        <h2 class="mb0">Points d'entrée éligibles avec le e-visa</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mt60 wow fadeInUp" data-wow-delay="0.2s">
                    <h5 class="text-center text-black">Aéroport international de Ndjili, Kinshasa (FIH)</h5>
                    <div class="isotope_item hover-scale">
                        <div class="item-image" data-tilt data-tilt-max="2" data-tilt-speed="1000">
                            <a href="#">
                                <img src="{{ asset("myFiles/images/aeroport.png") }}" alt="image" class="img-fluid" />
                                {{--<img src="{{ asset("templateFiles/niwax/images/portfolio/image-1.jpg") }}" alt="image" class="img-fluid" /> --}}
                            </a>
                        </div>
                        {{--<div class="item-info">
                            <h4><a href="#">Aéroports Internationaux</a></h4>
                            <p>
                                Aéroport international de Ndjili, Kinshasa (FIH). <br/>
                                Aéroport international de la Luano, Lubumbashi (FBM). <br/>
                                Aéroport international de Goma (GOM).
                            </p>
                        </div>--}}
                    </div>
                </div>

                <div class="col-md-6 mt60 wow fadeInUp" data-wow-delay="0.4s">
                    <h5 class="text-center text-black"> Aéroport international de la Luano, Lubumbashi (FBM)</h5>
                    <div class="isotope_item hover-scale">
                        <div class="item-image" data-tilt data-tilt-max="2" data-tilt-speed="1000">
                            <a href="#"><img src="{{ asset("myFiles/images/frontiere.png") }}" alt="image" class="img-fluid" /> </a>
                        </div>
                        {{--<div class="item-info">
                            <h4><a href="#">Autres points d'entrées de la RDC</a></h4>
                            <p>Ceci s'appliquera à n'importe quel point d'entrée (frontière) de la République Démocratique du Congo</p>
                        </div>--}}
                    </div>
                </div>


                <div class="col-md-6 mt60 wow fadeInUp" data-wow-delay="0.6s">
                    <h5 class="text-center text-black"> Aéroport international de Goma (GOM)</h5>
                    <div class="isotope_item hover-scale">
                        <div class="item-image" data-tilt data-tilt-max="2" data-tilt-speed="1000">
                            <a href="#"><img src="{{ asset("myFiles/images/aeroport-3.png") }}" alt="image" class="img-fluid" /> </a>
                        </div>
                        {{--<div class="item-info">
                            <h4><a href="#">Autres points d'entrées de la RDC</a></h4>
                            <p>Ceci s'appliquera à n'importe quel point d'entrée (frontière) de la République Démocratique du Congo</p>
                        </div>--}}
                    </div>
                </div>



                <div class="col-md-6 mt60 wow fadeInUp" data-wow-delay="0.8s">
                    <h5 class="text-center text-black"> Aéroport international de Bangoka, Kisangani (KFI)</h5>
                    <div class="isotope_item hover-scale">
                        <div class="item-image" data-tilt data-tilt-max="2" data-tilt-speed="1000">
                            <a href="#"><img src="{{ asset("myFiles/images/aeroport-2.png") }}" alt="image" class="img-fluid" /> </a>
                        </div>
                        {{--<div class="item-info">
                            <h4><a href="#">Autres points d'entrées de la RDC</a></h4>
                            <p>Ceci s'appliquera à n'importe quel point d'entrée (frontière) de la République Démocratique du Congo</p>
                        </div>--}}
                    </div>
                </div>



                {{-- <div class="col-md-3 mt60 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="isotope_item hover-scale">
                        <div class="item-image" data-tilt data-tilt-max="2" data-tilt-speed="1000">
                            <a href="#"><img src="{{ asset("templateFiles/niwax/images/portfolio/image-6.jpg") }}" alt="image" class="img-fluid" /> </a>
                        </div>
                        <div class="item-info">
                            <h4><a href="#">Brochure Design</a></h4>
                            <p>Graphic, Print</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt60 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="isotope_item hover-scale">
                        <div class="item-image" data-tilt data-tilt-max="2" data-tilt-speed="1000">
                            <a href="#"><img src="{{ asset("templateFiles/niwax/images/portfolio/image-1.jpg") }}" alt="image" class="img-fluid" /> </a>
                        </div>
                        <div class="item-info">
                            <h4><a href="#">Icon Pack</a></h4>
                            <p>iOs, Android</p>
                        </div>
                    </div>
                </div>--}}
            </div>
        </div>
    </section>
    <!--End Portfolio-->

    <div class="row mt-2 my-3">
        <div class="col">
            <p class="text-center">
                <a href="{{ route("frontOfficeEPasseportPage") }}" title="En savoir plus sur le e-Passeport" class="btn-main bg-btn lnk mt30">En savoir plus sur le e-Passeport <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
            </p>
        </div>
    </div>






@endsection
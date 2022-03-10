@extends("myViews.frontOffice.layout.frontOfficeLayout")

@section("page")
    e-Passeport
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
                        <h2 class="mb0">Les 05 étapes pour obtenir son e-Passeport Congolais</h2>
                    </div>
                </div>
            </div>

            <div class="row my-5 text-center">
                <ul>
                    <li class="lh-2">REMPLIR LE FORMULAIRE EN LIGNE</li>
                    <li class="lh-2">FOURNIR LES DOCUMENTS DEMANDÉS EN LIGNE</li>
                    <li class="lh-2">PAIEMENT DES FRAIS DU PASSEPORT EN LIGNE</li>
                    <li class="lh-2">CAPTURE D’EMPREINTES BIOMÉTRIQUES</li>
                    <li class="lh-2">DELIVRANCE DU PASSEPORT</li>
                </ul>
            </div>


{{--

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
                            <p class="lh-2">
                                <strong>Détails sur le e-Visa demandé</strong> : Type de e-Visa, Durée du séjour, Nombre d’entrées, poste d'entrée / poste de sortie, Etc.
                            </p>

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
                                        --}}
{{--<img src="{{ asset("templateFiles/niwax/images/portfolio/img-port1.jpg") }}" alt="portfolio" class="img-fluid"/> --}}{{--

                                    </a>
                                </div>
                                <div class="item-info">
                                    --}}
{{--<h4>
                                        <a href="#">
                                            <span class="badge bg-primary p-3 rounded-circle">1</span>
                                        </a>
                                    </h4>
                                    <h6 class="mb10">Votre photo d'identité</h6>--}}{{--

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
                                    --}}
{{-- <h4>
                                         <a href="#">
                                             <span class="badge bg-primary p-3 rounded-circle">2</span>
                                         </a>
                                     </h4>
                                     <h6 class="mb10">Votre passeport</h6>--}}{{--

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
                                    --}}
{{--<h4>
                                        <a href="#">
                                            <span class="badge bg-primary p-3 rounded-circle">3</span>
                                        </a>
                                    </h4>
                                    <h6 class="mb10">Votre reçu de réservation de vol</h6>--}}{{--

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
                                    --}}
{{--<h4>
                                        <a href="#">
                                            <span class="badge bg-primary p-3 rounded-circle">4</span>
                                        </a>
                                    </h4>
                                    <h6 class="mb10">Votre preuve de vaccination anti-codiv, votre Test PCR Codiv-19</h6>--}}{{--

                                    <p>
                                        Test PCR Covid-19 négatif réalisé 48h au plus tard.
                                    </p>
                                </div>
                            </div>
                        </div>

                        --}}
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
                        --}}{{--


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

--}}

        </div>
    </section>
    <!--End Portfolio-->



    <!--Start Portfolio-->
    <section class="dg-portfolio-section pb80 pt80">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-8">
                    <div class="common-heading-2">
                        <span class="text-effect-2">Comment ça marche ?</span>
                        <h2 class="mb0">Obtenir son passeport congolais</h2>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-4S col-sm-6 mt-3 mt60S wow fadeIn" data-wow-delay=".2s">
                    <div>
                        <h6 class="mb10 text-center">
                            <span class="badge bg-primary p-3 rounded-circle">1</span>
                            Remplir le formulaire en ligne
                        </h6>
                    </div>
                    <div class="isotope_item h-scl-">
                        <div class="item-image h-scl-base">
                            <a href="#">
                                <img src="{{ asset("myFiles/images/remplir-formulaire.png") }}" alt="portfolio" class="img-fluid"/>
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
                            <p>Remplir ce formulaire en répondant à toutes les questions posées (Nom et Prénom, Date /Lieu de naissance…).</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4S col-sm-6 mt-3 mt60S wow fadeIn" data-wow-delay=".5s">
                    <div>
                        <h6 class="mb10 text-center">
                            <span class="badge bg-primary p-3 rounded-circle">2</span>
                            Fournir les documents demandés en ligne
                        </h6>
                    </div>
                    <div class="isotope_item h-scl-">
                        <div class="item-image h-scl-base">
                            <a href="#"><img src="{{ asset("myFiles/images/photo-passeport-2.png") }}" alt="portfolio" class="img-fluid"/> </a>
                        </div>
                        <div class="item-info">
                            {{-- <h4>
                                 <a href="#">
                                     <span class="badge bg-primary p-3 rounded-circle">2</span>
                                 </a>
                             </h4>
                             <h6 class="mb10">Votre passeport</h6>--}}
                            <p>
                                Justificatif d'état civil , Copie de l'ancien passeport  , Carte d’identité ou Titre de séjour , photo d'identité..
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4S col-sm-6 mt-3 mt60S wow fadeIn" data-wow-delay=".8s">
                    <div class="isotope_item h-scl-">
                        <div>
                            <h6 class="mb10 text-center">
                                <span class="badge bg-primary p-3 rounded-circle">3</span>
                                Payer les frais de passeport en ligne
                            </h6>
                        </div>
                        <div class="item-image h-scl-base">
                            <a href="#"><img src="{{ asset("myFiles/images/carte-bancaire.png") }}" alt="portfolio" class="img-fluid"/> </a>
                        </div>
                        <div class="item-info">
                            {{--<h4>
                                <a href="#">
                                    <span class="badge bg-primary p-3 rounded-circle">3</span>
                                </a>
                            </h4>
                            <h6 class="mb10">Votre reçu de réservation de vol</h6>--}}
                            <p>
                                Vous pouvez payer les frais du passeport avec : cartes bancaires, e-wallet , mobile money.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4S col-sm-6 mt-3 mt60S wow fadeIn" data-wow-delay="1.1s">
                    <div>
                        <h6 class="mb10 text-center">
                            <span class="badge bg-primary p-3 rounded-circle">4</span>
                            Prise du rendez-vous en ligne
                        </h6>
                    </div>
                    <div class="isotope_item h-scl-">
                        <div class="item-image h-scl-base">
                            <a href="#"><img src="{{ asset("myFiles/images/rdv.png") }}" alt="portfolio" class="img-fluid"/> </a>
                        </div>
                        <div class="item-info">
                            {{--<h4>
                                <a href="#">
                                    <span class="badge bg-primary p-3 rounded-circle">4</span>
                                </a>
                            </h4>
                            <h6 class="mb10">Votre preuve de vaccination anti-codiv, votre Test PCR Codiv-19</h6>--}}
                            <p>
                                Prendre rendez-vous en ligne pour le Dépôt des documents originaux et la capture d’empreintes biométriques.
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4S col-sm-6 mt-3 mt60S wow fadeIn" data-wow-delay="1.4s">
                    <div>
                        <h6 class="mb10 text-center">
                            <span class="badge bg-primary p-3 rounded-circle">5</span>
                            Capture d'empreintes biométriques
                        </h6>
                    </div>
                    <div class="isotope_item h-scl-">
                        <div class="item-image h-scl-base">
                            <a href="#"><img src="{{ asset("myFiles/images/prise-empreinte.png") }}" alt="portfolio" class="img-fluid"/> </a>
                        </div>
                        <div class="item-info">
                            {{--<h4>
                                <a href="#">
                                    <span class="badge bg-primary p-3 rounded-circle">4</span>
                                </a>
                            </h4>
                            <h6 class="mb10">Votre preuve de vaccination anti-codiv, votre Test PCR Codiv-19</h6>--}}
                            <p>
                                Après la capture, toutes les données sont envoyées par internet pour l’impression du passeport.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4S col-sm-6 mt-3 mt60S wow fadeIn" data-wow-delay="1.7s">
                    <div>
                        <h6 class="mb10 text-center">
                            <span class="badge bg-primary p-3 rounded-circle">6</span>
                            Recevoir son passeport Congolais
                        </h6>
                    </div>
                    <div class="isotope_item h-scl-">
                        <div class="item-image h-scl-base">
                            <a href="#"><img src="{{ asset("myFiles/images/passeport-2.png") }}" alt="portfolio" class="img-fluid"/> </a>
                        </div>
                        <div class="item-info">
                            {{--<h4>
                                <a href="#">
                                    <span class="badge bg-primary p-3 rounded-circle">4</span>
                                </a>
                            </h4>
                            <h6 class="mb10">Votre preuve de vaccination anti-codiv, votre Test PCR Codiv-19</h6>--}}
                            <p>
                                Suivi des démarches sur l’appli VISAPASSEPORT jusqu’à la délivrance du passeport.
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


            <div class="row mt-4">
                <div class="col">
                    <h4 class="text-center">Plusieurs méthode de paiements sont disponibles.</h4>
                </div>
            </div>
            @include("myViews.frontOffice.include.paymentMethods")


            {{--<div class="row">

                <div class="col-lg-4S col-sm-6 mt60 wow fadeIn" data-wow-delay=".2s">
                    <div class="isotope_item h-scl-">
                        <div class="item-image h-scl-base">
                            <a href="#">
                                <img src="{{ asset("myFiles/images/photo-passeport.png") }}" alt="portfolio" class="img-fluid"/>
                                --}}{{--<img src="{{ asset("templateFiles/niwax/images/portfolio/img-port1.jpg") }}" alt="portfolio" class="img-fluid"/> --}}{{--
                            </a>
                        </div>
                        <div class="item-info">
                            <h4>
                                <a href="#">
                                    <span class="badge bg-primary p-3 rounded-circle">1</span>
                                </a>
                            </h4>
                            <h6 class="mb10">Remplir le formulaire en ligne</h6>
                            <p>Commencez donc à remplir le <a href="#">formulaire de demande d'e-Passeport</a> en répondant à toutes les questions posées.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4S col-sm-6 mt60 wow fadeIn" data-wow-delay=".5s">
                    <div class="isotope_item h-scl-">
                        <div class="item-image h-scl-base">
                            <a href="#"><img src="{{ asset("myFiles/images/passeport.png") }}" alt="portfolio" class="img-fluid"/> </a>
                        </div>
                        <div class="item-info">
                            <h4>
                                <a href="#">
                                    <span class="badge bg-primary p-3 rounded-circle">2</span>
                                </a>
                            </h4>
                            <h6 class="mb10">Fournir les documents demandés en ligne</h6>
                            <p>
                                Pour cela, transformez votre smartphone en scanner grace à l’<a href="#">Appli mobile VISAPASSEPORT</a> pour numériser les documents demandés.
                                <a href="#" data-bs-toggle="modal" data-bs-target="#piecesPrVisaPasseportModal">Lire plus...</a>
                                @include("myViews.frontOffice.include.piecesPrVisaPasseportModal")
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4S col-sm-6 mt60 wow fadeIn" data-wow-delay=".8s">
                    <div class="isotope_item h-scl-">
                        <div class="item-image h-scl-base">
                            <a href="#"><img src="{{ asset("myFiles/images/reservation-vol.png") }}" alt="portfolio" class="img-fluid"/> </a>
                        </div>
                        <div class="item-info">
                            <h4>
                                <a href="#">
                                    <span class="badge bg-primary p-3 rounded-circle">3</span>
                                </a>
                            </h4>
                            <h6 class="mb10">Payer les frais de passeport en ligne</h6>
                            <p>
                                Apres une vérification initiale des documents numériques envoyés, vous pouvez payer les frais du passeport avec :
                                <a href="#" data-bs-toggle="modal" data-bs-target="#methodesPaiementPrVisaPasseportModal">Lire plus...</a>
                                @include("myViews.frontOffice.include.methodesPaiementPrVisaPasseportModal")
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4S col-sm-6 mt60 wow fadeIn" data-wow-delay="1.1s">
                    <div class="isotope_item h-scl-">
                        <div class="item-image h-scl-base">
                            <a href="#"><img src="{{ asset("myFiles/images/attestation-vaccination.png") }}" alt="portfolio" class="img-fluid"/> </a>
                        </div>
                        <div class="item-info">
                            <h4>
                                <a href="#">
                                    <span class="badge bg-primary p-3 rounded-circle">4</span>
                                </a>
                            </h4>
                            <h6 class="mb10">Prise du rendez-vous en ligne</h6>
                            <p>
                                Après confirmation du paiement, prendre rendez-vous pour le Dépôt des documents originaux et la capture d’empreintes biométriques à :
                                <a href="#" data-bs-toggle="modal" data-bs-target="#lieuRdvPrVisaPasseportModal">Lire plus...</a>
                                @include("myViews.frontOffice.include.lieuRdvPrVisaPasseportModal")
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4S col-sm-6 mt60 wow fadeIn" data-wow-delay="1.4s">
                    <div class="isotope_item h-scl-">
                        <div class="item-image h-scl-base">
                            <a href="#"><img src="{{ asset("myFiles/images/attestation-vaccination.png") }}" alt="portfolio" class="img-fluid"/> </a>
                        </div>
                        <div class="item-info">
                            <h4>
                                <a href="#">
                                    <span class="badge bg-primary p-3 rounded-circle">5</span>
                                </a>
                            </h4>
                            <h6 class="mb10">Suivez les démarches sur l'appli VISAPASSEPORT</h6>
                            <p>
                                Pour suivre votre demande, veuillez renseigner votre numéro de dossier ou vos informations personnelles sur : <a href="#">l’Appli VISAPASSEPORT.</a>
                            </p>
                        </div>
                    </div>
                </div>

            </div>--}}
        </div>
    </section>
    <!--End Portfolio-->


    <!--Start Portfolio-->
    <section class="dg-portfolio-section pb80 pt80">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-10">
                    <div class="common-heading-2">
                       {{-- <span class="text-effect-2">Comment ça marche ?</span>--}}
                        <h2 class="mb0">Télécharger l'Application e-Passeport</h2>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <p class="text-center">
                        <a href="" target="_blank" class="btn-main bg-btn lnk mt30">
                            <i class="fab fa-google-play fa-2x mr-1"></i>
                            Télécharger sur Google Pay
                            <span class="circle"></span>
                        </a>
                    </p>
                </div>
                <div class="col-md-6">
                    <p class="text-center">
                        <a href="" target="_blank" class="btn-main bg-btn-secondary lnk mt30 text-black">
                            <i class="fab fa-apple fa-2x mr-1"></i>
                            Télécharger sur Apple Store
                            <span class="circle"></span>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--End Portfolio-->



    <div class="row mt-2 my-3">
        <div class="col">
            <p class="text-center">
                <a href="{{ route("frontOfficeEquipePage") }}" title="En savoir plus sur l'équipe" class="btn-main bg-btn lnk mt30">En savoir plus sur l'équipe <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
            </p>
        </div>
    </div>



@endsection
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
                                Un système de dématérialisation et d’automatisation de la procédure d’obtention du passeport.
                            </h4>
                            <p class="wow fadeIn text-bold" data-wow-delay=".6s">
                                Pour les congolais vivant en RDC et la diaspora.
                            </p>
                            <p class="mb30 wow fadeIn" data-wow-delay=".8s">
                                <em>
                                    L’e-Passeport fait partie des actions prioritaires par pilier du PNN (Projet 49 : Dématérialiser les procédures d’accès aux services publics en créant entre autre la plateforme de passeports en ligne).
                                </em>
                            </p>

                            {{--<p class="wow fadeIn" data-wow-delay=".8s">C'est simple, rapide, et pratique.</p>--}}
                            <div class="-content-secS  d-flex v-center wow fadeIn" data-wow-delay="1s">
                                <div class="video-intro-pp v-center">
                                    {{--<a class="video-link play-video" href="{{ asset("myFiles/videos/e-passeport.mp4") }}"><span class="triangle-play"></span></a>--}}
                                </div>
                                <div class="title-hero mx-auto pt-4">
                                    <p >
                                        <a class="video-link play-video" href="{{ asset("myFiles/videos/e-passeport.mp4") }}">
                                            <span class="triangle-play"></span>
                                        </a>
                                        <span class="c-primary">
                                    Regarder la vidéo
                                    </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-6 v-center"><div class="img-hro" data-tilt data-tilt-max="4" data-tilt-speed="6000"><img src="{{ asset("myFiles/images/passeport-4.png") }}" alt="title" class="img-fluid"></div></div>
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
    <section class="dg-portfolio-section pb80S pt80S pt-6" id="how-to-have-epassport">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-8">
                    <div class="common-heading-2">
                        <span class="text-effect-2">Comment ça marche ?</span>
                        <h2 class="mb0">Obtenir son e-passeport congolais</h2>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-4S col-sm-6 mt-4 mt60S wow fadeIn" data-wow-delay=".2s">
                    <div>
                        <h6 class="mb10 text-center c-primary">
                            <span class="badge bg-primary p-3 rounded-circle">1</span>
                            Remplir le formulaire en ligne
                        </h6>
                    </div>
                    <div class="isotope_item h-scl-">
                        <div class="item-image h-scl-base">
                            <a href="#">
                                <img src="{{ asset("myFiles/images/remplir-formulaire.png") }}" alt="Remplissage de formulaire e-Passeport"  title="Remplissage de formulaire e-Passeport" class="img-fluid"/>
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
                <div class="col-lg-4S col-sm-6 mt-4 mt60S wow fadeIn" data-wow-delay=".5s">
                    <div>
                        <h6 class="mb10 text-center c-primary">
                            <span class="badge bg-primary p-3 rounded-circle">2</span>
                            Fournir les documents demandés en ligne
                        </h6>
                    </div>
                    <div class="isotope_item h-scl-">
                        <div class="item-image h-scl-base">
                            <a href="#"><img src="{{ asset("myFiles/images/photo-passeport-2.png") }}" alt="Fourniture en ligne des documents du e-Passeport" title="Fourniture en ligne des documents du e-Passeport" class="img-fluid"/> </a>
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
                <div class="col-lg-4S col-sm-6 mt-4 mt60S wow fadeIn" data-wow-delay=".8s">
                    <div class="isotope_item h-scl-">
                        <div>
                            <h6 class="mb10 text-center c-primary">
                                <span class="badge bg-primary p-3 rounded-circle">3</span>
                                Payer les frais de passeport en ligne
                            </h6>
                        </div>
                        <div class="item-image h-scl-base">
                            <a href="#"><img src="{{ asset("myFiles/images/carte-bancaire-2.png") }}" alt="Paiement en ligne des frais du e-Passeport" title="Paiement en ligne des frais du e-Passeport" class="img-fluid"/> </a>
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

                <div class="col-lg-4S col-sm-6 mt-4 mt60S wow fadeIn" data-wow-delay="1.1s">
                    <div>
                        <h6 class="mb10 text-center c-primary">
                            <span class="badge bg-primary p-3 rounded-circle">4</span>
                            Prise du rendez-vous en ligne
                        </h6>
                    </div>
                    <div class="isotope_item h-scl-">
                        <div class="item-image h-scl-base">
                            <a href="#"><img src="{{ asset("myFiles/images/rdv.png") }}" alt="Prendre rendez-vous en ligne pour finaliser les procédures d'obtention du e-Passeport" title="Prendre rendez-vous en ligne pour finaliser les procédures d'obtention du e-Passeport" class="img-fluid"/> </a>
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


                <div class="col-lg-4S col-sm-6 mt-4 mt60S wow fadeIn" data-wow-delay="1.4s">
                    <div>
                        <h6 class="mb10 text-center c-primary">
                            <span class="badge bg-primary p-3 rounded-circle">5</span>
                            Capture d'empreintes biométriques
                        </h6>
                    </div>
                    <div class="isotope_item h-scl-">
                        <div class="item-image h-scl-base">
                            <a href="#"><img src="{{ asset("myFiles/images/prise-empreinte.png") }}" alt="Capture d'empreintes biométriques pour obtenir son e-Passeport" title="Capture d'empreintes biométriques pour obtenir son e-Passeport" class="img-fluid"/> </a>
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

                <div class="col-lg-4S col-sm-6 mt-4 mt60S wow fadeIn" data-wow-delay="1.7s">
                    <div>
                        <h6 class="mb10 text-center c-primary">
                            <span class="badge bg-primary p-3 rounded-circle">6</span>
                            Recevoir son passeport Congolais
                        </h6>
                    </div>
                    <div class="isotope_item h-scl-">
                        <div class="item-image h-scl-base">
                            <a href="#"><img src="{{ asset("myFiles/images/passeport-2.png") }}" alt="Réception du e-Passeport" title="Réception du e-Passeport" class="img-fluid"/> </a>
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


            <div class="row mt-6 mb-3" id="pay-epasseport">
                <div class="col">
                    <h4 class="text-center text-darkS text-bold">Plusieurs méthodes de paiements sont disponibles.</h4>
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

{{--

    <!--Start Portfolio-->
    <section class="dg-portfolio-section pb80 pt80">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-10">
                    <div class="common-heading-2">
                       --}}
{{-- <span class="text-effect-2">Comment ça marche ?</span>--}}{{--

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
--}}



    <div class="row mt-2 my-3">
        <div class="col">
            <p class="text-center">
                <a href="{{ route("frontOfficeEquipePage") }}" title="En savoir plus sur l'équipe" class="btn-main bg-btn lnk mt30">En savoir plus sur l'équipe <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
            </p>
        </div>
    </div>



@endsection
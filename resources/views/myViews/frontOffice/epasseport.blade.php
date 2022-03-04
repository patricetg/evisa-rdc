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
                                Le e-Passeport
                            </h1>
                            <h4 class="mb30 wow fadeIn" data-wow-delay=".6s">Le système de dématérialisation et d’automatisation de la procédure d’obtention du passeport par les congolais vivant en RDC et de la diaspora</h4>
                            <p class="wow fadeIn" data-wow-delay=".8s">C'est simple, rapide, et pratique.</p>
                            <div class="-content-sec  d-flex v-center wow fadeIn" data-wow-delay="1s">
                                <div class="video-intro-pp v-center"><a class="video-link play-video" href="https://www.youtube.com/watch?v=SZEflIVnhH8?autoplay=1&amp;rel=0"><span class="triangle-play"></span></a></div>
                                <div class="title-hero-oth v-center"><p>Regarder la vidéo</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 v-center"><div class="img-hro" data-tilt data-tilt-max="4" data-tilt-speed="6000"><img src="{{ asset("myFiles/images/evisa-header.png") }}" alt="title" class="img-fluid"></div></div>
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
                        <span class="text-effect-2">Comment ça marche ?</span>
                        <h2 class="mb0">Obtenir son passeport congolais</h2>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-4S col-sm-6 mt60 wow fadeIn" data-wow-delay=".2s">
                    <div class="isotope_item h-scl-">
                        <div class="item-image h-scl-base">
                            <a href="#">
                                <img src="{{ asset("myFiles/images/photo-passeport.png") }}" alt="portfolio" class="img-fluid"/>
                                {{--<img src="{{ asset("templateFiles/niwax/images/portfolio/img-port1.jpg") }}" alt="portfolio" class="img-fluid"/> --}}
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

            </div>
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



@endsection
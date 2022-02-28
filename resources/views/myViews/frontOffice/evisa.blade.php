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
                                Le e-Visa
                            </h1>
                            <h4 class="mb30 wow fadeIn" data-wow-delay=".6s">Un processus simple et fluide</h4>
                            <p class="wow fadeIn" data-wow-delay=".8s">Le e-Visa vous permet d'obtenir électroniquement, et à surtou à distance, votre visa depuis votre salon ou votre bureau, un café à la main.</p>
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
                        <span class="text-effect-2">Comment obtenir un e-Visa ?</span>
                        <h2 class="mb0">Les pièces à fournir</h2>
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
                            <h6 class="mb10">Votre photo d'identité</h6>
                            <p>Si vous portez des verres médicaux, ils ne doivent pas être teintés, ni ne doivent avoir de reflet.</p>
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
                            <h6 class="mb10">Votre passeport</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
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
                            <h6 class="mb10">Votre reçu de réservation de vol</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
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
                            <h6 class="mb10">Votre preuve de vaccination anti-codiv, votre Test PCR Codiv-19</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
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

                <div class="col-12 col-lg-4S col-sm-6S mt60 wow fadeIn" data-wow-delay=".2s">
                    <p class="text-center">
                        L'e-Visa (avec un code QR) sera envoyé à l'adresse e-mail fournie lors du processus de demande. Il doit être imprimé pour être présenté aux gardes-frontières.
                    </p>
                </div>
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
                        <h2 class="mb0">Les points d'entrée éligibles avec le e-visa</h2>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-12 col-lg-4S col-sm-6S mt60 wow fadeIn" data-wow-delay=".2s">
                    <p class="text-center">
                        L'e-Visa (avec un code QR) sera envoyé à l'adresse e-mail fournie lors du processus de demande. Il doit être imprimé pour être présenté aux gardes-frontières.
                    </p>
                </div>
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
                        <span>Voyage et contrôle aux frontières de la RD Congo</span>
                        <h2 class="mb0">Points d'entrée éligibles avec le e-visa</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt60 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="isotope_item hover-scale">
                        <div class="item-image" data-tilt data-tilt-max="2" data-tilt-speed="1000">
                            <a href="#">
                                <img src="{{ asset("myFiles/images/aeroport.png") }}" alt="image" class="img-fluid" />
                                {{--<img src="{{ asset("templateFiles/niwax/images/portfolio/image-1.jpg") }}" alt="image" class="img-fluid" /> --}}
                            </a>
                        </div>
                        <div class="item-info">
                            <h4><a href="#">Aéroports Internationaux</a></h4>
                            <p>
                                Aéroport international de Ndjili, Kinshasa (FIH). <br/>
                                Aéroport international de la Luano, Lubumbashi (FBM). <br/>
                                Aéroport international de Goma (GOM).
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt60 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="isotope_item hover-scale">
                        <div class="item-image" data-tilt data-tilt-max="2" data-tilt-speed="1000">
                            <a href="#"><img src="{{ asset("myFiles/images/frontiere.png") }}" alt="image" class="img-fluid" /> </a>
                        </div>
                        <div class="item-info">
                            <h4><a href="#">Autres points d'entrées de la RDC</a></h4>
                            <p>Ceci s'appliquera à n'importe quel point d'entrée (frontière) de la République Démocratique du Congo</p>
                        </div>
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






@endsection
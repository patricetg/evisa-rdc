@extends("myViews.frontOffice.layout.frontOfficeLayout")

@section("page")
    Accueil
@endsection

@section("firstLevelLayoutBodyContent")

{{--

    <!--Start Hero-->
    <section class="hero-section niwax-lp2" id="home">
        <div class="niwax-lp-img nlp2 niwax" data-rellax-speed="-2"><img src="{{ asset("templateFiles/niwax/images/hero/niwax-lp-2b.svg") }}" alt=""></div>
        <div class="niwax-lp-img nlp1 niwax" data-rellax-speed="4"><img src="{{ asset("templateFiles/niwax/images/hero/niwax-lp-2a.svg") }}" alt=""></div>
        <div class="niwax-lp-img nlp4 niwax" data-rellax-speed="2"><img src="{{ asset("templateFiles/niwax/images/hero/niwax-lp-2d.svg") }}" alt=""></div>
        <div class="niwax-lp-img nlp3 niwax" data-rellax-speed="3"><img src="{{ asset("templateFiles/niwax/images/hero/niwax-lp-2c.svg") }}" alt=""></div>
        <div class="text-block">
            <div class="container">
                <div class="row v-center">
                    <div class="col-lg-7">
                        <div class="header-headings">
                            <span class="text-effect-1">Un projet soutenu pour le gouvernement</span>
                            <h1 class="wow fadeIn mt20 mb30" data-wow-delay=".4s">Le E-visa et le E-passeport, plus près de vous que jamais.</h1>

                            <ul class="service-point-2 mt20 wow fadeIn text-black-50" data-wow-delay=".8s">
                                <li># Pourquoi le E-visa ?</li>
                                <li># Pourquoi le E-passeport ?</li>
                                <li># Comment ça fonctionne ?</li>
                                --}}
{{--<li># User-Friendly Interface</li>
                                <li># 400 Happy Clients</li>--}}{{--

                            </ul>
                            <!-- btn set -->
                            <div class="niwaxbtnvideo mt40 wow fadeIn" data-wow-delay="1s">
                                --}}
{{--<a href="#" class="niwax-btn2">GET STARTED<i class="fas fa-chevron-right fa-icon"></i></a>--}}{{--

                                <div class="video-btn  d-flex v-center gap10">
                                    <div class="video-intro-ppx"><a class="video-link play-video" href="https://www.youtube.com/watch?v=SZEflIVnhH8?autoplay=1&rel=0"><span class="triangle-play"></span></a></div>
                                    <div class="title-hero">
                                        <p>Regarder la vidéo</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-5 v-center">
                        <div class="niwax-lpimg-2">
                            <img src="{{ asset("myFiles/images/home-header.png") }}" width="500" alt="img">
                            --}}
{{--<img src="templateFiles/niwax/images/hero/payment.svg"  alt="img">--}}{{--

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Hero-->

--}}


    <!--Start About-->
    <section class="about-agency pad-tb mt-sm-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 v-center">
                    <div class="image-block">
                        <img src="{{ asset("myFiles/images/president-antoine.png") }}" alt="about" class="img-fluid no-shadow"/>
                        {{--<img src="{{ asset("templateFiles/niwax/images/about/about-service.png") }}" alt="about" class="img-fluid no-shadow"/>--}}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="common-headingS text-l">
                        {{--<span class="text-black h5 text-bold">Président Antoine TSHISEKEDI TSHILOMBO</span>--}}
                        <h4 class="wow fadeIn text-bold text-center mt-3" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">Président Antoine TSHISEKEDI TSHILOMBO</h4>
                        {{--<h2>Pourquoi le E-passeport et le E-visa ?</h2>--}}
                        <p class="lh-3 pt-4 c-secondaryS text-left text-dark text-boldS ws-1" style="font-size : x-large;">
                            <q>Faire du Numérique congolais un levier d’intégration, de bonne gouvernance, de croissance économique et de progrès social Félix.</q>{{--, Président Antoine TSHISEKEDI TSHILOMBO.--}}
                        </p>
{{--

                        <div class="row">
                            <div class="col">

                                <img src="{{ asset("myFiles/images/pnn.png") }}" class="mr-2" alt="">
                            </div>
                            <div class="col">

                                <a href="#" class="btn-main bg-btn lnk mt30">Learn More <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                            </div>
                        </div>
--}}

                        <div class="video-btn  d-flex v-center gap10 mx-auto pt-4">
                            <div class="video-intro-ppx mx-autoS">
                                {{--<a class="video-link play-video" href="{{ asset("myFiles/videos/president-antoine.mp4") }}">
                                    <span class="triangle-play"></span>
                                </a>--}}
                                {{--<a class="video-link play-video" href="https://www.youtube.com/watch?v=SZEflIVnhH8?autoplay=1&rel=0">
                                    <span class="triangle-play"></span>
                                </a>--}}
                            </div>
                            <div class="title-hero mx-auto pt-4">
                                <p >
                                    <a class="video-link play-video" href="{{ asset("myFiles/videos/president-antoine.mp4") }}">
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
            </div>

            <div class="row mt-3">
                <div class="col text-center">
                    <p class="lh-2 my-4 text-bold h5 text-center">
                        A l’ouverture de l’Atelier de validation du PNN (PROGRAMME NATIONAL DU NUMÉRIQUE), le Chef de l’État a inscrit le Numérique dans la déclinaison de son Programme quinquennal.
                    </p>
                    <p class="lh-2 my-2 text-bold text-center">
                        Aussi, le Chef de l’Etat a annoncé une série d’actions prioritaires consistant entre autre à Mettre en place d’ici peu le système de visa électronique d’entrée en RD Congo (E-Visa).
                    </p>

                    <p class="text-center mt-3">
                        <a href="{{ asset("myFiles/pdf/president-antoine.pdf") }}" class="btn-main bg-btn lnk mt30">
                            <i class="fa fa-file-download fa-2x mr-1"></i>
                            Télécharger
                            <i class="fa-solid fa-file-arrow-down"></i>

                            <i class="fas fa-chevron-right fa-icon"></i>

                            <span class="circle"></span>
                        </a>
                    </p>
                </div>
            </div>
            <div class="row mb-5">
                {{--<div class="col-md-4">
                    <p class="text-right">
                        <a href="{{ asset("myFiles/pdf/president-antoine.pdf") }}" class="btn-main bg-btn lnk mt30">
                            <i class="fa fa-file-download fa-2x mr-1"></i>
                            Télécharger
                            <i class="fa-solid fa-file-arrow-down"></i>

                            <i class="fas fa-chevron-right fa-icon"></i>

                            <span class="circle"></span>
                        </a>
                    </p>
                </div>--}}
                <div class="col-md-6S col">
                    <p class="text-center">
                        <img src="{{ asset("myFiles/images/pnn.png") }}" class="img-thumbnail" alt="">
                    </p>
                </div>
                {{--
                <div class="col text-center">
                    <p class="text-center d-inline-block">

                        <a href="#" class="btn-main bg-btn lnk mt30">
                            <i class="fa fa-file-download fa-2x mr-1"></i>
                            Télécharger
                            <i class="fa-solid fa-file-arrow-down"></i>

                            <i class="fas fa-chevron-right fa-icon"></i>

                            <span class="circle"></span>
                        </a>
                    </p>
                    <p class="d-inline-block mr-2">
                        <img src="{{ asset("myFiles/images/pnn.png") }}"  alt="">
                    </p>
                </div>
                --}}
            </div>
        </div>
    </section>
    <!--End About-->





    <!--Start Service-->
    <section class="dg-service2 bg-gradient6 pad-tb" id="services">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="common-heading text-center">
                        {{--<span class="text-effect-2">Our Best Services</span>--}}
                        <h2 class="mb30 c-whiteS c-primary text-bold">Le projet VISA-PASSEPORT</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
               {{-- <div class="col-lg-4 col-sm-12 mt30S wow fadeInLeft niwax" data-wow-delay=".2s"  data-rellax-speed=".5" data-rellax-percentage=".5">
                    <img src="{{ asset("myFiles/images/visa-passeport.png") }}" alt="icon">
                </div>--}}
                <div class="col mt-lg-4 text-center">
                    <p class="lh-2 h4 c-whiteS text-bold text-black text-center">
                        Le projet VISAPASSEPORT est la combinaison de "e-VISA"  et "e-Passeport". Son but est de :
                    </p>
                    <ul class="text-black h5 text-justify mt-4">
                        <li class="my-2 lh-2">Numériser et uniformiser l’octroi des visas d’entrée en RDC émanant de la DGM et les missions diplomatiques (e-VISA)</li>
                        <li class="my-2 lh-2">
                            Mettre en place le système de dématérialisation et d’automatisation de la procédure d’obtention du passeport par les congolais vivant en RDC et de la diaspora (e-Passeport)
                        </li>
                    </ul>
                </div>
            </div>
{{--
            <div class="row justify-content-center">

                <div class="col-lg-3 col-sm-6 mt30 wow fadeIn niwax" data-wow-delay=".2s"  data-rellax-speed=".5" data-rellax-percentage=".5">
                    <div class="s-block text-l hoverwithbg up-hor animation">
                        <div class="nx-circl-icon nxlp-a"> <img src="templateFiles/niwax/images/icons/integration.png" alt="icon"> </div>
                        <h4><a href="#">Easy Integration</a></h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a href="#">More Details</a>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 mt30 wow fadeIn niwax" data-wow-delay=".2s" data-rellax-speed="-.5" data-rellax-percentage=".5">
                    <div class="s-block text-l hoverwithbg up-hor animation">
                        <div class="nx-circl-icon nxlp-b"> <img src="templateFiles/niwax/images/icons/integration.png" alt="icon"> </div>
                        <h4><a href="#">Rate of Transaction</a></h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a href="#">More Details</a>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 mt30 wow fadeIn niwax" data-wow-delay=".2s" data-rellax-speed=".5" data-rellax-percentage=".5">
                    <div class="s-block text-l hoverwithbg up-hor animation">
                        <div class="nx-circl-icon nxlp-c"> <img src="templateFiles/niwax/images/icons/integration.png" alt="icon"> </div>
                        <h4><a href="#">Payment Process</a></h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a href="#">More Details</a>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 mt30 wow fadeIn niwax" data-wow-delay=".2s" data-rellax-speed="-.5" data-rellax-percentage=".5">
                    <div class="s-block text-l hoverwithbg up-hor animation">
                        <div class="nx-circl-icon nxlp-d"> <img src="templateFiles/niwax/images/icons/integration.png" alt="icon"> </div>
                        <h4><a href="#">Text Invoice</a></h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a href="#">More Details</a>
                    </div>
                </div>



            </div>

            <div class="-cta-btn mt70">
                <div class="free-cta-title v-center wow zoomInDown" data-wow-delay=".9s">
                    <p>Create Your Own<span> Payment Getway </span> Service</p>
                    <a href="#" class="niwax-btn2">Get Started<i class="fas fa-chevron-right fa-icon"></i></a>
                </div>
            </div>

            --}}
        </div>
    </section>
    <!--End Service-->


    <!-- who we are about-->
    <section class="why-choos-lg pad-tb deep-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="common-heading text-l">
                        {{--<span>Who We Are</span>--}}
                        <h2 class="mb20">Pourquoi mettre en place le e-Passeport ?</h2>
                        <p class="lh-3">Retracer la destination des recettes des passeports délivrés par le ministère des Affaires étrangères et les ambassades de la RDC dans le monde. L’objectif est de créer un circuit sécurisé et informatisé dans ces représentations diplomatiques, pour assurer une liaison avec Kinshasa et prévenir le détournement de fonds.</p>

                    </div>
                    <div >
                        <p class="text-center">
                            <a href="{{ route("frontOfficeEPasseportPage") }}" title="En savoir plus sur le e-Passeport" class="btn-main bg-btn lnk mt30">Lire plus <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset("myFiles/images/passeport-3.png") }}" class="img-fluid img-media" alt="">
                    {{--<div class="img-design h-scl-">
                        <div class="imgac "> <img src="templateFiles/niwax/images/hero/creative-ag2a.jpg" alt="creative agnecy html template" class="ag-dg1 img-fluid h-scl-base"></div>
                        <div class="imgac h-scl-base"><img src="templateFiles/niwax/images/hero/creative-ag2b.jpg" alt="creative agnecy html template" class="ag-dg2 img-fluid "></div>
                    </div>--}}
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12 mt-2 mb-3">
                    <p class="text-center text-boldS h4 c-primary">
                        <a href="https://urlz.fr/hqSD" target="_blank">IGF: Jules Alingete à Paris et à Bruxelles pour contrôler les ambassades de la RDC</a>
                    </p>
                </div>
                <div class="col-lg-6">
                    <a href="#"><img src="{{ asset("myFiles/images/visite-ambassades.png") }}" alt="image" title="IGF: Jules Alingete à Paris et à Bruxelles pour contrôler les ambassades de la RDC" class="img-fluid" /> </a>
                </div>
                <div class="col-lg-6">
                    <p> Cela fait suite à l’écho des malversations financières autour des activités des ambassades de la RDC dans le monde. Plusieurs diplomates congolais accrédités à l’étranger s’illustreraient à des combines dans la vente des passeports (ex.: Augmentation du prix de 100$ à 200$, parfois 300$).</p>
                    <p>
                        Le prix du passeport est pourtant fixé à 99 USD par un arrêté interministériel signé le 10 novembre 2020 par la ministre des Affaires étrangères, MARIE TUMBA NZENZA, et le ministre des Finances, SELE YALAGHULI.
                    </p>
                </div>
            </div>

        </div>
    </section>
    <!-- who we are about-->



    <!-- who we are about-->
    <section class="why-choos-lg bg-gradient1 pad-tb deep-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 pr-4">
                    <div class="common-heading text-l">
                        {{--<span>Who We Are</span>--}}
                        <h2 class="mb20 wow fadeInUp c-white" data-wow-delay="0.2s">Pourquoi améliorer le e-Visa actuel ?</h2>
                        <p class="wow fadeInUp text-black lh-2"  data-wow-delay="0.4s">
                            La demande de visa peut être compliquée et chronophage pour les voyageurs souvent pressés. Pour demander un visa dans les ambassades, vous passez souvent de fâcheux moments dans les longues files d’attente. Parfois même, on vous demande de revenir un autre jour.
                        </p>
                        <p class=" wow fadeInUp text-black lh-2" data-wow-delay="0.6s">
                            Afin d’alléger les démarches, de nombreux pays ont adopté le système de visa électronique. Il s’agit de visas à demander sur Internet, , nul besoin de déplacement. Le paiement se réalise également en ligne. Le délai de traitement est de 72 heures dès la réception de la demande. Le demandeur reçoit son visa par courrier électronique.
                        </p>

                    </div>
                    <div class="mb-3" >
                        <p class="text-center">
                            <a href="{{ route("frontOfficeEVisaPage") }}" title="En savoir plus sur le e-Visa" class="btn-main bg-btn2 lnk mt30">Lire plus <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-5 text-right">
                    <img src="{{ asset("myFiles/images/e-visa-example.png") }}" class="img-fluid img-media" alt="">
                    {{--<div class="img-design h-scl-">
                        <div class="imgac "> <img src="templateFiles/niwax/images/hero/creative-ag2a.jpg" alt="creative agnecy html template" class="ag-dg1 img-fluid h-scl-base"></div>
                        <div class="imgac h-scl-base"><img src="templateFiles/niwax/images/hero/creative-ag2b.jpg" alt="creative agnecy html template" class="ag-dg2 img-fluid "></div>
                    </div>--}}
                </div>
                {{--<div class="col-lg-6">
                    <div class="img-design h-scl- wow fadeInUp" data-wow-delay="0.1s">
                        <div class="imgac "> <img src="templateFiles/niwax/images/hero/creative-ag2a.jpg" alt="creative agnecy html template" class="ag-dg1 img-fluid h-scl-base"></div>
                        <div class="imgac h-scl-base"><img src="templateFiles/niwax/images/hero/creative-ag2b.jpg" alt="creative agnecy html template" class="ag-dg2 img-fluid "></div>
                    </div>
                </div>--}}
            </div>

        </div>
    </section>
    <!-- who we are about-->


    <!--Start Portfolio-->
    <section class="dg-portfolio-section pb80 pt80">
        <div class="container">
            {{--
            <div class="row justify-content-center ">
                <div class="col-lg-8">
                    <div class="common-heading-2">
                        <span class="text-effect-2">Quels sont les objectifs visés?</span>
                        <h2 class="mb0">Les objectifs sont clairs et précis</h2>
                    </div>
                </div>
            </div>
            --}}
            <div class="row">

                <div class="col-lg-4S col-12 mt60S wow fadeIn" data-wow-delay=".2s">
                    <h4>Uniformiser l’octroi des visas d’entrée en RDC émanant de la DGM et les missions diplomatiques</h4>
                    <p>La circulaire N°003/CAB/ME/MINBUDGET 2016 du 18 juin 2016 recommande l’uniformisation des visas dans toutes les missions diplomatiques. Mais entre la DGM et les missions diplomatiques, c’est le régime du chacun pour soi en matière de délivrance des visas.</p>
                    <p class="text-center mt-2">
                        La DMG a déjà mise en place le site web e-visa en ligne : <a href="https://www.evisa.gouv.cd" target="_blank" class="text-black">www.evisa.gouv.cd</a>.
                    </p>


                </div>
                <div class="col-lg-4S col-12 mt60 wow fadeIn" data-wow-delay=".5s">
                    <h4>Rendre le processus plus accessible et plus efficace</h4>
                    <p>Avec VISAPASSEPORT, le e-VISA Congolais devient :</p>
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 gy-1 gy-md-3 gx-3 gx-md-4">
                        <div class="col">
                            <div class="card card-body card-hover h-100 border-0">
                                {{--<img class="d-block mb-3" src="templateFiles/niwax/img/bootstrap.png" width="56" alt="Bootstrap logo">--}}
                                <img class="d-blockS mb-3 img-fluid" src="{{ asset("myFiles/images/e-visa-responsive.png") }}" alt="EVisa et Epasseport multi-plateforme" title="EVisa et Epasseport multi-plateforme">
                                <h3 class="h6 c-highligh text-bold">Multi-plateforme</h3>
                                <ul class="fs-sm mb-0 list-unstyled text-dark">
                                    <li class="lh-2">PC</li>
                                    <li class="lh-2">Tablette</li>
                                    <li class="lh-2">Smartphone, Smartwatch</li>
                                </ul>
                                {{--<p class="fs-sm mb-0">
                                    PC, Tablette, Smartphone, Smartwatch.
                                </p>--}}
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-body card-hover h-100 border-0">
                                {{--<img class="d-block mb-3" src="templateFiles/niwax/img/html-code.png" width="56" alt="code logo">--}}
                                <img class="d-block mb-3 img-fluid rounded" src="{{ asset("myFiles/images/multi-langues-2.png") }}" alt="e-visa et e-passeport multilingue" title="e-visa et e-passeport multilingue">
                                <h3 class="h6 c-highligh text-bold">Multilingue</h3>
                                <p class="fs-sm mb-0">
                                    Toutes les grandes langues du monde sont représentée, pour améliorer l’accessibilité par les étrangers.
                                </p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-body card-hover h-100 border-0">
                                {{--<img class="d-block mb-3" src="templateFiles/niwax/img/components.png" width="56" alt="Components icon">--}}
                                <img class="d-block mb-3 img-fluid" src="{{ asset("myFiles/images/carte-bancaire.png") }}" alt="Paiement multi-canal pour e-visa et e-passeport" title="Paiement multi-canal pour e-visa et e-passeport">
                                <h3 class="h6 c-highligh text-bold">Paiement multi-canal</h3>
                                <p class="fs-sm mb-0 text-left"> Cartes bancaires (débit/crédit), portefeuilles virtuelles (PayPal,…) , mobile money (M-Pesa, Orange money…).</p>
                            </div>
                        </div>


                        {{--
                        <div class="col">
                            <div class="card card-body card-hover h-100 border-0">
                                <img class="d-block mb-3" src="templateFiles/niwax/img/mobile.png" width="56" alt="Mobile icon">
                                <h3 class="h6">Mobile Friendly Interface</h3>
                                <p class="fs-sm mb-0">It's unsurprising that over 60% of internet users now utilize their mobile devices to access the internet. Niwax is completely responsive and designed to work on all small and big screens.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-body card-hover h-100 border-0">
                                <img class="d-block mb-3" src="templateFiles/niwax/img/touch-screen.png" width="56" alt="Touch icon">
                                <h3 class="h6">Touch-enabled sliders</h3>
                                <p class="fs-sm mb-0">In the age of touch displays, it's critical to provide a positive user experience on mobile devices, especially when it comes to components like sliders.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-body card-hover h-100 border-0">
                                <img class="d-block mb-3" src="templateFiles/niwax/img/google-fonts.png" width="56" alt="Google Fonts logo">
                                <h3 class="h6">Google fonts</h3>
                                <p class="fs-sm mb-0">Niwax uses Google font (Poppins and Open Sans) which is free, fast to load and of very high quality. Currently Google fonts library includes 1000+ font families to choose from.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-body card-hover h-100 border-0">
                                <img class="d-block mb-3" src="templateFiles/niwax/img/vector.png" width="56" alt="Vector icon">
                                <h3 class="h6">Vector based HD ready icons</h3>
                                <p class="fs-sm mb-0">Niwax comes with a font-based icon set that ensures infographics and interface icons look great on every device, regardless of screen resolution or pixel density.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-body card-hover h-100 border-0">
                                <img class="d-block mb-3" src="templateFiles/niwax/img/html.png" width="56" alt="HTML5 logo">
                                <h3 class="h6">W3C valid HTML code</h3>
                                <p class="fs-sm mb-0">To ensure 100% valid code, all HTML files are validated by the W3C validator. Invalid HTML, as you may know, inhibits SEO and Google Ranking. Niwax provides a valid code to increase ranking of your website.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-body card-hover h-100 border-0">
                                <img class="d-block mb-3" src="templateFiles/niwax/img/docs.png" width="56" alt="Docs icon">
                                <h3 class="h6">Detailed documentation</h3>
                                <p class="fs-sm mb-0">Offline documentation is included in the download package, as well as links to online documentation. It covers all you need to know about getting started, customising templates, and using the various components.</p>
                            </div>
                        </div>
                        --}}

                    </div>
                </div>


            </div>
        </div>
    </section>
    <!--End Portfolio-->






    <!-- company awards icons -->
    <div class="niwax-company-awards-cover">
        <div class="container">
            <div class="row v-center">

                <h3 class="text-center mb-5 c-primary">Méthodes de paiement disponibles pour VISApasseport</h3>

                @include("myViews.frontOffice.include.paymentMethods")

{{--
                <div class="companytime nxlp-b col-lg-3">
                    <p>15 <span>Modes de paiement</span></p>
                </div>

                <div class="companyawards col-lg-9">
                    <div class="niwax-logo-awards niwax-logo-slider owl-carousel">


                        <div class="industry-workfors">
                            <img src="{{ asset("myFiles/images/payment-methods/visa.png") }}" alt="img">
                            --}}{{--<img src="templateFiles/niwax/images/icons/house.svg" alt="img">--}}{{--
                            <h6>Visa</h6>
                        </div>

                        <div class="industry-workfors">
                            <img src="{{ asset("myFiles/images/payment-methods/master-card.png") }}" alt="img">
                           --}}{{-- <img src="templateFiles/niwax/images/icons/travel-case.svg" alt="img">--}}{{--
                            <h6>Master Card</h6>
                        </div>

                        <div class="industry-workfors">
                            --}}{{--<img src="templateFiles/niwax/images/icons/video-tutorials.svg" alt="img">--}}{{--
                            <img src="{{ asset("myFiles/images/payment-methods/american-express.png") }}" alt="img">
                            <h6>American Express</h6>
                        </div>

                        <div class="industry-workfors">
                            <img src="templateFiles/niwax/images/icons/taxi.svg" alt="img">
                            <h6>Mipesa</h6>
                        </div>

                        <div class="industry-workfors">
                            <img src="templateFiles/niwax/images/icons/event.svg" alt="img">
                            <h6>Tigo Pesa</h6>
                        </div>

                        <div class="industry-workfors">
                            <img src="templateFiles/niwax/images/icons/smartphone.svg" alt="img">
                            <h6>Vodacom</h6>
                        </div>

                        <div class="industry-workfors">
                            <img src="templateFiles/niwax/images/icons/joystick.svg" alt="img">
                            <h6>Mobile Money</h6>
                        </div>

                        <div class="industry-workfors">
                            <img src="templateFiles/niwax/images/icons/healthcare.svg" alt="img">
                            <h6>Arteil Money</h6>
                        </div>

                        <div class="industry-workfors">
                            <img src="templateFiles/niwax/images/icons/money-growth.svg" alt="img">
                            <h6>Finance</h6>
                        </div>

                        <div class="industry-workfors">
                            <img src="templateFiles/niwax/images/icons/baker.svg" alt="img">
                            <h6>Restaurant</h6>
                        </div>

                        <div class="industry-workfors">
                            <img src="templateFiles/niwax/images/icons/mobile-app.svg" alt="img">
                            <h6>On-Demand</h6>
                        </div>

                        <div class="industry-workfors">
                            <img src="templateFiles/niwax/images/icons/groceries.svg" alt="img">
                            <h6>Grocery</h6>
                        </div>

                    </div>
                </div>
                --}}
            </div>
        </div>
    </div>
    <!-- company awards icons -->


    <section class="pad-tb">

        <div class="container">
            <div class="row v-center">
                <div class="col-md-6 text-center">
                    <a href="{{ route("frontOfficeEVisaPage") }}" class="btn-main bg-btn lnk mt30">En savoir plus sur le e-Visa <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                </div>
                <div class="col-md-6 text-center">
                    <a href="{{ route("frontOfficeEPasseportPage") }}" class="btn-main bg-btn lnk mt30">En savoir plus sur le  e-Passeport <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                </div>
            </div>
        </div>
    </section>




{{--

    <!--Start service -->
    <section class="nx-lp-service dark-bg4 bg-gradient3 pad-tb" id="work">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="niwaxwideserviceslider owl-carousel center-dots">

                        <div class="sliderset-nx">
                            <div class="service-we-deliverd">
                                <h2>Your Website Your Checkout Page</h2>
                                <p class="mt20">We have been providing Digital Marketing service from last 8 years by direct collaboration with our clients. As a Digital Marketing company we are providing all services like SEO Audit, Pay Per Click, Social Media Management, Organic SEO.</p>
                                <a href="#" class="niwax-btn2 mt40">More Details</a>
                            </div>
                            <div class="imagesofservice">
                                <img src="templateFiles/niwax/images/service/payment-service-1.svg" alt="niwax landing page 2" class="img-fluid">
                            </div>
                        </div>

                        <div class="sliderset-nx">
                            <div class="service-we-deliverd">
                                <h2>Boost your sales with our localized payment solution</h2>
                                <p class="mt20">We have been providing Digital Marketing service from last 8 years by direct collaboration with our clients. As a Digital Marketing company we are providing all services like SEO Audit, Pay Per Click, Social Media Management, Organic SEO.</p>
                                <a href="#" class="niwax-btn2 mt40">More Details</a>
                            </div>
                            <div class="imagesofservice">
                                <img src="templateFiles/niwax/images/service/payment-service-2.svg" alt="niwax landing page 2" class="img-fluid">
                            </div>
                        </div>

                        <div class="sliderset-nx">
                            <div class="service-we-deliverd">
                                <h2>Understanding your score helps you take the right next steps</h2>
                                <p class="mt20">We have been providing Digital Marketing service from last 8 years by direct collaboration with our clients. As a Digital Marketing company we are providing all services like SEO Audit, Pay Per Click, Social Media Management, Organic SEO.</p>
                                <a href="#" class="niwax-btn2 mt40">More Details</a>
                            </div>
                            <div class="imagesofservice">
                                <img src="templateFiles/niwax/images/service/payment-service-3.svg" alt="niwax landing page 2" class="img-fluid">
                            </div>
                        </div>

                        <div class="sliderset-nx">
                            <div class="service-we-deliverd">
                                <h2>A score of 750+ boosts your chances of getting a loan</h2>
                                <p class="mt20">We have been providing Digital Marketing service from last 8 years by direct collaboration with our clients. As a Digital Marketing company we are providing all services like SEO Audit, Pay Per Click, Social Media Management, Organic SEO.</p>
                                <a href="#" class="niwax-btn2 mt40">More Details</a>
                            </div>
                            <div class="imagesofservice">
                                <img src="templateFiles/niwax/images/service/payment-service-4.svg" alt="niwax landing page 2" class="img-fluid">
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End service-->

    <!--Start why choose niwax company-->
    <section class="why-niwax-section pad-tb">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-12">
                    <div class="whychooseniwax v-center">

                        <div class="niwaxawardrow1">
                            <div class="awardbgwithtext">
                                <img src="templateFiles/niwax/images/icons/award-bg.png" alt="">
                                <p>20+<span>YEARS Experience</span></p>
                            </div>
                            <div class="awardbgwithtext">
                                <img src="templateFiles/niwax/images/icons/award-bg.png" alt="">
                                <p>20+<span>YEARS Experience</span></p>
                            </div>
                            <div class="awardbgwithtext">
                                <img src="templateFiles/niwax/images/icons/award-bg.png" alt="">
                                <p>20+<span>YEARS Experience</span></p>
                            </div>
                        </div>

                        <div class="niwaxawardrow2">
                            <h2>Why Should You <span class="text-radius text-light text-animation bg-b">Choose Us!</span></h2>
                            <h4 class="mt10 text-second">Find your reasons to choose us</h4>
                            <p class="mt20">We have been providing Digital Marketing service from last 8 years by direct collaboration with our clients. As a Digital Marketing company we are providing all services like SEO Audit, Pay Per Click, Social Media Management, Organic SEO.</p>
                            <p class="mt10">We work with organizations of all sizes, from startups to Fortune companies. We believe in forging long-lasting partnerships with all of our clients and we remain available to our clients whenever they need us. Contact us for more information.</p>

                            <div class="pairofbtn mt40">
                                <a href="#" class="niwax-btn3">Get In Touch With Us</a>
                                <a href="#" class="btnwithiconside d-flex gap10 v-center">
                                    <img src="templateFiles/niwax/images/icons/whatsapp.svg" alt="whatsapp">
                                    <div> <span>Or - Just Give Us A Call:</span>+91- 1234567890 </div>
                                </a>
                            </div>
                        </div>

                        <div class="niwaxawardrow1">
                            <div class="awardbgwithtext">
                                <img src="templateFiles/niwax/images/icons/award-bg.png" alt="">
                                <p>20+<span>YEARS Experience</span></p>
                            </div>
                            <div class="awardbgwithtext">
                                <img src="templateFiles/niwax/images/icons/award-bg.png" alt="">
                                <p>20+<span>YEARS Experience</span></p>
                            </div>
                            <div class="awardbgwithtext">
                                <img src="templateFiles/niwax/images/icons/award-bg.png" alt="">
                                <p>20+<span>YEARS Experience</span></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end why choose us -->
--}}


    {{--
    <!--Start reveiws-->
    <section class="bg-gradient1 pad-tb dark-bg1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="common-heading ptag">
                        <span>Reviews</span>
                        <h2>Client Testimonials</h2>
                        <p class="mb30">Check our customers success stories.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mt30">
                    <div class="niwax-review-slider owl-carousel center-dots">
                        <div class="reviews-card pr-shadow">
                            <div class="row v-center">
                                <div class="col"> <span class="revbx-lr"><i class="fas fa-quote-left"></i></span> </div>
                                <div class="col"> <span class="revbx-rl"><img src="templateFiles/niwax/images/client/upwork-logo.png" alt="review service logo"></span> </div>
                            </div>
                            <div class="review-text">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                            <div class="-client-details-">
                                <div class="-reviewr">
                                    <img src="templateFiles/niwax/images/client/reviewer-a.jpg" alt="Good Review" class="img-fluid">
                                </div>
                                <div class="reviewer-text">
                                    <h4>Mario Speedwagon</h4>
                                    <p>Business Owner, <small>Jaipur</small></p>
                                    <div class="star-rate">
                                        <ul>
                                            <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                            <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                            <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                            <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                            <li> <a href="javascript:void(0)" ><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="reviews-card pr-shadow">
                            <div class="row v-center">
                                <div class="col"> <span class="revbx-lr"><i class="fas fa-quote-left"></i></span> </div>
                                <div class="col"> <span class="revbx-rl"><img src="templateFiles/niwax/images/client/upwork-logo.png" alt="review service logo"></span> </div>
                            </div>
                            <div class="review-text">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                            <div class="-client-details-">
                                <div class="-reviewr">
                                    <img src="templateFiles/niwax/images/client/reviewer-a.jpg" alt="Good Review" class="img-fluid">
                                </div>
                                <div class="reviewer-text">
                                    <h4>Mario Speedwagon</h4>
                                    <p>Business Owner, <small>Jaipur</small></p>
                                    <div class="star-rate">
                                        <ul>
                                            <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                            <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                            <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                            <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                            <li> <a href="javascript:void(0)" ><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="reviews-card pr-shadow">
                            <div class="row v-center">
                                <div class="col"> <span class="revbx-lr"><i class="fas fa-quote-left"></i></span> </div>
                                <div class="col"> <span class="revbx-rl"><img src="templateFiles/niwax/images/client/upwork-logo.png" alt="review service logo"></span> </div>
                            </div>
                            <div class="review-text">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                            <div class="-client-details-">
                                <div class="-reviewr">
                                    <img src="templateFiles/niwax/images/client/reviewer-a.jpg" alt="Good Review" class="img-fluid">
                                </div>
                                <div class="reviewer-text">
                                    <h4>Mario Speedwagon</h4>
                                    <p>Business Owner, <small>Jaipur</small></p>
                                    <div class="star-rate">
                                        <ul>
                                            <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                            <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                            <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                            <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                            <li> <a href="javascript:void(0)" ><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="reviews-card pr-shadow">
                            <div class="row v-center">
                                <div class="col"> <span class="revbx-lr"><i class="fas fa-quote-left"></i></span> </div>
                                <div class="col"> <span class="revbx-rl"><img src="templateFiles/niwax/images/client/upwork-logo.png" alt="review service logo"></span> </div>
                            </div>
                            <div class="review-text">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                            <div class="-client-details-">
                                <div class="-reviewr">
                                    <img src="templateFiles/niwax/images/client/reviewer-a.jpg" alt="Good Review" class="img-fluid">
                                </div>
                                <div class="reviewer-text">
                                    <h4>Mario Speedwagon</h4>
                                    <p>Business Owner, <small>Jaipur</small></p>
                                    <div class="star-rate">
                                        <ul>
                                            <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                            <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                            <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                            <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                            <li> <a href="javascript:void(0)" ><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End reviews-->
    <!--Start pricing-->
    <section class="pricing-block pad-tb" id="price">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="common-heading ptag">
                        <span>Our Pricing</span>
                        <h2>Packages that are within your financial constraints</h2>
                        <p class="mb30">Choose from one of our three packages, all of which are priced competitively. We offer comprehensive yet cost-effective options. Everyone will find enticing features in our Basic, Professional, and Premium packages.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">

                <div class="col-lg-4 col-md-6 nxpb-1">
                    <div class="niwaxpricingbox shadow">
                        <div class="pricingheader" data-background="images/icons/plan-1.svg">
                            <h2>Basic</h2>
                            <p>Great For Small Business</p>
                        </div>
                        <div class="pricingrate">
                            <div class="pricevalue">
                                <h2><sup>$</sup> 50.00</h2>
                            </div>
                            <div class="priceoffer">
                                <h2>10% <span>$60.00</span></h2>
                            </div>
                        </div>
                        <div class="pricingoffers">
                            <ul class="list-ul ul-check">
                                <li>Customized Theme Based Design </li>
                                <li>Home Page Slider</li>
                                <li>Up-to 50 Products</li>
                                <li>Content	Management System</li>
                                <li>Shopping Cart Integration</li>
                                <li>Payment	Module Integration</li>
                                <li>Perfect Product Search</li>
                                <li>Social	Media Integration</li>
                                <li>Responsive Device Design</li>
                                <li>Dedicated Designer &amp; Developer</li>
                                <li>Unlimited Revisions</li>
                                <li>100% Unique Design</li>
                                <li>100% Satisfaction</li>
                                <li>100% Unique Design</li>
                                <li>100% Money Back</li>
                            </ul>
                        </div>
                        <div class="priceodernow">
                            <div class="priceoderbtn"><a href="#" class="niwax-btn3">Order Now</a></div>
                            <div class="priceaskwithus">
                                <a href="#" class="livechatbtn d-flex gap10 v-center">
                                    <i class="fas fa-comment"></i>
                                    <div><span>Click here to</span> Live Chat </div>
                                </a>
                            </div>
                        </div>
                        <div class="pricingfooter mt30">
                            <div class="pfdiv1"><a href="#">Call Us: +91 123456790</a></div>
                            <div class="pfdiv2"><a href="#">Need Support</a></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 nxpb-2">
                    <div class="niwaxpricingbox shadow reco">
                        <div class="pricingheader" data-background="images/icons/plan-2.svg">
                            <h2>Professional</h2>
                            <p>Great For Small Business</p>
                        </div>
                        <div class="pricingrate">
                            <div class="pricevalue">
                                <h2><sup>$</sup> 150.00</h2>
                            </div>
                            <div class="priceoffer">
                                <h2>20% <span>$170.00</span></h2>
                            </div>
                        </div>
                        <div class="pricingoffers">
                            <ul class="list-ul ul-check">
                                <li>Customized Theme Based Design </li>
                                <li>Home Page Slider</li>
                                <li>Up-to 50 Products</li>
                                <li>Content	Management System</li>
                                <li>Shopping Cart Integration</li>
                                <li>Payment	Module Integration</li>
                                <li>Perfect Product Search</li>
                                <li>Social	Media Integration</li>
                                <li>Responsive Device Design</li>
                                <li>Dedicated Designer &amp; Developer</li>
                                <li>Unlimited Revisions</li>
                                <li>100% Unique Design</li>
                                <li>100% Satisfaction</li>
                                <li>100% Unique Design</li>
                                <li>100% Money Back</li>
                            </ul>
                        </div>
                        <div class="priceodernow">
                            <div class="priceoderbtn"><a href="#" class="niwax-btn2">Order Now</a></div>
                            <div class="priceaskwithus">
                                <a href="#" class="livechatbtn d-flex gap10 v-center">
                                    <i class="fas fa-comment"></i>
                                    <div><span>Click here to</span> Live Chat </div>
                                </a>
                            </div>
                        </div>
                        <div class="pricingfooter mt30">
                            <div class="pfdiv1"><a href="#">Call Us: +91 123456790</a></div>
                            <div class="pfdiv2"><a href="#">Need Support</a></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 nxpb-3">
                    <div class="niwaxpricingbox shadow">
                        <div class="pricingheader" data-background="images/icons/plan-3.svg">
                            <h2>Premium </h2>
                            <p>Great For Small Business</p>
                        </div>
                        <div class="pricingrate">
                            <div class="pricevalue">
                                <h2><sup>$</sup> 150.00</h2>
                            </div>
                            <div class="priceoffer">
                                <h2>40% <span>$280.00</span></h2>
                            </div>
                        </div>
                        <div class="pricingoffers">
                            <ul class="list-ul ul-check">
                                <li>Customized Theme Based Design </li>
                                <li>Home Page Slider</li>
                                <li>Up-to 50 Products</li>
                                <li>Content	Management System</li>
                                <li>Shopping Cart Integration</li>
                                <li>Payment	Module Integration</li>
                                <li>Perfect Product Search</li>
                                <li>Social	Media Integration</li>
                                <li>Responsive Device Design</li>
                                <li>Dedicated Designer &amp; Developer</li>
                                <li>Unlimited Revisions</li>
                                <li>100% Unique Design</li>
                                <li>100% Satisfaction</li>
                                <li>100% Unique Design</li>
                                <li>100% Money Back</li>
                            </ul>
                        </div>
                        <div class="priceodernow">
                            <div class="priceoderbtn"><a href="#" class="niwax-btn3">Order Now</a></div>
                            <div class="priceaskwithus">
                                <a href="#" class="livechatbtn d-flex gap10 v-center">
                                    <i class="fas fa-comment"></i>
                                    <div><span>Click here to</span> Live Chat </div>
                                </a>
                            </div>
                        </div>
                        <div class="pricingfooter mt30">
                            <div class="pfdiv1"><a href="#">Call Us: +91 123456790</a></div>
                            <div class="pfdiv2"><a href="#">Need Support</a></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End pricing-->
    --}}

    {{--
    <!--Start Why Choose-->
    <section class="service-block pad-tb bg-gradient3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="common-heading ptag">
                        <span>We Deliver Our Best</span>
                        <h2>Why Choose Niwax</h2>
                        <p class="mb30">Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6 mt30  wow fadeIn" data-wow-delay=".2s">
                    <div class="s-block wide-sblock">
                        <div class="s-card-icon"><img src="templateFiles/niwax/images/icons/teama.svg" alt="service" class="img-fluid"></div>
                        <div class="s-block-content">
                            <h4>Reliable Service. In House Team</h4>
                            <p>In vel hendrerit nisi. Vestibulum eget risus velit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt30 wow fadeIn" data-wow-delay=".5s">
                    <div class="s-block wide-sblock">
                        <div class="s-card-icon"><img src="templateFiles/niwax/images/icons/link.svg" alt="service" class="img-fluid"></div>
                        <div class="s-block-content">
                            <h4>Trusted by People Like You</h4>
                            <p>In vel hendrerit nisi. Vestibulum eget risus velit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt30 wow fadeIn" data-wow-delay=".8s">
                    <div class="s-block wide-sblock">
                        <div class="s-card-icon"><img src="templateFiles/niwax/images/icons/tech.svg" alt="service" class="img-fluid"></div>
                        <div class="s-block-content">
                            <h4>Complete Technical Competency</h4>
                            <p>In vel hendrerit nisi. Vestibulum eget risus velit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt30 wow fadeIn" data-wow-delay="1.1s">
                    <div class="s-block wide-sblock">
                        <div class="s-card-icon"><img src="templateFiles/niwax/images/icons/hi.svg" alt="service" class="img-fluid"></div>
                        <div class="s-block-content">
                            <h4>Friendly & Cordial in Nature</h4>
                            <p>In vel hendrerit nisi. Vestibulum eget risus velit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt30 wow fadeIn" data-wow-delay="1.4s">
                    <div class="s-block wide-sblock">
                        <div class="s-card-icon"><img src="templateFiles/niwax/images/icons/badge.svg" alt="service" class="img-fluid"></div>
                        <div class="s-block-content">
                            <h4>Excellent Quality Delivered on Time</h4>
                            <p>In vel hendrerit nisi. Vestibulum eget risus velit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt30 wow fadeIn" data-wow-delay="1.7s">
                    <div class="s-block wide-sblock">
                        <div class="s-card-icon"><img src="templateFiles/niwax/images/icons/tin.svg" alt="service" class="img-fluid"></div>
                        <div class="s-block-content">
                            <h4>Effective & Continuous Communication</h4>
                            <p>In vel hendrerit nisi. Vestibulum eget risus velit.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="-cta-btn mt70">
                <div class="free-cta-title v-center wow zoomInDown" data-wow-delay="1.8s">
                    <p>Let's Start a <span>New Project</span> Together</p>
                    <a href="#" class="niwax-btn2">Inquire Now<i class="fas fa-chevron-right fa-icon"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!--End Why Choose-->

    <div class="clientslider">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="niwax-client-slider owl-carousel">
                        <div class="awardlogo"> <img src="templateFiles/niwax/images/client/customer-logo-1.png" alt="icon"></div>
                        <div class="awardlogo"> <img src="templateFiles/niwax/images/client/customer-logo-2.png" alt="icon"></div>
                        <div class="awardlogo"> <img src="templateFiles/niwax/images/client/customer-logo-3.png" alt="icon"></div>
                        <div class="awardlogo"> <img src="templateFiles/niwax/images/client/customer-logo-4.png" alt="icon"></div>
                        <div class="awardlogo"> <img src="templateFiles/niwax/images/client/customer-logo-5.png" alt="icon"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
--}}

@endsection
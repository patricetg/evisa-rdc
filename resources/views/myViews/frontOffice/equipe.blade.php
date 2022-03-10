@extends("myViews.frontOffice.layout.frontOfficeLayout")

@section("page")
    Notre équipe
@endsection

@section("firstLevelLayoutBodyContent")

    <section class="team pad-tb deep-dark">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4 class="text-black text-center">Le Projet VISAPASSEPORT sera exécuté par :</h4>
                </div>

            </div>
            <div class="row">
                <div class="col-8 mx-auto">
                    <p class=" text-center">
                        <a href="#">
                            <img src="{{ asset("myFiles/images/planning-client.png") }}" style="height: 200px;" alt="team" class="img-fluid"/>
                        </a>
                    </p>
                    <p class=" text-center">
                        Numéro d'entreprise 13070015 à Londres, Angleterre. PLANNINGCLIENT vise dématérialiser les procédures d’accès aux services publics. CHRISTIAN MASITU , Co-fondateur de PLANNINGCLIENT, coordonnera le projet VISAPASSEPORT.
                    </p>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col">
                    <h4 class="text-black text-center">En partenariat avec :</h4>
                </div>

            </div>
            <div class="row">

                <div class="col-lg-3S col-sm-6S col-md-6">
                    <div class="full-image-card hover-scale">
                        <div class="image-div"><a href="#">
                                <img src="{{ asset("myFiles/images/snedai.png") }}" alt="team" class="img-fluid"/></a></div>
                        <div class="info-text-block">
                            {{--<h4><a href="#">PLANNINGCLIENT LTD</a></h4>--}}
                            <p>
                                <strong>SNEDAI</strong> : est un groupe ivoirien qui œuvre essentiellement dans les technologies de l’information et de la communication. A travers sa filiale <strong>SNEDAI Côte d’Ivoire</strong> , des conventions ont été signées avec l’État de côte d’Ivoire pour la production des passeports ordinaires, des passeports diplomatiques et de services, ainsi que pour l’édition de visas biométriques.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3S col-sm-6S col-md-6">
                    <div class="full-image-card hover-scale">
                        <div class="image-div"><a href="#"><img src="{{ asset("myFiles/images/spaceo.png") }}" alt="team" class="img-fluid"/></a></div>
                        <div class="info-text-block">
                            {{--<h4><a href="#">SPACE-O TECHNOLOGIES</a></h4>--}}
                            <p>
                                SPACE-O TECHNOLOGIES est une société de développement d'applications certifiée ISO et primée aux États-Unis, au Canada et en Inde, offrant des services de développement d'applications iOS et Android
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--Start Team Members-->
    <section class="team pad-tb deep-dark">
        <div class="container">
            {{--<div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="common-heading ptag">
                        --}}{{--<span>We Are Awesome</span>--}}{{--
                        <h2>Notre équipe</h2>
                        <p class="mb0 text-center">Le Projet VISAPASSEPORT sera exécuté par 04 acteurs clés.</p>
                    </div>
                </div>
            </div>--}}

            <div class="row">
                <div class="col">
                    <h4 class="text-black text-center">
                        Les ORGANES DU GOUVERNEMENTS QUI SERONT IMPLIQUES DANS LE PROJET VISAPASSEPORT :
                    </h4>
                </div>
            </div>

            <div class="row">
{{--

                <div class="col-lg-3S col-sm-6S col-md-6">
                    <div class="full-image-card hover-scale">
                        <div class="image-div"><a href="#">
                                <img src="{{ asset("myFiles/images/planning-client.png") }}" alt="team" class="img-fluid"/></a></div>
                        <div class="info-text-block">
                            <h4><a href="#">PLANNINGCLIENT LTD</a></h4>
                            <p>
                                Située à Londres (Angleterre), elle vise dématérialiser les procédures d’accès aux services publics. CHRISTIAN MASITU , Co-fondateur de PLANNINGCLIENT, coordonnera le projet VISAPASSEPORT.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3S col-sm-6S col-md-6">
                    <div class="full-image-card hover-scale">
                        <div class="image-div"><a href="#"><img src="{{ asset("myFiles/images/spaceo.png") }}" alt="team" class="img-fluid"/></a></div>
                        <div class="info-text-block">
                            <h4><a href="#">SPACE-O TECHNOLOGIES</a></h4>
                            <p>
                                Elle est une société de développement d'applications certifiée ISO et primée aux États-Unis, au Canada et en Inde, offrant des services de développement d'applications iOS et Android.
                            </p>
                        </div>
                    </div>
                </div>
--}}


                <div class="col-lg-3S col-sm-6S col-md-6">
                    <div class="full-image-card hover-scale">
                        <h4 class="text-black">MINAFFET RDC</h4>
                        <div class="image-div"><a href="#"><img src="{{ asset("myFiles/images/minaffet.png") }}" alt="team" class="img-fluid"/></a></div>
                        <div class="info-text-block">
                            {{--<h4><a href="#">MINAFFET RDC</a></h4>--}}
                            <p>
                               Le Ministère des Affaires Etrangères et de la Coopération Internationale; elle a pour missions entre autre la gestion des passeports congolais et des visas d’entré en RDC.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3S col-sm-6S col-md-6">
                    <div class="full-image-card hover-scale">
                        <h4 class="text-black">DGM</h4>
                        <div class="image-div"><a href="#"><img src="{{ asset("myFiles/images/dgm.png") }}" alt="team" class="img-fluid"/></a></div>
                        <div class="info-text-block">
                            {{--<h4><a href="#">DGM</a></h4>--}}
                            <p>
                                La Direction Générale de Migration; elle a comme attributions entre autre la délivrance de laissez-passer aux nationaux et des visas aux étrangers, mais aussi la police des frontières.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3S col-sm-6S col-md-6">
                    <div class="full-image-card hover-scale">
                        <h4 class="text-black">FINANCE</h4>
                        <div class="image-div"><a href="#"><img src="{{ asset("myFiles/images/finances.png") }}" alt="team" class="img-fluid"/></a></div>
                        <div class="info-text-block">
                            {{--<h4><a href="#">DGM</a></h4>--}}
                            <p>
                                L’impression des passeports biométriques dépend du ministère des Affaires étrangères mais aussi de celui des Finances qui est chargée de la gestion des imprimés de valeur.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3S col-sm-6S col-md-6">
                    <div class="full-image-card hover-scale">
                        <h4 class="text-black">ANR</h4>
                        <div class="image-div"><a href="#"><img src="{{ asset("myFiles/images/anr.png") }}" alt="team" class="img-fluid"/></a></div>
                        <div class="info-text-block">
                            {{--<h4><a href="#">DGM</a></h4>--}}
                            <p>
                                pour l'obtention du passeport , le requérant devra aller au bureau de l’identification à l’Agence nationale des renseignements (ANR).
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row mt-2">
                <div class="col">
                    <p class="text-center">
                        <a href="{{ route("frontOfficeContactsPage") }}" class="btn-main bg-btn lnk mt30 text-center">
                           {{-- <i class="fa fa-phone fa-2x mr-1"></i>--}}
                            Nous contacter
                            {{--<i class="fa-solid fa-file-arrow-down"></i>--}}
                            {{--<i class="fas fa-chevron-right fa-icon"></i>--}}
                            <span class="circle"></span>
                        </a>
                    </p>
                </div>
            </div>

        </div>
    </section>
    <!--End Team Members-->

@endsection
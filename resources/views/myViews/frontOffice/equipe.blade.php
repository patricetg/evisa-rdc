@extends("myViews.frontOffice.layout.frontOfficeLayout")

@section("page")
    Notre équipe
@endsection

@section("firstLevelLayoutBodyContent")

    <!--Start Team Members-->
    <section class="team pad-tb deep-dark">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="common-heading ptag">
                        {{--<span>We Are Awesome</span>--}}
                        <h2>Notre équipe</h2>
                        <p class="mb0 text-center">Le Projet VISAPASSEPORT sera exécuté par 04 acteurs clés.</p>
                    </div>
                </div>
            </div>
            <div class="row">
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
                <div class="col-lg-3S col-sm-6S col-md-6">
                    <div class="full-image-card hover-scale">
                        <div class="image-div"><a href="#"><img src="{{ asset("myFiles/images/minaffet.png") }}" alt="team" class="img-fluid"/></a></div>
                        <div class="info-text-block">
                            <h4><a href="#">MINAFFET RDC</a></h4>
                            <p>
                               Le Ministère des Affaires Etrangères et de la Coopération Internationale; elle a pour missions entre autre la gestion des passeports congolais et des visas d’entré en RDC.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3S col-sm-6S col-md-6">
                    <div class="full-image-card hover-scale">
                        <div class="image-div"><a href="#"><img src="{{ asset("myFiles/images/dgm.png") }}" alt="team" class="img-fluid"/></a></div>
                        <div class="info-text-block">
                            <h4><a href="#">DGM</a></h4>
                            <p>
                                La Direction Générale de Migration; elle a comme attributions entre autre la délivrance de laissez-passer aux nationaux et des visas aux étrangers, mais aussi la police des frontières.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row mt-2">
                <div class="col">
                    <p class="text-center">
                        <a href="{{ route("frontOfficeContactsPage") }}" class="btn-main bg-btn lnk mt30 text-center">
                            <i class="fa fa-phone fa-2x mr-1"></i>
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
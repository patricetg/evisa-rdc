@extends("myViews.backOffice.layout.backOfficeLayout")

@section("page")
    Positionneur graphique
@endsection

@section("pageCSS")
    @if($orientation == "P")
        <style>

            #repere-A4 {
                width: 23cm;
                /* height: 32.7cm;
            border: 2px solid red;*/
                background-image: url("{{ asset("myFiles/images/plan-A4.png") }}");
                background-size: cover;
            }

            /* définition du bloc consituant la zone de choix graphique*/
            #A4-page {
                width: 21cm; /*  2480px;*/
                border: 2px solid green;
                position: relative;
                top: 3cm;
                left: 2cm;
            }

            /* définition des traits de répère horizontal et vertical */
            #trait-hor {
                width: 21cm; /*2480px;*/
                height: 2px;
                border: 1px dotted green;
                position: relative;
                top: 2px;
                left: 0;
            }

            #trait-vert {
                width: 2px;
                border: 1px dotted green;
                position: relative;
                top: 0;
                left: 2px;
            }
        </style>
    @elseif($orientation=="L")
        <style>

            #repere-A4 {
                width: 31.7cm;
                /* height: 24cm;
                border: 2px solid red;*/
                background-image: url("{{ asset("myFiles/images/plan-A4-paysage.png") }}");
                background-size: cover;
            }

            /* définition du bloc consituant la zone de choix graphique*/
            #A4-page {
                width: 29.7cm; /* 21cm; /*  2480px;*/
                border: 2px solid green;
                position: relative;
                top: 3cm;
                left: 2cm;
            }

            /* définition des traits de répère horizontal et vertical */
            #trait-hor {
                width: 29.7cm; /* 21cm; /*2480px;*/
                height: 2px;
                border: 1px dotted green;
                position: relative;
                top: 2px;
                left: 0;
            }

            #trait-vert {
                width: 2px;
                border: 1px dotted green;
                position: relative;
                top: 0;
                left: 2px;
            }

        </style>
    @endif

    {{-- définir les dimensions de l'esapce de travail suivant qu'on veut choisir la position du logo/signature/tampon --}}
    @if($positionnable=="signature" || $positionnable == "tampon")
        @if($orientation=="P")

            <style>

                #repere-A4 {
                    height: 32.7cm;
                }

                #A4-page {
                    height: 29.7cm; /* 3508px;*/
                }

                #trait-vert {
                    height: 29.7cm; /*3508px;*/
                }
            </style>

        @elseif($orientation=="L")
            <style>

                #repere-A4 {
                    height: 24cm; /* 32.7cm;*/
                }

                #A4-page {
                    height: 21cm; /* 29.7cm; /* 3508px;*/
                }

                #trait-vert {
                    height: 21cm; /* 29.7cm; /*3508px;*/
                }
            </style>
        @endif
    @elseif($positionnable=="logo")
        <style>

            #repere-A4 {
                height: 5cm;
            }

            #A4-page {
                height: 2cm; /*3cm;*/
            }

            #trait-vert {
                height: 2cm; /*3cm;*/
            }
        </style>



    @endif

@endsection

@section("firstLevelLayoutBodyContent")

    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">

                    <div class="row">

                        <div class="col-lg-12">


                            @include("myViews.shared.formErrors")
                            <form id="pageTopS" method="POST" action="{{ route("definePosition",["idMoule"=>$_moule->idMoule,"positionnable"=>$positionnable,"orientation"=>$orientation,"sheet"=>@$_feuille->idFE, "pdf-page"=>@$_pagePdf->idPP]) }}" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-lg-6">

                                        <div class="form-group">
                                            <label for="">X</label>
                                            <input type="number" min="0" step="any" class="form-control" value="{{ old("left") }}" name="left" id="left">
                                            <small class="form-text text-muted">Position de l'élément sur l'horizontal</small>
                                            @error('left')
                                            <ul class="text-danger">
                                                @foreach($errors->get("left") as $error)
                                                    <li> {{ $error }} </li>
                                                @endforeach
                                            </ul>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">Y</label>
                                            <input type="number" min="0" step="any" class="form-control" value="{{ old("top") }}" name="top" id="top">
                                            <small class="form-text text-muted">Position de l'élément sur la verticale</small>
                                            @error('top')
                                            <ul class="text-danger">
                                                @foreach($errors->get("top") as $error)
                                                    <li> {{ $error }} </li>
                                                @endforeach
                                            </ul>
                                            @enderror
                                        </div>
                                    </div>
                                </div>



                                <div>
                                    <button type="submit" class="btn btn-success">Enregistrer</button>
                                    <button type="reset" class="btn btn-outline-secondary">Annuler</button>
                                </div>



                            </form>


                        </div> <!-- end col -->


                    </div> <!-- end row -->

                    <div class="row mt-4">
                        <div class="col-12">
                            <h4>Sélecteur graphique</h4>
                        </div>
                        <div class="col-12" style="overflow: auto;">

                            <div id="repere-A4">

                                <div id="A4-page">
                                    <div id="trait-hor"></div>
                                    <div id="trait-vert"></div>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col">
                            <a href="{{ route("getModel",["idMoule"=>$_moule->idMoule]) }}"> Détails du modèle </a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>


@endsection

@section("pageJs")
    <script src="{{ asset("myFiles/js/positionneurGraphique.js") }}"></script>
@endsection
@extends("myViews.backOffice.layout.backOfficeLayout")

@section("page")
    Détails d'un modèle de validation
@endsection

@section("firstLevelLayoutBodyContent")

    <div class="row">
        <div class="col-lg-6">

            <div class="card">
                <div class="card-body">

                    <div class="row">

                        <div class="col-lg-12">

                            <div class="row">

                                <div class="col-12 my-2">
                                    <strong>Nom : </strong> {{ $_moule->nomMoule }}
                                </div>

                                <div class="col-12  my-2">
                                    <strong>Vérouillé contre modification : </strong> {{ $_moule->verouillerFichier ? "Oui" : "Non" }}
                                </div>

                                <div class="col-12  my-2">
                                    <strong>PDF joint : </strong>
                                    @if(isset($_moule->pdfJoint))

                                        <a href="{{ $uploadedFilesFolder."/".$_moule->pdfJoint }}">
                                            <i class="far fa-file-pdf"></i>
                                        </a>

										<a href="{{ route("deleteAttachedPDF",["idMoule"=>$_moule->idMoule]) }}" title="Supprimer le PDF joint" class="text-danger ml-4 delete-row" data-row-name="PDF Joint du modèle">
											<i class="fa fa-trash"></i>
										</a>

                                    @else
                                        Aucun
                                    @endif

                                </div>

                                <div class="col-12 my-2">
                                    <strong>
                                        Position du logo (X:Y)
                                        <div class="btn-group btn-group-sm mb-1">
                                            <button type="button" class="btn btn-outline-success dropdown-toggle"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-cog"></i>
                                            </button>


                                            <div class="dropdown-menu animated slideInUp">
                                                <a class="dropdown-item" href="{{ route("definePosition",["idMoule"=>$_moule->idMoule,"positionnable"=>$positionnables["logo"]["back"]]) }}">Portrait</a>
                                                <a class="dropdown-item" href="{{ route("definePosition",["idMoule"=>$_moule->idMoule,"positionnable"=>$positionnables["logo"]["back"], "orientation"=>"L"]) }}">Paysage</a>
                                            </div>
                                        </div>

                                        :
                                    </strong>

                                    {{ floatval($_moule->logoX) }} :  {{ floatval($_moule->logoY) }}
                                </div>

                                <div class="col-12 my-2">
                                    <strong>
                                        Position de la signature (X:Y)

                                        <div class="btn-group btn-group-sm mb-1">
                                            <button type="button" class="btn btn-outline-success dropdown-toggle"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-cog"></i>
                                            </button>


                                            <div class="dropdown-menu animated slideInUp">
                                                <a class="dropdown-item" href="{{ route("definePosition",["idMoule"=>$_moule->idMoule,"positionnable"=>$positionnables["signature"]["back"]]) }}">Portrait</a>
                                                <a class="dropdown-item" href="{{ route("definePosition",["idMoule"=>$_moule->idMoule,"positionnable"=>$positionnables["signature"]["back"], "orientation"=>"L"]) }}">Paysage</a>
                                            </div>
                                        </div>

                                        :

                                    </strong>
                                    {{ floatval($_moule->signatureX) }} :  {{ floatval($_moule->signatureY) }}
                                </div>


                                <div class="col-12 my-2">
                                    <strong>
                                        Position du tampon (X:Y)

                                        <div class="btn-group btn-group-sm mb-1">
                                            <button type="button" class="btn btn-outline-success dropdown-toggle"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-cog"></i>
                                            </button>


                                            <div class="dropdown-menu animated slideInUp">
                                                <a class="dropdown-item" href="{{ route("definePosition",["idMoule"=>$_moule->idMoule,"positionnable"=>$positionnables["tampon"]["back"]]) }}">Portrait</a>
                                                <a class="dropdown-item" href="{{ route("definePosition",["idMoule"=>$_moule->idMoule,"positionnable"=>$positionnables["tampon"]["back"], "orientation"=>"L"]) }}">Paysage</a>
                                            </div>
                                        </div>

                                        :
                                    </strong>
                                    {{ floatval($_moule->tamponX) }} :  {{ floatval($_moule->tamponY) }}
                                </div>

                                <div class="col-12 my-2">
                                    <strong>
                                        Code de déverouillage Excel

                                        :
                                    </strong>
									{{ $_moule->excelSheetPwd ?? "Aucun" }}
                                </div>

                                <div class="col-12 my-2">

                                    <a href="{{ route("createExcelConfigs",["idMoule"=>$_moule->idMoule]) }}" title="Particularités Excel" class="text-success">
                                        <i class="far fa-file-excel fa-2x"></i>
                                    </a>

									&nbsp;&nbsp;&nbsp;


									<a href="{{ route("createPdfConfigs",["idMoule"=>$_moule->idMoule]) }}" title="Particularités PDF" class="text-danger">
										<span class="far fa-file-pdf fa-2x"></span>
									</a>

								</div>


                            </div>

                        </div> <!-- end col -->


                    </div> <!-- end row -->

                    <div class="row mt-3">
                        <div class="col">
                            <a href="{{ route("getModels") }}"> Modèles </a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>


@endsection
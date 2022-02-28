@extends("myViews.backOffice.layout.backOfficeLayout")

@section("page")
    Modèles de validation
@endsection

@section("firstLevelLayoutBodyContent")

    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">

                    <div class="row">

                        <div class="col-lg-12">

                            <div class="row">
                                <div class="col">

                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered datatable">
                                            <thead>
                                            <tr>
                                                <th>Modèle</th>
                                                <th title="Vérouillé contre modification">Vérouillé</th>
                                                <th>PDF joint</th>
                                                <th>Logo (X:Y)</th>
                                                <th>Signature (X:Y)</th>
                                                <th>Cachet (X:Y)</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($moules as $_moule)
                                                <tr>
                                                    <td>{{ $_moule->nomMoule }}</td>
                                                    <td>{{ $_moule->verouillerFichier ? "Oui" : "Non" }}</td>
                                                    <td>
                                                        @if(isset($_moule->pdfJoint))

                                                            <a href="{{ $uploadedFilesFolder."/".$_moule->pdfJoint }}">
                                                                <i class="far fa-file-pdf"></i>
                                                            </a>
                                                        @else
                                                            -
                                                        @endif
                                                    </td>
                                                    <td>
                                                        ({{ floatval($_moule->logoX) }} :  {{ floatval($_moule->logoY) }})
                                                       {{-- <a href="{{ route("definePosition",["idMoule"=>$_moule->idMoule,"positionnable"=>$positionnables["logo"]["back"]]) }}"><i class="fa fa-cog"></i></a>--}}
														<br/>
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


                                                    </td>
                                                    <td>
                                                        ({{ floatval($_moule->signatureX) }} :  {{ floatval($_moule->signatureY) }})
{{--
                                                        <a href="{{ route("definePosition",["idMoule"=>$_moule->idMoule,"positionnable"=>$positionnables["signature"]["back"]]) }}"><i class="fa fa-cog"></i></a>
--}}

														<br/>
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


                                                    </td>
                                                    <td>
                                                        ({{ floatval($_moule->tamponX) }} :  {{ floatval($_moule->tamponY) }})
{{--
                                                        <a href="{{ route("definePosition",["idMoule"=>$_moule->idMoule,"positionnable"=>$positionnables["tampon"]["back"]]) }}"><i class="fa fa-cog"></i></a>
--}}

														<br/>
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


                                                    </td>
                                                    <td>

                                                        <a href="{{ route("updateModel",["idMoule"=>$_moule->idMoule]) }}" title="Modifier" class="btn btn-outline-warning btn-sm  my-1">
                                                            <span class="fas fa-pencil-alt"></span>
                                                        </a>

                                                        <a href="{{ route("getModel",["idMoule"=>$_moule->idMoule]) }}" title="Détails" class="btn btn-outline-info btn-sm  my-1">
                                                            <span class="fas fa-eye"></span>
                                                        </a>

														<br/>


                                                        <a href="{{ route("createExcelConfigs",["idMoule"=>$_moule->idMoule]) }}" title="Particularités Excel" class="btn btn-outline-success btn-sm my-1">
                                                            <span class="far fa-file-excel"></span>
                                                        </a>

                                                        <a href="{{ route("createPdfConfigs",["idMoule"=>$_moule->idMoule]) }}" title="Particularités PDF" class="btn btn-outline-danger btn-sm my-1">
                                                            <span class="far fa-file-pdf"></span>
                                                        </a>

														@if(Session::get("connectedUserTypePers") == Session::get("typePerss")["admin"]["back"] )

															<a href="{{ route("deleteModel",["idMoule"=>$_moule->idMoule]) }}" title="Supprimer le modèle" class="btn btn-danger btn-sm my-1 delete-row" data-row-name="{{ $_moule->nomMoule }}">
																<span class="fas fa-trash"></span>
															</a>

														@endif

                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>

                                    </div>


                                </div>
                            </div>

                        </div> <!-- end col -->


                    </div> <!-- end row -->

                    <div class="row mt-3">
                        <div class="col">
                            <a href="{{ route("createModel") }}"> Nouveau modèle </a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>


@endsection
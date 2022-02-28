@extends("myViews.backOffice.layout.backOfficeLayout")

@section("page")
    Configurations Excel du modèle {{ $_moule->nomMoule }}
@endsection

@section("firstLevelLayoutBodyContent")

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">

                    @include("myViews.shared.formErrors")
                    <form method="POST" action="{{ route("createExcelConfigs",["idMoule"=>$_moule->idMoule]) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Indice de la feuille (*)</label>
                            <input type="number" min="1" class="form-control" value="{{ old("indiceFE") }}" name="indiceFE">
                            <small class="form-text text-muted">
                                Indice de base 1
                                (<a href="#" class="link" data-toggle="tooltip" title="La première feuille visible porte l'indice 1, la deuxième visible l'indice 2, ainsi de suite..."><i class="fas fa-question"></i></a>)

                            </small>
                            @error('indiceFE')
                            <ul class="text-danger">
                                @foreach($errors->get("indiceFE") as $error)
                                    <li> {{ $error }} </li>
                                @endforeach
                            </ul>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Plage (*)</label>
                            <input type="text" class="form-control" value="{{ old("plageFE") }}" name="plageFE">
                            <small class="form-text text-muted">
                                Plage Excel
                                (<a href="#" class="link" data-toggle="tooltip" title="Par exemple A1:D43"><i class="fas fa-question"></i></a>)
								, mettez "auto" pour une auto-sélection de la plage

                            </small>
                            @error('plageFE')
                            <ul class="text-danger">
                                @foreach($errors->get("plageFE") as $error)
                                    <li> {{ $error }} </li>
                                @endforeach
                            </ul>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="">Orientation (*)</label>
                            <select class="form-control select2" name="orientationFE" id="">
                                <option value="P" {{ (old("orientationFE")=="P") ? "selected" :"" }} > Portrait </option>
                                <option value="L" {{ (old("orientationFE")=="L") ? "selected" :"" }} > Paysage </option>
                            </select>
                            @error('orientationFE')
                            <ul class="text-danger">
                                @foreach($errors->get("orientationFE") as $error)
                                    <li> {{ $error }} </li>
                                @endforeach
                            </ul>
                            @enderror
                        </div>


                        <div class="form-group">
							<input type="checkbox" name="cacheterFE" {{ old("cacheterFE",false)==true ? "checked":"" }} >
							<label for="">Cacheter  </label>
							@error('cacheterFE')
							<ul class="text-danger">
								@foreach($errors->get("cacheterFE") as $error)
									<li> {{ $error }} </li>
								@endforeach
							</ul>
                            @enderror
                        </div>

                        <div class="form-group">
							<input type="checkbox" name="signerFE" {{ old("signerFE",false)==true ? "checked":"" }} >
							<label for="">Apposer signature  </label>
							@error('signerFE')
							<ul class="text-danger">
								@foreach($errors->get("signerFE") as $error)
									<li> {{ $error }} </li>
								@endforeach
							</ul>
                            @enderror
                        </div>


                        <div>
                            <button type="submit" class="btn btn-success">Enregistrer</button>
                            <button type="reset" class="btn btn-outline-secondary">Annuler</button>
                        </div>



                    </form>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">

            <div class="card">
                <div class="card-body">

                    <div class="row">

                        <div class="col-lg-12">


                            <div class="table-responsive">
                                <table class="table table-striped table-bordered datatable">
                                    <thead>
                                    <tr>
                                        <th>Indice</th>
                                        <th>Plage</th>
                                        <th>Orientation</th>
                                        <th>Cacheté</th>
                                        <th>Signé</th>
										<th>Signature (X:Y)</th>
										<th>Cachet (X:Y)</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($feuilles as $_feuille)
                                        <tr>
                                            <td>{{ $_feuille->indiceFE }}</td>
                                            <td>{{ $_feuille->plageFE }}</td>
                                            <td>
                                                @if( $_feuille->orientationFE == "P")
                                                    Portrait
                                                @elseif( $_feuille->orientationFE=="L")
                                                    Paysage
                                                @endif
                                            </td>
											<td> {{ ($_feuille->cacheterFE==true) ? "Oui":"Non" }}</td>
											<td> {{ ($_feuille->signerFE==true) ? "Oui":"Non" }}</td>
											<td>
												({{ floatval($_feuille->signatureXFE) }} :  {{ floatval($_feuille->signatureYFE) }})
												<br/>
{{--

												<div class="btn-group btn-group-sm mb-1">
													<button type="button" class="btn btn-outline-success dropdown-toggle"
															data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														<i class="fa fa-cog"></i>
													</button>


													<div class="dropdown-menu animated slideInUp">
														<a class="dropdown-item" href="{{ route("definePosition",["idMoule"=>$_feuille->idMoule,"positionnable"=>$positionnables["signature"]["back"],"sheet"=>$_feuille->idFE]) }}">Portrait</a>
														<a class="dropdown-item" href="{{ route("definePosition",["idMoule"=>$_feuille->idMoule,"positionnable"=>$positionnables["signature"]["back"], "orientation"=>"L","sheet"=>$_feuille->idFE]) }}">Paysage</a>
													</div>
												</div>
--}}


												<a href="{{ route("definePosition",["idMoule"=>$_feuille->idMoule,"positionnable"=>$positionnables["signature"]["back"], "orientation"=>$_feuille->orientationFE,"sheet"=>$_feuille->idFE]) }}" class="btn btn-outline-success btn-blockS">
													<i class="fa fa-cog"></i>
												</a>



											</td>
											<td>
												({{ floatval($_feuille->tamponXFE) }} :  {{ floatval($_feuille->tamponYFE) }})
												<br/>
												{{--
												<div class="btn-group btn-group-sm mb-1">
													<button type="button" class="btn btn-outline-success dropdown-toggle"
															data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														<i class="fa fa-cog"></i>
													</button>


													<div class="dropdown-menu animated slideInUp">
														<a class="dropdown-item" href="{{ route("definePosition",["idMoule"=>$_feuille->idMoule,"positionnable"=>$positionnables["tampon"]["back"],"sheet"=>$_feuille->idFE]) }}">Portrait</a>
														<a class="dropdown-item" href="{{ route("definePosition",["idMoule"=>$_feuille->idMoule,"positionnable"=>$positionnables["tampon"]["back"], "orientation"=>"L","sheet"=>$_feuille->idFE]) }}">Paysage</a>
													</div>
												</div>
--}}

												<a href="{{ route("definePosition",["idMoule"=>$_feuille->idMoule,"positionnable"=>$positionnables["tampon"]["back"], "orientation"=>$_feuille->orientationFE,"sheet"=>$_feuille->idFE]) }}" class="btn btn-outline-success btn-blockS">
													<i class="fa fa-cog"></i>
												</a>


											</td>

                                            <td>


                                                <a href="{{ route("deleteExcelConfigs",["idFE"=>$_feuille->idFE]) }}" data-row-name="la ligne{{ $_feuille->indiceFE }}" class="btn btn-danger btn-sm delete-row">
                                                    <span class="fa fa-trash"></span>

                                                    Supprimer
                                                </a>

                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                            </div>


                        </div> <!-- end col -->


                    </div> <!-- end row -->


                    <div class="row">
                        <div class="col mb-3">
                            <a href="{{ route("getModel",["idMoule"=>$_moule->idMoule]) }}"> Détails du modèle </a>
                        </div>
                    </div>



                </div>
            </div>


        </div>
    </div>




@endsection

@section("pageJs")

@endsection
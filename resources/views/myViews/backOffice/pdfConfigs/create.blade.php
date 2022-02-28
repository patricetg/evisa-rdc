@extends("myViews.backOffice.layout.backOfficeLayout")

@section("page")
    Configurations PDF du modèle {{ $_moule->nomMoule }}
@endsection

@section("firstLevelLayoutBodyContent")

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">

                    @include("myViews.shared.formErrors")
                    <form method="POST" action="{{ route("createPdfConfigs",["idMoule"=>$_moule->idMoule]) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">N° de page (*)</label>
                            <input type="number" min="1" class="form-control" value="{{ old("indicePP") }}" name="indicePP">
                            <small class="form-text text-muted">
                                Le numéro de la page à configurer
                                {{--(<a href="#" class="link" data-toggle="tooltip" title="La première page visible porte l'indice 1, la deuxième visible l'indice 2, ainsi de suite..."><i class="fas fa-question"></i></a>)--}}

                            </small>
                            @error('indicePP')
                            <ul class="text-danger">
                                @foreach($errors->get("indicePP") as $error)
                                    <li> {{ $error }} </li>
                                @endforeach
                            </ul>
                            @enderror
                        </div>

                        <div class="form-group">
							<input type="checkbox" name="cacheterPP" {{ old("cacheterPP",false)==true ? "checked":"" }} >
							<label for="">Cacheter  </label>
							@error('cacheterPP')
							<ul class="text-danger">
								@foreach($errors->get("cacheterPP") as $error)
									<li> {{ $error }} </li>
								@endforeach
							</ul>
                            @enderror
                        </div>

                        <div class="form-group">
							<input type="checkbox" name="signerPP" {{ old("signerPP",false)==true ? "checked":"" }} >
							<label for="">Apposer signature  </label>
							@error('signerPP')
							<ul class="text-danger">
								@foreach($errors->get("signerPP") as $error)
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
                                        <th>Page</th>
                                        <th>Cacheté</th>
                                        <th>Signé</th>
										<th>Signature (X:Y)</th>
										<th>Cachet (X:Y)</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($pages as $_p)
                                        <tr>
                                            <td>{{ $_p->indicePP }}</td>
											<td> {{ ($_p->cacheterPP==true) ? "Oui":"Non" }}</td>
											<td> {{ ($_p->signerPP==true) ? "Oui":"Non" }}</td>
											<td>
												({{ floatval($_p->signatureXPP) }} :  {{ floatval($_p->signatureYPP) }})
												<br/>

												<div class="btn-group btn-group-sm mb-1">
													<button type="button" class="btn btn-outline-success dropdown-toggle"
															data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														<i class="fa fa-cog"></i>
													</button>


													<div class="dropdown-menu animated slideInUp">

														<a class="dropdown-item" href="{{ route("definePosition",["idMoule"=>$_p->idMoule,"positionnable"=>$positionnables["signature"]["back"],"pdf-page"=>$_p->idPP]) }}">Portrait</a>

														<a class="dropdown-item" href="{{ route("definePosition",["idMoule"=>$_p->idMoule,"positionnable"=>$positionnables["signature"]["back"], "orientation"=>"L","pdf-page"=>$_p->idPP]) }}">Paysage</a>
													</div>
												</div>



											</td>
											<td>
												({{ floatval($_p->tamponXPP) }} :  {{ floatval($_p->tamponYPP) }})
												<br/>
												<div class="btn-group btn-group-sm mb-1">
													<button type="button" class="btn btn-outline-success dropdown-toggle"
															data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														<i class="fa fa-cog"></i>
													</button>


													<div class="dropdown-menu animated slideInUp">
														<a class="dropdown-item" href="{{ route("definePosition",["idMoule"=>$_p->idMoule,"positionnable"=>$positionnables["tampon"]["back"],"pdf-page"=>$_p->idPP]) }}">Portrait</a>

														<a class="dropdown-item" href="{{ route("definePosition",["idMoule"=>$_p->idMoule,"positionnable"=>$positionnables["tampon"]["back"], "orientation"=>"L","pdf-page"=>$_p->idPP]) }}">Paysage</a>
													</div>
												</div>

											</td>

                                            <td>


                                                <a href="{{ route("deletePdfConfigs",["idPP"=>$_p->idPP]) }}" data-row-name="la page {{ $_p->indicePP }}" class="btn btn-danger btn-sm delete-row">
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
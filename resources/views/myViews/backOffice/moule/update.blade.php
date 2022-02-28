@extends("myViews.backOffice.layout.backOfficeLayout")

@section("page")
    Modification de modèle
@endsection

@section("firstLevelLayoutBodyContent")

    <div class="row">
        <div class="col-lg-6">

            <div class="card">
                <div class="card-body">

                    <div class="row">

                        <div class="col-lg-12">

                            @include("myViews.shared.formErrors")

                            <form method="POST" action="{{ route("updateModel",["idMoule"=>$_moule->idMoule]) }}" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="">Nom (*)</label>
                                    <input type="text" class="form-control" value="{{ old("nomMoule") ?: $_moule->nomMoule }}" name="nomMoule">
                                    @error('nomMoule')
                                    <ul class="text-danger">
                                        @foreach($errors->get("nomMoule") as $error)
                                            <li> {{ $error }} </li>
                                        @endforeach
                                    </ul>
                                    @enderror
                                </div>

                                <div class="form-check form-check-inline">

                                    <input type="checkbox" class="form-check-input" name="verouillerFichier" {{ old("verouillerFichier")?: ($_moule->verouillerFichier ==true) ? "checked":"" }} >
                                    <label for="">Vérouiller contre modification</label>
                                    @error('verouillerFichier')
                                    <ul class="text-danger">
                                        @foreach($errors->get("verouillerFichier") as $error)
                                            <li> {{ $error }} </li>
                                        @endforeach
                                    </ul>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <label for="">
                                        PDF joint
                                        @if(isset($_moule->pdfJoint))

                                            <a href="{{ $uploadedFilesFolder."/".$_moule->pdfJoint }}">
                                                <i class="far fa-file-pdf"></i>
                                            </a>
                                        @endif
                                    </label>
                                    <input type="file" accept=".pdf" value="" class="form-control-file"  name="pdfJoint">
                                    @if(isset($_moule->pdfJoint))
                                        <small class="form-text text-muted">Ne choisissez un fichier que si vous souhaitez remplacer l'ancien</small>
                                    @endif

                                    @error('pdfJoint')
                                    <ul class="text-danger">
                                        @foreach($errors->get("pdfJoint") as $error)
                                            <li> {{ $error }} </li>
                                        @endforeach
                                    </ul>
                                    @enderror
                                </div>


								<div class="form-group">
									<label for="">Code de déverouillage des feuilles Excel </label>
									<input type="text" class="form-control" value="{{ old("excelSheetPwd") ?: $_moule->excelSheetPwd }}" name="excelSheetPwd">
									<small class="form-text text-muted">
										Mettez cette information pour les feuilles Excel protégées par un mot de passe
									</small>
									@error('excelSheetPwd')
									<ul class="text-danger">
										@foreach($errors->get("excelSheetPwd") as $error)
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
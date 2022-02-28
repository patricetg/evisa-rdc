@extends("myViews.backOffice.layout.backOfficeLayout")

@section("page")
    Validation de fichiers Word
@endsection

@section("firstLevelLayoutBodyContent")

    <div class="row">
        <div class="col-lg-6">

            <div class="card">
                <div class="card-body">

                    <div class="row">

                        <div class="col-lg-12">

                            @include("myViews.shared.formErrors")

                            <form method="POST" action="{{ route("validateWordFiles") }}" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="">Fichiers (*)</label>
                                    <input type="file" accept=".doc,.docx" class="form-control-file" multiple name="filesToValidate[]">
                                    <small class="form-text text-muted">Veuillez choisir les fichiers à valider</small>

                                    @error('filesToValidate')
                                        <ul class="text-danger">
                                            @foreach($errors->get("filesToValidate") as $error)
                                                <li> {{ $error }} </li>
                                            @endforeach
                                        </ul>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <label for="">Modèle (*)</label>
                                    <select class="form-control select2" name="idMoule" id="">

                                        @foreach($moules as $_moule)

                                            <option value="{{ $_moule->idMoule }}" {{ ($_moule->idMoule == old("idMoule",null)) ? "selected" :"" }} >{{ $_moule->nomMoule }}</option>

                                        @endforeach

                                    </select>
                                    <small class="form-text text-muted">Veuillez choisir le modèle de validation à utiliser</small>
                                    @error('idMoule')
                                        <ul class="text-danger">
                                            @foreach($errors->get("idMoule") as $error)
                                                <li> {{ $error }} </li>
                                            @endforeach
                                        </ul>
                                    @enderror
                                </div>



                                <div>
                                    <button type="submit" class="btn btn-success">Valider</button>
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
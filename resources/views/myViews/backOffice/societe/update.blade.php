@extends("myViews.backOffice.layout.backOfficeLayout")

@section("page")
    Entreprise
@endsection

@section("firstLevelLayoutBodyContent")

    <div class="row">
        <div class="col-lg-6">

            <div class="card">
                <div class="card-body">

                    <div class="row">

                        <div class="col-lg-12">

                            @include("myViews.shared.formErrors")

                            <form method="POST" action="{{ route("updateFirm") }}" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="">Code de vérouillage du fichier validé</label>
                                    <input type="text" class="form-control" value="{{ old("codeProtectionFichier") ?: $_societe->codeProtectionFichier }}" name="codeProtectionFichier">
                                    @error('codeProtectionFichier')
                                    <ul class="text-danger">
                                        @foreach($errors->get("codeProtectionFichier") as $error)
                                            <li> {{ $error }} </li>
                                        @endforeach
                                    </ul>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">
                                        Logo

                                    </label>
                                    <input type="file" accept="image/jpeg,image/png" value="" class="form-control-file"  name="logo">
                                    @if(isset($_societe->logo))
                                        <small class="form-text text-muted">Ne choisissez un fichier que si vous souhaitez remplacer l'ancien</small>
                                    @endif

                                    @error('logo')
                                    <ul class="text-danger">
                                        @foreach($errors->get("logo") as $error)
                                            <li> {{ $error }} </li>
                                        @endforeach
                                    </ul>
                                    @enderror

                                    @if(isset($_societe->logo))

                                        <a href="{{ $uploadedFilesFolder."/".$_societe->logo }}">
                                            <img src="{{  $uploadedFilesFolder."/".$_societe->logo }}" class="img-fluid" alt="">
                                        </a>
                                    @endif
                                </div>


                                <div class="form-group">
                                    <label for="">
                                        Cachet

                                    </label>
                                    <input type="file" accept="image/jpeg,image/png" value="" class="form-control-file"  name="tampon">
                                    @if(isset($_societe->tampon))
                                        <small class="form-text text-muted">Ne choisissez un fichier que si vous souhaitez remplacer l'ancien</small>
                                    @endif

                                    @error('tampon')
                                    <ul class="text-danger">
                                        @foreach($errors->get("tampon") as $error)
                                            <li> {{ $error }} </li>
                                        @endforeach
                                    </ul>
                                    @enderror

                                    @if(isset($_societe->tampon))

                                        <a href="{{ $uploadedFilesFolder."/".$_societe->tampon }}">
                                            <img src="{{  $uploadedFilesFolder."/".$_societe->tampon }}" class="img-fluid" alt="">
                                        </a>
                                    @endif
                                </div>


                                <div class="form-group">
                                    <label for="">
                                        Certificat

                                        @if(isset($_societe->certificat))

                                            <a href="{{ $uploadedFilesFolder."/".$_societe->certificat }}">
                                                <i class="fas fa-certificate"></i>
                                            </a>
                                        @endif

                                    </label>
                                    <input type="file" accept=".cer,.pfx" value="" class="form-control-file"  name="certificat">
                                    @if(isset($_societe->certificat))
                                        <small class="form-text text-muted">Ne choisissez un fichier que si vous souhaitez remplacer l'ancien</small>
                                    @endif

                                    @error('certificat')
                                    <ul class="text-danger">
                                        @foreach($errors->get("certificat") as $error)
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
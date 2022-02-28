@extends("myViews.backOffice.layout.backOfficeLayout")

@section("page")
    Nouvel utilisateur
@endsection

@section("firstLevelLayoutBodyContent")

    <div class="row">
        <div class="col-lg-6">

            <div class="card">
                <div class="card-body">

                    <div class="row">

                        <div class="col-lg-12">


                            @include("myViews.shared.formErrors")

                            <form method="POST" action="{{ route("createUser") }}">
                                @csrf

                                <div class="form-group">
                                    <label for="">Nom (*)</label>
                                    <input type="text" class="form-control" value="{{ old("nomPers") }}" name="nomPers">
                                    @error('nomPers')
                                    <ul class="text-danger">
                                        @foreach($errors->get("nomPers") as $error)
                                            <li> {{ $error }} </li>
                                        @endforeach
                                    </ul>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Prénom (*)</label>
                                    <input type="text" class="form-control" value="{{ old("prenPers") }}" name="prenPers">
                                    @error('prenPers')
                                    <ul class="text-danger">
                                        @foreach($errors->get("prenPers") as $error)
                                            <li> {{ $error }} </li>
                                        @endforeach
                                    </ul>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Email (*)</label>
                                    <input type="email" class="form-control" value="{{ old("emailPers") }}" name="emailPers">
                                    @error('emailPers')
                                    <ul class="text-danger">
                                        @foreach($errors->get("emailPers") as $error)
                                            <li> {{ $error }} </li>
                                        @endforeach
                                    </ul>
                                    @enderror
                                </div>

                                <input type="hidden" class="form-control" value="undefined" name="postePers">
								{{--

                                <div class="form-group">
                                    <label for="">Poste (*)</label>
                                    <input type="text" class="form-control" value="{{ old("postePers") }}" name="postePers">
                                    @error('postePers')
                                    <ul class="text-danger">
                                        @foreach($errors->get("postePers") as $error)
                                            <li> {{ $error }} </li>
                                        @endforeach
                                    </ul>
                                    @enderror
                                </div>
--}}

                                <div class="form-group">
                                    <label for="">Mot de passe (*)</label>
                                    <input type="password" class="form-control" value="{{ old("passPers") }}" name="passPers">
                                    @error('passPers')
                                    <ul class="text-danger">
                                        @foreach($errors->get("passPers") as $error)
                                            <li> {{ $error }} </li>
                                        @endforeach
                                    </ul>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <label for="">Confirmez le mot de passe (*)</label>
                                    <input type="password" class="form-control" value="{{ old("confirmPass") }}" name="confirmPass">
                                    @error('confirmPass')
                                    <ul class="text-danger">
                                        @foreach($errors->get("confirmPass") as $error)
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
                            <a href="{{ route("getUsers") }}"> Utilisateurs </a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>


@endsection
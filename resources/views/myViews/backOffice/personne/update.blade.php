@extends("myViews.backOffice.layout.backOfficeLayout")

@section("page")
    Modification de compte
@endsection

@section("firstLevelLayoutBodyContent")

    <div class="row">
        <div class="col-lg-6">

            <div class="card">
                <div class="card-body">

                    <div class="row">

                        <div class="col-lg-12">


                            @include("myViews.shared.formErrors")

                            <form method="POST" action="{{ route("updateUser",["idPers"=>$_personne->idPers]) }}">
                                @csrf

                                <div class="form-group">
                                    <label for="">Nom (*)</label>
                                    <input type="text" class="form-control" value="{{ old("nomPers") ?? $_personne->nomPers }}" name="nomPers">
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
                                    <input type="text" class="form-control" value="{{ old("prenPers") ?? $_personne->prenPers  }}" name="prenPers">
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
                                    <input type="email" class="form-control" value="{{ old("emailPers") ?? $_personne->emailPers  }}" name="emailPers">
                                    @error('emailPers')
                                    <ul class="text-danger">
                                        @foreach($errors->get("emailPers") as $error)
                                            <li> {{ $error }} </li>
                                        @endforeach
                                    </ul>
                                    @enderror
                                </div>

                                <input type="hidden" class="form-control" value="{{ old("postePers") ?? $_personne->postePers  }}" name="postePers">

                                {{--
                                <div class="form-group">
                                    <label for="">Poste (*)</label>
                                    <input type="text" class="form-control" value="{{ old("postePers") ?? $_personne->postePers  }}" name="postePers">
                                    @error('postePers')
                                    <ul class="text-danger">
                                        @foreach($errors->get("postePers") as $error)
                                            <li> {{ $error }} </li>
                                        @endforeach
                                    </ul>
                                    @enderror
                                </div>
--}}

                                <div>
                                    <button type="submit" class="btn btn-success">Modifier</button>
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
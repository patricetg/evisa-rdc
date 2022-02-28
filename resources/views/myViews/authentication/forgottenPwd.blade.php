@extends("myViews.authentication.layout.authLayout")

@section("page")
    Regénérer mon mot de passe
@endsection

@section("authBodyContent")


    @include("myViews.shared.formErrors")


    <form class="form-horizontal" method="POST" action="{{ route("forgottenPwd") }}">

        @csrf

        <div class="form-group  mb-4 row">

            <div class="col-12">
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                    <input type="email" name="emailPers" value="{{ old("emailPers") }}" class="form-control" autofocus autocomplete="off" placeholder="Email" />

                </div>
                <span class="text-muted small"> Un nouveau mot de passe vous sera envoyé à votre email. </span>
                @error('emailPers')
                <ul class="text-danger">
                    @foreach($errors->get("emailPers") as $error)
                        <li> {{ $error }} </li>
                    @endforeach
                </ul>
                @enderror
            </div>
        </div>

        <div class="form-group row text-center m-t-10">
            <div class="col-12">
                <button class="btn btn-md btn-block btn-success waves-effect waves-light" type="submit">
                    <span class="fas fa-magic mr-2"></span>
                    Regénérer
                </button>
            </div>
        </div>

    </form>

    <div class="row mt-4">

        <div class="col-md-6">
            <p class="text-muted">
                <a href="{{ route("login") }}" class="text-dark"> <span class="fas fa-key"></span> Se connecter </a>
            </p>
        </div>

        <div class="col-md-6">
            <p class="text-muted text-rightS text-sm-left text-lg-right">
                <a href="{{ route("frontOfficeHomePage") }}" class="text-dark">
					<span class="fas fa-home"></span>
					Accueil
				</a>
            </p>
        </div>

    </div>

@endsection

@extends("myViews.authentication.layout.authLayout")

@section("page")
    Se connecter
@endsection

@section("authBodyContent")


    @include("myViews.shared.formErrors")


    <form class="form-horizontal" method="POST" action="{{ route("login") }}">

        @csrf

        <div class="form-group  mb-4 row">

            <div class="col-12">
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                    <input type="email" name="emailPers" value="{{ old("emailPers") }}" autofocus autocomplete="off" class="form-control" placeholder="Email" />

                </div>
                @error('emailPers')
                <ul class="text-danger">
                    @foreach($errors->get("emailPers") as $error)
                        <li> {{ $error }} </li>
                    @endforeach
                </ul>
                @enderror
            </div>

            <div class="col-12">
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fas fa-key"></span>
                        </div>
                    </div>
                    <input type="password" name="passPers" value="{{ old("passPers") }}" class="form-control" placeholder="Mot de passe" />

                </div>
                @error('passPers')
                <ul class="text-danger">
                    @foreach($errors->get("passPers") as $error)
                        <li> {{ $error }} </li>
                    @endforeach
                </ul>
                @enderror
            </div>

        </div>

        <div class="form-group row text-center m-t-10">
            <div class="col-12">
                <button class="btn btn-md btn-block btn-success waves-effect waves-light" type="submit">
                    <span class=" fas fa-lock-open mr-2"></span>
                    Se connecter
                </button>
            </div>
        </div>

    </form>

    <div class="row mt-4">

        <div class="col-md-8">
            <p class="text-muted">
                <a href="{{ route("forgottenPwd") }}" class="text-dark"> <span class="far fa-frown"></span> Mot de passe oublié </a>
            </p>
        </div>

        <div class="col-md-4">
            <p class="text-muted text-rightS text-sm-left text-lg-right">
                <a href="{{ route("frontOfficeHomePage") }}" class="text-dark">
					<span class="fas fa-home"></span>
					Accueil
				</a>
            </p>
        </div>

    </div>

@endsection

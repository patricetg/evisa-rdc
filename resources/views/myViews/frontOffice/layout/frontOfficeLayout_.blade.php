<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="{{ asset("myFiles/images/logo/logo.png") }}">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset("vendorFiles/bootstrap/css/bootstrap.min.css") }}" >

        <title> {{ env("APP_NAME") }} - @yield("page")    </title>
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="{{ route("frontOfficeHomePage") }}">
                <img src="{{ asset("myFiles/images/logo/logo.png") }}" width="30" height="30" class="d-inline-block  img-thumbnail  align-top" alt="" loading="lazy">
                {{ env("APP_NAME") }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("frontOfficeHomePage") }}#a-propos">A Propos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("login") }}">Se connecter</a>
                    </li>


                </ul>
            </div>
        </nav>


        <div id="mainCarousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#mainCarousel" data-slide-to="1"></li>
                <li data-target="#mainCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset("myFiles/images/formules.jpg") }}" class="d-block w-100" alt="{{ env("APP_NAME") }}" title="{{ env("APP_NAME") }}"/>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Les mathématiques au service du développement des entreprises</h5>
                       {{-- <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>--}}
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset("myFiles/images/taux-croissance.png") }}" class="d-block w-100" alt="{{ env("APP_NAME") }}" title="{{ env("APP_NAME") }}"/>
                    <div class="carousel-caption d-none d-md-block">
                        {{-- <h5 class="text-dark">Suivi du taux de croissance</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>--}}
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset("myFiles/images/etat-structure.png") }}" class="d-block w-100" alt="{{ env("APP_NAME") }}" title="{{ env("APP_NAME") }}"/>
                    <div class="carousel-caption d-none d-md-block">
                        {{-- <h5>Suivi de l'état de l'entreprise</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>--}}
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#mainCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#mainCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


        <div class="container-fluid">
            @yield("firstLevelLayoutBodyContent")


            <div class="row mt-3 bg-dark text-white-50">
                <div class="col my-2">

                    <footer class="text-right">
                        2020 © {{ env("APP_NAME") }} - Created by <a href="{{ env("APP_AUTHOR_WEBSITE") }}" title="{{ env("APP_AUTHOR") }}">{{ env("APP_AUTHOR") }}</a> - Based on the calculs of
                        <a href="{{ env("APP_MATHEMATICIAN_WEBSITE") }}" title="{{ env("APP_MATHEMATICIAN") }}">{{ env("APP_MATHEMATICIAN") }}</a>
                    </footer>

                </div>
            </div>

        </div>




        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{ asset("vendorFiles/jquery/jquery.min.js") }}"></script>
        <script src="{{ asset("vendorFiles/popper/popper.min.js") }}"></script>
        <script src="{{ asset("vendorFiles/bootstrap/js/bootstrap.min.js") }}"></script>
    </body>
</html>



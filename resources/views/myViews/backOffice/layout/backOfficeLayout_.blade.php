<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ env("APP_NAME") }} - @yield("page") </title>
        <meta  name="description" content="{{ env("APP_DESC") }}" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta  name="author" content="{{ env("APP_AUTHOR") }}" />

        @if(env("APP_CLT_IS_SENSIBLE",false))
            <!-- App favicon -->
            <link rel="shortcut icon" href="{{ asset("myFiles/images/logo/logo.png") }}">
        @endif

        <link rel="stylesheet" href="{{ asset("vendorFiles/printJS/print.min.css") }}">

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="{{ asset("templateFiles/velonic/plugins/morris/morris.css") }}">


        <!-- sweet alerts -->
        <link href="{{ asset("templateFiles/velonic/plugins/sweet-alert2/sweetalert2.min.css") }}" rel="stylesheet">

        <link href="{{ asset("templateFiles/velonic/plugins/notifications/notification.css") }}" rel="stylesheet" />

        <!-- DataTables -->
        <link href="{{ asset("templateFiles/velonic/plugins/datatables/dataTables.bootstrap4.min.css") }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset("templateFiles/velonic/plugins/datatables/buttons.bootstrap4.min.css") }}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        {{--<link href="{{ asset("templateFiles/velonic/plugins/datatables/responsive.bootstrap4.min.css") }}" rel="stylesheet" type="text/css" />--}}

        <!-- App css -->
        <link href="{{ asset("templateFiles/velonic/assets/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset("templateFiles/velonic/assets/css/icons.css") }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset("templateFiles/velonic/assets/css/metismenu.min.css") }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset("templateFiles/velonic/assets/css/app.css") }}" rel="stylesheet" type="text/css" />
        <!-- your custom css -->
        <link href="{{ asset("templateFiles/velonic/assets/css/style.css") }}" rel="stylesheet" type="text/css" />

        <script src="{{ asset("templateFiles/velonic/assets/js/modernizr.min.js") }}"></script>


        <style>
            .bg-green{
                background: #0c800d;
            }
        </style>

        @yield("pageCSS")

    </head>


    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">


                <!-- LOGO -->
                <div class="topbar-left">
                    @if(env("APP_CLT_IS_SENSIBLE",false))
                    <a href="{{ route("backOfficeHomePage") }}" class="logo">
                                <span>
                                    {{--<img src="{{ asset("myFiles/images/logo/logo-text.png") }}" alt="" height="18">--}}
                                    <img src="{{ asset("myFiles/images/logo/logo-text.png") }}" title="{{ env("APP_NAME") }}" alt="" height="50">
                                </span>
                        <i>
                            <img src="{{ asset("myFiles/images/logo/logo.png") }}" title="{{ env("APP_NAME") }}" class="rounded" alt="" height="22">
                        </i>
                    </a>
                    @endif
                </div>

                <nav class="navbar-custom">

                    <ul class="list-inline float-right mb-0">
                       {{-- <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <i class="mdi mdi-email-outline noti-icon waves-light waves-effect"></i>
                            </a>
                            <span class="badge badge-purple noti-icon-badge">3</span>
                            <div class="dropdown-menu dropdown-menu-animated dropdown-menu-right dropdown-arrow dropdown-lg">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="m-0"><span class="float-right"><a href="" class="text-dark"><small>Clear All</small></a> </span>Chat</h5>
                                </div>

                                <div class="slimscroll" style="max-height: 230px;">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon"><img src="templateFiles/velonic/assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                        <p class="notify-details">Cristina Pride</p>
                                        <p class="text-muted font-13 mb-0 user-msg">Hi, How are you? What about our next meeting</p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon"><img src="templateFiles/velonic/assets/images/users/avatar-3.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                        <p class="notify-details">Sam Garret</p>
                                        <p class="text-muted font-13 mb-0 user-msg">Yeah everything is fine</p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon"><img src="templateFiles/velonic/assets/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                        <p class="notify-details">Karen Robinson</p>
                                        <p class="text-muted font-13 mb-0 user-msg">Wow that's great</p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon"><img src="templateFiles/velonic/assets/images/users/avatar-5.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                        <p class="notify-details">Sherry Marshall</p>
                                        <p class="text-muted font-13 mb-0 user-msg">Hi, How are you? What about our next meeting</p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon"><img src="templateFiles/velonic/assets/images/users/avatar-6.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                        <p class="notify-details">Shawn Millard</p>
                                        <p class="text-muted font-13 mb-0 user-msg">Yeah everything is fine</p>
                                    </a>
                                </div>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item text-center text-dark notify-item notify-all">
                                    View all <i class="fi-arrow-right"></i>
                                </a>

                            </div>
                        </li>

                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <i class="mdi mdi-bell-outline noti-icon waves-light waves-effect"></i>
                            </a>
                            <span class="badge badge-pink noti-icon-badge">4</span>
                            <div class="dropdown-menu dropdown-menu-animated dropdown-menu-right dropdown-arrow dropdown-lg">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="m-0"><span class="float-right"><a href="" class="text-dark"><small>Clear All</small></a> </span>Notification</h5>
                                </div>

                                <div class="slimscroll" style="max-height: 230px;">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon text-success"><i class="mdi mdi-comment-account-outline"></i></div>
                                        <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">1 min ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon text-info"><i class="mdi mdi-account-plus"></i></div>
                                        <p class="notify-details">New user registered.<small class="text-muted">5 hours ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon text-danger"><i class="mdi mdi-heart"></i></div>
                                        <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">3 days ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon text-warning"><i class="mdi mdi-comment-account-outline"></i></div>
                                        <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">4 days ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon text-purple"><i class="mdi mdi-account-plus"></i></div>
                                        <p class="notify-details">New user registered.<small class="text-muted">7 days ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon text-primary"><i class="mdi mdi-heart"></i></div>
                                        <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">13 days ago</small></p>
                                    </a>
                                </div>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item text-center text-dark notify-item notify-all">
                                    View all <i class="fi-arrow-right"></i>
                                </a>

                            </div>
                        </li>
--}}
                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">

                                <i class="noti-icon">
                                    @if(env("APP_CLT_IS_SENSIBLE",false))
                                    <img src="{{ asset("myFiles/images/logo/logo.png")  }}" alt="user" title="{{ env("APP_NAME") }}" class="img-fluid rounded-circle">
                                    @endif
                                </i>

                                <span class="profile-username ml-2 text-muted">{{ env("APP_NAME") }} - {{ Session::get("connectedUserEmail") }} </span> <span class="mdi mdi-menu-down text-muted"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-animated dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="text-overflow"><small>App de suivi des finances</small> </h5>
                                </div>

                                <!-- item-->
                                <a href="{{ route("updateCredentials") }}" class="dropdown-item notify-item">
                                    <i class="fas fa-user"></i> <span>Profile</span>
                                </a>

                                <!-- item-->
                                <a href="{{ route("logout") }}" class="dropdown-item notify-item deconnexion">
                                    <i class="fas fa-lock"></i> <span>Se déconnecter</span>
                                </a>

                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-light waves-effect">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>
                        {{--<li class="hide-phone app-search">
                            <form role="search" class="">
                                <input type="text" placeholder="Search..." class="form-control">
                                <a href=""><i class="fa fa-search"></i></a>
                            </form>
                        </li>--}}
                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu" id="side-menu">

{{--

                            <li>
                                <a href="{{ route("backOfficeHomePage") }}">
                                    <i class="ion-md-speedometer"></i> <span> Dashboard </span>
                                </a>
                            </li>
--}}


                            <li class="menu-title">Statistiques</li>

                            <li>
                                <a href="{{ route("getStatistics") }}">
                                    <i class="fas fa-tachometer-alt"></i> <span> Etat de la structure </span>
                                </a>
                            </li>

{{--

                            <li>
                                <a href="{{ route("getGrowthRate") }}">
                                    <i class="fas fa-chart-line"></i> <span> Taux de croissance </span>
                                </a>
                            </li>
--}}


                            <li class="menu-title">Données</li>


                            <li>
                                <a href="{{ route("getHistorics") }}">
                                    <i class="fas fa-eye"></i> <span> Historique </span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fas fa-money-check-alt"></i> <span> Charges </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{ route("createPayment") }}">Nouveau</a></li>
                                    <li><a href="{{ route("getPayments") }}">Charges</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fas fa-dollar-sign"></i> <span> Production </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{ route("createCashing") }}">Nouveau</a></li>
                                    <li><a href="{{ route("getCashings") }}">Productions</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fas fa-home"></i> <span> Biens actuels </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{ route("createAsset") }}">Nouveau bien</a></li>
                                    <li><a href="{{ route("getAssets") }}">Liste des biens</a></li>
                                </ul>
                            </li>


                            <li class="menu-title">Paramètres</li>

                            @if(Session::get("connectedUserTypePers") == Session::get("typePerss")["admin"]["back"] )
                                <li>
                                    <a href="javascript: void(0);"><i class="fas fa-user-friends"></i> <span> Utilisateurs </span> <span class="menu-arrow"></span></a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="{{ route("createUser") }}">Nouvel utilisateur</a></li>
                                        <li><a href="{{ route("getUsers") }}">Utilisateurs</a></li>
                                    </ul>
                                </li>
                            @endif


                            <li>
                                <a href="{{ route("updateCredentials") }}">
                                    <i class="fas fa-user"></i> <span> Profile </span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route("logout") }}" class="deconnexion">
                                    <i class="fas fa-lock"></i> <span> Se déconnecter </span>
                                </a>
                            </li>

                        </ul>

                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title float-left">@yield("page") </h4>

                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="{{ route("backOfficeHomePage") }}">{{ env("APP_NAME") }}</a></li>
                                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                        <li class="breadcrumb-item active">@yield("page")</li>
                                    </ol>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        @yield("firstLevelLayoutBodyContent")

                    </div> <!-- container -->

                </div> <!-- content -->

                @if(env("APP_CLT_IS_SENSIBLE",false))
                <footer class="footer text-right">
                    2020 © {{ env("APP_NAME") }} - Created by <a href="{{ env("APP_AUTHOR_WEBSITE") }}" title="{{ env("APP_AUTHOR") }}">{{ env("APP_AUTHOR") }}</a> - Based on the calculs of
                    <a href="{{ env("APP_MATHEMATICIAN_WEBSITE") }}" title="{{ env("APP_MATHEMATICIAN") }}">{{ env("APP_MATHEMATICIAN") }}</a>
                </footer>
                @endif

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <!-- jQuery  -->
        <script src="{{ asset("templateFiles/velonic/assets/js/jquery.min.js") }}"></script>
        <script src="{{ asset("templateFiles/velonic/assets/js/bootstrap.bundle.min.js") }}"></script>
        <script src="{{ asset("templateFiles/velonic/assets/js/metisMenu.min.js") }}"></script>
        <script src="{{ asset("templateFiles/velonic/assets/js/waves.js") }}"></script>
        <script src="{{ asset("templateFiles/velonic/assets/js/jquery.slimscroll.js") }}"></script>

        <!-- Required datatable js -->
        <script src="{{ asset("templateFiles/velonic/plugins/datatables/jquery.dataTables.min.js") }}"></script>
        <script src="{{ asset("templateFiles/velonic/plugins/datatables/dataTables.bootstrap4.min.js") }}"></script>
        <!-- Buttons examples -->
        <script src="{{ asset("templateFiles/velonic/plugins/datatables/dataTables.buttons.min.js") }}"></script>
        <script src="{{ asset("templateFiles/velonic/plugins/datatables/buttons.bootstrap4.min.js") }}"></script>
        <script src="{{ asset("templateFiles/velonic/plugins/datatables/jszip.min.js") }}"></script>
        <script src="{{ asset("templateFiles/velonic/plugins/datatables/pdfmake.min.js") }}"></script>
        <script src="{{ asset("templateFiles/velonic/plugins/datatables/vfs_fonts.js") }}"></script>
        <script src="{{ asset("templateFiles/velonic/plugins/datatables/buttons.html5.min.js") }}"></script>
        <script src="{{ asset("templateFiles/velonic/plugins/datatables/buttons.print.min.js") }}"></script>
        <script src="{{ asset("templateFiles/velonic/plugins/datatables/buttons.colVis.min.js") }}"></script>
        <!-- Responsive examples -->
        <script src="{{ asset("templateFiles/velonic/plugins/datatables/dataTables.responsive.min.js") }}"></script>
        <script src="{{ asset("templateFiles/velonic/plugins/datatables/responsive.bootstrap4.min.js") }}"></script>

        <!-- Counter js  -->
        <script src="{{ asset("templateFiles/velonic/plugins/waypoints/jquery.waypoints.min.js") }}"></script>
        <script src="{{ asset("templateFiles/velonic/plugins/counterup/jquery.counterup.min.js") }}"></script>

        <!-- sparkline -->
        <script src="{{ asset("templateFiles/velonic/plugins/jquery-sparkline/jquery.sparkline.min.js") }}"></script>
        <script src="{{ asset("templateFiles/velonic/assets/pages/chart-sparkline.js") }}"></script>

        <!-- skycons -->
        <script src="{{ asset("templateFiles/velonic/plugins/skycons/skycons.min.js") }}" type="text/javascript"></script>

        <!-- sweet alerts -->
        <script src="{{ asset("templateFiles/velonic/plugins/sweet-alert2/sweetalert2.min.js") }}"></script>

        <!--Morris Chart-->
        <script src="{{ asset("templateFiles/velonic/plugins/morris/morris.min.js") }}"></script>
        <script src="{{ asset("templateFiles/velonic/plugins/raphael/raphael-min.js") }}"></script>
       {{-- <script src="{{ asset("templateFiles/velonic/assets/pages/morris.init.js") }}"></script>--}}

        <!-- Chat -->
        <script src="{{ asset("templateFiles/velonic/plugins/moment/moment.js") }}"></script>
        <script src="{{ asset("templateFiles/velonic/assets/pages/jquery.chat.js") }}"></script>

        <!-- Dashboard -->
        <script src="{{ asset("templateFiles/velonic/assets/pages/jquery.dashboard.js") }}"></script>

        <!-- Todoapp -->
        <script src="{{ asset("templateFiles/velonic/assets/pages/jquery.todo.js") }}"></script>

        <script src="{{ asset("templateFiles/velonic/plugins/notifications/notify.min.js") }}"></script>
        <script src="{{ asset("templateFiles/velonic/plugins/notifications/notify-metro.js") }}"></script>
        <script src="{{ asset("templateFiles/velonic/plugins/notifications/notifications.js") }}"></script>

        <!-- App js -->
        <script src="{{ asset("templateFiles/velonic/assets/js/jquery.core.js") }}"></script>
        <script src="{{ asset("templateFiles/velonic/assets/js/jquery.app.js") }}"></script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                /* Counter Up */
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });

            /* BEGIN SVG WEATHER ICON */
            if (typeof Skycons !== 'undefined'){
                var icons = new Skycons(
                    {"color": "#fff"},
                    {"resizeClear": true}
                    ),
                    list  = [
                        "clear-day", "clear-night", "partly-cloudy-day",
                        "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                        "fog"
                    ],
                    i;

                for(i = list.length; i--; )
                    icons.set(list[i], list[i]);
                icons.play();
            };



        </script>

        <script src="{{ asset("myFiles/js/chart/morris.js") }}"></script>
        {{--<script src="{{ asset("vendorFiles/printJS/print.min.js") }}"></script>
        <script src="{{ asset("vendorFiles/printJS/printHTML.js") }}"></script>--}}

        @include("myViews.shared.report")


        <script>
            $(document).ready(function(){

                $("body").on("submit","form",function(e){
                    if(!confirm("Soumettre le formulaire ?"))
                        return false;
                });

                $("body").on("click","button[type='reset']",function(e){
                    if(!confirm("Réinitialiser le formulaire ?"))
                        return false;
                });


                $("body").on("click",".deconnexion",function(e){
                    if(!confirm("Se déconnecter ? (Attention : toute opération non enregistrée sera perdue)"))
                        return false;
                });

                $("body").on("click",".delete-row",function(e){
                    let name = $(this).data("row-name");
                   if(!confirm("Supprimer les informations concernant '"+name+"' ?"))
                       return false;
                });


            });
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                //$('.datatable').DataTable();
               // $('table').DataTable();
                //With Buttons
                var table = $('.datatable').DataTable({
                    lengthChange: false,
                  //  buttons: ['copy', 'excel', 'pdf']
                    buttons: ['excel']
                });

                table.buttons().container()
                    .appendTo('.dataTables_wrapper  .col-md-6:eq(0)');
            } );

        </script>


        @yield("pageJs")

    </body>

</html>
<!DOCTYPE html>
<html dir="ltr" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta  name="description" content="{{ env("APP_DESC") }}" />
        <meta  name="author" content="{{ env("APP_CLT") }}" />

        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset("myFiles/images/logo/logo.png") }}">
        <title>{{ env("APP_NAME") }} - @yield("page")</title>
        <link rel="canonical" href="https://www.wrappixel.com/templates/monsteradmin/" />
        <!-- Custom CSS -->
        <link href="{{ asset("templateFiles/monster/assets/libs/chartist/dist/chartist.min.css") }}" rel="stylesheet">
        <link href="{{ asset("templateFiles/monster/assets/extra-libs/c3/c3.min.css") }}" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="{{ asset("templateFiles/monster/dist/css/style.min.css") }}" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <link href="{{ asset("myFiles/css/monster.css") }}" rel="stylesheet" />

        <!-- DataTables -->
        <link href="{{ asset("vendorFiles/datatables/dataTables.bootstrap4.min.css") }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset("vendorFiles/datatables/buttons.bootstrap4.min.css") }}" rel="stylesheet" type="text/css" />


        <link href="{{ asset("vendorFiles/icons/icons/icons.css") }}" rel="stylesheet" />

        <link href="{{ asset("vendorFiles/notifications/notification.css") }}" rel="stylesheet" />

		<link href="{{ asset("vendorFiles/sweet-alert2/sweetalert2.min.css") }}" rel="stylesheet" type="text/css">


		<link href="{{ asset("vendorFiles/select2/css/select2.min.css") }}" rel="stylesheet" />

        @yield("pageCSS")

    </head>

    <body>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
            <!-- ============================================================== -->
            <!-- Topbar header - style you can find in pages.scss -->
            <!-- ============================================================== -->
            <header class="topbar">
                <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                    <div class="navbar-header">
                        <!-- This is for the sidebar toggle which is visible on mobile only -->
                        <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        <!-- ============================================================== -->
                        <!-- Logo -->
                        <!-- ============================================================== -->
                        <a class="navbar-brand" href="{{ route("backOfficeHomePage") }}">
                            <!-- Logo icon -->
                            <b class="logo-icon">
                                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                {{--<!-- Dark Logo icon -->
                                <img src="{{ asset("templateFiles/monster/assets/images/logo-icon.png") }}" alt="homepage" class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="{{ asset("templateFiles/monster/assets/images/logo-light-icon.png") }}" alt="homepage" class="light-logo" />--}}
								<img src="{{ asset("myFiles/images/logo/logo.png") }}" width="25" height="25" alt="homepage" class="dark-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                    {{-- <!-- dark Logo text -->
                                     <img src="{{ asset("templateFiles/monster/assets/images/logo-text.png") }}" alt="homepage" class="dark-logo" />
                                <!-- Light Logo text -->
                                     <img src="{{ asset("templateFiles/monster/assets/images/logo-light-text.png") }}" class="light-logo" alt="homepage" />--}}

								<img src="{{ asset("myFiles/images/logo/logo-text.png") }}" width="150" alt="homepage" class="dark-logo" />
                                </span>
                        </a>
                        <!-- ============================================================== -->
                        <!-- End Logo -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Toggle which is visible on mobile only -->
                        <!-- ============================================================== -->
                        <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-collapse collapse" id="navbarSupportedContent">
                        <!-- ============================================================== -->
                        <!-- toggle and nav items -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="icon-arrow-left-circle"></i></a></li>

                            {{--
                            <!-- ============================================================== -->
                            <!-- Comment -->
                            <!-- ============================================================== -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-message"></i>
                                    <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                                </a>
                                <div class="dropdown-menu mailbox animated bounceInDown">
                                    <ul class="list-style-none">
                                        <li>
                                            <div class="font-weight-medium border-bottom rounded-top py-3 px-4">
                                                Notifications
                                            </div>
                                        </li>
                                        <li>
                                            <div class="message-center notifications position-relative" style="height:250px;">
                                                <!-- Message -->
                                                <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                    <span class="btn btn-danger rounded-circle btn-circle"><i class="fa fa-link"></i></span>
                                                    <div class="w-75 d-inline-block v-middle pl-2">
                                                        <h5 class="message-title mb-0 mt-1">Luanch Admin</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">Just see the my new admin!</span> <span class="font-12 text-nowrap d-block text-muted">9:30 AM</span> </div>
                                                </a>
                                                <!-- Message -->
                                                <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                    <span class="btn btn-success rounded-circle btn-circle"><i class="ti-calendar"></i></span>
                                                    <div class="w-75 d-inline-block v-middle pl-2">
                                                        <h5 class="message-title mb-0 mt-1">Event today</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">Just a reminder that you have event</span> <span class="font-12 text-nowrap d-block text-muted">9:10 AM</span> </div>
                                                </a>
                                                <!-- Message -->
                                                <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                    <span class="btn btn-info rounded-circle btn-circle"><i class="ti-settings"></i></span>
                                                    <div class="w-75 d-inline-block v-middle pl-2">
                                                        <h5 class="message-title mb-0 mt-1">Settings</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">You can customize this template as you want</span> <span class="font-12 text-nowrap d-block text-muted">9:08 AM</span> </div>
                                                </a>
                                                <!-- Message -->
                                                <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                    <span class="btn btn-primary rounded-circle btn-circle"><i class="ti-user"></i></span>
                                                    <div class="w-75 d-inline-block v-middle pl-2">
                                                        <h5 class="message-title mb-0 mt-1">Pavan kumar</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">Just see the my admin!</span> <span class="font-12 text-nowrap d-block text-muted">9:02 AM</span> </div>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="nav-link border-top text-center text-dark pt-3" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- ============================================================== -->
                            <!-- End Comment -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- Messages -->
                            <!-- ============================================================== -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-email"></i>
                                    <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                                </a>
                                <div class="dropdown-menu mailbox animated bounceInDown" aria-labelledby="2">
                                    <ul class="list-style-none">
                                        <li>
                                            <div class="font-weight-medium border-bottom rounded-top py-3 px-4">
                                                Messages
                                            </div>
                                        </li>
                                        <li>
                                            <div class="message-center message-body position-relative" style="height:250px;">
                                                <!-- Message -->
                                                <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                    <span class="user-img position-relative d-inline-block"> <img src="templateFiles/monster/assets/images/users/1.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle online"></span> </span>
                                                    <div class="w-75 d-inline-block v-middle pl-2">
                                                        <h5 class="message-title mb-0 mt-1">Pavan kumar</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">Just see the my admin!</span> <span class="font-12 text-nowrap d-block text-muted">9:30 AM</span> </div>
                                                </a>
                                                <!-- Message -->
                                                <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                    <span class="user-img position-relative d-inline-block"> <img src="templateFiles/monster/assets/images/users/2.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle busy"></span> </span>
                                                    <div class="w-75 d-inline-block v-middle pl-2">
                                                        <h5 class="message-title mb-0 mt-1">Sonu Nigam</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">I've sung a song! See you at</span> <span class="font-12 text-nowrap d-block text-muted">9:10 AM</span> </div>
                                                </a>
                                                <!-- Message -->
                                                <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                    <span class="user-img position-relative d-inline-block"> <img src="templateFiles/monster/assets/images/users/3.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle away"></span> </span>
                                                    <div class="w-75 d-inline-block v-middle pl-2">
                                                        <h5 class="message-title mb-0 mt-1">Arijit Sinh</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">I am a singer!</span> <span class="font-12 text-nowrap d-block text-muted">9:08 AM</span> </div>
                                                </a>
                                                <!-- Message -->
                                                <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                    <span class="user-img position-relative d-inline-block"> <img src="templateFiles/monster/assets/images/users/4.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle offline"></span> </span>
                                                    <div class="w-75 d-inline-block v-middle pl-2">
                                                        <h5 class="message-title mb-0 mt-1">Pavan kumar</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">Just see the my admin!</span> <span class="font-12 text-nowrap d-block text-muted">9:02 AM</span> </div>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="nav-link border-top text-center text-dark pt-3" href="javascript:void(0);"> <b>See all e-Mails</b> <i class="fa fa-angle-right"></i> </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- ============================================================== -->
                            <!-- End Messages -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- mega menu -->
                            <!-- ============================================================== -->
                            <li class="nav-item dropdown mega-dropdown"><a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class=""><i class="mdi mdi-view-grid"></i></span>
                                </a>
                                <div class="dropdown-menu animated bounceInDown">
                                    <div class="mega-dropdown-menu row">
                                        <div class="col-lg-3 col-xlg-2 mb-4">
                                            <h4 class="mb-3">CAROUSEL</h4>
                                            <!-- CAROUSEL -->
                                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner" role="listbox">
                                                    <div class="carousel-item active">
                                                        <div class="container p-0"> <img class="d-block img-fluid" src="{{ asset("templateFiles/monster/assets/images/big/img1.jpg") }}" alt="First slide"></div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <div class="container p-0"><img class="d-block img-fluid" src="{{ asset("templateFiles/monster/assets/images/big/img2.jpg") }}" alt="Second slide"></div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <div class="container p-0"><img class="d-block img-fluid" src="{{ asset("templateFiles/monster/assets/images/big/img3.jpg") }}" alt="Third slide"></div>
                                                    </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                                            </div>
                                            <!-- End CAROUSEL -->
                                        </div>
                                        <div class="col-lg-3 mb-4">
                                            <h4 class="mb-3">ACCORDION</h4>
                                            <!-- Accordian -->
                                            <div id="accordion">
                                                <div class="card mb-1">
                                                    <div class="card-header" id="headingOne">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                Collapsible Group Item #1
                                                            </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                                        <div class="card-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card mb-1">
                                                    <div class="card-header" id="headingTwo">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                Collapsible Group Item #2
                                                            </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                                        <div class="card-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card mb-1">
                                                    <div class="card-header" id="headingThree">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                Collapsible Group Item #3
                                                            </button>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                                        <div class="card-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3  mb-4">
                                            <h4 class="mb-3">CONTACT US</h4>
                                            <!-- Contact -->
                                            <form>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Name"> </div>
                                                <div class="form-group">
                                                    <input type="email" class="form-control" placeholder="Enter email"> </div>
                                                <div class="form-group">
                                                    <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Message"></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-info">Submit</button>
                                            </form>
                                        </div>
                                        <div class="col-lg-3 col-xlg-4 mb-4">
                                            <h4 class="mb-3">List style</h4>
                                            <!-- List style -->
                                            <ul class="list-style-none">
                                                <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> You can give link</a></li>
                                                <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Give link</a></li>
                                                <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Another Give link</a></li>
                                                <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Forth link</a></li>
                                                <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Another fifth link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- ============================================================== -->
                            <!-- End mega menu -->
                            <!-- ============================================================== -->
                            --}}

                        </ul>
                        <!-- ============================================================== -->
                        <!-- Right side toggle and nav items -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav">
                            {{--
                            <!-- ============================================================== -->
                            <!-- Search -->
                            <!-- ============================================================== -->
                            <li class="nav-item search-box d-none d-md-block">
                                <form class="app-search mt-3 mr-2">
                                    <input type="text" class="form-control rounded-pill border-0" placeholder="Search for...">
                                    <a class="srh-btn"><i class="ti-search"></i></a>
                                </form>
                            </li>
                            <!-- ============================================================== -->
                            <!-- User profile and search -->
                            <!-- ============================================================== -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset("templateFiles/monster/assets/images/users/1.jpg") }}" alt="user" class="rounded-circle" width="31"></a>
                                <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                    <div class="d-flex no-block align-items-center p-3 mb-2 border-bottom">
                                        <div class=""><img src="{{ asset("templateFiles/monster/assets/images/users/1.jpg") }}" alt="user" class="rounded" width="80"></div>
                                        <div class="ml-2">
                                            <h4 class="mb-0">Steave Jobs</h4>
                                            <p class=" mb-0">varun@gmail.com</p>
                                            <a href="profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a>
                                        </div>
                                    </div>
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user mr-1 ml-1"></i> My Profile</a>
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet mr-1 ml-1"></i> My Balance</a>
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email mr-1 ml-1"></i> Inbox</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings mr-1 ml-1"></i> Account Setting</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item deconnexion" href="{{ route("logout") }}"><i class="fa fa-power-off mr-1 ml-1"></i> Se déconnecter</a>
                                </div>
                            </li>
                            <!-- ============================================================== -->
                            <!-- User profile and search -->
                            <!-- ============================================================== -->
                            --}}
                                <li class="nav-item">
                                    <a href="{{ route("updateCredentials") }}" class="nav-link">{{ Session::get("connectedUserEmail") }}</a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route("logout") }}" class="nav-link deconnexion"><i class="mdi mdi-power"></i></a>
                                </li>
                            {{--<!-- ============================================================== -->
                            <!-- create new -->
                            <!-- ============================================================== -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="flag-icon flag-icon-us"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right  animated bounceInDown" aria-labelledby="navbarDropdown2">
                                    <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-us"></i> English</a>
                                    <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a>
                                    <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-es"></i> Spanish</a>
                                    <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-de"></i> German</a>
                                </div>
                            </li>
                            --}}
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- ============================================================== -->
            <!-- End Topbar header -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <aside class="left-sidebar">
                <!-- Sidebar scroll-->
                <div class="scroll-sidebar">
                    <!-- Sidebar navigation-->
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav">

                            <!-- User Profile-->
                            <li>
                                <!-- User profile -->
                                <div class="user-profile text-center position-relative pt-4 mt-1">
                                    <!-- User profile image -->
                                    <div class="profile-img m-auto">
										<img src="{{ Session::get("avatar") }}" alt="user" class="w-100 rounded-circle" />
										{{--<img src="{{ asset("templateFiles/monster/assets/images/users/1.jpg") }}" alt="user" class="w-100 rounded-circle" /> --}}
									</div>
                                    <!-- User profile text-->
                                    <div class="profile-text py-1">
										<span class="text-capitalize">{{ Session::get("prenPers") }}</span>
										<span class="text-uppercase">{{ Session::get("nomPers") }}</span>
										{{--
											<a href="#" class="dropdown-toggle link u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
												Markarn Doe <span class="caret"></span>
											</a>

											<div class="dropdown-menu animated flipInY">
												<a href="#" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
												<a href="#" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>
												<a href="#" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
												<div class="dropdown-divider"></div> <a href="#" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
												<div class="dropdown-divider"></div> <a href="login.html" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
											</div>
											--}}
                                    </div>
                                </div>
                                <!-- End User profile text-->
                            </li>


                            <!-- User Profile-->
                            <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Validation</span></li>

                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route("validateExcelFiles") }}" aria-expanded="false">
                                <i class="far fa-file-excel"></i>
                                <span class="hide-menu">Excel</span>
                                </a>
                            </li>
{{--

                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route("validateWordFiles") }}" aria-expanded="false">
                                <i class=" far fa-file-word"></i>
                                <span class="hide-menu">Word</span>
                                </a>
                            </li>
--}}

                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route("validatePdfFiles") }}" aria-expanded="false">
                                <i class="far fa-file-pdf"></i>
                                <span class="hide-menu">PDF</span>
                                </a>
                            </li>


                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route("pendingFiles") }}" aria-expanded="false">
								<i class="far fa-trash-alt"></i>
                                <span class="hide-menu">Echecs</span>
                                </a>
                            </li>



                            <li class="nav-devider"></li>
                            <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Configurations</span></li>

                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-clipboard-list"></i><span class="hide-menu">Modèles</span></a>
                                <ul aria-expanded="false" class="collapse  first-level">
                                    <li class="sidebar-item">
                                        <a href="{{ route("getModels") }}" class="sidebar-link">
                                        <i class="mdi mdi-email"></i>
                                        <span class="hide-menu"> Lister</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="{{ route("createModel") }}" class="sidebar-link">
                                        <i class="mdi mdi-email"></i>
                                        <span class="hide-menu"> Créer</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>


                        @if(Session::get("connectedUserTypePers") == Session::get("typePerss")["admin"]["back"] )

                                <li class="sidebar-item">
                                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-users"></i><span class="hide-menu">Utilisateurs</span></a>
                                    <ul aria-expanded="false" class="collapse  first-level">
                                        <li class="sidebar-item">
                                            <a href="{{ route("getUsers") }}" class="sidebar-link">
                                                <i class="mdi mdi-email"></i>
                                                <span class="hide-menu"> Lister</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="{{ route("createUser") }}" class="sidebar-link">
                                                <i class="mdi mdi-email"></i>
                                                <span class="hide-menu"> Créer</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>

                                <li class="sidebar-item">
                                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route("updateFirm") }}" aria-expanded="false">
                                        <i class="fas fa-home"></i>
                                        <span class="hide-menu">Entreprise</span>
                                    </a>
                                </li>


                            @endif



{{--

                            <!-- User Profile-->
                            <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Personal</span></li>
                            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span class="hide-menu">Dashboard <span class="badge badge-pill badge-success">5</span></span></a>
                                <ul aria-expanded="false" class="collapse  first-level">
                                    <li class="sidebar-item"><a href="index.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Modern Dashboard  </span></a></li>
                                    <li class="sidebar-item"><a href="index2.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Awesome Dashboard </span></a></li>
                                    <li class="sidebar-item"><a href="index3.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Classy Dashboard </span></a></li>
                                    <li class="sidebar-item"><a href="index4.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Analytical Dashboard </span></a></li>
                                    <li class="sidebar-item"><a href="index5.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Minimal Dashboard </span></a></li>
                                </ul>
                            </li>
                            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="sidebar" class="feather-icon"></i><span class="hide-menu">Sidebar Type </span></a>
                                <ul aria-expanded="false" class="collapse  first-level">
                                    <li class="sidebar-item"><a href="sidebar-type-minisidebar.html" class="sidebar-link"><i class="mdi mdi-view-quilt"></i><span class="hide-menu"> Minisidebar </span></a></li>
                                    <li class="sidebar-item"><a href="sidebar-type-iconsidebar.html" class="sidebar-link"><i class="mdi mdi-view-parallel"></i><span class="hide-menu"> Icon Sidebar </span></a></li>
                                    <li class="sidebar-item"><a href="sidebar-type-overlaysidebar.html" class="sidebar-link"><i class="mdi mdi-view-day"></i><span class="hide-menu"> Overlay Sidebar </span></a></li>
                                    <li class="sidebar-item"><a href="sidebar-type-fullsidebar.html" class="sidebar-link"><i class="mdi mdi-view-array"></i><span class="hide-menu"> Full Sidebar </span></a></li>
                                    <li class="sidebar-item"><a href="sidebar-type-horizontalsidebar.html" class="sidebar-link"><i class="mdi mdi-view-module"></i><span class="hide-menu"> Horizontal Sidebar </span></a></li>
                                </ul>
                            </li>
                            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="clipboard" class="feather-icon"></i><span class="hide-menu">Page Layouts </span></a>
                                <ul aria-expanded="false" class="collapse  first-level">
                                    <li class="sidebar-item"><a href="layout-inner-fixed-left-sidebar.html" class="sidebar-link"><i class="mdi mdi-format-align-left"></i><span class="hide-menu"> Inner Fixed Left Sidebar </span></a></li>
                                    <li class="sidebar-item"><a href="layout-inner-fixed-right-sidebar.html" class="sidebar-link"><i class="mdi mdi-format-align-right"></i><span class="hide-menu"> Inner Fixed Right Sidebar </span></a></li>
                                    <li class="sidebar-item"><a href="layout-inner-left-sidebar.html" class="sidebar-link"><i class="mdi mdi-format-float-left"></i><span class="hide-menu"> Inner Left Sidebar </span></a></li>
                                    <li class="sidebar-item"><a href="layout-inner-right-sidebar.html" class="sidebar-link"><i class="mdi mdi-format-float-right"></i><span class="hide-menu"> Inner Right Sidebar </span></a></li>
                                    <li class="sidebar-item"><a href="page-layout-fixed-header.html" class="sidebar-link"><i class="mdi mdi-view-quilt"></i><span class="hide-menu"> Fixed Header </span></a></li>
                                    <li class="sidebar-item"><a href="page-layout-fixed-sidebar.html" class="sidebar-link"><i class="mdi mdi-view-parallel"></i><span class="hide-menu"> Fixed Sidebar </span></a></li>
                                    <li class="sidebar-item"><a href="page-layout-fixed-header-sidebar.html" class="sidebar-link"><i class="mdi mdi-view-column"></i><span class="hide-menu"> Fixed Header &amp; Sidebar </span></a></li>
                                    <li class="sidebar-item"><a href="page-layout-boxed-layout.html" class="sidebar-link"><i class="mdi mdi-view-carousel"></i><span class="hide-menu"> Box Layout </span></a></li>
                                </ul>
                            </li>
                            <li class="nav-devider"></li>
                            <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Apps</span></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="app-chats.html" aria-expanded="false"><i data-feather="message-circle" class="feather-icon"></i><span class="hide-menu">Chat Apps</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="app-calendar.html" aria-expanded="false"><i data-feather="calendar" class="feather-icon"></i><span class="hide-menu">Calender</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="app-taskboard.html" aria-expanded="false"><i data-feather="layout" class="feather-icon"></i><span class="hide-menu">Taskboard</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="app-notes.html" aria-expanded="false"><i data-feather="book" class="feather-icon"></i><span class="hide-menu">Notes</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="app-todo.html" aria-expanded="false"><i data-feather="check-circle" class="feather-icon"></i><span class="hide-menu">Todo</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="app-invoice.html" aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span class="hide-menu">Invoice</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="app-contacts.html" aria-expanded="false"><i data-feather="phone" class="feather-icon"></i><span class="hide-menu">Contact</span></a></li>

                            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="mail" class="feather-icon"></i><span class="hide-menu">Inbox </span></a>
                                <ul aria-expanded="false" class="collapse  first-level">
                                    <li class="sidebar-item"><a href="inbox-email.html" class="sidebar-link"><i class="mdi mdi-email"></i><span class="hide-menu"> Email </span></a></li>
                                    <li class="sidebar-item"><a href="inbox-email-detail.html" class="sidebar-link"><i class="mdi mdi-email-alert"></i><span class="hide-menu"> Email Detail </span></a></li>
                                    <li class="sidebar-item"><a href="inbox-email-compose.html" class="sidebar-link"><i class="mdi mdi-email-secure"></i><span class="hide-menu"> Email Compose </span></a></li>
                                </ul>
                            </li>
                            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="bookmark" class="feather-icon"></i><span class="hide-menu">Ticket </span></a>
                                <ul aria-expanded="false" class="collapse  first-level">
                                    <li class="sidebar-item"><a href="ticket-list.html" class="sidebar-link"><i class="mdi mdi-book-multiple"></i><span class="hide-menu"> Ticket List </span></a></li>
                                    <li class="sidebar-item"><a href="ticket-detail.html" class="sidebar-link"><i class="mdi mdi-book-plus"></i><span class="hide-menu"> Ticket Detail </span></a></li>
                                </ul>
                            </li>
                            <li class="nav-devider"></li>
                            <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">UI</span></li>
                            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="cpu" class="feather-icon"></i><span class="hide-menu">Ui Elements </span></a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item"><a href="ui-buttons.html" class="sidebar-link"><i class="mdi mdi-toggle-switch"></i><span class="hide-menu"> Buttons</span></a></li>
                                    <li class="sidebar-item"><a href="ui-modals.html" class="sidebar-link"><i class="mdi mdi-tablet"></i><span class="hide-menu"> Modals</span></a></li>
                                    <li class="sidebar-item"><a href="ui-tab.html" class="sidebar-link"><i class="mdi mdi-sort-variant"></i><span class="hide-menu"> Tab</span></a></li>
                                    <li class="sidebar-item"><a href="ui-tooltip-popover.html" class="sidebar-link"><i class="mdi mdi-image-filter-vintage"></i><span class="hide-menu"> Tooltip &amp; Popover</span></a></li>
                                    <li class="sidebar-item"><a href="ui-notification.html" class="sidebar-link"><i class="mdi mdi-message-bulleted"></i><span class="hide-menu"> Notification</span></a></li>
                                    <li class="sidebar-item"><a href="ui-progressbar.html" class="sidebar-link"><i class="mdi mdi-poll"></i><span class="hide-menu"> Progressbar</span></a></li>
                                    <li class="sidebar-item"><a href="ui-typography.html" class="sidebar-link"><i class="mdi mdi-format-line-spacing"></i><span class="hide-menu"> Typography</span></a></li>
                                    <li class="sidebar-item"><a href="ui-bootstrap.html" class="sidebar-link"><i class="mdi mdi-bootstrap"></i><span class="hide-menu"> Bootstrap Ui</span></a></li>
                                    <li class="sidebar-item"><a href="ui-breadcrumb.html" class="sidebar-link"><i class="mdi mdi-equal"></i><span class="hide-menu"> Breadcrumb</span></a></li>
                                    <li class="sidebar-item"><a href="ui-list-media.html" class="sidebar-link"><i class="mdi mdi-file-video"></i><span class="hide-menu"> List Media</span></a></li>
                                    <li class="sidebar-item"><a href="ui-grid.html" class="sidebar-link"><i class="mdi mdi-view-module"></i><span class="hide-menu"> Grid</span></a></li>
                                    <li class="sidebar-item"><a href="ui-carousel.html" class="sidebar-link"><i class="mdi mdi-view-carousel"></i><span class="hide-menu"> Carousel</span></a></li>
                                    <li class="sidebar-item"><a href="ui-scrollspy.html" class="sidebar-link"><i class="mdi mdi-application"></i><span class="hide-menu"> Scrollspy</span></a></li>
                                    <li class="sidebar-item"><a href="ui-toasts.html" class="sidebar-link"><i class="mdi mdi-credit-card-scan"></i><span class="hide-menu"> Toasts</span></a></li>
                                    <li class="sidebar-item"><a href="ui-spinner.html" class="sidebar-link"><i class="mdi mdi-apple-safari"></i><span class="hide-menu"> Spinner</span></a></li>
                                </ul>
                            </li>
                            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="copy" class="feather-icon"></i><span class="hide-menu">Cards</span></a>
                                <ul aria-expanded="false" class="collapse  first-level">
                                    <li class="sidebar-item"><a href="ui-cards.html" class="sidebar-link"><i class="mdi mdi-layers"></i><span class="hide-menu"> Basic Cards</span></a></li>
                                    <li class="sidebar-item"><a href="ui-card-customs.html" class="sidebar-link"><i class="mdi mdi-credit-card-scan"></i><span class="hide-menu">Custom Cards</span></a></li>
                                    <li class="sidebar-item"><a href="ui-card-weather.html" class="sidebar-link"><i class="mdi mdi-weather-fog"></i><span class="hide-menu">Weather Cards</span></a></li>
                                    <li class="sidebar-item"><a href="ui-card-draggable.html" class="sidebar-link"><i class="mdi mdi-bandcamp"></i><span class="hide-menu">Draggable Cards</span></a></li>
                                </ul>
                            </li>
                            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="hard-drive" class="feather-icon"></i><span class="hide-menu">Components</span></a>
                                <ul aria-expanded="false" class="collapse  first-level">
                                    <li class="sidebar-item"><a href="component-sweetalert.html" class="sidebar-link"><i class="mdi mdi-layers"></i><span class="hide-menu"> Sweet Alert</span></a></li>
                                    <li class="sidebar-item"><a href="component-nestable.html" class="sidebar-link"><i class="mdi mdi-credit-card-scan"></i><span class="hide-menu">Nestable</span></a></li>
                                    <li class="sidebar-item"><a href="component-noui-slider.html" class="sidebar-link"><i class="mdi mdi-weather-fog"></i><span class="hide-menu">Noui slider</span></a></li>
                                    <li class="sidebar-item"><a href="component-rating.html" class="sidebar-link"><i class="mdi mdi-bandcamp"></i><span class="hide-menu">Rating</span></a></li>
                                    <li class="sidebar-item"><a href="component-toastr.html" class="sidebar-link"><i class="mdi mdi-poll"></i><span class="hide-menu">Toastr</span></a></li>
                                </ul>
                            </li>
                            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="grid" class="feather-icon"></i><span class="hide-menu">Widgets </span></a>
                                <ul aria-expanded="false" class="collapse  first-level">
                                    <li class="sidebar-item"><a href="widgets-apps.html" class="sidebar-link"><i class="mdi mdi-comment-processing-outline"></i><span class="hide-menu"> Apps Widgets  </span></a></li>
                                    <li class="sidebar-item"><a href="widgets-data.html" class="sidebar-link"><i class="mdi mdi-calendar"></i><span class="hide-menu"> Data Widgets  </span></a></li>
                                    <li class="sidebar-item"><a href="widgets-charts.html" class="sidebar-link"><i class="mdi mdi-bulletin-board"></i><span class="hide-menu"> Charts Widgets</span></a></li>
                                </ul>
                            </li>
                            <li class="nav-devider"></li>
                            <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Forms</span></li>
                            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="layers" class="feather-icon"></i><span class="hide-menu">Form Elements</span></a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item"><a href="form-inputs.html" class="sidebar-link"><i class="mdi mdi-priority-low"></i><span class="hide-menu"> Forms Input</span></a></li>
                                    <li class="sidebar-item"><a href="form-input-groups.html" class="sidebar-link"><i class="mdi mdi-rounded-corner"></i><span class="hide-menu"> Input Groups</span></a></li>
                                    <li class="sidebar-item"><a href="form-input-grid.html" class="sidebar-link"><i class="mdi mdi-select-all"></i><span class="hide-menu"> Input Grid</span></a></li>
                                    <li class="sidebar-item"><a href="form-checkbox-radio.html" class="sidebar-link"><i class="mdi mdi-shape-plus"></i><span class="hide-menu"> Checkboxes &amp; Radios</span></a></li>
                                    <li class="sidebar-item"><a href="form-bootstrap-touchspin.html" class="sidebar-link"><i class="mdi mdi-switch"></i><span class="hide-menu"> Bootstrap Touchspin</span></a></li>
                                    <li class="sidebar-item"><a href="form-bootstrap-switch.html" class="sidebar-link"><i class="mdi mdi-toggle-switch-off"></i><span class="hide-menu"> Bootstrap Switch</span></a></li>
                                    <li class="sidebar-item"><a href="form-select2.html" class="sidebar-link"><i class="mdi mdi-relative-scale"></i><span class="hide-menu"> Select2</span></a></li>
                                    <li class="sidebar-item"><a href="form-dual-listbox.html" class="sidebar-link"><i class="mdi mdi-tab-unselected"></i><span class="hide-menu"> Dual Listbox</span></a></li>
                                </ul>
                            </li>
                            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span class="hide-menu">Form Layouts</span></a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item"><a href="form-basic.html" class="sidebar-link"><i class="mdi mdi-vector-difference-ba"></i><span class="hide-menu"> Basic Forms</span></a></li>
                                    <li class="sidebar-item"><a href="form-material.html" class="sidebar-link"><i class="mdi mdi-vector-difference-ba"></i><span class="hide-menu"> Material Forms</span></a></li>
                                    <li class="sidebar-item"><a href="form-horizontal.html" class="sidebar-link"><i class="mdi mdi-file-document-box"></i><span class="hide-menu"> Form Horizontal</span></a></li>
                                    <li class="sidebar-item"><a href="form-actions.html" class="sidebar-link"><i class="mdi mdi-code-greater-than"></i><span class="hide-menu"> Form Actions</span></a></li>
                                    <li class="sidebar-item"><a href="form-row-separator.html" class="sidebar-link"><i class="mdi mdi-code-equal"></i><span class="hide-menu"> Row Separator</span></a></li>
                                    <li class="sidebar-item"><a href="form-bordered.html" class="sidebar-link"><i class="mdi mdi-flip-to-front"></i><span class="hide-menu"> Form Bordered</span></a></li>
                                    <li class="sidebar-item"><a href="form-striped-row.html" class="sidebar-link"><i class="mdi mdi-content-duplicate"></i><span class="hide-menu"> Striped Rows</span></a></li>
                                    <li class="sidebar-item"><a href="form-detail.html" class="sidebar-link"><i class="mdi mdi-cards-outline"></i><span class="hide-menu"> Form Detail</span></a></li>
                                </ul>
                            </li>
                            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="package" class="feather-icon"></i><span class="hide-menu">Form Addons</span></a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item"><a href="form-paginator.html" class="sidebar-link"><i class="mdi mdi-export"></i><span class="hide-menu"> Paginator</span></a></li>
                                    <li class="sidebar-item"><a href="form-img-cropper.html" class="sidebar-link"><i class="mdi mdi-crop"></i><span class="hide-menu"> Image Cropper</span></a></li>
                                    <li class="sidebar-item"><a href="form-dropzone.html" class="sidebar-link"><i class="mdi mdi-crosshairs-gps"></i><span class="hide-menu"> Dropzone</span></a></li>
                                    <li class="sidebar-item"><a href="form-mask.html" class="sidebar-link"><i class="mdi mdi-box-shadow"></i><span class="hide-menu"> Form Mask</span></a></li>
                                    <li class="sidebar-item"><a href="form-typeahead.html" class="sidebar-link"><i class="mdi mdi-cards-variant"></i><span class="hide-menu"> Form Typehead</span></a></li>
                                </ul>
                            </li>
                            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="check-square" class="feather-icon"></i><span class="hide-menu">Form Validation</span></a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item"><a href="form-bootstrap-validation.html" class="sidebar-link"><i class="mdi mdi-credit-card-scan"></i><span class="hide-menu"> Bootstrap Validation</span></a></li>
                                    <li class="sidebar-item"><a href="form-custom-validation.html" class="sidebar-link"><i class="mdi mdi-credit-card-plus"></i><span class="hide-menu"> Custom Validation</span></a></li>
                                </ul>
                            </li>
                            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="droplet" class="feather-icon"></i><span class="hide-menu">Form Pickers</span></a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item"><a href="form-picker-colorpicker.html" class="sidebar-link"><i class="mdi mdi-calendar-plus"></i><span class="hide-menu"> Form Colorpicker</span></a></li>
                                    <li class="sidebar-item"><a href="form-picker-datetimepicker.html" class="sidebar-link"><i class="mdi mdi-calendar-clock"></i><span class="hide-menu"> Form Datetimepicker</span></a></li>
                                    <li class="sidebar-item"><a href="form-picker-bootstrap-rangepicker.html" class="sidebar-link"><i class="mdi mdi-calendar-range"></i><span class="hide-menu"> Form Bootstrap Rangepicker</span></a></li>
                                    <li class="sidebar-item"><a href="form-picker-bootstrap-datepicker.html" class="sidebar-link"><i class="mdi mdi-calendar-check"></i><span class="hide-menu"> Form Bootstrap Datepicker</span></a></li>
                                    <li class="sidebar-item"><a href="form-picker-material-datepicker.html" class="sidebar-link"><i class="mdi mdi-calendar-text"></i><span class="hide-menu"> Form Material Datepicker</span></a></li>
                                </ul>
                            </li>
                            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="edit" class="feather-icon"></i><span class="hide-menu">Form Editor</span></a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item"><a href="form-editor-ckeditor.html" class="sidebar-link"><i class="mdi mdi-drawing"></i><span class="hide-menu">Ck Editor</span></a></li>
                                    <li class="sidebar-item"><a href="form-editor-quill.html" class="sidebar-link"><i class="mdi mdi-drupal"></i><span class="hide-menu">Quill Editor</span></a></li>
                                    <li class="sidebar-item"><a href="form-editor-summernote.html" class="sidebar-link"><i class="mdi mdi-brightness-6"></i><span class="hide-menu">Summernote Editor</span></a></li>
                                    <li class="sidebar-item"><a href="form-editor-tinymce.html" class="sidebar-link"><i class="mdi mdi-bowling"></i><span class="hide-menu">Tinymce Edtor</span></a></li>
                                </ul>
                            </li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="form-wizard.html" aria-expanded="false"><i data-feather="credit-card" class="feather-icon"></i><span class="hide-menu">Form Wizard</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="form-repeater.html" aria-expanded="false"><i data-feather="crop" class="feather-icon"></i><span class="hide-menu">Form Repeater</span></a></li>
                            <li class="nav-devider"></li>
                            <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Tables</span></li>
                            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="codepen" class="feather-icon"></i><span class="hide-menu">Bootstrap Tables</span></a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item"><a href="table-basic.html" class="sidebar-link"><i class="mdi mdi-border-all"></i><span class="hide-menu">Basic Table </span></a></li>
                                    <li class="sidebar-item"><a href="table-dark-basic.html" class="sidebar-link"><i class="mdi mdi-border-left"></i><span class="hide-menu">Dark Basic Table </span></a></li>
                                    <li class="sidebar-item"><a href="table-sizing.html" class="sidebar-link"><i class="mdi mdi-border-outside"></i><span class="hide-menu">Sizing Table </span></a></li>
                                    <li class="sidebar-item"><a href="table-layout-coloured.html" class="sidebar-link"><i class="mdi mdi-border-bottom"></i><span class="hide-menu">Coloured Table Layout</span></a></li>
                                </ul>
                            </li>
                            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="hard-drive" class="feather-icon"></i><span class="hide-menu">Datatables</span></a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item"><a href="table-datatable-basic.html" class="sidebar-link"><i class="mdi mdi-border-vertical"></i><span class="hide-menu"> Basic Initialisation</span></a></li>
                                    <li class="sidebar-item"><a href="table-datatable-api.html" class="sidebar-link"><i class="mdi mdi-blur-linear"></i><span class="hide-menu"> API</span></a></li>
                                    <li class="sidebar-item"><a href="table-datatable-advanced.html" class="sidebar-link"><i class="mdi mdi-border-style"></i><span class="hide-menu"> Advanced Initialisation</span></a></li>
                                </ul>
                            </li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="table-jsgrid.html" aria-expanded="false"><i data-feather="disc" class="feather-icon"></i><span class="hide-menu">Table Jsgrid</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="table-responsive.html" aria-expanded="false"><i data-feather="smartphone" class="feather-icon"></i><span class="hide-menu">Table Responsive</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="table-footable.html" aria-expanded="false"><i data-feather="command" class="feather-icon"></i><span class="hide-menu">Table Footable</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="table-editable.html" aria-expanded="false"><i data-feather="edit-2" class="feather-icon"></i><span class="hide-menu">Table Editable</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="table-bootstrap.html" aria-expanded="false"><i data-feather="target" class="feather-icon"></i><span class="hide-menu">Table Bootstrap</span></a></li>
                            <li class="nav-devider"></li>
                            <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Charts</span></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="chart-morris.html" aria-expanded="false"><i data-feather="loader" class="feather-icon"></i><span class="hide-menu"> Morris Chart</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="chart-chart-js.html" aria-expanded="false"><i data-feather="pie-chart" class="feather-icon"></i><span class="hide-menu">Chartjs</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="chart-sparkline.html" aria-expanded="false"><i data-feather="radio" class="feather-icon"></i><span class="hide-menu">Sparkline Chart</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="chart-chartist.html" aria-expanded="false"><i data-feather="trello" class="feather-icon"></i><span class="hide-menu">Chartis Chart</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="slack" class="feather-icon"></i><span class="hide-menu">C3 Charts</span></a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item"><a href="chart-c3-axis.html" class="sidebar-link"><i class="mdi mdi-arrange-bring-to-front"></i> <span class="hide-menu">Axis Chart</span></a></li>
                                    <li class="sidebar-item"><a href="chart-c3-bar.html" class="sidebar-link"><i class="mdi mdi-arrange-send-to-back"></i> <span class="hide-menu">Bar Chart</span></a></li>
                                    <li class="sidebar-item"><a href="chart-c3-data.html" class="sidebar-link"><i class="mdi mdi-backup-restore"></i> <span class="hide-menu">Data Chart</span></a></li>
                                    <li class="sidebar-item"><a href="chart-c3-line.html" class="sidebar-link"><i class="mdi mdi-backburger"></i> <span class="hide-menu">Line Chart</span></a></li>
                                </ul>
                            </li>
                            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="bar-chart-2" class="feather-icon"></i><span class="hide-menu">Echarts</span></a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item"><a href="chart-echart-basic.html" class="sidebar-link"><i class="mdi mdi-chart-line"></i> <span class="hide-menu">Basic Charts</span></a></li>
                                    <li class="sidebar-item"><a href="chart-echart-bar.html" class="sidebar-link"><i class="mdi mdi-chart-scatterplot-hexbin"></i> <span class="hide-menu">Bar Chart</span></a></li>
                                    <li class="sidebar-item"><a href="chart-echart-pie-doughnut.html" class="sidebar-link"><i class="mdi mdi-chart-pie"></i> <span class="hide-menu">Pie &amp; Doughnut Chart</span></a></li>
                                </ul>
                            </li>
                            <li class="nav-devider"></li>
                            <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Sample Pages</span></li>
                            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="shopping-cart" class="feather-icon"></i><span class="hide-menu">Ecommerce Pages</span></a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item"><a href="eco-products.html" class="sidebar-link"><i class="mdi mdi-cards-variant"></i> <span class="hide-menu">Products</span></a></li>
                                    <li class="sidebar-item"><a href="eco-products-cart.html" class="sidebar-link"><i class="mdi mdi-cart"></i> <span class="hide-menu">Products Cart</span></a></li>
                                    <li class="sidebar-item"><a href="eco-products-edit.html" class="sidebar-link"><i class="mdi mdi-cart-plus"></i> <span class="hide-menu">Products Edit</span></a></li>
                                    <li class="sidebar-item"><a href="eco-products-detail.html" class="sidebar-link"><i class="mdi mdi-camera-burst"></i> <span class="hide-menu">Product Details</span></a></li>
                                    <li class="sidebar-item"><a href="eco-products-orders.html" class="sidebar-link"><i class="mdi mdi-chart-pie"></i> <span class="hide-menu">Product Orders</span></a></li>
                                    <li class="sidebar-item"><a href="eco-products-checkout.html" class="sidebar-link"><i class="mdi mdi-clipboard-check"></i> <span class="hide-menu">Products Checkout</span></a></li>
                                </ul>
                            </li>
                            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="book-open" class="feather-icon"></i><span class="hide-menu">Sample Pages </span></a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item"><a href="starter-kit.html" class="sidebar-link"><i class="mdi mdi-crop-free"></i> <span class="hide-menu">Starter Kit</span></a></li>
                                    <li class="sidebar-item"><a href="pages-animation.html" class="sidebar-link"><i class="mdi mdi-debug-step-over"></i> <span class="hide-menu">Animation</span></a></li>
                                    <li class="sidebar-item"><a href="pages-search-result.html" class="sidebar-link"><i class="mdi mdi-search-web"></i> <span class="hide-menu">Search Result</span></a></li>
                                    <li class="sidebar-item"><a href="pages-gallery.html" class="sidebar-link"><i class="mdi mdi-camera-iris"></i> <span class="hide-menu">Gallery</span></a></li>
                                    <li class="sidebar-item"><a href="pages-treeview.html" class="sidebar-link"><i class="mdi mdi-file-tree"></i> <span class="hide-menu">Treeview</span></a></li>
                                    <li class="sidebar-item"><a href="pages-block-ui.html" class="sidebar-link"><i class="mdi mdi-codepen"></i> <span class="hide-menu">Block UI</span></a></li>
                                    <li class="sidebar-item"><a href="pages-session-timeout.html" class="sidebar-link"><i class="mdi mdi-timer-off"></i> <span class="hide-menu">Session Timeout</span></a></li>
                                    <li class="sidebar-item"><a href="pages-session-idle-timeout.html" class="sidebar-link"><i class="mdi mdi-timer-sand-empty"></i> <span class="hide-menu">Session Idle Timeout</span></a></li>
                                    <li class="sidebar-item"><a href="pages-utility-classes.html" class="sidebar-link"><i class="mdi mdi-tune"></i> <span class="hide-menu">Helper Classes</span></a></li>
                                    <li class="sidebar-item"><a href="pages-maintenance.html" class="sidebar-link"><i class="mdi mdi-camera-iris"></i> <span class="hide-menu">Maintenance Page</span></a></li>
                                </ul>
                            </li>
                            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="lock" class="feather-icon"></i><span class="hide-menu">Authentication</span></a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item"><a href="authentication-login1.html" class="sidebar-link"><i class="mdi mdi-account-key"></i><span class="hide-menu"> Login </span></a></li>
                                    <li class="sidebar-item"><a href="authentication-login2.html" class="sidebar-link"><i class="mdi mdi-account-key"></i><span class="hide-menu"> Login 2 </span></a></li>
                                    <li class="sidebar-item"><a href="authentication-register1.html" class="sidebar-link"><i class="mdi mdi-account-plus"></i><span class="hide-menu"> Register</span></a></li>
                                    <li class="sidebar-item"><a href="authentication-register2.html" class="sidebar-link"><i class="mdi mdi-account-plus"></i><span class="hide-menu"> Register 2</span></a></li>
                                    <li class="sidebar-item"><a href="authentication-lockscreen.html" class="sidebar-link"><i class="mdi mdi-account-off"></i><span class="hide-menu"> Lockscreen</span></a></li>
                                    <li class="sidebar-item"><a href="authentication-recover-password.html" class="sidebar-link"><i class="mdi mdi-account-convert"></i><span class="hide-menu"> Recover password</span></a></li>
                                </ul>
                            </li>
                            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="users" class="feather-icon"></i><span class="hide-menu">Users</span></a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item"><a href="ui-user-card.html" class="sidebar-link"><i class="mdi mdi-account-box"></i> <span class="hide-menu"> User Card </span></a></li>
                                    <li class="sidebar-item"><a href="pages-profile.html" class="sidebar-link"><i class="mdi mdi-account-network"></i><span class="hide-menu"> User Profile</span></a></li>
                                    <li class="sidebar-item"><a href="ui-user-contacts.html" class="sidebar-link"><i class="mdi mdi-account-star-variant"></i><span class="hide-menu"> User Contact</span></a></li>
                                </ul>
                            </li>
                            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="paperclip" class="feather-icon"></i><span class="hide-menu">Invoice</span></a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item"><a href="pages-invoice.html" class="sidebar-link"><i class="mdi mdi-vector-triangle"></i><span class="hide-menu"> Invoice Layout </span></a></li>
                                    <li class="sidebar-item"><a href="pages-invoice-list.html" class="sidebar-link"><i class="mdi mdi-vector-rectangle"></i><span class="hide-menu"> Invoice List</span></a></li>
                                </ul>
                            </li>
                            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="map" class="feather-icon"></i><span class="hide-menu">Maps</span></a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item"><a href="map-google.html" class="sidebar-link"><i class="mdi mdi-google-maps"></i><span class="hide-menu"> Google Map </span></a></li>
                                    <li class="sidebar-item"><a href="map-vector.html" class="sidebar-link"><i class="mdi mdi-map-marker-radius"></i><span class="hide-menu"> Vector Map</span></a></li>
                                </ul>
                            </li>
                            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="feather" class="feather-icon"></i><span class="hide-menu">Icons</span></a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item"><a href="icon-material.html" class="sidebar-link"><i class="mdi mdi-emoticon"></i> <span class="hide-menu"> Material Icons </span></a></li>
                                    <li class="sidebar-item"><a href="icon-fontawesome.html" class="sidebar-link"><i class="mdi mdi-emoticon-cool"></i><span class="hide-menu"> Fontawesome Icons</span></a></li>
                                    <li class="sidebar-item"><a href="icon-themify.html" class="sidebar-link"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu"> Themify Icons</span></a></li>
                                    <li class="sidebar-item"><a href="icon-weather.html" class="sidebar-link"><i class="mdi mdi-weather-cloudy"></i><span class="hide-menu"> Weather Icons</span></a></li>
                                    <li class="sidebar-item"><a href="icon-simple-lineicon.html" class="sidebar-link"><i class="mdi mdi mdi-image-broken-variant"></i> <span class="hide-menu"> Simple Line icons</span></a></li>
                                    <li class="sidebar-item"><a href="icon-flag.html" class="sidebar-link"><i class="mdi mdi-flag-triangle"></i><span class="hide-menu"> Flag Icons</span></a></li>
                                </ul>
                            </li>
                            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="activity" class="feather-icon"></i><span class="hide-menu">Timeline</span></a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item"><a href="timeline-center.html" class="sidebar-link"><i class="mdi mdi-clock-fast"></i> <span class="hide-menu"> Center Timeline </span></a></li>
                                    <li class="sidebar-item"><a href="timeline-horizontal.html" class="sidebar-link"><i class="mdi mdi-clock-end"></i><span class="hide-menu"> Horizontal Timeline</span></a></li>
                                    <li class="sidebar-item"><a href="timeline-left.html" class="sidebar-link"><i class="mdi mdi-clock-in"></i><span class="hide-menu"> Left Timeline</span></a></li>
                                    <li class="sidebar-item"><a href="timeline-right.html" class="sidebar-link"><i class="mdi mdi-clock-start"></i><span class="hide-menu"> Right Timeline</span></a></li>
                                </ul>
                            </li>
                            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="mail" class="feather-icon"></i><span class="hide-menu">Email Template</span></a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item"><a href="email-templete-alert.html" class="sidebar-link"><i class="mdi mdi-message-alert"></i> <span class="hide-menu"> Alert </span></a></li>
                                    <li class="sidebar-item"><a href="email-templete-basic.html" class="sidebar-link"><i class="mdi mdi-message-bulleted"></i><span class="hide-menu"> Basic</span></a></li>
                                    <li class="sidebar-item"><a href="email-templete-billing.html" class="sidebar-link"><i class="mdi mdi-message-draw"></i><span class="hide-menu"> Billing</span></a></li>
                                    <li class="sidebar-item"><a href="email-templete-password-reset.html" class="sidebar-link"><i class="mdi mdi-message-bulleted-off"></i><span class="hide-menu"> Password-Reset</span></a></li>
                                </ul>
                            </li>
                            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="user-x" class="feather-icon"></i><span class="hide-menu">Error Pages</span></a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item"><a href="error-400.html" class="sidebar-link"><i class="mdi mdi-alert-outline"></i> <span class="hide-menu"> Error 400 </span></a></li>
                                    <li class="sidebar-item"><a href="error-403.html" class="sidebar-link"><i class="mdi mdi-alert-outline"></i><span class="hide-menu"> Error 403</span></a></li>
                                    <li class="sidebar-item"><a href="error-404.html" class="sidebar-link"><i class="mdi mdi-alert-outline"></i><span class="hide-menu"> Error 404</span></a></li>
                                    <li class="sidebar-item"><a href="error-500.html" class="sidebar-link"><i class="mdi mdi-alert-outline"></i><span class="hide-menu"> Error 500</span></a></li>
                                    <li class="sidebar-item"><a href="error-503.html" class="sidebar-link"><i class="mdi mdi-alert-outline"></i><span class="hide-menu"> Error 503</span></a></li>
                                </ul>
                            </li>
                            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i data-feather="git-pull-request" class="feather-icon"></i><span class="hide-menu">Multi level dd</span></a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><i class="mdi mdi-octagram"></i><span class="hide-menu"> item 1.1</span></a></li>
                                    <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><i class="mdi mdi-octagram"></i><span class="hide-menu"> item 1.2</span></a></li>
                                    <li class="sidebar-item"> <a class="has-arrow sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-playlist-plus"></i> <span class="hide-menu">Menu 1.3</span></a>
                                        <ul aria-expanded="false" class="collapse second-level">
                                            <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><i class="mdi mdi-octagram"></i><span class="hide-menu"> item 1.3.1</span></a></li>
                                            <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><i class="mdi mdi-octagram"></i><span class="hide-menu"> item 1.3.2</span></a></li>
                                            <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><i class="mdi mdi-octagram"></i><span class="hide-menu"> item 1.3.3</span></a></li>
                                            <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><i class="mdi mdi-octagram"></i><span class="hide-menu"> item 1.3.4</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><i class="mdi mdi-playlist-check"></i><span class="hide-menu"> item 1.4</span></a></li>
                                </ul>
                            </li>
                            <li class="nav-devider"></li>
                            <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Extra</span></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../../../Documentation/document.html" aria-expanded="false"><i data-feather="edit-3" class="feather-icon"></i><span class="hide-menu">Documentation</span></a></li>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="authentication-login1.html" aria-expanded="false"><i data-feather="log-out" class="feather-icon"></i><span class="hide-menu">Log Out</span></a></li>
                            --}}
                        </ul>
                    </nav>
                    <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->
                <!-- Bottom points-->
                <div class="sidebar-footer">
                    <!-- item-->
                    {{--<a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>--}}
                    <!-- item-->
                    <a href="{{ route("updateCredentials") }}" class="link" data-toggle="tooltip" title="Profile"><i class="fas fa-user"></i></a>
                    <!-- item-->
                    <a href="{{ route("logout") }}" class="link deconnexion" data-toggle="tooltip" title="Se déconnecter"><i class="mdi mdi-power"></i></a>

                </div>
                <!-- End Bottom points-->
            </aside>
            <!-- ============================================================== -->
            <!-- End Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Page wrapper  -->
            <!-- ============================================================== -->
            <div class="page-wrapper">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div id="pageTop" class="page-breadcrumb">
                    <div class="row">
                        <div class="col-md-5 align-self-center">
                            <h3 class="page-title">@yield("page")</h3>
                            {{--<div class="d-flex align-items-center">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="{{ route("backOfficeHomePage") }}">{{ env("APP_NAME") }}</a>
                                        </li>
                                        <li class="breadcrumb-item">Dashboard</li>
                                        <li class="breadcrumb-item active" aria-current="page">@yield("page")</li>
                                    </ol>
                                </nav>
                            </div>--}}
                        </div>

                        <div class="col-md-7 d-flex justify-content-end align-self-center d-none d-md-flex">
                            <div class="d-flex">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="{{ route("backOfficeHomePage") }}">{{ env("APP_NAME") }}</a>
                                        </li>
                                        <li class="breadcrumb-item">Dashboard</li>
                                        <li class="breadcrumb-item active" aria-current="page">@yield("page")</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
{{--

                        <div class="col-md-7 d-flex justify-content-end align-self-center d-none d-md-flex">
                            <div class="d-flex">
                                <div class="dropdown mr-2 hidden-sm-down">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> January 2020 </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> <a class="dropdown-item" href="#">February 2020</a> <a class="dropdown-item" href="#">March 2020</a> <a class="dropdown-item" href="#">April 2020</a> </div>
                                </div>
                                <button class="btn btn-success"><i class="mdi mdi-plus-circle"></i> Create</button>
                            </div>
                        </div>
--}}

                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Container fluid  -->
                <!-- ============================================================== -->
                <div class="container-fluid">
                    @yield("firstLevelLayoutBodyContent")


                </div>
                <!-- ============================================================== -->
                <!-- End Container fluid  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                <footer class="footer">
                    © 2020 {{ env("APP_NAME") }} by <a href="https://honametech.com/" target="_blank">{{ env("APP_CLT") }}</a>
                </footer>
                <!-- ============================================================== -->
                <!-- End footer -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- customizer Panel -->
        <!-- ============================================================== -->
		{{--
        <aside class="customizer">
            <a href="javascript:void(0)" class="service-panel-toggle"><i class="fa fa-spin fa-cog"></i></a>
            <div class="customizer-body">
                <ul class="nav customizer-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><i class="mdi mdi-wrench font-20"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#chat" role="tab" aria-controls="chat" aria-selected="false"><i class="mdi mdi-message-reply font-20"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"><i class="mdi mdi-star-circle font-20"></i></a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <!-- Tab 1 -->
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="p-3 border-bottom">
                            <!-- Sidebar -->
                            <h5 class="font-weight-medium mb-2 mt-2">Layout Settings</h5>
                            <div class="checkbox checkbox-info mt-2">
                                <input type="checkbox" name="theme-view" id="theme-view">
                                <label for="theme-view"> <span>Dark Theme</span> </label>
                            </div>
                            <div class="checkbox checkbox-info mt-2">
                                <input type="checkbox" class="custom-control-input sidebartoggler" name="collapssidebar" id="collapssidebar">
                                <label for="collapssidebar"> <span>Collapse Sidebar</span> </label>
                            </div>
                            <div class="checkbox checkbox-info mt-2">
                                <input type="checkbox" name="sidebar-position" id="sidebar-position">
                                <label for="sidebar-position"> <span>Fixed Sidebar</span> </label>
                            </div>
                            <div class="checkbox checkbox-info mt-2">
                                <input type="checkbox" name="header-position" id="header-position">
                                <label for="header-position"> <span>Fixed Header</span> </label>
                            </div>
                            <div class="checkbox checkbox-info mt-2">
                                <input type="checkbox" name="boxed-layout" id="boxed-layout">
                                <label for="boxed-layout"> <span>Boxed Layout</span> </label>
                            </div>
                        </div>
                        <div class="p-3 border-bottom">
                            <!-- Logo BG -->
                            <h5 class="font-weight-medium mb-2 mt-2">Logo Backgrounds</h5>
                            <ul class="theme-color m-0 p-0">
                                <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin1"></a></li>
                                <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin2"></a></li>
                                <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin3"></a></li>
                                <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin4"></a></li>
                                <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin5"></a></li>
                                <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin6"></a></li>
                            </ul>
                            <!-- Logo BG -->
                        </div>
                        <div class="p-3 border-bottom">
                            <!-- Navbar BG -->
                            <h5 class="font-weight-medium mb-2 mt-2">Navbar Backgrounds</h5>
                            <ul class="theme-color m-0 p-0">
                                <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin1"></a></li>
                                <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin2"></a></li>
                                <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin3"></a></li>
                                <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin4"></a></li>
                                <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin5"></a></li>
                                <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin6"></a></li>
                            </ul>
                            <!-- Navbar BG -->
                        </div>
                        <div class="p-3 border-bottom">
                            <!-- Logo BG -->
                            <h5 class="font-weight-medium mb-2 mt-2">Sidebar Backgrounds</h5>
                            <ul class="theme-color m-0 p-0">
                                <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin1"></a></li>
                                <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin2"></a></li>
                                <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin3"></a></li>
                                <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin4"></a></li>
                                <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin5"></a></li>
                                <li class="theme-item list-inline-item mr-1"><a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin6"></a></li>
                            </ul>
                            <!-- Logo BG -->
                        </div>
                    </div>
                    <!-- End Tab 1 -->
                    <!-- Tab 2 -->
                    <div class="tab-pane fade" id="chat" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <ul class="mailbox list-style-none mt-3">
                            <li>
                                <div class="message-center chat-scroll position-relative">
                                    <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2" id='chat_user_1' data-user-id='1'>
                                        <span  class="user-img position-relative d-inline-block"> <img src="templateFiles/monster/assets/images/users/1.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle online"></span> </span>
                                        <div class="w-75 d-inline-block v-middle pl-2">
                                            <h5 class="message-title mb-0 mt-1">Pavan kumar</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">Just see the my admin!</span> <span class="font-12 text-nowrap d-block text-muted">9:30 AM</span> </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2" id='chat_user_2' data-user-id='2'>
                                        <span  class="user-img position-relative d-inline-block"> <img src="templateFiles/monster/assets/images/users/2.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle busy"></span> </span>
                                        <div class="w-75 d-inline-block v-middle pl-2">
                                            <h5 class="message-title mb-0 mt-1">Sonu Nigam</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">I've sung a song! See you at</span> <span class="font-12 text-nowrap d-block text-muted">9:10 AM</span> </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2" id='chat_user_3' data-user-id='3'>
                                        <span  class="user-img position-relative d-inline-block"> <img src="templateFiles/monster/assets/images/users/3.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle away"></span> </span>
                                        <div class="w-75 d-inline-block v-middle pl-2">
                                            <h5 class="message-title mb-0 mt-1">Arijit Sinh</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">I am a singer!</span> <span class="font-12 text-nowrap d-block text-muted">9:08 AM</span> </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2" id='chat_user_4' data-user-id='4'>
                                        <span  class="user-img position-relative d-inline-block"> <img src="templateFiles/monster/assets/images/users/4.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle offline"></span> </span>
                                        <div class="w-75 d-inline-block v-middle pl-2">
                                            <h5 class="message-title mb-0 mt-1">Nirav Joshi</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">Just see the my admin!</span> <span class="font-12 text-nowrap d-block text-muted">9:02 AM</span> </div>
                                    </a>
                                    <!-- Message -->
                                    <!-- Message -->
                                    <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2" id='chat_user_5' data-user-id='5'>
                                        <span  class="user-img position-relative d-inline-block"> <img src="templateFiles/monster/assets/images/users/5.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle offline"></span> </span>
                                        <div class="w-75 d-inline-block v-middle pl-2">
                                            <h5 class="message-title mb-0 mt-1">Sunil Joshi</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">Just see the my admin!</span> <span class="font-12 text-nowrap d-block text-muted">9:02 AM</span> </div>
                                    </a>
                                    <!-- Message -->
                                    <!-- Message -->
                                    <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2" id='chat_user_6' data-user-id='6'>
                                        <span  class="user-img position-relative d-inline-block"> <img src="templateFiles/monster/assets/images/users/6.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle offline"></span> </span>
                                        <div class="w-75 d-inline-block v-middle pl-2">
                                            <h5 class="message-title mb-0 mt-1">Akshay Kumar</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">Just see the my admin!</span> <span class="font-12 text-nowrap d-block text-muted">9:02 AM</span> </div>
                                    </a>
                                    <!-- Message -->
                                    <!-- Message -->
                                    <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2" id='chat_user_7' data-user-id='7'>
                                        <span  class="user-img position-relative d-inline-block"> <img src="templateFiles/monster/assets/images/users/7.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle offline"></span> </span>
                                        <div class="w-75 d-inline-block v-middle pl-2">
                                            <h5 class="message-title mb-0 mt-1">Pavan kumar</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">Just see the my admin!</span> <span class="font-12 text-nowrap d-block text-muted">9:02 AM</span> </div>
                                    </a>
                                    <!-- Message -->
                                    <!-- Message -->
                                    <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2" id='chat_user_8' data-user-id='8'>
                                        <span  class="user-img position-relative d-inline-block"> <img src="templateFiles/monster/assets/images/users/8.jpg" alt="user" class="rounded-circle w-100"> <span class="profile-status rounded-circle offline"></span> </span>
                                        <div class="w-75 d-inline-block v-middle pl-2">
                                            <h5 class="message-title mb-0 mt-1">Varun Dhavan</h5> <span class="font-12 text-nowrap d-block text-muted text-truncate">Just see the my admin!</span> <span class="font-12 text-nowrap d-block text-muted">9:02 AM</span> </div>
                                    </a>
                                    <!-- Message -->
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- End Tab 2 -->
                    <!-- Tab 3 -->
                    <div class="tab-pane fade p-3" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <h6 class="mt-3 mb-3">Activity Timeline</h6>
                        <div class="steamline">
                            <div class="sl-item">
                                <div class="sl-left bg-success"> <i class="ti-user"></i></div>
                                <div class="sl-right">
                                    <div class="font-weight-medium">Meeting today <span class="sl-date"> 5pm</span></div>
                                    <div class="desc">you can write anything </div>
                                </div>
                            </div>
                            <div class="sl-item">
                                <div class="sl-left bg-info"><i class="fas fa-image"></i></div>
                                <div class="sl-right">
                                    <div class="font-weight-medium">Send documents to Clark</div>
                                    <div class="desc">Lorem Ipsum is simply </div>
                                </div>
                            </div>
                            <div class="sl-item">
                                <div class="sl-left"> <img class="rounded-circle" alt="user" src="templateFiles/monster/assets/images/users/2.jpg"> </div>
                                <div class="sl-right">
                                    <div class="font-weight-medium">Go to the Doctor <span class="sl-date">5 minutes ago</span></div>
                                    <div class="desc">Contrary to popular belief</div>
                                </div>
                            </div>
                            <div class="sl-item">
                                <div class="sl-left"> <img class="rounded-circle" alt="user" src="templateFiles/monster/assets/images/users/1.jpg"> </div>
                                <div class="sl-right">
                                    <div><a href="javascript:void(0)">Stephen</a> <span class="sl-date">5 minutes ago</span></div>
                                    <div class="desc">Approve meeting with tiger</div>
                                </div>
                            </div>
                            <div class="sl-item">
                                <div class="sl-left bg-primary"> <i class="ti-user"></i></div>
                                <div class="sl-right">
                                    <div class="font-weight-medium">Meeting today <span class="sl-date"> 5pm</span></div>
                                    <div class="desc">you can write anything </div>
                                </div>
                            </div>
                            <div class="sl-item">
                                <div class="sl-left bg-info"><i class="fas fa-image"></i></div>
                                <div class="sl-right">
                                    <div class="font-weight-medium">Send documents to Clark</div>
                                    <div class="desc">Lorem Ipsum is simply </div>
                                </div>
                            </div>
                            <div class="sl-item">
                                <div class="sl-left"> <img class="rounded-circle" alt="user" src="templateFiles/monster/assets/images/users/4.jpg"> </div>
                                <div class="sl-right">
                                    <div class="font-weight-medium">Go to the Doctor <span class="sl-date">5 minutes ago</span></div>
                                    <div class="desc">Contrary to popular belief</div>
                                </div>
                            </div>
                            <div class="sl-item">
                                <div class="sl-left"> <img class="rounded-circle" alt="user" src="templateFiles/monster/assets/images/users/6.jpg"> </div>
                                <div class="sl-right">
                                    <div><a href="javascript:void(0)">Stephen</a> <span class="sl-date">5 minutes ago</span></div>
                                    <div class="desc">Approve meeting with tiger</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Tab 3 -->
                </div>
            </div>
        </aside>
        <div class="chat-windows"></div>
		--}}
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="{{ asset("templateFiles/monster/assets/libs/jquery/dist/jquery.min.js") }}"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="{{ asset("templateFiles/monster/assets/libs/popper.js/dist/umd/popper.min.js") }}"></script>
        <script src="{{ asset("templateFiles/monster/assets/libs/bootstrap/dist/js/bootstrap.min.js") }}"></script>
        <!-- apps -->
        <script src="{{ asset("templateFiles/monster/dist/js/app.min.js") }}"></script>
        <script src="{{ asset("templateFiles/monster/dist/js/app.init.js") }}"></script>
        <script src="{{ asset("templateFiles/monster/dist/js/app-style-switcher.js") }}"></script>
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="{{ asset("templateFiles/monster/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js") }}"></script>
        <script src="{{ asset("templateFiles/monster/assets/libs/jquery-sparkline/jquery.sparkline.min.js") }}"></script>
        <!--Wave Effects -->
        <script src="{{ asset("templateFiles/monster/dist/js/waves.js") }}"></script>
        <!--Menu sidebar -->
        <script src="{{ asset("templateFiles/monster/dist/js/sidebarmenu.js") }}"></script>
        <!--Custom JavaScript -->
        <script src="{{ asset("templateFiles/monster/dist/js/feather.min.js") }}"></script>
        <script src="{{ asset("templateFiles/monster/dist/js/custom.min.js") }}"></script>
        <!-- ############################################################### -->
        <!-- This Page Js Files Here -->
        <!-- ############################################################### -->
        <script src="{{ asset("templateFiles/monster/assets/libs/chartist/dist/chartist.min.js") }}"></script>
        <script src="{{ asset("templateFiles/monster/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js") }}"></script>
        <script src="{{ asset("templateFiles/monster/assets/libs/echarts/dist/echarts.min.js") }}"></script>
        <!--c3 charts -->
        <script src="{{ asset("templateFiles/monster/assets/libs/d3/dist/d3.min.js") }}"></script>
        <script src="{{ asset("templateFiles/monster/assets/libs/c3/c3.min.js") }}"></script>
        <script src="{{ asset("templateFiles/monster/dist/js/pages/dashboards/dashboard1.js") }}"></script>


        <!-- Required datatable js -->
        <script src="{{ asset("vendorFiles/datatables/jquery.dataTables.min.js") }}"></script>
        <script src="{{ asset("vendorFiles/datatables/dataTables.bootstrap4.min.js") }}"></script>
        <!-- Buttons examples -->
        <script src="{{ asset("vendorFiles/datatables/dataTables.buttons.min.js") }}"></script>
        <script src="{{ asset("vendorFiles/datatables/buttons.bootstrap4.min.js") }}"></script>
        <script src="{{ asset("vendorFiles/datatables/jszip.min.js") }}"></script>
        <script src="{{ asset("vendorFiles/datatables/pdfmake.min.js") }}"></script>
        <script src="{{ asset("vendorFiles/datatables/vfs_fonts.js") }}"></script>
        <script src="{{ asset("vendorFiles/datatables/buttons.html5.min.js") }}"></script>
        <script src="{{ asset("vendorFiles/datatables/buttons.print.min.js") }}"></script>
        <script src="{{ asset("vendorFiles/datatables/buttons.colVis.min.js") }}"></script>
        <!-- Responsive examples -->
        <script src="{{ asset("vendorFiles/datatables/dataTables.responsive.min.js") }}"></script>
        <script src="{{ asset("vendorFiles/datatables/responsive.bootstrap4.min.js") }}"></script>


        <script src="{{ asset("vendorFiles/notifications/notify.min.js") }}"></script>
        <script src="{{ asset("vendorFiles/notifications/notify-metro.js") }}"></script>
        <script src="{{ asset("vendorFiles/notifications/notifications.js") }}"></script>

		<script src="{{ asset("vendorFiles/sweet-alert2/sweetalert2.min.js") }}"></script>
		<script src="{{ asset("vendorFiles/jquery.sweet-alert.initS.js") }}"></script>

        <script src="{{ asset("vendorFiles/select2/js/select2.full.min.js") }}"></script>


        @include("myViews.shared.report")


		<script>



			async function confirmAction()
			{
                let style = "warning",
					position = "top center",
					title = "Are you nuts?!";

                let choice = null;

                var icon = "fa fa-adjust";
                if(style == "error"){
                    icon = "fa fa-exclamation";
                }else if(style == "warning"){
                    icon = "fa fa-warning";
                }else if(style == "success"){
                    icon = "fa fa-check";
                }else if(style == "info"){
                    icon = "fa fa-question";
                }else{
                    icon = "fa fa-adjust";
                }
                $.notify({
                    title: title,
                    text: 'Are you sure you want to do nothing?<div class="clearfix"></div><br><a class="btn btn-sm btn-default yes">Yes</a> <a class="btn btn-sm btn-danger no">No</a>',
                    image: "<i class='"+icon+"'></i>"
                }, {
                    style: 'metro',
                    className: style,
                    globalPosition:position,
                    showAnimation: "show",
                    showDuration: 0,
                    hideDuration: 0,
                    autoHide: false,
                    clickToHide: false
                });


                //listen for click events from this style
                $(document).on('click', '.notifyjs-metro-base .no', function() {
                    //programmatically trigger propogating hide event
                    $(this).trigger('notify-hide');

                    choice = false;
                    //return false;
                });
                $(document).on('click', '.notifyjs-metro-base .yes', function() {
                    //show button text
                    //alert($(this).text() + " clicked!");
                    //hide notification
                    $(this).trigger('notify-hide');

                    choice = true;
                   // return true;
                });

                return choice;
			    //let choice = $.Notification.confirm('warning','top center', 'Are you nuts?!');
			    //console.log($.Notification.confirm('warning','top center', 'Are you nuts?!'));
			}
		</script>


        <script>
            $(document).ready(function(){

                $("body").on("submit","form",function(e){
                    /*if(!confirm("Soumettre le formulaire ?"))
                        return false;*/
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

        <script>

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

        <script>
            $(document).ready(function(){
                    $(".select2").select2();
               // $(".select2").css("width", "100%");
            });
        </script>


        @yield("pageJs")

    </body>

</html>
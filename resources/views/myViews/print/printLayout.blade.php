<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ env("APP_NAME") }} - @yield("page","Impression")</title>
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta content="Ekoué LOGOSU-TEKO" name="author" />

        <!-- App favicon -->
        <link media="all" rel="shortcut icon" href="{{ asset("myFiles/images/logo/logo.png") }}">


        <!--Morris Chart CSS -->
        <link media="all" rel="stylesheet" href="{{ asset("templateFiles/velonic/plugins/morris/morris.css") }}">


        <!-- sweet alerts -->
        <link media="all" href="{{ asset("templateFiles/velonic/plugins/sweet-alert2/sweetalert2.min.css") }}" rel="stylesheet">

        <link media="all" href="{{ asset("templateFiles/velonic/plugins/notifications/notification.css") }}" rel="stylesheet" />

        <!-- DataTables -->
        <link media="all" href="{{ asset("templateFiles/velonic/plugins/datatables/dataTables.bootstrap4.min.css") }}" rel="stylesheet" type="text/css" />
        <link media="all" href="{{ asset("templateFiles/velonic/plugins/datatables/buttons.bootstrap4.min.css") }}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
    {{--<link media="all" href="{{ asset("templateFiles/velonic/plugins/datatables/responsive.bootstrap4.min.css") }}" rel="stylesheet" type="text/css" />--}}

    <!-- App css -->
        <link media="all" href="{{ asset("templateFiles/velonic/assets/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
        <link media="all" href="{{ asset("templateFiles/velonic/assets/css/icons.css") }}" rel="stylesheet" type="text/css" />
        <link media="all" href="{{ asset("templateFiles/velonic/assets/css/metismenu.min.css") }}" rel="stylesheet" type="text/css" />
        <link media="all" href="{{ asset("templateFiles/velonic/assets/css/app.css") }}" rel="stylesheet" type="text/css" />
        <!-- your custom css -->
        <link media="all" href="{{ asset("templateFiles/velonic/assets/css/style.css") }}" rel="stylesheet" type="text/css" />

        <script src="{{ asset("templateFiles/velonic/assets/js/modernizr.min.js") }}"></script>

        <!-- ------------------- -->

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

        <script src="{{ asset("myFiles/js/chart/morris.js") }}"></script>

        @yield("pageCSS")


        @if(isset($orientation))
            <style media="all">
                @page {
                    size: {{ $orientation }};
                }
            </style>
        @endif


    </head>


    <body>
        <div class="container-fluid">

            {{-- en-tete de page du pdf généré par mpdf --}}
            {{--@if(isset($headerContent))
                <header>
                    <div class="row">
                        <div class="col">
                            {{ $headerContent }}
                        </div>
                    </div>
                </header>
            @endif--}}

            <div class="row">
                <div class="col">
                    {!! $htmlToPrint !!}
                </div>
            </div>


            {{-- pied de page du pdf généré par mpdf --}}
            {{--@if(isset($footerContent))
                <footer>
                   <div class="row">
                       <div class="col">
                           {{ $footerContent }}
                       </div>
                    </div>
                </footer>
            @endif--}}


        </div>




        <script>
            $(document).ready(function(){
                window.print()
            })
        </script>

        @yield("pageJs")

    </body>

</html>
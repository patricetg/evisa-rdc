<!DOCTYPE html>
<html dir="ltr">
    
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
        <link href="{{ asset("templateFiles/monster/dist/css/style.min.css") }}" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <link href="{{ asset("myFiles/css/monster.css") }}" rel="stylesheet" />
        <link href="{{ asset("myFiles/css/style.css") }}" rel="stylesheet" />

        <link href="{{ asset("vendorFiles/notifications/notification.css") }}" rel="stylesheet" />

		<style>
			.input-group{
				border: 0.5px #00B321 solid;
				border-radius: 0.5rem;
			}
		</style>

    </head>
    
    <body>
        <div class="main-wrapper">
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
            <!-- Preloader - style you can find in spinners.css -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Login box.scss -->
            <!-- ============================================================== -->

			<div class="row h-100vh">
				<div class="col-md-8 p-0 d-none d-md-block">
					<img src="{{ asset("myFiles/images/login-register.jpg") }}" class="h-100vh w-100" alt=""/>
				</div>
				<div class="col-md-4 bg-white p-4" style="background:url('{{ asset("myFiles/images/login-form.jpg") }}') no-repeat bottom center;">

					<div class="logo text-center">
                                <span class="db">

									<img src="{{ asset("myFiles/images/logo/logo.png") }}" class="my-2" title="APSED" width="70" alt="logo" />
									<br/>
                            <img src="{{ asset("myFiles/images/logo/logo-text.png") }}" title="APSED" width="110" alt="Home" />

								</span>

						<br/>
						<p class="mt-1" style="line-height: 0.9; font-size: 0.7rem;" >
							Application de Signature
							<br/>
							De Document Electronique
						</p>

						</br>
						{{-- <h3 class="my-3">
							 @yield("page")
						 </h3>--}}
					</div>

					@yield("authBodyContent")

					<div class="row">
						<div class="col text-center">
							© 2020 {{ env("APP_NAME") }} by <a href="https://honametech.com/" target="_blank">{{ env("APP_CLT") }}</a>
						</div>
					</div>


				</div>
			</div>


            <!-- ============================================================== -->
            <!-- Login box.scss -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Page wrapper scss in scafholding.scss -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Page wrapper scss in scafholding.scss -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right Sidebar -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right Sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- All Required js -->
        <!-- ============================================================== -->
        <script src="{{ asset("templateFiles/monster/assets/libs/jquery/dist/jquery.min.js") }}"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="{{ asset("templateFiles/monster/assets/libs/popper.js/dist/umd/popper.min.js") }}"></script>
        <script src="{{ asset("templateFiles/monster/assets/libs/bootstrap/dist/js/bootstrap.min.js") }}"></script>



        <script src="{{ asset("vendorFiles/notifications/notify.min.js") }}"></script>
        <script src="{{ asset("vendorFiles/notifications/notify-metro.js") }}"></script>
        <script src="{{ asset("vendorFiles/notifications/notifications.js") }}"></script>


        <!-- ============================================================== -->
        <!-- This page plugin js -->
        <!-- ============================================================== -->
        <script>
            $('[data-toggle="tooltip"]').tooltip();
            $(".preloader").fadeOut();
            // ============================================================== 
            // Login and Recover Password 
            // ============================================================== 
           /* $('#to-recover').on("click", function() {
                $("#loginform").slideUp();
                $("#recoverform").fadeIn();
            });*/
        </script>


        @include("myViews.shared.report")

        @yield("pageJs")
    </body>

</html>




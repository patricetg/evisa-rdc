<!DOCTYPE html>
<html lang="fr" class="no-js">
    <head>
        <meta charset="utf-8"/>
        <title>
            {{ env("APP_NAME") }} - @yield("page")
        </title>
        <meta  name="description" content="{{ env("APP_DESC") }}" />
        <meta name="keywords" content="{{ env("APP_KEYWORDS") }}">
        <meta  name="author" content="{{ env("APP_AUTHOR") }}" />
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="theme-color" content="#fff">
        <!--website-favicon-->
        <link rel="icon" href="{{ asset("myFiles/images/logo/logo-2.png") }}">
        <!--plugin-css-->
        <link href="{{ asset("templateFiles/niwax/css/bootstrap.min.css") }}" rel="stylesheet">
        <link href="{{ asset("templateFiles/niwax/css/plugin.min.css") }}" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <!-- template-style-->
        <link href="{{ asset("templateFiles/niwax/css/style.css") }}" rel="stylesheet">
        <link href="{{ asset("templateFiles/niwax/css/responsive.css") }}" rel="stylesheet">
        <link href="{{ asset("templateFiles/niwax/css/darkmode.css") }}" rel="stylesheet">
        <style>html { scroll-behavior: smooth;}</style>


        <link href="{{ asset("vendorFiles/notifications/notification.css") }}" rel="stylesheet" />
        <link href="{{ asset("vendorFiles/sweet-alert2/sweetalert2.min.css") }}" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="{{ asset("vendorFiles/font-awesome/css/all.min.css") }}">
        <link href="{{ asset("myFiles/css/style.css") }}" rel="stylesheet">

    </head>
    <body>
        <!--Start Preloader -->
        <div class="onloadpage" id="page_loader">
            <div class="pre-content">
                <div class="logo-pre"><img src="{{ asset("myFiles/images/logo/logo-2.png") }}" alt="Logo" class="img-fluid" /></div>
                <div class="pre-text- text-radius text-light text-animation bg-b"> {{ env("APP_NAME") }} </div>
            </div>
        </div>
        <!--End Preloader -->

        <!--Start Header -->
        <header class="nav-bg-w main-header navfix fixed-top menu-white">
            <div class="container m-pad">
                <div class="menu-header">
                    <div class="dsk-logo">
                        <a class="nav-brand" href="{{ route("frontOfficeHomePage") }}">
                            <img src="{{ asset("myFiles/images/logo/logo_text-light.png") }}" alt="Logo" class="mega-white-logo"/>
                            <img src="{{ asset("myFiles/images/logo/logo_text.png") }}" alt="Logo" class="mega-darks-logo"/>
                            {{--<img src="{{ asset("templateFiles/niwax/images/white-logo.png") }}" alt="Logo" class="mega-white-logo"/>
                            <img src="{{ asset("templateFiles/niwax/images/logo.png") }}" alt="Logo" class="mega-darks-logo"/>--}}
                        </a>
                    </div>
                    {{--
                    <li><a href="#home" class="menu-links">Accueil</a></li>
                            <li><a href="#" class="menu-links">E-visa</a></li>
                            <li><a href="#" class="menu-links">E-passeport</a></li>
                            <li><a href="#" class="menu-links">Notre équipe</a></li>
                            <li><a href="#" class="menu-links">Contact</a></li>
                    --}}
                    <div class="custom-nav" role="navigation">
                        <ul class="nav-list onepge">
                            <li><a href="{{route("frontOfficeHomePage")}}" class="menu-links">Accueil</a></li>
                            <li><a href="{{ route("frontOfficeEVisaPage") }}" class="menu-links">E-visa</a></li>
                            <li><a href="{{ route("frontOfficeEPasseportPage") }}" class="menu-links">E-passeport</a></li>
                            <li><a href="{{ route("frontOfficeEquipePage") }}" class="menu-links">Notre équipe</a></li>
                            <li><a href="{{ route("frontOfficeContactsPage") }}" class="menu-links">Contact</a></li>
                            {{--
                            <li><a href="#price" class="menu-links">Price</a></li>
                            <li><a href="#price" class="menu-links">Contact</a></li>
                            <li><a  data-bs-toggle="offcanvas" href="#offcanvasExample" class="btn-round- btn-br bg-btn3"><i class="fas fa-qrcode"></i></a></li>
                            <li><a href="#" class="btn-outline icon-btn">Chat With Us <i class="fab fa-whatsapp"></i></a> </li>--}}
                        </ul>
                    </div>
                    <div class="mobile-menu2">
                        <ul class="mob-nav2">
                            {{--<li><a class="btn-round- trngl btn-br bg-btn btshad-b1"  data-bs-toggle="offcanvas" href="#offcanvasExample"><i class="fas fa-qrcode"></i></a></li>--}}
                            <li class="navm-"> <a class="toggle" href="#"><span></span></a></li>
                        </ul>
                    </div>
                </div>



                <!--Mobile Menu-->
                <nav id="main-nav">
                    <ul class="first-nav">
                        <li><a href="{{route("frontOfficeHomePage")}}" class="menu-links">Accueil</a></li>
                        <li><a href="{{ route("frontOfficeEVisaPage") }}" class="menu-links">E-visa</a></li>
                        <li><a href="{{ route("frontOfficeEPasseportPage") }}" class="menu-links">E-passeport</a></li>
                        <li><a href="{{ route("frontOfficeEquipePage") }}" class="menu-links">Notre équipe</a></li>
                        <li><a href="{{ route("frontOfficeContactsPage") }}" class="menu-links">Contact</a></li>
                        {{--<li><a href="#home" class="menu-links">Home</a></li>
                        <li><a href="#services" class="menu-links">Services</a></li>
                        <li><a href="#work" class="menu-links">Work</a></li>
                        <li><a href="#price" class="menu-links">Price</a></li>--}}
                    </ul>
                    {{--<ul class="bottom-nav">
                        <li class="prb">
                            <a href="tel:+11111111111">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 384">
                                    <path d="M353.188,252.052c-23.51,0-46.594-3.677-68.469-10.906c-10.719-3.656-23.896-0.302-30.438,6.417l-43.177,32.594
                            c-50.073-26.729-80.917-57.563-107.281-107.26l31.635-42.052c8.219-8.208,11.167-20.198,7.635-31.448
                            c-7.26-21.99-10.948-45.063-10.948-68.583C132.146,13.823,118.323,0,101.333,0H30.813C13.823,0,0,13.823,0,30.813
                            C0,225.563,158.438,384,353.188,384c16.99,0,30.813-13.823,30.813-30.813v-70.323C384,265.875,370.177,252.052,353.188,252.052z"
                                    />
                                </svg>
                            </a>
                        </li>
                        <li class="prb">
                            <a href="mailto:somewebmedia@gmail.com">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                                    <path d="M0 0h24v24H0z" fill="none"/>
                                </svg>
                            </a>
                        </li>
                        <li class="prb">
                            <a href="skype:niwax.company?call">
                                <svg enable-background="new 0 0 24 24" height="18" viewBox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="m23.309 14.547c1.738-7.81-5.104-14.905-13.139-13.543-4.362-2.707-10.17.352-10.17 5.542 0 1.207.333 2.337.912 3.311-1.615 7.828 5.283 14.821 13.311 13.366 5.675 3.001 11.946-2.984 9.086-8.676zm-7.638 4.71c-2.108.867-5.577.872-7.676-.227-2.993-1.596-3.525-5.189-.943-5.189 1.946 0 1.33 2.269 3.295 3.194.902.417 2.841.46 3.968-.3 1.113-.745 1.011-1.917.406-2.477-1.603-1.48-6.19-.892-8.287-3.483-.911-1.124-1.083-3.107.037-4.545 1.952-2.512 7.68-2.665 10.143-.768 2.274 1.76 1.66 4.096-.175 4.096-2.207 0-1.047-2.888-4.61-2.888-2.583 0-3.599 1.837-1.78 2.731 2.466 1.225 8.75.816 8.75 5.603-.005 1.992-1.226 3.477-3.128 4.253z"/>
                                </svg>
                            </a>
                        </li>
                    </ul>--}}
                </nav>
            </div>
        </header>
        <!--End Header -->

        {{--
        <!--Start Header -->
        <header class="nav-bg-b main-header navfix fixed-top menu-white">
            <div class="container-fluid m-pad">
                <div class="menu-header">
                    <div class="dsk-logo"><a class="nav-brand" href="./">
                            <img src="{{ asset("templateFiles/niwax/images/white-logo.png") }}" alt="Logo" class="mega-white-logo"/>
                            <img src="{{ asset("templateFiles/niwax/images/logo.png") }}" alt="Logo" class="mega-darks-logo"/>
                        </a>
                    </div>
                    <div class="custom-nav" role="navigation">
                        <ul class="nav-list">
                            <li><a href="#home" class="menu-links">Accueil</a></li>
                            <li><a href="#" class="menu-links">E-visa</a></li>
                            <li><a href="#" class="menu-links">E-passeport</a></li>
                            <li><a href="#" class="menu-links">Notre équipe</a></li>
                            <li><a href="#" class="menu-links">Contact</a></li>
                            <li class="sbmenu">
                                <a href="#." class="menu-links">Home</a>
                                <div class="nx-dropdown">
                                    <div class="sub-menu-section">
                                        <div class="container">
                                            <div class="col-md-12">
                                                <div class="sub-menu-center-block">
                                                    <div class="sub-menu-column">
                                                        <div class="menuheading">Multi-Page Demo</div>
                                                        <ul>
                                                            <li><a href="index.html">All Demo <span class="badge bg-primary">New</span></a></li>
                                                            <li><a href="digital-agency.html">Digital Agency</a></li>
                                                            <li><a href="digital-agency-v2.html">Digital Agency V2</a></li>
                                                            <li><a href="digital-agency-glassmorphism.html">Digital Agency V3</a></li>
                                                            <li><a href="web-design-agency.html">Web Design Agency</a></li>
                                                            <li><a href="digital-marketing.html">Digital Marketing</a></li>
                                                            <li><a href="lead-generation.html">Lead Generation Agency</a></li>
                                                            <li><a href="landing-page-1.html">Landing Page V1</a></li>
                                                            <li><a href="landing-page-2.html">Landing Page V2</a></li>



                                                        </ul>
                                                    </div>
                                                    <div class="sub-menu-column">
                                                        <div class="menuheading">&nbsp;</div>
                                                        <ul>
                                                            <li><a href="freelance-portfolio.html">Freelance Portfolio</a></li>
                                                            <li><a href="app-development.html">App Development Agency</a></li>
                                                            <li><a href="minimal-portfolio.html">Minimal Portfolio</a></li>
                                                            <li><a href="creative-agency.html">Creative Agency</a></li>
                                                            <li><a href="branding-agency.html">Branding  Agency</a></li>
                                                            <li><a href="modern-agency.html">Modern Agency</a></li>
                                                            <li><a href="business-and-startup.html">Business & Startup</a></li>
                                                            <li><a href="graphic-studio.html">Graphic Studio</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="sub-menu-column">
                                                        <div class="menuheading">One-Page Demo</div>
                                                        <ul>
                                                            <li><a href="digital-agency-onepage.html">Digital Agency</a></li>
                                                            <li><a href="digital-agency-dark-onepage.html">Digital Agency Dark</a></li>
                                                            <li><a href="web-design-agency-onepage.html">Web Design Agency</a></li>
                                                            <li><a href="web-design-agency-dark-onepage.html">Web Design Agency Dark</a></li>
                                                            <li><a href="digital-marketing-onepage.html">Digital Marketing</a></li>
                                                            <li><a href="digital-marketing-dark-onepage.html">Digital Marketing Dark</a></li>
                                                            <li><a href="lead-generation-onepage.html">Lead Generation Agency</a></li>
                                                            <li><a href="lead-generation-dark-onepage.html">Lead Generation Agency Dark</a></li>
                                                            <li><a href="freelance-portfolio-onepage.html">Freelance Portfolio</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="sub-menu-column">
                                                        <div class="menuheading">&nbsp;</div>
                                                        <ul>
                                                            <li><a href="freelancer-v2-onepage.html">Freelancer v2</a></li>
                                                            <li><a href="app-development-onepage.html">App Development Agency</a></li>
                                                            <li><a href="minimal-portfolio-onepage.html">Minimal Portfolio</a></li>
                                                            <li><a href="creative-agency-onepage.html">Creative Agency</a></li>
                                                            <li><a href="branding-agency-onepage.html">Branding  Agency</a></li>
                                                            <li><a href="modern-agency-onepage.html">Modern Agency</a></li>
                                                            <li><a href="business-and-startup-onepage.html">Business & Startup</a></li>
                                                            <li><a href="graphic-studio-onepage.html">Graphic Studio</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="sbmenu">
                                <a href="#" class="menu-links">Pages</a>
                                <div class="nx-dropdown">
                                    <div class="sub-menu-section">
                                        <div class="container">
                                            <div class="sub-menu-center-block">
                                                <div class="sub-menu-column">
                                                    <ul>
                                                        <li><a href="about.html">About Us</a></li>
                                                        <li><a href="about-2.html">About Us V2</a></li>
                                                        <li><a href="why-us.html">Why Us</a></li>
                                                        <li><a href="team.html">Our Team</a></li>
                                                        <li><a href="team-details.html">Team Single</a></li>
                                                        <li><a href="case-study.html">Case Study</a></li>
                                                        <li><a href="case-study-details.html">Case Study Single</a></li>
                                                    </ul>
                                                </div>
                                                <div class="sub-menu-column">
                                                    <ul>
                                                        <li><a href="mission-vision.html">Mission & Vision</a></li>
                                                        <li><a href="development-process.html">Development Process</a></li>
                                                        <li><a href="client-reviews.html">Client Reviews</a> </li>
                                                        <li><a href="clients.html">Our Clients</a></li>
                                                        <li><a href="get-quote.html">Contact Us</a> </li>
                                                        <li><a href="get-quote-2.html">Contact Us 2</a> </li>
                                                        <li><a href="get-quote-3.html">Contact Us 3</a> </li>
                                                    </ul>
                                                </div>
                                                <div class="sub-menu-column">
                                                    <ul>
                                                        <li><a href="login.html">Login Page</a> </li>
                                                        <li><a href="service-card.html">Service Card</a> </li>
                                                        <li><a href="service-web.html">Service Web</a></li>
                                                        <li><a href="service-app.html">Service Mobile App</a></li>
                                                        <li><a href="service-marketing.html">Service Digital Marketing</a></li>
                                                        <li><a href="service-graphic.html">Service Graphic</a></li>
                                                    </ul>
                                                </div>
                                                <div class="sub-menu-column">
                                                    <ul>
                                                        <li><a href="career.html">Careers</a> </li>
                                                        <li><a href="shop-page.html">Shop Single</a> </li>
                                                        <li><a href="shop-details.html">Shop Details</a> </li>
                                                        <li><a href="shop-cart.html">Shop Cart</a> </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="sbmenu">
                                <a href="#" class="menu-links">Shortcodes</a>
                                <div class="nx-dropdown">
                                    <div class="sub-menu-section">
                                        <div class="container">
                                            <div class="sub-menu-center-block">
                                                <div class="sub-menu-column">
                                                    <ul>
                                                        <li><a href="pricing.html">Pricing</a></li>
                                                        <li><a href="typography.html">Typography</a></li>
                                                        <li><a href="button.html">Buttons</a></li>
                                                        <li><a href="locations.html">Office Location</a></li>
                                                    </ul>
                                                </div>
                                                <div class="sub-menu-column">
                                                    <ul>
                                                        <li><a href="faq.html">FAQs</a>	</li>
                                                        <li><a href="tabs.html">Tabs</a></li>
                                                        <li><a href="error.html">404 Page</a></li>
                                                        <li><a href="gradients.html">Background Gradients</a></li>
                                                    </ul>
                                                </div>
                                                <div class="sub-menu-column">
                                                    <ul>
                                                        <li><a href="header-v1.html">Header v1</a></li>
                                                        <li><a href="header-v2.html">Header v2</a></li>
                                                        <li><a href="header-v3.html">Header v3</a></li>
                                                        <li><a href="header-v4.html">Header v4</a></li>
                                                        <li><a href="footer-design.html">Footer</a></li>
                                                    </ul>
                                                </div>
                                                <div class="sub-menu-column">
                                                    <ul>
                                                        <li><a href="hover-animation.html">Hover Animation</a></li>
                                                        <li><a href="popup-modal.html">Popup Modal</a></li>
                                                        <li><a href="lists.html">Lists</a></li>
                                                        <li><a href="bootstrap-components.html">Bootstrap Components</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="sbmenu rpdropdown">
                                <a href="#" class="menu-links">Portfolio</a>
                                <div class="nx-dropdown menu-dorpdown">
                                    <div class="sub-menu-section">
                                        <div class="sub-menu-center-block">
                                            <div class="sub-menu-column smfull">
                                                <ul>
                                                    <li><a href="portfolio.html">Portfolio Grid 1</a> </li>
                                                    <li><a href="portfolio-2.html">Portfolio Grid 2</a> </li>
                                                    <li><a href="portfolio-block.html">Portfolio Wide Block</a> </li>
                                                    <li><a href="portfolio-block-2.html">Portfolio Wide Block v2</a> </li>
                                                    <li><a href="portfolio-details.html">Portfolio Details</a> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="sbmenu rpdropdown">
                                <a href="#" class="menu-links">Blog</a>
                                <div class="nx-dropdown menu-dorpdown">
                                    <div class="sub-menu-section">
                                        <div class="sub-menu-center-block">
                                            <div class="sub-menu-column smfull">
                                                <ul>
                                                    <li><a href="blog-grid-1.html">Blog Grid 1</a> </li>
                                                    <li><a href="blog-grid-2.html">Blog Grid 2</a> </li>
                                                    <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a> </li>
                                                    <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a> </li>
                                                    <li><a href="blog-single.html">Blog Single</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <!-- mobile + desktop - sidebar menu- dark mode witch and button -->
                        <ul class="nav-list right-end-btn">
                            <li class="hidemobile"><a data-bs-toggle="offcanvas" href="#offcanvasExample" class="btn-round- btn-br bg-btn2"><i class="fas fa-bars"></i></a></li>
                            <li class="hidemobile"><a href="get-quote.html" class="btn-br bg-btn3 btshad-b2 lnk">Request A Quote <span class="circle"></span></a> </li>
                            <li class="hidedesktop darkmodeswitch"><div class="switch-wrapper"> <label class="switch" for="niwax"> <input type="checkbox" id="niwax"/>  <span class="slider round"></span> </label> </div> </li>
                            <li class="hidedesktop"><a data-bs-toggle="offcanvas" href="#offcanvasExample" class="btn-round- btn-br bg-btn2"><i class="fas fa-bars"></i></a></li>
                            <li class="navm- hidedesktop"> <a class="toggle" href="#"><span></span></a></li>
                        </ul>
                    </div>
                </div>

                <!--Mobile Menu-->
                <nav id="main-nav">
                    <ul class="first-nav">
                        <li>
                            <a href="#">Home</a>
                            <ul>
                                <li>
                                    <a href="#">Multi-Page Demo</a>
                                    <ul>
                                        <li><a href="digital-agency.html">Digital Agency</a></li>
                                        <li><a href="digital-agency-v2.html">Digital Agency V2</a></li>
                                        <li><a href="digital-agency-glassmorphism.html">Digital Agency V3</a></li>
                                        <li><a href="web-design-agency.html">Web Design Agency</a></li>
                                        <li><a href="digital-marketing.html">Digital Marketing</a></li>
                                        <li><a href="lead-generation.html">Lead Generation Agency</a></li>
                                        <li><a href="landing-page-1.html">Landing Page V1</a></li>
                                        <li><a href="landing-page-2.html">Landing Page V2</a></li>
                                        <li><a href="freelance-portfolio.html">Freelance Portfolio</a></li>
                                        <li><a href="app-development.html">App Development Agency</a></li>
                                        <li><a href="minimal-portfolio.html">Minimal Portfolio</a></li>
                                        <li><a href="creative-agency.html">Creative Agency</a></li>
                                        <li><a href="branding-agency.html">Branding  Agency</a></li>
                                        <li><a href="modern-agency.html">Modern Agency</a></li>
                                        <li><a href="business-and-startup.html">Business & Startup</a></li>
                                        <li><a href="graphic-studio.html">Graphic Studio</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">One-Page Demo</a>
                                    <ul>
                                        <li><a href="digital-agency-onepage.html">Digital Agency</a></li>
                                        <li><a href="digital-agency-dark-onepage.html">Digital Agency Dark</a></li>
                                        <li><a href="web-design-agency-onepage.html">Web Design Agency</a></li>
                                        <li><a href="web-design-agency-dark-onepage.html">Web Design Agency Dark</a></li>
                                        <li><a href="digital-marketing-onepage.html">Digital Marketing</a></li>
                                        <li><a href="digital-marketing-dark-onepage.html">Digital Marketing Dark</a></li>
                                        <li><a href="lead-generation-onepage.html">Lead Generation Agency</a></li>
                                        <li><a href="lead-generation-dark-onepage.html">Lead Generation Agency Dark</a></li>
                                        <li><a href="freelance-portfolio-onepage.html">Freelance Portfolio</a></li>
                                        <li><a href="freelance-portfolio-dark-onepage.html">Freelance Portfolio Dark</a></li>
                                        <li><a href="app-development-onepage.html">App Development Agency</a></li>
                                        <li><a href="minimal-portfolio-onepage.html">Minimal Portfolio</a></li>
                                        <li><a href="creative-agency-onepage.html">Creative Agency</a></li>
                                        <li><a href="branding-agency-onepage.html">Branding  Agency</a></li>
                                        <li><a href="modern-agency-onepage.html">Modern Agency</a></li>
                                        <li><a href="business-and-startup-onepage.html">Business & Startup</a></li>
                                        <li><a href="graphic-studio-onepage.html">Graphic Studio</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Pages</a>
                            <ul>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="why-us.html">Why Us</a></li>
                                <li><a href="team.html">Our Team</a></li>
                                <li><a href="team-details.html">Team Single</a></li>
                                <li><a href="case-study.html">Case Study</a></li>
                                <li><a href="case-study-details.html">Case Study Single</a></li>
                                <li><a href="mission-vision.html">Mission & Vision</a></li>
                                <li><a href="development-process.html">Development Process</a></li>
                                <li><a href="client-reviews.html">Client Reviews</a> </li>
                                <li><a href="clients.html">Our Clients</a></li>
                                <li><a href="get-quote.html">Contact Us</a> </li>
                                <li><a href="get-quote-2.html">Contact Us 2</a> </li>
                                <li><a href="login.html">Login Page</a> </li>
                                <li><a href="service-card.html">Service Card</a> </li>
                                <li><a href="service-web.html">Service Web</a></li>
                                <li><a href="service-app.html">Service Mobile App</a></li>
                                <li><a href="service-marketing.html">Service Digital Marketing</a></li>
                                <li><a href="service-graphic.html">Service Graphic</a></li>
                                <li><a href="career.html">Careers</a> </li>
                                <li><a href="shop-page.html">Shop Single</a> </li>
                                <li><a href="shop-details.html">Shop Details</a> </li>
                                <li><a href="shop-cart.html">Shop Cart</a> </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Shortcodes</a>
                            <ul>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="typography.html">Typography</a></li>
                                <li><a href="button.html">Buttons</a></li>
                                <li><a href="locations.html">Office Location</a></li>
                                <li><a href="faq.html">FAQs</a>	</li>
                                <li><a href="tabs.html">Tabs</a></li>
                                <li><a href="error.html">404 Page</a></li>
                                <li><a href="gradients.html">Background Gradients</a></li>
                                <li><a href="header-v1.html">Header v1</a></li>
                                <li><a href="header-v2.html">Header v2</a></li>
                                <li><a href="header-v3.html">Header v3</a></li>
                                <li><a href="footer-design.html">Footer</a></li>
                                <li><a href="hover-animation.html">Hover Animation</a></li>
                                <li><a href="popup-modal.html">Popup Modal</a></li>
                                <li><a href="lists.html">Lists</a></li>
                                <li><a href="bootstrap-components.html">Bootstrap Components</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Portfolio</a>
                            <ul>
                                <li><a href="portfolio.html">Portfolio Grid 1</a> </li>
                                <li><a href="portfolio-2.html">Portfolio Grid 2</a> </li>
                                <li><a href="portfolio-block.html">Portfolio Wide Block</a> </li>
                                <li><a href="portfolio-block-2.html">Portfolio Wide Block v2</a> </li>
                                <li><a href="portfolio-details.html">Portfolio Details</a> </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Blog</a>
                            <ul>
                                <li><a href="blog-grid-1.html">Blog Grid 1</a> </li>
                                <li><a href="blog-grid-2.html">Blog Grid 2</a> </li>
                                <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a> </li>
                                <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a> </li>
                                <li><a href="blog-single.html">Blog Single</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="bottom-nav">
                        <li class="prb">
                            <a href="tel:+11111111111">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 384">
                                    <path d="M353.188,252.052c-23.51,0-46.594-3.677-68.469-10.906c-10.719-3.656-23.896-0.302-30.438,6.417l-43.177,32.594
                              c-50.073-26.729-80.917-57.563-107.281-107.26l31.635-42.052c8.219-8.208,11.167-20.198,7.635-31.448
                              c-7.26-21.99-10.948-45.063-10.948-68.583C132.146,13.823,118.323,0,101.333,0H30.813C13.823,0,0,13.823,0,30.813
                              C0,225.563,158.438,384,353.188,384c16.99,0,30.813-13.823,30.813-30.813v-70.323C384,265.875,370.177,252.052,353.188,252.052z"
                                    />
                                </svg>
                            </a>
                        </li>
                        <li class="prb">
                            <a href="mailto:somewebmedia@gmail.com">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                                    <path d="M0 0h24v24H0z" fill="none"/>
                                </svg>
                            </a>
                        </li>
                        <li class="prb">
                            <a href="skype:niwax.company?call">
                                <svg enable-background="new 0 0 24 24" height="18" viewBox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="m23.309 14.547c1.738-7.81-5.104-14.905-13.139-13.543-4.362-2.707-10.17.352-10.17 5.542 0 1.207.333 2.337.912 3.311-1.615 7.828 5.283 14.821 13.311 13.366 5.675 3.001 11.946-2.984 9.086-8.676zm-7.638 4.71c-2.108.867-5.577.872-7.676-.227-2.993-1.596-3.525-5.189-.943-5.189 1.946 0 1.33 2.269 3.295 3.194.902.417 2.841.46 3.968-.3 1.113-.745 1.011-1.917.406-2.477-1.603-1.48-6.19-.892-8.287-3.483-.911-1.124-1.083-3.107.037-4.545 1.952-2.512 7.68-2.665 10.143-.768 2.274 1.76 1.66 4.096-.175 4.096-2.207 0-1.047-2.888-4.61-2.888-2.583 0-3.599 1.837-1.78 2.731 2.466 1.225 8.75.816 8.75 5.603-.005 1.992-1.226 3.477-3.128 4.253z"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <!--End Header -->
--}}

        @yield("firstLevelLayoutBodyContent")


        <!--Start Footer-->
        <footer class="footerdez dark-footer pt50 pb80 mt-4">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-4 col-sm-12 pt40">
                        <div class="footerdez-a">
                            {{--<h2>WE WOULD LOVE TO HEAR FROM YOU.</h2>--}}
                            <img src="{{ asset("myFiles/images/visa-passeport2.png") }}" class="img-fluid" alt="">
                            <p class="mt10 c-tertiary">
                                Dématérialiser la procédure d'obtention du visa et du passeport Congolais
                            </p>
                            <div class="mt30">
                                <p class="c-tertiary">
                                    <span class="text-white">PLANNINGCLIENT</span> is incorporated in <span class="text-white">London</span>. <br/>
                                    Company Number : <span class="text-white">13070015</span> <br/>
                                    VAT Number : <span class="text-white">8796729102</span> <br/>
                                    Address : <span class="text-white"> Frederick Street, London, WC1X 0ND</span>
                                </p>
                            </div>
                            {{--<div class="contactinfo mt30">
                                <a href="mailto:contact@domainame.com">contact@domainame.com <span>→</span></a>
                                <a href="tel:+91123456790">(91) 123 4567 7890 <span>→</span></a>
                            </div>--}}
                        </div>
                    </div>
                    <div class="col-lg-7 col-sm-12">
                        <div class="row fttlnks">
                            {{--
                            <div class="col-lg-4 col-sm-6 pt40">
                                <h5>OUR ADDRESS</h5>
                                <h4>New York</h4>
                                <p>603 FA Forest Avenue, New York, USA 10021</p>
                                <h4 class="mt30">India</h4>
                                <p>603 FA Forest Avenue, New York, USA 10021</p>
                            </div>
                            --}}
                            <div class="col-lg-4S col-sm-7 pt40">
                                {{--<img class="img-fluid" src="{{ asset("myFiles/images/planning-client.png") }}" alt="">--}}
                                <h5>Accès rapide</h5>
                                <ul class="footer-address-list link-hover">
                                    <li>
                                        <a href="{{ route("frontOfficeEVisaPage") }}#how-to-obtain-evisa">
                                            Comment obtenir le e-Visa ?
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route("frontOfficeEVisaPage") }}#pay-evisa">
                                            Comment payer le e-Visa ?
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route("frontOfficeEPasseportPage") }}#how-to-have-epassport">
                                            Comment obtenir le e-Passeport ?
                                        </a>
                                    </li>
                                    <li>
                                        <a  href="{{ route("frontOfficeEPasseportPage") }}#pay-epasseport">
                                            Comment payer le e-Passeport ?
                                        </a>
                                    </li>
                                    {{--<li><a href="#">Pourquoi le e-Visa et le e-Passeport ?</a></li>
                                    <li><a href="#">Comment obtenir son e-Visa ?</a></li>
                                    <li><a href="#">Quelle est la procédure du e-Passeport ?</a></li>
                                    <li><a href="#">Notre équipe</a></li>
                                    <li><a href="#">Nous contacter</a></li>--}}
                                </ul>
                            </div>
                            <div class="col-lg-4S col-sm-5 pt40">
                                <h5>Contact</h5>
                                <p CLASS="mb-4 c-tertiary">
                                    <span class="text-white">CHRISTIAN MASITU</span> <br/>
                                    Coordinateur de VISAPASSEPORT
                                </p>
                                <ul class="footer-address-list link-hover">
                                    <li>
                                        <i class="fas fa-phone-alt"></i>
                                        <a href="tel:+2120618147446">(00212) 0618147446</a>
                                    </li>
                                    <li>
                                        <i class="fas fa-envelope"></i>
                                        <a href="mailto:cal01.application@gmail.com">cal01.application@gmail.com</a>
                                    </li>
                                    <li>
                                        <i class="fab fa-twitter"></i>
                                        <a href="skype:christian_masit?call">@christian_masit</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row fttlnks flexend">
                            {{--<div class="col-lg-4 col-sm-6 pt60">
                                <h5>Follow Us</h5>
                                <div class="ff-social-icons mt30">
                                    <a href="javascript:void(0)" target="blank"><i class="fab fa-facebook"></i></a>
                                    <a href="javascript:void(0)" target="blank"><i class="fab fa-twitter"></i></a>
                                    <a href="javascript:void(0)" target="blank"><i class="fab fa-linkedin"></i></a>
                                    <a href="javascript:void(0)" target="blank"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>--}}
                            <div class="col-lg-6 pt60">
                                <div class="footer-copyrights-">
                                    <p class="c-tertiary">© 2022. <span class="text-white">VISApasseport RDC</span> {{--Créé par <a href="https://www.honametech.com/" target="_blank">Honame Tech</a>--}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--End Footer-->


        <!--start off canvas nav -->
        <div class="niwaxofcanvas offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample">
            <div class="offcanvas-body p0">
                <div class="companyinfodiv">
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    <a href="#">
                        <img src="{{ asset("myFiles/images/logo/logo_text.png") }}" alt="{{ env("APP_NAME") }}" title="{{ env("APP_NAME") }}">
                       {{-- <img src="{{ asset("templateFiles/niwax/images/logo.png") }}" alt="">--}}
                    </a>
                    <p class="companytitle"> {{ env("APP_NAME") }} - Le e-visa à la portée de tous</p>
                </div>
                <div class="contactinfo-bar mt50">
                    <h4 class="contactitle">Contact Info</h4>
                    <div class="contact-data">
                        <ul class="mt10">
                            <li><a href="tel:1111111111"><i class="fas fa-phone-alt"></i> +1-123-456-7890</a></li>
                            <li><a href="tel:1111111111"><i class="fab fa-whatsapp"></i> +1-123-456-7890</a></li>
                            <li><a href="skype:niwax.company?call"><i class="fab fa-skype"></i> niwax.company</a></li>
                            <li><a href="mailto:info@businessname.com"><i class="fas fa-envelope"></i> info@businessname.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="contactinfo-bar mt50">
                    <h4 class="contactitle">Follow Us On</h4>
                    <div class="contact-data">
                        <div class="social-media-linkz mt10">
                            <a href="javascript:void(0)" target="blank"><i class="fab fa-facebook"></i></a>
                            <a href="javascript:void(0)" target="blank"><i class="fab fa-twitter"></i></a>
                            <a href="javascript:void(0)" target="blank"><i class="fab fa-instagram"></i></a>
                            <a href="javascript:void(0)" target="blank"><i class="fab fa-linkedin"></i></a>
                            <a href="javascript:void(0)" target="blank"><i class="fab fa-youtube"></i></a>
                            <a href="javascript:void(0)" target="blank"><i class="fab fa-pinterest-p"></i></a>
                            <a href="javascript:void(0)" target="blank"><i class="fab fa-dribbble"></i></a>
                            <a href="javascript:void(0)" target="blank"><i class="fab fa-behance"></i></a>
                        </div>
                    </div>
                </div>
                <div class="contactinfo-bar mt50">
                    <h4 class="contactitle">Visit Us</h4>
                    <div class="contact-data">
                        <ul class="mt10">
                            <li><a href="#"><i class="fas fa-map-marker-alt"></i> <div class="locoff"><span>India</span>9988 Piazzetta Scalette Rubiani 99, Rome, 84090 </div></a></li>
                            <li><a href="#"><i class="fas fa-map-marker-alt"></i> <div class="locoff"><span>USA</span>9988 Piazzetta Scalette Rubiani 99, Rome, 84090 </div></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--end off canvas nav -->

        <!-- js placed at the end of the document so the pages load faster -->
        <script src="{{ asset("templateFiles/niwax/js/vendor/modernizr-3.5.0.min.js") }}"></script>
        <script src="{{ asset("templateFiles/niwax/js/jquery.min.js") }}"></script>
        <script src="{{ asset("templateFiles/niwax/js/bootstrap.bundle.min.js") }}"></script>
        <script src="{{ asset("templateFiles/niwax/js/plugin.min.js") }}"></script>
        <script src="{{ asset("templateFiles/niwax/js/preloader.js") }}"></script>
        <script async src="https://unpkg.com/typer-dot-js@0.1.0/typer.js"></script>
        <!--common script file-->
        <script src="{{ asset("templateFiles/niwax/js/main.js") }}"></script>



        <script>
            //Owl-Carousel - client logo
            var owl = $('.niwaxwideserviceslider');
            owl.owlCarousel({
                items:1,
                loop: true,
                center:false,
                autoplay: true,
                margin: 20,
                nav: false,
                dots: true,
                autoplayTimeout: 3500,
                autoplayHoverPause: true,
                smartSpeed: 2000
            });
            //Owl-Carousel - client logo
            var owl = $('.niwax-client-slider');
            owl.owlCarousel({
                loop: true,
                center:false,
                autoplay: true,
                margin: 20,
                nav: false,
                dots: false,
                autoplayTimeout: 3500,
                autoplayHoverPause: true,
                smartSpeed: 2000,
                responsive: {
                    0: {
                        items: 3,
                    },
                    520: {
                        items: 3
                    },
                    768: {
                        items: 4
                    },
                    1200: {
                        items: 4
                    },
                    1400: {
                        items: 5
                    },
                    1600: {
                        items: 6
                    },
                }
            });
            //Owl-Carousel - awards card
            var owl = $('.niwax-logo-slider');
            owl.owlCarousel({
                loop: true,
                center:false,
                autoplay: true,
                margin: 20,
                nav: false,
                dots: false,
                autoplayTimeout: 3500,
                autoplayHoverPause: true,
                smartSpeed: 2000,
                responsive: {
                    0: {
                        items: 3,
                    },
                    520: {
                        items: 3
                    },
                    768: {
                        items: 4
                    },
                    1200: {
                        items: 4
                    },
                    1400: {
                        items: 5
                    },
                    1600: {
                        items: 6
                    },
                }
            });

            //Owl-Carousel - awards card
            var owl = $('.niwax-review-slider');
            owl.owlCarousel({
                items: 3,
                loop: true,
                center:false,
                autoplay: true,
                margin: 20,
                nav: false,
                dots: true,
                autoplayTimeout: 3500,
                autoplayHoverPause: true,
                smartSpeed: 2000,
                responsive: {
                    0: {
                        items: 1,
                    },
                    520: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    1200: {
                        items: 2
                    },
                    1400: {
                        items: 3
                    },
                    1600: {
                        items: 3
                    },
                }
            });
        </script>



        <script src="{{ asset("vendorFiles/jquery/jquery.min.js") }}"></script>
        <script src="{{ asset("vendorFiles/notifications/notify.min.js") }}"></script>
        <script src="{{ asset("vendorFiles/notifications/notify-metro.js") }}"></script>
        <script src="{{ asset("vendorFiles/notifications/notifications.js") }}"></script>

        <script src="{{ asset("vendorFiles/sweet-alert2/sweetalert2.min.js") }}"></script>
        <script src="{{ asset("vendorFiles/jquery.sweet-alert.initS.js") }}"></script>

        <script src="{{ asset("vendorFiles/select2/js/select2.full.min.js") }}"></script>


        @include("myViews.shared.report")
        @include("myViews.shared.confirm")


    </body>
</html>
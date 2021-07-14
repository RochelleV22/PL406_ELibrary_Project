<!DOCTYPE html>
<html lang="zxx">
    

<head>        
        
        <!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">
        
        <!-- Title -->
        <title>..:: E LIBRARY ::..</title>
        
        <!-- Favicon -->
        <link href="{{asset('public/images/favicon.ico')}}" rel="icon" type="image/x-icon" />
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
        
        <!-- Mobile Menu -->
        <link href="{{asset('css/mmenu.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/mmenu.positioning.css')}}" rel="stylesheet" type="text/css" />
        
        <!-- Stylesheet -->
        <link href="{{asset('style.css')}}" rel="stylesheet" type="text/css" />
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->

    </head>
    
    <body>
        
           <!-- Start: Header Section -->
        <header id="header-v1" class="navbar-wrapper">
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-default">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="navbar-header">
                                    <div class="navbar-brand">
                                        <h1>
                                            <a href="index-2.html">
                                                <img src="images/libraria-logo-v1.png" alt="LIBRARIA" />
                                            </a>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <!-- Header Topbar -->
                                <div class="header-topbar hidden-sm hidden-xs">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="topbar-info">
                                               
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="topbar-links">
                                                <a href="sign_in"><i class="fa fa-lock"></i>Login</a>
                                                <span>|</span>
                                                   <a href="sign_up"><i class="fa fa-lock"></i>Register</a>
            
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="navbar-collapse hidden-sm hidden-xs">
                                    <ul class="nav navbar-nav">
                                        <li class="dropdown active">
                                            <a data-toggle="dropdown" class="dropdown-toggle disabled" href="index">Home</a>
                                        </li>
                                        <li class="dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle disabled" href="#.">Books &amp; Media</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="view">Books</a></li>
                                                <li><a href="m_view">Magazine</a></li>
                                                <li><a href="a_view">Audio</a></li>
                                                <li><a href="v_view">Video</a></li>
                                            </ul>
                                        </li>
                            
                                        <li><a href="contact_us">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="mobile-menu hidden-lg hidden-md">
                            <a href="#mobile-menu"><i class="fa fa-navicon"></i></a>
                            <div id="mobile-menu">
                                <ul>
                                    <li class="mobile-title">
                                        <h4>Navigation</h4>
                                        <a href="#" class="close"></a>
                                    </li>
                                    <li>
                                        <a href="index">Home</a>
                                    
                                    </li>
                                    <li>
                                        <a href="#">Books &amp; Media</a>
                                           <ul>
                                                <li><a href="view">Books</a></li>
                                                <li><a href="m_view">Magazine</a></li>
                                                <li><a href="a_view">Audio</a></li>
                                                <li><a href="v_view">Video</a></li>
                                            </ul>
                                    </li>
                                    
                                    
                                    <li><a href="contact_us">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!-- End: Header Section -->
        
        <!-- Start: Page Banner -->
        <section class="page-banner services-banner">
            <div class="container">
                <div class="banner-header">
                    <h2>SignIn and signUp</h2>
                    <span class="underline center"></span>
                    <p class="lead"></p>
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="index">Home</a></li>
                        <li>SignIn</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End: Page Banner -->
        <!-- Start: Cart Section -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="signin-main">
                        <div class="container">
                            <div class="woocommerce">
                                <div class="woocommerce-login">
                                    <div class="company-info signin-register">
                                        <div class="col-md-5 col-md-offset-1 border-dark-left">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="company-detail bg-dark margin-left">
                                                        <div class="signin-head">
                                                            <h2>Sign in</h2>
                                                            <span class="underline left"></span>
                                                        </div>

                                                        <form class="login" method="post" action = "{{route('/login')}}">
                                                            <p class="form-row form-row-first input-required">
                                                                <label>
                                                                    <span class="first-letter">User Name</span>  
                                                                    <span class="second-letter">*</span>
                                                                </label>
                                                                <input type="text"  id="username" name="user_name" class="input-text">
                                                             </p>
                                                            <p class="form-row form-row-last input-required">
                                                                <label>
                                                                    <span class="first-letter">Password</span>  
                                                                    <span class="second-letter">*</span>
                                                                </label>
                                                                <input type="password" id="password" name="password" class="input-text">
                                                            </p>
                                                            <div class="clear"></div>
                                                            <div class="password-form-row">
                                                                <p class="form-row input-checkbox">
                                                                    <input type="checkbox" value="forever" id="rememberme" name="rememberme">
                                                                    <label class="inline" for="rememberme">Remember me</label>
                                                                </p>
                                                                <p class="lost_password">
                                                                    <a href="#">Forget Password</a>
                                                                </p>
                                                                
                                                            </div>
                                                            <input type="submit" value="Login" name="login" class="button btn btn-default">
                                                            
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 border-dark new-user">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="company-detail new-account bg-light margin-right">
                                                        <div class="new-user-head">
                                                            <h2>Create New Account</h2>
                                                            <span class="underline left"></span>
                                        
                                                        </div>
                                                        <form class="login" method="post" action = "{{url('/register')}}">
                                                            <p class="form-row form-row-first input-required">
                                                                <label>
                                                                    <span class="first-letter">User Name</span>  
                                                                    <span class="second-letter">*</span>
                                                                </label>
                                                                <input type="text" id="username1" name="user_name" class="input-text">
                                                            </p>
                                                             <div class="clear"></div>
                                                            
                                                             <p class="form-row input-required">
                                                                <label>
                                                                    <span class="first-letter">Email</span>  
                                                                    <span class="second-letter">*</span>
                                                                </label>
                                                                <input type="text" id="email" name="email" class="input-text">
                                                            </p>
                                                             <div class="clear"></div>
                                                            
                                                            <p class="form-row input-required">
                                                                <label>
                                                                    <span class="first-letter">Password</span>  
                                                                    <span class="second-letter">*</span>
                                                                </label>
                                                                <input type="password" id="password1" name="password" class="input-text">
                                                            </p>                                                                                
                                                            <div class="clear"></div>

                                                            <input type="submit" value="Signup" name="signup" class="button btn btn-default">
                                                            <div class="clear"></div>
                                                        </form> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <!-- End: Cart Section -->
        
        <!-- Start: Social Network -->
        <section class="social-network section-padding">
            <div class="container">
                <div class="center-content">
                    <h2 class="section-title">Follow Us</h2>
                    <span class="underline center"></span>
                    <p class="lead">Follow us on Social Media to be aware of our webiste updates</p>
                </div>
                <ul>
                    <li>
                        <a class="facebook" href="#" target="_blank">
                            <span>
                                <i class="fa fa-facebook-f"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="twitter" href="#" target="_blank">
                            <span>
                                <i class="fa fa-twitter"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="google" href="#" target="_blank">
                            <span>
                                <i class="fa fa-google-plus"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="linkedin" href="#" target="_blank">
                            <span>
                                <i class="fa fa-linkedin"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="youtube" href="#" target="_blank">
                            <span>
                                <i class="fa fa-youtube"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
        <!-- End: Social Network -->
        
         <!-- Start: Footer -->
        <footer class="site-footer">
            <div class="container">
                <div id="footer-widgets">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 widget-container">
                            <div id="text-2" class="widget widget_text">
                                <h3 class="footer-widget-title">About Libraria</h3>
                                <span class="underline left"></span>
                                <div class="textwidget">
                                    It is an online library,you can find Books,Magazine
                                    ,audio and video here.
                                </div>
                                <address>
                                    <div class="info">
                                        <i class="fa fa-location-arrow"></i>
                                        <span>Goa India</span>
                                    </div>
                                    <div class="info">
                                        <i class="fa fa-envelope"></i>
                                        <span><a href="mailto:E_library@gmail.com">E_library@gmail.com</a></span>
                                    </div>
                                    <div class="info">
                                        <i class="fa fa-phone"></i>
                                        <span><a href="tel:9130741056">+91 9130741056</a></span>
                                    </div>
                                </address>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 widget-container">
                        </div>
                        <div class="clearfix hidden-lg hidden-md hidden-xs tablet-margin-bottom"></div>
                       
                        <div class="col-md-4 col-sm-6 widget-container">
                            <div class="widget twitter-widget">
                                <h3 class="footer-widget-title">Latest updates</h3>
                                <span class="underline left"></span>
                                <div >
                                    <ul>
                                        <li>
                                            <p><a href="UserBooks">Books</a> 
                                        </li>
                                        <li>
                                            <p><a href="UserMagazine">Magazines</a> 
                                        </li>
                                        <li>
                                            <p><a href="UserAudio">Audios</a> 
                                        </li>
                                        <li>
                                            <p><a href="UserVideo">Videos</a> 
                                        </li>
                                    </ul>
                                </div>
                            </div>          
                        </div>
                    </div>
                </div>                
            </div>
            <div class="sub-footer">
                <div class="container">
                </div>
            </div>
        </footer>
        <!-- End: Footer -->
        
        <!-- jQuery Latest Version 1.x -->
        <script type="text/javascript" src="{{asset('js/jquery-1.12.4.min.js')}}"></script>
        
        <!-- jQuery UI -->
        <script type="text/javascript" src="{{asset('js/jquery-ui.min.js')}}"></script>
        
        <!-- jQuery Easing -->
        <script type="text/javascript" src="{{asset('js/jquery.easing.1.3.js')}}"></script>

        <!-- Bootstrap -->
        <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
        
        <!-- Mobile Menu -->
        <script type="text/javascript" src="{{asset('js/mmenu.min.js')}}"></script>
        
        <!-- Harvey - State manager for media queries -->
        <script type="text/javascript" src="{{asset('js/harvey.min.js')}}"></script>
        
        <!-- Waypoints - Load Elements on View -->
        <script type="text/javascript" src="{{asset('js/waypoints.min.js')}}"></script>

        <!-- Facts Counter -->
        <script type="text/javascript" src="{{asset('js/facts.counter.min.js')}}"></script>

        <!-- MixItUp - Category Filter -->
        <script type="text/javascript" src="{{asset('js/mixitup.min.js')}}"></script>

        <!-- Owl Carousel -->
        <script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
        
        <!-- Accordion -->
        <script type="text/javascript" src="{{asset('js/accordion.min.js')}}"></script>
        
        <!-- Responsive Tabs -->
        <script type="text/javascript" src="{{asset('js/responsive.tabs.min.js')}}"></script>
        
        <!-- Responsive Table -->
        <script type="text/javascript" src="{{asset('js/responsive.table.min.js')}}"></script>
        
        <!-- Masonry -->
        <script type="text/javascript" src="{{asset('js/masonry.min.js')}}"></script>
        
        <!-- Carousel Swipe -->
        <script type="text/javascript" src="{{asset('js/carousel.swipe.min.js')}}"></script>
        
        <!-- bxSlider -->
        <script type="text/javascript" src="{{asset('js/bxslider.min.js')}}"></script>
        
        <!-- Custom Scripts -->
        <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
        
    </body>


</html>
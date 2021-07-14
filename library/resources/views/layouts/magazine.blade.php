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
                    <h2>E Magazines</h2>
                    <span class="underline center"></span>
                    <p class="lead">You Can Find E Magazines here in pdf format</p>
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="/index">Home</a></li>
                        <li><a>Magazines</a></li>
                       <!--  <li><a href="{{url('/uploadpage')}}">Upload a Book</a></li>
                        <li><a href="{{url('/downloadpage')}}">Download a Book</a></li>
                        <li><a href="{{url('/view')}}">View a Book</a></li>-->
                    </ul>
                </div>
            </div>
        </section>
        <!-- End: Page Banner -->
        
              <!-- Start: Blog Section -->
       <div id="content" class="site-content">
            
                               <br/>{{$data->name}}
                               <br/>{{$data->description}}
                               <br/><iframe style="height:700px; width:600px"
                               src="{{asset('/files/'.$data->file)}}"></iframe>
        </div>
        <!-- End: Blog Section -->
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
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <!-- Theme Informations -->	
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <!-- Theme Informations -->

        <title>Agence Immobilière</title>

        <!-- Stylesheets -->
        <link rel="stylesheet" href="{{ asset('../frontDesign/bootstrap/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('../frontDesign/css/style_second_theme.css') }}">	
        <link rel="stylesheet" href="{{ asset('../frontDesign/css/common-style.css') }}">
        <!-- Stylesheets -->
    
        <!-- Icons & Fonts -->
        <link rel="stylesheet" href="{{ asset('../frontDesign/font-awesome/css/font-awesome.min.css') }}">
        <!-- Icons & Fonts -->
    </head>

    <body id="page-top">

        <!-- Navigation Section-->
        <nav id="nav" class="container-fluid navbar navbar-default navbar-fixed-top">
                <div class="container">
                <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#toggle">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand page-scroll" href="#page-top"><span>Welcome</span></a>
                </div>
                <div class="collapse navbar-collapse" id="toggle">
                        <ul class="nav navbar-nav">
                            <li class="lBorder"><a class="page-scroll" href="#intro">Accueil</a></li>
                            <li class="lBorder"><a class="page-scroll" href="#selling">Annonces</a></li>
                            <li class="lBorder"><a class="page-scroll" href="#about">A propos</a></li>
                            <li class="lBorder"><a class="page-scroll" href="#contact">Contact</a></li>
                        </ul>
                </div>							
                </div>
            </nav>
        <!-- End of Navigation section-->

        <!-- Intro Section -->
            <header id="intro" class="intro">
                <div class="intro-box-second-theme container-fluid">
                    <div class="container">
                        <h1>Trouver votre propriété</h1>
                        <p>Avec nous n'y a plus de problèmes d'hébergement</p>
                        <div class="intro-btn">
                            <a class="page-scroll btn-custom" href="{{ route('login') }}">Login</a>
                        </div>
                    </div>
            </div>
            </header>
        <!-- Intro Section -->
        
        <!-- Selling Section -->
            <div id="selling" class="second-theme-selling">
                <div class="selling-title container-fluid ">
                    <div class=" container second-theme-title">
                        <h2>Prenez votre choix</h2>
                    </div>
                </div>
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab-villa" data-toggle="tab">Vente</a></li>
                    <li><a href="#tab-appartment" data-toggle="tab">Location</a></li>
                </ul>
                <div class="tab-content container-fluid">
                    <!-- Appartment Tab -->
                    <div id="tab-villa" class="tab-pane active container">
                        <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="sub-box">
                            <img class="img-responsive" src="{{asset('frontDesign/img/selling-img/sel-img1.jpg')}}">
                            <div class="sub-box-content">
                                <h5>UT WISI</h5>
                                <p class="description text-muted">
                                Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper.
                                </p>
                                <p class="infos" data-toggle="modal" data-target="#description">Nouveau</p>
                                <p class="link text-right" data-toggle="modal" data-target="#pictures">Images</p>
                            </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-custom">Plus d'annonces</button> <!-- add new page for consulting all annonces-->
                        </div>
                    </div>
                    <!-- Appartment Tab -->
                    <div id="tab-appartment" class="tab-pane container">
                        <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="sub-box">
                            <img class="img-responsive" src="{{asset('frontDesign/img/selling-img/sel-img7.jpg')}}">
                            <div class="sub-box-content">
                                <h5>UT WISI</h5>
                                <p class="description text-muted">
                                Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper.
                                </p>
                                <p class="infos" data-toggle="modal" data-target="#description">News</p>
                                <p class="link text-right" data-toggle="modal" data-target="#pictures">Pictures</p>
                            </div>
                            </div>
                        </div>
                        </div>
                        <button type="submit" class="btn btn-custom">Plus d'annonces</button>
                    </div>
                    <!-- Terrain Tab -->
                    <div id="tab-terrain" class="tab-pane container">
                        <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="sub-box">
                            <img class="img-responsive" src="{{asset('frontDesign/img/selling-img/sel-img6.jpg')}}">
                            <div class="sub-box-content">
                                <h5>UT WISI</h5>
                                <p class="description text-muted">
                                Mieux acheter, mieux louer
                                </p>
                                <p class="infos" data-toggle="modal" data-target="#description">News</p>
                                <p class="link text-right" data-toggle="modal" data-target="#pictures">Pictures</p>
                            </div>
                            </div>
                        </div>
                        </div>
                        <button type="submit" class="btn btn-custom">WANT MORE</button>
                    </div>
                </div>
            </div>
        <!-- End of Selling Section -->

        <!-- About Section -->
            <div id="about" class="second-theme-about container-fluid">
                <div class="container">
                    <div class="second-theme-title">
                        <h2> ABOUT US</h2>
                        <p>Ce service vous permet de découvrir instantanément à quel prix vendre votre logement. Cette estimation est un premier indicateur marché. Nous vous invitons à l&#x27;affiner auprès des meilleurs agents immobiliers experts de votre quartier que nous avons sélectionné pour vous.</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="timeline">
                                <li>
                                    <div class="timeline-image animation">
                                        <i class="fa fa-cogs"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="subheading">Spécialité</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p class="text-muted">Recommandation Des avis clients certifiés émis par d'autres vendeurs et garantis authentiques qui viennent appuyer le choix du professionnel de l'immobilier</p>
                                        </div>
                                    </div>
                                </li>
                                
                                   
                                <li>
                                    <div class="timeline-image animation">
                                        <i class="fa fa-tasks"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="subheading">Nos Services</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p class="text-muted">Rapidité Des agents immobiliers qui vous contactent dans un délai maiximum de 48h pour planifier gratuitement l'estimation de votre bien immobilier</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-image animation">
                                        <i class="fa fa-group"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="subheading"> Expertise</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p class="text-muted"> Des professionnels sélectionnés pour avoir vendus des biens similaires dans votre quartier</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-image last animation">
                                        <h4>{S.S}</h4>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        <!-- About Renting Section -->

        <!-- Contact Section -->
            <div id="contact" class="container-fluid second-theme-contact">
                <div class="container">
                    <div class="second-theme-title">
                       
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-5 col-lg-4">
                            <div class="box">
                                <form class="form-horizontal">
                                <h4>Contacter nous </h4>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                    <input type="text" class="form-control" placeholder="Your Name ">	
                                    </div>
                                </div>  	
                                <div class="form-group">
                                    <div class="col-xs-12">
                                    <input type="text" class="form-control" placeholder="Your Mail ">	
                                    </div>
                                </div>  	
                                <div class="form-group">
                                    <div class="col-xs-12">
                                    <textarea class="form-control" placeholder="Your Message"></textarea>	
                                    <button type="submit" class="btn btn-custom">envoyer <i class="fa fa-send"></i></button>
                                    </div>
                                </div>  	
                                </form>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-7 col-lg-8">
                            <div class="box">
                                <h4>Get In Touch</h4>
                                <ul class="social-icon-link">
                                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                    <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href=""><i class="fa fa-instagram"></i></a></li>
                                </ul>
                                <hr>
                                <ul class="address">
                                    <li>
                                    <p>
                                        <i class="fa fa-phone"></i>&nbsp;&nbsp;&nbsp;+216 50 314 831
                                    </p>
                                    </li>
                                    <li>
                                    <p>
                                        <i class="fa fa-envelope"></i>&nbsp;&nbsp;&nbsp;raghdajd0@gmail.com
                                    </p>
                                    </li>
                                    <li>
                                    <p>
                                        <i class="fa fa-map-marker"></i>&nbsp;&nbsp;&nbsp;Sousse, rue elcarthage, Maison de luxe</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        <!-- End of Contact Section -->

        <!-- Footer Section -->
            <footer>
                <div class="row container-fluid">
                <div class="container">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <h5><span>{S.S}</span> Sousse</h5>
                    <ul>
                    <li><a class="page-scroll" href="#selling">Annonces</a></li>
                    <li><a class="page-scroll" href="#about">A propos de nous</a></li>
                    <li><a data-toggle="modal" href="#contact-form">Contact</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <h5>FOLLOW US</h5>
                    <ul>
                    <li><a href=""><i class="fa fa-facebook"></i> Facebook</a></li>
                    <li><a href=""><i class="fa fa-twitter"></i> Twitter</a></li>
                    <li><a href=""><i class="fa fa-google-plus"></i> Google Plus</a></li>
                    <li><a href=""><i class="fa fa-linkedin"></i> Linkedin</a></li>
                    <li><a href=""><i class="fa fa-instagram"></i> Instagram</a></li>
                    </ul>
                </div>
                </div> 
                </div>
                <div class="footer-ending text-center">
                <p>&copy; Agence immobilière Raghda Sousse</p>
                </div>
            </footer>
        <!-- End of Footer Section -->

        <!-- Modal Boxes -->
            <!-- house description-->
            <div id="description" class="modal fade main-modal"  tabindex="-1" aria-hidden="true">
                <div class="container-fluid row">
                    <div class="modal-content col-xs-12 col-sm-6 col-sm-push-3">
                        <div class="modal-content-header">
                        <i class="fa fa-times animation" data-dismiss="modal"></i>
                        </div>
                        <div class="modal-content-body">
                            <div class="description">
                                <h4>Nouveau menu</h4>
                                <div class="box">
                                <p>
                                </p>
                                <ul>
                                    <li><i class="fa fa-chevron-right"></i>&nbsp;&nbsp;1 Piscine</li>
                                    <li><i class="fa fa-chevron-right"></i>&nbsp;&nbsp;1 Bureau privé
</li>
                                    <li><i class="fa fa-chevron-right"></i>&nbsp;&nbsp;5 chambre</li>
                                    <li><i class="fa fa-chevron-right"></i>&nbsp;&nbsp;1 jardin</li>
                                </ul>
                                <p class="footer">
                                    <span class="title">Price</span><span class="label label-danger text-left"> 15000 dt</span>
                                </p>
                                </div>
                            </div>
                            <div class="map">
                                <h4>Maison Address</h4>
                                <p>Sousse, rue carthaj, Maison Luxe</p>
                                <div class="box">
                                    <div class="google-map"><i class="fa fa-map-marker"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- End of house description-->
        <!-- House Pictures-->
            <div id="pictures" class="modal fade main-modal" tabindex="-1" aria-hidden="true">
                <div class="container-fluid row">
                    <div class="modal-content col-xs-12 col-sm-8 col-sm-push-2">
                        <div class="modal-content-header">
                        <i class="fa fa-times animation" data-dismiss="modal"></i>
                        </div>
                        <div class="modal-content-body">
                            <div id="houses-pictures" class="carousel slide">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img class="img-responsive img-thumbnail" src="img/selling-img/sel-img1.jpg">
                                    </div>
                                    <div class="item">
                                        <img class="img-responsive img-thumbnail" src="img/selling-img/sel-img2.jpg">
                                    </div>
                                    <div class="item">
                                        <img class="img-responsive img-thumbnail" src="img/selling-img/sel-img3.jpg">
                                    </div>
                                    <div class="item">
                                        <img class="img-responsive img-thumbnail" src="img/selling-img/sel-img4.jpg">
                                    </div>
                                    <div class="item">
                                        <img class="img-responsive img-thumbnail" src="img/selling-img/sel-img5.jpg">
                                    </div>
                                    <div class="item">
                                        <img class="img-responsive img-thumbnail" src="img/selling-img/sel-img6.jpg">
                                    </div>
                                </div>
                                <a class="direction direction-left animation" href="#houses-pictures" data-slide="prev">
                                    <i class="fa fa-chevron-left"></i>
                                </a>
                                <a class="direction direction-right animation" href="#houses-pictures" data-slide="next">
                                    <i class="fa fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- End of House Pictures-->
        <!-- End of Modal Boxes -->

        <!-- Social Icons -->
        <div class="social-icon-menu">
            <i class="fa fa-ellipsis-v animation"></i>
                <ul class="socials-icon">
                    <div class="socials-icon-border">
                        <li>
                            <a href="">
                                <i class="fa fa-facebook"></i>&nbsp; Facebook
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-twitter"></i>&nbsp; Twitter
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-google-plus"></i>&nbsp; Google Plus
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-linkedin"></i>&nbsp; Linkedin
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-instagram"></i>&nbsp; Instagram
                            </a>
                        </li>
                    </div>
                </ul>
        </div>
        
        <!-- End of Social Icons -->




    <!-- jQuery-->
    <script src="{{ asset('frontDesign/js/jquery.min.js') }}"></script>
    <!-- Bootstrap Core Javascript--> 
    <script src="{{ asset('frontDesign/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Plugins -->
    <script src="{{ asset('frontDesign/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('frontDesign/js/fancybox.js') }}"></script>
    <script src="{{ asset('frontDesign/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('frontDesign/js/progressbar.min.js') }}"></script>
    <script src="{{ asset('frontDesign/js/plugins.js') }}"></script>
    <script src="{{ asset('frontDesign/js/script.js') }}"></script>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
        <link rel="stylesheet" href="{{ asset('css/icon-font.css') }}">
        <link rel="shortcut icon" type="image/png" href="{{ asset('img/logo-white.png') }}">
        <title> Marketo</title>
        <link   
             rel = "icon" 
            href ="{{ asset('img/logo-green-small-1x.png') }}" 
            type = "image/x-icon">

        <link rel="stylesheet"href="{{ asset('css/bootstrap.css') }}"/>
       <!--Animate.css-->
       <link rel="stylesheet"href="{{ asset('css/animate.min.css') }}"/>
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Pacifico"rel="stylesheet">
       <link href="https://fonts.googleapis.com/css?family=Exo+2&display=swap" rel="stylesheet"><!---AOS LAIBIRARY-->
       <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

       <link rel="stylesheet" href="{{ asset('css/main.css') }}">
	   <!--Internet Explorer-->
	    <script src="{{ asset('js/html5shiv.min.js') }}"></script>
	   	<script src="{{ asset('js/js/respond.min.js') }}"></script>
    </head>
    <body>
        <!---- Start nav ---->
        <nav class="nav">
            <div class="container">
                <div class="">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="nav__logo-box">
                                <img src="{{ asset('img/logo-green-small-1x.png') }}" alt="logo" class="nav__logo">  
                            </div>
                        </div>
                        <div class="col-md-8">

                            <div class="nav__cart-box text-center">
                                @if( auth()->check() )
                                <a href="{{route('history')}}" class="paragraph-white">Purchase History </a> 
                                <a href="{{route('cart')}}"> <span> <i class="fas fa-cart-plus"></i> </span> </a> 
                                <div class="dropdown">
                              

                                    <a href="#"class="paragraph-white margin-left-1"> <span><i class="far fa-user"></i> </span> {{ auth()->user()->name }}</a>
                                    <div class="dropdown__content">
                                      <a href="{{route('logout')}}">LogOut</a>
                                    </div>
                                
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </nav>

        <nav class="nav2 bg-white">
            <div class="container">
                <div class="nav2__content">
                    <div class="nav2__logo-box d-flex justify-content-between" style="width: 100%;">
                        <!-- <div class="dropdown">
                            <a href="#"class="dropdown__dropbtn"> <span><i class="fa fa-list-ul"></i> </span> All Categories</a>
                            <div class="dropdown__content">
                              <a href="#">Cars</a>
                              <a href="#">Phones</a>
                              <a href="#">Electronics</a>
                            </div>
                        </div> -->
                        <a href="{{route('categories')}}" class="dropdown__dropbtn"> <span><i class="fa fa-list-ul"></i> </span>Show All Categories</a>
                        
                        @if( !auth()->check() )
                         
                            <a href="{{route('get-start')}}" class="btn btn-primary padding-btn">Login</a>
                            @endif
                    </div>
                </div>
            </div>
        </nav>
        
        <!----- Start Slider ----->
        <div class="head" style="position: relative;width: 100%;height: 100vh;">
            <div id="particles-js"style="position:absolute;z-index:999;top:0;left:0 ; width:100%"></div>
            <header class="header" style="position: absolute;z-index: 1;top: 0 ; left: 0; width: 100%;height: 100%;">
                <!---- Logo section ---->

                <!---- Central Box Word Section ---->
                <div class="header__text-box">
                    <h1 class="heading-primary">
                        <span class="heading-primary--main">high quality <span class="heading-primary--main-2">corporate them</span></span> 
                        <span class="heading-primary--sub"><span class="heading-primary--sub-2">For</span> Marketing</span>
                    </h1>
                    <p class="heading-primary-2">Marketo is a Management Services Organization work in marketing field </p>
                </div>
    
            </header>
        </div>


        <!---- End Header ---->

        <!---- Start About Section ---->

        <main>
            <section class="section-about" id="about">
                <div class="container">
                    <div class="text-center-class margin-bottom-8">
                        <h1 class="heading-primary">
                            <span class="heading-primary--main"><span class="heading-primary--main-2">Features</span></span> 
                        </h1>
                        <h2 class="heading-secondary text-center">
                            WHO Marketo IS !!
                        </h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6 text-center" style="padding-top: 1rem;">
                            <h3 class="heading-tertiary margin-bottom-small ">Let's make your home happy place !!</h3>
                            <p class="paragraph">
                                Marketo is a Management Services Organization work in marketing field we provide nice offers for our customers every week                             
                            </p>
                        </div>
                        <div class="col-md-6">
                            <div class="composition">
                                <img src="{{ asset('img/1.jpg') }}" alt="Photo 1" class="composition__photo composition__photo--p1">
                                <img src="{{ asset('img/2.jpg') }}" alt="Photo 2" class="composition__photo composition__photo--p2">
                                <img src="{{ asset('img/3.jpg') }}" alt="Photo 3" class="composition__photo composition__photo--p3">
                            </div>
                            <!-- <video width="100%" controls>
                                <source src="img/video.mp4" type="video/mp4">
                              </video> -->
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!---------- End About Section --------->


        <!----------  Start What We Do Section  -------->

        <div class="section-do">
            <div class="container">
                <div class="text-center-class margin-bottom-8">
                    <h1 class="heading-primary">
                        <span class="heading-primary--main"><span class="heading-primary--main-2">Marketo</span></span> 
                    </h1>
                    <h2 class="heading-secondary text-center">
                        What We Do!!
                    </h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="">
                            <img src="{{ asset('img/home.png') }}" alt="Photo 1" class="composition__photo--service">                        
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="primary-box">
                            <ul class="primary-box__list wow fadeInUp" data-wow-duration="2s">
                                <li>facilitating transactions and communications </li>
                                <li> Organizing the payment movement </li>
                                <li>Quick and fast procedures</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <!-------------- Our Team Section -------------->

        <div class="our-team" id="team">
            <div class="container">
                <div class="text-center-class margin-bottom-8">
                    <h1 class="heading-primary">
                        <span class="heading-primary--main"><span class="heading-primary--main-white">Our Team</span></span> 
                    </h1>
                    <h2 class="heading-secondary text-center margin-bottom-small">
                        let's meet our team 
                    </h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card text-center">
                            <img src="{{ asset('img/team_31.png') }}" alt="" class="card__image">
                            <h3 class="card__heading">Founder</h3>
                            <h2 class="">
                                Abdelrahim Aref Ahmed
                            </h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center">
                            <img src="{{ asset('img/team_31.png') }}" alt="" class="card__image">
                            <h3 class="card__heading">Founder</h3>
                            <h2 class="">
                                Abdelrahman Mostafa Saber
                            </h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center">
                            <img src="{{ asset('img/team_41.png') }}" alt="" class="card__image" >
                            <h3 class="card__heading">Cto</h3>
                            <h2 class="">
                                Ali Zakaria
                            </h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center">
                            <img src="img/team_31.png" alt="" class="card__image">
                            <h3 class="card__heading">Cio</h3>
                            <h2 class="">
                                Omar Abdelslam
                            </h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center">
                            <img src="{{ asset('img/team_41.png') }}" alt="" class="card__image">
                            <h3 class="card__heading">Founder</h3>
                            <h2 class="">
                                Islam Mohamed Amin
                            </h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center">
                            <img src="{{ asset('img/team_31.png') }}" alt="" class="card__image">
                            <h3 class="card__heading">Founder</h3>
                            <h2 class="">
                                Soliman Ahmed 
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!---- Propaganda section ---->

        <div class="section-propaganda">
            <div class="container">
                <div class="text-center-class margin-bottom-8">
                    <h1 class="heading-primary">
                        <span class="heading-primary--main"><span class="heading-primary--main-white">Services</span></span> 
                    </h1>
                    <h2 class="heading-secondary text-center margin-bottom-small">
                        What We Do Best !! 
                    </h2>
                    <p class="paragraph">You're going to have facilitate in buying what you want!!</p>
                    <a href="{{route('get-start')}}" class="btn btn--blue btn--animated-top-bottom padding-btn">Get Start</a>
                </div>
            </div>
        </div>



        <!------- Footer Section ------>

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('img/logo-green-small-1x.png') }}" alt=""class="img-footer">
                        <p class="paragraph">
                            Marketo is a Management Services Organization work in marketing field we provide nice offers for our customers every week                    
                        </p>
                    </div>
                    <div class="col-md-4">
                        <h4 class="paragraph-white">Contacts</h4>
                        <div class="footer__contents">
                            <p class="paragraph margin-bottom-small">
                                <span class="footer__contents--icon">
                                    <i class="fas fa-phone-volume"></i>
                                </span>
                                (02) 1018878627
                            </p>
                            <p class="paragraph margin-bottom-small">
                                <span class="footer__contents--icon">
                                    <i class="fab fa-google"></i>
                                </span>
                                marketo@gmail.com
                            </p>
                            <p class="paragraph margin-bottom-small">
                                <span class="footer__contents--icon">
                                    <i class="fab fa-facebook-f"></i>
                                </span>
                                Marketo
                            </p>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <h4 class="paragraph-white">Fast Links</h4>
                        <div class="footer__contents">
                            <p class="paragraph margin-bottom-small">
                              <a href="home-page.html">Home</a>  
                            </p>
                            <p class="paragraph margin-bottom-small">
                                <a href="#about">About Section</a>
                            </p>
                            <p class="paragraph margin-bottom-small">
                                <a href="#our-team">Marketo team</a>
                            </p>
                        </div>

                    </div>
                </div>

            </div>
        </footer>

        <div id="goUPButton">
            <i class="fas fa-angle-up"onclick=goUP()></i>
        </div>

        <script src="{{ asset('js/particles.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
        <script src="{{ asset('js/wow.min.js') }}"></script>
        <script>
          new WOW().init();
        </script>
		<script src="{{ asset('js/jQuery3.3.1.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<script src="{{ asset('js/e.js') }}"></script>
    </body>
</html>

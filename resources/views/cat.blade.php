<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

        <link rel="stylesheet" href="css/icon-font.css">
        <link rel="shortcut icon" type="image/png" href="img/logo-white.png">
        <title> Marketo</title>
        <link   
             rel = "icon" 
            href ="img/logo-green-small-1x.png" 
            type = "image/x-icon">

        <link rel="stylesheet"href="css/bootstrap.css"/>
       <!--Animate.css-->
       <link rel="stylesheet"href="css/animate.min.css"/>
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Pacifico"rel="stylesheet">
       <link href="https://fonts.googleapis.com/css?family=Exo+2&display=swap" rel="stylesheet"><!---AOS LAIBIRARY-->
       <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

       <link rel="stylesheet" href="css/main.css">
	   <!--Internet Explorer-->
	    <script src="js/html5shiv.min.js"></script>
	   	<script src="js/respond.min.js"></script>
    </head>
    <body>
        <nav class="nav">
            <div class="container">
                <div class="">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="nav__logo-box">
                                <img src="img/logo-green-small-1x.png" alt="logo" class="nav__logo">  
                            </div>
                        </div>
                        <div class="col-md-8">

                            <div class="nav__cart-box text-center">
                                <a href="history.html" class="paragraph-white">Purchase History </a> 
                                <a href="cart.html"> <span> <i class="fas fa-cart-plus"></i> </span> </a> 
                                <div class="dropdown">
                                    <a href="#"class="paragraph-white margin-left-1"> <span><i class="far fa-user"></i> </span> Ahmed Mohamed</a>
                                    <div class="dropdown__content">
                                      <a href="form.html">LogOut</a>
                                    </div>
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
                    <div class="nav2__logo-box">
                        <!-- <div class="dropdown">
                            <a href="#"class="dropdown__dropbtn"> <span><i class="fa fa-list-ul"></i> </span> All Categories</a>
                            <div class="dropdown__content">
                              <a href="#">Cars</a>
                              <a href="#">Phones</a>
                              <a href="#">Electronics</a>
                            </div>
                        </div> -->
                        <a href="all-categories.html"class="dropdown__dropbtn"> <span><i class="fa fa-list-ul"></i> </span>Show All Categories</a>
                    </div>
                </div>
            </div>
        </nav>
        
        <!----- Start Slider ----->

        <div class="slider-section">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">All Categories</li>
                    </ol>
                </nav>
            </div>
        </div>


        <!---- Start Categories Section ---->

        <div class="Categories" id="cat">
            <div class="container">
                <div class="text-center-class margin-bottom-8">
                    <h2 class="heading-secondary text-center">
                        All <span>Shoes</span> products
                    </h2>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card text-center">
                            <a href="cat.html"><img src="img/banner1_img-min.jpg" alt="" class="card__image2"></a>
                            <div class="d-flex justify-content-between" style="padding: 1rem;">
                                <h3>Vanse</h3>
                                <h3>300 LE</h3>
                            </div>
                            <h3 class="card__heading">4 Products Exist</h3>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary">Add To Cart</button>
                        </div>
                        
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center">
                            <a href="cat.html"><img src="img/1.jpg" alt="" class="card__image2"></a>
                            <div class="d-flex justify-content-between" style="padding: 1rem;">
                                <h3>banse</h3>
                                <h3>200 LE</h3>
                            </div>
                            <h3 class="card__heading">4 Products Exist</h3>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary">Add To Cart</button>
                        </div>
                        
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center">
                            <a href="cat.html"><img src="img/1.jpg" alt="" class="card__image2"></a>
                            <div class="d-flex justify-content-between" style="padding: 1rem;">
                                <h3>banse</h3>
                                <h3>200 LE</h3>
                            </div>
                            <h3 class="card__heading">4 Products Exist</h3>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary">Add To Cart</button>
                        </div>
                        
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center">
                            <a href="cat.html"><img src="img/1.jpg" alt="" class="card__image2"></a>
                            <div class="d-flex justify-content-between" style="padding: 1rem;">
                                <h3>banse</h3>
                                <h3>200 LE</h3>
                            </div>
                            <h3 class="card__heading">4 Products Exist</h3>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary">Add To Cart</button>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>


        <!------- Footer Section ------>

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <img src="img/logo-green-small-1x.png" alt=""class="img-footer">
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

        <script src="js/particles.js"></script>
        <script src="js/app.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
        <script src="js/wow.min.js"></script>
        <script>
          new WOW().init();
        </script>
		<script src="js/jQuery3.3.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<script src="js/e.js"></script>
    </body>
</html>

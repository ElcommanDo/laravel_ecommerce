<html>
   <head>
	   <!--TO Support Many Language Include Arabic Language-->
        <meta charset="utf-8"/>
	   
	   <!--For Internet Explorer-->
	    <meta http-equiv="X-UA-	Compatible"content="IE=edge">
	   
	   <!--First mobilw meta-->
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	   
        <meta name="description"content="mt company">
        <title> Marketo</title>
        <link   
             rel = "icon" 
            href ="{{ asset('img/logo-green-small-1x.png') }}" 
            type = "image/x-icon">

            <link rel="stylesheet"href="{{ asset('css/bootstrap.css') }}"/>
      <!--Page Style-->	   
        <link rel="stylesheet"href="{{ asset('css/form.css') }}"/>
       <!--Animate.css-->
      
       <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>        
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
       <link href="https://fonts.googleapis.com/css?family=Pacifico"rel="stylesheet">
       <link href="https://fonts.googleapis.com/css?family=Exo+2&display=swap" rel="stylesheet"><!---AOS LAIBIRARY-->
       <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	   <!--Internet Explorer-->
       <script src="{{ asset('js/html5shiv.min.js') }}"></script>
	   	<script src="{{ asset('js/js/respond.min.js') }}"></script>
 
       <!---->
	</head>
	<body>
        <div id="particles-js"></div>

        <div class="page-content">
            <header>
                <div class="container">
                    <nav>
                        <div class="nav__img">
                            <img src="img/logo-green-small-1x.png" alt="logo">
                        </div>
                        <div class="nav__join">
                            <button class="btn btn-white join-us" onclick="x()">Join Us</button>
                        </div>
                    </nav>
                </div>
            </header>
    
            <!------------------------ Landing Content ---------------------->
    
            <div class="content-cover">
                <div class="container">
                    <div class="row text-center">  
                        <div class="col-md-8 offset-md-2 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0s" style="margin-top: 130px;padding: 40px;">
                            <h1 class="content-cover__heading">MARKETO</h1>
                            <p class="content-cover__paragraph">
                                Marketo is a Management Services Organization work in marketing field we provide nice offers for our customers every week

                            </p>
                            <button class="btn btn-primary get-start">Get Start</button>
                            <a href="{{route('home')}}" class="btn btn-success home-page">Home Page</a>
                        </div>
                    </div>
                </div>
            </div>
    
    
            <!------------------Login Card------------------>
    
            <div class="col-lg-4 offset-lg-4 col-md-6 offset-md-3 wow fadeInUp card-cover" data-wow-duration="2s" data-wow-delay="0s" style="display: none;">
               <h1 class="text-center text-white">Welcome To Marketo!!</h1> 
                <div class="card">
                    <div class="close">X</div>
                    <div class="card-body text-center">
                        <img src="{{ asset('img/logo-green-small-1x.png') }}" alt="">
                        <h3 class="text-center text-muted h4content">SIGN IN TO Marketo</h3>
                        <form method="post" class="form" role="form" autocomplete="off"action="{{route('sign-up')}}">  
                        {{ csrf_field() }} 
                        <div class="form-group">
                                <input name="email" type="email"class="form-control input" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input name="password" type="password"class="form-control input" placeholder="Password">
                            </div>
                            
                            <div class="form-group">
                                <select name="select1" class="form-control " id="Select1">
                                  <option value="">Login As...</option>
                                  <option value="user">User</option>
                                  <option value="admin">Admin</option>
                                </select>

                            <div class=" text-center">
                                <button type="submit" class="btn btn-primary my-4"> Login</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div> 
        </div>

                        <!------------------Login Card------------------>
    
            <div class="col-lg-4 offset-lg-4 col-md-6 offset-md-3 wow fadeInUp card-cover-reg" data-wow-duration="2s" data-wow-delay="0s" style="display: none;">
                <h1 class="text-center text-white">Welcome To Marketo!!</h1> 
                <div class="card">
                    <div class="close">X</div>
                    <div class="card-body text-center">
                        <img src="{{ asset('img/logo-green-small-1x.png') }}" alt="">
                        <h3 class="text-center text-muted h4content">Let's Join Marketo</h3>
                        <form method="post" class="form" role="form" autocomplete="off" action="{{route('register')}}">  
                             {{ csrf_field() }}    
                        <div class="form-group">
                                <input type="text"class="form-control input" placeholder="Name" name="name">
                            </div>
                            <div class="form-group">
                                <input type="email"class="form-control input" placeholder="Email" name="email">
                            </div>
                            <div class="form-group">
                                <input type="password"class="form-control input" placeholder="Password" name="password">
                            </div>
                            
                            <div class="form-group text-center">
                                <input type="submit" class="btn btn-primary my-4" id="sendButton"></input>
                            </div>                          
                        </form>
                    </div>
                </div>
            </div> 

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
		<script src="{{ asset('js/form.js') }}"></script>
	</body>
    


</html>
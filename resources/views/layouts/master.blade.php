<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title>
    	@section('title')
            | Welcome to XXX
        @show
    </title>

    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/lib.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/animate/animate.min.css') }}" />
    <!-- global js start -->
    <script  src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    
</head>

<body>
    <!-- Header Start -->
    <header>
        <!-- Icon Section Start -->
        <div class="icon-section">

            <div class="container">
        
               <nav class="navbar navbar-default container">
        
                   <div class="navbar-header">                    

                        <a class="navbar-brand" href="/home">

                            <img src="{{ asset('assets/images/logo.png') }}" alt="logo" class="logo_position">
                        
                        </a>
                  
                   </div>
                   
                   <div class="collapse navbar-collapse" id="collapse">
                     
                       <ul class="nav navbar-nav navbar-right">
                        
                          <li {!! (Request::is('/') ? 'class="active"' : '') !!}><a href="/"> Home</a></li>
                                    
                          <li {!! (Request::is('artist-toptracks') || Request::is('bands') ? 'class="active"' : '') !!}><a href="/" > Bands</a></li>

                          <li {{ (Request::is('news') ? 'class="active"' : '') }}><a href="#" > News</a></li>
                  
                          <li {{ (Request::is('contact') ? 'class="active"' : '') }}><a href="#">Contact</a></li>
                  
                        </ul>
                   
                    </div>
                
                </nav>
           
            </div>
        
        </div>
        <!-- //Icon Section End -->              
    </header>
    <!-- //Header End -->

     <!-- Content -->
    @yield('content')

    <!-- Footer Section Start -->
    <footer>
        <div class="container footer-text">
            <!-- About Us Section Start -->
            <div class="col-sm-4">
             
                <h4>About Us</h4>
                
                <p>
                    Music’s a lot more fun when you’re sharing it with someone. On Last.fm you can find like-minded music fans and discuss everything from your favourite artists and albums, to the latest obscure genre or big summer festival. No matter what you’re into, everyone’s welcome.
                </p>                
               
            </div>
            <!-- //About us Section End -->
            <!-- Contact Section Start -->
            <div class="col-sm-4">

                <h4>Contact Us</h4>

                <ul class="list-unstyled">

                    <li>xxx, Hythe St</li>

                    <li>Mount Druitt, NSW-2770.</li>
                    
                    <li><i class="livicon icon4 icon3" data-name="cellphone" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>Phone:+61452xxxxxx</li>
                    
                    <li><i class="livicon icon4 icon3" data-name="printer" data-size="18" data-loop="true" data-c="
                    #ccc" data-hc="#ccc"></i> Fax:xxx yyy zzzz</li>
                    
                    <li><i class="livicon icon3" data-name="mail-alt" data-size="20" data-loop="true" data-c="#ccc" data-hc="#ccc"></i> Email:<span class="text-success" style="cursor: pointer;">
                        alamin16au@gmail.com</span></li>
                   
                    <li><i class="livicon icon4 icon3" data-name="skype" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i> Skype:
                        <span class="text-success"  style="cursor: pointer;">alamin_kuet</span></li>
                
                </ul>
               
            </div>
            <!-- //Contact Section End -->
           
            <div class="col-sm-4" >

               <h4 class="menu">Follow Us</h4>
                  
                <ul class="list-inline">
                    <li>
                          <a href="#"> <i class="livicon" data-name="facebook" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i> </a>
                    </li>

                    <li>
                          <a href="#"> <i class="livicon" data-name="twitter" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i></a>
                    </li>

                    <li>
                          <a href="#"> <i class="livicon" data-name="google-plus" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i></a>
                    </li>
                      
                    <li>
                          <a href="#"> <i class="livicon" data-name="linkedin" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i></a>
                    </li>
                  
                    <li>
                          <a href="#"> <i class="livicon" data-name="rss" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i></a>
                    </li>

                </ul>
            
            </div>

        </div>

    </footer>
    <!-- //Footer Section End -->
   
    <div class="copyright">
        <div class="container"> <p>Copyright &copy; XXX, 2018</p> </div>
    </div>
    <!-- page level js -->
    @yield('footer_scripts')
    <!-- end page level js -->
     <script src="{{ asset('assets/js/raphael-min.js') }}"></script>

     <script src="{{ asset('assets/js/livicons-1.4.min.js') }}"></script>
</body>

</html>

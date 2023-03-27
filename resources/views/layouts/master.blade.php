<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title','Online Shop')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{asset('/')}}assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('/')}}assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('/')}}assets/css/style.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/css/popstyle.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
       
        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-4">
                <a href="" class="text-decoration-none">
                <img class="img-fluid logoss" src="assets/img/logo.png" alt="">
                <span class="logodel">MRF Trading Company</span>
                </a>
            </div>
            <div class="col-lg-4 col-6 text-left">
                <form action="{{url('search')}}" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for products" name="products">
                        <div class="input-group-append">
                            <button type="submit" class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 col-6 text-right">
                <p class="m-0">Customer Service</p>
                <h5 class="m-0">02333356324-5</h5>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                    <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Categories</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                    <div class="navbar-nav w-100">
                    @foreach($categories as $category)
                        <a href="{{route('pro',$category->id)}}" class="nav-item nav-link">{{$category->cat_name}}</a>
                    @endforeach
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <span class="h1 text-uppercase text-dark bg-light px-2">Multi</span>
                        <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Shop</span>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="{{route('viewpage')}}" class="nav-item nav-link active">Home</a>
                            <a href="{{route('propage')}}" class="nav-item nav-link">Shop</a>
                            <a href="{{route('brandpage')}}" class="nav-item nav-link">Brand</a>
                           
                            <a href="{{route('refundpage')}}" class="nav-item nav-link">Return & Refund Policy</a>
                            <a href="{{route('warrantypage')}}" class="nav-item nav-link">Warranty Policy</a>
                            <a href="{{route('aboutpage')}}" class="nav-item nav-link">About Us</a>
                        </div>
                        @if(session('name')  == 'superadmin')
                        <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                            <div class="nav-item dropdown ">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Customize <i class="fa fa-angle-down mt-1"></i></a>
                                    <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                        <a href="{{route('category.index')}}" class="dropdown-item">Category</a>
                                        <a href="{{route('product.index')}}" class="dropdown-item">Product</a>
                                        <a href="{{route('offer.index')}}" class="dropdown-item">Offer</a>
                                        <a href="{{route('notice.index')}}" class="dropdown-item">Notice</a>
                                        <a href="{{route('brand.index')}}" class="dropdown-item">Brand</a>
                                    </div>                           
                            </div>
                        </div>
                        @endif
                        <a href="{{route('authenticate')}}" class="nav-item nav-link">Log In</a>
                        <a href="{{route('signout')}}" class="nav-item nav-link"><i class="fas fa-sign-out-alt"></i></a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->





      @yield('content')


   


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-md-5">
                <h5 class="text-secondary text-uppercase mb-4">Get In Touch</h5>
                
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Corporate Headoffice in Metropole Chamber (3rd Floor), 846, Noor Ahmed Road, Chattogram-4000, Bangladesh</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i> shanjeevroy@gmail.com, roy052005@yahoo.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+8801716578602, +8801779199487, +8801711393053</p>
            </div>
            <div class="col-md-4 pl-5">
                
                    
                        <h5 class="text-secondary text-uppercase mb-4">Quick Shop</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="{{route('viewpage')}}"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-secondary mb-2" href="{{route('propage')}}"><i class="fa fa-angle-right mr-2"></i> Shop</a>
                            <a class="text-secondary mb-2" href="{{route('brandpage')}}"><i class="fa fa-angle-right mr-2"></i>Brand</a>
                            <a class="text-secondary mb-2" href="{{route('refundpage')}}"><i class="fa fa-angle-right mr-2"></i>Refund & privacy Policy</a>
                            <a class="text-secondary mb-2" href="{{route('warrantypage')}}"><i class="fa fa-angle-right mr-2"></i>Warranty Policy</a>
                            <a class="text-secondary mb-2" href="{{route('aboutpage')}}"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                           
                        </div>
                       
                   
                    
              
            </div>
            <div class="col-md-3 ">
                       
                        
                        
                        <h6 class="text-secondary text-uppercase mt-4 mb-3">Follow Us</h6>
                        <div class="d-flex">
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="https://www.facebook.com/mrfcomputers/?ref=pages_you_manage"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
        </div>
        <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-secondary">
                    &copy;  All Rights Reserved.   Developed By Shuvajid &Shovick
                 
                   
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="img/payments.png" alt="">
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('/')}}asstes/lib/easing/easing.min.js"></script>
    <script src="{{asset('/')}}assets/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="{{asset('/')}}assets/mail/jqBootstrapValidation.min.js"></script>
    <script src="{{asset('/')}}assets/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="{{asset('/')}}assets/js/main.js"></script>


</body>

</html>
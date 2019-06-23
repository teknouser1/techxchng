<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TEKNOXCHANGE &mdash; Welcome to the world of technology</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/4.1.1/bootstrap-social.min.css">
    <link rel="stylesheet" href="{{ URL::asset('/frontend/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/frontend/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/frontend/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/frontend/css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('/frontend/css/jquery.fancybox.min.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('/frontend/css/bootstrap-datepicker.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('/frontend/fonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('/frontend/css/aos.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('/frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/frontend/css/custom.css') }}">
    
  </head>
  <style type="text/css">
    .site-navbar{background: #C3C3C3;    position: fixed;}
    .first_section{margin-top: 35px;}
         .image-tech{width: 80%;height: 255px;}
         .tech-div{margin: 15px;}
  </style>
 
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar py-4  site-navbar-target" role="" style="">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="{{ url('/') }}" class="h2 mb-0">TEKNOXCHANGE<span class="text-primary">.</span> </a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-fix text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="{{ url('/') }}" class="nav-link">Home</a></li>
                <li><a href="{{ url('/my-profile') }}" class="nav-link">My Profile</a></li>
                @if((auth()->user()->hasRole('seller') || auth()->user()->hasRole('corporate-seller')))
                  <li><a href="{{route('seller.upload')}}" class="nav-link">Upload</a></li>
                @endif
                <li><a href="{{ url('/buyer-dashboard') }}" class="nav-link">Dashboard</a></li>
                <li><a href="#blog-section" class="nav-link">Help</a></li>
                <li><a href="#blog-section" class="nav-link">Blogs</a></li>
                <li><a href="#blog-section" class="nav-link">Messages</a></li>
                <li>
                  <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
                </li>
                

              </ul></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>
  
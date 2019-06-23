<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TEKNOXCHANGE &mdash; Welcome to the world of technology</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/4.1.1/bootstrap-social.min.css">
    <link rel="stylesheet" href="{{ asset('/css/frontend.css') }}">
    <script type="text/javascript" src="//platform.linkedin.com/in.js">
     api_key: '810phy2ng77uii'
     onLoad: onLinkedInLoad
     authorize: true
    </script>
    <script type="text/javascript">
    // 1. Runs when the JavaScript framework is loaded
    function onLinkedInLoad() {
     IN.Event.on(IN, "auth", onLinkedInAuth);
    }

    // 2. Runs when the viewer has authenticated
    function onLinkedInAuth() {
     IN.API.Profile("me").result(displayProfiles);
    }

    // 3. Runs when the Profile() API call returns successfully
    function displayProfiles(profiles) {
      console.log(profiles);
    }
    </script>
</head>
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
   
    
    <header class="site-navbar py-4 js-sticky-header  site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="#" class="h2 mb-0">TEKNOXCHANGE<span class="text-primary">.</span> </a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="{{url('/#home-section')}}" class="nav-link">Home</a></li>
                <li><a href="{{url('/#about-section')}}" class="nav-link">About Us</a></li>
                <li><a href="{{url('/#blog-section')}}" class="nav-link">Blog</a></li>
              </ul>
            </nav>
          </div>
          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>
        </div>
      </div>
      
    </header>
<div class="site-blocks-cover overlay" style="background-image: url({{url('/frontend/images/abstract-creative-background-with-light-bulb-RWNKHJ4.jpg')}});" data-aos="fade">
<div class="container ">
     <div class="row align-items-center justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email" class="">{{ __('E-Mail Address') }}</label>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="password" >{{ __('Password') }}</label>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        
                        
                        <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                        <hr>
                        <div class="form-group text-center">
                                <a href="{{ route('login.linkedin') }}" title="LinkedIn" class="btn btn-linkedin btn-lg"><i class="fa fa-linkedin fa-fw"></i> Register with LinkedIn</a>
                        </div>
                    </form>
                    <!-- <script type="in/Login"><login></login></script> -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div> <!-- .site-wrap -->  
  
  <script src="{{ asset('/js/frontend.js') }}"></script>
    
  </body>
</html>

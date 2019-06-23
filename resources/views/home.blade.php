@extends('common_template')

@section('content')
    <div class="site-blocks-cover overlay" style="background-image: url({{url('/frontend/images/abstract-creative-background-with-light-bulb-RWNKHJ4.jpg')}});" data-aos="fade" id="home-section">
      <div class="container">
        <div class="row align-items-center justify-content-center">

          
              <div class="col-md-6 mt-lg-5 text-center">
                <h1>Welcome to the world of TEKNOXCHANGE</h1>
                
                <div>
                  <!-- <a href="#" class="btn btn-primary mr-2 mb-2">Get Started</a> -->
                </div>
              </div>
            
        </div>
      </div>
    </div>  

    
    <div class="site-section cta-big-image" id="about-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">About TEKNOXCHANGE</h2>
          </div>
        </div>
        <div class="row">
            <div class="col-md-12  text-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam assumenda ea quo cupiditate facere deleniti fuga official. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam assumenda ea quo cupiditate facere deleniti fuga official
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam assumenda ea quo cupiditate facere deleniti fuga official
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam assumenda ea quo cupiditate facere deleniti fuga official
            </div>
        </div>  
      </div>  
    </div>

    
    <section class="site-section border-bottom" id="team-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            
            <h2 class="section-title mb-3">Technologies of the day</h2>
          </div>
        </div>
        <div class="row">
          

          <div class="col-md-6 col-lg-3 mb-4">
            <div class="team-member">
              <figure>
                <a href="{{ route('category-details') }}"><img src="{{ URL::asset('/frontend/images/3d-printing-in-the-laboratory-5QHZ6N8.jpg') }}" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="p-3">
                <h3><a href="{{ route('category-details') }}">CNC master<a></h3>
                <!-- <span class="position">Product Manager</span> -->
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4">
            <div class="team-member">
              <figure>
               <a href="{{ route('category-details') }}"> <img src="{{ URL::asset('/frontend/images/child-with-toy-virtual-reality-headset-PEQ9J7X.jpg') }}" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="p-3">
                <h3><a href="{{ route('category-details') }}">Robotics<a></h3>
                <!-- <span class="position">Product Manager</span> -->
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4">
            <div class="team-member">
              <figure>
               <a href="{{ route('category-details') }}"> <img src="{{ URL::asset('/frontend/images/circuit-board-closeup-P2999JN.jpg') }}" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="p-3">
                <h3><a href="{{ route('category-details') }}">Circuit board<a></h3>
               <!--  <span class="position">Product Manager</span> -->
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4">
            <div class="team-member">
              <figure>
                <a href="{{ route('category-details') }}"><img src="{{ URL::asset('/frontend/images/cnc-laser-plasma-cutting-of-metal-modern-PCD79QJ.jpg') }}" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="p-3">
                <h3><a href="{{ route('category-details') }}">Ultra machine<a></h3>
                <!-- <span class="position">Product Manager</span> -->
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4">
            <div class="team-member">
              <figure>
               <a href="{{ route('category-details') }}"> <img src="{{ URL::asset('/frontend/images/person_1.jpg') }}" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="p-3">
                <h3><a href="{{ route('category-details') }}">Man minds<a></h3>
                <!-- <span class="position">Product Manager</span> -->
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4">
            <div class="team-member">
              <figure>
              <a href="{{ route('category-details') }}"> <img src="{{ URL::asset('/frontend/images/home-renovation-and-electrical-system-Z4SFL9D.jpg') }}" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="p-3">
                <h3><a href="{{ route('category-details') }}">LED & solars<a></h3>
                <!-- <span class="position">Product Manager</span> -->
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4">
            <div class="team-member">
              <figure>
               <a href="{{ route('category-details') }}"> <img src="{{ URL::asset('/frontend/images/about_1.jpg') }}" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="p-3">
                <h3><a href="{{ route('category-details') }}">LED & solars<a></h3>
                <!-- <span class="position">Product Manager</span> -->
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4">
            <div class="team-member">
              <figure>
               <a href="{{ route('category-details') }}"> <img src="{{ URL::asset('/frontend/images/img_2.jpg') }}" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="p-3">
               <h3> <a href="{{ route('category-details') }}">Virtual reaity</a></h3>
                <!-- <span class="position"><a href="">Product Manager</a></span> -->
              </div>
            </div>
          </div>


          
        </div>
      </div>
    </section>
   
    <section class="site-section border-bottom" id="team-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            
            <h2 class="section-title mb-3">Featured Category</h2>
          </div>
        </div>
        <div class="row">
          

          <div class="col-md-6 col-lg-3 mb-4">
            <div class="team-member">
              <figure>
               <a href="{{ route('category') }}"> <img src="{{ URL::asset('/frontend/images/3d-printing-in-the-laboratory-5QHZ6N8.jpg') }}" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="p-3">
                <h3><a href="{{ route('category') }}">CNC master</a></h3>
                <!-- <span class="position">Product Manager</span> -->
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4">
            <div class="team-member">
              <figure>
                <a href="{{ route('category') }}"> <img src="{{ URL::asset('/frontend/images/child-with-toy-virtual-reality-headset-PEQ9J7X.jpg') }}" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="p-3">
                <h3><a href="{{ route('category') }}">Robotics</a></h3>
                <!-- <span class="position">Product Manager</span> -->
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4">
            <div class="team-member">
              <figure>
                <a href="{{ route('category') }}"> <img src="{{ URL::asset('/frontend/images/circuit-board-closeup-P2999JN.jpg') }}" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="p-3">
                <h3><a href="{{ route('category') }}">Circuit board</a></h3>
               <!--  <span class="position">Product Manager</span> -->
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4">
            <div class="team-member">
              <figure>
                <a href="{{ route('category') }}"> <img src="{{ URL::asset('/frontend/images/cnc-laser-plasma-cutting-of-metal-modern-PCD79QJ.jpg') }}" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="p-3">
                <h3><a href="{{ route('category') }}"> Ultra machine</a></h3>
                <!-- <span class="position">Product Manager</span> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section" id="blog-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            
            <h2 class="section-title mb-3">Blog Posts</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <a href="#"><img src="{{ URL::asset('/frontend/images/img_1.jpg') }}" alt="Image" class="img-fluid"></a>
              <h2 class="font-size-regular"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>
              
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
              <p><a href="#">Continue Reading...</a></p>
            </div> 
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <a href="#"><img src="{{ URL::asset('/frontend/images/img_2.jpg') }}" alt="Image" class="img-fluid"></a>
              <h2 class="font-size-regular"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>
              
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
              <p><a href="#">Continue Reading...</a></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <a href="#"><img src="{{ URL::asset('/frontend/images/img_1.jpg') }}" alt="Image" class="img-fluid"></a>
              <h2 class="font-size-regular"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>
             
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
              <p><a href="#">Continue Reading...</a></p>
            </div> 
          </div>
          
        </div>
      </div>
    </section>
    <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <p>Login</p>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
        
        <p class="text-center"><a href="{{ route('login-buyer') }}" title="LinkedIn" class="btn btn-linkedin btn-lg">Login As Buyer</a> | <a href="{{ route('login-seller') }}" title="LinkedIn" class="btn btn-linkedin btn-lg">Login As Seller</a></p>

        
      </div>    
      
    </div>

  </div>
</div>
@endsection
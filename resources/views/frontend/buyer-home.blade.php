@extends('common_template')

@section('content')
  

    
  <section class="site-section first_section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            
            <form class="navbar-form navbar-left" action="/action_page.php">
             <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search">
                  <div class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                      <i class="fa fa-search"></i>
                    </button>
                  </div>
                </div>
            </form>
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
    <!-- Technology Of the day -->
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
                <img src="{{ URL::asset('/frontend/images/3d-printing-in-the-laboratory-5QHZ6N8.jpg') }}" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3>CNC master</h3>
                 <span class="position">Product Manager</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4">
            <div class="team-member">
              <figure>
                <img src="{{ URL::asset('/frontend/images/child-with-toy-virtual-reality-headset-PEQ9J7X.jpg') }}" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3>Robotics</h3>
                 <span class="position">Product Manager</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4">
            <div class="team-member">
              <figure>
                <img src="{{ URL::asset('/frontend/images/circuit-board-closeup-P2999JN.jpg') }}" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3>Circuit board</h3>
               <!--  <span class="position">Product Manager</span> -->
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4">
            <div class="team-member">
              <figure>
                <img src="{{ URL::asset('/frontend/images/cnc-laser-plasma-cutting-of-metal-modern-PCD79QJ.jpg') }}" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3>Ultra machine</h3>
                 <span class="position">Product Manager</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4">
            <div class="team-member">
              <figure>
                <img src="{{ URL::asset('/frontend/images/person_1.jpg') }}" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3>Man minds</h3>
                 <span class="position">Product Manager</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4">
            <div class="team-member">
              <figure>
               <img src="{{ URL::asset('/frontend/images/home-renovation-and-electrical-system-Z4SFL9D.jpg') }}" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3>LED & solars</h3>
                 <span class="position">Product Manager</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4">
            <div class="team-member">
              <figure>
                <img src="{{ URL::asset('/frontend/images/about_1.jpg') }}" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3>LED & solars</h3>
                 <span class="position">Product Manager</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4">
            <div class="team-member">
              <figure>
                <img src="{{ URL::asset('/frontend/images/img_2.jpg') }}" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3>Virtual reaity</h3>
                <!-- <span class="position"><a href="">Product Manager</a></span> -->
              </div>
            </div>
          </div>


          
        </div>
      </div>
    </section>

<!-- Category wise listing -->
     <section class="site-section border-bottom" id="team-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            
            <h2 class="section-title mb-3">Category Wise Tech</h2>
          </div>
        </div>
        <div class="row">
          

          <div class="col-md-6 col-lg-3 mb-4">
            <div class="team-member">
              <figure>
                <img src="{{ URL::asset('/frontend/images/3d-printing-in-the-laboratory-5QHZ6N8.jpg') }}" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3>CNC master</h3>
                <span class="position">Neno technology</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4">
            <div class="team-member">
              <figure>
                <img src="{{ URL::asset('/frontend/images/child-with-toy-virtual-reality-headset-PEQ9J7X.jpg') }}" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3>Robotics</h3>
                 <span class="position">Product Manager</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4">
            <div class="team-member">
              <figure>
                <img src="{{ URL::asset('/frontend/images/circuit-board-closeup-P2999JN.jpg') }}" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3>Circuit board</h3>
              <span class="position">Product Manager</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4">
            <div class="team-member">
              <figure>
                <img src="{{ URL::asset('/frontend/images/cnc-laser-plasma-cutting-of-metal-modern-PCD79QJ.jpg') }}" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3>Ultra machine</h3>
                 <span class="position">Product Manager</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4">
            <div class="team-member">
              <figure>
                <img src="{{ URL::asset('/frontend/images/person_1.jpg') }}" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3>Man minds</h3>
                 <span class="position">Product Manager</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4">
            <div class="team-member">
              <figure>
               <img src="{{ URL::asset('/frontend/images/home-renovation-and-electrical-system-Z4SFL9D.jpg') }}" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3>LED & solars</h3>
                 <span class="position">Product Manager</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4">
            <div class="team-member">
              <figure>
                <img src="{{ URL::asset('/frontend/images/about_1.jpg') }}" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3>LED & solars</h3>
                 <span class="position">Product Manager</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4">
            <div class="team-member">
              <figure>
                <img src="{{ URL::asset('/frontend/images/img_2.jpg') }}" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3>Virtual reaity</h3>
                <span class="position"><a href="">Product Manager</a></span>
              </div>
            </div>
          </div>


          
        </div>
      </div>
    </section>
   
     <section class="site-section border-bottom" id="team-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 mb-4"><a href="#"> Terams & Conditions</a></div><div class="col-md-6 col-lg-3 mb-4"><a href="#"> Policy & Privacy</a></div>
        </div>
      </div>
    </section>
@endsection
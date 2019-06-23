@extends('common_template')

@section('content')
  

    
  <section class="site-section first_section" >
            <div class="container">
              <div class="row">
                <div class="col-md-4">
                    <strong>Test Patel</strong>
                    <div class="row tech-div">
                            <img src="{{ URL::asset('/frontend/images/userimage.png') }}" alt="Image" class="image-tech">
                    </div>
                  
                </div>
                <div class="col-md-8">
                    <table class="table">
                        <tr><td><strong>Name: </strong></td><td>Test Patel</td></tr>     
                        <tr><td><strong>Email: </strong></td><td>test@test.com</td></tr>     
                        <tr><td><strong>Industry: </strong></td><td>A1B2</td></tr>     
                        
                        <tr><td><strong>Brief Intro : </strong></td><td> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</td></tr>
                        
                        
                        
                   
                    </table>
                   
                </div>
              </div>

            </div>
          </section>
      
              
              <section class="site-section" >
                    <div class="container">
                    <div class="row">
                            <div class="col-md-6"><a href="">Terms & Conditions</a></div>
                            <div class="col-md-6"><a href="">Privacy & Policy</a></div>

                    </div>
                </div>
              </section>
@endsection
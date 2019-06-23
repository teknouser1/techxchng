@extends('common_template')

@section('content')
  

    
  <section class="site-section first_section">
            <div class="container">
              <div class="row">
                <div class="col-md-4">
                    <strong>Nano Technology</strong>
                    <div class="row tech-div">
                            <img src="{{ URL::asset('/frontend/images/img_1.jpg') }}" alt="Image" class="image-tech">
                    </div>
                    <div class="row">
                            <div class="col-md-4"> <img src="{{ URL::asset('/frontend/images/img_1.jpg') }}" alt="Image" class="img-thumbnail"> </div>
                            <div class="col-md-4"> <img src="{{  URL::asset('/frontend/images/img_1.jpg') }}" alt="Image" class="img-thumbnail"></div>
                            <div class="col-md-4"> <img src="{{  URL::asset('/frontend/images/img_1.jpg') }}" alt="Image" class="img-thumbnail"></div>
                    </div>
                </div>
                <div class="col-md-8">
                    <table class="table">
                        <tr><td><strong>Title: </strong></td><td>Technology ABC</td></tr>     
                        <tr><td><strong>Category: </strong></td><td>ABC</td></tr>     
                        <tr><td><strong>AssetID : </strong></td><td>A1B2</td></tr>     
                        <tr><td><strong>Patent : </strong></td><td>Yes</td></tr>     
                        <tr><td><strong>Operation of Technology : </strong></td><td>Text Data</td></tr>   
                        <tr><td><strong>Business Case  : </strong></td><td>Text Data</td></tr>  
                        <tr><td><strong>Applicability Domain  : </strong></td><td>Text Data</td></tr>
                        <tr><td><strong>Technology Readiness  : </strong></td><td>Idea</td></tr>
                        <tr><td><strong>Patented  : </strong></td><td>Yes</td></tr>     
                        <tr><td><strong>publication  Number  : </strong></td><td>ABOP768</td></tr>     
                        <tr><td><strong>summary : </strong></td><td> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</td></tr>
                        
                        
                        <tr><td colspan="2"><a href="" class="btn btn-primary">Chat With Seller</a> <a href="" class="btn btn-primary">Follow Activity</a> <a href="" class="btn btn-primary">Leave Feedback</a></td></tr>
                   
                    </table>
                   
                </div>
              </div>
            </div>
          </section>
      
          
          <section class="site-section border-bottom" id="team-section">
                <div class="container">
                        <div class="row mb-5">
                            <div class="col-12 text-center">
                                <h2 class="section-sub-title">Related Technology</h2>
                            </div>
                        </div>
          
                        <div class="row">
                            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                            <div class="h-entry">
                               <a href="{{ route('category-details') }}"> <img src="{{ URL::asset('/frontend/images/img_1.jpg') }}" alt="Image" class="img-fluid"></a>
                                <h2 class="font-size-regular"><a href="{{ route('category-details') }}"> Technology1</a></h2>
                                <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="{{ route('category-details') }}"> News</a></div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                                <p><a href="{{ route('category-details') }}"> know More...</a></p>
                            </div> 
                            </div>
                            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                            <div class="h-entry">
                                <a href="{{ route('category-details') }}"> <img src="{{ URL::asset('/frontend/images/img_2.jpg') }}" alt="Image" class="img-fluid"></a>
                                <h2 class="font-size-regular"><a href="{{ route('category-details') }}"> Technology1</a></h2>
                                <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="{{ route('category-details') }}"> News</a></div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                                <p><a href="{{ route('category-details') }}"> know More...</a></p>
                            </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                            <div class="h-entry">
                                <a href="{{ route('category-details') }}"> <img src="{{ URL::asset('/frontend/images/img_1.jpg') }}" alt="Image" class="img-fluid"></a>
                                <h2 class="font-size-regular"><a href="{{ route('category-details') }}"> Technology1</a></h2>
                                <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="{{ route('category-details') }}"> News</a></div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                                <p><a href="{{ route('category-details') }}"> know More...</a></p>
                            </div> 
                            </div>
                            
                        </div>
                </div>
              </section>
              
              <section class="site-section">
                    <div class="container">
                    <div class="row">
                            <div class="col-md-6"><a href="">Terms & Conditions</a></div>
                            <div class="col-md-6"><a href="">Privacy & Policy</a></div>

                    </div>
                </div>
              </section>
@endsection
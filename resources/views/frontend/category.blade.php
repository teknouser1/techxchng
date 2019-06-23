@extends('common_template')

@section('content')
  <div class="site-blocks-cover overlay" style="background-image: url({{ URL::asset('/frontend/images/hero_21.jpg') }});height: 150px;" data-aos="fade" id="home-section">
            <div class="container">
              
            </div>
          </div> 
          <section  class="site-section">
                <div class="container">
                        <form  class="p-5 bg-white">
                                <div class="row">
                                    <div class="col-md-10"><input type="text" class="form-control" placeholder="Search"></div>
                                    <div class="col-md-2"><button class="btn btn-primary mr-2 mb-2 btn-md text-white" type="submit">
                                            <i class="icon-search"></i>
                                        </button></div>
                                </div>
                                
                     </form>               
                                      
                        
                </div>

          </section>
        
        
          
          
      
          <section class="site-section">
            <div class="container">
                    <div class="row mb-5">
                        <div class="col-12 text-center">
                            <h2 class="section-sub-title">Technology</h2>
                        </div>
                    </div>
      
              <div class="row">
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                  <div class="h-entry">
                    <a href="{{ route('category-details') }}"> <img src="{{ URL::asset('/frontend/images/img_1.jpg') }}" alt="Image" class="img-fluid"></a>
                    <h2 class="font-size-regular"><a href="{{ route('category-details') }}"> Technology1</a></h2>
                     
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
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <div class="h-entry">
                          <a href="{{ route('category-details') }}"> <img src="{{ URL::asset('/frontend/images/img_1.jpg') }}" alt="Image" class="img-fluid"></a>
                          <h2 class="font-size-regular"><a href="{{ route('category-details') }}"> Technology1</a></h2>
                           
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
                      <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                            <div class="h-entry">
                              <a href="{{ route('category-details') }}"> <img src="{{ URL::asset('/frontend/images/img_1.jpg') }}" alt="Image" class="img-fluid"></a>
                              <h2 class="font-size-regular"><a href="{{ route('category-details') }}"> Technology1</a></h2>
                               
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
                          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                                <div class="h-entry">
                                  <a href="{{ route('category-details') }}"> <img src="{{ URL::asset('/frontend/images/img_1.jpg') }}" alt="Image" class="img-fluid"></a>
                                  <h2 class="font-size-regular"><a href="{{ route('category-details') }}"> Technology1</a></h2>
                                   
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
        <section class="site-section testimonial-wrap" id="testimonials-section">
                      <div class="container">
                        <div class="row mb-5">
                          <div class="col-12 text-center">
                            <h2 class="section-title mb-3">Our Blog Posts</h2>
                          </div>
                        </div>
                      </div>
                      <div class="slide-one-item home-slider owl-carousel">
                          <div>
                            <div class="testimonial">
                              
                              <div class="row">
                                <div class="col-md-6 col-sm-12">
                                  <div class="h-entry">
                                    <a href="{{ route('category-details') }}"> <img src="{{ URL::asset('/frontend/images/img_1.jpg') }}" alt="Image" class="img-fluid"></a>
                                   
                                  </div> 
                                </div>
                                <div class="col-md-6 col-sm-12">
                                  <div class="h-entry">
                                   
                                    <h2 class="font-size-regular"><a href="{{ route('category-details') }}"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>
                                     
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                                    <p><a href="{{ route('category-details') }}"> Continue Reading...</a></p>
                                  </div> 
                                </div>
                              </div>

                            </div>
                          </div>
                          

                          

                          <div>
                            <div class="testimonial">
                              
                              <div class="row">
                                <div class="col-md-6 col-sm-12">
                                  <div class="h-entry">
                                    <a href="{{ route('category-details') }}"> <img src="{{ URL::asset('/frontend/images/img_1.jpg') }}" alt="Image" class="img-fluid"></a>
                                   
                                  </div> 
                                </div>
                                <div class="col-md-6 col-sm-12">
                                  <div class="h-entry">
                                   
                                    <h2 class="font-size-regular"><a href="{{ route('category-details') }}"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>
                                     
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                                    <p><a href="{{ route('category-details') }}"> Continue Reading...</a></p>
                                  </div> 
                                </div>
                              </div>

                            </div>
                          </div><div>
                            <div class="testimonial">
                              
                              <div class="row">
                                <div class="col-md-6 col-sm-12">
                                  <div class="h-entry">
                                    <a href="{{ route('category-details') }}"> <img src="{{ URL::asset('/frontend/images/img_1.jpg') }}" alt="Image" class="img-fluid"></a>
                                   
                                  </div> 
                                </div>
                                <div class="col-md-6 col-sm-12">
                                  <div class="h-entry">
                                   
                                    <h2 class="font-size-regular"><a href="{{ route('category-details') }}"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>
                                     
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                                    <p><a href="{{ route('category-details') }}"> Continue Reading...</a></p>
                                  </div> 
                                </div>
                              </div>

                            </div>
                          </div><div>
                            <div class="testimonial">
                              
                              <div class="row">
                                <div class="col-md-6 col-sm-12">
                                  <div class="h-entry">
                                    <a href="{{ route('category-details') }}"> <img src="{{ URL::asset('/frontend/images/img_1.jpg') }}" alt="Image" class="img-fluid"></a>
                                   
                                  </div> 
                                </div>
                                <div class="col-md-6 col-sm-12">
                                  <div class="h-entry">
                                   
                                    <h2 class="font-size-regular"><a href="{{ route('category-details') }}"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>
                                     
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                                    <p><a href="{{ route('category-details') }}"> Continue Reading...</a></p>
                                  </div> 
                                </div>
                              </div>

                            </div>
                          </div>

                        </div>
                    </section>
          

 @endsection
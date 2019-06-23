@extends('common_template')

@section('content')

 <section class="site-section first_section border-bottom" id="team-section">
                <div class="container">
                       
          
                        <div class="row">
                           
                       <form class="p-5" action="{{route('seller.upload.store')}}" enctype="multipart/form-data">
                        @csrf
                                 <div class="form-group">
                                  <label for="title"><strong>Title : </strong></label>
                                  <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="" name="title" value="{{old('title')}}">
                                  @error('title')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                                </div>
                                <div class="form-group">
                                  <label for="category"><strong>Category : </strong></label>
                                  <select name="category" class="form-control">
                                        <option value="1">ABC</option>
                                        <option value="1">xyz</option>
                                        <option value="1">PQR</option>
                                        <option value="1">ASD</option>

                                    </select>
                                  <!-- <input type="text" class="form-control @error('category') is-invalid @enderror" id="category" placeholder="" name="category" value="{{old('category')}}"> -->
                                  @error('category')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                                </div>
                                <div class="form-group">
                                  <label for="summary"><strong>Summary : </strong></label>
                                  <textarea  class="form-control @error('summary') is-invalid @enderror" id="summary" placeholder="" name="summary">{{old('summary')}}</textarea>
                                  @error('summary')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                                </div>
                                <div class="form-group">
                                  <label for="operation_technology"><strong>Operation of Technology  : </strong></label>
                                  <input type="text" class="form-control @error('operation_technology') is-invalid @enderror" id="operation_technology" placeholder="" name="operation_technology" value="{{old('operation_technology')}}">
                                  @error('operation_technology')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                                  <strong><a href="javascript:void(0)" style="float: right;"> how does it work?</a></strong>
                                </div>
                                 <div class="form-group">
                                  <label for="business_case"><strong>Business Case  : </strong></label>
                                  <input type="text" class="form-control @error('business_case') is-invalid @enderror" id="business_case" placeholder="" name="business_case" value="{{old('business_case')}}">
                                  @error('business_case')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                                    <strong><a href="javascript:void(0)" style="float: right;">why should someone buy?</a></strong>
                                </div>
                                <div class="form-group">
                                  <label for="applicability_domain"><strong>Applicability Domain   : </strong></label>
                                  <input type="text" class="form-control @error('applicability_domain') is-invalid @enderror" id="applicability_domain" placeholder="" value="{{old('applicability_domain')}}" name="applicability_domain">
                                  @error('applicability_domain')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                                </div>
                                 <div class="form-row">
                                  <div class="form-group col-md-12 @error('technology_readiness') has-error @enderror">
                                    <label for="inputEmail4"><strong>Technology Readiness  : </strong></label>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" id="idea" value="idea" name="technology_readiness" @if(old('technology_readiness') =='idea') checked="checked" @endif>
                                      <label class="form-check-label" for="idea">Idea</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" id="prototype" value="prototype" name="technology_readiness" @if(old('technology_readiness') =='prototype') checked="checked" @endif>
                                      <label class="form-check-label" for="prototype">  Prototype</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" id="early_in_market" value="early in market" name="technology_readiness" @if(old('technology_readiness') =='early in market') checked="checked" @endif>
                                      <label class="form-check-label" for="early_in_market">Early in Market</label>
                                    </div>
                                      <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" id="market_mature" value="market mature" name="technology_readiness" @if(old('technology_readiness') =='market mature') checked="checked" @endif>
                                      <label class="form-check-label" for="market_mature">  Market Mature</label>
                                    </div>
                                    @error('technology_readiness')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                                  </div>
                                 
                                </div>
                               
                               
                                <div class="form-group @error('patended') has-error @enderror">
                                  <label for="patended_yes"><strong>Patended : </strong></label>
                                  <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="patended" id="patended_yes" value="yes" onclick="hideshowdive('1')" @if(old('patended') =='yes') checked="checked" @endif>
                                          <label class="form-check-label" for="patended_yes">Patended Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline" onclick="hideshowdive('2')">
                                          <input class="form-check-input" type="radio" name="patended" id="patended_pending" value="pending" >
                                          <label class="form-check-label" for="patended_pending">Patended Padding</label>
                                        </div>
                                         <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="patended"  onclick="hideshowdive('3')" id="patended_no" value="no" >
                                          <label class="form-check-label" for="patended_no">Patended No</label>
                                        </div>
                                  @error('patended')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                </div>

                                <div class="form-row border-bottom" id="inlineRadio1-1"   style="display: none;">
                                      
                                      <div class="form-group col-md-12">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="country" onclick="textboxhideshow(1)" id="one_country" value="1 country" @if(old('country') =='1 country') checked="checked" @endif>
                                            <label class="form-check-label" for="one_country">1 Country</label>
                                          </div>
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="country" onclick="textboxhideshow(1)" id="two_five_country" value="2-5 countries" @if(old('country') =='2-5 countries') checked="checked" @endif>
                                            <label class="form-check-label" for="two_five_country">2-5 Countries</label>
                                          </div>
                                           <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="country" onclick="textboxhideshow(1)" id="more_then_five_country" value="more then 5 countries" @if(old('country') =='more then 5 countries') checked="checked" @endif>
                                            <label class="form-check-label" for="more_then_five_country">More than 5 Countries</label>
                                        </div>
                                      </div>
                                    </div>
                                  <div class="form-row border-bottom" id="inlineRadio1-2"  style="display: none;">
                                     
                                      <div class="form-group col-md-12">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="published" id="published" value="yes" onclick="textboxhideshow(1)">
                                            <label class="form-check-label" for="published">Published</label>
                                          </div>
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="published" id="published_no" value="no"  onclick="textboxhideshow(2)">
                                            <label class="form-check-label" for="published_no"> Not Published</label>
                                          </div>
                                          
                                      </div>
                                    </div>

                                    <div class="form-group" id="publish_num" style="display: none;">
                                        <label for="publication_number"><strong> publication  Number</strong></label>
                                        <input type="text"  name="publication_number" class="form-control @error('publication_number') is-invalid @enderror" id="publication_number" value="{{old('publication_number')}}">
                                        @error('publication_number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                      </div>
                               

                                <div class="form-row border-bottom">

                                   <div class="form-group col-md-3">
                                    <label for="main_image"><strong>Upload Main Image : </strong></label>
                                    <input type="file" class="form-control @error('main_image') is-invalid @enderror" id="main_image" name="main_image" >
                                    @error('main_image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                  </div>
                                  <div class="form-group col-md-3">
                                    <label for="image_one"><strong>Image 1</strong></label>
                                    <input type="file" class="form-control @error('image_one') is-invalid @enderror" id="image_one" name="image_one">
                                    @error('image_one')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                  </div>
                                  <div class="form-group col-md-3">
                                    <label for="image_two"><strong>Image 2</strong></label>
                                    <input type="file" class="form-control @error('image_two') is-invalid @enderror" id="image_two" name="image_two">
                                    @error('image_two')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                  </div>
                                  <div class="form-group col-md-3">
                                    <label for="image_three"><strong>Image 3</strong></label>
                                    <input type="file" class="form-control @error('image_three') is-invalid @enderror" id="image_three" name="image_three">
                                    @error('image_three')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                  </div>
                                  
                                </div>
                                <div class="form-group">
                                  <label for="video_link"><strong>Upload Video Link : </strong></label>
                                  <input type="text" class="form-control @error('video_link') is-invalid @enderror" id="video_link" name="video_link" value="{{old('video_link')}}">
                                  @error('video_link')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>

                                <input type="hidden" name="price" value="10">
                              
                                <div class="form-group">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" id="term_condition" name="term_condition">
                                      <label class="form-check-label" for="term_condition">
                                        I accept Terms & Conditions
                                      </label>
                                    </div>
                                  </div>
                                <button type="submit" class="btn btn-primary">Upload</button>
                              </form>
                            
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
@extends('admin.layouts.app')

@section('content')

<!-- Vertical form options -->
<div class="row">
	<div class="col-md-6">

		<!-- Basic layout-->
      	<form method="POST" action="{{ route('admin.corporate-sellers.store') }}">
        @csrf
			<div class="card">
				<div class="card-header header-elements-inline">
                	<h5 class="card-title">{{ __('Add Corporate seller') }}</h5>
                </div>
				<div class="card-body">
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                      <label>{{ __('Name:')}}</label>
                      <input type="text" class="form-control" placeholder="Name" name="name" value="{{old('name')}}">
                      @if ($errors->has('name'))
                          <span class="help-block">
                              <strong>{{ $errors->first('name') }}</strong>
                          </span>
                      @endif
                    </div>

                    <div class="form-group{{ $errors->has('designation') ? ' has-error' : '' }}">
                      <label>{{ __('Designation:')}}</label>
                      <input type="text" class="form-control" placeholder="Designation" name="designation" value="{{old('designation')}}">
                      @if ($errors->has('designation'))
                          <span class="help-block">
                              <strong>{{ $errors->first('designation') }}</strong>
                          </span>
                      @endif
                    </div>
                    <div class="form-group{{ $errors->has('company_name') ? ' has-error' : '' }}">
                      <label>{{ __('Company Name:')}}</label>
                      <input type="text" class="form-control" placeholder="Company Name" name="company_name" value="{{old('company_name')}}">
                      @if ($errors->has('company_name'))
                          <span class="help-block">
                              <strong>{{ $errors->first('company_name') }}</strong>
                          </span>
                      @endif
                    </div>
                    <div class="form-group{{ $errors->has('industry') ? ' has-error' : '' }}">
                      <label>{{ __('Industry:')}}</label>
                      <select data-placeholder="Select a industry" class="form-control select" name="industry" >
                        @if(count($industries)>0)
                          @foreach($industries as $industry)
                            <option value="{{$industry->id}}" @if(old('industry') && $industry->id==old('industry')) selected="selected" @endif>{{$industry->name}}</option>
                          @endforeach
                        @endif
                      </select>
                      @if ($errors->has('industry'))
                          <span class="help-block">
                              <strong>{{ $errors->first('industry') }}</strong>
                          </span>
                      @endif
                    </div>
                    <div class="form-group{{ $errors->has('categories') ? ' has-error' : '' }}">
                      <label>{{ __('Categories:')}}</label>
                      <select data-placeholder="Select a categories" class="form-control select" name="categories[]" multiple="true" max="5">
                        @if(count($categories)>0)
                          @foreach($categories as $category)
                            <option value="{{$category->id}}" @if(old('categories') && in_array($category->id,old('categories'))) selected="selected" @endif>{{$category->name}}</option>
                          @endforeach
                        @endif
                      </select>
                      @if ($errors->has('categories'))
                          <span class="help-block">
                              <strong>{{ $errors->first('categories') }}</strong>
                          </span>
                      @endif
                    </div>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                      <label>{{ __('Email:')}}</label>
                      <input type="email" class="form-control" placeholder="Email" name="email" value="{{old('email')}}">
                      @if ($errors->has('email'))
                          <span class="help-block">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif
                    </div>
                    <div class="form-group{{ $errors->has('professional_email') ? ' has-error' : '' }}">
                      <label>{{ __('Professional Email:')}}</label>
                      <input type="email" class="form-control" placeholder="Professional Email" name="professional_email" value="{{old('professional_email')}}">
                      @if ($errors->has('email'))
                          <span class="help-block">
                              <strong>{{ $errors->first('professional_email') }}</strong>
                          </span>
                      @endif
                    </div>
                    <div class="form-group{{ $errors->has('contact_number') ? ' has-error' : '' }}">
                      <label>{{ __('Contact Number:')}}</label>
                      <input type="tel" class="form-control" placeholder="Contact Number" name="contact_number" value="{{old('contact_number')}}">
                      @if ($errors->has('contact_number'))
                          <span class="help-block">
                              <strong>{{ $errors->first('contact_number') }}</strong>
                          </span>
                      @endif
                    </div>
                    <div class="form-group{{ $errors->has('breif_intro') ? ' has-error' : '' }}">
                      <label>{{ __('Breif intro:')}}</label>
                      <textarea class="form-control" placeholder="Breif intro" name="breif_intro">{{old('breif_intro')}}</textarea>
                      @if ($errors->has('breif_intro'))
                          <span class="help-block">
                              <strong>{{ $errors->first('breif_intro') }}</strong>
                          </span>
                      @endif
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                      <label>{{ __('Password:')}}</label>
                      <input type="password" class="form-control" placeholder="Password" name="password" value="">
                      @if ($errors->has('password'))
                          <span class="help-block">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                      @endif
                    </div>
                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                      <label>{{ __('Confirm Password:')}}</label>
                      <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" value="">
                      @if ($errors->has('password_confirmation'))
                          <span class="help-block">
                              <strong>{{ $errors->first('password_confirmation') }}</strong>
                          </span>
                      @endif
                    </div>
                    
					<div class="text-right">
						<button type="submit" class="btn btn-primary">{{ __('Submit') }} <i class="icon-arrow-right14 position-right"></i></button>
					</div>
				</div>
			</div>
		</form>
		<!-- /basic layout -->
	</div>
</div>
<!-- /vertical form options -->

@endsection
@section('js')
<script type="text/javascript">
  jQuery(document).ready(function($){
    $('.select').select2({
    	maximumSelectionLength: 5
    });
    $('.form-control-uniform-custom').uniform({
        fileButtonClass: 'action btn bg-blue',
        selectClass: 'uniform-select bg-pink-400 border-pink-400'
    });
    $('.form-check-input-styled').uniform();
 });
</script>
@endsection
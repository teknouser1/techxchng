@extends('admin.layouts.app')

@section('content')

<!-- Vertical form options -->
					<div class="row">
						<div class="col-md-6">

							<!-- Basic layout-->
              <form method="POST" action="{{ route('admin.category.store') }}" enctype="multipart/form-data">
                @csrf
								<div class="card">
									<div class="card-header header-elements-inline">
                    <h5 class="card-title">{{ __('Add Category') }}</h5>
                  </div>
									<div class="card-body">
                    {{--<div class="form-group{{ $errors->has('keywords') ? ' has-error' : '' }}">
                      <label>{{ __('Keywords:')}}</label>
                      <select data-placeholder="Select a keywords" class="form-control select" name="keywords[]" multiple="true">
                        @if(count($keywords)>0)
                          @foreach($keywords as $keyword)
                            <option value="{{$keyword->id}}" @if(old('keywords') && in_array($keyword->id,old('keywords'))) selected="selected" @endif>{{$keyword->keyword}}</option>
                          @endforeach
                        @endif
                      </select>
                      @if ($errors->has('keywords'))
                          <span class="help-block">
                              <strong>{{ $errors->first('keywords') }}</strong>
                          </span>
                      @endif
                    </div>--}}  
  									<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                      <label>{{ __('Name:')}}</label>
                      <input type="text" class="form-control" placeholder="Name" name="name" value="{{old('name')}}">
                      @if ($errors->has('name'))
                          <span class="help-block">
                              <strong>{{ $errors->first('name') }}</strong>
                          </span>
                      @endif
                    </div>

                    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                      <label>{{ __('Description:')}}</label>
                      <textarea name="description" id="description" class="form-control">{{old('description')}}</textarea>
                      @if ($errors->has('description'))
                          <span class="help-block">
                              <strong>{{ $errors->first('description') }}</strong>
                          </span>
                      @endif
                    </div>
                    <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                      <label>{{ __('Image:') }}</label>
                      <input type="file" class="form-control-uniform-custom" name="image" accept="jpg,jpeg,png">
                      <span class="form-text text-muted">{{ __('Accepted formats: only .jpg, .jpeg, .png. Max file size 2Mb') }}</span>
                      @if ($errors->has('image'))
                          <span class="help-block">
                              <strong>{{ $errors->first('image') }}</strong>
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
    $('.select').select2();
    $('.form-control-uniform-custom').uniform({
        fileButtonClass: 'action btn bg-blue',
        selectClass: 'uniform-select bg-pink-400 border-pink-400'
    });
    $('.form-check-input-styled').uniform();
 });
</script>
@endsection
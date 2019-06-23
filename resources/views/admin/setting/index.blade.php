@extends('admin.layouts.app')

@section('content')

<!-- Vertical form options -->
<div class="row">
	<div class="col-md-6">
		<!-- Basic layout-->
      		<form method="POST" action="{{ route('admin.settings.index.store') }}" enctype="multipart/form-data">
        		@csrf
				<div class="card">
					<div class="card-header header-elements-inline">
            			<h5 class="card-title">{{ __('Landing page settings') }}</h5>
          			</div>
					<div class="card-body">
            			<div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
              				<label>{{ __('Header Image:') }}</label>
          					<input type="file" class="form-control-uniform-custom" name="image" accept="jpg,jpeg,png">
          					<span class="form-text text-muted">{{ __('Accepted formats: only .jpg, .jpeg, .png. Max file size 2Mb') }}</span>
				            @if ($errors->has('image'))
				            	<span class="help-block">
				                	<strong>{{ $errors->first('image') }}</strong>
				                </span>
				            @endif

				            @if(!empty($header_image) && !empty($header_image->getImgUrl()))
		                        <img src="{{$header_image->getImgUrl()}}" class="img-preview">
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
    $('.form-control-uniform-custom').uniform({
        fileButtonClass: 'action btn bg-blue',
        selectClass: 'uniform-select bg-pink-400 border-pink-400'
    });
    $('.form-check-input-styled').uniform();
 });
</script>
@endsection
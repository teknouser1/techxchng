@extends('admin.layouts.app')

@section('content')

<!-- Vertical form options -->
					<div class="row">
						<div class="col-md-6">

							<!-- Basic layout-->
              <form method="POST" action="{{ route('admin.industries.update',$industry->id) }}">
                @csrf
                @method('PATCH')
								<div class="card">
									<div class="card-header header-elements-inline">
                    <h5 class="card-title">{{ __('Edit Keyword') }}</h5>
                  </div>
									<div class="card-body">
                    
  									<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                      <label>{{ __('Name:')}}</label>
                      <input type="text" class="form-control" placeholder="Name" name="name" value="{{old('name',$industry->name)}}">
                      @if ($errors->has('name'))
                          <span class="help-block">
                              <strong>{{ $errors->first('name') }}</strong>
                          </span>
                      @endif
                    </div>

                   
                    <div class="text-right">
											<button type="submit" class="btn btn-primary">{{ __('Save') }} <i class="icon-arrow-right14 position-right"></i></button>
										</div>
									</div>
								</div>
							</form>
							<!-- /basic layout -->

						</div>

					</div>
					<!-- /vertical form options -->

@endsection
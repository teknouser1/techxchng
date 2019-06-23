@extends('admin.layouts.app')

@section('content')

<!-- Vertical form options -->
					<div class="row">
						<div class="col-md-6">

							<!-- Basic layout-->
              <form method="POST" action="{{ route('admin.keywords.store') }}">
                @csrf
								<div class="card">
									<div class="card-header header-elements-inline">
                    <h5 class="card-title">{{ __('Add Keyword') }}</h5>
                  </div>
									<div class="card-body">
                    <div class="form-group{{ $errors->has('keyword') ? ' has-error' : '' }}">
                      <label>{{ __('Keyword:')}}</label>
                      <input type="text" class="form-control" placeholder="keyword" name="keyword" value="{{old('keyword')}}">
                      @if ($errors->has('keyword'))
                          <span class="help-block">
                              <strong>{{ $errors->first('keyword') }}</strong>
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
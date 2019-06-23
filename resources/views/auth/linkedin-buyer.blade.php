@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Register</div>

                <div class="card-body">
                    <form method="POST" action="{{route('register')}}">
                        @csrf
                        <input type="hidden" name="linkedinid" value="{{$profile['id']}}">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="text" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name',$profile['name']) }}" required autocomplete="name" autofocus readonly="true">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                          <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Designation') }}</label>

                            <div class="col-md-6">
                                <input id="designation" type="text" class="form-control @error('designation') is-invalid @enderror" name="designation" value="{{ old('designation') }}" required autocomplete="designation" autofocus readonly="true">

                                @error('designation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                           <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Comapny') }}</label>

                            <div class="col-md-6">
                                <input id="company" type="text" class="form-control @error('company') is-invalid @enderror" name="company" value="{{ old('company') }}" required autocomplete="company" autofocus readonly="true">

                                @error('company')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                             
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Industry') }}</label>

                                <div class="col-md-6">
                                    <select name="industry" class="form-control">
                                        <option value="1">ABC</option>
                                        <option value="1">xyz</option>
                                        <option value="1">PQR</option>
                                        <option value="1">ASD</option>

                                    </select>

                                    @error('industry')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            
                        </div>
                        <div class="form-group row">
                             
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Register as') }}</label>

                                <div class="col-md-6">
                                    <select name="register_as" class="form-control">
                                        <option value="2">Seller</option>
                                        <option value="3">Buyer</option>
                                    </select>

                                    @error('register_as')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            
                        </div>
                          <div class="form-group row">
                             <label for="name" class="col-md-4 col-form-label text-md-right">Interested In</label>
                            <div class="col-md-6">
                               <label class="checkbox-inline"><input type="checkbox" value="">Option 1</label>
                                <label class="checkbox-inline"><input type="checkbox" value="">Option 2</label>
                                <label class="checkbox-inline"><input type="checkbox" value="">Option 3</label>
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }} ID</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email',$profile['emailAddress']) }}" required autocomplete="email" readonly="true">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Professional {{ __('E-Mail Address') }} ID</label>

                            <div class="col-md-6">
                                <input id="professional_email" type="email" class="form-control @error('professional_email') is-invalid @enderror" name="professional_email" value="{{ old('professional_email') }}" required autocomplete="professional_email" >

                                @error('professional_email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <div  class="form-group row">
                            <label for="" class="col-md-4 col-form-label text-md-right"></label>
                            <div class="col-md-6">
                                <label class="checkbox-inline"><input type="checkbox" value="">Check email ID for communication</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="brief_intro" class="col-md-4 col-form-label text-md-right">Brief Intro</label>

                            <div class="col-md-6">
                                <textarea  id="brief_intro" type="text" class="form-control @error('brief_intro') is-invalid @enderror" name="brief_intro" >
                                </textarea>

                                @error('brief_intro')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="contact" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="contact" type="text" class="form-control @error('contact') is-invalid @enderror" name="contact" required>

                                @error('contact')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        
                          <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="t_c" id="t_c" {{ old('t_c') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="t_c">
                                        I accept terms & condition
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>

                                
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

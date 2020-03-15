@extends('front-end.master')
@section('title')
    Product Details
@endsection
@section('category-content')

<div class="banner1">
			<div class="container">
				<h3><a href="index.html">Home</a> / <span>Add to Cart</span></h3>
			</div>
		</div>
	<!--banner-->

	<!--content-->
		<div class="content"><br>
			<!--single-->
			<div class="row">
				<div class="col-md-5">
					<h3>Register if you are not Registered before!</h3>
                    <br>
                    

                    <div class="card-body">
                        <form method="POST" action="{{ route('customer-sign-up') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" >

                                  
                                </div>
                            </div>

                            
                            <div class="form-group row">
                                <label for="mobile-number" class="col-md-4 col-form-label text-md-right">{{ __('Mobile Number') }}</label>

                                <div class="col-md-6">
                                    <input id="mobile-number" type="text" class="form-control" name="mobile_number" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                                <div class="col-md-6">
                                    <textarea name="address" id="" class="form-control" rows="5">Address</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-10 ">
                                    <button type="submit" class="btn btn-info btn-block">
                                        {{ __('Register') }}
                                    </button>

                                
                                </div>
                            </div>
                        </form>
                    </div>


				</div>
                <div class="col-md-5">
                <h3>Already Registered? Login Here!!</h3>
                <br>
                <h4 class="text text-center text-danger">{{ Session::get('message') }}</h4><br><br>
                    <div class="card-body">
                        
                        <form method="POST" action="{{ route('customer-login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password">

                                    <!-- @if ($errors->has('password'))

                                    {{ $errors->has('password') ? ' is-invalid' : '' }}
                                    
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif -->
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-10 ">
                                    <button type="submit" name="btn" class="btn btn-success btn-block">
                                        {{ __('Login') }}
                                    </button>

                                
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


			</div>
		
		</div>
    
@endsection
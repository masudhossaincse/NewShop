@extends('front-end.master')
@section('title')
    Product Details
@endsection
@section('category-content')
<br>


<div class="container">
				
			
		
    <div class="row">
        <div class="col-md-12">
            <h2 class="text text-center text-success">
                Dear {{ Session::get('customerName') }}. You have to give us shipping info to complete your valuable orders.
            </h2>
        </div>
    </div>

	<!--content-->
		<div class="content"><br><br>
			<!--single-->
			<div class="row">
                <div class="col-md-3"></div>
				<div class="col-md-8">
					<h3>Shipping Info goes here.........</h3>
                    <br><br>
                    

                    <div class="card-body">
                        <form method="POST" action="{{ route('new-shipping') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="full_name" class="col-md-4 col-form-label text-md-right">{{ __('Full Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="full_name" value="{{ $customer->name }}">

                                    @if ($errors->has('full_name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('full_name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $customer->email }}">

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>


                            
                            <div class="form-group row">
                                <label for="phone-number" class="col-md-4 col-form-label text-md-right">{{ __('Mobile Number') }}</label>

                                <div class="col-md-6">
                                    <input value="{{ $customer->mobile_number }}" type="text" class="form-control" name="phone_number">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                                <div class="col-md-6">
                                    <textarea name="address" id="" class="form-control" rows="5">{{ $customer->address }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4"></div>
                                <div class="col-md-6 ">
                                    <button type="submit" class="btn btn-info btn-block">
                                        {{ __('Save Shipping Info') }}
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
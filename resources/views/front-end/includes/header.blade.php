<div class="container">
 <div class="top-left">
	<a href="#"> Help  <i class="glyphicon glyphicon-phone" aria-hidden="true"></i> +0123-456-789</a>
</div>
<div class="top-right">
<ul>

	<li><a href="checkout.html">Checkout</a></li>
	@if(Session::get('customerId'))
		<li><a href="#" onclick="document.getElementById('customerLogoutForm').submit();">Logout</a></li>
		<form action="{{ route('customer-logout') }}" method="POST" id="customerLogoutForm">
			@csrf
		</form>
	@else
		<li><a href="{{ route('new-customer-login') }}">Login</a></li>
	
	@endif
	<li><a href="registered.html"> Create Account </a></li>

</ul>
</div>
<div class="clearfix"></div>
</div>
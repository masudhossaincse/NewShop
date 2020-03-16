<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
	<ul class="nav navbar-nav">
		<li class="active"><a href="{{ route('/') }}" class="act">Home</a></li>	
		<!-- Mega Menu -->

		@foreach ($publishedCategories as $publishedCategory)
		<li class="dropdown">
			<a href="{{ route('category-product',['id'=>$publishedCategory->id]) }}">{{ $publishedCategory->categoryName }}</a>
			
		</li>
		@endforeach
		
		
	</ul>
</div>
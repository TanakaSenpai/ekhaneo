@include('assets.header')

<div class="browse">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2>Browse Items by Category</h2>
				<hr/>
                @if (auth()->check())
                @if (auth()->user()->role === 1)
                <div class="mb-2 d-flex">
                <a class="btn btn-primary mx-auto" href="{{ route('addCategory') }}">Add Category</a>
                </div>
                @if (session()->has('success'))
                    <p class="alert alert-success m-1 p-1">{{ session()->get('success') }}</p>
                @endif
                @endif
                @endif
				<ul class="list-inline">
                    @foreach ($categories as $category)
					<li>@if (auth()->check())@if (auth()->user()->role === 1)<div class=""><button class="btn btn-danger btn-sm mx-auto">Delete</button></div>@endif @endif<a href=""><img src="{{ asset($category->img) }}" alt="{{ $category->category }}" title="icon" class="img-fluid" /><p>{{ $category->category }}</p></a></li>
                    @endforeach
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="banner">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<img src="images/ads.jpg" class="img-fluid bannerchange" alt="image" title="title"  />
			</div>
		</div>
	</div>
</div>

@include('assets.footer')

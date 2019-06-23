
@guest
	
	@include('includes.header')

@else
		@include('includes.header1')
@endguest


@yield('content')



@include('includes.footer')
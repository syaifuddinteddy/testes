<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
	@include('layouts.head')
</head>

<body>

	@yield('content')

	@include('layouts.footer')

	@include('layouts.footer-scripts')

</body>
</html>

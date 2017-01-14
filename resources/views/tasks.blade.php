<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Tasks CRUD</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>

<body>
	<div class="container">

		<div class="page-header">
			<h1>{{ $page_header }}</h1>
		</div>

		@yield('content')

	</div>
</body>

@yield('script')

</html>
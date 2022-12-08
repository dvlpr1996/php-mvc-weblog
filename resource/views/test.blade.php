<!DOCTYPE html>
<html lang="en">

<head>
		<title>Rick and Morty - @yield('title')</title>
		<meta charset="UTF-8">
		<meta name="language" content="en">
		<meta name="robots" content="index, follow">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="owner" content="Nima jahan bakhshian | dvlpr1996">
		<meta name="author" content="Nima jahan bakhshian | dvlpr1996">
		<meta name="designer" content="Nima jahan bakhshian | dvlpr1996">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="description" content="Rick and Morty wiki | dvlpr1996">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="Rick and Morty wiki, tailwindCss, dvlpr1996, php8">
</head>

<form action="{{ route('send') }}" method="POST">
		<input type="text" name="fname">
		<input type="text" name="lname">
		<button type="submit">send</button>
</form>
<ul>
		@if (!is_null($errors))
				@foreach ($errors as $error)
						<li>{{ $error }}</li>
				@endforeach
		@endif
</ul>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
		<title>@yield('title')</title>
		<meta charset="UTF-8">
		<meta name="language" content="en">
		<meta name="robots" content="index, follow">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="owner" content="Nima jahan bakhshian | dvlpr1996">
		<meta name="author" content="Nima jahan bakhshian | dvlpr1996">
		<meta name="designer" content="Nima jahan bakhshian | dvlpr1996">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<form action="{{ route('send', [5,'name']) }}" method="POST">
		<input type="text" name="fname">
		<input type="text" name="lname">
		<button type="submit">send</button>
</form>
<ul>
		{{-- @if (isset($errors)) --}}
				@foreach ($posts as $post)
						<li>{{ $post->name }}</li>
				@endforeach
		{{-- @endif --}}
</ul>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Список дел</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<!-- header -->
	<div class="col-12 bg-primary">
		<div class="col-8 mx-auto">
			<h1 class="text-light mx-auto">To Do List</h1>
		</div>
	</div>
	<!-- все заметки insert, select, update, delete -->
	<div class="col-8 mx-auto bg-light">
		@yield('content')
	</div>
</body>
</html>
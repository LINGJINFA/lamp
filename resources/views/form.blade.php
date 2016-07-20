<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel</title>
</head>
<body>
	<form action="/user/add" method="post">
		<input type="text">
		{{csrf_field()}}
		<input type="submit" value="提交">
	</form>
</body>
</html>

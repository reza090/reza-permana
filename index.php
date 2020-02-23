
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Bootstrap Gray Login Theme">
	<meta name="author" content="Ari Effendi">

	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">

	<title>Aplikasi Gudang</title>
</head>
<body background="gambar/wp3990971.jpg">

<div class="navbar navbar-static-top">
	<div class="navbar-inner">
		<a class="brand"><b>SAKTI application</b></a>
	</div>
</div>
<div class="row">
	<div class="dialog">
		<div class="title"></div>
		<div class="block">
		<form name="frm-login" method="post" action="login.php">
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input required class="input-medium user" id="prependedInput" type="text" name="usertxt" placeholder="Username" autocomplete="off">
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-lock"></i></span>
				<input required class="input-medium pass" id="prependedInput" name="pswtxt" type="password"
                 placeholder="Password">
			</div>
			<button class="btn btn-primary btn-block btn-login" type="submit">
				Login
			</button>
		</form>
		</div>
	</div>
</div>

</body>
</html>

<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"/>
	<link href="https://getbootstrap.com/docs/5.0/examples/sign-in/signin.css" rel="stylesheet" type="text/css"/>
	<title>Login</title>
</head>
<body>
<form class="form-signin" action="<?= base_url().'admin/login/login_post' ?>" method="post">

	<?php
		if($error!="NO_ERROR"){
			echo "
			<div class='alert alert-danger' role='alert'>";
				echo $error;
			echo "</div>
			";
		}
	?>
	<h1 class="h3 mb-3 fw-normal">Please sign in</h1>

	<div class="form-floating">
		<input type="text" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
		<label for="floatingInput">Email address</label>
	</div>
	<div class="form-floating">
		<input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
		<label for="floatingPassword">Password</label>
	</div>

	<div class="checkbox mb-3">
		<label>
			<input type="checkbox" value="remember-me"> Remember me
		</label>
	</div>
	<button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
	<p class="mt-5 mb-3 text-muted">© 2017–2021</p>
</form>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
-->
</body>
</html>

<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link href="https://getbootstrap.com/docs/5.0/examples/dashboard/dashboard.css" rel="stylesheet" type="text/css">
	<title>Admin Panel</title>
</head>
<body>
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
	<a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Company name</a>
	<button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
	<ul class="navbar-nav px-3">
		<li class="nav-item text-nowrap">
			<a class="nav-link" href="<?= base_url().'admin/login/logout'?>">Sign out</a>
		</li>
	</ul>
</header>

<div class="container-fluid">
	<div class="row">
		<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
			<div class="position-sticky pt-3">
				<ul class="nav flex-column">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="<?= base_url().'admin/dashboard' ?>">
							<span data-feather="home"></span>
Dashboard
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url().'admin/blog/addblog' ?>">
							<span data-feather="file"></span>
Add Blog
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?=base_url().'admin/blog'?>">
							<span data-feather="shopping-cart"></span>
View Blog
						</a>
					</li>
				</ul>

			</div>
		</nav>

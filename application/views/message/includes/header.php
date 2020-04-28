<!DOCTYPE html>
<head>
	<title>Central University of Bathinda - Alumni Association</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/main.css')?>">
	<script type="text/javascript" src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
	<style type="text/css">
		
		.navbar-dark .navbar-nav .nav-link{
			color: white;
			font-size: 17px;
		}
		nav{
			top: 0px;
			position: fixed;
			height: 100px;
			background: rgba(6,33,62);
		}
		body{
			background: #f5f5f5;
		}
		
	</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark">
	<div class="container">
		<a class="navbar-brand" href="<?= base_url() ?>"><img src="<?= base_url('assets/img/logo.jpg') ?>" height="80" width="380"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsupport">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarsupport">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="<?= base_url() ?>">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url() ?>">Events</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url() ?>">Careers</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url() ?>">Mentorship</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url() ?>">Group</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('login') ?>">Login</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
	<div class="container">
		<div id="row">
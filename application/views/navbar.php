<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>Central University of Punjab - Alumni Associtation</title>
<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/css/jquery-ui.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/css/all.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/css/animate.css') ?>">
<script src="<?= base_url('assets/js/jquery.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/jquery-ui.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/all.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/wow.min.js'); ?>"></script>
<script>
	new WOW().init();
</script>
<style>
	.navbar{
		background-color:rgba(6,33,66);
	}
	.navbar-dark .navbar-nav .nav-link{
		font-size:17px;
		color:white;
	}
	body{
		height:100%;
		width:100%;
		background-color:#f5f5f5;
	}
</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url()?>"><img src="<?= base_url('assets/img/logo.jpg')?>" height="80" width="350"></a>
			<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarsupport">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarsupport">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a href="<?= base_url()?>" class="nav-link">Home</a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('events')?>" class="nav-link">Events</a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('news')?>" class="nav-link">News / Update</a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('login')?>" class="nav-link">Login</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">

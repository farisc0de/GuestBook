<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="<?= site_url("/images/favico.png"); ?>">
	<link rel="stylesheet" href="https://bootswatch.com/4/litera/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
	<title>GuestBook - <?= $this->renderSection("title"); ?></title>
</head>

<body class="d-flex flex-column h-100">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">
			<img src="<?= site_url("/images/logo.png"); ?>" width="30" height="30" alt="">
			Guestbook
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarColor03">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="<?= site_url("/"); ?>">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= site_url("/post"); ?>">View Messages</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= site_url("/post/add"); ?>">Add Message</a>
				</li>
			</ul>
		</div>
	</nav>

	<main role="main" class="flex-shrink-0">
		<div class="container mt-4">
			<?php if (session()->has("warning")) : ?>
				<div class="alert alert-warning">
					<i class="fas fa-exclamation-triangle"></i> <?= session('warning'); ?>
				</div>
			<?php endif; ?>

			<?php if (session()->has("info")) : ?>
				<div class="alert alert-info">
					<i class="fas fa-info-circle"></i> <?= session('info'); ?>
				</div>
			<?php endif; ?>

			<?php if (session()->has("error")) : ?>
				<div class="alert alert-danger">
					<i class="fas fa-times-circle"></i> <?= session('error'); ?>
				</div>
			<?php endif; ?>

			<?= $this->renderSection("content"); ?>
		</div>
	</main>

	<footer class="footer mt-auto py-3 bg-light">
		<div class="text-center">
			GuestBook © <?php echo date("Y"); ?> Copyright - <a href="https://www.farisotaibi.com/">Faris AL-Otaibi</a>
		</div>
	</footer>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js"></script>
</body>

</html>
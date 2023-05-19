<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">

	<title>Meziane Cinema</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">MEZIANE CINEMA</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="<?= base_url() ?>">Home <span class="sr-only"> </span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('films') ?>">Films</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('artistes') ?>">Artistes</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('utilisateur/inscription') ?>">Inscription</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('auth/connexion') ?>">connexion</a>
				</li>
	
			</ul>
		</div>
	</nav>

	<div class="container mt-5">
		<?= $this->renderSection('content') ?>
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@2.9.3/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
</body>
</html>

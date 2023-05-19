<?= $this->extend('layouts/layouts') ?>

<?= $this->section('content') ?>
	<h1>Artistes</h1>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">Nom</th>
				<th scope="col">Prénom</th>
				<th scope="col">Date de naissance</th>
				<th scope="col">Pays d'origine</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($artistes as $artiste): ?>
				<tr>
					<td><?= $artiste['nom'] ?></td>
					<td><?= $artiste['prenom'] ?></td>
					<td><?= $artiste['anneeNaiss'] ?></td>
					
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
<?= $this->endSection() ?>

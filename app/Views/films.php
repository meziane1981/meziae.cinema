<?= $this->extend('layouts/layouts') ?>

<?= $this->section('content') ?>
    <h1>Liste des films</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titre</th>
                <th scope="col">Année</th>
                <th scope="col">Réalisateur</th>
                <th scope="col">Genre</th>
                <th scope="col">Résumé</th>
                <th scope="col">Pays</th>
                <th scope="col">Image</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($films as $film): ?>
                <tr>
                    <td><?= $film['idFilm'] ?></td>
                    <td><?= $film['titre'] ?></td>
                    <td><?= $film['annee'] ?></td>
                    <td><?= $film['idMes'] ?></td>
                    <td><?= $film['genre'] ?></td>
                    <td><?= $film['resume'] ?></td>
                    <td><?= $film['codePays'] ?></td>
                    <td><img src="<?= $film['urlImage'] ?>" alt="<?= $film['titre'] ?>" height="100"></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?= $this->endSection() ?>


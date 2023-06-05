<!DOCTYPE html>
<html>
<head>
    <title>Liste des produits</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Liste des produits</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prix</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($produits as $produit) : ?>
                    <tr>
                        <td><?= $produit['id_produit'] ?></td>
                        <td><?= $produit['nom_produit'] ?></td>
                        <td><?= $produit['prix'] ?></td>
                        <td>
                        <a href="/produit/modifierproduit/<?= $produit['id_produit'] ?>" class="btn btn-primary">Modifier</a>
                        <a href="/produit/supprimerproduit/<?= $produit['id_produit'] ?>" class="btn btn-danger">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<!DOCTYPE html>

<!DOCTYPE html>
<html>
<head>
    <title>Supprimer un produit</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Supprimer un produit</h2>
        <p>Êtes-vous sûr de vouloir supprimer ce produit ?</p>
        <form action="/produit/supprimerproduit/<?= $produit['id_produit'] ?>" method="post">
            <button type="submit" class="btn btn-danger">Supprimer</button>
        </form>
    </div>
</body>
</html>

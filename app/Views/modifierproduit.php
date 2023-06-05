<!DOCTYPE html>
<html>
<head>
    <title>Modifier un produit</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Modifier un produit</h2>
        
        <?php if(session()->has('errors')): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php foreach (session('errors') as $error) : ?>
                        <li><?= $error ?></li>
                    <?php endforeach ?>
                </ul>
            </div>
        <?php endif ?>
        
        <form action="/modifierproduit/<?= $produit['id_produit'] ?>" method="post">
            <div class="mb-3">
                <label for="nom" class="form-label">Nom du produit</label>
                <input type="text" class="form-control" id="nom" name="nom" value="<?= old('nom', $produit['nom_produit']) ?>">
            </div>
            <div class="mb-3">
                <label for="prix" class="form-label">Prix du produit</label>
                <input type="text" class="form-control" id="prix" name="prix" value="<?= old('prix', $produit['prix']) ?>">
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
</body>
</html>

<?= $this->extend('layouts/layouts') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <?php if (session()->has('error')) : ?>
                <div class="alert alert-danger">
                    <?= session('error') ?>
                </div>
            <?php endif; ?>
            <div class="card">
                <div class="card-header">
                    Connexion
                </div>
                <div class="card-body">
                    <?= form_open('auth/login') ?>
                    <div class="form-group">
                        <label for="email">Adresse e-mail</label>
                        <input type="email" name="email" id="email" class="form-control" value="<?= old('email') ?>" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">
                        Se connecter
                    </button>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>

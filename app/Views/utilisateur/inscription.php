<?= $this->extend('layouts/layouts') ?>

<?= $this->section('content') ?>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Formulaire utilisateur</div>
        <div class="card-body">
          <form method="POST" action="<?= base_url('utilisateur/inscription') ?>">
            <?= csrf_field() ?>

            <div class="form-group row">
              <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
              <div class="col-md-6">
                <input id="email" type="email" class="form-control" name="email" required autofocus>
              </div>
            </div>

            <div class="form-group row">
              <label for="prenom" class="col-md-4 col-form-label text-md-right">Prénom</label>
              <div class="col-md-6">
                <input id="prenom" type="text" class="form-control" name="prenom" required>
              </div>
            </div>

            <div class="form-group row">
              <label for="nom" class="col-md-4 col-form-label text-md-right">Nom</label>
              <div class="col-md-6">
                <input id="nom" type="text" class="form-control" name="nom" required>
              </div>
            </div>

            <div class="form-group row">
              <label for="pseudo" class="col-md-4 col-form-label text-md-right">Pseudo</label>
              <div class="col-md-6">
                <input id="pseudo" type="text" class="form-control" name="pseudo" required>
              </div>
            </div>

            <div class="form-group row">
              <label for="password" class="col-md-4 col-form-label text-md-right">Mot de passe</label>
              <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password" required>
              </div>
            </div>

            <div class="form-group row mb-0">
              <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                  Enregistrer
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>
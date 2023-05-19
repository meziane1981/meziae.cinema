<?php 
$this->extend('layouts/layouts') ?>

<?= $this->section('title'); ?>
Form
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>


<!-- <h1>Afficher le test!</h1> -->

<form class="row g-3" method="post" action="form">>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nom</label>
    <input type="text" name="nom" class="form-control" id="inputNom">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Prenom</label>
    <input type="text" name="prenom" class="form-control" id="inputPrenom">
  </div>
  <div class="col-6">
    <label for="inputAddress" class="form-label">Pseudo</label>
    <input type="text" name="pseudo" class="form-control" id="inputPseudo" placeholder="">
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="inputEmail" placeholder="">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">Check me out</label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>

<?= $this->endSection(); ?>
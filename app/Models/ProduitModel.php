<?php

namespace App\Models;

use CodeIgniter\Model;

class ProduitModel extends Model
{
    protected $table = 'produit';
    protected $primaryKey = 'id_produit';
    protected $allowedFields = ['nom_produit', 'prix'];

    // public function getAllProduits()
    // {
    //     return $this->findAll();
    // }

    // public function getProduit($id)
    // {
    //     return $this->find($id);
    // }

    // public function updateProduit($id, $data)
    // {
    //     return $this->update($id, $data);
    // }

    // public function deleteProduit($id)
    // {
    //     return $this->delete($id);
    // }
}

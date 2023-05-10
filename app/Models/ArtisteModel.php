<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtisteModel extends Model
{
    protected $table = 'artiste';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nom', 'prenom', 'anneeNaiss'];

    public function getArtistes()
    {
        return $this->findAll();
    }

    public function getArtiste($id)
    {
        return $this->find($id);
    }
}

<?php

// namespace App\Models;

// use CodeIgniter\Model;

// class FilmModel extends Model
// {
//     protected $table = 'film';
//     protected $allowedFields = ['titre', 'annee', 'realisateur', 'genre', 'resume'];

//     public function getFilms()
//     {
//         return $this->findAll();
//     }

//     public function getFilm($id)
//     {
//         return $this->find($id);
//     }
// }
 
namespace App\Models;

use CodeIgniter\Model;

class FilmModel extends Model
{
    protected $table = 'film';
    protected $primaryKey = 'idFilm';
    protected $allowedFields = ['titre', 'annee', 'idMes', 'genre', 'resume', 'codePays', 'urlImage'];

    public function getFilms()
    {
        return $this->findAll();
    }

    public function getFilm($idFilm)
    {
        return $this->find($idFilm);
    }
}

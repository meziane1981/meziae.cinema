<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\FilmModel;
use App\Models\ArtisteModel;

class HomeController extends Controller
{
    public function index()
    {
        // Instanciation des modèles de films et d'artistes
        $filmModel = new FilmModel();
        $artisteModel = new ArtisteModel();

        // Récupération de tous les films et artistes
        $data['films'] = $filmModel->findAll();
        $data['artistes'] = $artisteModel->findAll();

        // Chargement de la vue films.php dans le layout "layout/layouts"
        echo view('films', $data);

        // Chargement de la vue artistes.php dans le layout "layout/layouts"
        echo view('artistes', $data);
    }
}

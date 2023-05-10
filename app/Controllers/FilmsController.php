<?php

// namespace App\Controllers;

// use App\Models\FilmModel;
// use CodeIgniter\Controller;

// class FilmController extends BaseController
// {
//     public function index()
//     {
//         $filmModel = new FilmModel();
//         $data['films'] = $filmModel->findAll();

//         echo view('films', $data);
//     }

//     public function create()
//     {
//         helper(['form']);

//         if ($this->request->getMethod() == 'post') {
//             $rules = [
//                 'titre' => 'required|min_length[3]|max_length[255]',
//                 'annee' => 'required|numeric',
//                 'realisateur' => 'required|min_length[3]|max_length[255]',
//                 'genre' => 'required|min_length[3]|max_length[255]',
//                 'resume' => 'required|min_length[10]'
//             ];

//             if ($this->validate($rules)) {
//                 $filmModel = new FilmModel();

//                 $data = [
//                     'titre' => $this->request->getVar('titre'),
//                     'annee' => $this->request->getVar('annee'),
//                     'realisateur' => $this->request->getVar('realisateur'),
//                     'genre' => $this->request->getVar('genre'),
//                     'resume' => $this->request->getVar('resume')
//                 ];

//                 $filmModel->save($data);

//                 return redirect()->to('/films');
//             } else {
//                 $data['validation'] = $this->validator;
//             }
//         }

//         echo view('film_create', $data);
//     }

//     public function edit($id)
//     {
//         helper(['form']);

//         $filmModel = new FilmModel();

//         $data['film'] = $filmModel->where('id', $id)->first();

//         if ($this->request->getMethod() == 'post') {
//             $rules = [
//                 'titre' => 'required|min_length[3]|max_length[255]',
//                 'annee' => 'required|numeric',
//                 'realisateur' => 'required|min_length[3]|max_length[255]',
//                 'genre' => 'required|min_length[3]|max_length[255]',
//                 'resume' => 'required|min_length[10]'
//             ];

//             if ($this->validate($rules)) {
//                 $data = [
//                     'titre' => $this->request->getVar('titre'),
//                     'annee' => $this->request->getVar('annee'),
//                     'realisateur' => $this->request->getVar('realisateur'),
//                     'genre' => $this->request->getVar('genre'),
//                     'resume' => $this->request->getVar('resume')
//                 ];

//                 $filmModel->update($id, $data);

//                 return redirect()->to('/films');
//             } else {
//                 $data['validation'] = $this->validator;
//             }
//         }

//         echo view('film_edit', $data);
//     }

//     public function delete($id)
//     {
//         $filmModel = new FilmModel();
//         $filmModel->delete($id);

//         return redirect()->to('/films');
//     }
// }
 
namespace App\Controllers;

use App\Models\FilmModel;
use CodeIgniter\Controller;

class FilmsController extends Controller
{
    public function index()
    {
        $model = new FilmModel();
        $data = [
            'films' => $model->getFilms()
        ];
        echo view('films', $data);
    }

    public function create()
    {
        echo view('films/create');
    }

    public function store()
    {
        $model = new FilmModel();
        $model->save([
            'titre' => $this->request->getVar('titre'),
            'annee' => $this->request->getVar('annee'),
            'idMes' => $this->request->getVar('idMes'),
            'genre' => $this->request->getVar('genre'),
            'resume' => $this->request->getVar('resume'),
            'codePays' => $this->request->getVar('codePays'),
            'urlImage' => $this->request->getVar('urlImage')
        ]);
        return redirect()->to('/films');
    }

    public function edit($idFilm)
    {
        $model = new FilmModel();
        $data = [
            'film' => $model->getFilm($idFilm)
        ];
        echo view('films/edit', $data);
    }

    public function update()
    {
        $model = new FilmModel();
        $idFilm = $this->request->getVar('idFilm');
        $model->save([
            'idFilm' => $idFilm,
            'titre' => $this->request->getVar('titre'),
            'annee' => $this->request->getVar('annee'),
            'idMes' => $this->request->getVar('idMes'),
            'genre' => $this->request->getVar('genre'),
            'resume' => $this->request->getVar('resume'),
            'codePays' => $this->request->getVar('codePays'),
            'urlImage' => $this->request->getVar('urlImage')
        ]);
        return redirect()->to('/films');
    }

    public function delete($idFilm)
    {
        $model = new FilmModel();
        $model->delete($idFilm);
        return redirect()->to('/films');
    }
}

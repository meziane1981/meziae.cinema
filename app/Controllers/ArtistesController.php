<?php

namespace App\Controllers;

use App\Models\ArtisteModel;
use CodeIgniter\Controller;

class ArtistesController extends BaseController
{
    public function index()
    {
        $model = new ArtisteModel();
        $data['artistes'] = $model->getArtistes();
        echo view('artistes', $data);
    }

    public function create()
    {
        $model = new ArtisteModel();
        $data = [
            'nom' => $this->request->getPost('nom'),
            'prenom' => $this->request->getPost('prenom'),
            'anneeNaiss' => $this->request->getPost('anneeNaiss'),
        ];
        $model->save($data);
        return redirect()->to('/artistes');
    }

    public function update($id)
    {
        $model = new ArtisteModel();
        $data['artiste'] = $model->getArtiste($id);

        if ($this->request->getMethod() === 'post') {
            $data = [
                'id' => $id,
                'nom' => $this->request->getPost('nom'),
                'prenom' => $this->request->getPost('prenom'),
                'anneeNaiss' => $this->request->getPost('anneeNaiss'),
            ];
            $model->save($data);
            return redirect()->to('/artistes');
        }

        echo view('update_artiste', $data);
    }

    public function delete($id)
    {
        $model = new ArtisteModel();
        $model->delete($id);
        return redirect()->to('/artistes');
    }
}

<?php


// namespace App\Controllers;

// use App\Models\ProduitModel;
// use CodeIgniter\Controller;

// class ProduitController extends BaseController
// {
//     public function listproduit()
//     {
//         $produitModel = new ProduitModel();
//         $produits = $produitModel->findAll();

//         return view('listproduit', ['produits' => $produits]);
//     }

//     public function ajouteproduit()
//     {
//         return view('ajouteproduit');
//     }

//     public function insertProduit()
//     {
//         $produitModel = new ProduitModel();

//         $newProduit = [
//             'nom_produit' => $this->request->getPost('nom'),
//             'prix' => $this->request->getPost('prix'),
//         ];

//         $produitModel->insert($newProduit);

//         return redirect()->to('/listproduit');
//     }

//     public function modifierproduit($id)
//     {
//         $produitModel = new ProduitModel();
//         $produit = $produitModel->find($id);

//         if ($this->request->getMethod() === 'post') {
//             $updatedData = [
//                 'nom_produit' => $this->request->getPost('nom'),
//                 'prix' => $this->request->getPost('prix'),
//             ];

//             $produitModel->update($id, $updatedData);

//             return redirect()->to('/listproduit');
//         }

//         return view('modifierproduit', ['produit' => $produit]);
//     }

//     public function supprimerproduit($id)
//     {
//         $produitModel = new ProduitModel();
//         $produitModel->delete($id);

//         return redirect()->to('/listproduit');
//     }
// }




namespace App\Controllers;

use App\Models\ProduitModel;
use CodeIgniter\Controller;

class ProduitController extends BaseController
{
    public function listproduit()
    {
        $produitModel = new ProduitModel();
        $produits = $produitModel->findAll();

        return view('listproduit', ['produits' => $produits]);
    }

    public function ajouteproduit()
    {
        return view('ajouteproduit');
    }

    public function insertProduit()
    {
        $validation = \Config\Services::validation();

        $validation->setRules([
            'nom' => 'required',
            'prix' => 'required|numeric'
        ]);

        if ($validation->withRequest($this->request)->run()) {
            $produitModel = new ProduitModel();

            $newProduit = [
                'nom_produit' => $this->request->getPost('nom'),
                'prix' => $this->request->getPost('prix'),
            ];

            $produitModel->insert($newProduit);

            return redirect()->to('/listproduit');
        } else {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }
    }

    public function modifierproduit($id)
    {
        $produitModel = new ProduitModel();
        $produit = $produitModel->find($id);

        if ($this->request->getMethod() === 'post') {
            $validation = \Config\Services::validation();

            $validation->setRules([
                'nom' => 'required',
                'prix' => 'required|numeric'
            ]);

            if ($validation->withRequest($this->request)->run()) {
                $updatedData = [
                    'nom_produit' => $this->request->getPost('nom'),
                    'prix' => $this->request->getPost('prix'),
                ];

                $produitModel->update($id, $updatedData);

                return redirect()->to('/listproduit');
            } else {
                return redirect()->back()->withInput()->with('errors', $validation->getErrors());
            }
        }

        return view('modifierproduit', ['produit' => $produit]);
    }

    public function supprimerproduit($id)
    {
        $produitModel = new ProduitModel();
        $produitModel->delete($id);

        return redirect()->to('/listproduit');
    }
}


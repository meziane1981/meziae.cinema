<?php
// namespace App\Controllers;

// use App\Models\UtilisateurModel;

// class UtilisateurController extends BaseController
// {
//     public function create()
//     {
//         return view('<utilisateur/create>');
//     }

//     public function store()
//     {
//         $utilisateurModel = new UtilisateurModel();

//         // Récupération des données du formulaire
//         $email = $this->request->getVar('email');
//         $prenom = $this->request->getVar('prenom');
//         $nom = $this->request->getVar('nom');
//         $pseudo = $this->request->getVar('pseudo');
//         $password = $this->request->getVar('password');

//         // Validation des données
//         $validation =  \Config\Services::validation();
//         $validation->setRules([
//             'email' => 'required|valid_email|is_unique[utilisateur.email]',
//             'prenom' => 'required|min_length[3]',
//             'nom' => 'required|min_length[3]',
//             'pseudo' => 'required|min_length[3]|is_unique[utilisateur.pseudo]',
//             'password' => 'required|min_length[8]',
//         ]);
//         $validation->withRequest($this->request)->run();

//         if ($validation->getErrors()) {
//             // Affichage des erreurs de validation
//             return redirect()->back()
//                 ->withInput()
//                 ->with('errors', $validation->getErrors());
//         } else {
//             // Enregistrement de l'utilisateur
//             $data = [
//                 'email' => $email,
//                 'prenom' => $prenom,
//                 'nom' => $nom,
//                 'pseudo' => $pseudo,
//                 'password' => password_hash($password, PASSWORD_DEFAULT)
                    
//             ];
           
//             $utilisateurModel->save($data);
//             // var_dump($email);
//             // Redirection vers la page de succès
//             return redirect()->to('/utilisateur/success');
           
//         }
//     }

//     public function success()
//     {
//         return view('utilisateur/success');
//     }
// }

// namespace App\Controllers;

// use App\Models\UtilisateurModel;


// class UtilisateurController extends BaseController
// {
//     public function insertUser()
//     {
//         // Si le formulaire a été envoyé (posté)
//         if ($this->request->getMethod() === 'post') {
//             echo 'Formulaire posté';
//             $postData = $this->request->getPost();

//             // Chargement du modèle FormM
//             $formModel = new UtilisateurModel();

//             // Insertion des données dans la base de données
//             $formModel->insert($postData);

//             echo '<pre>';
//             print_r($postData);
//             echo '</pre>';
//         } else {
//             return view('utilisateur/form');
//         }
//     }


//     }


// namespace App\Controllers;

// use App\Models\UtilisateurModel;

// class UtilisateurController extends BaseController
// {
//     public function create()
//     {
//         return view('utilisateur/inscription');
//     }

//     public function store()
//     {
//         $utilisateurModel = new UtilisateurModel();

//         // Récupération des données du formulaire
//         $email = $this->request->getVar('email');
//         $prenom = $this->request->getVar('prenom');
//         $nom = $this->request->getVar('nom');
//         $pseudo = $this->request->getVar('pseudo');
//         $password = $this->request->getVar('password');

//         // Validation des données
//         $validation =  \Config\Services::validation();
//         $validation->setRules([
//             'email' => 'required|valid_email|is_unique[utilisateur.email]',
//             'prenom' => 'required|min_length[3]',
//             'nom' => 'required|min_length[3]',
//             'pseudo' => 'required|min_length[3]|is_unique[utilisateur.pseudo]',
//             'password' => 'required|min_length[8]',
//         ]);
//         $validation->withRequest($this->request)->getPost();

//         if ($validation->getErrors()) {
//             // Affichage des erreurs de validation
//             return redirect()->back()
//                 ->withInput()
//                 ->with('errors', $validation->getErrors());
//         } else {
//             // Enregistrement de l'utilisateur
//             $data = [
//                 'email' => $email,
//                 'prenom' => $prenom,
//                 'nom' => $nom,
//                 'pseudo' => $pseudo,
//                 'password' => password_hash($password, PASSWORD_DEFAULT)
                    
//             ];


//             $result = $utilisateurModel->insert($data);
//                         // if (!$result) {
//                         //     // Insertion a échoué
//                         //     return redirect()->back()
//                         //         ->withInput()
//                         //         ->with('errors', ['Une erreur est survenue lors de l\'enregistrement. Veuillez réessayer.']);
//                         // }
            
//                         // Redirection vers la page de succès
//                         return redirect()->to('utilisateur/success');   
//                     }
//                 }
            
//                 public function success()
//                 {
//                     return view('utilisateur/success');
//                 }
           
//     //         $utilisateurModel->insert($data);
//     //         // var_dump($email);
//     //         // Redirection vers la page de succès
//     //         return redirect()->to('utilisateur/success');
           
//     //     }
//     // }

//     // public function success()
//     // {
//     //     return view('utilisateur/success');
//     // }
// }

// namespace App\Controllers;

// use App\Models\UtilisateurModel;

// class UtilisateurController extends BaseController
// {
//     public function create()
//     {
//         return view('utilisateur/inscription');
//     }

//     public function store()
//     {
//         $utilisateurModel = new UtilisateurModel();

//         // Récupération des données du formulaire
//         $email = $this->request->getVar('email');
//         $prenom = $this->request->getVar('prenom');
//         $nom = $this->request->getVar('nom');
//         $pseudo = $this->request->getVar('pseudo');
//         $password = $this->request->getVar('password');

//         // Validation des données
//         $validation =  \Config\Services::validation();
//         $validation->setRules([
//             'email' => 'required|valid_email|is_unique[utilisateur.email]',
//             'prenom' => 'required|min_length[3]',
//             'nom' => 'required|min_length[3]',
//             'pseudo' => 'required|min_length[3]|is_unique[utilisateur.pseudo]',
//             'password' => 'required|min_length[8]',
//         ]);
//         $validation->withRequest($this->request)
//             ->run();

//         if ($validation->getErrors()) {
//             // Affichage des erreurs de validation
//             return redirect()->back()
//                 ->withInput()
//                 ->with('errors', $validation->getErrors());
//         } else {
//             // Enregistrement de l'utilisateur
//             $data = [
//                 'email' => $email,
//                 'prenom' => $prenom,
//                 'nom' => $nom,
//                 'pseudo' => $pseudo,
//                 'password' => password_hash($password, PASSWORD_DEFAULT)
//             ];
           
//             $result = $utilisateurModel->insert($data);
//             if (!$result) {
//                 // Insertion a échoué
//                 return redirect()->back()
//                     ->withInput()
//                     ->with('errors', ['Une erreur est survenue lors de l\'enregistrement. Veuillez réessayer.']);
//             }

//             // Redirection vers la page de succès
//             return redirect()->to('utilisateur/success');   
//         }
//     }

//     public function success()
//     {
//         return view('utilisateur/success');
//     }
// }




namespace App\Controllers;

use App\Models\UtilisateurModel;
// use CodeIgniter\Controller;

class UtilisateurController extends BaseController
{
    public function create()
    {
        return view('utilisateur/inscription');
    }

    public function store()
    {
        $utilisateurModel = new UtilisateurModel();

        // Récupération des données du formulaire
        $email = $this->request->getPost('email');
        $prenom = $this->request->getPost('prenom');
        $nom = $this->request->getPost('nom');
        $pseudo = $this->request->getPost('pseudo');
        $password = $this->request->getPost('password');

        // Validation des données
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'email' => 'required|valid_email|is_unique[utilisateur.email]',
            'prenom' => 'required|min_length[3]',
            'nom' => 'required|min_length[3]',
            'pseudo' => 'required|min_length[3]|is_unique[utilisateur.pseudo]',
            'password' => 'required|min_length[8]',
        ]);
        // $validation->withRequest($this->request)
        //     ->run();
        $validation->run($this->request->getPost());

        if ($validation->getErrors()) {
            // Affichage des erreurs de validation
            return redirect()->back()
                ->withInput()
                ->with('errors', $validation->getErrors());
        } else {
            // Enregistrement de l'utilisateur
            $data = [
                'email' => $email,
                'prenom' => $prenom,
                'nom' => $nom,
                'pseudo' => $pseudo,
                'password' => password_hash($password, PASSWORD_DEFAULT)
            ];

            $result = $utilisateurModel->insert($data);
            if (!$result) {
                // Insertion a échoué
                return redirect()->back()
                    ->withInput()
                    ->with('errors', ['Une erreur est survenue lors de l\'enregistrement. Veuillez réessayer.']);
            }

            // Redirection vers la page de succès
            return redirect()->to('utilisateur/success');   
        }
    }

    public function success()
    {
        return view('utilisateur/success');
    }

    public function index2()
    {
        return view('auth/login');
    }

    public function login()
    {
        $model = new UtilisateurModel();

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $user = $model->where('email', $email)->first();

        if (!$user || !password_verify($password, $user['password'])) {
            return redirect()->back()->withInput()->with('error', 'Adresse e-mail ou mot de passe invalide.');
        }

        // Set user session
        $this->session->set([
            'user_id' => $user['id'],
            // 'user_name' => $user['prenom'] . ' ' . $user['nom'],
            'user_email' => $user['email'],
            'logged_in' => true,
        ]);

        return redirect()->to('/');
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to('auth/login');
    }
}




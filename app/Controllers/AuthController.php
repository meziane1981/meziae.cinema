<?php

// namespace App\Controllers;

// use App\Models\UtilisateurModel;
// // use CodeIgniter\Controller;

// class AuthController extends BaseController
// {
//     public function index2()
//     {
//         return view('auth/login');
//     }

//     public function login()
//     {
//         $model = new UtilisateurModel();

//         $email = $this->request->getVar('email');
//         $password = $this->request->getVar('password');

//         $user = $model->where('email', $email)->first();

//         if (!$user || !password_verify($password, $user['password'])) {
//             return redirect()->back()->withInput()->with('error', 'Adresse e-mail ou mot de passe invalide.');
//         }

//         // Set user session
//         $this->session->set([
//             'user_id' => $user['id'],
//             'user_name' => $user['name'],
//             'user_email' => $user['email'],
//             'logged_in' => true,
//         ]);

//         return redirect()->to('/');
//     }

//     public function logout()
//     {
//         $this->session->destroy();
//         return redirect()->to('auth/connexion');
//     }
// }




// namespace App\Controllers;

// use App\Models\UtilisateurModel;
// use CodeIgniter\Controller;

// class AuthController extends BaseController
// {
//     public function index2()
//     {
//         return view('auth/login');
//     }

//     public function login()
//     {
//         $model = new UtilisateurModel();

//         $email = $this->request->getVar('email');
//         $password = $this->request->getVar('password');

//         $user = $model->where('email', $email)->first();

//         if (!$user || !password_verify($password, $user['password'])) {
//             return redirect()->back()->withInput()->with('error', 'Adresse e-mail ou mot de passe invalide.');
//         }

//         // Set user session
//         $this->session->set([
//             'user_id' => $user['id'],
//             // 'user_name' => $user['prenom'] . ' ' . $user['nom'],
//             'user_email' => $user['email'],
//             'logged_in' => true,
//         ]);

//         return redirect()->to('/');
//     }

//     public function logout()
//     {
//         $this->session->destroy();
//         return redirect()->to('/');
//     }
// }


namespace App\Controllers;

use App\Models\UtilisateurModel;
use CodeIgniter\Session\Session;


class AuthController extends BaseController
{
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
        $session = session();
        $session->set([
            'user_id' => $user['id'],
            // 'user_name' => $user['name'],
            'user_email' => $user['email'],
            'logged_in' => true,
        ]);
    
        return redirect()->to('/');
    }
    

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to('auth/connexion');
    }

    public function dashboard()
{
    return view('auth/dashboard');
}

}


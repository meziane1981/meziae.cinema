<?php

// namespace App\Models;

// use CodeIgniter\Model;

// class UtilisateurModel extends Model
// {
//     protected $table = 'utilisateur';
//     protected $primaryKey = 'id';
//     protected $allowedFields = ['email', 'prenom', 'nom', 'pseudo', 'password'];

//     protected $validationRules = [
//         'email' => 'required|valid_email|is_unique[utilisateur.email]',
//         'prenom' => 'required',
//         'nom' => 'required',
//         'pseudo' => 'required|is_unique[utilisateur.pseudo]',
//         'password' => 'required|min_length[6]',
        
//     ];
//     protected $validationMessages = [
//         'email' => [
//             'required' => 'L\'email est obligatoire.',
//             'valid_email' => 'L\'email doit être valide.',
//             'is_unique' => 'Cet email est déjà utilisé.'
//         ],
//         'prenom' => [
//             'required' => 'Le prénom est obligatoire.'
//         ],
//         'nom' => [
//             'required' => 'Le nom est obligatoire.'
//         ],
//         'pseudo' => [
//             'required' => 'Le pseudo est obligatoire.',
//             'is_unique' => 'Ce pseudo est déjà utilisé.'
//         ],
//         'password' => [
//             'required' => 'Le mot de passe est obligatoire.',
//             'min_length' => 'Le mot de passe doit contenir au moins 6 caractères.'
//         ]
        
//     ];
// }


// namespace App\Models;

// use CodeIgniter\Model;

// class  UtilisateurModel extends Model
// {
//     protected $table      = 'utilisateur';
//     protected $primaryKey = 'id';

//     protected $useAutoIncrement = true;

//     protected $returnType     = 'array';
//     protected $useSoftDeletes = false;

//     protected $allowedFields = ['nom', 'prenom', 'pseudo', 'email', 'password'];


//     public function form($postData){
//         $postData['password'] = password_hash($postData['password'],PASSWORD_BCRYPT);
//         return $this->insert($postData);
//     }


// }


namespace App\Models;

use CodeIgniter\Model;

class UtilisateurModel extends Model
{
    protected $table = 'utilisateur';
    protected $primaryKey = 'id';
    protected $allowedFields = ['email', 'prenom', 'nom', 'pseudo', 'password'];

    protected $validationRules = [
        'email' => 'required|valid_email|is_unique[utilisateur.email]',
        'prenom' => 'required',
        'nom' => 'required',
        'pseudo' => 'required|is_unique[utilisateur.pseudo]',
        'password' => 'required|min_length[6]',
    ];

    protected $validationMessages = [
        'email' => [
            'required' => 'L\'email est obligatoire.',
            'valid_email' => 'L\'email doit être valide.',
            'is_unique' => 'Cet email est déjà utilisé.'
        ],
        'prenom' => [
            'required' => 'Le prénom est obligatoire.'
        ],
        'nom' => [
            'required' => 'Le nom est obligatoire.'
        ],
        'pseudo' => [
            'required' => 'Le pseudo est obligatoire.',
            'is_unique' => 'Ce pseudo est déjà utilisé.'
        ],
        'password' => [
            'required' => 'Le mot de passe est obligatoire.',
            'min_length' => 'Le mot de passe doit contenir au moins 6 caractères.'
        ]
    ];
}

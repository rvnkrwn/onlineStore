<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';


    protected $allowedFields = [
        'id',
        'user_id',
        'firstname',
        'lastname',
        'image',
        'email',
        'password',
        'address1',
        'address2',
        'city',
        'postal_code',
        'province',
        'country',
        'status_user',
        'time_signup'
    ];

    protected $createdField  = 'time_signup';

    protected $validationRules = [
        'email'        => 'required|valid_email|is_unique[users.email]',
        'password'     => 'required|min_length[8]',
    ];
}
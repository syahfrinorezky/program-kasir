<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'kode_login';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'username',
        'password',
        'nama_lengkap',
        'level',
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'username' => 'required|is_unique[users.username]|max_length[50]',
        'password' => 'required|min_length[8]',
        'nama_lengkap' => 'required|max_length[50]',
        'level' => 'required',
    ];
    protected $validationMessages   = [
        'username' => [
            'required'   => 'Username dibutuhkan.',
            'is_unique'  => 'Username ini sudah terdaftar.',
            'max_length' => 'Username tidak boleh lebih dari 50 karakter.',
        ],
        'password' => [
            'required'   => 'Password dibutuhkan.',
            'min_length' => 'Password tidak boleh kurang dari 8 karakter.',
        ],
        'nama_lengkap' => [
            'required'   => 'Nama lengkap dibutuhkan.',
            'max_length' => 'Nama lengkap tidak boleh lebih dari 50 karakter.',
        ],
        'level' => [
            'required' => 'Level dibutuhkan.',
        ],
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}

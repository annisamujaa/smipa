<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['id', 'name', 'email', 'password', 'profil_pict', 'xp'];

    public function getUsers()
    {
        return $this->findAll();
    }

    public function getDescendingDataUser()
    {
        // Mengambil data dengan urutan ascending berdasarkan kolom tertentu
        return $this->orderBy('xp', 'desc')->findAll();
    }

    public function getUserById($id)
    {
        return $this->find($id);
        // return $this->getWhere(['id' => $id]);
    }

    protected $validationRules = [
        'name' => 'required',
        'email' => 'required|valid_email|is_unique[users.email]',
        'password' => 'required|min_length[8]'
    ];

    protected $validationMessages = [
        'email' => [
            'is_unique' => 'Sorry, That email has already been taken. Please choose another.'
        ]
    ];

    protected $skipValidation = false;
    protected $beforeInsert = ['hashPassword'];

    protected function hashPassword(array $data)
    {
        if (!isset($data['data']['password'])) {
            return $data;
        }

        $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        return $data;
    }
}

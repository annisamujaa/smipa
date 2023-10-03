<?php

namespace App\Models;

use CodeIgniter\Model;

class HewanModel extends Model
{
    protected $table = 'hewan';

    public function getUsers()
    {
        return $this->findAll();
    }
}

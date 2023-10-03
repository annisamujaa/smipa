<?php

namespace App\Models;

use CodeIgniter\Model;

class TumbuhanModel extends Model
{
    protected $table = 'tumbuhan';

    public function getUsers()
    {
        return $this->findAll();
    }
}
